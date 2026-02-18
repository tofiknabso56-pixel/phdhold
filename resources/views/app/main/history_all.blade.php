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
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/CLREnergy/dist/css/791.be86190f.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/CLREnergy/dist/css/278.5b9352be.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/CLREnergy/dist/css/345.18397afb.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/CLREnergy/dist/css/335.0a1ca413.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/CLREnergy/dist/css/189.6fd946d4.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/CLREnergy/dist/css/764.7f62e783.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/CLREnergy/dist/css/4.dcbe59fd.css">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>
<body class="">
<div id="app" data-v-app="">
    <div>
        <div class="aboutpage" data-v-00a2d0b3="">
            <div class="van-nav-bar van-hairline--bottom navboxi" data-v-00a2d0b3="" style="margin-bottom: 10px;">
                <div class="van-nav-bar__content">
                    <div class="van-nav-bar__left van-haptics-feedback" onclick="window.location.href='{{route('profile')}}'"><i
                            class="van-badge__wrapper van-icon van-icon-arrow-left van-nav-bar__arrow">
                        </i></div>
                    <div class="van-nav-bar__title van-ellipsis">My All History</div></div>
            </div>

            <div class="record_lit" style="width: 95%;margin: auto;">
                @foreach(\App\Models\UserLedger::where('user_id', auth()->id())->orderBydesc('id')->get() as $element)
                    <div class="record_item" style="background: #171716;padding: 15px;border-radius: 8px;margin-bottom: 10px;">
                        <div style="display: flex;justify-content: space-between; border-bottom: 2px solid #fff6;padding-bottom: 15px;">
                            <div style="color: #fff;font-size: 16px;display: flex;">
                                <img style="width:25px;margin-right: 9px;margin-top: -5px;" src="data:image/png;base64,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" alt="">
                                <span>{{ucfirst(str_replace("_"," ",$element->reason))}}</span>
                            </div>

                            <div style="color: #fff;font-size: 15px;">
                                {{$element->created_at}}
                            </div>
                        </div>

                        <div>
                            <h4 style="font-size: 18px;color: #ffd500;margin-top: 15px;font-weight: bold;">{{price($element->amount)}}</h4>
                            <p style="color: #fff;font-size: 16px;margin-top: 8px;">
                                {{$element->perticulation}}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
</body>
</html>
