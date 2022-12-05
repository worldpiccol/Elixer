<!doctype html>
<html lang="en">

<head>
        
        <meta charset="utf-8" />
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitstocks Trading Limited  | Verify Email Address</title>
    <meta name="description"
        content="Bitstocks Trading Limited is a global leader in online trading and investing, providing thousands of clients worldwide with access to forex, contracts for difference (CFDs), stockbroking and bonds markets via award-winning platforms.">
    <meta name="keywords"
        content="Bitstocks Trading Limited bank,regulated banking,forex trading,CFD trading,Forex,trading,online trading,mobile trading,licensed trading">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#282828">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="icon" href="{{ asset('frontend/img/favicon.ico') }}">

    <!-- preloader css -->
    <link rel="stylesheet" href="{{ asset('dash/assets/css/preloader.min.css') }}" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{ asset('dash/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('dash/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('dash/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body>

    <!-- <body data-layout="horizontal"> -->

        <div class="my-5 pt-5">
            <div class="container">

                <div class="row text-center mb-5">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-10 col-xl-8">
                        <div class="text-center">
                            <img src="{{ asset('dash/assets/images/verify.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mb-5">
                            
                            <h4 class="text-uppercase mt-4">{{ __('Verify Your Email Address') }}</h4>

                            <div class="text-center mt-3">
                                <p>
                                    {{ __('Before proceeding, please check your email for a verification link.') }} <br>
                                    {{ __('If you did not receive the email, please click on the button below to request another link.') }}
                                </p>
                            </div>

                             <div class="mt-5 text-center">

                                 <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-primary waves-effect waves-light align-baseline">{{ __('Resend Email') }}</button>.
                                </form>
                               
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
            <!-- end container -->
        </div>
        <!-- end content -->

        <!-- JAVASCRIPT -->
        <!-- JAVASCRIPT -->
        <script src="{{ asset('dash/assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('dash/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('dash/assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('dash/assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('dash/assets/libs/node-waves/waves.min.js') }}"></script>
        <script src="{{ asset('dash/assets/libs/feather-icons/feather.min.js') }}"></script>

        <script src="{{ asset('dash/assets/libs/pace-js/pace.min.js') }}"></script>
        <script src="{{ asset('dash/assets/js/pages/pass-addon.init.js') }}"></script>
        <script src="{{ asset('dash/assets/js/pages/validation.init.js') }}"></script>

    </body>

</html>
