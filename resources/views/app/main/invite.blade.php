<html lang="en" data-dpr="1" style="font-size: 37.3px;">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no">
    <title>{{env('APP_NAME')}} share</title>
    <link href="{{asset('public')}}/css/chunk-3855a36a.7c588efe.css" rel="prefetch">
    <link href="{{asset('public')}}/css/chunk-48c196fe.bdd4d2bc.css" rel="prefetch">
    <link href="{{asset('public')}}/css/chunk-638b246f.91aa3c18.css" rel="prefetch">
    <link href="{{asset('public')}}/css/chunk-9ef35f76.e05bc063.css" rel="prefetch">
    <link href="{{asset('public')}}/css/app.6aec9c38.css" rel="preload" as="style">
    <link href="{{asset('public')}}/css/chunk-vendors.f0bcea2c.css" rel="preload" as="style">
    <link href="{{asset('public')}}/css/chunk-vendors.f0bcea2c.css" rel="stylesheet">
    <link href="{{asset('public')}}/css/app.6aec9c38.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/css/chunk-472e1ad4.a0773f73.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/css/chunk-0f77857e.35713388.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/css/chunk-0e23d48e.455b9822.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/css/chunk-3c66013c.fd57c69c.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/css/chunk-ec5a7c7c.c3d303df.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/css/chunk-1a96c94b.62a681ba.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/css/chunk-43abd354.7242387e.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/css/chunk-188fc534.22ef4f73.css">
<style>
    *{
          -webkit-user-select: none; /* Safari */
          -ms-user-select: none; /* IE 10 and IE 11 */
          user-select: none; /* Standard syntax */
        }
</style>

    <style>
        .share-container .tcsy .tcsy-row .col[data-v-53577a93] {
            margin-top: .267rem;
            font-size: 13px;
        }
        .share-container .share-top[data-v-53577a93] {
            color: #000;
        }
        .share-container .share-title[data-v-53577a93] {
            color: #000000b0;
        }
        .share-container .tcsy[data-v-53577a93] {
            width: 95%;
            margin: .133rem auto;
            margin-top: -6.667rem;
            height: auto;
            background: linear-gradient(0deg,#ff8952,#ff499f);
            background: url({{asset('public')}}/img/share-top1.3c6e64ad.png) no-repeat;
            background-size: 100% 100%;
            height: 14.147rem;
            border-radius: .107rem;
            padding-bottom: -0.6rem;
        }
    </style>

</head>
<body style="font-size: 12px;" class="">
<div data-v-cfeb29f2="" id="app">
    <div data-v-cfeb29f2="" class="placeholder_top"></div><!---->
    <div data-v-cfeb29f2="" id="Layout" class="layout" style="height: 727px;">
        <header>
            <div class="header back-f0 ">
                <div class="van-nav-bar custome-block">
                    <div class="van-nav-bar__content">
                        <div class="van-nav-bar__left" onclick="window.location.href='{{route('profile')}}'"><i class="van-icon van-icon-arrow-left"><!----></i></div>
                        <div class="van-nav-bar__title van-ellipsis">share</div>
                    </div>
                </div>
            </div>
            <div class="placeholder"></div>
        </header><!---->

        <?php
            $pro = \App\Models\Package::where('tab', 'vip')->first();
            $fixed = \App\Models\Package::where('tab', 'fixed')->first();
            $event = \App\Models\Package::where('tab', 'event')->first();
        ?>

        <div data-v-53577a93="" class="share-container child-view">
            <div data-v-53577a93="" class="share-top">Invite friends<br data-v-53577a93="">earn commission</div>
            <div data-v-53577a93="" class="share-title">·Commission Details·</div>
            <div data-v-53577a93="" class="tcsy">
                <div data-v-53577a93="" class="tcsy-title">Invitation income</div>
                <div data-v-53577a93="" class="tcsy-row van-row">
                    <div data-v-53577a93="" class="col van-col van-col--12 van-col--offset-2">Team member level</div>
                    <div data-v-53577a93="" class="col van-col van-col--10">Commission ration</div>
                    <div data-v-53577a93="" class="col van-col van-col--12 van-col--offset-2">Registration Bonus</div>
                    <div data-v-53577a93="" class="col van-col van-col--10">{{price(32)}}</div>
                    <div data-v-53577a93="" class="col van-col van-col--12 van-col--offset-2">Direct members level 1</div>
                    <div data-v-53577a93="" class="col van-col van-col--10">30%</div>
                    <div data-v-53577a93="" class="col van-col van-col--12 van-col--offset-2">secondary members level 2</div>
                    <div data-v-53577a93="" class="col van-col van-col--10">3%</div>
                    <div data-v-53577a93="" class="col van-col van-col--12 van-col--offset-2">Thirstier members level 3</div>
                    <div data-v-53577a93="" class="col van-col van-col--10">1%</div>
                </div>
            </div>


            <?php $rebate = \App\Models\Rebate::first(); ?>
            <div data-v-53577a93="" class="tcsy">
                <div data-v-53577a93="" class="tcsy-title">Commission income</div>
                <div data-v-53577a93="" class="tcsy1">
                    You can earn commissions when your friends buy Fixed pro and Event pro products after purchasing VIP

                </div>
                <div data-v-53577a93="" class="tcsy1">
                    If you invite A, you will be rewarded 6% of A's total investment amount.

                </div>
                <div data-v-53577a93="" class="tcsy1">
                    A invites B, and you will get a reward of 3% of B's total investment amount.

                </div>
                <div data-v-53577a93="" class="tcsy1">B invites C. You will be rewarded with 1% of C's total investment amount.
                </div>
            </div>
            <div data-v-53577a93="" class="erweima">
                <div data-v-53577a93="" class="erweima-row van-row">
                    <div data-v-53577a93="" class="van-col van-col--8"><img data-v-53577a93=""
                                                                            src="data:image/png;base64,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"
                                                                            style="display: inline-block;"></div>
                    <div data-v-53577a93="" class="van-col van-col--16">
                        <div data-v-53577a93="" class="yaoqingma">My Code:{{auth()->user()->ref_id}}</div>
                        <div data-v-53577a93="" class="erweima-btn">
                            <button data-v-53577a93=""
                                    onclick="copyLink('{{url('member/invitation/login&register').'?code='.auth()->user()->ref_id}}')"
                                    class="lo-button van-button van-button--default van-button--normal van-button--round">
                                <div data-v-53577a93="" class="van-button__content"><span data-v-53577a93=""
                                                                                          class="van-button__text">Copy the link</span>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div><!----></div>
</div>
<div class="van-toast van-toast--middle van-toast--text" style="z-index: 2006; display: none;">
    <div class="van-toast__text">Correctly fill in the 11-digit IFSC</div>
</div>
@include('alert-message')
@include('loading')
@include('message')

<script>
    function copyLink(text)
    {
        const body = document.body;
        const input = document.createElement("input");
        body.append(input);
        input.style.opacity = 0;
        input.value = text.replaceAll(' ', '');
        input.select();
        input.setSelectionRange(0, input.value.length);
        document.execCommand("Copy");
        input.blur();
        input.remove();
        openMessage('success', 'Success');

        setTimeout(function (){
            document.querySelector('.message').style.opacity = '0';
            document.querySelector('.message').style.zIndex = '-1';
            document.querySelector('.message').style.transition = '.4s';
        }, 1000)
    }
</script>
</body>
</html>
