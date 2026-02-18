<html lang="en" data-dpr="1" style="font-size: 37.3px;">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no">
    <title>{{env('APP_NAME')}}</title>
    <link href="{{asset('public')}}/css/chunk-3855a36a.7c588efe.css" rel="prefetch">
    <link href="{{asset('public')}}/css/chunk-48c196fe.bdd4d2bc.css" rel="prefetch">
    <link href="{{asset('public')}}/css/chunk-638b246f.91aa3c18.css" rel="prefetch">
    <link href="{{asset('public')}}/css/chunk-9ef35f76.e05bc063.css" rel="prefetch">
    <link href="{{asset('public')}}/css/app.6aec9c38.css" rel="preload" as="style">
    <link href="{{asset('public')}}/css/chunk-vendors.f0bcea2c.css" rel="preload" as="style">
    <link href="{{asset('public')}}/css/chunk-vendors.f0bcea2c.css" rel="stylesheet">
    <link href="{{asset('public')}}/css/app.6aec9c38.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/css/chunk-0f77857e.35713388.css">
    <style>
        .reset {
            background: #00ecff;
            width: 50%;
            margin: 100px auto;
            padding: 15px 0;
            border-radius: 50px;
            color: #fff !important;
        }
    </style>
</head>
<body style="font-size: 12px;">
<div data-v-cfeb29f2="" id="app">
    <div data-v-cfeb29f2="" class="placeholder_top"></div><!---->
    <div data-v-cfeb29f2="" id="Layout" class="layout" style="height: 727px;">
        <header>
            <div class="header">
                <div class="van-nav-bar custome-block">
                    <div class="van-nav-bar__content">
                        <div class="van-nav-bar__left" onclick="window.location.href='{{route('profile')}}'"><i class="van-icon van-icon-arrow-left"><!----></i></div>
                        <div class="van-nav-bar__title van-ellipsis">Bank card management</div>
                    </div>
                </div>
            </div>
            <div class="placeholder"></div>
        </header>

        @if(auth()->user()->gateway_method && auth()->user()->gateway_number)
            <div data-v-47fb6178="" class="bankcard child-view">
                <div data-v-47fb6178="" class="addbank">
                    <div data-v-47fb6178="" class="wenzi1 reset" onclick="window.location.href='{{route('user.bank.reset')}}'">
                        Reset Bank Card
                    </div>
                </div>
            </div>
        @else
            <div data-v-47fb6178="" class="bankcard child-view">
                <div data-v-47fb6178="" class="addbank"><img onclick="window.location.href='{{route('user.bank.create')}}'" data-v-47fb6178="" src="{{asset('public')}}/img/plus.71318c53.png"
                                                             class="addbank-img">
                    <div data-v-47fb6178="" class="wenzi1">
                        Add a bank card
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
</body>
</html>
