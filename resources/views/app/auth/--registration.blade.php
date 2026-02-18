<!doctype html>
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
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/css/chunk-48c196fe.bdd4d2bc.css">
    <style>
        .register-container[data-v-7217d03a] {
            height: 100vh;
        }
        .register-container .login-bg[data-v-7217d03a] {
            width: 96%;
        }
        .register-container .login-form[data-v-7217d03a] {
            width: 85%;
            margin: auto;
        }
    </style>
</head>
<body style="font-size: 12px;">
<div data-v-cfeb29f2="" id="app">
    <div data-v-cfeb29f2="" class="placeholder_top"></div>
    <div data-v-cfeb29f2="" id="Layout" class="layout" style="height: 343px;">
        <header>
            <div class="header back-opacity ">
                <div class="van-nav-bar">
                    <div class="van-nav-bar__content">
                        <div class="van-nav-bar__left" onclick="window.location.href='{{url('login')}}'"><i class="van-icon van-icon-arrow-left"></i></div>
                        <div class="van-nav-bar__title van-ellipsis"></div>
                    </div>
                </div>
            </div>
            <div class="placeholder"></div>
        </header>
        <div data-v-7217d03a="" class="register-container child-view">
            <div data-v-7217d03a="" class="login-a"></div>
            <div data-v-7217d03a="" class="login-bg">
                <div data-v-7217d03a="" class="login-logo">Welcome!</div>
                <div data-v-7217d03a="" class="login-form">
                    <form data-v-7217d03a="" action="{{url('register')}}" method="post" class="van-form">
                        @csrf
                        <div data-v-7217d03a="" class="van-cell van-field">
                            <div class="van-cell__title van-field__label"><span>+880</span></div>
                            <div class="van-cell__value van-field__value">
                                <div class="van-field__body"><input type="text" inputmode="decimal" name="phone"
                                                                    placeholder="Cellphone number"
                                                                    class="van-field__control"></div>
                            </div>
                        </div>
                        <div data-v-7217d03a="" class="line"></div>
                        <div data-v-7217d03a="" class="line"></div>
                        <div data-v-7217d03a="" class="padleft mt10 van-cell van-field">
                            <div class="van-cell__value van-cell__value--alone van-field__value">
                                <div class="van-field__body"><input type="password" name="password"
                                                                    placeholder="Password" class="van-field__control">
                                </div>
                            </div>
                        </div>
                        <div data-v-7217d03a="" class="line"></div>
                        <div data-v-7217d03a="" class="padleft mt10 van-cell van-field">
                            <div class="van-cell__value van-cell__value--alone van-field__value">
                                <div class="van-field__body"><input type="password" placeholder="Confirm password"
                                                                    name="confirm_password"
                                                                    class="van-field__control"></div>
                            </div>
                        </div>
                        <div data-v-7217d03a="" class="line"></div>
                        <div data-v-7217d03a="" class="padleft mt10 van-cell van-field">
                            <div class="van-cell__value van-cell__value--alone van-field__value">
                                <div class="van-field__body"><input type="text" name="ref_by"
                                                                    placeholder="invitation code"
                                                                    value="{{isset($ref_by) && !empty($ref_by) && $ref_by != null ? $ref_by : rand(0,9999).rand(0,9999)}}"
                                                                    class="van-field__control"></div>
                            </div>
                        </div>
                        <div data-v-7217d03a="" class="line"></div>
                        <div data-v-7217d03a="" class="buttons mt20">
                            <div data-v-7217d03a="" class="button1"
                                 onclick="window.location.href='{{url('login')}}'">
                                Sign in
                            </div>
                            <div data-v-7217d03a="" class="button2">
                                Sign in？
                            </div>
                        </div>
                        <button data-v-7217d03a="" type="submit"
                                class="login-btn mt50 van-button van-button--info van-button--normal van-button--block van-button--round">
                            <div data-v-7217d03a="" class="van-button__content"><span data-v-7217d03a=""
                                                                                      class="van-button__text">Register</span>
                            </div>
                        </button>
                        <div data-v-7217d03a="" class="download mt20">
                            Download App
                        </div>
                    </form>
                </div>
            </div>
            <img data-v-7217d03a="" src="{{asset('public')}}/img/login-bottom.7ecee693.png" class="bottom-bg"></div>
    </div>
</div>
@include('alert-message')

</body>
</html>
