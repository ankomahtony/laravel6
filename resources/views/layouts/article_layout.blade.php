<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
  <title>Adwapa - Blog</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="/article/css/bootstrap.css">
	<link rel="stylesheet" href="/article/vendors/linericon/style.css">
  <link rel="stylesheet" href="/article/css/themify-icons.css">
  <link rel="stylesheet" href="/article/vendors/owl-carousel/owl.theme.default.min.css">
	<link rel="stylesheet" href="/article/vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="/article/vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="/article/css/magnific-popup.css">
	<link rel="stylesheet" href="/article/vendors/nice-select/css/nice-select.css">
	<!-- main css -->
  <link rel="stylesheet" href="/article/css/style.css">
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
        .ft-color{
            color: rgb(255,255,255);
        }
        .ft-color:hover{
            color: rgb(255,182,63);
        }
        .ft-color:active{
            color: rgb(255,182,63);
        }
        .hidden{
            display: none;
        }
        .banner_area .banner_inner {
            position: relative;
            overflow: hidden;
            width: 100%;
            min-height: 400px;
            background-color: rgba(19,101,144,1);
            z-index: 1;
        }
  </style>
</head>

<body>

	<!--================ Start Header Area =================-->
	<header class="header_area header_inner_page" style="background-color: rgba(19,101,144,1);">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgba(19,101,144,1);">
				<div class="container pr-color" style="background-color: rgba(19,101,144,1);">
					<!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="/"><img src="/img/core-img/adwapa_logo.png" alt=""></a>
					<a class="navbar-brand logo_inner_page" href="/"><img src="/img/core-img/adwapa_logo.png" alt="" height="150px;"></a>      
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav">
							<li class="nav-item"><a class="nav-link" href="/">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
							<li class="nav-item submenu dropdown">
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="services.html">Services</a></li>
									<li class="nav-item"><a class="nav-link" href="portfolio-details.html">Portfolio Details</a></li>
								</ul>
							</li>
							<li class="nav-item active submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Blog</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="/articles/create">Add Blog</a></li>
									<li class="nav-item"><a class="nav-link" href="/articles">Blog Details</a></li>
								</ul>
							</li>
							<li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ End Header Area =================-->

@yield('banner')

    
@yield('content')


       
    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix pr-color">
        <div class="container">
            <div class="row align-items-center">
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-4">
                    <div class="single_widget_area">
                        <!-- Logo -->
                        <div class="footer-logo mr-50">
                            <a href="/"><img src="/img/core-img/adwapa_logo.png" height="150px;" alt=""></a>
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
                                        <li class="nav-item active">
                                            <a class="nav-link ft-color" href="/">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link ft-color" href="/products">Shop</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/articles">Blog</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link ft-color" href="/cart">Cart</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link ft-color" href="/checkout">Checkout</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link ft-color" href="/products/create">Add Product</a>
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


  <!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="/article/js/jquery-3.2.1.min.js"></script>
	<script src="/article/js/popper.js"></script>
	<script src="/article/js/bootstrap.min.js"></script>
	<script src="/article/js/stellar.js"></script>
	<script src="/article/vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="/article/vendors/isotope/isotope-min.js"></script>
	<script src="/article/vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="/article/js/jquery.ajaxchimp.min.js"></script>
	<script src="/article/js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="/article/js/gmaps.min.js"></script>
	<script src="/article/js/theme.js"></script>
</body>

</html>