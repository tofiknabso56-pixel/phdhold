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
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/css/chunk-7b6a678f.edb1af64.css">
    <style>
        .team .reward .jjin[data-v-4db9d56a] {
            color: #000;
        }
        .team .team-top[data-v-4db9d56a] {
            width: 100%;
            height: 8.427rem;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -2;
        }
        .team .reward[data-v-4db9d56a] {
            margin-top: 0;
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
<div data-v-cfeb29f2="" class="placeholder_top"></div><!---->
<header>
    <div class="header back-f0 ">
        <div class="van-nav-bar custome-white">
            <div class="van-nav-bar__content">
                <div class="van-nav-bar__left"><i class="van-icon van-icon-arrow-left"><!----></i></div>
                <div class="van-nav-bar__title van-ellipsis">Team</div>
            </div>
        </div>
    </div>
    <div class="placeholder"></div>
</header><!---->
<div data-v-4db9d56a="" class="team child-view">
    <img data-v-4db9d56a="" src="{{asset('public')}}/WhatsApp Image 2024-02-21 at 17.03.53_3c4912f0.jpg" class="team-top">
    <div data-v-4db9d56a="" class="reward">
        <div data-v-4db9d56a="" class="title">Reward</div>
        <div data-v-4db9d56a="" class="jjin">
            <?php
            $purchaseReword = \App\Models\UserLedger::where('user_id', auth()->id())->where('reason', 'commission')->sum('amount');
            ?>
            {{price($purchaseReword)}}
        </div>
        <div data-v-4db9d56a="" class="jjin2" style="color: #000;font-weight: bold;">Purchase Reward</div>
        <div data-v-4db9d56a="" class="jjin3">Reward Income</div>
        <div data-v-4db9d56a="" class="jjin4">
            <?php
            $commissionReword = \App\Models\UserLedger::where('user_id', auth()->id())->where('reason', 'reword')->sum('amount');
            ?>
            {{price($commissionReword)}}
        </div>
        <div data-v-4db9d56a="" class="btn">Activate all reward</div>
        <div data-v-4db9d56a="" class="notice">
            <div data-v-4db9d56a="" role="alert" class="team-notice van-notice-bar"
                 style="color: rgb(0, 0, 0); background: transparent;">
                <div role="marquee" class="van-notice-bar__wrap">
                    <div class="van-notice-bar__content van-ellipsis" style="transition-duration: 0s;">
                        <div data-v-4db9d56a="" class="notice-swipe van-swipe">
                            <div class="van-swipe__track van-swipe__track--vertical"
                                 style="transition-duration: 0ms; transform: translateY(0px); height: 15px;">
                                <div data-v-4db9d56a="" class="van-swipe-item" style="height: 15px;">
                                    <marquee behavior="" direction="">daily up to date my rewards received automatically from my team </marquee>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-v-4db9d56a="" class="rewardlevel">
            <div data-v-4db9d56a="" class="rl-title">Current income</div>
            <div data-v-4db9d56a="" class="sydj">
                <div data-v-4db9d56a="" class="row van-row">
                    <div data-v-4db9d56a="" class="van-col van-col--6">Level</div>
                    <div data-v-4db9d56a="" class="van-col van-col--8">Size Info</div>
                    <div data-v-4db9d56a="" class="van-col van-col--10">Active Members</div>
                </div>
                <div data-v-4db9d56a="" class="row van-row">
                    <div data-v-4db9d56a="" class="van-col van-col--6">
                        <div data-v-4db9d56a="" class="col1">1</div>
                    </div>
                    <div data-v-4db9d56a="" class="van-col van-col--8">{{ $first_level_users->count() }}</div>
                    <div data-v-4db9d56a="" class="van-col van-col--10">{{ $activeMembers1 }}</div>
                </div>
                <div data-v-4db9d56a="" class="row van-row">
                    <div data-v-4db9d56a="" class="van-col van-col--6">
                        <div data-v-4db9d56a="" class="col1">2</div>
                    </div>
                    <div data-v-4db9d56a="" class="van-col van-col--8">{{ $second_level_users->count() }}</div>
                    <div data-v-4db9d56a="" class="van-col van-col--10">{{ $activeMembers2 }}</div>
                </div>
                <div data-v-4db9d56a="" class="row van-row">
                    <div data-v-4db9d56a="" class="van-col van-col--6">
                        <div data-v-4db9d56a="" class="col1">3</div>
                    </div>
                    <div data-v-4db9d56a="" class="van-col van-col--8">{{ $third_level_users->count() }}</div>
                    <div data-v-4db9d56a="" class="van-col van-col--10">{{ $activeMembers3 }}</div>
                </div>
            </div>
        </div>



        <div data-v-4db9d56a="" class="rewardlevel">
            <div data-v-4db9d56a="" class="rl-title">Transactions</div>
            <div data-v-4db9d56a="" class="sydj">
                <div data-v-4db9d56a="" class="row van-row">
                    <div data-v-4db9d56a="" class="van-col van-col--6">Level</div>
                    <div data-v-4db9d56a="" class="van-col van-col--8">Withdraw</div>
                    <div data-v-4db9d56a="" class="van-col van-col--10">Deposit</div>
                </div>
                <div data-v-4db9d56a="" class="row van-row">
                    <div data-v-4db9d56a="" class="van-col van-col--6">
                        <div data-v-4db9d56a="" class="col1">1</div>
                    </div>
                    <div data-v-4db9d56a="" class="van-col van-col--8">{{ price($lv1Withdraw) }}</div>
                    <div data-v-4db9d56a="" class="van-col van-col--10">{{ price($lv1Recharge) }}</div>
                </div>
                <div data-v-4db9d56a="" class="row van-row">
                    <div data-v-4db9d56a="" class="van-col van-col--6">
                        <div data-v-4db9d56a="" class="col1">2</div>
                    </div>
                    <div data-v-4db9d56a="" class="van-col van-col--8">{{ price($lv2Withdraw) }}</div>
                    <div data-v-4db9d56a="" class="van-col van-col--10">{{ price($lv2Recharge) }}</div>
                </div>
                <div data-v-4db9d56a="" class="row van-row">
                    <div data-v-4db9d56a="" class="van-col van-col--6">
                        <div data-v-4db9d56a="" class="col1">3</div>
                    </div>
                    <div data-v-4db9d56a="" class="van-col van-col--8">{{ price($lv3Withdraw) }}</div>
                    <div data-v-4db9d56a="" class="van-col van-col--10">{{ price($lv3Recharge) }}</div>
                </div>
            </div>
        </div>



        <div data-v-4db9d56a="" class="team-member">
            <div data-v-4db9d56a="" class="rl-title">Team Size</div>
            <div data-v-4db9d56a="" class="row1 van-row">
                <div data-v-4db9d56a="" class="van-col van-col--12">
                    <div data-v-4db9d56a="" class="number1">
                        <div data-v-4db9d56a="">{{$team_size}}</div>
                        <div data-v-4db9d56a="" class="number2">+</div>
                    </div>
                    <div data-v-4db9d56a="" class="number3">Membership Size</div>
                    <img data-v-4db9d56a=""
                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGMAAABOCAYAAAA0Cah9AAAAAXNSR0IArs4c6QAADDJJREFUeF7tnQ1wFdUVx//n3s13+AqQMMQP4igjg4AW6Fj8YJCiVaZSNRDtp20dWzuOKIKjdqamjjqjtQ6Wai0zbR3qV3EkVq3IKAYbtLUDNbWxClRkDBSEBAiYkOS9vadzd/e97Nv3Qd7bfeRFNjNvsu+9vfftnt+ec+7HuecShvEfNzcbmCEaoHApGBeBuByMfwBqE2A8S+Mv3jucbo+G08W6r5U7NtaCjdUgXDHwOQOs3+n/vBfgH1L1/PXD5R6HJQzev/FikHwWRBMTBZ0AAyCOQJl3ofrwSqIlZqFDGVYwmH9bhANnLQeJnwMoAnkv3wMDSmsIoPg59HbfRHVXHS5kIMMGBre/XIuSit+BcBmgL5swaBisNINWmOpaqr18W6ECGRYw+MAb86DwDIgm2ABSwGAGswKRiPkMIKYZGobWEFYdUNEGOuXKNwsRSEHD4B2vlmCkcQdAPwPIsECkgMGmCfXxv8EdeyHPuwhUWm4LPxmGBhWBGV2Bv/X9mpYUlh8pWBj833XVqCh/EkSX2yZJ2CA8MLj3GMzWFnDH/+yHvaQMcvZ8iJFjUsOwtESbLV6Nzq5lNOO73YWiJQUJg/e8MgdEL4DEBAtCChj6ueeD+2FubQb6+xLlSQJi+hyIiadZBs0Svm2mXC9TH7+LPtTTWdfsLgQgBQWD29YWY1TpbSC6H0JIWxuSYbCpoHZ+ALW9NaMMadLZkJNngASlhqE0HLMDMBfRpOveGWogBQOD29dWAcVrAFpoARAOCA8M7u+D+V4LuHPfoGRHVTWQ510AMoqSNcOCYQGJgM0bsGbHU9TYaDW9huKvIGDwrrVfAckmkKiJa4MHBhOBD3XA3LoJiPRnJyvtR2bNhagYkWimBmAASvcJ+TGIyHKq+35vdj8QzNlDCoObGw3UTVkK0EMgIUDScdSJmsHMULu2Q217L/e71n7k3DkQY2tAVivLBLwwtJYoswW9PYto+k8O5f5juZUcMhj8/tNjUM5rIeRXLQiWJiTD4EgE0da3gYP7c7tDTylRdzb0i0gLPm6mbM2wYWhQ+xGJzKNzfvyfQH50kJUMCQz++A+zoeRrEKLKBpAMg0mAuw7C/GcLEI0M8nYGeVrVeBjTZlvK6PgMLwxARaMw1Xcw9aY/aQs5yJp9nXZCYXBjo8C1tTdDGCtBkga0IREGa0Py6Q6oHW2+bi5j4ZJSGDMvBBU7jj1RM2w41mfRhzC18y6i/Dv2EwaD2x6rhDCaLLMkvNowAEP3pqOtfwe6OvMHIlYzEcS0WRCjq0DahwyYKRcMy2y9BdW/kGasyGsH8YTA4NZHpqKodDOEHG2bpNQwuPtzRLe+DZjR/INw/YI4YzJk7WnpYdh+5DMwZtK5y/bk6+LyDoPff/QOkHjQAhCHkAzDbP8EaudH+brP49ZLVeMgp0wD2f2ORM2ImywzCjavpC/dmZcJq7zB4HceKUMFXgeJC+LakAIGMyH6ry3A0QKYaigpgTF9JsgQ6WA4/RH1AM28+6fHJZzlCXmBwVvunQZZ+iZIjkvQBg8M1d0Ns+294FtLWQoh4XQhIKdMhaisjDVzk8GwyVCRDdj1wSJa8nyWPdD0Fxc4DN7ywDIQPQiSRpJpcsEwd7dDffqJH7Hltaw47XTImprUJssyY1H9XTt6e+bS3IcDuZHAYHDz9aWomLQOwrgMJO3etNdPCGk1WKLbPwK6CsAsHQcnVVVB1k2y/YjtxF3/ozGNOQLwEprzwAa/T0cgMPjtO2fDKH4JJCcktpYSnbbqOQZz27bCMkvHk2BpKYzJZzojvylgWE1iUwc+3EcX/uLe41WX6XvfMHjznSsg5L0QsjS5tTQAw/xsP9SePc4MnJ9LHoKyhgFZdzpEeUmyZgxoi4IyX0BV+7fpnNz8SM4weMuN5egbuQ5kLACkSN10lbBaSzt3AUePDoEUA/xJ3UGcWANZNcoxV46Z8jaD2WyDUpfTvFVZT1jlBIObb54FUfwihKzN2Fo61gvzk3YgemI7cQEiSKqKxoyEnDje7rG7/UiCT1GdYNVAlzy2MZtryRoGv3XLUrDQM3EVmfyD2XEIal/H8DRLx3Ps5aWQp1aDSE/lpugg2tO7x2BG7qYFq1cOFsigYXDz4kqo8c+AxEIIxywlDG3Y/kFfh7l7P/jznsFew/A8z5CQp4yDKJEp+iHxXrwCq6dx6PANg+mPDAoGv37D+RDGHwFxZnykNak3LaF6IzD3dACRL45ZyvikCIKoHgU5wu3YnQHHuBmzmsXvIKquoYVPZpwrzgiDdVjGhh8shxD3gKRjlpxJIBcMPfegDvVAdegm9wkZ+i8obaLRZZBjK1x+xDW+FR/r4t2gSANd9lTawIe0MLjp+tEoxxpAm6XYlKhr3sGBoVtL5r4j4B5PuExBiSv/F0OlBuSESmdKNxUMHeeguqGiK+iKZ36T6opSwuD1DbOBkqdAYvJApIZnpFVIqD4F87OjQHTIAiryL+VsfqFIQI4vgyjSoUGx1pZ3vl03u8zHUb39dpq1NWEKMwGGZZb+8s1bIMR9gKhMjNQYgMEkoY70Qx3qddZDZHPFX/BzCRBjSyDLnZHfuJlyB9BZx5vQ39dAVzfFJ/fjMPjVb42EUo+D6Do7UsMVtxQPFpDQU6JmZz+45yRx0jk+O2KkATFCpIhEcUEB74AZbaBFL1hhL3b044uLToVRugGgKQkQYkAcGKofMA9GgOjJ56RzYUKlBDlGeCJR3BpiBWcfsSLjFzW9Rrx2sUQZvQ7QPDuw2KURzrHVWuoGVFfBL/7JRWb5LWMAcgxByCQz5Y6UPwDuP5e4qX4+DHoDiEV5J8JgFjC7AO4NtSFnagKQoxii2AvEtWwBfD/xn+sbIeieVDBURIMgIFSInDkMFGSICv0ynXl2JzI+voYELcQv1W8A0aVeGKpPwDzqRIAnD5fZn8Tdv3NgnoRNXB3hHpND3HiksCJOZ5hKFWRl1AHiXtCDY1oz1kHQVV4YbJkt5+UOvbQ6e65euKsnHt257+QZCnEeUFlXbY2XJs4EOuYoPpLrMU9QyTDAnRrG7RD0cDqfkanT5x21jezcC/SfXE1e44yaNDDSdvpckfBun4FXiJu+MRNG0bvWkGua1lTKMMwUA4UhDC8A96BhxtaU7mAss/sZL9U/AZI/CmFk76cD0QzF76Oo+8s2jDWXVqBqzNMAfT2p9x1fRZQ8NhWaKcA/DG5DJHINXd20PXFsan3DtVCiHiSng8Q4KyQiYUmXEVtHMQJCyhBGRhhdUFG9OH1gYU5sPQjU52D1IaA2QhxdSVest4a80w+hr11cllZpa2pb7RHdxFCc0Ge4fEakfzIOH0wdlLD4+d5Uaz4GNdPnhcJv3bothGFLJa2ZivadTgtWf5qNFwphZCOtFOeGMHwKMMjiIYwgpemzrhCGTwEGWTyEEaQ0fdYVwvApwCCLhzCClKbPukIYPgUYZPEQRpDS9FlXCMOnAIMsHsIIUpo+6wph+BRgkMVDGEFK02ddIQyfAgyyeAgjSGn6rCuE4VOAQRYPYQQpTZ91hTB8CjDI4iGMIKXps64Qhk8BBlk8hBGkNH3WFcLwKcAgi4cwgpSmz7qGHsampR9CyLO9QWzR9gPgSGxlTWzdghMNFN8fyfteS8O1xiEeVxc7zy0tb2SR932q1VXOZ0lrJ1znuhMJxI9j37v2cdKXkpB0gGGcOtbeyCAxkQugIqfQ/CeyyvSZY9zU0udAsiFTIpd0mdgypVJNlws902YmiQ92mg2w0u2fkT79duaEkbG0eOmy6kAdwNxVNdlmis4Nxqalt0DIR0MYrlR5iZrxMs1bdWW2FjA3GC23ngEWbSBZlinfVKaEkYn5z9Mnpk+3s0zWu5Gl2lkmX5qh1PfoklVrTggMy3T+9Tad0/xXVk7zVMkh0ySMPAnMVBM2PVpPjXrlZHZ/OWmGBUOvH6+ddCMgddpUvUQgRUZnz2cZMj6n27JhGGmGCTZ/j+LIcjp/1ZHsMNhn5wwj9mPcctdkCPE1GPJCQJ4HKY24IxZF9noOYdiLMi0YzrHUizSdY+u72DmxfTRcCQJiG2DFN0rUCTr0padoTVnPo7W3q/3fOta2PbYBlit7mvWZzk8b20tD5x10Z8RxfIIZ3zHA9X08lep2KHMzONJMF/1ycy4QYmX+D3nVK1h2OOqBAAAAAElFTkSuQmCC"
                         class="rewards"></div>
                <div data-v-4db9d56a="" class="van-col van-col--12">
                    <div data-v-4db9d56a="" class="number1">
                        <div data-v-4db9d56a="">
                            {{$activeMembers1 + $activeMembers2 + $activeMembers3}}
                        </div>
                        <div data-v-4db9d56a="" class="number2">+</div>
                    </div>
                    <div data-v-4db9d56a="" class="number3">Active Members</div>
                    <img data-v-4db9d56a=""
                         src="data:image/png;base64,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"
                         class="rewards"></div>
            </div>
        </div>
    </div>
</div>
@include('app.layout.manu')
</body>
</html>
