<uni-view data-v-3ffde9a1="" data-v-00e6788a="" data-v-9aed459c="" class="uni-popup left" id="popUp_left" style="display: none;">
    <uni-view data-v-3ffde9a1="">
        <uni-view data-v-1a12f82f="" data-v-3ffde9a1="" class="" onclick="closeBuyModal('popUp_left')" name="mask" style="opacity: 1; position: fixed; inset: 0px; background-color: rgba(0, 0, 0, 0.4); transition: opacity 300ms ease 0ms, -webkit-transform 300ms ease 0ms, transform 300ms ease 0ms; transform-origin: 50% 50%;"></uni-view>
        <uni-view data-v-1a12f82f="" data-v-3ffde9a1="" class="" name="content" style="transform: translateX(0px); opacity: 1; position: fixed; left: 0px; bottom: 0px; top: 0px; background-color: transparent; display: flex; flex-direction: column; transition: -webkit-transform 300ms ease 0ms, transform 300ms ease 0ms; transform-origin: 50% 50%;">
            <uni-view data-v-3ffde9a1="" class="uni-popup__wrapper left" style="background-color: transparent;">
                <uni-scroll-view data-v-00e6788a="" class="user-wrap">
                    <div class="uni-scroll-view">
                        <div class="uni-scroll-view" style="overflow: hidden auto;">
                            <div class="uni-scroll-view-content">
                                <uni-view data-v-00e6788a="" class="user-content">
                                    <uni-view data-v-00e6788a="" class="close" onclick="closeBuyModal('popUp_left')">
                                        <uni-text data-v-0a75b799="" data-v-00e6788a="" style="color: rgb(255, 255, 255); font-size: 20px;">
                                            <img style="filter: unset !important;width: 25px;" class="right_chevron" src="{{asset('public/close.png')}}" alt="">
                                        </uni-text>
                                    </uni-view>
                                    <uni-image data-v-00e6788a="" class="avatar">
                                        <div style="background-image: url({{asset('public')}}/NuStar-logo-scaled.webp); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
                                        <img src="{{asset('public')}}/static/img/logo.jpg" draggable="false">
                                    </uni-image>
                                    <uni-view data-v-00e6788a="" class="app-name">{{env('APP_NAME')}}</uni-view>
                                    <uni-view data-v-00e6788a="">{{auth()->user()->phone}}(ID:{{auth()->user()->ref_id}})</uni-view>
                                    <uni-view data-v-00e6788a="" class="menu">
                                        <uni-view data-v-00e6788a="" class="menu-item" onclick="window.location.href='{{route('user.deposit')}}'">
                                            <uni-view data-v-00e6788a="" class="menu-img d-c-c">
                                                <uni-image data-v-00e6788a="">
                                                    <div style="background-image: url({{asset('public')}}/icons8-bank-94.png); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
                                                    <img src="{{asset('public')}}/icons8-bank-94.png" draggable="false"></uni-image>
                                            </uni-view>
                                            <uni-text data-v-00e6788a=""><span>Recharge</span></uni-text>
                                        </uni-view>
                                        <uni-view data-v-00e6788a="" class="menu-item" onclick="window.location.href='{{route('user.withdraw')}}'">
                                            <uni-view data-v-00e6788a="" class="menu-img d-c-c">
                                                <uni-image data-v-00e6788a="">
                                                    <div style="background-image: url({{asset('public')}}/icons8-fund-94.png); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
                                                    <img src="{{asset('public')}}/icons8-fund-94.png" draggable="false"></uni-image>
                                            </uni-view>
                                            <uni-text data-v-00e6788a=""><span>Withdraw</span></uni-text>
                                        </uni-view>
                                        <uni-view data-v-00e6788a="" class="menu-item" onclick="window.location.href='{{route('user.bank')}}'">
                                            <uni-view data-v-00e6788a="" class="menu-img d-c-c">
                                                <uni-image data-v-00e6788a="">
                                                    <div style="background-image: url({{asset('public')}}/icons8-account-94.png); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
                                                    <img src="{{asset('public')}}/icons8-account-94.png" draggable="false"></uni-image>
                                            </uni-view>
                                            <uni-text data-v-00e6788a=""><span>Account</span></uni-text>
                                        </uni-view>
                                    </uni-view>
                                    <uni-view data-v-00e6788a="" class="tool-box">
                                        <uni-view data-v-00e6788a="" class="tool-item d-b-c" onclick="window.location.href='{{route('user.balance.history')}}'">
                                            <uni-text data-v-00e6788a="" class="flex-1"><span>Assets History</span>
                                            </uni-text>
                                            <uni-text data-v-00e6788a="" class="ui orange" style="text-align: right;">
                                                <span>{{price(auth()->user()->balance)}}</span></uni-text>
                                            <uni-text data-v-0a75b799="" data-v-00e6788a="" style="color: rgb(255, 255, 255); font-size: 20px;">
                                                <img class="right_chevron" src="{{asset('public/right.png')}}" alt="">
                                            </uni-text>
                                        </uni-view>
                                        <uni-view data-v-00e6788a="" class="tool-item d-b-c" onclick="window.location.href='{{route('user.change.password')}}'">
                                            <uni-text data-v-00e6788a="" class="flex-1"><span>Change Password</span>
                                            </uni-text>
                                            <uni-text data-v-0a75b799="" data-v-00e6788a="" style="color: rgb(255, 255, 255); font-size: 20px;">
                                                <img class="right_chevron" src="{{asset('public/right.png')}}" alt="">
                                            </uni-text>
                                        </uni-view>
                                        <uni-view data-v-00e6788a="" class="tool-item d-b-c" onclick="window.location.href='{{route('user.service')}}'">
                                            <uni-text data-v-00e6788a="" class="flex-1"><span>Customer Service</span>
                                            </uni-text>
                                            <uni-text data-v-0a75b799="" data-v-00e6788a="" style="color: rgb(255, 255, 255); font-size: 20px;">
                                                <img class="right_chevron" src="{{asset('public/right.png')}}" alt="">
                                            </uni-text>
                                        </uni-view>
                                        <uni-view data-v-00e6788a="" class="tool-item d-b-c" onclick="window.location.href='{{route('about')}}'">
                                            <uni-text data-v-00e6788a="" class="flex-1"><span>About Us</span>
                                            </uni-text>
                                            <uni-text data-v-0a75b799="" data-v-00e6788a="" style="color: rgb(255, 255, 255); font-size: 20px;">
                                                <img class="right_chevron" src="{{asset('public/right.png')}}" alt="">
                                            </uni-text>
                                        </uni-view>
                                        <uni-view data-v-00e6788a="" class="tool-item d-b-c" onclick="window.location.href='{{route('user.download.apk')}}'">
                                            <uni-text data-v-00e6788a="" class="flex-1"><span>Download App</span>
                                            </uni-text>
                                            <uni-text data-v-0a75b799="" data-v-00e6788a="" style="color: rgb(255, 255, 255); font-size: 20px;">
                                                <img class="right_chevron" src="{{asset('public/right.png')}}" alt="">
                                            </uni-text>
                                        </uni-view>
                                        <uni-view data-v-00e6788a="" class="tool-item d-b-c" onclick="window.location.href='{{route('logout')}}'">
                                            <uni-text data-v-00e6788a="" class="flex-1">
                                                <span>Quit</span></uni-text>
                                            <uni-text data-v-0a75b799="" data-v-00e6788a="" style="color: rgb(255, 255, 255); font-size: 20px;">
                                                <img class="right_chevron" src="{{asset('public/right.png')}}" alt="">
                                            </uni-text>
                                        </uni-view>
                                    </uni-view>
                                </uni-view>
                            </div>
                        </div>
                    </div>
                </uni-scroll-view>
            </uni-view>
        </uni-view>
    </uni-view>
</uni-view>
