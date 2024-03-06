
@extends('layouts.app')

@section('content')
<div class="section-admin container-fluid">
<div class="row admin text-center">
<div class="col-md-12">
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
<div class="admin-content analysis-progrebar-ctn res-mg-t-15">
<h4 class="text-left text-uppercase"><b>Membership</b></h4>
<div class="row vertical-center-box vertical-center-box-tablet">
<div class="col-xs-3 mar-bot-15 text-left">
<label class="label bg-green">30% <i class="fa fa-level-up" aria-hidden="true"></i></label>
</div>
<div class="col-xs-9 cus-gh-hd-pro">
<h2 class="text-right no-margin">1,000,000</h2>
</div>
</div>
<div class="progress progress-mini">
<div style="width: 78%;" class="progress-bar bg-green"></div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="margin-bottom:1px;">
<div class="admin-content analysis-progrebar-ctn res-mg-t-30">
<h4 class="text-left text-uppercase"><b>Users</b></h4>
<div class="row vertical-center-box vertical-center-box-tablet">
<div class="text-left col-xs-3 mar-bot-15">
<label class="label bg-red">15% <i class="fa fa-level-down" aria-hidden="true"></i></label>
</div>
<div class="col-xs-9 cus-gh-hd-pro">
<h2 class="text-right no-margin">500</h2>
</div>
</div>
<div class="progress progress-mini">
<div style="width: 38%;" class="progress-bar progress-bar-danger bg-red"></div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
<div class="admin-content analysis-progrebar-ctn res-mg-t-30">
<h4 class="text-left text-uppercase"><b>Offerings/Tithes/Giving</b></h4>
<div class="row vertical-center-box vertical-center-box-tablet">
<div class="text-left col-xs-3 mar-bot-15">
<label class="label bg-blue">50% <i class="fa fa-level-up" aria-hidden="true"></i></label>
</div>
<div class="col-xs-9 cus-gh-hd-pro">
<h2 class="text-right no-margin">$70,000</h2>
</div>
</div>
<div class="progress progress-mini">
<div style="width: 60%;" class="progress-bar bg-blue"></div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
<div class="admin-content analysis-progrebar-ctn res-mg-t-30">
<h4 class="text-left text-uppercase"><b>Prayer Requests</b></h4>
<div class="row vertical-center-box vertical-center-box-tablet">
<div class="text-left col-xs-3 mar-bot-15">
<label class="label bg-purple">80% <i class="fa fa-level-up" aria-hidden="true"></i></label>
</div>
<div class="col-xs-9 cus-gh-hd-pro">
<h2 class="text-right no-margin">1,085</h2>
</div>
</div>
<div class="progress progress-mini">
<div style="width: 60%;" class="progress-bar bg-purple"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="product-sales-area mg-tb-30">
<div class="container-fluid">
<div class="row">
<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
<div class="product-sales-chart">
<div class="portlet-title">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="caption pro-sl-hd">
<span class="caption-subject text-uppercase"><b>Membership</b></span>
</div>
</div>
</div>
</div>
<!-- Create a canvas element for the chart -->
<canvas id="myBarChart" width="400" height="144"></canvas>

<script>
// Generate random data for 10 bars
function generateRandomData() {
    var data = [];
    for (var i = 0; i < 12; i++) {
         // Assign specific values for each iteration
    switch (i) {
        case 0:
            data.push(20);
            break;
        case 1:
            data.push(35);
            break;
        case 2:
            data.push(50);
            break;
        case 3:
            data.push(65);
            break;
        case 4:
            data.push(30);
            break;
        case 5:
            data.push(45);
            break;
        case 6:
            data.push(80);
            break;
        case 7:
            data.push(25);
            break;
        case 8:
            data.push(70);
            break;
        case 9:
            data.push(90);
            break;
        case 10:
            data.push(60);
            break;
        case 11:
            data.push(85);
            break;
        default:
            data.push(0);
    }
    }
    return data;
}

//Members for the bar chart
var data = {
    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
    datasets: [{
        label: 'Members',
        backgroundColor: [
        'rgba(255, 0, 0, 0.7)',
        'rgba(0, 128, 0, 0.7)',
        'rgba(0, 0, 255, 0.7)',
        'rgba(255, 128, 0, 0.7)',
        'rgba(128, 0, 255, 0.7)',
        'rgba(0, 255, 128, 0.7)',
        'rgba(255, 0, 128, 0.7)',
        'rgba(0, 255, 0, 0.7)',
        'rgba(128, 128, 0, 0.7)',
        'rgba(0, 128, 128, 0.7)'
        ],
        borderColor: [
        'rgba(255, 0, 0, 1)',
        'rgba(0, 255, 0, 1)',
        'rgba(0, 0, 255, 1)',
        'rgba(255, 255, 0, 1)',
        'rgba(255, 0, 255, 1)',
        'rgba(0, 255, 255, 1)',
        'rgba(128, 0, 0, 1)',
        'rgba(0, 128, 0, 1)',
        'rgba(0, 0, 128, 1)',
        'rgba(128, 128, 0, 1)'
        ],
        data: generateRandomData()
    }]
};

// Get the canvas element
var ctx = document.getElementById('myBarChart').getContext('2d');

// Create a new bar chart
var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: {
        scales: {
            y: {
                beginAtZero: true
            },
            x: {
                grid: {
                    display: false
                }
            }
        }
    }
});
</script>
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
<div class="white-box analytics-info-cs mg-b-30 res-mg-t-30">
<h3 class="box-title">Sermons</h3>
<ul class="list-inline two-part-sp">
<li>
<div id="sparklinedash"></div>
</li>
<li class="text-right sp-cn-r"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter sales-sts-ctn">8659</span></li>
</ul>
</div>
<div class="white-box analytics-info-cs mg-b-30">
<h3 class="box-title">Crusades</h3>
<ul class="list-inline two-part-sp">
<li>
<div id="sparklinedash2"></div>
</li>
<li class="text-right"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter sales-sts-ctn">7469</span></li>
</ul>
</div>

<div class="white-box analytics-info-cs">
<h3 class="box-title">Conferences</h3>
<ul class="list-inline two-part-sp">
<li>
<div id="sparklinedash4"></div>
</li>
<li class="text-right"><i class="fa fa-level-down" aria-hidden="true"></i> <span class="sales-sts-ctn">18%</span></li>
</ul>
</div>
</div>
</div>
</div>
</div>



<div class="calender-area mg-tb-30">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
<div class="calender-inner">
<div id="calendar"></div>
</div>
</div>
</div>
</div>
</div>
@endsection
