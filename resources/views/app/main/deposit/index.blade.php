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
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/css/chunk-7f866f2a.0ca6d22b.css">
    <style>
    *{
          -webkit-user-select: none; /* Safari */
          -ms-user-select: none; /* IE 10 and IE 11 */
          user-select: none; /* Standard syntax */
        }
        .recharge .backg .recharge-top[data-v-702a7558] {
    margin: auto;
    background-size: 161% 100%;
    height: 4.573rem;
}
    select#methosd {
        width: 100%;
        margin-top: 3px;
        border: none;
    }
    select#methosd:focus-visible{
        border: none;
    }
</style>

</head>
<body style="font-size: 12px;">
<div data-v-cfeb29f2="" id="app">
    <div data-v-cfeb29f2="" class="placeholder_top"></div><!---->
    <div data-v-cfeb29f2="" id="Layout" class="layout" style="height: 727px;">
        <header>
            <div class="header back-opacity ">
                <div class="van-nav-bar">
                    <div class="van-nav-bar__content">
                        <div class="van-nav-bar__left" onclick="window.location.href='{{route('profile')}}'"><i class="van-icon van-icon-arrow-left"><!----></i></div>
                        <div class="van-nav-bar__title van-ellipsis">Recharge</div>
                    </div>
                </div>
            </div>
            <div class="placeholder"></div>
        </header><!---->
        <div data-v-702a7558="" class="recharge child-view">
            <div data-v-702a7558="" class="backg">
                <div data-v-702a7558="" class="line"></div>
                <div data-v-702a7558="" class="recharge-top">
                    <div data-v-702a7558="" class="top-title">Deposit Balance</div>
                    <div data-v-702a7558="" class="top-money">{{price(auth()->user()->deposit_balance)}}</div>
                </div>
                <div data-v-702a7558="" class="recharge-money">
                    <div data-v-702a7558="" class="title">Change recharge amount</div>
                    <div data-v-702a7558="" class="recharge-row van-row">
                        <div data-v-702a7558="" class="van-col van-col--1"></div>
                        <div data-v-702a7558="" class="van-col van-col--7" onclick="getAmount(650)">
                            <div data-v-702a7558="" class="moneylist" >
                                {{price(650)}}
                            </div>
                        </div>
                        <div data-v-702a7558="" class="van-col van-col--7" onclick="getAmount(2800)">
                            <div data-v-702a7558="" class="moneylist">
                                {{price(2800)}}
                            </div>
                        </div>
                        <div data-v-702a7558="" class="van-col van-col--7" onclick="getAmount(6000)">
                            <div data-v-702a7558="" class="moneylist">
                                {{price(6000)}}
                            </div>
                        </div>
                        <div data-v-702a7558="" class="van-col van-col--2"></div>
                    </div>
                    <div data-v-702a7558="" class="recharge-row van-row">
                        <div data-v-702a7558="" class="van-col van-col--1"></div>
                        <div data-v-702a7558="" class="van-col van-col--7" onclick="getAmount(9600)">
                            <div data-v-702a7558="" class="moneylist">
                                {{price(9600)}}
                            </div>
                        </div>
                        <div data-v-702a7558="" class="van-col van-col--7" onclick="getAmount(25000)">
                            <div data-v-702a7558="" class="moneylist">
                                {{price(25000)}}
                            </div>
                        </div>
                        <div data-v-702a7558="" class="van-col van-col--8" onclick="getAmount(33000)">
                            <div data-v-702a7558="" class="moneylist">
                                {{price(33000)}}
                            </div>
                        </div>
                        <div data-v-702a7558="" class="van-col van-col--2"></div>
                    </div>
                    <div data-v-702a7558="" class="money-input">
                        <div data-v-702a7558="" class="recharge-input van-cell van-field">
                            <div class="van-cell__title van-field__label"><span>Recharge</span></div>
                            <div class="van-cell__value van-field__value">
                                <div class="van-field__body"><input type="text" inputmode="decimal"
                                                                    name="getAmount"
                                                                    placeholder="Please input >{{price(100)}}"
                                                                    class="van-field__control"></div>
                            </div>
                        </div>
                    </div>


                    <<div data-v-702a7558="" class="money-input">
    <div data-v-702a7558="" class="recharge-input van-cell van-field">
        <div class="van-cell__title van-field__label">
            <span>Channel</span>
        </div>
        <div class="van-cell__value van-field__value">
            <div class="van-field__body">
                <select name="methosd" id="methosd" style="width: 100%; padding: 10px;">
                    <option value="">Select Channel</option>
                    @foreach(\App\Models\PaymentMethod::get() as $element)
                    <option value="{{$element->id}}">{{$element->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
</div>

<!-- Submit Button -->
<div style="margin-top: 15px; text-align: center;">
    <button type="submit" style="
        padding: 12px 20px;
        font-size: 16px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        width: 100%;
        max-width: 300px;
    ">
        Submit
    </button>
</div>

                <div data-v-702a7558="" class="shuoming">
                    <div data-v-702a7558="" class="title">rechargeRules</div>
                    <div data-v-702a7558="" class="content">Notice！</div>
                    <div data-v-702a7558="" class="content">1 When you correctly complete the payment, the funds will
                        arrive in your account within 20 minutes
                    </div>
                    <div data-v-702a7558="" class="content">2 Please contact the customer service staff for help if the
                        account is not received within 20 minutes
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<input type="hidden" name="amount" value="">
<input type="hidden" name="method">
@include('alert-message')
@include('loading')


@include('message')

@if(session()->has('deposit_success'))
    <script>
        openMessage('success', 'Success');
    </script>
@endif


<script>
    function getAmount(amount){
        document.querySelector('input[name="getAmount"]').value = amount;
        document.querySelector('input[name="amount"]').value = amount;
    }

    function submitRecharge(){
        document.querySelector('.loader').style.display='block';

        let amount = document.querySelector('input[name="getAmount"]').value;
        let methosd = document.querySelector('select[name="methosd"]').value;
        if (methosd == ''){
            document.querySelector('.loader').style.display='none';
            message('Select Channel')
            return 0;
        }

        if (amount >= 99){
            window.location.href = '/vip/index.php?amount='+amount +"&userId={{Auth::user()->id}}";
        }else{
            document.querySelector('.loader').style.display='none';
            message('Select Minimum Amount')
        }
    }
</script>
</body>
</html>
