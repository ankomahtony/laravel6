
<html lang="en-GB">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Login</title>

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





</head>

<body class="login-page">
    
    <div class="main-content mt-4">
        <div class="header">
            <div class="container">
                <div class="header-body text-center">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-6 col-md-8">
                            <img class="mb-5" src="http://akaunting.test/public/img/akaunting-logo-white.svg" width="22%" alt="Akaunting"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-7">
                        <div class="card mb-0 login-card-bg">
                            <div class="card-body px-lg-5 py-lg-5">
                                <div class="text-center text-white mb-4">
                                    <small>Login to start your session</small>
                                </div>
                                <div id="app">
                                    <div role="alert" class="alert alert-danger d-none" :class="(form.response.error) ? 'show' : ''" v-if="form.response.error" v-html="form.response.message">

                                    </div>
                                    <form method="POST" action="{{ route('login')}}" accept-charset="UTF-8" id="login" >
                                        @csrf
                                        <div class="form-group has-feedback" :class="[{'has-error': form.errors.get(&quot;email&quot;) }]">
                                            
                                            <div class="input-group input-group-merge input-group-alternative">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-envelope"></i>
                                                    </span>
                                                </div>

                                                <input class="form-control" data-name="email" placeholder="Email" v-model="form.email" name="email" type="email" value="{{old('email')}}">
                                            </div>

                                            <div class="invalid-feedback d-block">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group has-feedback" :class="[{'has-error': form.errors.get(&quot;password&quot;) }]">
                                        
                                            <div class="input-group input-group-merge input-group-alternative">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-unlock-alt"></i>
                                                    </span>
                                                </div>
                                                <input class="form-control" data-name="password" placeholder="Password" v-model="form.password" name="password" type="password" value="">
                                            </div>

                                            <div class="invalid-feedback d-block">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>



                                        <div class="row align-items-center">
                                                            <div class="col-xs-12 col-sm-8">
                                                    <div class="custom-control custom-control-alternative custom-checkbox">
                                                        <input id="checkbox-remember" class="custom-control-input" v-model="form.remember" name="remember" type="checkbox" value="1">
                                                        <label class="custom-control-label" for="checkbox-remember">
                                                            <span class="text-white">Remember Me</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            
                                            <div class="col-xs-12 col-sm-4">
                                                <button :disabled="form.loading" type="submit" class="btn btn-success float-right header-button-top" data-loading-text="Loading..."><div class="aka-loader"></div> <span>Login</span></button>
                                            </div>
                                        </div>
                                        <div class="mt-5 mb--4">
                                            <a href="/register" class="btn btn-primary">Register</a>
                                        </div>

                                        <div class="mt-5 mb--4">
                                            <a href="/auth/forgot" class="text-white"><small>I forgot my password</small></a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        
            <footer>
                <div class="container mt-5 mb-4">
                    <div class="row align-items-center justify-content-xl-between">
                        <div class="col-xl-12">
                            <div class="copyright text-center text-white">
                                <small>
                                    Powered By Cesdet: <a href="/" target="_blank" class="text-white">Online Examination Software</a>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

    </div>

        
        <script src="/js/auth/login.js?v=2.0.15"></script>
        <!-- Core -->
        <script src="/vendor/jquery/dist/jquery.min.js"></script>
        <script src="/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="/vendor/js-cookie/js.cookie.js"></script>

    </body>

</html>
