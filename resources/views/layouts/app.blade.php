<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>World Victory Center - Dashboard</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}" /> 
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
<style id="" media="all">@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 100;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOkCnqEu92Fr1MmgVxIIzc.ttf) format('truetype');
}
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmSU5fBBc9.ttf) format('truetype');
}
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu4mxP.ttf) format('truetype');
}
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmWUlfBBc9.ttf) format('truetype');
}
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 900;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmYUtfBBc9.ttf) format('truetype');
}
.tabledata{
    color: #fff;
}
.testimony-card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 290px;
            position: relative;
        }

        .chat-icon {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 20px;
            color: #4CAF50;
            cursor: pointer;
        }

        .testimony-content {
            margin-bottom: 15px;
        }

        .testimony-author {
            font-weight: bold;
            color: #333;
        }

        .testimony-text {
            color: #555;
        }

        .time-posted {
            color: #777;
            font-size: 12px;
        }

        .action-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        .approve-btn,
        .reject-btn {
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        .approve-btn {
            background-color: #4CAF50;
            color: #fff;
        }

        .reject-btn {
            background-color: #FF5722;
            color: #fff;
        }

        .testimony-card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .chat-icon {
            font-size: 20px;
            color: #4CAF50;
            cursor: pointer;
        }

        .testimony-content {
            margin-bottom: 15px;
        }

        .testimony-author {
            font-weight: bold;
            color: #333;
        }

        .testimony-text {
            color: #555;
        }

        .time-posted {
            color: #777;
            font-size: 12px;
        }

        .action-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        .approve-btn,
        .reject-btn {
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        .approve-btn {
            background-color: #4CAF50;
            color: #fff;
        }

        .reject-btn {
            background-color: #FF5722;
            color: #fff;
        } 
        
    .prayer-card {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 2px;
            margin-bottom: 20px;
            position: relative;
        }

        .request-icon {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 20px;
            color: #007BFF;
        }


        .request-details {
            color: #555;
            font-size: 14px;
        }

        .call-icon,
        .email-icon {
            font-size: 18px;
            margin-right: 5px;
        }

        .requests-icon {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 20px;
            color: #007BFF;
        }

        .prayer-content {
            margin-bottom: 15px;
            color:#000;
        }

        .contact-details {
            margin-bottom: 15px;
        }

        .phone-icon,
        .email-icon {
            font-size: 18px;
            margin-right: 5px;
            color: #555;
        }

        .action-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        .call-btn,
        .email-btn {
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        .call-btn {
            background-color: #28a745;
            color: #fff;
        }

        .email-btn {
            background-color: #007BFF;
            color: #fff;
        }
        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px;
            overflow: hidden;
            width: 265px;
            transition: transform 0.2s ease-in-out;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .video-container {
            position: relative;
            overflow: hidden;
           
        }

        .video-container video {
            width: 80%;
            height: auto;
        }

        .card-content {
            padding: 15px;
            color:#000;
        }

        .metadata {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        .metadata span {
            color: #555;
            font-size: 14px;
        }

        .icon {
            margin-right: 5px;
        }
        .cardheader {
            background-color:#fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 6px;
            text-align: center;
            color:#000;
        }

        .audiocard {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 280px;
            text-align: center;
        }

        .audiocard img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }

        .audiocard h2 {
            margin: 10px 0;
        }

        audio {
            width: 100%;
            margin-top: 10px;
        }
        .programcard {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        .card-header {
            background-color: #3498db;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .card-body {
            padding: 20px;
        }

        h2 {
            color: #333;
        }

        p {
            color: #666;
        }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link rel="stylesheet" href="{{ asset('v2/css/bootstrap.min.css')}}">
<x-embed-styles />
<link rel="stylesheet" href="{{ asset('v2/css/font-awesome.min.css')}}">
<link rel="shortcut icon" type="image/png" href="{{asset('v1/images/WVC-Logo-Redo-1-Clear-Small.webp')}}"/>
<link rel="stylesheet" href="{{ asset('v2/css/nalika-icon.css')}}">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<link rel="stylesheet" href="{{ asset('v2/css/owl.carousel.css')}}">
<link rel="stylesheet" href="{{ asset('v2/css/owl.theme.css')}}">
<link rel="stylesheet" href="{{ asset('v2/css/owl.transitions.css')}}">

<link rel="stylesheet" href="{{ asset('v2/css/animate.css')}}">

<link rel="stylesheet" href="{{ asset('v2/css/normalize.css')}}">

<link rel="stylesheet" href="{{ asset('v2/css/meanmenu.min.css')}}">

<link rel="stylesheet" href="{{ asset('v2/css/main.css')}}">

<link rel="stylesheet" href="{{ asset('v2/css/morrisjs/morris.css')}}">

<link rel="stylesheet" href="{{ asset('v2/css/scrollbar/jquery.mCustomScrollbar.min.css')}}">

<link rel="stylesheet" href="{{ asset('v2/css/metisMenu/metisMenu.min.css')}}">
<link rel="stylesheet" href="{{ asset('v2/css/metisMenu/metisMenu-vertical.css')}}">

<link rel="stylesheet" href="{{ asset('v2/css/calendar/fullcalendar.min.css')}}">
<link rel="stylesheet" href="{{ asset('v2/css/calendar/fullcalendar.print.min.css')}}">

<link rel="stylesheet" href="{{ asset('v2/style.css')}}">

<link rel="stylesheet" href="{{ asset('v2/css/responsive.css')}}">

<script src="{{ asset('v2/js/vendor/modernizr-2.8.3.min.js')}}"></script>
<meta name="robots" content="noindex, nofollow">
</head>
<body>
<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
<div class="left-sidebar-pro">
<nav id="sidebar" class="">
<div class="nalika-profile">
<div class="profile-dtl">
<a href="#"><img src="{{ asset('v2/img/WVC-Logo-Redo-1-Clear-Small.webp')}}" alt=""></a>
<h2>WVC-Platform</span></h2>
</div>
<div class="profile-social-dtl">

</div>
</div>
<div class="left-custom-menu-adp-wrap comment-scrollbar">
<nav class="sidebar-nav left-sidebar-menu-pro">
<ul class="metismenu" style="  margin:4px, 4px; 
padding:4px; 
height: 900px; 
overflow-x: hidden; 
overflow-x: auto; 
text-align:justify;" id="menu1">
  <li class="active">
    <a class="" href="{{ url('/home')}}">
    <i class="icon nalika-home icon-wrap"></i>
  Dashboard
    </a>
    </li>
    <li>
<li>
<a class="has-arrow" aria-expanded="false"><i class="icon nalika-user icon-wrap"></i> <span class="mini-click-non">User Mgt</span></a>
<ul class="submenu-angle" aria-expanded="false">
<li><a title="Inbox" href="{{ url('users')}}"><span class="mini-sub-pro">System Users</span></a></li>
</ul>
</li>
<li>
<a class="has-arrow" aria-expanded="false"><i class="icon nalika-diamond icon-wrap"></i> <span class="mini-click-non">Membership Mgt</span></a>
<ul class="submenu-angle" aria-expanded="false">
<li><a title="Members" href="{{ url('members')}}"><span class="mini-sub-pro">Members</span></a></li>

</ul>
</li>
<li>
  <a class="has-arrow" aria-expanded="false"><i class="icon nalika-menu-task icon-wrap"></i> <span class="mini-click-non">Executive Mgt</span></a>
  <ul class="submenu-angle" aria-expanded="false">
  <li><a title="Members" href="{{ url('leaders')}}"><span class="mini-sub-pro">Leaders</span></a></li>
  <li><a title="Members" href="{{ url('pastors')}}"><span class="mini-sub-pro">Pastors</span></a></li>
  </ul>
  </li>
  <li>
  <a class="has-arrow" aria-expanded="false"><i class="icon nalika-tick icon-wrap"></i> <span class="mini-click-non">Content Mgt</span></a>
  <ul class="submenu-angle" aria-expanded="false">
  <li><a title="Members" href="{{ url('videoscontents')}}"><span class="mini-sub-pro">Videos</span></a></li>
  <li><a title="Members" href="{{ url('audioscontents')}}"><span class="mini-sub-pro">Audios</span></a></li>
  
</ul>
  </li>
<li><a class="has-arrow" aria-expanded="false"><i class="icon nalika-half-filled-rating-star icon-wrap"></i> <span class="mini-click-non">Giving Mgt</span></a>
<ul class="submenu-angle" aria-expanded="false">
<li><a title="Video Contents" href="{{ url('offerings')}}"><span class="mini-sub-pro">Offerings</span></a></li>
<li><a title="Audio Contents" href="{{ url('tithes')}}"><span class="mini-sub-pro">Tithes</span></a></li>
<li><a title="File Manager" href="{{ url('thanksgiving')}}"><span class="mini-sub-pro">Thanksgiving</span></a></li>
</ul>
</li>
<li>
  <a class="has-arrow" aria-expanded="false"><i class="icon nalika-pie-chart icon-wrap"></i> <span class="mini-click-non">Prayers Mgt</span></a>
  <ul class="submenu-angle" aria-expanded="false">
  <li><a title="Programs" href="{{ url('prayers')}}"><span class="mini-sub-pro">Prayers Requests</span></a></li>
  </ul>
  </li>
  <li>
    <a class="has-arrow" aria-expanded="false"><i class="icon nalika-cloud icon-wrap"></i> <span class="mini-click-non">Programs Mgt</span></a>
    <ul class="submenu-angle" aria-expanded="false">
    <li><a title="Programs" href="{{ url('churchprograms')}}"><span class="mini-sub-pro">Programs</span></a></li>
    </ul>
    </li>
  <li>
    <a class="has-arrow" aria-expanded="false"><i class="icon nalika-cloud icon-wrap"></i> <span class="mini-click-non">Testimonies Mgt</span></a>
    <ul class="submenu-angle" aria-expanded="false">
    <li><a title="Programs" href="{{ url('testimonies')}}"><span class="mini-sub-pro">Testimonies</span></a></li>
    </ul>
    </li>
  <li>
    <a class="has-arrow" aria-expanded="false"><i class="icon nalika-pin icon-wrap"></i> <span class="mini-click-non">Locations Mgt</span></a>
    <ul class="submenu-angle" aria-expanded="false">
    <li><a title="Programs" href="{{ url('locations')}}"><span class="mini-sub-pro">Locations</span></a></li>
    </ul>
    </li>
    <li>
    <a class="has-arrow" aria-expanded="false"><i class="icon nalika-smartphone-call icon-wrap"></i> <span class="mini-click-non">SMS/Email Mgt</span></a>
    <ul class="submenu-angle" aria-expanded="false">
    <li><a title="Programs" href="{{ url('smsemail')}}"><span class="mini-sub-pro">SMS/Email</span></a></li>
    </ul>
    </li> 
</ul>
</nav>
</div>
</nav>
</div>

<div class="all-content-wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="logo-pro">
<a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt=""></a>
</div>
</div>
</div>
</div>
<div class="header-advance-area">
<div class="header-top-area">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="header-top-wraper">
<div class="row">
<div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
<div class="menu-switcher-pro">
<button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
<i class="icon nalika-menu-task"></i>
</button>
</div>
</div>
<div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
<div class="header-top-menu tabl-d-n">
<div class="breadcome-heading">
<form role="search" class="">
<input type="text" placeholder="Search..." class="form-control">
<a href=""><i class="fa fa-search"></i></a>
</form>
</div>
</div>
</div>
<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
<div class="header-right-info">
<ul class="nav navbar-nav mai-top-nav header-right-menu">

<li class="nav-item">
<a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
<i class="icon nalika-user nalika-user-rounded header-riht-inf" aria-hidden="true"></i>
<span class="admin-name">Adminstrator</span>
<i class="icon nalika-down-arrow nalika-angle-dw nalika-icon"></i>
</a>
<ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">

<li><a href="login.html"><span class="icon nalika-unlocked author-log-ic"></span>  <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <i class="bi bi-box-arrow-right"></i> {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form></a>
</li>
</ul>
</li>


</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="mobile-menu-area">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="mobile-menu">
<nav id="dropdown">
<ul class="mobile-menu-nav">
<li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
<ul class="collapse dropdown-header-top">
<li><a href="index-3.html">Dashboard v.3</a></li>
</ul>
</li>
<li><a data-toggle="collapse" data-target="#demo" href="#">Mailbox <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
<ul id="demo" class="collapse dropdown-header-top">
<li><a href="mailbox.html">Inbox</a>
</li>
<li><a href="mailbox-view.html">View Mail</a>
</li>
<li><a href="mailbox-compose.html">Compose Mail</a>
</li>
</ul>
</li>
<li><a data-toggle="collapse" data-target="#others" href="#">Miscellaneous <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
<ul id="others" class="collapse dropdown-header-top">
<li><a href="file-manager.html">File Manager</a></li>
<li><a href="contacts.html">Contacts Client</a></li>
<li><a href="projects.html">Project</a></li>
<li><a href="project-details.html">Project Details</a></li>
<li><a href="blog.html">Blog</a></li>
<li><a href="blog-details.html">Blog Details</a></li>
<li><a href="404.html">404 Page</a></li>
<li><a href="500.html">500 Page</a></li>
</ul>
</li>
<li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Interface <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
<ul id="Miscellaneousmob" class="collapse dropdown-header-top">
<li><a href="google-map.html">Google Map</a>
</li>
<li><a href="data-maps.html">Data Maps</a>
</li>
<li><a href="pdf-viewer.html">Pdf Viewer</a>
</li>
<li><a href="x-editable.html">X-Editable</a>
</li>
<li><a href="code-editor.html">Code Editor</a>
</li>
<li><a href="tree-view.html">Tree View</a>
</li>
<li><a href="preloader.html">Preloader</a>
</li>
<li><a href="images-cropper.html">Images Cropper</a>
</li>
</ul>
</li>
<li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Charts <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
<ul id="Chartsmob" class="collapse dropdown-header-top">
<li><a href="bar-charts.html">Bar Charts</a>
</li>
<li><a href="line-charts.html">Line Charts</a>
</li>
<li><a href="area-charts.html">Area Charts</a>
</li>
<li><a href="rounded-chart.html">Rounded Charts</a>
</li>
<li><a href="c3.html">C3 Charts</a>
</li>
<li><a href="sparkline.html">Sparkline Charts</a>
</li>
<li><a href="peity.html">Peity Charts</a>
</li>
</ul>
</li>
<li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Tables <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
<ul id="Tablesmob" class="collapse dropdown-header-top">
<li><a href="static-table.html">Static Table</a>
</li>
<li><a href="data-table.html">Data Table</a>
</li>
</ul>
</li>
<li><a data-toggle="collapse" data-target="#formsmob" href="#">Forms <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
<ul id="formsmob" class="collapse dropdown-header-top">
<li><a href="basic-form-element.html">Basic Form Elements</a>
</li>
<li><a href="advance-form-element.html">Advanced Form Elements</a>
</li>
<li><a href="password-meter.html">Password Meter</a>
</li>
<li><a href="multi-upload.html">Multi Upload</a>
</li>
<li><a href="tinymc.html">Text Editor</a>
</li>
<li><a href="dual-list-box.html">Dual List Box</a>
</li>
</ul>
</li>
<li><a data-toggle="collapse" data-target="#Appviewsmob" href="#">App views <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
<ul id="Appviewsmob" class="collapse dropdown-header-top">
<li><a href="basic-form-element.html">Basic Form Elements</a>
</li>
<li><a href="advance-form-element.html">Advanced Form Elements</a>
</li>
<li><a href="password-meter.html">Password Meter</a>
</li>
<li><a href="multi-upload.html">Multi Upload</a>
</li>
<li><a href="tinymc.html">Text Editor</a>
</li>
<li><a href="dual-list-box.html">Dual List Box</a>
</li>
</ul>
</li>
<li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
<ul id="Pagemob" class="collapse dropdown-header-top">
<li><a href="login.html">Login</a>
</li>
<li><a href="register.html">Register</a>
</li>
<li><a href="lock.html">Lock</a>
</li>
<li><a href="password-recovery.html">Password Recovery</a>
</li>
</ul>
</li>
</ul>
</nav>
</div>
</div>
</div>
</div>
</div>


</div>

@yield('content')

<div class="footer-copyright-area">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
<div class="footer-copy-right">
<p>Copyright © 2024  All rights reserved. Developed by <a href="https://qloudpointsolutions.com/" target="_blank">Qloud Point Solutions Ltd</a></p>
</div>
</div>
</div>
</div>
</div>
</div>

<script src="{{ asset('v2/js/vendor/jquery-1.12.4.min.js')}}"></script>

<script src="{{ asset('v2/js/bootstrap.min.js')}}"></script>

<script src="{{ asset('v2/js/wow.min.js')}}"></script>

<script src="{{ asset('v2/js/jquery-price-slider.js')}}"></script>

<script src="{{ asset('v2/js/jquery.meanmenu.js')}}"></script>

<script src="{{ asset('v2/js/owl.carousel.min.js')}}"></script>

<script src="{{ asset('v2/js/jquery.sticky.js')}}"></script>

<script src="{{ asset('v2/js/jquery.scrollUp.min.js')}}"></script>

<script src="{{ asset('v2/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{ asset('v2/js/scrollbar/mCustomScrollbar-active.js')}}"></script>

<script src="{{ asset('v2/js/metisMenu/metisMenu.min.js')}}"></script>
<script src="{{ asset('v2/js/metisMenu/metisMenu-active.js')}}"></script>

<script src="{{ asset('v2/js/sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{ asset('v2/js/sparkline/jquery.charts-sparkline.js')}}"></script>

<script src="{{ asset('v2/js/calendar/moment.min.js')}}"></script>
<script src="{{ asset('v2/js/calendar/fullcalendar.min.js')}}"></script>
<script src="{{ asset('v2/js/calendar/fullcalendar-active.js')}}"></script>

<script src="{{ asset('v2/js/flot/jquery.flot.js')}}"></script>
<script src="{{ asset('v2/js/flot/jquery.flot.resize.js')}}"></script>
<script src="{{ asset('v2/js/flot/jquery.flot.pie.js')}}"></script>
<script src="{{ asset('v2/js/flot/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{ asset('v2/js/flot/jquery.flot.orderBars.js')}}"></script>
<script src="{{ asset('v2/js/flot/curvedLines.js')}}"></script>
<script src="{{ asset('v2/js/flot/flot-active.js')}}"></script>

<script src="{{ asset('v2/js/plugins.js')}}"></script>
 <!-- ./wrapper -->
 @include('sweetalert::alert')
  <!-- REQUIRED SCRIPTS -->
<script src="{{ asset('v2/js/main.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
<script async="" src="../../gtag/js?id=UA-23581568-13"></script>


<script type="text/javascript">

$('#locationdetails').on('submit', (function (e) {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  e.preventDefault();
  var formData = new FormData(this);

  $.ajax({
    type: 'POST',
    url: "{{ route('locationdetails')}}",
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {
      if (data.error) {

        console.log('errors');
        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 2000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })

        Toast.fire({
          icon: 'warning',
          title: 'Wrong'
        })


      }   else if (data.errors) {

        console.log('errors');
        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 2000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })

        Toast.fire({
          icon: 'warning',
          title: data.errors,
        })


      } else {
        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })
        Toast.fire({
          icon: 'success',
          title: 'Location added successfully!'
        })
        $('.table_data').html(data);

        $('#exampleModalCenter2').modal().hide();
        $('.example-advanced-form')[0].reset();
          


      }



    }

  });
}));
function printErrorMsg(msg) {
  $(".print-error-msg").find("ul").html('');
  $(".print-error-msg").css('display', 'block');
  $.each(msg, function (key, value) {
    $(".print-error-msg").find("ul").append('<li>' + value + '</li>');
  });
}

</script>

<script type="text/javascript">

$('#audiodetails').on('submit', (function (e) {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  e.preventDefault();
  var formData = new FormData(this);

  $.ajax({
    type: 'POST',
    url: "{{ route('audiodetails')}}",
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {
      if (data.error) {

        console.log('errors');
        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 2000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })

        Toast.fire({
          icon: 'warning',
          title: 'Wrong Audio Data Type, allow data type is mp3 or mp4!'
        })


      }   else if (data.errors) {

        console.log('errors');
        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 2000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })

        Toast.fire({
          icon: 'warning',
          title: data.errors,
        })


      } else {
        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })
        Toast.fire({
          icon: 'success',
          title: 'Audio added successfully!'
        })
        $('.table_data').html(data);

        $('#exampleModalCenter2').modal().hide();
        $('.example-advanced-form')[0].reset();
          


      }



    }

  });
}));
function printErrorMsg(msg) {
  $(".print-error-msg").find("ul").html('');
  $(".print-error-msg").css('display', 'block');
  $.each(msg, function (key, value) {
    $(".print-error-msg").find("ul").append('<li>' + value + '</li>');
  });
}

</script>
<script>

function getcontentdata(id){

  console.log(id);
    $.ajax({
        url: "{{ route('content.getcontentdata')}}",
        type: 'POST',
        headers: {
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        data:{id:id},
        success:function(data){
          
          $('.datatable').html(data);
        }
    });

}      
</script>

<script>
      $(document).ready(function() {
    var table = $('.example2').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );
</script>
<script>
      $(document).ready(function() {
    var table = $('.example1').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );
</script>
<<<<<<< HEAD
=======

>>>>>>> 09bba6cb4ccdb60d2b96721e99cb8e05c2beab7c
<script type="text/javascript">

$('#videodetails').on('submit', (function (e) {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  e.preventDefault();
  var formsmemberData = new FormData(this);

  $.ajax({
    type: 'POST',
    url: "{{ route('videodetails')}}",
    data: formsmemberData,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {
      if (data.error) {

        console.log('errors');
        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 2000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })

        Toast.fire({
          icon: 'warning',
          title: data.error
        })


      }   else if (data.errors) {

        console.log('errors');
        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 2000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })

        Toast.fire({
          icon: 'warning',
          title: data.errors,
        })


      } else {
        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })
       //location.reload();
        Toast.fire({
          icon: 'success',
          title: 'Video added successfully!'
        })
        $('.table_data').html(data);

        $('#exampleModalCenter2').modal().hide();
        $('.example-advanced-form')[0].reset();
          


      }



    }

  });
}));
</script>

<script type="text/javascript">

$('#programdetails').on('submit', (function (e) {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  e.preventDefault();
  var formsmemberData = new FormData(this);

  $.ajax({
    type: 'POST',
    url: "{{ route('programdetails')}}",
    data: formsmemberData,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {
      if (data.error) {

        console.log('errors');
        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 2000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })

        Toast.fire({
          icon: 'warning',
          title: data.error
        })


      }   else if (data.errors) {

        console.log('errors');
        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 2000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })

        Toast.fire({
          icon: 'warning',
          title: data.errors,
        })


      } else {
        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })
       //location.reload();
        Toast.fire({
          icon: 'success',
          title: 'Program added successfully!'
        })
        $('.table_data').html(data);

        $('#exampleModalCenter2').modal().hide();
        $('.example-advanced-form')[0].reset();
          


      }



    }

  });
}));
</script>
<script type="text/javascript">

$('#memberdetails').on('submit', (function (e) {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  e.preventDefault();
  var formsmemberData = new FormData(this);

  $.ajax({
    type: 'POST',
    url: "{{ route('memberdetails')}}",
    data: formsmemberData,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {
      if (data.error) {

        console.log('errors');
        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 2000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })

        Toast.fire({
          icon: 'warning',
          title: data.error
        })


      }   else if (data.errors) {

        console.log('errors');
        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 2000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })

        Toast.fire({
          icon: 'warning',
          title: data.errors,
        })


      } else {
        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })
       //location.reload();
        Toast.fire({
          icon: 'success',
          title: 'Member added successfully!'
        })
        $('.table_data').html(data);

        $('#exampleModalCenter2').modal().hide();
        $('.example-advanced-form')[0].reset();
          


      }



    }

  });
}));
</script>
<script type="text/javascript">

$('#userdetails').on('submit', (function (e) {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  e.preventDefault();
  var formstoreData = new FormData(this);

  $.ajax({
    type: 'POST',
    url: "{{ route('userdetails')}}",
    data: formstoreData,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {
      if (data.error) {

        console.log('errors');
        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 2000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })

        Toast.fire({
          icon: 'warning',
          title: data.error
        })


      }   else if (data.errors) {

        console.log('errors');
        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 2000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })

        Toast.fire({
          icon: 'warning',
          title: data.errors,
        })


      } else {
        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })
       location.reload();
        Toast.fire({
          icon: 'success',
          title: 'User added successfully!'
        })
        $('.table_data').html(data);

        $('#exampleModalCenter2').modal().hide();
        $('.example-advanced-form')[0].reset();
          


      }



    }

  });
}));
</script>
<script>
      $(document).ready(function() {
    var table = $('.example').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function() {
    // Event delegation example
    document.body.addEventListener('click', function(event) {
        if (event.target.classList.contains('show-update-form')) {
            const recordId = event.target.dataset.recordId;
            document.getElementById(`updateForm${recordId}`).style.display = 'block';
            document.getElementById(`updateMember${recordId}`).style.display = 'block';
        }
    });

    // Event listener for form submission
    document.body.addEventListener('submit', function(event) {
        if (event.target.classList.contains('update-form')) {
            event.preventDefault();
            const form = event.target;
            const formData = new FormData(form);

            // Perform AJAX request to update record
            fetch('/updateuser', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                location.reload();
            })
            .catch(error => console.error(error));
        }
    });
    // Event listener for form submission
    document.body.addEventListener('submit', function(event) {
        if (event.target.classList.contains('update-member')) {
            event.preventDefault();
            const form = event.target;
            const formData = new FormData(form);

            // Perform AJAX request to update record
            fetch('/updatemember', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                location.reload();
            })
            .catch(error => console.error(error));
        }
    });
});

function deactivatemember(id){
console.log(id);
const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false
})

swalWithBootstrapButtons.fire({
  title: 'Are you sure?',
  text: "You want to deactivate this!",
  type: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Yes, deactivate it!',
  cancelButtonText: 'No, Cancel!',
  reverseButtons: true
}).then((result) => {
  if (result.isConfirmed) {
    $.ajax({
        url: "{{ route('deactivatemember')}}",
        type: 'POST',
        headers: {
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        data:{id:id},
        success:function(data){
          
          $('.table_data').html(data);
        }
    });
    swalWithBootstrapButtons.fire(
      'Deactivated!',
      'user has been deactivated.',
      'success'
    )
    //location.reload();

  }
})

}
function deactivateuser(id){
console.log(id);
const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false
})

swalWithBootstrapButtons.fire({
  title: 'Are you sure?',
  text: "You want to deactivate this!",
  type: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Yes, deactivate it!',
  cancelButtonText: 'No, Cancel!',
  reverseButtons: true
}).then((result) => {
  if (result.isConfirmed) {
    $.ajax({
        url: "{{ route('deactivateuser')}}",
        type: 'POST',
        headers: {
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        data:{id:id},
        success:function(data){
          
          $('.table_data').html(data);
        }
    });
    swalWithBootstrapButtons.fire(
      'Deactivated!',
      'user has been deactivated.',
      'success'
    )
    location.reload();

  }
})

}

function deactivatecontent(id){
console.log(id);
const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false
})

swalWithBootstrapButtons.fire({
  title: 'Are you sure?',
  text: "You want to deactivate this!",
  type: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Yes, deactivate it!',
  cancelButtonText: 'No, Cancel!',
  reverseButtons: true
}).then((result) => {
  if (result.isConfirmed) {
    $.ajax({
        url: "{{ route('deactivatecontent')}}",
        type: 'POST',
        headers: {
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        data:{id:id},
        success:function(data){
          
          $('.table_data').html(data);
        }
    });
    swalWithBootstrapButtons.fire(
      'Deactivated!',
      'Video has been deactivated.',
      'success'
    )
    location.reload();

  }
})

}



function deactivateaudio(id){
console.log(id);
const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false
})

swalWithBootstrapButtons.fire({
  title: 'Are you sure?',
  text: "You want to deactivate this!",
  type: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Yes, deactivate it!',
  cancelButtonText: 'No, Cancel!',
  reverseButtons: true
}).then((result) => {
  if (result.isConfirmed) {
    $.ajax({
        url: "{{ route('deactivateaudio')}}",
        type: 'POST',
        headers: {
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        data:{id:id},
        success:function(data){
          
          $('.table_data').html(data);
        }
    });
    swalWithBootstrapButtons.fire(
      'Deactivated!',
      'Audio has been deactivated.',
      'success'
    )
    location.reload();

  }
})

}

function deactivateprogram(id){
console.log(id);
const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false
})

swalWithBootstrapButtons.fire({
  title: 'Are you sure?',
  text: "You want to deactivate this!",
  type: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Yes, deactivate it!',
  cancelButtonText: 'No, Cancel!',
  reverseButtons: true
}).then((result) => {
  if (result.isConfirmed) {
    $.ajax({
        url: "{{ route('deactivateprogram')}}",
        type: 'POST',
        headers: {
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        data:{id:id},
        success:function(data){
          
          $('.table_data').html(data);
        }
    });
    swalWithBootstrapButtons.fire(
      'Deactivated!',
      'Audio has been deactivated.',
      'success'
    )
    location.reload();

  }
})

}
function activatecontent(id){
console.log(id);
const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false
})

swalWithBootstrapButtons.fire({
  title: 'Are you sure?',
  text: "You want to activate this!",
  type: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Yes, activate it!',
  cancelButtonText: 'No, Cancel!',
  reverseButtons: true
}).then((result) => {
  if (result.isConfirmed) {
    $.ajax({
        url: "{{ route('activatecontent')}}",
        type: 'POST',
        headers: {
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        data:{id:id},
        success:function(data){
          
          $('.table_data').html(data);
        }
    });
    swalWithBootstrapButtons.fire(
      'Activated!',
      'Video has been activated.',
      'success'
    )
    location.reload();
  }
})

}


function activateaudio(id){
console.log(id);
const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false
})

swalWithBootstrapButtons.fire({
  title: 'Are you sure?',
  text: "You want to activate this!",
  type: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Yes, activate it!',
  cancelButtonText: 'No, Cancel!',
  reverseButtons: true
}).then((result) => {
  if (result.isConfirmed) {
    $.ajax({
        url: "{{ route('activateaudio')}}",
        type: 'POST',
        headers: {
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        data:{id:id},
        success:function(data){
          
          $('.table_data').html(data);
        }
    });
    swalWithBootstrapButtons.fire(
      'Activated!',
      'Audio has been activated.',
      'success'
    )
    location.reload();
  }
})

}


function activateprogram(id){
console.log(id);
const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false
})

swalWithBootstrapButtons.fire({
  title: 'Are you sure?',
  text: "You want to activate this!",
  type: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Yes, activate it!',
  cancelButtonText: 'No, Cancel!',
  reverseButtons: true
}).then((result) => {
  if (result.isConfirmed) {
    $.ajax({
        url: "{{ route('activateprogram')}}",
        type: 'POST',
        headers: {
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        data:{id:id},
        success:function(data){
          
          $('.table_data').html(data);
        }
    });
    swalWithBootstrapButtons.fire(
      'Activated!',
      'Program has been activated.',
      'success'
    )
    location.reload();
  }
})

}
function activateuser(id){
console.log(id);
const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false
})

swalWithBootstrapButtons.fire({
  title: 'Are you sure?',
  text: "You want to activate this!",
  type: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Yes, activate it!',
  cancelButtonText: 'No, Cancel!',
  reverseButtons: true
}).then((result) => {
  if (result.isConfirmed) {
    $.ajax({
        url: "{{ route('activateuser')}}",
        type: 'POST',
        headers: {
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        data:{id:id},
        success:function(data){
          
          $('.table_data').html(data);
        }
    });
    swalWithBootstrapButtons.fire(
      'Activated!',
      'User has been activated.',
      'success'
    )
    location.reload();

  }
})

}
function activatemember(id){
console.log(id);
const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false
})

swalWithBootstrapButtons.fire({
  title: 'Are you sure?',
  text: "You want to activate this!",
  type: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Yes, activate it!',
  cancelButtonText: 'No, Cancel!',
  reverseButtons: true
}).then((result) => {
  if (result.isConfirmed) {
    $.ajax({
        url: "{{ route('activatemember')}}",
        type: 'POST',
        headers: {
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        data:{id:id},
        success:function(data){
          
          $('.table_data').html(data);
        }
    });
    swalWithBootstrapButtons.fire(
      'Activated!',
      'Member has been activated.',
      'success'
    )
    location.reload();

  }
})

}
   

    </script>
 
<script defer="" src="../../beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"83cf9fe54c5cb195","version":"2023.10.0","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
</body>
</html>