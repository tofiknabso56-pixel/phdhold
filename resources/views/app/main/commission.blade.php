<html lang="en" data-dpr="1" style="font-size: 37.3px;">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no">
    <title>Funding details</title>
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
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/css/chunk-2661127c.5254b1ce.css">
</head>
<body style="font-size: 12px;" class="">
<div data-v-cfeb29f2="" id="app">
    <div data-v-cfeb29f2="" class="placeholder_top"></div><!---->
    <div data-v-cfeb29f2="" id="Layout" class="layout" style="height: 727px;">
        <header>
            <div class="header back-f0 ">
                <div class="van-nav-bar custome-white">
                    <div class="van-nav-bar__content">
                        <div class="van-nav-bar__left" onclick="window.location.href='{{route('profile')}}'"><i class="van-icon van-icon-arrow-left"><!----></i></div>
                        <div class="van-nav-bar__title van-ellipsis">Commission History</div>
                    </div>
                </div>
            </div>
            <div class="placeholder"></div>
        </header><!---->
        <div data-v-5ee8c0bf="" class="funding-container child-view">
            <div data-v-5ee8c0bf="" class="funding-padding">
                <div data-v-5ee8c0bf="" class="van-tabs van-tabs--card">
                    <div>
                        <div class="van-sticky">
                            <div class="van-tabs__wrap">
                                <div role="tablist" class="van-tabs__nav van-tabs__nav--card">
                                    <div role="tab" aria-selected="true" class="van-tab van-tab--active" onclick="history1(this)"><span class="van-tab__text van-tab__text--ellipsis">My Commission</span></div>
                                    <div role="tab" class="van-tab" onclick="history2(this)"><span class="van-tab__text van-tab__text--ellipsis">Team Commission</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="van-tabs__content" id="tab1">
                        <div data-v-5ee8c0bf="" role="tabpanel" class="van-tab__pane" style="">
                            @if(\App\Models\UserLedger::where('user_id', auth()->id())->where('reason', 'my_commission')->orderByDesc('id')->count() > 0)
                                <ul style="margin: 0;padding: 20px;overflow: hidden;">
                                    @foreach(\App\Models\UserLedger::where('user_id', auth()->id())->orderByDesc('id')->get() as $element)
                                        <li style="display: flex;justify-content: space-between;align-items: center;">
                                            <div>
                                                <h4 style="font-size: 16px;margin-bottom: 0;">{{price($element->amount)}}</h4>
                                                <p style="margin-top: 5px;color: #0000009e;">{{$element->created_at}}</p>
                                            </div>
                                            <div>
                                                <h3>{{ucfirst(str_replace('_', ' ', $element->reason))}}</h3>
                                            </div>
                                            <div>
                                        <span style="color: green;background: #ffffff52;padding: 5px 8px;border-radius: 42px;">
                                            my commission
                                        </span>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <div data-v-5ee8c0bf="" class="van-pull-refresh">
                                    <div class="van-pull-refresh__track" style="transition-duration: 0ms;">
                                        <div class="van-pull-refresh__head"></div>
                                        <div data-v-5ee8c0bf="" role="feed" class="van-list">
                                            <div data-v-5ee8c0bf="" class="list"></div>
                                            <div class="van-list__finished-text">No more</div>
                                            <div class="van-list__placeholder"></div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="van-tabs__content" id="tab2" style="display: none;">
                        <div data-v-5ee8c0bf="" role="tabpanel" class="van-tab__pane" style="">
                            @if(\App\Models\UserLedger::where('user_id', auth()->id())->where('reason', 'commission')->orderByDesc('id')->count() > 0)
                                <ul style="margin: 0;padding: 20px;overflow: hidden;">
                                    @foreach(\App\Models\UserLedger::where('user_id', auth()->id())->where('reason', 'commission')->orderByDesc('id')->get() as $element)
                                        <?php
                                            $from = \App\Models\User::where('id', $element->get_balance_from_user_id)->first();
                                        ?>
                                        <li style="display: flex;justify-content: space-between;align-items: center;">
                                            <div>
                                                <h4 style="font-size: 16px;margin-bottom: 0;">{{price($element->amount)}}</h4>
                                                <p style="margin-top: 5px;color: #0000009e;">{{$element->created_at}}</p>
                                            </div>
                                            <div>
                                                <h3>{{$element->reason}}</h3>
                                            </div>
                                            <div>
                                        <span style="color: green;background: #ffffff52;padding: 5px 8px;border-radius: 42px;">
                                            {{$from ? $from->ref_id : '--'}}({{$element->step}})
                                        </span>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <div data-v-5ee8c0bf="" class="van-pull-refresh">
                                    <div class="van-pull-refresh__track" style="transition-duration: 0ms;">
                                        <div class="van-pull-refresh__head"></div>
                                        <div data-v-5ee8c0bf="" role="feed" class="van-list">
                                            <div data-v-5ee8c0bf="" class="list"></div>
                                            <div class="van-list__finished-text">No more</div>
                                            <div class="van-list__placeholder"></div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="van-toast van-toast--middle van-toast--text" style="z-index: 2006; display: none;">
    <div class="van-toast__text">Correctly fill in the 11-digit IFSC</div>
</div>
<script>
    let tab1 = document.getElementById('tab1')
    let tab2 = document.getElementById('tab2')

    let elements = document.querySelectorAll('.van-tab')

    function added_active(_this){
        for (let i=0; i<elements.length;i++){
            if (elements[i].classList.contains('van-tab--active')){
                elements[i].classList.remove('van-tab--active')
            }
        }

        _this.classList.add('van-tab--active');
    }

    function history1(_this){
        tab1.style.display = 'block';
        tab2.style.display = 'none';

        added_active(_this)
    }

    function history2(_this){
        tab1.style.display = 'none';
        tab2.style.display = 'block';

        added_active(_this)
    }
</script>

</body>
</html>



