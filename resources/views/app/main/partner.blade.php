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
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/CLREnergy/dist/css/949.4201b2cb.css">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>
<body class="">
<div id="app" data-v-app="">
    <div>
        <div class="partnerpage" data-v-4e52e742="">
            <div class="van-nav-bar van-hairline--bottom navboxi" data-v-4e52e742="">
                <div class="van-nav-bar__content">
                    <div class="van-nav-bar__left van-haptics-feedback" onclick="window.location.href='{{route('dashboard')}}'"><i
                            class="van-badge__wrapper van-icon van-icon-arrow-left van-nav-bar__arrow"><!----><!---->
                            <!----></i><!----></div>
                    <div class="van-nav-bar__title van-ellipsis">Partner Center</div><!----></div>
            </div>
            <section class="section-box" data-v-4e52e742="">
                <div class="generai" data-v-4e52e742=""><p class="nameti" data-v-4e52e742="">Default Partner <span
                            data-v-4e52e742="">- Current</span></p>
                    <div class="curriu" data-v-4e52e742=""><img
                            src="data:image/png;base64,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"
                            alt="" data-v-4e52e742="">
                        <p class="progress" data-v-4e52e742=""><span data-v-4e52e742="" style="width: 0%;"></span></p>
                        <p class="schedule" data-v-4e52e742="">0/10</p></div>
                    <p class="silver" data-v-4e52e742="">Silver Partner</p>
                    <p class="neededi" data-v-4e52e742=""><span data-v-4e52e742="">₹50000</span> is needed to upgrade
                        <span data-v-4e52e742="">Silver Partner</span></p></div>
                <div class="teamboxi" data-v-4e52e742=""><p class="teamils" data-v-4e52e742="">Team Details</p>
                    <p class="upgrade" data-v-4e52e742="">- Upgrade conditions -</p>
                    <div class="teamsize" data-v-4e52e742="">
                        <div class="lefti" data-v-4e52e742=""><span data-v-4e52e742="">Team size</span>
                            <p data-v-4e52e742="">0/0</p></div>
                        <div class="lefti" data-v-4e52e742=""><span data-v-4e52e742="">Team recharge</span>
                            <p data-v-4e52e742="">0<span data-v-4e52e742="">/0</span></p></div>
                    </div>
                </div>
                <div class="avaliab flex" data-v-4e52e742="">
                    <div class="salary" data-v-4e52e742=""><span data-v-4e52e742="">Not available</span>
                        <p data-v-4e52e742="">Daily salary <span data-v-4e52e742="">₹0.00</span></p></div>
                    <div class="salary purchasei" data-v-4e52e742=""><span data-v-4e52e742="">Become a partner</span>
                        <p data-v-4e52e742="">You need to spend <span data-v-4e52e742="">₹100</span> to unlock</p></div>
                </div>
                <div class="explain" data-v-4e52e742=""><p class="titlei" data-v-4e52e742="">CLR Partner Description</p>
                    <p class="textui" data-v-4e52e742="">How to become a partner?<br>
                        Spend ₹100 to become a partner and enter the partner group.<br><br>

                        What are the benefits of becoming a partner?<br>
                        1. You can receive daily salary from ₹150 to ₹150,000 (depending on your partner level)<br>
                        2. Increase team commission income. You can get up to 10% of the income of a level 1 team, 6% of
                        the income of a level 2 team, and 1% of the income of a level 3 team.<br>
                        3. Join the partner exchange group and get rich together<br><br>
                        Please see the table below for the daily salary and team commission of partners at all
                        levels:<br></p><img src="{{asset('public')}}/CLREnergy/dist/img/3.2da7ce02.png" alt="" data-v-4e52e742=""></div>
            </section><!----><!----><!----><!----></div>
    </div><!---->
</div>

</body>
</html>
