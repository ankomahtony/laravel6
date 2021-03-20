<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="_token" content="{{ csrf_token() }}">

    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Adwapa - I Buy Here | Home</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/adwapa_logo_bw.png">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="/css/core-style.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/animate.min.css">
 
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

</head>

<body>
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

    <!-- Search Wrapper Area Start -->
    <div class="search-wrapper section-padding-100">
        <div class="search-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-content">
                        <form action="/" method="get">
                            <input class="form-controller" type="text" name="search" id="search" placeholder="Type your keyword...">
                            <button type="submit"><img src="/img/core-img/search.png" alt=""></button> 
                         </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Wrapper Area End -->

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix ">

        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav pr-color">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                <a href="/"><img src="/img/core-img/adwapa_logo.png" alt=""></a>
                <!-- <p>Simple Market for You</p> -->
            </div>
            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>
        @if($page=='')
        <marquee behavior="" direction="">
            <a href="{{ route('articles.show',$article) }}" class="article-link"> {{$article->title}}</a> &#160; &#160; &#160;
            <a href="{{ route('articles.show',$article) }}" class="article-link"> {{$article->title}}</a>&#160; &#160; &#160;
            <a href="{{ route('articles.show',$article) }}" class="article-link"> {{$article->title}}</a> 
        </marquee>
        @endif
        <!-- Header Area Start -->
        <header class="header-area clearfix" style="background-color: rgba(19,101,164,0.9);">
            <!-- Close Icon -->
            <div class="nav-close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </div>
            <!-- Logo -->
            <div class="logo">
                <a href="/"><img src="/images/logo.png" alt=""></a>
                <h4 class="logo-subtitle">I Buy Here</h4>
            </div>
            <!-- Amado Nav -->
            <nav class="amado-nav">
                <ul>
                    <li class="@if($page=='') active @endif"><a href="/">Home</a></li>
                    <li class="@if($page=='index') active @endif"><a href="/products">Shop</a></li>
                    <li class="@if($page=='blog') active @endif"><a href="/articles">Blog</a></li>
                    <li class="@if($page=='cart') active @endif"><a href="/cart">Cart</a></li>
                    <li class="@if($page=='checkout') active @endif"><a href="/checkout">Checkout</a></li>
                    <li class="@if($page=='transactions') active @endif"><a href="/transactions">Transactions</a></li>
                    <li class="@if($page=='create') active @endif"><a href="/products/create">Add Product</a></li>
                </ul>
            </nav>
            <!-- Button Group -->
            <br><br>
            @if (Route::has('login'))
                <div class="links">
                    @auth
                        <a class="" href="{{ url('/home') }}">{{auth()->user()->name}}</a>
                        @php
                            $carts = Auth::user()->carts->where('trans_id',NULL);
                            $n = 0;
                        @endphp
                        @foreach($carts as $cart)
                            @php
                                $n+=1;
                            @endphp
                        @endforeach
                    @else
                        <a class="mybtn mybtn-primary" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a class="mybtn mybtn-success" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <br>
            <!-- Cart Menu -->
            <div class="cart-fav-search mb-100">
            @if (Route::has('login'))
                @auth
                    <a href="/cart" class="cart-nav @if($page=='cart') active @endif"><img src="/img/core-img/cart.png" alt=""> Cart <span>({{$n}})</span></a>
                    <a href="#" class="fav-nav "><img src="/img/core-img/favorites.png" alt=""> Favourite</a>
                @endauth
            @endif
                <a href="#" class="search-nav"><img src="/img/core-img/search.png" alt=""> Search</a>
            </div>
            <!-- Social Button -->
            <div class="social-info d-flex justify-content-between">
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </header>
        <!-- Header Area End -->
@yield('content')


    <!-- ##### Newsletter Area Start ##### -->
    <section class="newsletter-area section-padding-100-0 sc-color">
        <div class="container">
            <div class="row align-items-center">
                <!-- Newsletter Text -->
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="newsletter-text mb-100">
                        <h2>Subscribe for a <span class="pr-color">5% Discount</span></h2>
                        <p style="color: rgb(19,101,144);">We love to give you a reliable update on things people are selling on this noticed website.</p>
                    </div>
                </div>
                <!-- Newsletter Form -->
                <div class="col-12 col-lg-6 col-xl-5">
                    <div class="newsletter-form mb-100">
                        <form action="#" method="post">
                            <input type="email" name="email" class="nl-email" placeholder="Your E-mail">
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Newsletter Area End ##### -->


    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix pr-color-dark">
        <div class="container">
            <div class="row align-items-center">
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-4">
                    <div class="single_widget_area">
                        <!-- Logo -->
                        <div class="footer-logo mr-50">
                            <a href="/"><img src="/img/core-img/adwapa_logo.png" height="30px;" alt=""></a>
                        </div>
                        <!-- Copywrite Text -->
                        <p class="copywrite"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright Tony &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-8">
                    <div class="single_widget_area">
                        <!-- Footer Menu -->
                        <div class="footer_menu">
                            <nav class="navbar navbar-expand-lg justify-content-end">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#footerNavContent" aria-controls="footerNavContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
                                <div class="collapse navbar-collapse" id="footerNavContent">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item @if($page=='') active @endif">
                                            <a class="nav-link" href="/">Home</a>
                                        </li>
                                        <li class="nav-item @if($page=='index') active @endif">
                                            <a class="nav-link" href="/products">Shop</a>
                                        </li>
                                        <li class="nav-item @if($page=='cart') active @endif">
                                            <a class="nav-link" href="/cart">Cart</a>
                                        </li>
                                        <li class="nav-item @if($page=='blog') active @endif">
                                            <a class="nav-link" href="/articles">Blog</a>
                                        </li>

                                        <li class="nav-item @if($page=='add-blog') active @endif">
                                            <a class="nav-link" href="/products/create">Add Product</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->



    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    <script src="/js/jquery/jquery-3.2.1.min.js"></script>
    <!-- Popper js -->
    <script src="/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="/js/plugins.js"></script>
    <!-- Active js -->
    <script src="/js/active.js"></script>
    <script>
        /* 1. Proloder */
    $(window).on('load', function () {
      $('#preloader-active').delay(450).fadeOut('slow');
      $('body').delay(450).css({
        'overflow': 'visible'
      });
    });

    </script>

</body>

</html>