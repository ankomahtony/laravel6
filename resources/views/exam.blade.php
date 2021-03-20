
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


<script src="/js/jquery-3.2.1.min.js"></script>
<script src="/dash/vendor/jquery/dist/jquery.min.js"></script>



</head>

<body id="leftMenu">
        

    <div class="main-content" id="panel">
        

            <div id="header" class="header pb-6">
                <div class="container-fluid content-layout">
                    <div class="header-body">
                        <div class="row py-4 align-items-center">
                            <div class="col-xs-12 col-sm-4 col-md-5 align-items-center">
                                <h2 class="d-inline-flex mb-0 long-texts">{{$page_title ?? ''}}
                                    
                                </h2>
                            </div>
                            @yield('header_right')

                            <div class="col-xs-12 col-sm-4 col-md-5 align-items-right">
                                <h2 class="d-inline-flex mb-0 long-texts"><span class='btn-danger'>{{$exam->duration }}</span>
                                    Minutes Remaining
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid content-layout mt--6">
            <div class="card">
                <div class="card-body">
                    @php $qtn_no = $_GET['page']?? 1; @endphp
                    <div data-timeline-content="axis" data-timeline-axis-style="dashed" class="timeline timeline-one-side">
                        @foreach($exam_qtns as $qtn)
                        <div class="timeline-block">
                            <span class="timeline-step badge-danger">
                                <i class="far ">{{$qtn_no}}</i>
                            </span> 
                            <div class="timeline-content">
                                <h2 class="font-weight-600">{{$qtn->question}}</h2> 
                                <div class="row">
                                    @php
                                        $chosen = ['A','B','C','D','E']; 
                                        $n = 0;
                                        $options = App\Option::where('qtn_id',$qtn->id)->get();
                                    @endphp
                                    @foreach($options as $option)
                                    <div class="form-group col-lg-4 ">
                                        <input type="checkbox" name="{{$chosen[$n]}}" id="answer{{$n}}" onclick="mychosen('{{$n}}')" class="btn btn-xl">
                                        <button class='btn btn-white btn-lg header-button-top'>{{$option->option}}</button>
                                    </div>
                                    @endforeach
                                </div> 
                            </div>
                        </div>
                        @endforeach
                        {{$exam_qtns->links()}} 
                        <div class="mt-3">
                            <a href="/" class="btn btn-danger btn-sm header-button-top">Cancel</a> 
                            <button id="button-payment" class="btn btn-success btn-sm header-button-bottom">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                                
                <footer class="footer">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="text-sm float-left text-muted footer-texts">
                                Powered By Anthony Ankomah: <a href="/" target="_blank" class="text-muted">Online Examination System</a>
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
    <script type="text/javascript">
        $(document).ready(function(){


        $('[type="checkbox"]').change(function(){
        
            if(this.checked){
            $('[type="checkbox"]').not(this).prop('checked', false);
            }    
        });

        });
    </script>

    
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
