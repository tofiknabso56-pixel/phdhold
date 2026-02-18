<!DOCTYPE html>
<html lang="en">
<head>
    <title>Safe-payment</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="{{asset('public/style.css')}}">
    <style>
        body{
            background: transparent;
        }
        .list-group-item {
            padding: 18px 0;
        }
    </style>
</head>
<body>
<div class="header">
    <div onclick="window.location.href='{{route('user.deposit')}}'"><i class="fa fa-chevron-left"></i></div>
    <div><h4>Choose Payment Method</h4></div>
    <div></div>
</div>
<div class="container">

    <ul class="list-group">
        <li class="list-group-item" style="border-top: none; border-bottom: 1px solid #ddd;" onclick="goPaymentMethod('bkash')">
            <div style="display: flex;justify-content: space-between;">
                <div style="font-weight: bold"><img style="width: 25px;height: 25px;border-radius: 50px;" src="{{asset('public/b.png')}}" alt=""> bKash</div>
                <div class="checker bkash" style="background: transparent;color: #000000;"><i class="fa fa-check"></i></div>
            </div>
        </li>
        <li class="list-group-item" style="border-bottom: none;" onclick="goPaymentMethod('nagad')">
            <div style="display: flex;justify-content: space-between;">
                <div style="font-weight: bold"><img style="width: 25px;height: 25px;border-radius: 50px;" src="{{asset('public/n.jpeg')}}" alt=""> Nagad</div>
                <div class="checker nagad" style="background: transparent;color: #000000;"><i class="fa fa-check"></i></div>
            </div>
        </li>
    </ul>

    <div class="submit_btn">
        <a href="javascript:void(0)" onclick="goPa()">Confirm</a>
    </div>
{{--    window.location.href = '{{url('/payment-confirmation/bkash/'.$amount)}}';--}}
    <input type="hidden" name="method" value="">
    <script>
        function goPaymentMethod(method){
            let nagad = document.querySelector('.nagad');
            let bkash = document.querySelector('.bkash');
            if (method == 'bkash'){
                bkash.style.background = '#0093ff';
                bkash.style.color = '#fff';

                nagad.style.background = 'transparent';
                nagad.style.color = '#000';

                document.querySelector('input[name="method"]').value = 'bkash';
            }
            if (method == 'nagad'){
                nagad.style.background = '#0093ff';
                nagad.style.color = '#fff';

                bkash.style.background = 'transparent';
                bkash.style.color = '#000';

                document.querySelector('input[name="method"]').value = 'nagad';
            }
        }

        function goPa(){
            let method = document.querySelector('input[name="method"]').value;
            if (method != ''){
                window.location.href = '{{url('/payment-confirmation')}}'+'/'+method+'/'+'{{$amount}}';
            }else {
                message('PLease select a payment method');
            }
        }
    </script>
</div>
</body>
</html>
