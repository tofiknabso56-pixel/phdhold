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
        p.header_count {
            color: #000;
        }
    </style>
</head>
<body>

<div class="header">
    <div></div>
    <div><h4>Payment Result</h4></div>
    <div></div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card mt-2">
                <div class="card-body">
                    <div style="text-align: center;">
                        <img src="{{asset('public/check.png')}}" alt="">
                    </div>
                    <p class="header_count" style="color: #000">Submit Success</p>
                    <h3 class="header_time"><span id="timer" data-hours="00" data-minutes="59" data-seconds="00"></span></h3>
                </div>
            </div>

            <button onclick="window.location.href='{{url('http://localhost/combu/deposit')}}'" class="btn btn-success d-block mt-3" style="width: 100%;">Back</button>
            <div style="height: 30px;"></div>
        </div>
    </div>
</div>

@include('alert-message')
</body>
</html>
