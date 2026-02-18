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
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/css/chunk-43abd354.7242387e.css">
    <style>
        .vip-container .vipnotice .title-row[data-v-381f64e4] {
            text-align: center;
            width: 90%;
            margin: 0 auto;
            height: 78px;
            background: #fff;
            box-shadow: -.133rem 0 .227rem .02rem rgba(20,7,0,.1);
            line-height: 1.067rem;
            border-radius: 0;
        }
    </style>
</head>
<body style="font-size: 12px;">
<div data-v-cfeb29f2="" id="app">
    <div data-v-cfeb29f2="" class="placeholder_top"></div><!---->
    <div data-v-cfeb29f2="" id="Layout" class="layout" style="height: 727px;">
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
            <div data-v-381f64e4="" class="viplevel" style="font-size: 25px;">Purchase History</div>
            <div data-v-381f64e4="" class="vipnotice" style="margin-top: 20px;padding-top: 15px;">
                @foreach(\App\Models\Purchase::with('package')->where('status', 'active')->where('user_id', auth()->id())->orderByDesc('id')->get() as $element)
                <div data-v-381f64e4="" class="title-row van-row" style="margin-bottom: 8px;">
                    <div style="display: flex;justify-content: space-between;padding: 0 15px;line-height: 8px;padding-top: 10px;">
                        <div>{{$element->package->name}}</div>
                        <div>{{price($element->package->price)}}</div>
                    </div>

                    <div style="display: flex;justify-content: space-between;padding: 0 15px;line-height: 40px;">
                        <div>Commission</div>
                        <div>{{price($element->package->commission_with_avg_amount)}}</div>
                    </div>

                    <div style="display: flex;justify-content: space-between;padding: 0 15px;line-height: 8px;">
                        <div>Active Date</div>
                        <div>{{$element->created_at}}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @include('app.layout.manu')
    </div>
</div>
</body>
</html>
