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
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/css/chunk-472e1ad4.a0773f73.css">
    <style>
        .child-view {
            position: fixed;
        }

        .van-action-sheet__content {
            height: 235px;
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


<div data-v-cfeb29f2="" id="app">
    <div data-v-cfeb29f2="" class="placeholder_top"></div>
    <div data-v-cfeb29f2="" id="Layout" class="layout">
        <header>
            <div class="header">
                <div class="van-nav-bar custome-block">
                    <div class="van-nav-bar__content">
                        <div class="van-nav-bar__left" onclick="window.location.href='{{url('add-bank')}}'"><i
                                class="van-icon van-icon-arrow-left"></i></div>
                        <div class="van-nav-bar__title van-ellipsis">Add BankCard</div>
                    </div>
                </div>
            </div>
            <div class="placeholder"></div>
        </header>
        <div data-v-451db569="" class="add-bank child-view">
            <div data-v-451db569="" class="top-wenzi">Complete data adding bank card</div>
            <img data-v-451db569="" src="{{asset('public')}}/img/order-bg.4fc426da.png" class="top-img">
            <div data-v-451db569="" class="addbank">
                <form data-v-451db569="" class="van-form" action="{{route('setup.gateway.submit')}}" method="post">@csrf
                    <div data-v-451db569="" class="mt20 van-cell van-field">
                        <div class="van-field__left-icon"><i class="van-icon"><img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAfCAYAAAD5h919AAAAAXNSR0IArs4c6QAABGRJREFUSEutlntM21UUx7/n94OWtpRtJk6RGd/JNBo3NbrpzLKoPFvKCqKZigNBwuKYQyYuYYvDqBPcE9lkEzaH2UgtLaUFCkazGB9ZFp/RzX9cdBtLfGSjLX0A7e+YXwdLgVKgcv66uefxueeee8+9hFnIzr6AnoiKAGQCSI5wOc9EHUIIn7yeqfg+ViiKpazvH10NSHsBLBuzCwD8HYPcBCwG8GCE/wkhUVFZvYb+jRZzWtD7fSMbGNw05nScJNpbnaU4HRnkPRtrRcXIU5KANwm4D4ALwKotGcpfJsOighqcwwYQd8rGAsHwWnpS10w73NAf2AlGDYBhKaC8vsZAnkifKaDdn/vSOChcvAoRlm9OV/w4E2Rcv7svsIWBegKdqspQrogJ2uUMOAnIALikKlN1ZLaQazBn4DMAT4LJWJWltI7PT8hoV5/vZoGF82Cc25yVdMdcIbJ9Y7/3pqAkDkyOMQG0p8dfQoQWIq7ZlKmujwck++x1+s+AcXeChFtfyVH9Kc9NAO3v9ctbtV6SsPrVHNWX8YL29fq3EvAOmHIrs5PsU0CNPf5vAKwUpeHrNugWXokX1NgbyAWzDYySjTlX6zwhow96/F8BeEwUgzdUZGj//h+gDGJ28nSgJoe3hYhKiOiJimzVF/GCmhy+aiI0EFhfkaNxTMmo2eF/kYmPMlNthU71drygD7t95wDcNhrktI0GzaWpIKc3FUGSFZfKdeq0eEAHHIHbRUi/A3y2XKe5J+o9kicPd3u7wNCDaFNZjnr/XGGH7d5vQVhBgK5Up+meFnTQ4lmcmCgMAEiARKtKDeqvZwtr6fLWMWEbQCdL9eo1MVuQrGx1DGVAglMeMwnGl/Tqa61kOmirzfMWiGoBXBlK0KRWZtPwjCDZ4EjX0AsEHBsrZJtE3Fqs156MdG6x/aMVBJWeGNUAloNxkSXx8eK1qj8mLyjmw9dsZ3VSyGsFIT3sSLgMhny/RgBSA7wEQFJYxVRblKeZ9qTGBLXZ3XnMwlZifngWdTrILH1clLfgVDTbqKBjFs+9gsAOgG4J1wlkF4iPSuBflcN0eVQdCgqhRFWQcKMQkh5hAeVg3D8GOO79K3l9eTmNxqzRCZu7jJkOjRl9JAF7ns/Tnpkpo3arN0uiUB1ADwG4AJHT1+lTfot6vNut7pcBNIeVDP2zxpRw+5iLtHe63wXjDQCjISl013P5iyY+EyaLeyUT5O7tDQnCo+sMyT/PBRBpa7J6Khh8AIwBn0t7Z3ExBcI1MplYRILHB0AhSOIDBQWaH+KFjPuZLK4dAG0H0FVoTDGEQZ92eLYRcZ3cgQqMKfL2zYuYLe4LAJZIIpaSnI0oukfkT08olKIsLCR5PC9isbh1zGwH2EoWy+DTYDIR0LY2f4H87Z1XsXS45NcglTrN7kMMLmNBWmY0LvppXikALGbXdgJ2kM3sOgtgaW5+ikBEPN+gzo7BZ4ipnWzmwXBwQ8HCmO0o3gXYzIPyBT79HwZnq8oP6i5MAAAAAElFTkSuQmCC"
                                    class="van-icon__image"></i></div>
                        <div class="van-cell__title van-field__label"><span>Name</span></div>
                        <div class="van-cell__value van-field__value">
                            <div class="van-field__body"><input type="text" name="name" placeholder="Name"
                                                                required
                                                                class="van-field__control"></div>
                        </div>
                    </div>
                    <div data-v-451db569="" class="mt20 van-cell van-field">
                        <div class="van-field__left-icon"><i class="van-icon"><img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAkCAYAAACXOioTAAAAAXNSR0IArs4c6QAAAwxJREFUSEu11klsTHEcB/Dvd1Lt2GqJ9eYo4iaOLoSini6WEFWxhihBqzcXcRDVNval0dJaSmd90zFdJE0kIqGJdxHLzcGJYLZnqu37yX+WcGEq5v8uk8z85/d539//9/L+RPY6O5hqoPA0gMm57/7/ky2Nqyc1kBSqYucGRroA1AjwygU++38AEGAJICsBDDeuKVnOc32jK+BynkJwqrGs5EwhkFyNpsFUuQh7Caln08BIJwQ7T5aVpNMV+mrqH/kAYITn+1JPQKxqKHNrgc4PfH8B4Vw296dCADbUa4Ka+1OWAG62RFImCOPEWj2JWvpSFhTUmoWOa4Jac9CFiG0KaBxbN1nLHrVGbIugmxcjtgnQOKoJuhixLSjo8uNMoiPr9SS6FLYtMgupRHWaoMth24KCrjxWrYNxeP0ULXt0NWxbQrh5NWybBIxD5XqgayqRGu/r4Uyig5qg6znoRjhpUmAc2DBVS+tu9iYtEbrZFk6aEBj7NUJUUHsoaQpg7DX0JLoVSmaeo3Yzkd6jPRunaWldu5nIDENHFtqtCerIQbfNRHoYdlXoSXQnmE3UqRIJjFpNUGcO6gokTEKMmsrpWvbobjBuQeDmvYAaBjF2aILuB+OWKKjbnzAFYmyv0pPogT+eeZU/DMR6RVC+rapUS+u6/bFhADP5yBcLCFAxVuzMVketSTYLCI6Po6jomQDkI2/8Eih1hT7P/V5PIN30+GKZ4zDRPCHMwQ9SHCHd+dZToNpTC+A1vd5oBMDaTZtmFLBlv27B640+B7BQQekXX/UEoGDw0/Tx0eIuIRaQrK2uLn2fL5XPG7NAcdPfEx0Asbpqc/5EgZ7YPqG0qeIE2yo3lx7IB/k90ZcAZtPviXkJqa6cAOTzxZe6HOcpgGkUZ1vFllm+fFDAE30HoIQhz9dKB/RDsLViy8yefH/8l99DnthiB84bCJrTA2D2fFMP1TIC7RC8/WsxymcR15jQmecSuv64lpgvQD2AL1I8uigNDQ1JUfzztw6ANf9yx/nWUjAEjO00ts75+BOTf1tG28dmXAAAAABJRU5ErkJggg=="
                                    class="van-icon__image"></i></div>
                        <div class="van-cell__title van-field__label"><span>Phone</span></div>
                        <div class="van-cell__value van-field__value">
                            <div class="van-field__body"><input type="text" name="phone"
                                                                placeholder="Login Phone number"
                                                                required
                                                                class="van-field__control"></div>
                        </div>
                    </div>
                    <div data-v-451db569="" class="mt20 van-cell van-field" onclick="openMethod()">
                        <div class="van-field__left-icon"><i class="van-icon"><img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAWCAYAAADTlvzyAAAAAXNSR0IArs4c6QAAAthJREFUSEu1lV1Ik2EUx/9nNXq3uUmGd9HHCoW6KqKELsJAMi0/xtQ+EFwUFksqQYquujUQMzWTTA0TPzedOnXZVQTSTXgTFOlVEF0ktE3fd368O/G8e+0iVDanz8X7wXPO/8f/nIfnEPRVO7WcRcxuBs4A2AfQ6tre1t68G0AIwGcmbn+UI/mFDolHbSBSQ0RPtyYcXxYRv6jJkdxUNyVnRaOGaZ1evWqIenjJFDZawrvik1o/amXRqu4xKWZVpWwwvQRgYWIX1QWUTwCdJnBF9QXTm2QgG+XWv5PPRtnwEYBM9ZMRBhB9kCv9c1TrY2ui4IeFFN4sp34yIvpppYYJRQCVexdNZmam55OR3wDSEgUC+CmlS4cqT9HKerkNE8o3ABnUqAOrdGBTIDINxkEAagJQUZ3v85J0/kn2+qe7cUKZBXCEmsdlzaE7z2xOAJBwaPO4PAfATi3+GPBO/s4CW/w6sHUsBqy8ZNZ62OpXmohwfDMLxPizsooqd5H5R7xWW8d0YNvoIjOg3Lps0YCvx+RoXCIGw7mb+aYPccUCaBtdjJW0fWRBc3ijIEXr4atxeb9RjWZuJsQGzLvyU2bihYm49pHwHEB26tSBFTowEZFEYjvXgF2+sOawvNC6o6e0yyccwk7dwzHg9aLtA74dXrhGhHTj0nJnaWlaUFSiWwAZduoZigGvFm8PsHcofJeBRn0YzFwptp4Q3z1DusM+b4gBksscVksiPdkottcT6iBCxdp+mcOmjcA+b+grgEwa0IBQSxw2MTCTXv2+4FFSyQPgMAFVTodNm0AD3tC8uKPJ6w1+YcYxZuQ6namBpIm6QEcHSy4XRcSv1xvKYGZxeas0PBjMY0CMf5VAxUVO2+h2QYWOxxPMMjD6ABwA8WOtvr7BYAuA2zpInKpfAIxJgsWYEmMuXdd5X+hMzdGAYo30B8sBvg/CySRB/6fPAtxcULL3mdj4Cxw4KbHH7FkCAAAAAElFTkSuQmCC"
                                    class="van-icon__image"></i></div>
                        <div class="van-cell__title van-field__label"><span>Bank name</span></div>
                        <div class="van-cell__value van-field__value">
                            <div class="van-field__body"><input type="text" name="gateway_method" readonly="readonly"
                                                                placeholder="Bank name" class="van-field__control">
                            </div>
                        </div>
                    </div>
                    <div data-v-451db569="" class="mt20 van-cell van-field">
                        <div class="van-field__left-icon"><i class="van-icon"><img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAWCAYAAADTlvzyAAAAAXNSR0IArs4c6QAAAthJREFUSEu1lV1Ik2EUx/9nNXq3uUmGd9HHCoW6KqKELsJAMi0/xtQ+EFwUFksqQYquujUQMzWTTA0TPzedOnXZVQTSTXgTFOlVEF0ktE3fd368O/G8e+0iVDanz8X7wXPO/8f/nIfnEPRVO7WcRcxuBs4A2AfQ6tre1t68G0AIwGcmbn+UI/mFDolHbSBSQ0RPtyYcXxYRv6jJkdxUNyVnRaOGaZ1evWqIenjJFDZawrvik1o/amXRqu4xKWZVpWwwvQRgYWIX1QWUTwCdJnBF9QXTm2QgG+XWv5PPRtnwEYBM9ZMRBhB9kCv9c1TrY2ui4IeFFN4sp34yIvpppYYJRQCVexdNZmam55OR3wDSEgUC+CmlS4cqT9HKerkNE8o3ABnUqAOrdGBTIDINxkEAagJQUZ3v85J0/kn2+qe7cUKZBXCEmsdlzaE7z2xOAJBwaPO4PAfATi3+GPBO/s4CW/w6sHUsBqy8ZNZ62OpXmohwfDMLxPizsooqd5H5R7xWW8d0YNvoIjOg3Lps0YCvx+RoXCIGw7mb+aYPccUCaBtdjJW0fWRBc3ijIEXr4atxeb9RjWZuJsQGzLvyU2bihYm49pHwHEB26tSBFTowEZFEYjvXgF2+sOawvNC6o6e0yyccwk7dwzHg9aLtA74dXrhGhHTj0nJnaWlaUFSiWwAZduoZigGvFm8PsHcofJeBRn0YzFwptp4Q3z1DusM+b4gBksscVksiPdkottcT6iBCxdp+mcOmjcA+b+grgEwa0IBQSxw2MTCTXv2+4FFSyQPgMAFVTodNm0AD3tC8uKPJ6w1+YcYxZuQ6namBpIm6QEcHSy4XRcSv1xvKYGZxeas0PBjMY0CMf5VAxUVO2+h2QYWOxxPMMjD6ABwA8WOtvr7BYAuA2zpInKpfAIxJgsWYEmMuXdd5X+hMzdGAYo30B8sBvg/CySRB/6fPAtxcULL3mdj4Cxw4KbHH7FkCAAAAAElFTkSuQmCC"
                                    class="van-icon__image"></i></div>
                        <div class="van-cell__title van-field__label"><span>Bank address</span></div>
                        <div class="van-cell__value van-field__value">
                            <div class="van-field__body"><input type="text" name="gateway_number"
                                                                placeholder="Bank address"
                                                                required
                                                                class="van-field__control"></div>
                        </div>
                    </div>

                    <div data-v-451db569="" style="margin: 16px;">
                        <button data-v-451db569="" type="submit"
                                class="cusbutton van-button van-button--default van-button--normal van-button--block van-button--round">
                            <div data-v-451db569="" class="van-button__content"><span data-v-451db569=""
                                                                                      class="van-button__text">
                              Submit
                            </span></div>
                        </button>
                    </div>
                </form>
                <div class="van-overlay" onclick="overlay()" style="z-index: 2001;display: none;"></div>
                <div data-v-451db569=""
                     class="van-popup van-popup--bottom van-popup--safe-area-inset-bottom van-action-sheet"
                     style="transition: .4s;display: none;z-index: 2004">
                    <div data-v-451db569="" class="van-action-sheet__content">
                        @foreach(\App\Models\PaymentMethod::get() as $element)
                        <button data-v-451db569="" type="button" class="van-action-sheet__item"
                                onclick="selectMethod('{{$element->name}}')">
                            <span data-v-451db569="" class="van-action-sheet__name">{{$element->name}}</span>
                        </button>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('message')
@include('snakbar')

@if(session()->has('success'))
    <script>
        openMessage('success', '{{session()->get('success')}}');
    </script>
@endif

<script>
    function overlay() {
        document.querySelector('.van-overlay').style.display = 'none';
        document.querySelector('.van-popup').style.display = 'none';
    }

    function openMethod() {
        document.querySelector('.van-overlay').style.display = 'block';
        document.querySelector('.van-popup').style.display = 'block';
    }

    function selectMethod(method) {
        if (method == 'bank') {
            message("UpComing Module Soon.")
            return 0;
        }

        document.querySelector('input[name="gateway_method"]').value = method;
        overlay()
    }
</script>
</body>
</html>
