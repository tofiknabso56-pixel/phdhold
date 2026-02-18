<html lang="en" data-dpr="1" style="font-size: 38.5px;">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no">
    <title>{{env('APP_NAME')}}</title>
    <link href="{{asset('public')}}/css/app.6aec9c38.css" rel="preload" as="style">
    <link href="{{asset('public')}}/css/chunk-vendors.f0bcea2c.css" rel="preload" as="style">
    <link href="{{asset('public')}}/css/chunk-vendors.f0bcea2c.css" rel="stylesheet">
    <link href="{{asset('public')}}/css/app.6aec9c38.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/css/chunk-3855a36a.7c588efe.css">
    <style>
        .van-button--disabled {
            opacity: 1;
        }
        .login-container .login-bg[data-v-13d8e1ac] {
            width: 96%;
        }
        .login-container .login-form[data-v-13d8e1ac] {
            width: 85%;
            margin: auto;
        }
    </style>
</head>
<body style="font-size: 12px;">
@include('alert-message')
<form action="{{url('login')}}" method="post">
    @csrf
    <div data-v-cfeb29f2="" id="app">
        <div data-v-cfeb29f2="" class="placeholder_top"></div>
        <div data-v-13d8e1ac="" data-v-cfeb29f2="" class="login-container" style="height: 727px;">
            <div data-v-13d8e1ac="" class="login-a"></div>
            <div data-v-13d8e1ac="" class="login-bg">
                <div data-v-13d8e1ac="" class="login-logo">Welcome</div>
                <div data-v-13d8e1ac="" class="login-form">
                    <form data-v-13d8e1ac="" class="van-form" action="{{url('login')}}" method="post">
                        @csrf
                        <div data-v-13d8e1ac="" class="van-cell van-field">
                            <div class="van-cell__title van-field__label"><span>+880</span></div>
                            <div class="van-cell__value van-field__value">
                                <div class="van-field__body"><input type="text" inputmode="decimal" name="phone"
                                                                    placeholder="Cellphone number"
                                                                    class="van-field__control"></div>
                            </div>
                        </div>
                        <div data-v-13d8e1ac="" class="line"></div>
                        <div data-v-13d8e1ac="" class="password-field mt30 van-cell van-field">
                            <div class="van-cell__value van-cell__value--alone van-field__value">
                                <div class="van-field__body"><input type="password" name="password"
                                                                    placeholder="Input password"
                                                                    class="van-field__control">
                                </div>
                            </div>
                        </div>
                        <div data-v-13d8e1ac="" class="line"></div>
                        <div data-v-13d8e1ac="" class="buttons mt20">
                            <div data-v-13d8e1ac="" class="button1"
                                 onclick="window.location.href='{{url('member/invitation/login&register')}}'">
                                Register
                            </div>
                            <div data-v-13d8e1ac="" class="button2">
                                Sign in？
                            </div>
                        </div>
                        <button data-v-13d8e1ac="" type="submit"

                                class="login-btn mt50 van-button van-button--info van-button--normal van-button--disabled van-button--block van-button--round is_disabled_btn">
                            <div data-v-13d8e1ac="" class="van-button__content"><span data-v-13d8e1ac=""
                                                                                      class="van-button__text">Sign in</span>
                            </div>
                        </button>
                        <div data-v-13d8e1ac="" class="download mt20">
                            Download App
                        </div>
                    </form>
                </div>
            </div>
            <img data-v-13d8e1ac="" src="{{asset('public')}}/img/login-bottom.7ecee693.png" class="bottom-bg">
        </div>
    </div>
</form>
</body>
</html>
