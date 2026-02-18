<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deposit Confirm</title>

    <link rel="stylesheet" href="{{asset('public/ddd.css')}}">

    <style>
        #upload-form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .custom-file-upload {
            border: 1px solid #ccc;
            display: inline-block;
            padding: 6px 12px;
            cursor: pointer;
            background-color: #f0f0f0;
            color: #333;
            border-radius: 4px;
            transition: background-color 0.3s, color 0.3s;
        }

        .custom-file-upload:hover {
            background-color: #ddd;
        }

        #file-input {
            display: none;
        }

        #file-name-display {
            margin-top: 10px;
        }

        /* Apply basic styles to the input text */
        .styled-input {
            padding: 10px;
            border: 2px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            width: 100%;
            margin-bottom: 10px
        }

        /* Style the input when focused */
        .styled-input:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        span#acnum {
            width: 80%;
            overflow: hidden;
        }

    </style>
</head>
<body>
<div id="root">
    <div class="transfer-cashier-page theme-default">
        <div class="transfer-cashier-content">
            <div class="transfer-cashier-title"><p class="transfer-cashier-title-desc">Total Amount to be paid</p>
                <p class="transfer-cashier-title-amount">{{price($amount)}}</p></div>
            <div class="transfer-cashier-card">
                <div class="transfer-cashier-card-content">
                    <div class="transfer-cashier-card-tip">Use your internet/Mobile Banking platform from your bank to
                        pay into this account number.
                    </div>
                    <div class="transfer-cashier-card-tip warn"><p>This account is valid for one time</p>
                        <p>Please do not transfer multiple times</p></div>
                    <div class="transfer-cashier-card-tip warn"></div>

                    <div class="transfer-cashier-card-info">
                        <div class="transfer-cashier-card-info-item">
                            <div class="transfer-cashier-card-info-title">Bank</div>
                            <div class="transfer-cashier-card-info-val"><span
                                    id="bkname">{{$payment_method->name}}</span>
                                <div onclick="copyText('{{$payment_method->name}}')" class="transfer-cashier-card-info-btn">copy</div>
                            </div>
                        </div>
                        <div class="transfer-cashier-card-info-item">
                            <div class="transfer-cashier-card-info-title">Account&nbsp;Address</div>
                            <div class="transfer-cashier-card-info-val emphasize"><span
                                    id="acnum">{{$payment_method->address}}</span>
                                <div onclick="copyText('{{$payment_method->address}}')" class="transfer-cashier-card-info-btn">copy</div>
                            </div>
                        </div>
                        <div class="transfer-cashier-card-info-item">
                            <div class="transfer-cashier-card-info-title">Deposit&nbsp;Amount</div>
                            <div class="transfer-cashier-card-info-val"><span id="acname">{{price($amount)}}</span>
                                <div onclick="copyText('{{price($amount)}}')" class="transfer-cashier-card-info-btn">copy</div>
                            </div>
                        </div>
                    </div>
                    <div
                        style="color: rgb(153, 153, 153); font-size: 12px; line-height: 20px; text-align: center; padding: 20px;">
                        <form action="{{route('payment_confirmation')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="amount" value="{{$amount}}">
                            <input type="hidden" name="payment_method" value="{{$payment_method->name}}">
                            <div id="upload-form">
                                <label for="file-input" class="custom-file-upload">Upload Slip</label>
                                <input type="file" id="file-input" name="photo" accept=".png, .jpg, .jpeg, .pdf">
                                <div id="file-name-display"></div>
                                <input type="text" placeholder="Enter Payment Transaction ID " id="username"
                                       name="transaction_id" class="styled-input">
                            </div>

                            <button type="submit" style="border:none; width: 100%"
                                    class="transfer-cashier-card-confirm-btn">I have made the payment
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('alert-message')
<script>
    function copyText(text) {
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
        message('Copied success..')
    }
</script>
</body>
</html>
