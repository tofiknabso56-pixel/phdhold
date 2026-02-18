<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="{{asset('public')}}/CLREnergy/dist/favicon.ico">
    <title>{{env('APP_NAME')}}</title>
    <link href="{{asset('public')}}/CLREnergy/dist/css/chunk-vendors.a9285ddb.css" rel="stylesheet">
    <link href="{{asset('public')}}/CLREnergy/dist/css/app.865ef51f.css" rel="stylesheet">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/CLREnergy/dist/css/573.177b8a42.css">
    <style>
        [data-v-6f1948be] .input-box input {
            text-align: left;
        }
    </style>
</head>
<body>
@include('loading')
@include('alert-message')
<div id="app" data-v-app="">
    <div>
        <div class="passwordpage" data-v-6f1948be="">
            <div class="van-nav-bar van-hairline--bottom navboxi" data-v-6f1948be="">
                <div class="van-nav-bar__content">
                    <div class="van-nav-bar__left van-haptics-feedback" onclick="window.location.href='{{route('dashboard')}}'"><i
                            class="van-badge__wrapper van-icon van-icon-arrow-left van-nav-bar__arrow"><!----><!---->
                            <!----></i><!----></div>
                    <div class="van-nav-bar__title van-ellipsis">Password</div><!----></div>
            </div>
            <div class="insecure" data-v-6f1948be=""><img class="imgac" src="{{asset('public')}}/CLREnergy/dist/img/1.29175d78.png" alt=""
                                                          data-v-6f1948be="">
                <p data-v-6f1948be="">Account insecure?</p></div>
            <p class="foryour" data-v-6f1948be="">For your account security, when the password is leaked, please change
                the password in time.</p>
            <section class="section-box" data-v-6f1948be="">
                <form action="{{route('user.change.password.confirmation')}}" method="post">
                    @csrf
                    <div class="van-cell van-field input-box" data-v-6f1948be="">
                        <div class="van-field__left-icon">
                            <div class="phonen" data-v-6f1948be=""><img
                                    src="data:image/png;base64,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"
                                    alt="" data-v-6f1948be="">
                                <p data-v-6f1948be="">Old password</p></div>
                        </div><!---->
                        <div class="van-cell__value van-field__value">
                            <div class="van-field__body"><input type="password" id="van-field-1-input"
                                                                name="old_password"
                                                                class="van-field__control" placeholder="Please enter">
                                <!----><!----><!----></div><!----><!----></div><!----><!----></div>
                    <div class="boxuis" data-v-6f1948be="">
                        <div class="van-cell van-field input-box" data-v-6f1948be="">
                            <div class="van-field__left-icon">
                                <div class="phonen" data-v-6f1948be=""><img
                                        src="data:image/png;base64,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"
                                        alt="" data-v-6f1948be="">
                                    <p data-v-6f1948be="">A new password</p></div>
                            </div><!---->
                            <div class="van-cell__value van-field__value">
                                <div class="van-field__body"><input type="password" id="van-field-2-input"
                                                                    name="new_password"
                                                                    class="van-field__control" placeholder="Please enter">
                                    <!----><!----><!----></div><!----><!----></div><!----><!----></div>
                        <p class="line" data-v-6f1948be=""></p>
                        <div class="van-cell van-field input-box" data-v-6f1948be="">
                            <div class="van-field__left-icon">
                                <div class="phonen" data-v-6f1948be=""><img
                                        src="data:image/png;base64,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"
                                        alt="" data-v-6f1948be="">
                                    <p data-v-6f1948be="">New password again</p></div>
                            </div><!---->
                            <div class="van-cell__value van-field__value">
                                <div class="van-field__body"><input type="password" id="van-field-3-input"
                                                                    name="confirm_password"
                                                                    class="van-field__control" placeholder="Please enter">
                                    <!----><!----><!----></div><!----><!----></div><!----><!---->
                        </div>
                    </div>
                    <button class="btnchage" data-v-6f1948be="" type="button" onclick="passwordChangeer()">Confirm change</button>
                </form>
            </section>
        </div>
    </div><!---->
</div>

<script>
    function passwordChangeer(){
        document.querySelector('.loading').style.display='block';
        document.querySelector('form').submit();
    }
</script>
</body>
</html>
