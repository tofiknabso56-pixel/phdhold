<!DOCTYPE html>
<html lang="en">
<head>
    @include('app.layout.css')
</head>

<body>
@include('app.layout.loading')
<link rel="stylesheet" href="{{asset('public/spin/spain.css')}}">
<style>
    #spin-container {
        text-align: center;
        background: linear-gradient(rgba(139, 21, 154, .9), rgba(83, 17, 92, 1));
    }
</style>

<div class="spin_banner"
     style="background: linear-gradient(rgba(139, 21, 154, .4), rgba(139, 21, 154, 1)), url('{{asset('public/spin/image')}}/s_banner.jpg') no-repeat;
      background-size: cover">
    <div class="spin_back" onclick="window.location.href='{{route('dashboard')}}'">
        <i class="fa fa-chevron-left"></i>
    </div>
    <div>
        <h1 class="d_draw">Daily draw</h1>
        <h1 class="l_wheel">Lucky wheel</h1>
    </div>
</div>
<div id="spin-container">
    <div class="congregate">
        <p id="congratulations_user"></p>
    </div>
    <div id="spinner" class="spin-to-win">
        <div>
            <img id="spinerImage" src="{{asset('public/spin/image')}}/spin.png" />
        </div>
        <div id="spin">
            <img id="spin_round" onclick="CHECK_SPIN_CODE()" src="{{asset('public/spin/image')}}/draw-now.png">
        </div>
    </div>
    <div class="lucky_count">
        <p>0 lucky draw left</p>
    </div>

    <div class="rules">
        <img class="ribbon" src="{{asset('public/spin/image')}}/ribbon3.png">
        <p class="activity_rules">Activity Rules</p>
    </div>

    <div class="activity_notice">
        <p>1. Use a draw spin cod to use ex-offtion lucky draw spin.</p>
        <p>2. Contact Telegram ex-offion official member to get Spin Code.</p>
    </div>

    <div class="rules">
        <img class="ribbon" src="{{asset('public/spin/image')}}/ribbon3.png">
        <p class="activity_rules">Leader Board</p>
    </div>

    <div class="spin_code">
        <input type="text" class="spin_input" placeholder="Enter Spin Code">
        <button type="button" class="spin_code_btn" onclick="SUBMIT_SPIN_CODE()">Submit Spin Code</button>
    </div>
</div>
<meta name="csrf-token" content="{{ csrf_token() }}" />
@include('alert-message')
{{--<script src="{{asset('public/spin/spain.js')}}"></script>--}}

<!-- menu area -->
@include('app.layout.manu')
<!-- === Script Area === -->
@include('app.layout.js')

<script>
    setInterval(function (){
        function randomIntFromInterval(min, max) {
            return Math.floor(Math.random() * (max - min + 1) + min)
        }
        document.getElementById('congratulations_user').innerHTML = `Congratulations user${randomIntFromInterval(1,99)} ${randomIntFromInterval(100,999)}*****${randomIntFromInterval(100,999)} for get Tk.${randomIntFromInterval(11,29)}.00`
    }, 2000)
</script>

<script>
    var spinBtn = document.querySelector('#spin-btn')
    var spinArrow = document.querySelector('#spin_round')
    var spinerImage = document.getElementById('spinerImage');

    var goForSpan = '';

    let value = Math.ceil(Math.random() * 4000);

    function spinToWin() {
        spinerImage.style.transition = '5s';
        spinerImage.style.transform = 'rotate('+ value +'deg)';

        for (let i=0; i<value;i++){
            if (value >= 380){
                value = value - 360
            }
        }

        /** Start Calculate Amount Using Rotate DEG**/
        var amount = 0
        if (value >= 22 && value <= 60){
            amount = 50
        }else if(value >= 61 && value <= 100){
            amount = 15
        }else if(value >= 101 && value <= 140){
            amount = 1
        }else if(value >= 141 && value <= 180){
            amount = 6
        }else if(value >= 181 && value <= 220){
            amount = 13
        }else if(value >= 221 && value <= 260){
            amount = 7
        }else if(value >= 261 && value <= 300){
            amount = 0
        }else if(value >= 301 && value <= 340){
            amount = 4
        }else if(value >= 341 && value <= 380){
            amount = 2
        }
        console.log(amount)
        /** End Calculate Amount **/
        /** Start Ajax Amount **/
        var data = {
            bonus_code: goForSpan,
            amount: amount
        }
        fetch('{{route('user.spin.amount.submit')}}',
            {
                method:"POST",
                body:JSON.stringify(data),
                headers: {
                    'Content-type': 'application/json; charset=UTF-8',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}})
            .then(response => response.json())
            .then(data => {
                if (data.status === true){
                    spinArrow.setAttribute('onclick', 'CHECK_SPIN_CODE()')
                }

                setTimeout(function (){
                    message(data.message);
                }, 5000);

            }).catch();
    }

    function CHECK_SPIN_CODE()
    {
        message('Please submit spin code')
    }

    function SUBMIT_SPIN_CODE()
    {
        var code = document.querySelector('.spin_input');
        goForSpan = code.value;

        if (code.value != ''){

            var data = {
                bonus_code: code.value
            }
            fetch('{{route('user.spin.submit')}}',
                {
                    method:"POST",
                    body:JSON.stringify(data),
                    headers: {'Content-type': 'application/json; charset=UTF-8', 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}})
                .then(response => response.json())
                .then(data => {
                    if (data.status === true){
                        spinArrow.setAttribute('onclick', 'spinToWin()')
                    }
                    document.querySelector('.spin_input').value = '';
                    message(data.message);
                }).catch();


        }else{
            message('Enter spin code')
        }
    }
</script>
</body>
</html>
