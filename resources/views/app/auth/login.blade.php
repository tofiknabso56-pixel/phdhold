<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{env('APP_NAME')}}</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, viewport-fit=cover">
    <link rel="stylesheet" href="{{asset('public/login')}}/static/index.2da1efab.css">
    <link rel="stylesheet" href="{{asset('public/login')}}/static/login.css">
</head>
<body class="uni-body pages-login-phone_login">
<form action="{{url('login')}}" method="post">
    @csrf
<uni-app class="uni-app--maxwidth">
    <uni-page data-page="pages/login/phone_login">
        <uni-page-wrapper>
            <uni-page-body>
                <uni-view data-v-79813222="" class="phone_login">
                    <uni-view data-v-79813222="" class="status_bar"></uni-view>
                    <uni-view data-v-79813222="" class="close">X</uni-view>
                    <uni-view data-v-79813222="" class="logo">
                        <uni-image data-v-79813222="">
                            <div
                                style="background-image: url({{asset('public/login')}}/static/img/2e4127505100e1ff6f44d3d34c60dcef.png); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
                            <img src="{{asset('public/login')}}/static/img/2e4127505100e1ff6f44d3d34c60dcef.png"
                                 draggable="false"></uni-image>
                    </uni-view>
                    <uni-view data-v-79813222="" class="phone_text" style="width: 100%; margin: 16px 0px;"><font
                            style="vertical-align: inherit;"><font style="vertical-align: inherit;">Your financial expert
                            </font></font></uni-view>
                    <uni-view data-v-79813222="" class="input_1 view_input">
                        <uni-image data-v-79813222="" class="icos">
                            <div
                                style="background-image: url({{asset('public/login')}}/static/img/mobile.e816831b.png); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
                            <img src="{{asset('public/login')}}/static/img/mobile.e816831b.png" draggable="false">
                        </uni-image>
                        +
                        <uni-input data-v-79813222="">
                            <div class="uni-input-wrapper">
                                <input maxlength="11" step="0.000000000000000001" pattern="[0-9]*"
                                       name="phone"
                                       placeholder="cell phone number" autocomplete="off" type="number"
                                       class="uni-input-input"></div>
                        </uni-input>
                    </uni-view>
                    <uni-view data-v-79813222="" class="view_input">
                        <uni-image data-v-79813222="" class="icos">
                            <div
                                style="background-image: url({{asset('public/login')}}/static/img/pass.e34754cc.png); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
                            <img src="{{asset('public/login')}}/static/img/pass.e34754cc.png" draggable="false">
                        </uni-image>
                        <uni-input data-v-79813222="">
                            <div class="uni-input-wrapper">
                                <input maxlength="20" step="" autocomplete="off" type="password"
                                       name="password"
                                       placeholder="enter a password" class="uni-input-input"></div>
                        </uni-input>
                    </uni-view>

                    <uni-view data-v-79813222=""
                              style="width: 100%; padding: 11px 25px 0px; box-sizing: border-box; display: flex; justify-content: space-between;">
                        <uni-text data-v-79813222="" style="font-size: 12px;"><span><font
                                    style="vertical-align: inherit;"><font style="vertical-align: inherit;">Forgot your password?</font></font></span>
                        </uni-text>
                        <uni-text data-v-79813222="" style="font-size: 16px; color: rgb(229, 62, 70);" onclick="window.location.href='{{url('member/invitation/login&register')}}'"><span><font
                                    style="vertical-align: inherit;"><font style="vertical-align: inherit;">Register now!</font></font></span>
                        </uni-text>
                    </uni-view>
                    <uni-view data-v-79813222="" class="btn_1" onclick="login()">Login</uni-view>
                    <uni-view data-v-79813222="" class="btn_2"
                              onclick="window.location.href=''"
                              style="opacity: 0.8; width: 80%; justify-content: center; align-items: center;"><font
                            style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                Customer service
                            </font></font></uni-view>
                </uni-view>
            </uni-page-body>
        </uni-page-wrapper>
    </uni-page>
</uni-app>
</form>
@include('alert-message')
<script>
    function login(){
        document.querySelector('form').submit();
    }
</script>
</body>
</html>
