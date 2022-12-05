<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitstocks Trading Limited  | <?php echo $__env->yieldContent('title'); ?> </title>
    <meta name="description"
        content="Bitstocks Trading Limited is a global leader in online trading and investing, providing thousands of clients worldwide with access to forex, contracts for difference (CFDs), stockbroking and bonds markets via award-winning platforms.">
    <meta name="keywords"
        content="Bitstocks Trading Limited bank,regulated banking,forex trading,CFD trading,Forex,trading,online trading,mobile trading,licensed trading">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#282828">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="icon" href="<?php echo e(asset('frontend/img/favicon.ico')); ?>">

    <!-- preloader css -->
    <link rel="stylesheet" href="<?php echo e(asset('dash/assets/css/preloader.min.css')); ?>" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="<?php echo e(asset('dash/assets/css/bootstrap.min.css')); ?>" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?php echo e(asset('dash/assets/css/icons.min.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?php echo e(asset('dash/assets/css/app.min.css')); ?>" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body>

    <!-- <body data-layout="horizontal"> -->
        <div class="auth-page">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-md-4">
                        <div class="auth-full-page-content d-flex p-sm-5 p-4">
                            <div class="w-100">
                                <div class="d-flex flex-column h-100">
                                    <div class="mb-2 mb-md-3 text-center">
                                        <a href="<?php echo e(url('/')); ?>" class="d-block auth-logo">
                                            <img src="<?php echo e(asset('dash/assets/images/logo-dark.png')); ?>" alt="" width="300">
                                        </a>
                                    </div>
                                    <div class="auth-content my-auto">

                                        <?php echo $__env->yieldContent('content'); ?>
                                    </div>
                                    <div class="mt-4 mt-md-5 text-center">
                                        <p class="mb-0">&copy; <?php echo e(now()->year); ?>&nbsp; Bitstocks Trading Limited, All Rights Reserved</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end auth full page content -->
                    </div>
                    <!-- end col -->
                    <div class="col-md-8">
                        <div class="auth-bg pt-md-5 p-4 d-flex">
                            <div class="bg-overlay"></div>
                            <ul class="bg-bubbles">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                            <!-- end bubble effect -->
                            <div class="row justify-content-center align-items-center">
                                <div class="col-xl-7">
                                    <div class="p-0 p-sm-4 px-xl-0">
                                        <div id="reviewcarouselIndicators" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-indicators carousel-indicators-rounded justify-content-start ms-0 mb-0">
                                                <button type="button" data-bs-target="#reviewcarouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#reviewcarouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#reviewcarouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                            </div>
                                            <!-- end carouselIndicators -->
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <div class="testi-contain text-white">
                                                        <i class="bx bxs-quote-alt-left text-success display-6"></i>

                                                        <h4 class="mt-4 fw-medium lh-base text-white">“Bitstocks offers the best way to trade Bitcoin, Ethereum, Ripple and other Cryptocurrencies. Our low fees and great service makes us the most trusted place to buy and sell cryptocurrencies. With our top-of-the-line technology and up to date prices, you'll never miss another opportunity again.”
                                                        </h4>
                                                        <div class="mt-4 pt-3 pb-5">
                                                            <div class="d-flex align-items-start">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="carousel-item">
                                                    <div class="testi-contain text-white">
                                                        <i class="bx bxs-quote-alt-left text-success display-6"></i>

                                                        <h4 class="mt-4 fw-medium lh-base text-white">“Bitstocks is a trading platform that takes the guesswork out of crypto investing. The exchange is designed to help people make a better investment decision by providing the best price and market liquidity.”</h4>
                                                        <div class="mt-4 pt-3 pb-5">
                                                            <div class="d-flex align-items-start">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="carousel-item">
                                                    <div class="testi-contain text-white">
                                                        <i class="bx bxs-quote-alt-left text-success display-6"></i>

                                                        <h4 class="mt-4 fw-medium lh-base text-white">“Bitstocks is a cryptocurrency trading & mining platform that provides the best opportunity for investors to generate more profits by actively trading the markets at all times.”</h4>
                                                        <div class="mt-4 pt-3 pb-5">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end carousel-inner -->
                                        </div>
                                        <!-- end review carousel -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container fluid -->
        </div>


        <!-- JAVASCRIPT -->
        <script src="<?php echo e(asset('dash/assets/libs/jquery/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('dash/assets/libs/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
        <script src="<?php echo e(asset('dash/assets/libs/metismenu/metisMenu.min.js')); ?>"></script>
        <script src="<?php echo e(asset('dash/assets/libs/simplebar/simplebar.min.js')); ?>"></script>
        <script src="<?php echo e(asset('dash/assets/libs/node-waves/waves.min.js')); ?>"></script>
        <script src="<?php echo e(asset('dash/assets/libs/feather-icons/feather.min.js')); ?>"></script>

        <script src="<?php echo e(asset('dash/assets/libs/pace-js/pace.min.js')); ?>"></script>
        <script src="<?php echo e(asset('dash/assets/js/pages/pass-addon.init.js')); ?>"></script>
        <script src="<?php echo e(asset('dash/assets/js/pages/validation.init.js')); ?>"></script>

    </body>
</html>
<?php /**PATH /home/bitsrvud/bit_st/resources/views/auth/layouts/app.blade.php ENDPATH**/ ?>