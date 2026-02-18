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
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/css/chunk-43abd354.7242387e.css">
    <style>
        .vip-container .vipnotice .title-row[data-v-381f64e4] {
            filter: drop-shadow(2px 4px 6px black);
        }
        .badge_ox {
            width: 61px;
            background: #ff000014;
            height: 41px;
            position: absolute;
            color: #000 !important;
        }
    </style>
    <style>
    *{
          -webkit-user-select: none; /* Safari */
          -ms-user-select: none; /* IE 10 and IE 11 */
          user-select: none; /* Standard syntax */
        }
</style>

</head>
<body style="font-size: 12px;">
<header>
    <div class="header">
        <div class="van-nav-bar custome-white">
            <div class="van-nav-bar__content">
                <div class="van-nav-bar__left" onclick="window.location.href='{{route('profile')}}'"><i class="van-icon van-icon-arrow-left"><!----></i></div>
                <div class="van-nav-bar__title van-ellipsis"></div>
            </div>
        </div>
    </div>
    <div class="placeholder"></div>
</header><!---->
<div data-v-381f64e4="" class="vip-container child-view">
    <div data-v-381f64e4="" class="viplevel">VIP LEVEl</div>
    <div data-v-381f64e4="" class="vipnotice-title">VIP upgrade conditions</div>
    <div data-v-381f64e4="" class="vipnotice">
        <div data-v-381f64e4="" class="title van-row">
            <div data-v-381f64e4="" class="van-col van-col--8 van-col--offset-4">- VIP</div>
            <div data-v-381f64e4="" class="van-col van-col--8">Price-</div>
        </div>

        @foreach(\App\Models\Package::where('tab', 'vip')->whereStatus('active')->get() as $element)
            <div data-v-381f64e4="" class="title-row van-row">
                <div data-v-381f64e4="" class="title-col van-col van-col--8 van-col--offset-4">
                    <div data-v-381f64e4="" class="title-col-img"><span data-v-381f64e4="" class="badge_ox">{{$element->label}}</span></div>
                </div>
                <div data-v-381f64e4="" class="title-col van-col van-col--8">{{price($element->price)}}</div>
            </div>
        @endforeach

    </div>
</div>
@include('app.layout.manu')
</body>
</html>
