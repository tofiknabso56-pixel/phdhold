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
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/css/chunk-638b246f.91aa3c18.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/css/chunk-68cf9254.3c47810d.css">
    <style>
        .withdraw .recharge-top .top-title[data-v-97e7a636] {
            padding-top: 18px;
        }
        .withdraw .recharge-top .top-money[data-v-97e7a636] {
            width: 8rem;
        }
    </style>
</head>
<body style="font-size: 12px;">
<form action="{{route('user.transfer.request')}}" method="post">
    @csrf
    <div data-v-cfeb29f2="" id="app">
        <div data-v-cfeb29f2="" class="placeholder_top"></div><!---->
        <div data-v-cfeb29f2="" id="Layout" class="layout" style="height: 727px;">
            <header>
                <div class="header back-opacity ">
                    <div class="van-nav-bar">
                        <div class="van-nav-bar__content">
                            <div class="van-nav-bar__left" onclick="window.location.href='{{route('profile')}}'"><i
                                    class="van-icon van-icon-arrow-left"><!----></i></div>
                            <div class="van-nav-bar__title van-ellipsis">Withdraw Balance to Deposit Balance</div>
                        </div>
                    </div>
                </div>
                <div class="placeholder"></div>
            </header><!---->
            <div data-v-97e7a636="" class="withdraw child-view">
                <div data-v-97e7a636="" class="line"></div>
                <div data-v-97e7a636="" class="recharge-top">
                    <div data-v-97e7a636="" class="top-title">Balance</div>
                    <div data-v-97e7a636="" class="top-money" style="margin-bottom: 10px;">Withdraw Balance: {{price(auth()->user()->balance)}}</div>
                    <div data-v-97e7a636="" class="top-money">Deposit Balance:  {{price(auth()->user()->deposit_balance)}}</div>
                </div>
                <div data-v-97e7a636="" class="recharge-money">
                    <div data-v-97e7a636="" class="title">Enter your Transfer amount</div>
                    <div data-v-97e7a636="" class="rechargelist">
                        <div data-v-97e7a636="" role="radiogroup" class="van-radio-group">
                            <div data-v-97e7a636=""
                                 class="van-cell-group van-cell-group--inset van-hairline--top-bottom"></div>
                        </div>
                    </div>
                    <div data-v-97e7a636="" class="money-input">
                        <div data-v-97e7a636="" class="recharge-input van-cell van-field">
                            <div class="van-cell__title van-field__label"><span>Balance</span></div>
                            <div class="van-cell__value van-field__value">
                                <div class="van-field__body"><input type="number" inputmode="decimal"
                                                                    name="amount"
                                                                    required
                                                                    placeholder="Enter | Amount"
                                                                    class="van-field__control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-v-97e7a636="" class="recharge-btn" onclick="transfer()">
                    <div data-v-97e7a636="" class="recharge-btn-img">Continue</div>
                </div>
            </div>
        </div>
    </div>
</form>
@include('loading')
@include('snakbar')


@include('message')

@if(session()->has('success'))
    <script>
        openMessage('success', 'Success');
    </script>
@endif


@if(session()->has('error'))
    <script>
        callMessageFunction('{{session()->get('error')}}')
    </script>
@endif

<script>
    function transfer() {
        document.querySelector('.loader').style.display='block';
        document.querySelector('form').submit();
    }
</script>

</body>
</html>
