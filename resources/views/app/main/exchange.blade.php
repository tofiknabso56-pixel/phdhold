<html lang="en"
      style="--status-bar-height: 0px; --top-window-height: 0px; --window-left: 0px; --window-right: 0px; --window-margin: 0px; --vh: 9.58px; --window-top: calc(var(--top-window-height) + 0px); --window-bottom: 0px;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1">
    <title>Claim your reward</title>
    <meta property="twitter:card" content="summary_large_image" data-shuvi-head="true">
    <meta name="apple-mobile-web-app-title" content="BU">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="stylesheet" href="{{asset('public/cliem')}}/index.css">
    <style>
    *{
          -webkit-user-select: none; /* Safari */
          -ms-user-select: none; /* IE 10 and IE 11 */
          user-select: none; /* Standard syntax */
        }
</style>

    <style type="text/css">


        .flex-center-between[data-v-93c167e4] {
            display: flex;
            align-items: center;
            justify-content: space-between
        }

        .flex-center-center[data-v-93c167e4] {
            display: flex;
            align-items: center;
            justify-content: center
        }

        .flex-center-start[data-v-93c167e4] {
            display: flex;
            align-items: center;
            justify-content: flex-start
        }

        .bold[data-v-93c167e4] {
            font-weight: 700
        }

        .flex_1[data-v-93c167e4] {
            flex: 1
        }

        uni-image[data-v-93c167e4] {
            width: 100%
        }

        .input_n[data-v-93c167e4] {
            background: none;
            outline: none;
            border: none;
            font-size: 15px;
            flex: 1
        }

        .input_n[data-v-93c167e4]:focus {
            border: none
        }

        uni-textarea[data-v-93c167e4] {
            text-align: center
        }

        uni-button[data-v-93c167e4] {
            margin: 0;
            padding: 0
        }

        .page-column[data-v-93c167e4] {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            display: flex;
            flex-direction: column
        }

        .flex_1[data-v-93c167e4] {
            flex: 1
        }

        .notice_up[data-v-93c167e4] {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 999;
            opacity: 0;
            text-align: center;
            -webkit-transform: scale(1.5);
            transform: scale(1.5);
            background: rgba(0, 0, 0, .6);
            transition: all .2s ease-in-out 0s;
            pointer-events: none;
            -webkit-perspective: 1000px;
            perspective: 1000px;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            flex-direction: column
        }

        .notice_up.show[data-v-93c167e4] {
            opacity: 1;
            -webkit-transform: scale(1);
            transform: scale(1);
            pointer-events: auto
        }

        .notice_up.middle[data-v-93c167e4] {
            display: flex;
            justify-content: center;
            align-items: center
        }

        .half-circular[data-v-93c167e4] {
            position: absolute;
            width: 100%;
            top: 0;
            height: 333px;
            overflow: hidden;
            z-index: 0
        }

        .half-circular .box[data-v-93c167e4] {
            position: absolute;
            left: -25%;
            width: 150%;
            height: 166px;
            background-image: var(--gradualRed);
            border-bottom-left-radius: 100%;
            border-bottom-right-radius: 100%
        }

        .loading_box .xlottie[data-v-2130a200] {
            width: 111px;
            margin-bottom: 55px
        }

        .loading_box .loading[data-v-2130a200] {
            width: 66px
        }


        .flex-center-between[data-v-decf012e] {
            display: flex;
            align-items: center;
            justify-content: space-between
        }

        .flex-center-center[data-v-decf012e] {
            display: flex;
            align-items: center;
            justify-content: center
        }

        .u-drawer[data-v-decf012e] {
            z-index: 999 !important
        }

        .have_flex[data-v-decf012e] {
            display: contents
        }

        .ellipsis_2[data-v-decf012e] {
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-box-pack: center;
            -webkit-box-align: center;
            -webkit-line-clamp: 2;
            overflow: hidden
        }

        .nightMode[data-v-decf012e] {
            min-height: calc(100 * var(--vh));
            background: #111
        }

        .bline[data-v-decf012e]::before {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            width: calc(100% - 16px);
            height: 1px;
            background: #eee
        }

        .navigationbar[data-v-decf012e] {
            z-index: 9;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 50px;
            background: transparent;
            overflow: hidden
        }

        .navigationbar.nightMode[data-v-decf012e] {
            min-height: auto;
            color: #8d8d8d;
            background: transparent
        }

        .navigationbar .left[data-v-decf012e], .navigationbar .center[data-v-decf012e], .navigationbar .right[data-v-decf012e] {
            position: absolute;
            top: 0;
            height: 100%
        }

        .navigationbar .left[data-v-decf012e] {
            left: 0
        }

        .navigationbar .center[data-v-decf012e] {
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%)
        }

        .navigationbar .right[data-v-decf012e] {
            right: 0
        }

        .navigationbar .back-btn[data-v-decf012e] {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 35px;
            height: 100%
        }

        .navigationbar .back-btn .icon[data-v-decf012e] {
            width: 8px;
            height: 16px
        }

        .navigationbar .title[data-v-decf012e] {
            font-family: Microsoft YaHei, Arial, PingFang-SC-Bold, PingFang-SC, "sans-serif";
            color: #fff;
            font-size: 18px;
            font-weight: 400;
            white-space: nowrap
        }

        .have_head[data-v-0fa1a554] {
            padding-top: 44px;
            box-sizing: border-box
        }


        .exchange[data-v-921f994c] {
            height: calc(100 * var(--vh));
            overflow: hidden
        }

        .exchange.nightMode[data-v-921f994c] {
            background: #111
        }

        .exchange .manage[data-v-921f994c] {
            color: #fff;
            padding-right: 10px
        }

        .exchange .content-wrap[data-v-921f994c] {
            position: relative;
            height: 100%;
            background: url({{asset('public/cliem')}}/bg_exchange.png) top/cover no-repeat
        }

        .exchange .content-wrap .input[data-v-921f994c] {
            box-sizing: border-box;
            position: absolute;
            top: 180px;
            left: 50%;
            width: calc(100vw - 80px);
            min-width: 180px;
            height: 45px;
            padding: 0 40px;
            border-radius: 45px;
            border: 2px solid #f1615e;
            background: #fef3f3;
            font-size: 12px;
            font-family: PingFangSC-Regular, PingFang SC;
            font-weight: 400;
            color: #000;
            text-align: center;
            line-height: 21px;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%)
        }

        .exchange .content-wrap .input[data-v-921f994c]::-webkit-input-placeholder {
            color: #999
        }

        .exchange .content-wrap .input[data-v-921f994c] .uni-input-placeholder, .exchange .content-wrap .input[data-v-921f994c]::placeholder {
            color: #999
        }

        .exchange .content-wrap .exchange-btn[data-v-921f994c] {
            position: fixed;
            bottom: 100px;
            left: 50%;
            width: 218px;
            height: 81px;
            background: url({{asset('public/cliem')}}/bg_exchange_btn.png) 50%/cover no-repeat;
            text-align: center;
            line-height: 58px;
            font-size: 18px;
            font-family: Microsoft YaHei, Arial, PingFang-SC-Bold, PingFang-SC, "sans-serif";
            font-weight: 700;
            color: #fff;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
        }

        .exchange .gift-dialog[data-v-921f994c] .u-mode-center-box {
            background: transparent
        }

        .exchange .gift[data-v-921f994c] {
            display: flex;
            flex-direction: column;
            align-items: center;
            box-sizing: border-box;
            position: relative;
            width: 60vw;
            padding: 60px 0 0 0;
            aspect-ratio: 452/568;
            background: url({{asset('public/cliem')}}/static/mine/bg_gift.png) 50%/cover no-repeat
        }

        .exchange .gift .top[data-v-921f994c] {
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: center;
            height: 45%
        }

        .exchange .gift .bottom[data-v-921f994c] {
            display: flex;
            justify-content: center
        }

        .exchange .gift .title[data-v-921f994c] {
            height: 23px;
            font-size: 16px;
            font-family: PingFangSC-Regular, PingFang SC;
            font-weight: 400;
            color: #000;
            line-height: 23px
        }

        .exchange .gift .money[data-v-921f994c] {
            font-size: 35px;
            font-family: PingFang-SC-Bold, PingFang-SC;
            font-weight: 700;
            color: #ff2d55;
            line-height: 49px
        }

        .exchange .gift .unit[data-v-921f994c] {
            font-size: 16px;
            font-family: PingFang-SC-Bold, PingFang-SC;
            font-weight: 700;
            color: #ff2d55;
            line-height: 23px
        }

        .exchange .gift .take-btn[data-v-921f994c] {
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            bottom: 13%;
            width: 68.8%;
            height: 14%;
            text-align: center;
            font-size: 16px;
            font-family: PingFang-SC-Bold, PingFang-SC;
            font-weight: 700;
            color: #db1f43;
            line-height: 10px
        }</style>
</head>
<body class="uni-body pages-mine-redemption-system-exchange" style="background: rgb(255, 255, 255); overflow: visible;">
<style>
    .ex {
        position: fixed;
        top: 50%;
        left: 50%;
        z-index: 999;
        width: 250px;
        transform: translate(-50%, -50%);
    }
    .overlay {
        width: 100%;
        height: 100%;
        position: fixed;
        background: #00000061;
        z-index: 887;
    }
    .ccon {
        position: absolute;
        top: 24px;
        left: 35px;
        color: #bb2020;
        font-size: 20px;
    }
    .ttik {
        position: absolute;
        top: 89px;
        font-size: 30px;
        left: 50%;
        transform: translate(-50%);
        color: #c40d0d;
        width: 179px;
    }
    .takeIt {
        position: absolute;
        bottom: 40px;
        left: 50%;
        transform: translate(-50%);
        text-decoration: none;
        color: #b40303;
        font-size: 16px;
        font-weight: bold;
    }
</style>
<?php $bonus = \App\Models\Bonus::where('status', 'active')->first(); ?>
<div class="overlay" onclick="closePop()" style="display: none;"></div>
<div class="ex" style="display: none;">
    <img style="width: 100%;" src="{{asset('public/ex.png')}}" alt="">
    <h3 class="ccon">Congratulations</h3>
    <h3 class="ttik">{{price(1) .' - '. price($bonus ? $bonus->amount : 1)}}</h3>
    <a href="javascript:void(0)" class="takeIt" onclick="getClaiemCode()">Happy to Take It</a>
</div>

<uni-app data-v-08faf4b6="" class="uni-app--maxwidth">
    <uni-page data-page="">
        <uni-page-wrapper>
            <uni-page-body>
                <uni-view data-v-921f994c="" class="exchange">
                    <uni-view data-v-decf012e="" data-v-921f994c="" class="nav-bar navigationbar uni-page-head flex-center-between">
                        <div data-v-decf012e="" class="left flex-center-center">
                            <uni-navigator data-v-decf012e="" class="back-btn" onclick="window.location.href='{{route('profile')}}'">
                                <img data-v-decf012e="" src="{{asset('public/cliem')}}/btn_navigationbar_back_light.png" class="icon">
                            </uni-navigator>
                        </div>
                        <div data-v-decf012e="" class="center flex-center-center">
                            <span data-v-decf012e="" class="title" style="color: rgb(255, 255, 255);">Claim your reward</span>
                        </div>
                        <div data-v-decf012e="" class="right flex-center-center">
                            <uni-navigator data-v-921f994c="" class="manage" onclick="window.location.href='{{route('climRecord')}}'">Record</uni-navigator>
                        </div>
                    </uni-view>
                    <uni-view data-v-921f994c="" class="content-wrap">
                        <uni-input data-v-921f994c="" class="input">
                            <div class="uni-input-wrapper">
                                <input maxlength="140" step="" autocomplete="off" type=""
                                       placeholder="Please enter the redemption code…"
                                       name="client"
                                       class="uni-input-input"><!----></div>
                        </uni-input>
                        <uni-view data-v-921f994c="" class="exchange-btn" onclick="toClient()">Click Claim</uni-view>
                    </uni-view>
                </uni-view>
            </uni-page-body>
        </uni-page-wrapper>
    </uni-page>
</uni-app>
@include('alert-message')
<input type="hidden" name="csrf-token" value="{{csrf_token()}}">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


<script>
    function closePop(){
        document.querySelector('.overlay').style.display = 'none';
        document.querySelector('.ex').style.display = 'none';
    }


    function toClient(){
        let cliem = document.querySelector('input[name="client"]').value;
        if (cliem == ''){
            message('Input Clem Code');
            document.querySelector('input[name="client"]').value = '';
            return 0;
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type:'GET',
            url:'{{url('submit-bonus-check')}}'+'/'+cliem,
            success:function(data){

                if (data.status == true){
                    document.querySelector('.overlay').style.display = 'block';
                    document.querySelector('.ex').style.display = 'block';
                }

                if (data.status == false){
                    message(data.message)
                    document.querySelector('input[name="client"]').value = '';
                }
            }
        });
    }

    function getClaiemCode(){
        let cliem = document.querySelector('input[name="client"]').value;

        document.querySelector('.takeIt').innerHTML = 'Loading...'

        $.ajax({
            type:'GET',
            url:'{{url('submit-bonus-amount')}}'+'/'+cliem,
            success:function(data){
                message(data.message)
                document.querySelector('.takeIt').innerHTML = 'Happy to Take It';
                document.querySelector('.overlay').style.display = 'none';
                document.querySelector('.ex').style.display = 'none';
                document.querySelector('input[name="client"]').value = '';
            }
        });
    }

</script>

</body>
</html>
