<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, viewport-fit=cover">
    <link rel="stylesheet" href="{{asset('public/login')}}/static/index.2da1efab.css">
    <link rel="stylesheet" href="{{asset('public/login')}}/static/register.css">
</head>
<body class="uni-body pages-login-regs">
<form data-v-7217d03a="" action="{{url('register')}}" method="post" class="van-form">
    @csrf
    <uni-app class="uni-app--maxwidth">
        <uni-page data-page="pages/login/regs">
            <uni-page-wrapper>
                <uni-page-body>
                    <uni-view data-v-77be8aa4="" class="phone_login">
                        <uni-view data-v-77be8aa4="" class="status_bar"></uni-view>
                        <uni-view data-v-77be8aa4="" class="close">X</uni-view>
                        <uni-view data-v-77be8aa4="" class="logo">
                            <uni-image data-v-77be8aa4="">
                                <div
                                    style="background-image: url({{asset('public/login')}}/static/img/2e4127505100e1ff6f44d3d34c60dcef.png); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
                                <img src="{{asset('public/login')}}/static/img/2e4127505100e1ff6f44d3d34c60dcef.png"
                                     draggable="false"></uni-image>
                        </uni-view>
                        <uni-view data-v-77be8aa4="" class="phone_text" style="width: 100%; margin: 16px 0px;"><font
                                style="vertical-align: inherit;"><font style="vertical-align: inherit;">Your financial
                                    expert
                                </font></font></uni-view>
                        <uni-view data-v-77be8aa4="" class="input_1 view_input">
                            <uni-image data-v-77be8aa4="" class="icos">
                                <div
                                    style="background-image: url({{asset('public/login')}}/static/img/mobile.e816831b.png); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
                                <img src="{{asset('public/login')}}/static/img/mobile.e816831b.png" draggable="false">
                            </uni-image>
                            +
                            <uni-input data-v-77be8aa4="">
                                <div class="uni-input-wrapper">
                                    <input maxlength="11" step="0.000000000000000001" pattern="[0-9]*"
                                           name="phone"
                                           placeholder="Phone number" autocomplete="off" type="number"
                                           class="uni-input-input"></div>
                            </uni-input>
                        </uni-view>

                        <uni-view data-v-77be8aa4="" class="view_input">
                            <uni-image data-v-77be8aa4="" class="icos">
                                <div
                                    style="background-image: url({{asset('public/login')}}/static/img/pass.e34754cc.png); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
                                <img src="{{asset('public/login')}}/static/img/pass.e34754cc.png" draggable="false">
                            </uni-image>
                            <uni-input data-v-77be8aa4="">
                                <div class="uni-input-wrapper">
                                    <input maxlength="20" step="" autocomplete="off" type="password"
                                           name="password"
                                           placeholder="Login password" class="uni-input-input"></div>
                            </uni-input>
                        </uni-view>

                        <uni-view data-v-77be8aa4="" class="view_input">
                            <uni-image data-v-77be8aa4="" class="icos">
                                <div
                                    style="background-image: url({{asset('public/login')}}/static/img/pass.e34754cc.png); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
                                <img src="{{asset('public/login')}}/static/img/pass.e34754cc.png" draggable="false">
                            </uni-image>
                            <uni-input data-v-77be8aa4="">
                                <div class="uni-input-wrapper">
                                    <input maxlength="20" step="" autocomplete="off" type="password"
                                           name="confirm_password"
                                           placeholder="Confirm password" class="uni-input-input"></div>
                            </uni-input>
                        </uni-view>

                        <uni-view data-v-77be8aa4="" class="view_input">
                            <uni-image data-v-77be8aa4="" class="icos">
                                <div
                                    style="background-image: url({{asset('public/login')}}/static/img/yao.ce965e2b.png); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
                                <img src="{{asset('public/login')}}/static/img/yao.ce965e2b.png" draggable="false">
                            </uni-image>
                            <uni-input data-v-77be8aa4="">
                                <div class="uni-input-wrapper">
                                    <input name="ref_by"
                                           value="{{isset($ref_by) && !empty($ref_by) && $ref_by != null ? $ref_by : rand(0,9999).rand(0,9999)}}"
                                           placeholder="Invitation code (optional)" autocomplete="off" type="text"
                                           class="uni-input-input"></div>
                            </uni-input>
                        </uni-view>

                        <uni-view data-v-77be8aa4=""
                                  onclick="window.location.href='{{url('login')}}'"
                                  style="width: 100%; text-align: right; padding: 0px 25px; box-sizing: border-box;">
                            <uni-text data-v-77be8aa4="" style="font-size: 16px; color: rgb(229, 62, 70);"><span><font
                                        style="vertical-align: inherit;"><font
                                            style="vertical-align: inherit;">Login portal</font></font></span>
                            </uni-text>
                        </uni-view>
                        <uni-view data-v-77be8aa4="" class="btn_1" onclick="login()"><font style="vertical-align: inherit;"><font
                                    style="vertical-align: inherit;">Register</font></font></uni-view>
                        <uni-view data-v-77be8aa4="" class="btn_2"
                                  onclick="window.location.href=''"
                                  style="opacity: 0.9; width: 80%; justify-content: center; align-items: center;"><font
                                style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                    Customer service
                                </font></font></uni-view>
                        <uni-view data-v-77be8aa4="" class="btn_5">
                            <uni-image data-v-77be8aa4="">
                                <div
                                    style="background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMgAAADICAYAAACtWK6eAAAFB0lEQVR4nO3dzbXTSBCAUcEhLCKbAIiMvGYWjM8z8FxWq39U3X3vFhZg1+eSbUk+AAAAAAAAAADgnC9Fj9OP760f1n89T5xQNqfv/PPz9F/9dsOzIwpKPc9M21jeGBWIKGhlaCxfBzxt4qCX7rPVc4MIgxEec9Zlm/TaIOJgtC4z13qDCIM7Nd8mLTeIOMii2Sy2CkQcZNNkJlsEIg6yqp7N2kDEQXZVMzriexCYVk0gtgezuDyrNggErgZiezCbSzNrg0DgSiC2B7Mqnl0bBAICgUBpIA6vmF3RDNsgEBAIBAQCAYFAQCAQEAgEBAIBgUBAIBAQCAQEAgGBQEAgEBAIBAQCAYFAQCAQEAgEBAIBgUBAIBAQCAQEAgGBQEAgEGj9M9Dwmc9+lnmKu3QKhJ6i3yt//rO0sTjEoocvhT/m3+yH/1sTCK1dHfbSqIYQCC2l3QRXCYRWWsWRKjKB0ELroU4TiUCotdxh1TOBUKNnHCnCEwhXLb05HgTCFVvEcQiEC7aJ4xAIhbaK4xAIBbaL4xAIJ20ZxyEQTrgrjhRn+AqEyLab40EgvHJnHGmuDxEInxHH/7JfUXj2iZri8s1JbH9Y9SzzBim9Is0TW+/uxzDdC13WQGquSmPOxy7lUUDGQGqfKJGUE8cL2QJZ8qq05MQRyBTIslelJSaON1b/mFckr4njhCyBLH9lWjLiOGmXLwpF8kEcBXb6Jl0k4ii226kmO0cijgt2PBdrx0jEcdGuJyvuFIk4Kux8Nu8OkYijUpZA7nogV45EHA24HmTNSMTRSKZA7nxQV4pEHA3ZIB9WiEQcjWUL5O4HeOZIxNFBxg0iknLi6CTrIZZIzhNHR5nfg4jkPXF0lv1NukheE8cAM3yKJZK/iWOQWT7mFckHcQw00/cgIhHHcLN9UbhzJOK4wYzfpO8YiThuMuupJjtFIo4bzXwu1g6RiONms5+suHIk4khghbN5V4xEHEmscrr7SpGII5GVrgdZIRJxJLPaBVMzRyKOhFa8onDGSMSR1KqX3M4UiTgSW/ma9BkiEUdyq9+0IXMk4pjADnc1yRiJOCaxy21/MkUijonsdF+sDJGIYzK73Thu5wERxwU73llxx0ERx0W73np0p4ERR4Wd7827w+CIo9LuN69eeYDE0cDugRyLDpI4GhHILysNlDgaEsiHFQZLHI0J5HczD5g4OhDI32YcNHF0IpDPzTRw4uhIIK/NMHji6EwgscwDKI4BBPJexkEUxyACOSfTQIpjIIGcl2EwxTGYQMrcOaDiuIFAyt0xqOK4iUCuGTmw4riRQK4bMbjiuJlA6vQcYHEkIJB6PQZZHEkIpI2WAy2ORATSTovBFkcyAmmrZsDFkdC33R+ADh6DfvYuisJITCD9PA/+n7GIYhICGUMQk/IeBAICgYBAICAQCAgEAgKBgEAgIBAICAQCAoGAQCAgEAgIBAICgYBAICAQCAgEAgKBgEAgIBAICAQCAoGAQCAgEAgIBAKlgZy93yxkVTTDNggEBAKBK4E4zGJWxbNrg0DgaiC2CLO5NLM2CARqArFFmMXlWbVBIFAbiC1CdlUz2mKDiISsqmez1SGWSMimyUy2fA8iErJoNoutfwb68Q/zs8fcofmLdK9PsWwTRusyc603yDPbhBG6vhiP+B7ENqGX7rPVc4M8e/6P2CjUGPqCOyqQZ2KhlKMQAAAAAAAAAABSO47jP0XmpHh+woaVAAAAAElFTkSuQmCC); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
                                <img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMgAAADICAYAAACtWK6eAAAFB0lEQVR4nO3dzbXTSBCAUcEhLCKbAIiMvGYWjM8z8FxWq39U3X3vFhZg1+eSbUk+AAAAAAAAAADgnC9Fj9OP760f1n89T5xQNqfv/PPz9F/9dsOzIwpKPc9M21jeGBWIKGhlaCxfBzxt4qCX7rPVc4MIgxEec9Zlm/TaIOJgtC4z13qDCIM7Nd8mLTeIOMii2Sy2CkQcZNNkJlsEIg6yqp7N2kDEQXZVMzriexCYVk0gtgezuDyrNggErgZiezCbSzNrg0DgSiC2B7Mqnl0bBAICgUBpIA6vmF3RDNsgEBAIBAQCAYFAQCAQEAgEBAIBgUBAIBAQCAQEAgGBQEAgEBAIBAQCAYFAQCAQEAgEBAIBgUBAIBAQCAQEAgGBQEAgEGj9M9Dwmc9+lnmKu3QKhJ6i3yt//rO0sTjEoocvhT/m3+yH/1sTCK1dHfbSqIYQCC2l3QRXCYRWWsWRKjKB0ELroU4TiUCotdxh1TOBUKNnHCnCEwhXLb05HgTCFVvEcQiEC7aJ4xAIhbaK4xAIBbaL4xAIJ20ZxyEQTrgrjhRn+AqEyLab40EgvHJnHGmuDxEInxHH/7JfUXj2iZri8s1JbH9Y9SzzBim9Is0TW+/uxzDdC13WQGquSmPOxy7lUUDGQGqfKJGUE8cL2QJZ8qq05MQRyBTIslelJSaON1b/mFckr4njhCyBLH9lWjLiOGmXLwpF8kEcBXb6Jl0k4ii226kmO0cijgt2PBdrx0jEcdGuJyvuFIk4Kux8Nu8OkYijUpZA7nogV45EHA24HmTNSMTRSKZA7nxQV4pEHA3ZIB9WiEQcjWUL5O4HeOZIxNFBxg0iknLi6CTrIZZIzhNHR5nfg4jkPXF0lv1NukheE8cAM3yKJZK/iWOQWT7mFckHcQw00/cgIhHHcLN9UbhzJOK4wYzfpO8YiThuMuupJjtFIo4bzXwu1g6RiONms5+suHIk4khghbN5V4xEHEmscrr7SpGII5GVrgdZIRJxJLPaBVMzRyKOhFa8onDGSMSR1KqX3M4UiTgSW/ma9BkiEUdyq9+0IXMk4pjADnc1yRiJOCaxy21/MkUijonsdF+sDJGIYzK73Thu5wERxwU73llxx0ERx0W73np0p4ERR4Wd7827w+CIo9LuN69eeYDE0cDugRyLDpI4GhHILysNlDgaEsiHFQZLHI0J5HczD5g4OhDI32YcNHF0IpDPzTRw4uhIIK/NMHji6EwgscwDKI4BBPJexkEUxyACOSfTQIpjIIGcl2EwxTGYQMrcOaDiuIFAyt0xqOK4iUCuGTmw4riRQK4bMbjiuJlA6vQcYHEkIJB6PQZZHEkIpI2WAy2ORATSTovBFkcyAmmrZsDFkdC33R+ADh6DfvYuisJITCD9PA/+n7GIYhICGUMQk/IeBAICgYBAICAQCAgEAgKBgEAgIBAICAQCAoGAQCAgEAgIBAICgYBAICAQCAgEAgKBgEAgIBAICAQCAoGAQCAgEAgIBAKlgZy93yxkVTTDNggEBAKBK4E4zGJWxbNrg0DgaiC2CLO5NLM2CARqArFFmMXlWbVBIFAbiC1CdlUz2mKDiISsqmez1SGWSMimyUy2fA8iErJoNoutfwb68Q/zs8fcofmLdK9PsWwTRusyc603yDPbhBG6vhiP+B7ENqGX7rPVc4M8e/6P2CjUGPqCOyqQZ2KhlKMQAAAAAAAAAABSO47jP0XmpHh+woaVAAAAAElFTkSuQmCC"
                                    draggable="false"></uni-image>
                            <uni-view data-v-77be8aa4="" style="height: 111px;"><font
                                    style="vertical-align: inherit;"><font
                                        style="vertical-align: inherit;">Read and agree
                                    </font></font>
                                <uni-text data-v-77be8aa4=""><span><font style="vertical-align: inherit;"><font
                                                style="vertical-align: inherit;">【Privacy Policy】</font></font></span>
                                </uni-text>
                                <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                        and the
                                    </font></font>
                                <uni-text data-v-77be8aa4=""><span><font style="vertical-align: inherit;"><font
                                                style="vertical-align: inherit;">【User Agreement】</font></font></span>
                                </uni-text>
                            </uni-view>
                        </uni-view>
                    </uni-view>
                </uni-page-body>
            </uni-page-wrapper>
        </uni-page>
    </uni-app>
</form>
@include('alert-message')

<script>
    function login(){
        document.querySelector('form').submit();
    }
</script>
</body>
</html>
