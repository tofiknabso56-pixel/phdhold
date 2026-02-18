<style>
    .message {
        position: fixed;
        top: 50%;
        left: 50%;
        background: #000000ad;
        width: 120px;
        height: 120px;
        transform: translate(-50%, -50%);
        border-radius: 10px;
        text-align: center;
        transition: .5s;
        overflow: hidden;
        opacity: 0;
        z-index: -1;
    }
    .message img {
        filter: invert(1);
        width: 40px !important;
    }
    .message p {
        color: #fff;
        font-size: 17px;
        font-weight: 400;
    }
</style>

<div class="message">
    <div class="messageImg">

    </div>
    <p class="messageText">Success</p>
</div>


<script>


    function openMessage(type, message){
        document.querySelector('.message').style.opacity = '1';
        document.querySelector('.message').style.zIndex = '999';
        document.querySelector('.message').style.transition = '.4s';

         if (type === 'success'){
             document.querySelector('.messageImg').innerHTML = `<img style="width: 100%;margin-top: 20px;" src="{{asset('public/check.png')}}" alt="">`;
         }
        if (type === 'error'){
            document.querySelector('.messageImg').innerHTML = `<img style="width: 100%;margin-top: 30px;filter: unset;width:30px !important;" src="{{asset('public/close.png')}}" alt="">`;
        }
         document.querySelector('.messageText').innerHTML = message;
    }

    setTimeout(function (){
        document.querySelector('.message').style.opacity = '0';
        document.querySelector('.message').style.zIndex = '-1';
        document.querySelector('.message').style.transition = '.4s';
    }, 1000)
</script>
