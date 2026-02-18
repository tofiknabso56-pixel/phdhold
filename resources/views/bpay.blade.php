<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('public/bpay')}}/common.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public/bpay')}}/bpay-style.css">
    <title>Fund Transfer</title>
</head>
<body>
<?php
function amounts($amount){
    return '৳'.number_format($amount, 2);
}
?>
<div class="main-container">
    <div id="kontainer">
        <div class="bpay-container" id="bpay-container">
            <div class="background-top"></div>
            <div class="bpay-timer">
                <div class="bpay-timer-title">  সেন্ড মানি </div>
                <div class="bpay-timer-count"
                     id="timer" data-hours="00" data-minutes="59" data-seconds="0"></div>
                <div class="bpay-timer-subtitle">অবশিষ্ট সময়</div>
            </div>
            <div class="bpay-body">
                <div class="bpay-body-logo">
                    @if($method == 'bkash')
                        <img src="{{asset('public/bpay')}}/bkash-logo (1).png" alt="bkash"/>
                    @else
                        <img src="{{asset('public/bpay')}}/nagad-logo.png" alt="nagad"/>
                    @endif
                </div>

                <div class="bpay-body-label">
                    @if($method == 'bkash')
                        নিচের বিকাশ নম্বরে অনুরোধকৃত পরিমাণ
                        টাকা সেন্ড মানি করুন। নিশ্চিত করুন যে আপনি সঠিক লেনদেন আইডি প্রবেশ করেছেন
                    @else
                        নীচের নগদ নম্বরে অনুরোধ করা পরিমাণ
                        নগদ আউট. নিশ্চিত করুন যে আপনি সঠিক লেনদেন আইডি প্রবেশ করেছেন
                    @endif
                </div>

                <div class="bpay-body-table">
                    <form action="" method="get" id="payment_submit">
                        <input type="hidden" name="amount" value="{{$amount}}">
                        <input type="hidden" name="method" value="{{$method}}">
                        <table>
                            <tr>
                                <td class="width-40">পরিমাণ:</td>
                                <td class="td-value" colspan="2">{{amounts($amount)}}</td>
                            </tr>
                            <tr>
                                <td class="width-40">
                                    <span> @if($method == 'bkash') বিকাশ @else নগদ  @endif নাম্বার:</span>
                                </td>
                                <td class="td-value" colspan="1">{{$number}}</td>
                                <td style="width:20px;">
                                    <img src="{{asset('public/bpay')}}/copy.png" alt="copy" onclick="copyNumber('{{$number}}')" style="width:100%;cursor: pointer;"/>
                                </td>
                            </tr>
                            <tr>
                                <td class="width-40"> সেন্ড মানি  ফ্রম:</td>
                                <td class="td-input" colspan="2">
                                    <input type="text" placeholder="11 সংখ্যার মোবাইল নম্বর" name="mobile_number" class="bpay-input"/>
                                </td>
                            </tr>
                            <tr>
                                <td class="width-40">ট্রানসাকশান আইডি:</td>
                                <td class="td-input" colspan="2">
                                    <input type="text" placeholder="ট্রানসাকশান আইডি লিখুন" name="trx_id" class="bpay-input"/>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div class="bpay-body-button">
                    <button onclick="payment_submit_confirm()">সাবমিট করুন</button>
                </div>
                <div class="bpay-body-logo2">
                    <img onclick="window.location.href='https://www.bpay.com.au/'" src="{{asset('public/bpay')}}/bpay-logo.png" alt="bpay"/>
                </div>
            </div>
        </div>
    </div>
</div>


<link rel="stylesheet" href="{{asset('public/bpay/assets')}}/loading.css">

<div class="message">
    <div class="preloading">
        <img src="{{asset('public/bpay/assets/time_loading.gif')}}" alt="">
        <p>Loading...</p>
    </div>
</div>
<div class="shortMessage">
    <p id="stMessage" style="margin: 0;"></p>
</div>

<script src="{{asset('public/bpay/assets/loading.js')}}"></script>




<script>
    windowLoading('');
    function payment_submit_confirm(){
        let amount = document.querySelector('input[name="amount"]').value;
        let trx_id = document.querySelector('input[name="trx_id"]').value;
        let number = document.querySelector('input[name="mobile_number"]').value;
        let method = document.querySelector('input[name="method"]').value;

        if (trx_id == ''){
            windowLoading('সঠিক নিয়মে ট্রাব্জেকশন আইডি লিখুন।');
            return 0;
        }
        if (number == ''){
            windowLoading('ডিপোজিট সমন্য করতে আপনার নাম্বার টি লেখুন');
            return 0;
        }

        windowLoading('');
        window.location.href = '{{$response_url}}'+"/"+method+"/"+trx_id+"/"+number+"/"+amount+"/"+true;
    }

    function copyNumber(text){
        const body = document.body;
        const input = document.createElement("input");
        body.append(input);
        input.style.opacity = 0;
        input.value = text.replaceAll(' ', '');
        input.select();
        input.setSelectionRange(0, input.value.length);
        document.execCommand("Copy");
        input.blur();
        input.remove();
        windowLoading('অনুলিপি কপি করা হয়েছে।')
    }

    function goBack()
    {
        window.location.href = '{{$response_url}}';
    }

</script>

<script>
    var clock = document.getElementById('timer');

    var hours = 0;
    if (sessionStorage.getItem('hours') != null) {
        hours = sessionStorage.getItem('hours');
    }
    clock.setAttribute('data-hours', hours);

    var minutes = 59;
    if (sessionStorage.getItem('minutes') != null) {
        minutes = sessionStorage.getItem('minutes');
    }
    clock.setAttribute('data-minutes', minutes);

    var seconds = 0;
    if (sessionStorage.getItem('seconds') != null) {
        seconds = sessionStorage.getItem('seconds');
    }
    clock.setAttribute('data-seconds', seconds);
</script>

<script>
    const oneSec = 1000,
        container = document.getElementById('timer');

    let dataHours = container.getAttribute('data-hours'),
        dataMinutes = container.getAttribute('data-minutes'),
        dataSeconds = container.getAttribute('data-seconds'),
        timerEnd = container.getAttribute('data-timer-end'),
        timerOnEndMsg = "data-timer-end";

    if (dataHours == '' || dataHours == null || dataHours == NaN) {
        dataHours = "0";
    }
    if (dataMinutes == '' || dataMinutes == null || dataMinutes == NaN) {
        dataMinutes = "0";
    }
    if (dataSeconds == '' || dataSeconds == null || dataSeconds == NaN) {
        dataSeconds = "0";
    }

    let hoursSpan = document.createElement('span'),
        minutesSpan = document.createElement('span'),
        secondsSpan = document.createElement('span'),
        separator1 = document.createElement('span'),
        separator2 = document.createElement('span'),
        separatorValue = ":",
        max = 59,
        s = parseInt(dataSeconds) > max ? max : parseInt(dataSeconds),
        m = parseInt(dataMinutes) > max ? max : parseInt(dataMinutes),
        h = parseInt(dataHours);

    secondsSpan.classList.add('time');
    minutesSpan.classList.add('time');
    hoursSpan.classList.add('time');
    separator1.classList.add('separator');
    separator1.textContent = separatorValue;
    separator2.classList.add('separator');
    separator2.textContent = separatorValue;

    checkValue = (value) => {
        if (value < 10) {
            return "0" + value;
        } else {
            return value;
        }
    }

    hoursSpan.textContent = checkValue(dataHours);

    var minutes = checkValue(dataMinutes)
    var seconds = checkValue(dataSeconds)

    if (minutes.length > 2) {
        minutes = minutes.slice(1, minutes.length);
    }
    minutesSpan.textContent = minutes;

    if (seconds.length > 2) {
        seconds = seconds.slice(1, seconds.length);
    }
    secondsSpan.textContent = seconds;

    timer = (sv, mv, hv) => {

        s = parseInt(sv);
        m = parseInt(mv);
        h = parseInt(hv);

        if (s > 0) {
            return s -= 1;
        } else {
            s = max;
            if (m > 0) {
                return m -= 1;
            } else {
                m = max;
                if (h > 0) {
                    return h -= 1;
                }
            }
        }
    }

    finished = () => {
        max = 0;
        let timerEnd = container.getAttribute(timerOnEndMsg);
        container.setAttribute(timerOnEndMsg, 'true');
        if (timerEnd == '' || timerEnd == null) {
            document.querySelector('.popup_failer').style.display = 'block';
            window.location.href = '{{$response_url}}';
        } else {
            container.textContent = timerEnd;
        }
    }

    counter = setInterval(() => {

        if (h == 0 && m == 0 && s == 0) {
            clearInterval(counter, finished());
        }

        if (s >= 0) {
            timer(s, m, h);
            sessionStorage.setItem('seconds', checkValue(s))
            sessionStorage.setItem('minutes', checkValue(m))
            sessionStorage.setItem('hours', checkValue(h))

            hoursSpan.textContent = checkValue(h);
            minutesSpan.textContent = checkValue(m);
            secondsSpan.textContent = checkValue(s);
        }
    }, oneSec);

    let children = [minutesSpan, separator2, secondsSpan];

    for (child of children) {
        container.appendChild(child);
    }
</script>
</body>
</html>

