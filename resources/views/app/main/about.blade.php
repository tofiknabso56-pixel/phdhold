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
    <link href="{{asset('public')}}/js/app.09a62d3c.js" rel="preload" as="script">
    <link href="{{asset('public')}}/js/chunk-vendors.6f1a9ba7.js" rel="preload" as="script">
    <link href="{{asset('public')}}/css/chunk-vendors.f0bcea2c.css" rel="stylesheet">
    <link href="{{asset('public')}}/css/app.6aec9c38.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/css/chunk-7b6a678f.edb1af64.css">
    <style>
        .team[data-v-4db9d56a] {
            min-height: unset;
            background: #47d8f0;
            filter: unset;
            padding-top: 1rem;
            position: relative;
            z-index: -3;
            padding-bottom: 2.667rem;
        }
    </style>
</head>
<body style="font-size: 12px;">
<div data-v-cfeb29f2="" id="app">
    <div data-v-cfeb29f2="" class="placeholder_top"></div><!---->
    <div data-v-cfeb29f2="" id="Layout" class="layout" style="height: 727px;">
        <header>
            <div class="header back-f0 ">
                <div class="van-nav-bar custome-white">
                    <div class="van-nav-bar__content">
                        <div class="van-nav-bar__left" onclick="window.location.href='{{route('profile')}}'"><i class="van-icon van-icon-arrow-left"><!----></i></div>
                        <div class="van-nav-bar__title van-ellipsis">About-us</div>
                    </div>
                </div>
            </div>
            <div class="placeholder"></div>
        </header><!---->
        <div data-v-4db9d56a="" class="team child-view" style="width: 100%;margin: auto;">
            <div style="padding: 0 15px;">
                <img style="width: 100%;border-radius: 5px" src="{{asset('public/WhatsApp Image 2024-02-20 at 12.02.39_1a2f6170.jpg')}}" alt="">
                <p style="font-size: 15px;color: #fff;">
                    With the N149/4.0–4.5, the Nordex Group was the first company to launch a turbine platform with a flexible rating as part of its core design philosophy and operation strategy. This design approach, combined with a variety of operating modes, enables the Delta4000 turbine to adapt to the grid operator’s individual requirements, local wind conditions and noise constraints.

                </p>

                <p style="font-size: 15px;color: #fff;">
                    This also means it’s possible to optimise the overall yield of a wind farm by means of the different maximum output of individual turbines, thus always exploiting the full potential of each turbine position within each single wind farm.

                </p>

                <p style="font-size: 15px;color: #fff;">
                    Like its predecessor generation, the turbines of the Delta4000 series meet the grid requirements of international markets, in addition to providing grid stabilizing system services.

                </p>

                <p style="font-size: 15px;color: #fff;">
                    REDUCED SERVICE EFFORTS
                </p>

                <p style="font-size: 15px;color: #fff;">
                    The technical concept of the Delta4000 series minimises service requirements over the entire service life of the turbine. Each component was rigorously designed to ensure lower maintenance effort. Additionally, this product series can be maintained with an mobile crane solution.
                </p>
            </div>
        </div>
        @include('app.layout.manu')
    </div>
</div>
</body>
</html>
