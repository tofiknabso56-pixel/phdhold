<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="{{asset('public/spin.css')}}">
    <style>
        body{
            background: #00695c;
        }
        .spin-click-button {
            background-color: #ff8a00;
            border-radius: 50px;
            padding: 8px 35px;
        }
    </style>
    <style>
        .vip_image img {
            border-radius: 11px;
        }

        .act_btn a {
            background: red;
            padding: 8px 30px;
            border-radius: 50px;
        }

        .act_btn a {
            background: #09c497;
            padding: 5px 30px;
            border-radius: 50px;
            position: absolute;
            width: 46%;
            right: 20px;
        }
    </style>
    <style>
        .pModal {
            width: 100%;
            height: 100%;
            background: #ffffff2e;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 22;
        }
        .pModalContainer {
            width: 300px;
            height: 166px;
            background: #fff;
            border-radius: 19px;
            overflow: hidden;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 15px;
        }
        .btn_group {
            position: absolute;
            height: 40px;
            background: transparent;
            width: 100%;
            left: 0;
            bottom: 0;
            border-top: 1px solid #00000024;
            overflow: hidden;
        }
        .leftBtn {
            width: 50%;
            float: left;
            border-right: 1px solid #00000021;
            height: 100%;
            text-align: center;
            padding-top: 7px;
        }
        .rightBtn {
            width: 50%;
            float: right;
            height: 100%;
            text-align: center;
            padding-top: 7px;
        }
        .pModalContainer h2 {
            text-align: center;
        }
        .pModalContainer p {
            text-align: center;
            margin-top: 13px;
            color: #bbb;
            font-size: 15px;
            font-weight: 400;
        }
        .pModalContainer {
            background: #00695c;
        }
        input[type="text"] {
            background: #00695c;
            border: none;
            box-shadow: inset 0px 2px 4px #000;
            padding: 6px 12px;
            text-align: center;
            border-radius: 38px;
        }
    </style>
</head>
<body>
<div class="container text-center mb-5" style="background: url('{{asset('public/static/img/bj.d01189ac.png')}}');background-size: cover;background-position: center;">
    <div class="row">
        <div class="col-md-12 mt-2 py-3 pb-5">
            <div class="d-flex justify-content-between">
                <div>
                    <img onclick="window.location.href='{{route('dashboard')}}'" src="{{asset('public/left.png')}}" alt="">
                </div>
                <div style="font-size: 20px;color: #fff;font-family: Righteous, cursive;">Lucky Bonus</div>
                <div>
                    <img onclick="window.location.href='{{route('spin.history')}}'" src="{{asset('public/note.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 text-center">
            <div class="wheel-spin-box">
                <div id="spinwheel">
                    <div class="wheeldotsround">
                        <div class="wheeldots"></div>
                        <div class="wheeldots"></div>
                        <div class="wheeldots"></div>
                        <div class="wheeldots"></div>
                        <div class="wheeldots"></div>
                        <div class="wheeldots"></div>
                        <div class="wheeldots"></div>
                        <div class="wheeldots"></div>
                        <div class="wheeldots"></div>
                        <div class="wheeldots"></div>
                        <div class="wheeldots"></div>
                        <div class="wheeldots"></div>
                    </div>
                </div>
                <div id="spin-arrow" class="wheel-spin-arrow">
                    <svg width="83" height="74" viewBox="0 0 83 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M32.9489 5.12466C33.8289 3.59888 35.0943 2.3319 36.618 1.45104C38.1417 0.570174 39.8701 0.106445 41.6294 0.106445C43.3888 0.106445 45.1171 0.570174 46.6409 1.45104C48.1646 2.3319 49.43 3.59888 50.31 5.12466L80.9178 58.1922C81.7993 59.7185 82.264 61.4504 82.265 63.2137C82.2659 64.9769 81.8032 66.7094 80.9234 68.2366C80.0435 69.7639 78.7776 71.0322 77.2529 71.9139C75.7282 72.7955 73.9986 73.2595 72.238 73.2591H11.0223C9.26269 73.259 7.53405 72.7951 6.01016 71.9139C4.48627 71.0327 3.22083 69.7653 2.34102 68.2391C1.46121 66.7128 0.998036 64.9815 0.998047 63.2192C0.998058 61.4569 1.46125 59.7256 2.34108 58.1994L32.9489 5.12466Z" fill="#2F911E"/>
                    </svg>
                </div>
            </div>
        </div>

        <div class="col-md-12 text-center mb-4 mt-5">
{{--            <button id="spin" class="spin-click-button">Check your luck</button>--}}
            <button onclick="openrr('i')" class="spin-click-button">Check your luck</button>
        </div>


        <div class="col-md-12 text-center mb-4 mt-5">
            <div class="card">
                <div class="card-body">
                    <div><img style="width: 100%;margin-top: -70px;" src="{{asset('public/static/img/icon_zhongjiang@3x.png')}}" alt=""></div>
                    <div>
                        <p>Log in every day to get {{price(5)}}-{{price(500)}}, the lottery is updated every 24 hours</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="pModal" id="i" style="display: none;">
            <div class="pModalContainer">
                <h2 style="color: #ff8a00;">Permission</h2>
                <p>
                    <input type="text" name="spin_code" placeholder="Enter Code">
                </p>
                <div class="btn_group">
                    <a href="javascript:void(0)" class="leftBtn" onclick="closerr('i')" style="color: #000;">Cancel</a>
                    <a href="javascript:void(0)" onclick="checkCodeValid()" class="rightBtn" style="color: #000;">Submit</a>
                </div>
            </div>
        </div>
    </div>
</div>
@include('alert-message')
<meta name="csrf-token" content="{{ csrf_token() }}"/>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://d3js.org/d3.v3.min.js"></script>
<script>
    function closerr(idName){
        document.getElementById(idName).style.display = 'none';
    }
    function openrr(idName){
        document.getElementById(idName).style.display = 'block';
    }

    function checkCodeValid(){
        let spinCode = document.querySelector('input[name="spin_code"]');
        if (spinCode.value == ''){
            message('Enter Code');
        }

        var data = {
            bonus_code: spinCode.value,
        }
        fetch('{{route('user.spin.codechecker')}}',
            {
                method:"POST",
                body:JSON.stringify(data),
                headers: {
                    'Content-type': 'application/json; charset=UTF-8',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}})
            .then(response => response.json())
            .then(data => {
                if (data.status == true){
                    spin()
                    closerr('i')
                }
                message(data.message);
            }).catch();
    }
</script>
<script>
    let win1 = 1;
    let win2 = 3;
    let win3 = 4;
    let win4 = 6;
    let win5 = 8;
    let win6 = 10;

    // -----wheel-spin-js------
    var padding = {top:0, right:0, bottom:0, left:0},
        w = 400 - padding.left - padding.right,
        h = 400 - padding.top  - padding.bottom,
        r = Math.min(w, h)/2,
        rotation = 0,
        oldrotation = 0,
        picked = 100000,
        oldpick = [],
        color = d3.scale.category20();

    var data = [
        {"label":"1win", "value":1, "xp":`${win1}`},
        {"label":"3win", "value":1, "xp":`${win2}`},
        {"label":"4win", "value":1, "xp":`${win3}`},
        {"label":"6win", "value":1, "xp":`${win4}`},
        {"label":"8win", "value":1, "xp":`${win5}`},
        {"label":"10win", "value":1, "xp":`${win6}`}
    ];
    var svg = d3.select('#spinwheel')
        .append("svg")
        .data([data])
        .attr("xmlns",  "http://www.w3.org/2000/svg")
        .attr('viewBox', '0 0 '+w+' '+w+'')
        .attr("width",  w)
        .attr("height", h + padding.top + padding.bottom);
    var container = svg.append("g")
        .attr("class", "chartholder")
        .attr("transform", "translate(" + (w/2 + padding.left) + "," + (h/2 + padding.top) + ")");
    var vis = container.append("g");

    var pie = d3.layout.pie().sort(null).value(function(d){return 1;});
    // declare an arc generator function
    var arc = d3.svg.arc().outerRadius(r);
    // select paths, use arc generator to draw
    var arcs = vis.selectAll("g.slice")
        .data(pie)
        .enter()
        .append("g")
        .attr("class", "slice");

    arcs.append("path")
        .attr("fill", function(d, i){ return color(i); })
        .attr("d", function (d) { return arc(d); });
    // add the text
    arcs.append("text").attr("transform", function(d){
        d.innerRadius = 0;
        d.outerRadius = r;
        d.angle = (d.startAngle + d.endAngle)/2;
        return "rotate(" + (d.angle * 180 / Math.PI - 90) + ")translate(" + (d.outerRadius - 60) +")";
    }).attr('font-size', '20').attr('fill', '#ffffff')
        .attr("text-anchor", "end")
        .text( function(d, i) {
            return data[i].label;
        });
    $('#spin').on("click", spin);
    function spin(d){

        $('#spin').on("click", null);
        if(oldpick.length == data.length){
            console.log("done");
            $('#spin').on("click", null);
            return;
        }
        var  ps       = 360/data.length,
            pieslice = Math.round(1440/data.length),
            rng      = Math.floor((Math.random() * 1440) + 360);

        rotation = (Math.round(rng / ps) * ps);
        //console.log(rotation);

        picked = Math.round(data.length - (rotation % 360)/ps) + 2;

        picked = picked >= data.length ? (picked % data.length) : picked;
        if(oldpick.indexOf(picked) !== -1){
            d3.select(this).call(spin);
            return;
        } else {
            oldpick.push(picked);
        }
        rotation += 90 - Math.round(ps/1);
        var interval = setInterval(function () {
            $('.wheeldots').addClass('active-dots');
            setTimeout(function () {
                $('.wheeldots').removeClass('active-dots');
            }, 100);
        });
        vis.transition()
            .duration(3000)
            .attrTween("transform", rotTween)
            .each("end", function(){
                clearInterval(interval);
                //mark question as seen
                d3.select(".slice:nth-child(" + (picked + 1) + ") path")
                //populate question
                d3.select("#question h1").text(data[picked].question);
                oldrotation = rotation;

                let spinCode = document.querySelector('input[name="spin_code"]');
                if (spinCode.value == ''){
                    message('Enter Code');
                }

                let amount = data[picked].xp;

                var dataObj = {
                    bonus_code: spinCode.value,
                    amount: amount
                }

                fetch('{{route('user.spin.amount.submit')}}',
                    {
                        method:"POST",
                        body:JSON.stringify(dataObj),
                        headers: {'Content-type': 'application/json; charset=UTF-8', 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}})
                    .then(response => response.json())
                    .then(data => {
                        document.querySelector('input[name="spin_code"]').value = '';
                        message(data.message);
                    }).catch();
            });
    }
    //make arrow
    container.append("circle")
        .attr("cx", 0)
        .attr("cy", 0)
        .attr("r", 30)
        .style({"fill":"#ffffff"});

    function rotTween(to) {
        var i = d3.interpolate(oldrotation % 360, rotation);
        return function(t) {
            return "rotate(" + i(t) + ")";
        };
    }


    function getRandomNumbers(){
        var array = new Uint16Array(1000);
        var scale = d3.scale.linear().range([360, 1440]).domain([0, 100000]);
        if(window.hasOwnProperty("crypto") && typeof window.crypto.getRandomValues === "function"){
            window.crypto.getRandomValues(array);
            console.log("works");
        } else {
            //no support for crypto, get crappy random numbers
            for(var i=0; i < 1000; i++){
                array[i] = Math.floor(Math.random() * 100000) + 1;
            }
        }
        return array;
    }
</script>
</body>
</html>
