
<html lang="en-GB">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8; charset=ISO-8859-1"/>

<title>Dashboard - Examination MGT System</title>

<!-- Web Application Manifest -->
<link rel="manifest" href="http://akaunting.test/manifest.json">

<!-- Chrome for Android theme color -->
<meta name="theme-color" content="#FFFFFF">

<!-- Add to homescreen for Chrome on Android -->
<meta name="mobile-web-app-capable" content="yes">
<meta name="application-name" content="Akaunting">
<link rel="icon" sizes="512x512" href="http://akaunting.test/public/img/icons/icon-512x512.png">


<!-- Favicon -->
<link rel="icon" href="http://akaunting.test/public/img/favicon.ico" type="image/png">

<!-- Font -->
<link rel="stylesheet" href="/dash/vendor/opensans/css/opensans.css" type="text/css">

<!-- Icons -->
<link rel="stylesheet" href="/dash/vendor/nucleo/css/nucleo.css" type="text/css">
<link rel="stylesheet" href="/dash/vendor/fontawesome/css/all.min.css" type="text/css">

<!-- Css -->
<link rel="stylesheet" href="/dash/css/argon.css" type="text/css">
<link rel="stylesheet" href="/dash/css/obk-color.css" type="text/css">
<link rel="stylesheet" href="/dash/css/custom.css" type="text/css">
<link rel="stylesheet" href="/dash/css/element.css" type="text/css">
<style>
        .logo-subtitle{
            color: rgba(215,135,135); 
            font-family:fantasy; 
            background-color: whitesmoke;
            font-weight: bolder;
            text-align: center;
            
        }
        .pad-5{
            padding: 5px;
        }
        .pr-color{
            background-color: rgba(19,101,144,1);
        }
        .pr-color-dark{
            background-color: rgb(19,101,144,1);
            opacity: 0.9;
        }
        .sc-color{
            background-color: rgb(255,144,144);
        }
        .hidden{
            display: none;
        }
        .active-cat{
            color: orange;
        }
        .category-div{
            display: block;
        }
        .article-link{
            color: blue;
        }
               
        /* 20. preloader */
        /* line 585, ../../SAIFUL/Running_project/250 eCommerce_HTML/250 eCommerce_HTML/250 eCommerce_HTML/assets/scss/_common.scss */
        .preloader {
            background-color: #f7f7f7;
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 999999;
            -webkit-transition: .6s;
            -o-transition: .6s;
            transition: .6s;
            margin: 0 auto;
        }
        .mybtn {
            display: inline-block;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            border: 1px solid transparent;
            padding: .375rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: .25rem;
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }
        .mybtn-success {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745;
        }
        .mybtn-primary {
            color: #fff;
            background-color: lightskyblue;
            border-color: #28a745;
        }

        /* line 601, ../../SAIFUL/Running_project/250 eCommerce_HTML/250 eCommerce_HTML/250 eCommerce_HTML/assets/scss/_common.scss */
        .preloader .preloader-circle {
            width: 100px;
            height: 100px;
            position: relative;
            border-style: solid;
            border-width: 3px;
            border-top-color: #ff003c;
            border-bottom-color: transparent;
            border-left-color: transparent;
            border-right-color: transparent;
            z-index: 10;
            border-radius: 50%;
            -webkit-box-shadow: 0 1px 5px 0 rgba(35, 181, 185, 0.15);
            box-shadow: 0 1px 5px 0 rgba(35, 181, 185, 0.15);
            background-color: #ffffff;
            -webkit-animation: zoom 2000ms infinite ease;
            animation: zoom 2000ms infinite ease;
            -webkit-transition: .6s;
            -o-transition: .6s;
            transition: .6s;
        }

        /* line 622, ../../SAIFUL/Running_project/250 eCommerce_HTML/250 eCommerce_HTML/250 eCommerce_HTML/assets/scss/_common.scss */
        .preloader .preloader-circle2 {
            border-top-color: #0078ff;
        }

        /* line 625, ../../SAIFUL/Running_project/250 eCommerce_HTML/250 eCommerce_HTML/250 eCommerce_HTML/assets/scss/_common.scss */
        .preloader .preloader-img {
            position: absolute;
            top: 50%;
            z-index: 200;
            left: 0;
            right: 0;
            margin: 0 auto;
            text-align: center;
            display: inline-block;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
            padding-top: 6px;
            -webkit-transition: .6s;
            -o-transition: .6s;
            transition: .6s;
        }

        /* line 643, ../../SAIFUL/Running_project/250 eCommerce_HTML/250 eCommerce_HTML/250 eCommerce_HTML/assets/scss/_common.scss */
        .preloader .preloader-img img {
            max-width: 55px;
        }

        /* line 646, ../../SAIFUL/Running_project/250 eCommerce_HTML/250 eCommerce_HTML/250 eCommerce_HTML/assets/scss/_common.scss */
        .preloader .pere-text strong {
            font-weight: 800;
            color: #dca73a;
            text-transform: uppercase;
        }

        @-webkit-keyframes zoom {
            0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
            -webkit-transition: .6s;
            -o-transition: .6s;
            transition: .6s;
            }
            100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
            -webkit-transition: .6s;
            -o-transition: .6s;
            transition: .6s;
            }
        }

        @keyframes zoom {
            0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
            -webkit-transition: .6s;
            -o-transition: .6s;
            transition: .6s;
            }
            100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
            -webkit-transition: .6s;
            -o-transition: .6s;
            transition: .6s;
            }
        }
</style>


<script src="/js/jquery-3.2.1.min.js"></script>
<script src="/dash/vendor/jquery/dist/jquery.min.js"></script>



</head>

<body id="leftMenu" class="g-sidenav-show">
        <!-- Preloader Start -->
        <div id="preloader-active">
            <div class="preloader d-flex align-items-center justify-content-center">
                <div class="preloader-inner position-relative">
                    <div class="preloader-circle"></div>
                    <div class="preloader-img pere-text">
                        <img src="/img/core-img/adwapa_logo.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Preloader end -->

@php 
    $user = Auth::user();
    $student = App\Student::where('user_id',$user->id)->first();

    if($user->user_type == 'Student')
    {
        header("refresh:0; url='/students/".$student->id."'");
    }
@endphp
        
    <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-default" id="sidenav-main">
        <div class="scrollbar-inner">
            <div class="sidenav-header d-flex align-items-center">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="avatar menu-avatar background-unset">
                                <img class="border-radius-none border-0 mr-3" alt="Akaunting" src="/images/logo.png">
                            </span>
                            <span class="nav-link-text long-texts pl-2 mwpx-100">School Name</span>
                            <i class="fas fa-sort-down pl-2"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right menu-dropdown menu-dropdown-width">
                            <a href="/" class="dropdown-item">
                                <i class="fas fa-building"></i>
                                <span>Our Site</span>
                            </a>
                             <div class="dropdown-divider"></div>
                            <a href="http://akaunting.test/common/companies" class="dropdown-item">
                                <i class="fas fa-cogs"></i>
                                <span>Manage Companies</span>
                            </a>
                        </div>
                                            
                    </li>
                </ul>
                <div class="ml-auto left-menu-toggle-position overflow-hidden">
                    <div class="sidenav-toggler d-none d-xl-block left-menu-toggle" data-action="sidenav-unpin" data-target="#sidenav-main">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">  
                            <a class="nav-link @if($page_title =='Dashboard') active @endif"" href="/" >
                            <i class="fa fa-tachometer-alt"></i>    
                                <span class="nav-link-text">Dashboard</span>  
                            </a>
                        </li>
                        <li class="nav-item">  
                            <a class="nav-link @if($page_title =='Students') active @endif" href="/students" >
                                <i class="fa fa-users"></i>    
                                <span class="nav-link-text">Students</span>  
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if($page_title =='Examinations') active @endif" href="/exams" >
                                <i class="fa fa-book"></i>
                                <span class="nav-link-text">Examinations</span>
                            </a>
                        </li>
                        <li class="nav-item">  
                            <a class="nav-link" href="/settings" >
                                <i class="fa fa-cog"></i>    
                                <span class="nav-link-text">Settings</span>  
                            </a>
                        </li>
                        <li class="nav-item">  
                            <a class="nav-link" href="http://akaunting.test/apps/home" >
                                <i class="fa fa-rocket"></i>    
                                <span class="nav-link-text">Apps</span>  
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="main-content" id="panel">
        <nav class="navbar navbar-top navbar-expand navbar-dark border-bottom">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                        <form class="navbar-search navbar-search-light form-inline mb-0" id="navbar-search-main" autocomplete="off">
                            <div id="global-search" class="form-group mb-0 mr-sm-3">
                                <div class="input-group input-group-alternative input-group-merge">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-search"></i></span>
                                    </div>
                                    <input type="text" name="search" v-model="keyword" @input="onChange" v-click-outside="closeResult" class="form-control" autocomplete="off" placeholder="Search">
                                    <div class="dropdown-menu dropdown-menu-xl dropdown-menu-center" ref="menu" :class="[{show: show}]">
                                        <div class="list-group list-group-flush">
                                            <a class="list-group-item list-group-item-action" :href="item.href" v-for="(item, index) in items">
                                                <div class="row align-items-center">
                                                    <div class="col ml--2">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div>
                                                                <div class="name" v-text="item.name"></div>
                                                            </div>
                                                            <div class="text-muted">
                                                                <span class="type" v-text="item.type"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </form>
                    
                    <ul class="navbar-nav align-items-center ml-md-auto">
                        <li class="nav-item d-xl-none">
                            <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </div>
                        </li>

                        
                        <li class="nav-item d-sm-none">
                            <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>

                             <li class="nav-item dropdown">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-plus"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark dropdown-menu-right">
                                    <div class="row shortcuts px-4">
                                            <a href="/students/create" class="col-4 shortcut-item">
                                                <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                                                <i class="fa fa-money-bill"></i>
                                                </span>
                                                <small class="text-info">Student</small>
                                            </a>
                                        
                                    
                                            <a href="/examinations/create" class="col-4 shortcut-item">
                                                <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                                                    <i class="fas fa-hand-holding-usd"></i>
                                                </span>
                                                <small class="text-info">Examination</small>
                                            </a>
                                        
                                        
                                            <a href="/users/create" class="col-4 shortcut-item">
                                                <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                                                <i class="fas fa-user"></i>
                                                </span>
                                                <small class="text-info">users</small>
                                            </a>
                                            <a href="/questions/create" class="col-4 shortcut-item">
                                                <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                                                <i class="fas fa-question"></i>
                                                </span>
                                                <small class="text-info">Question</small>
                                            </a>
                                        
                                        
                                            <a href="/options/create" class="col-4 shortcut-item">
                                                <span class="shortcut-media avatar rounded-circle bg-gradient-danger">
                                                <i class="fa fa-shopping-cart"></i>
                                                </span>
                                                <small class="text-danger">Option</small>
                                            </a>
                                        </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <button class="nav-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span>
                                        <i class="far fa-bell"></i>
                                    </span>
                                </button>

                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0 overflow-hidden">
                                <div class="list-group list-group-flush"></div>
                                    <a class="dropdown-item text-center text-primary font-weight-bold py-3">You have no notification</a>
                            </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/members" title="0 Updates Available" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span>
                                        <i class="fa fa-sync-alt"></i>
                                    </span>
                                                            </a>
                            </li>
                        </ul>

                    
                    <ul class="navbar-nav align-items-center ml-auto ml-md-0">
                        <li class="nav-item dropdown">
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <div class="media align-items-center">
                                    <img src="/images/user/{{ Auth::user()->picture }}" class="user-img" alt=""/>
                                    <div class="media-body ml-2 d-none d-lg-block">
                                        <span class="mb-0 text-sm  font-weight-bold"> </span>
                                    </div>
                                </div>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">{{ Auth::user()->name }}</h6>
                                </div>

                                
                                    <a href="http://akaunting.test/auth/users/1/edit" class="dropdown-item">
                                        <i class="fas fa-user"></i>
                                        <span>Profile</span>
                                    </a>
                                
                                    <div class="dropdown-divider"></div>
 
                                        <a href="http://akaunting.test/auth/users" class="dropdown-item">
                                            <i class="fas fa-users"></i>
                                            <span>Users</span>
                                        </a>
                                    
                                    
                                        <a href="http://akaunting.test/auth/roles" class="dropdown-item">
                                            <i class="fas fa-list"></i>
                                            <span>Roles</span>
                                        </a>
                                    
                                    
                                        <a href="http://akaunting.test/auth/permissions" class="dropdown-item">
                                            <i class="fas fa-key"></i>
                                            <span>Permissions</span>
                                        </a>
                                    
                                                            
                                    <div class="dropdown-divider"></div>

                                
                                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        <i class="fas fa-power-off"></i>
                                        <span></span>
                                    </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                            </div>
                            @endguest
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
<div id="main-body">

    <div id="header" class="header pb-6">
        <div class="container-fluid content-layout">
            <div class="header-body">
                <div class="row py-4 align-items-center">
                    <div class="col-xs-12 col-sm-4 col-md-5 align-items-center">
                        <h2 class="d-inline-flex mb-0 long-texts">{{$page_title ?? ''}}
                            
                        </h2>
                    </div>
                    @yield('header_right')

                    <div class="col-xs-12 col-sm-8 col-md-7">
                        <div class="text-right">
                                <!--Dashboard General Filter-->
                            <el-date-picker
                                v-model="filter_date"
                                type="daterange"
                                align="right"
                                unlink-panels
                                :format="'yyyy-MM-dd'"
                                value-format="yyyy-MM-dd"
                                @change="onChangeFilterDate"
                                range-separator=">>"
                                start-placeholder="Start Date"
                                end-placeholder="End Date"
                                :picker-options="{
                                    shortcuts: [
                                        {
                                            text: 'This Year',
                                            onClick(picker) {
                                                const end = new Date('2020-01-01');
                                                const start = new Date('2020-01-01');

                                                end.setFullYear(start.getFullYear() + 1);
                                                end.setTime(end.getTime() - 3600 * 1000 * 24 * 1);

                                                picker.$emit('pick', [start, end]);
                                            }
                                        },
                                        {
                                            text: 'Previous Year',
                                            onClick(picker) {
                                                const end = new Date('2020-01-01');
                                                const start = new Date('2020-01-01');

                                                start.setTime(start.getTime() - 3600 * 1000 * 24 * 365);

                                                end.setFullYear(start.getFullYear() + 1);
                                                end.setTime(end.getTime() - 3600 * 1000 * 24 * 1);

                                                picker.$emit('pick', [start, end]);
                                            }
                                        },
                                        {
                                            text: 'This Quarter',
                                            onClick(picker) {
                                                const now = new Date();
                                                const quarter = Math.floor((now.getMonth() / 3));
                                                const start = new Date(now.getFullYear(), quarter * 3, 1);
                                                const end = new Date(start.getFullYear(), start.getMonth() + 3, 0);

                                                picker.$emit('pick', [start, end]);
                                            }
                                        },
                                        {
                                            text: 'Previous Quarter',
                                            onClick(picker) {
                                                const now = new Date();
                                                const quarter = Math.floor((now.getMonth() / 3));
                                                const start = new Date(now.getFullYear(), quarter * 3, 1);
                                                const end = new Date(start.getFullYear(), start.getMonth() + 3, 0);

                                                start.setMonth(start.getMonth() - 3);
                                                end.setMonth(end.getMonth() - 3);

                                                picker.$emit('pick', [start, end]);
                                            }
                                        },
                                        {
                                            text: 'Last 12 Months',
                                            onClick(picker) {
                                                const end = new Date();
                                                const start = new Date();

                                                start.setTime(start.getTime() - 3600 * 1000 * 24 * 365);

                                                picker.$emit('pick', [start, end]);
                                            }
                                        }
                                    ]
                                }">
                            </el-date-picker>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid content-layout mt--6">
        @yield('content')
                        
        <footer class="footer">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="text-sm float-left text-muted footer-texts">
                        Powered By Anthony Ankomah: <a href="https://akaunting.com" target="_blank" class="text-muted">Online System</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="text-sm float-right text-muted footer-texts">
                        Version 1.0.0
                    </div>
                </div>
            </div>
        </footer>       

    </div>

</div>

    </div>

    
    <!-- Core -->
<script src="/dash/vendor/jquery/dist/jquery.min.js"></script>
<script src="/dash/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="/dash/vendor/js-cookie/js.cookie.js"></script>

<script src="/js/common/dashboards.js?v=2.0.15"></script>

<script src="/js/common/search.js?v=2.0.15"></script>


<script src="/dash/vendor/chart.js/dist/Chart.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/4.0.2/echarts-en.min.js" charset=utf-8></script>

<!-- Argon -->
<script type="text/javascript">
    'use strict';

    var Layout = (function() {

        function pinSidenav() {
            $('.sidenav-toggler').addClass('active');
            $('.sidenav-toggler').data('action', 'sidenav-unpin');
            $('body').removeClass('g-sidenav-hidden').addClass('g-sidenav-show g-sidenav-pinned');
            $('body').append('<div class="backdrop d-xl-none" data-action="sidenav-unpin" data-target='+$('#sidenav-main').data('target')+' />');

            // Store the sidenav state in a cookie session
            Cookies.set('sidenav-state', 'pinned');
        }

        function unpinSidenav() {
            $('.sidenav-toggler').removeClass('active');
            $('.sidenav-toggler').data('action', 'sidenav-pin');
            $('body').removeClass('g-sidenav-pinned').addClass('g-sidenav-hidden');
            $('body').find('.backdrop').remove();

            // Store the sidenav state in a cookie session
            Cookies.set('sidenav-state', 'unpinned');
        }

        // Set sidenav state from cookie

        var $sidenavState = Cookies.get('sidenav-state') ? Cookies.get('sidenav-state') : 'pinned';

        if($(window).width() > 1200) {
            if($sidenavState == 'pinned') {
                pinSidenav()
            }

            if(Cookies.get('sidenav-state') == 'unpinned') {
                unpinSidenav()
            }
        }

        $("body").on("click", "[data-action]", function(e) {
            e.preventDefault();

            var $this = $(this);
            var action = $this.data('action');
            var target = $this.data('target');

            // Manage actions
            switch (action) {
                case 'sidenav-pin':
                    pinSidenav();
                    break;

                case 'sidenav-unpin':
                    unpinSidenav();
                    break;

                case 'search-show':
                    target = $this.data('target');
                    $('body').removeClass('g-navbar-search-show').addClass('g-navbar-search-showing');

                    setTimeout(function() {
                        $('body').removeClass('g-navbar-search-showing').addClass('g-navbar-search-show');
                    }, 150);

                    setTimeout(function() {
                        $('body').addClass('g-navbar-search-shown');
                    }, 300)
                    break;

                case 'search-close':
                    target = $this.data('target');
                    $('body').removeClass('g-navbar-search-shown');

                    setTimeout(function() {
                        $('body').removeClass('g-navbar-search-show').addClass('g-navbar-search-hiding');
                    }, 150);

                    setTimeout(function() {
                        $('body').removeClass('g-navbar-search-hiding').addClass('g-navbar-search-hidden');
                    }, 300);

                    setTimeout(function() {
                        $('body').removeClass('g-navbar-search-hidden');
                    }, 500);
                    break;
            }
        })

        // Add sidenav modifier classes on mouse events
        $('.sidenav').on('mouseenter', function() {
            if(! $('body').hasClass('g-sidenav-pinned')) {
                $('body').removeClass('g-sidenav-hide').removeClass('g-sidenav-hidden').addClass('g-sidenav-show');
            }
        })

        $('.sidenav').on('mouseleave', function() {
            if(! $('body').hasClass('g-sidenav-pinned')) {
                $('body').removeClass('g-sidenav-show').addClass('g-sidenav-hide');

                setTimeout(function() {
                    $('body').removeClass('g-sidenav-hide').addClass('g-sidenav-hidden');
                }, 300);
            }
        })

        // Make the body full screen size if it has not enough content inside
        $(window).on('load resize', function() {
            if($('body').height() < 800) {
                $('body').css('min-height', '100vh');
                $('#footer-main').addClass('footer-auto-bottom')
            }
        })
    })();
</script>

<script>
        /* 1. Proloder */
    $(window).on('load', function () {
      $('#preloader-active').delay(450).fadeOut('slow');
      $('body').delay(450).css({
        'overflow': 'visible'
      });
    });

</script>



<script  type="text/javascript">
    var ctvChart = document.getElementById('jkpdchegimwluqonvbtrayszf').getContext('2d');
    function jkpdchegimwluqonvbtrayszf_create(data) {
        jkpdchegimwluqonvbtrayszf_rendered = true;
        document.getElementById("jkpdchegimwluqonvbtrayszf_loader").style.display = 'none';
        document.getElementById("jkpdchegimwluqonvbtrayszf").style.display = 'block';
        window.jkpdchegimwluqonvbtrayszf = new Chart(document.getElementById("jkpdchegimwluqonvbtrayszf").getContext("2d"), {
            type: 'line',
            data: {
                labels: ["Jan 2020","Feb 2020","Mar 2020","Apr 2020","May 2020","Jun 2020","Jul 2020","Aug 2020","Sep 2020","Oct 2020","Nov 2020","Dec 2020"],
                datasets: data
            },
            options: {"maintainAspectRatio":false,"scales":{"xAxes":[{"barPercentage":1.6,"ticks":{"suggestedMin":60,"suggestedMax":125,"padding":20,"fontColor":"#9e9e9e"},"gridLines":{"drawBorder":false,"color":"rgba(29,140,248,0.0)","zeroLineColor":"transparent"}}],"yAxes":[{"ticks":{"beginAtZero":true,"padding":10,"fontColor":"#9e9e9e"},"barPercentage":1.6,"gridLines":{"drawBorder":false,"color":"rgba(29,140,248,0.1)","zeroLineColor":"transparent","borderDash":[2],"borderDashOffset":[2]}}]},"tooltips":{"backgroundColor":"#000000","titleFontColor":"#ffffff","bodyFontColor":"#e5e5e5","bodySpacing":4,"YrPadding":12,"mode":"nearest","intersect":0,"position":"nearest"},"responsive":true},
            plugins: []
        });
    }
    let jkpdchegimwluqonvbtrayszf_rendered = false;
    let jkpdchegimwluqonvbtrayszf_load = function () {
    if (document.getElementById("jkpdchegimwluqonvbtrayszf") && !jkpdchegimwluqonvbtrayszf_rendered) {
                    jkpdchegimwluqonvbtrayszf_create([{"borderWidth":4,"backgroundColor":"#328aef","borderColor":"#328aef","pointStyle":"line","fill":false,"data":[1744.1499999999999,567.28,1533.73,1833.6999999999998,0,2214.75,1502.96,1770.7,1408.6,503,317.05,503],"label":"Income","type":"line"},{"borderWidth":4,"backgroundColor":"#ef3232","borderColor":"#ef3232","pointStyle":"line","fill":false,"data":[271.21,548,800.6999999999999,1271.6599999999999,283.69,394.45,4375.2699999999995,2118.37,135,255.3,1183.44,2179.46],"label":"Expenses","type":"line"},{"borderWidth":4,"backgroundColor":"#6da252","borderColor":"#6da252","pointStyle":"line","fill":false,"data":[1472.9399999999998,19.279999999999973,733.0300000000001,562.04,0,1820.3,0,0,1273.6,247.7,0,0],"label":"Profit","type":"line"}])
            }
    };
    window.addEventListener("load", jkpdchegimwluqonvbtrayszf_load);
    document.addEventListener("turbolinks:load", jkpdchegimwluqonvbtrayszf_load);

</script>

<script  type="text/javascript">
    var ctvChart = document.getElementById('wtkilyancsvhjuromxzdgepqf').getContext('2d');
    function wtkilyancsvhjuromxzdgepqf_create(data) {
        wtkilyancsvhjuromxzdgepqf_rendered = true;
        document.getElementById("wtkilyancsvhjuromxzdgepqf_loader").style.display = 'none';
        document.getElementById("wtkilyancsvhjuromxzdgepqf").style.display = 'block';
        window.wtkilyancsvhjuromxzdgepqf = new Chart(document.getElementById("wtkilyancsvhjuromxzdgepqf").getContext("2d"), {
            type: 'doughnut',
            data: {
                labels: ["\u20b51,858.88 - Dolor et.","\u20b51,357.21 - Enim maiores.","\u20b51,283.51 - Et natus iusto.","\u20b51,254.52 - Ab voluptates.","\u20b51,214.19 - Perspiciatis.","\u20b5964.86 - Voluptatem."],
                datasets: data
            },
            options: {"maintainAspectRatio":false,"scales":{"xAxes":{"display":false},"yAxes":{"0":{"ticks":{"beginAtZero":true}},"display":false}},"color":["#750b57","#512c21","#4d4a65","#c3306a","#d9f7db","#59bd77"],"cutoutPercentage":80,"legend":{"position":"right"},"tooltips":{"backgroundColor":"#000000","titleFontColor":"#ffffff","bodyFontColor":"#e5e5e5","bodySpacing":4,"xPadding":12,"mode":"nearest","intersect":0,"position":"nearest"}},
            plugins: []
        });
    }
    let wtkilyancsvhjuromxzdgepqf_rendered = false;
    let wtkilyancsvhjuromxzdgepqf_load = function () {
    if (document.getElementById("wtkilyancsvhjuromxzdgepqf") && !wtkilyancsvhjuromxzdgepqf_rendered) {
                    wtkilyancsvhjuromxzdgepqf_create([{"borderWidth":2,"backgroundColor":["#750b57","#512c21","#4d4a65","#c3306a","#d9f7db","#59bd77"],"data":[1858,1357,1283,1254,1214,964],"label":"Income","type":"doughnut"}])
            }
    };
    window.addEventListener("load", wtkilyancsvhjuromxzdgepqf_load);
    document.addEventListener("turbolinks:load", wtkilyancsvhjuromxzdgepqf_load);

</script>

<script  type="text/javascript">
    var ctvChart = document.getElementById('whjtskoadnrmlfgcuepxvqzib').getContext('2d');
    function whjtskoadnrmlfgcuepxvqzib_create(data) {
        whjtskoadnrmlfgcuepxvqzib_rendered = true;
        document.getElementById("whjtskoadnrmlfgcuepxvqzib_loader").style.display = 'none';
        document.getElementById("whjtskoadnrmlfgcuepxvqzib").style.display = 'block';
        window.whjtskoadnrmlfgcuepxvqzib = new Chart(document.getElementById("whjtskoadnrmlfgcuepxvqzib").getContext("2d"), {
            type: 'doughnut',
            data: {
                labels: ["\u20b51,518.14 - Inventore.","\u20b51,364.11 - Aut explicabo.","\u20b51,158.84 - Adipisci quo.","\u20b51,034.14 - Repellendus.","\u20b5982.10 - Fugit ab est.","\u20b5982.13 - Sit illo."],
                datasets: data
            },
            options: {"maintainAspectRatio":false,"scales":{"xAxes":{"display":false},"yAxes":{"0":{"ticks":{"beginAtZero":true}},"display":false}},"color":["#02d1d5","#2c386e","#835501","#89c0f8","#48b34f","#c90d81"],"cutoutPercentage":80,"legend":{"position":"right"},"tooltips":{"backgroundColor":"#000000","titleFontColor":"#ffffff","bodyFontColor":"#e5e5e5","bodySpacing":4,"xPadding":12,"mode":"nearest","intersect":0,"position":"nearest"}},
            plugins: []
        });
    }
    let whjtskoadnrmlfgcuepxvqzib_rendered = false;
    let whjtskoadnrmlfgcuepxvqzib_load = function () {
    if (document.getElementById("whjtskoadnrmlfgcuepxvqzib") && !whjtskoadnrmlfgcuepxvqzib_rendered) {
                    whjtskoadnrmlfgcuepxvqzib_create([{"borderWidth":2,"backgroundColor":["#02d1d5","#2c386e","#835501","#89c0f8","#48b34f","#c90d81"],"data":[1518,1364,1158,1034,982,982],"label":"Expenses","type":"doughnut"}])
            }
    };
    window.addEventListener("load", whjtskoadnrmlfgcuepxvqzib_load);
    document.addEventListener("turbolinks:load", whjtskoadnrmlfgcuepxvqzib_load);

</script>


</body>

</html>
