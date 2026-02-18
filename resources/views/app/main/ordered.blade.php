<html lang="en" data-dpr="1" style="font-size: 38.5px;">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no">
    <title>{{env('APP_NAME')}}</title>
    <link href="{{asset('public')}}/css/app.6aec9c38.css" rel="preload" as="style">
    <link href="{{asset('public')}}/css/chunk-vendors.f0bcea2c.css" rel="preload" as="style">
    <link href="{{asset('public')}}/css/chunk-vendors.f0bcea2c.css" rel="stylesheet">
    <link href="{{asset('public')}}/css/app.6aec9c38.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/css/chunk-638b246f.91aa3c18.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/css/chunk-9ef35f76.e05bc063.css">
    <style>
        .home-container .home-top[data-v-3a61d39c] {
            height: 5rem;
        }
    </style>
    <style>
        .home-container .product .product-container .con1 .col2-div2[data-v-3a61d39c] {
            font-size: 14px;
        }
        .home-container .product .product-container .con1[data-v-3a61d39c] {
            height: 143px;
        }
        .home-container .product .product-container .con1 .col2-div3[data-v-3a61d39c] {
            font-size: 15px;
        }
        .home-container .product .product-container .con1 .col3[data-v-3a61d39c] {
            font-size: 16px;
        }
        .receivedBalance {
            width: 248px;
            height: 200px;
            position: fixed;
            z-index: 99;
            background: #fff;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-radius: 10px;
            box-shadow: 0px 5px 10px #00800054;
        }
        a.receivedBtn {
            background: #00d0f6;
            color: #fff;
            padding: 7px 21px;
            border-radius: 5px;
        }
        .home-container .product .product-container .con1 .col2-div2[data-v-3a61d39c] {
            color: #111010;
        }
        .vip_badge {
            background: #00d0f6;
            width: 65px;
            text-align: center;
            padding: 3px 0;
            border-radius: 5px;
            position: absolute;
            left: 40px;
            font-size: 12px;
            color: #fff;
        }


        .home-container .product .product-container .con1[data-v-3a61d39c] {
            width: 48%;
            margin: .267rem auto;
            height: 3.387rem;
            background: #fff;
            border-radius: .533rem;
            box-shadow: -.004rem .053rem .4rem .053rem rgba(165,188,251,.4);
            float: left;
            margin: 4px 1%;
        }
        .home-container .product .product-container .con1 .clo1-img[data-v-3a61d39c] {
            margin-top: .4rem;
            margin-left: .267rem;
            width: 90%;
            height: 134px;
            border-radius: 5px;
        }
        .home-container .product .product-container .con1[data-v-3a61d39c] {
            width: 48%;
            margin: .267rem auto;
            height: unset;
            background: #fff;
            border-radius: 5px;
            box-shadow: -.004rem .053rem .4rem .053rem rgba(165,188,251,.4);
            float: left;
            margin: 4px 1%;
            padding: 17px 0px;
        }
        .product .van-col--10 {
            width: 100%;
            padding: 0px 10px;
        }
        .home-container .product .product-container .con1 .col3[data-v-3a61d39c] {
            margin-top: .533rem;
            text-align: center;
            border-radius: 0;
            width: 93%;
            height: 46px;
            line-height: 46px;
            border: .027rem solid #00d0f6;
            font-size: 19px !important;
            font-family: PingFang SC,PingFang SC-Regular;
            font-weight: 400;
            color: #00d0f6;
            margin-top: 11px;
            margin-left: 7px;
            text-transform: capitalize;
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
<body style="font-size: 12px;" class="">
@include('alert-message')
<div data-v-cfeb29f2="" id="app">
    @if(auth()->user()->receive_able_amount > 0)
    <div class="receivedBalance">
        <h1 style="text-align: center;margin: 0"><img style="width: 150px;" src="{{asset('public/received.gif')}}" alt=""></h1>
        <div style="display: flex;justify-content: space-between;padding: 0 15px;margin-top: 10px;align-items: center;">
            <div style="font-size: 20px;color: #00d0f6;"> {{price(auth()->user()->receive_able_amount)}}</div>
            <div><a href="{{route('user.received.amount')}}" class="receivedBtn"> Received</a></div>
        </div>
    </div>
    @endif
    <div data-v-cfeb29f2="" class="placeholder_top"></div><!---->
    <div data-v-cfeb29f2="" id="Layout" class="layout" style="height: 727px;"><!----><!---->
        <div data-v-3a61d39c="" class="home-container child-view">
            <div data-v-3a61d39c="" class="home-top">
                <div data-v-3a61d39c="" class="Profession">Profession</div>
                <div data-v-3a61d39c="" class="becomes">becomes value</div>
                <div data-v-3a61d39c="" class="invest">Invest to create wealth</div>
                <img data-v-3a61d39c="" src="{{asset('public')}}/img/home-top1.e508814e.png" class="home-top-img"></div>

            <div data-v-3a61d39c="" class="product">
                <div data-v-3a61d39c="" class="van-tabs van-tabs--card">
                    <div class="van-tabs__wrap">
                        <div role="tablist" class="van-tabs__nav van-tabs__nav--card">
                            <div role="tab" aria-selected="true" class="van-tab acc van-tab--active" onclick="tab1(this)">
                                <span class="van-tab__text van-tab__text--ellipsis">
                                    <img data-v-3a61d39c="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACUAAAAkCAYAAAAOwvOmAAAAAXNSR0IArs4c6QAABI1JREFUWEe9mFnIlVUUht+nbMBIozSjATMLKotIpMFmQ7woCKJCLIQ/M22AogsjmmiCIoK6abSyUSyCLqoLkSwqpaKMJirSbNBKjaigud5Yh71/9vn+75zvHP9D6+7ba+2137322u9a+0MNYvsSSRdK+rfJtkG/g6T1wNwmP3QzsD1F0oYmJ33qLwXu6zanCdRrkk4sHPwuaac+QUSEd5QUkQr5Cdhju0DZPlzSR9lRAvedpF36BPVPAnW/pDPT3MXAA538dIyU7VclnZwmzgOW9wmmzdz2uIhSMTgO+KXOZy0o2/MlPZYmbAb2Gw2gPNf2k5LOT98rOiV9J1DfS9o7TZ4LrBgQqL0kfVvk5Xjg56rvEaBsD0l6JBmuAmYPAlARrcWS8u17CTijKyjb4yVtkrRbMjwQ+HLAoOL2/paSP1yfAKwp12iLlO27JF2VDGp3MQiAthdIWpp8rQVm1oJKtyOiEhwS3HLQoKNULmz7TUnHpLFZwOqsH46U7WclnZMU1wC3DyIqnXzYPkLSB0n/I7BnGyjbp0l6OQ3+LWks8FedQ9tHS7pI0hhgUQebOJ7TJT0h6RUgcmiE2I5cOj4pFgCtC9aKlO3XI+GScglwZ5cdvi/pyKQ/FPi0amv7B0l55xOA+K4DNVnSxqTYBOzfAlWhgJXAnG7HZvtaSbcmmxeBXDpaQ7aDHIMkQx4CLm7wd7WknCrLgKEAVeZShPMUII6wVmyPTeViTDJoI0DbX0k6IOmOBd5qAHW3pCuSzTZgYoCKCr5K0qlJsRGIlqWj2L5Z0vXJYBHwYIpSWcTXAdMb/JRl53NJM4GtOaeCBt4JGkhOlgPzukRrd0nRMUTUhjdhO8AtTPNmA7HZThGP5vHeQjkN+Di+S0oIFo/Q5wR9GsjFc4TjyrHHDtfadjL8EMiXoW5uWWpCfxwQvNWSKqPHEQ6TmKQhYFndVm2fJen5pHtcUuwyJ+xtwHUd5gWlvFvorgTuKW3rCnLJWWE7zB/VRWx/JumQmsUnAVtq7A9OjePOSVdL0p1al/Lax/zpwLqaRc6W9FxlfCmQ82pYZTuArJfU4qKYB+QK0uaiW+d5h6QlyTpyZTLwdQ2wnEdZNRHYVmNX1rrVwKy64x2RUzWOXpCU+50vJB0G/FHa2T5PUlBByBagvFGtwcqliGdWHGNH6fqaSQ7fljQjeVgD5HLUzW95bLdIykkfr6GpwObRggqqiLdfbo8fBqIgN4rtYOpg7CwzgODDrtIYqRStCHcU3vx2uxEIVu8otqNLKMlzPhBdQ6P0BCoBi+dWPLuyLARy99i2kO047jj2LCO4aFTHV062XWXiOcDKis0kSe9J2ieNPwrEv4iepedIZY+2b5J0Q7HCFCD3RHHToiYGsJCngAt6RpMM+waVjjJey/nvyQZgahp/RtK5yfcnko4C/vxfQCUAUSNzuxO59k3x+t0qad9ufdnAcqqSOxOi/5Y0rbJAkOtJQJnofQVru46vyK9dJf1a6Tba2pC+0IwmpyoRi4fkG2ms8YdYLyBHFakiYpelunh5L4s22fwHgVyuNGw34s0AAAAASUVORK5CYII="
                                         class="product-card-img">VIP PRO
                                </span>
                            </div>
                            <div role="tab" class="van-tab acc" onclick="tab2(this)">
                                <span class="van-tab__text van-tab__text--ellipsis">
                                    <img data-v-3a61d39c=""
                                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAjCAYAAAD17ghaAAAAAXNSR0IArs4c6QAAA65JREFUWEftl01oHVUUx//nThIp2fi0LoJVoy5KxdYvsCqCNqIoogvFKIIijW/OjEIWFdqKUl4QtILFhTJz753notlV0ILFz6JVEXRjm1QXKrYroy0tCMWYRs09cod58ny8NvclFlzkwoM3M+f8z+9+nXMvYQlNRKjZbG5yzt0I4AIRmVFKfRbH8VSvctSLQ6PRUENDQ68AeAjAmi6+0yLyRpIkr4XqBgPkeX61UmofgOEO8b8A9HW8O8DMIyEQQQDGmEsB/ADgvEr0fRHZFUXR0YGBgVOzs7Or+/r6rhGRBoB1lc1BZr5hMYhQgGkAG7wYET0dx3F2JmFr7W4Rebz6njPzU2eDWBTAWrvZz6sXcc5tSdP01cV6ZYx5D8A9lc+aNE1nzuQTAvCxc26EiI4y85WLBfffjTGrARwDEDnndqZp+uySACYnJwfn5uZOiMiq/v7+58bGxl4MAaggDhPReufcl0mS3LIkAGPM9QC+9s5KqUfq9fqeUABrbVNExgB8y8zrlwSQZdnaKIq+qwDuqNfrn4QCaK2fJ6IXAEwz87VBAMaYewH43zARiYhcCGBj5XzIZzwi6tzz3bT/BOB77XPGKSL6AkC/iMwR0WER+ZCZ/TuUi7DKcO8CuDu0h8u1ay3OEsAY82aVXv3jESL63v8RkRqAm6tgU0T0c2hgEfEJ6XIAvxHR59WWjIjoVgCD1bQ+Se3zDGAfM9/fCmKM8dvuxwrmriRJ9ocCaK0niGgHgClmvq7ll+f5xUqpjwBcBeBXstbuEJEJAL8zc0nWBuDn/6tyrogejuPYj1RQM8b4ovVMt13QbDbvW1hYeKfUtdbuEpEtAH5i5ks6ADYBaK38J5h5d1B0ANbaXEQSX0OYeW27X1EUN/n8UAIYY14GsBXALwAuY2a/gstWFMUG55yvA349PJgkyduhAG26J5n5onY/a+1tIvJpawR2isi2bgDeQGudENHg/Pz86+Pj4/OhAFmW1ZRSsc8DSZJ80O6X5/ntSqkDQQChAXuxWwFYGYGVEVgZgf/XCLTlbF/rh9trQS/ZrRfbzlrQqoYzzNztvteLdpBtZzXcDuAlfx6o1Wq10dHRP4JUlmGktX6AiN4qi1GWZVdEUXSkOnTsF5FHmfnkMvTP6loUxTrn3F4A/oxwrHUmnATwWOV5GsChcwTgL7f+rlE239l/rmZa6z1ENHqOAneTbTDzxL/uhlrrO6MoGhGR80VEecj/CsjrKaX8aeu4iOxl5m+89t8YuQNsjwLtdwAAAABJRU5ErkJggg=="
                                         class="product-card-img">Fixed PRO
                                </span>
                            </div>
                            <div role="tab" class="van-tab acc" onclick="tab3(this)">
                                <span class="van-tab__text van-tab__text--ellipsis">
                                    <img data-v-3a61d39c=""
                                         src="data:image/png;base64,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"
                                         class="product-card-img">Event PRO
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="van-tabs__content van-tabs__content--animated">
                        <div class="van-tabs__track"
                             style="transform: translate3d(0%, 0px, 0px); transition-duration: 0.3s;">
                            <div data-v-3a61d39c="" role="tabpanel" class="van-tab__pane-wrapper">
                                <div class="van-tab__pane">
                                    <div data-v-3a61d39c="" class="van-pull-refresh">
                                        <div class="van-pull-refresh__track" style="transition-duration: 0ms;">
                                            <div class="van-pull-refresh__head"></div>
                                            <div data-v-3a61d39c="" role="feed" class="van-list" style="transition: 0.5s;">



                                                <div data-v-3a61d39c="" style="transition: 0.5s; position: relative;" class="product-container" id="product1">
                                                    @foreach(\App\Models\Package::whereIn('id', my_active_vips())->whereStatus('active')->whereNull('package_id')->get() as $element)
                                                        <div class="vip_badge">{{$element->label}}</div>

                                                        <div data-v-3a61d39c="" class="con1">
                                                            <div data-v-3a61d39c="" class="van-row">
                                                                <div data-v-3a61d39c="" class="van-col van-col--8"><img
                                                                        data-v-3a61d39c=""
                                                                        src="{{asset($element->photo)}}"
                                                                        class="clo1-img"></div>
                                                                <div data-v-3a61d39c="" class="van-col van-col--10">
                                                                    <div data-v-3a61d39c="" class="col2-div1">
                                                                        <nobr
                                                                            data-v-3a61d39c="">{{$element->name}}</nobr>
                                                                    </div>
                                                                    <div data-v-3a61d39c="" class="col2-div2">
                                                                        Buy price:{{price($element->price)}}
                                                                    </div>
                                                                    <div data-v-3a61d39c="" class="col2-div2">
                                                                        Total
                                                                        income:{{price($element->commission_with_avg_amount)}}
                                                                    </div>
                                                                    <div data-v-3a61d39c="" class="col2-div2">
                                                                        {{$element->validity}} day
                                                                    </div>
                                                                    <div data-v-3a61d39c="" class="col2-div3">
                                                                        <div data-v-3a61d39c="">
                                                                            <nobr data-v-3a61d39c="">
                                                                                Daily:{{price($element->commission_with_avg_amount / $element->validity)}}</nobr>
                                                                            <br data-v-3a61d39c=""></div>
                                                                        <div data-v-3a61d39c="" class="col2-div32">
                                                                            <nobr data-v-3a61d39c="">
                                                                                Total:{{price($element->commission_with_avg_amount)}}</nobr>
                                                                            <br data-v-3a61d39c=""></div>
                                                                    </div>
                                                                </div>

                                                                <?php
                                                                $daily = $element->commission_with_avg_amount / $element->validity;
                                                                $total = $element->commission_with_avg_amount;
                                                                $price = $element->price;
                                                                $name = $element->name;
                                                                $photo = asset($element->photo);
                                                                $url = route('purchase.confirmation', $element->id);
                                                                ?>

                                                                <?php
                                                                $myPackage = \App\Models\Purchase::where('user_id', auth()->id())->where('package_id', $element->id)->where('status', 'active')->first();
                                                                ?>

                                                                @if($myPackage)
                                                                    <div data-v-3a61d39c=""
                                                                         class="col3 van-col van-col--6"
                                                                         style="background: #00d0f6;color: #fff;">
                                                                        Active
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>

                                                <div data-v-3a61d39c="" style="transition: 0.5s; position: relative; right: -100%;height: 0;overflow: hidden;" class="product-container" id="product2">
                                                    @foreach(\App\Models\Package::whereIn('id', my_active_vips())->whereStatus('active')->where('tab', 'fixed')->get() as $element)
                                                        <div class="vip_badge">{{$element->label}}</div>
                                                        <div data-v-3a61d39c="" class="con1">
                                                            <div data-v-3a61d39c="" class="van-row">
                                                                <div data-v-3a61d39c="" class="van-col van-col--8"><img
                                                                        data-v-3a61d39c=""
                                                                        src="{{asset($element->photo)}}"
                                                                        class="clo1-img"></div>
                                                                <div data-v-3a61d39c="" class="van-col van-col--10">
                                                                    <div data-v-3a61d39c="" class="col2-div1">
                                                                        <nobr
                                                                            data-v-3a61d39c="">{{$element->name}}</nobr>
                                                                    </div>
                                                                    <div data-v-3a61d39c="" class="col2-div2">
                                                                        Buy price:{{price($element->price)}}
                                                                    </div>
                                                                    <div data-v-3a61d39c="" class="col2-div2">
                                                                        Total
                                                                        income:{{price($element->commission_with_avg_amount)}}
                                                                    </div>
                                                                    <div data-v-3a61d39c="" class="col2-div2">
                                                                        {{$element->validity}} day
                                                                    </div>
                                                                    <div data-v-3a61d39c="" class="col2-div3">
                                                                        <div data-v-3a61d39c="">
                                                                            <nobr data-v-3a61d39c="">
                                                                                Daily:{{price($element->commission_with_avg_amount / $element->validity)}}</nobr>
                                                                            <br data-v-3a61d39c=""></div>
                                                                        <div data-v-3a61d39c="" class="col2-div32">
                                                                            <nobr data-v-3a61d39c="">
                                                                                Total:{{price($element->commission_with_avg_amount)}}</nobr>
                                                                            <br data-v-3a61d39c=""></div>
                                                                    </div>
                                                                </div>

                                                                <?php
                                                                $daily = $element->commission_with_avg_amount / $element->validity;
                                                                $total = $element->commission_with_avg_amount;
                                                                $price = $element->price;
                                                                $name = $element->name;
                                                                $photo = asset($element->photo);
                                                                $url = route('purchase.confirmation', $element->id);
                                                                ?>

                                                                <?php
                                                                $myPackage = \App\Models\Purchase::where('user_id', auth()->id())->where('package_id', $element->id)->where('status', 'active')->first();
                                                                ?>

                                                                @if($myPackage)
                                                                    <div data-v-3a61d39c=""
                                                                         class="col3 van-col van-col--6"
                                                                         style="background: #00d0f6;color: #fff;">
                                                                        Active
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>

                                                <div data-v-3a61d39c="" style="transition: 0.5s; position: relative; right: -100%;height: 0;overflow: hidden;" class="product-container" id="product3">
                                                    @foreach(\App\Models\Package::whereIn('id', my_active_vips())->whereStatus('active')->where('tab', 'event')->get() as $element)
                                                        <div class="vip_badge">{{$element->label}}</div>
                                                        <div data-v-3a61d39c="" class="con1">
                                                            <div data-v-3a61d39c="" class="van-row">
                                                                <div data-v-3a61d39c="" class="van-col van-col--8"><img
                                                                        data-v-3a61d39c=""
                                                                        src="{{asset($element->photo)}}"
                                                                        class="clo1-img"></div>
                                                                <div data-v-3a61d39c="" class="van-col van-col--10">
                                                                    <div data-v-3a61d39c="" class="col2-div1">
                                                                        <nobr
                                                                            data-v-3a61d39c="">{{$element->name}}</nobr>
                                                                    </div>
                                                                    <div data-v-3a61d39c="" class="col2-div2">
                                                                        Buy price:{{price($element->price)}}
                                                                    </div>
                                                                    <div data-v-3a61d39c="" class="col2-div2">
                                                                        Total
                                                                        income:{{price($element->commission_with_avg_amount)}}
                                                                    </div>
                                                                    <div data-v-3a61d39c="" class="col2-div2">
                                                                        {{$element->validity}} day
                                                                    </div>
                                                                    <div data-v-3a61d39c="" class="col2-div3">
                                                                        <div data-v-3a61d39c="">
                                                                            <nobr data-v-3a61d39c="">
                                                                                Daily:{{price($element->commission_with_avg_amount / $element->validity)}}</nobr>
                                                                            <br data-v-3a61d39c=""></div>
                                                                        <div data-v-3a61d39c="" class="col2-div32">
                                                                            <nobr data-v-3a61d39c="">
                                                                                Total:{{price($element->commission_with_avg_amount)}}</nobr>
                                                                            <br data-v-3a61d39c=""></div>
                                                                    </div>
                                                                </div>

                                                                <?php
                                                                $daily = $element->commission_with_avg_amount / $element->validity;
                                                                $total = $element->commission_with_avg_amount;
                                                                $price = $element->price;
                                                                $name = $element->name;
                                                                $photo = asset($element->photo);
                                                                $url = route('purchase.confirmation', $element->id);
                                                                ?>

                                                                <?php
                                                                $myPackage = \App\Models\Purchase::where('user_id', auth()->id())->where('package_id', $element->id)->where('status', 'active')->first();
                                                                ?>

                                                                @if($myPackage)
                                                                    <div data-v-3a61d39c=""
                                                                         class="col3 van-col van-col--6"
                                                                         style="background: #00d0f6;color: #fff;">
                                                                        Active
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>






                                                <div class="van-list__finished-text">No more</div>
                                                <div class="van-list__placeholder"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-v-3a61d39c="" role="tabpanel" aria-hidden="true"
                                 class="van-tab__pane-wrapper van-tab__pane-wrapper--inactive">
                                <div class="van-tab__pane"><!----></div>
                            </div>
                            <div data-v-3a61d39c="" role="tabpanel" aria-hidden="true"
                                 class="van-tab__pane-wrapper van-tab__pane-wrapper--inactive">
                                <div class="van-tab__pane"><!----></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @include('app.layout.manu')
    </div>
</div>

<script>
    function closePurchasheVIp(){
        document.getElementById('vOvarLay').style.display='none';
        document.getElementById('modalPop').style.display='none';
    }
</script>
<script>
    let product1 = document.getElementById('product1');
    let product2 = document.getElementById('product2');
    let product3 = document.getElementById('product3');
    let elements = document.querySelectorAll('.acc');

    const tab1 = (_this) => {
        product1.style.left = '0%';
        product2.style.left = 'unset';
        product2.style.right = '-100%';
        product3.style.right = '-100%';

        product1.style.height = 'unset';
        product1.style.overflow = 'visible';

        product2.style.height = '0px';
        product2.style.overflow = 'hidden';
        product3.style.height = '0px';
        product3.style.overflow = 'hidden';

        for (let i=0;i<elements.length;i++){
            if (elements[i].classList.contains('van-tab--active')){
                elements[i].classList.remove('van-tab--active')
            }
        }
        _this.classList.add('van-tab--active');
    }

    const tab2 = (_this) => {
        product1.style.left = '-100%';
        product2.style.right = '0%';
        product2.style.left = '0%';
        product3.style.right = '-100%';

        product2.style.height = 'unset';
        product2.style.overflow = 'visible';
        product2.style.transition = '1s';

        product1.style.height = '0px';
        product1.style.overflow = 'hidden';
        product3.style.height = '0px';
        product3.style.overflow = 'hidden';

        for (let i=0;i<elements.length;i++){
            if (elements[i].classList.contains('van-tab--active')){
                elements[i].classList.remove('van-tab--active')
            }
        }
        _this.classList.add('van-tab--active');
    }

    const tab3 = (_this) => {
        product1.style.left = '-100%';
        product2.style.left = '-100%';
        product3.style.right = '0%';

        product3.style.height = 'unset';
        product3.style.overflow = 'visible';

        product2.style.height = '0px';
        product2.style.overflow = 'hidden';
        product1.style.height = '0px';
        product1.style.overflow = 'hidden';

        for (let i=0;i<elements.length;i++){
            if (elements[i].classList.contains('van-tab--active')){
                elements[i].classList.remove('van-tab--active')
            }
        }
        _this.classList.add('van-tab--active');
    }
</script>
</body>
</html>
