<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{env('APP_NAME')}}</title>
    <link href="{{asset('public')}}/CLREnergy/dist/css/chunk-vendors.a9285ddb.css" rel="stylesheet">
    <link href="{{asset('public')}}/CLREnergy/dist/css/app.865ef51f.css" rel="stylesheet">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/CLREnergy/dist/css/764.7f62e783.css">
    <style>
        .van-overlay {
            background: rgb(0 0 0 / 57%);
        }
        .productpage .activelist .product-list2 .list .topi .imgpro[data-v-0a1fc1e4] {
            height: 123px;
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
<body class="">
<div id="app" data-v-app="">
    <div>
        <div class="productpage" data-v-0a1fc1e4="">
            <div class="topclr flex" data-v-0a1fc1e4=""><p class="leftti" data-v-0a1fc1e4="">Product</p>
                <div class="rightimg" data-v-0a1fc1e4=""><img
                        src="{{asset('public/lll.png')}}"
                        alt="" data-v-0a1fc1e4=""></div>
            </div>
            <div class="planbox flex" data-v-0a1fc1e4="">
                <div class="lefti" data-v-0a1fc1e4="">
                    <div class="accounti" data-v-0a1fc1e4="">
                        <p data-v-0a1fc1e4="">{{price(auth()->user()->balance)}}</p>
                        <span data-v-0a1fc1e4="">Account balance</span>
                    </div>
                </div>
                <div class="lefti" data-v-0a1fc1e4="">
                    <div class="accounti" data-v-0a1fc1e4="">
                        <?php
                        $totalInvest = \App\Models\Purchase::where('user_id', \auth()->id())->orderByDesc('id')->sum('amount');
                        ?>
                        <p data-v-0a1fc1e4="">{{price($totalInvest)}}</p>
                        <span data-v-0a1fc1e4="">Total invest</span>
                    </div>
                </div>
            </div>
            <p class="dynamic" data-v-0a1fc1e4="">— Product List —</p>
            <div class="van-tabs van-tabs--line tabs-box" data-v-0a1fc1e4="">
{{--                <div class="van-tabs__wrap">--}}
{{--                    <div role="tablist" class="van-tabs__nav van-tabs__nav--line van-tabs__nav--complete"--}}
{{--                         aria-orientation="horizontal">--}}
{{--                        <div id="van-tabs-1-0" role="tab" class="van-tab van-tab--line van-tab--grow" tabindex="-1"--}}
{{--                             aria-selected="false" aria-controls="van-tab-2">--}}
{{--                            <span class="van-tab__text">--}}
{{--                                <div class="areabox" data-v-0a1fc1e4="">--}}
{{--                                    <img class="imglet" src="{{asset('public/plplpl.png')}}" alt="" data-v-0a1fc1e4="">--}}
{{--                                    <p data-v-0a1fc1e4="">Ordinary Area</p>--}}
{{--                                </div>--}}
{{--                            </span>--}}
{{--                        </div>--}}
{{--                        <div id="van-tabs-1-1" role="tab" class="van-tab van-tab--line van-tab--grow van-tab--active"--}}
{{--                             tabindex="0" aria-selected="true" aria-controls="van-tab-3">--}}
{{--                            <span class="van-tab__text">--}}
{{--                                <div class="areabox" data-v-0a1fc1e4="">--}}
{{--                                    <img clsss="imglet" src="{{asset('public/plplp.png')}}" alt="" data-v-0a1fc1e4="">--}}
{{--                                    <p data-v-0a1fc1e4="">Activity Area</p>--}}
{{--                                </div>--}}
{{--                            </span>--}}
{{--                        </div>--}}
{{--                        <div class="van-tabs__line"--}}
{{--                             style="transform: translateX(341.5px) translateX(-50%); transition-duration: 0.3s;"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="van-tabs__content">
                    <div id="van-tab-2" role="tabpanel" class="van-tab__panel" tabindex="-1"
                         aria-labelledby="van-tabs-1-0" data-v-0a1fc1e4="" style="display: none;"></div>
                    <div id="van-tab-3" role="tabpanel" class="van-tab__panel" tabindex="0"
                         aria-labelledby="van-tabs-1-1" data-v-0a1fc1e4="" style="">
                        <div class="activelist" data-v-0a1fc1e4="">
                            <img class="linet" src="{{asset('public/ikii.png')}}" alt="" data-v-0a1fc1e4="">
                            <div class="inprogre flex" data-v-0a1fc1e4="">
                                <div class="leftop" data-v-0a1fc1e4=""><img src="{{asset('public/rkrkrk.png')}}" alt=""
                                                                            data-v-0a1fc1e4="">
                                    <p data-v-0a1fc1e4="">In Progress</p></div>
                                <p class="timei" data-v-0a1fc1e4="">2024-01-18 to 2024-01-22</p></div>
                            <div class="product-list2" data-v-0a1fc1e4="">
                                @foreach(\App\Models\Package::where('status', 'active')->get() as $element)
                                    <?php
                                        $myVip = \App\Models\Purchase::where('user_id', auth()->user()->id)->where('package_id', $element->id)->where('status', 'active')->first();
                                    ?>
                                    <div class="list" data-v-0a1fc1e4="">
                                        <div class="topi" data-v-0a1fc1e4="">
                                            <img class="imgpro" src="{{asset($element->photo)}}" alt=""
                                                 data-v-0a1fc1e4="">
                                            <div class="eyenum" data-v-0a1fc1e4=""><p data-v-0a1fc1e4="">{{rand(0,9999)}}</p><img
                                                    src="{{asset('public/tdtdtd.png')}}" alt="" data-v-0a1fc1e4="">
                                            </div>
                                        </div>
                                        <p class="name ellipsis-1" data-v-0a1fc1e4="">Catalytic Reforming Reactor</p>
                                        <div class="leasebox" data-v-0a1fc1e4="">
                                            <div class="pricei" data-v-0a1fc1e4=""><p
                                                    data-v-0a1fc1e4="">{{price($element->price)}}</p><span
                                                    data-v-0a1fc1e4="">Price</span></div>
                                            <div class="pricei lastcei" data-v-0a1fc1e4=""><p
                                                    data-v-0a1fc1e4="">{{price($element->commission_with_avg_amount / $element->validity)}}</p>
                                                <span data-v-0a1fc1e4="">Daily income</span></div>
                                        </div>
                                        @if($myVip)
                                            <div class="btnlease" data-v-0a1fc1e4=""><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAyNJREFUWEfVl1uIlWUUhp/XDoY0aHgI0i68UWQQ8SKUUkscCMQTZl43iVLOlSg6UN0InjAHbyJwVBS8nGHyCIZIRRp0IAgSoRsJDUwRQ1AcoVfW+G343e5/z97Mt0dddzP//7/fs99vfWutTzxjoWeMB9k+CHwEvAA8AP4EdkjqexqwAXQLeK1qcQPrJR0abagAeh9YkxwaB6wCxgI3gTckhWujFk/kkO0vgO2JYIGkC6NGA9QCehuoQGyVtLcIZHsL8FZGyLvAReCopMFaQLFdt4FXgOOSYguHwvYs4FJGmKLUb0BHzWNv+0fgHeBfSa8XgAL2THIoV8kIzZfSGl+VAe0BtqaXZkj6q0WuhOvjU4q0A9fLgFYC3ySITklHWgWUUiHWijXvlAFNDtqU9L2SNrQKyPaLwA1gAvB9aR7YvgzMjCSWFHa2JGy/C3yXxLvrAR0GOoH/gcmSoqJnD9u7gW1JeE49oHVA9LmIZZJOZ6d5VEr+AGYDVyW9WQ+oWHN2SvosN5DtacDfxVytBxTPItkmDiWb9F4LgNYDB5LuakkDdYub7RPAciDK+4Tcjdb2QGrmg8AkSbWPfaEydwO70t/zJP2cyyXbL6eJog04L2lJaA/n0ELghwSxSdL+jEABcC7pbZG0rxGgaLD/AfFr+iR9mBHoS2Bz0muXNNS0h22Qtn8C5gP/SJqaESgA4iRfkTS9otsIUMxDMQNFrC30uJGwLQUioWP9ryVtbAZoLvArMGYkBCXfRheYL+mXhoHiRdubgHAqbia5ImC6qyfSYbesUALmAB8AUzIQxQWiX9Lv1VoNA2WAaEji+QeyHZ05ciq27mT0IklxsawZthcBn6ZLwzFJ/fWsasoh2zGwxYl7tSC6V1Jl/n5sLdtRjc9WHYYNknrLoJoF6knuFPXuAeNrNd5Ccy6+f1lSFMSa0SxQjAoxMhQjjm+bpJgIqh06Dyyu+vc1STEHZQHqAL6tajknJa2opW77k6jEVc96JFV62BOfNeVQfG37Y+DzmLOBU0BX2bxtO/Rj0uyqJHW0IUn3szhU73Tketa0Q7kWLtN5CO16FQKA5fqpAAAAAElFTkSuQmCC"
                                                    alt="" data-v-0a1fc1e4="">
                                                <p data-v-0a1fc1e4="">Activate</p></div>
                                        @else
                                            <div class="btnlease" data-v-0a1fc1e4="" onclick="openPurchaseConfirmation('overlyId{{$element->id}}', 'productId{{$element->id}}')"><img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAyNJREFUWEfVl1uIlWUUhp/XDoY0aHgI0i68UWQQ8SKUUkscCMQTZl43iVLOlSg6UN0InjAHbyJwVBS8nGHyCIZIRRp0IAgSoRsJDUwRQ1AcoVfW+G343e5/z97Mt0dddzP//7/fs99vfWutTzxjoWeMB9k+CHwEvAA8AP4EdkjqexqwAXQLeK1qcQPrJR0abagAeh9YkxwaB6wCxgI3gTckhWujFk/kkO0vgO2JYIGkC6NGA9QCehuoQGyVtLcIZHsL8FZGyLvAReCopMFaQLFdt4FXgOOSYguHwvYs4FJGmKLUb0BHzWNv+0fgHeBfSa8XgAL2THIoV8kIzZfSGl+VAe0BtqaXZkj6q0WuhOvjU4q0A9fLgFYC3ySITklHWgWUUiHWijXvlAFNDtqU9L2SNrQKyPaLwA1gAvB9aR7YvgzMjCSWFHa2JGy/C3yXxLvrAR0GOoH/gcmSoqJnD9u7gW1JeE49oHVA9LmIZZJOZ6d5VEr+AGYDVyW9WQ+oWHN2SvosN5DtacDfxVytBxTPItkmDiWb9F4LgNYDB5LuakkDdYub7RPAciDK+4Tcjdb2QGrmg8AkSbWPfaEydwO70t/zJP2cyyXbL6eJog04L2lJaA/n0ELghwSxSdL+jEABcC7pbZG0rxGgaLD/AfFr+iR9mBHoS2Bz0muXNNS0h22Qtn8C5gP/SJqaESgA4iRfkTS9otsIUMxDMQNFrC30uJGwLQUioWP9ryVtbAZoLvArMGYkBCXfRheYL+mXhoHiRdubgHAqbia5ImC6qyfSYbesUALmAB8AUzIQxQWiX9Lv1VoNA2WAaEji+QeyHZ05ciq27mT0IklxsawZthcBn6ZLwzFJ/fWsasoh2zGwxYl7tSC6V1Jl/n5sLdtRjc9WHYYNknrLoJoF6knuFPXuAeNrNd5Ccy6+f1lSFMSa0SxQjAoxMhQjjm+bpJgIqh06Dyyu+vc1STEHZQHqAL6tajknJa2opW77k6jEVc96JFV62BOfNeVQfG37Y+DzmLOBU0BX2bxtO/Rj0uyqJHW0IUn3szhU73Tketa0Q7kWLtN5CO16FQKA5fqpAAAAAElFTkSuQmCC"
                                                    alt="" data-v-0a1fc1e4="">
                                                <p data-v-0a1fc1e4="">Invest</p></div>
                                            @endif

                                    </div>


                                    <div class="van-overlay" role="button" tabindex="0" style="z-index: -1;transition: .4s;" id="overlyId{{$element->id}}"></div>
                                    <div role="dialog" tabindex="0" class="van-popup van-popup--bottom buyboxi" id="productId{{$element->id}}" style="z-index: -1;transition: .4s;bottom: -100%"><img
                                            class="imgpro" src="{{asset($element->photo)}}" alt=""
                                            data-v-0a1fc1e4="">
                                        <p class="cardamom" data-v-0a1fc1e4="">{{$element->name}}</p>
                                        <p class="subasea" data-v-0a1fc1e4="">{{$element->title}}</p>
                                        <p class="amounti" data-v-0a1fc1e4="">{{price($element->price)}}</p>
                                        <div class="dailyi flex" data-v-0a1fc1e4=""><span data-v-0a1fc1e4="">Purchase quantity limit:</span>
                                            <p class="listmit" data-v-0a1fc1e4="">0/10</p></div>
                                        <div class="dailyi flex" data-v-0a1fc1e4=""><span data-v-0a1fc1e4="">Hourly income:</span>
                                            <p data-v-0a1fc1e4="">{{price(($element->commission_with_avg_amount / $element->validity) / 24)}}</p></div>
                                        <div class="dailyi flex" data-v-0a1fc1e4=""><span data-v-0a1fc1e4="">Daily income:</span>
                                            <p data-v-0a1fc1e4="">{{price($element->commission_with_avg_amount / $element->validity)}}</p></div>
                                        <div class="dailyi flex" data-v-0a1fc1e4=""><span data-v-0a1fc1e4="">Cycle days:</span>
                                            <p data-v-0a1fc1e4="">{{$element->validity}} days</p></div>
                                        <div class="dailyi flex" data-v-0a1fc1e4=""><span data-v-0a1fc1e4="">Total income:</span>
                                            <p class="totali" data-v-0a1fc1e4="">{{price($element->commission_with_avg_amount)}}</p></div>
                                        <div data-v-0a1fc1e4="">
                                            <button onclick="purchaseConfirm('{{route('purchase.confirmation', $element->id)}}', 'overlyId{{$element->id}}', 'productId{{$element->id}}')" class="btncon" data-v-0a1fc1e4="">Confirm Invest</button>
                                        </div><i
                                            onclick="closePurchaseConfirmation('overlyId{{$element->id}}', 'productId{{$element->id}}')"
                                            class="van-badge__wrapper van-icon van-icon-cross van-popup__close-icon van-popup__close-icon--top-right van-haptics-feedback"
                                            role="button" tabindex="0"></i></div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('app.layout.manu')
        </div>
    </div>
</div>
@include('alert-message')
<script>
    function openPurchaseConfirmation(id1, id2){
        document.getElementById(id1).style.zIndex = '2004';
        document.getElementById(id2).style.zIndex = '2004';
        document.getElementById(id2).style.bottom = '0';
    }

    function closePurchaseConfirmation(id1, id2){
        document.getElementById(id1).style.zIndex = '-1';
        document.getElementById(id2).style.zIndex = '-1';
        document.getElementById(id2).style.bottom = '-100%';
    }

    function purchaseConfirm(url, id1, id2){
        window.location.href = url;
        document.getElementById(id1).style.zIndex = '-1';
        document.getElementById(id2).style.zIndex = '-1';
        document.getElementById(id2).style.bottom = '-100%';
    }
</script>
</body>
</html>
