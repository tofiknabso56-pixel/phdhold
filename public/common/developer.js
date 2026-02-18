
//Image Previews
function showPreview(event){
    if(event.target.files.length > 0){
        var src = URL.createObjectURL(event.target.files[0]);
        var preview = document.getElementById("file-ip-1-preview");
        preview.src = src;
        preview.style.display = "block";
    }
}


//Create Slug
function create_slug_en(data)
{
    document.getElementById('slug_en').value = data.toLowerCase()
        .trim()
        .replace(/[^\w\s-]/g, '')
        .replace(/[\s_-]+/g, '-')
        .replace(/^-+|-+$/g, '')
}//Create Slug
function create_slug_bn(data)
{
    document.getElementById('slug_bn').value = data.toLowerCase()
        .trim()
        .replace(/[^\w\s-]/g, '')
        .replace(/[\s_-]+/g, '-')
        .replace(/^-+|-+$/g, '')
}

//get csrf token
function csrf()
{
    return document.querySelector('meta[name="csrf-token"]').getAttribute('content');
}

function status(_this, id, table)
{
    // data to be sent to the POST request
    let data = {
        id: id,
        table: table,
        status: _this.checked === true ? 'active' : 'inactive'
    }

    var csrfToken = csrf();

    fetch('table/status', {
        method: "POST",
        body: JSON.stringify(data),
        headers: {
            "Content-type": "application/json; charset=UTF-8",
            'X-CSRF-TOKEN': csrfToken
        }
    })
        .then(response => response.json())
        .then(res => {
            //must have
            var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });

            if (res.status === true){
                Toast.fire({
                    icon: 'success',
                    title: res.msg
                })
            }else
            {
                Toast.fire({
                    icon: 'error',
                    title: res.msg
                })
            }
        })
        .catch(err => console.log(err));
}

//Summernote
$('.summernote').summernote({
    placeholder: 'Write your currect input...',
    tabsize: 2,
    height: 200
});

//Mobile Number filter
function phoneNumberChecker(value)
{
    let message = document.getElementById('phoneNumberValidatorMessage');
    let loginPhoneNumberInput = document.getElementById('loginPhoneNumber');
    let loginContinueBtn = document.getElementById('loginContinueBtn');
    if (value.length == 10){
        loginPhoneNumberInput.style.border = '1px solid #fed500 !important';
        message.innerHTML = '';
        if (loginContinueBtn.classList.contains('disabled')){
            loginContinueBtn.classList.remove('disabled')
        }
    }else
    {
        message.innerHTML = `<small class="text-danger">Please enter a valid phone number.</small>`;

        if (!loginContinueBtn.classList.contains('disabled')){
            loginContinueBtn.classList.add('disabled')
        }
    }
    if (value.length < 1)
    {
        message.innerHTML = '';
    }
}








