<!Doctype html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Bitstocks Trading Limited | Forex Trading</title>
    <meta name="description"
        content="Bitstocks Trading Limited is a global pioneer in online trading and investment, offering award-winning platforms to thousands of clients worldwide.">
    <meta name="keywords"
        content="Bitstocks Trading Limited bank,regulated banking,forex trading,CFD trading,Forex,trading,online trading,mobile trading,licensed trading">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#282828">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="icon" href="<?php echo e(asset('frontend/img/favicon.ico')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/main.css')); ?>" />
    <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="<?php echo e(asset('frontend/vendor/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend/vendor/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend/vendor/vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend/vendor/vendor/glightbox/css/glightbox.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend/vendor/vendor/remixicon/remixicon.html')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend/vendor/vendor/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">
    <style>




    </style>
    <style>

        body {
            font-family: "Open Sans", sans-serif;
            color: #444444;
        }

        a {
            color: #ff4a17;
            text-decoration: none;
        }

        a:hover {
            color: #ff724a;
            text-decoration: none;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Raleway", sans-serif;
        }

        /*--------------------------------------------------------------
# Back to top button
--------------------------------------------------------------*/
        .back-to-top {
            position: fixed;
            visibility: hidden;
            opacity: 0;
            right: 15px;
            bottom: 15px;
            z-index: 996;
            background: #ff4a17;
            width: 40px;
            height: 40px;
            border-radius: 4px;
            transition: all 0.4s;
        }

        .back-to-top i {
            font-size: 24px;
            color: #fff;
            line-height: 0;
        }

        .back-to-top:hover {
            background: #ff6a40;
            color: #fff;
        }

        .back-to-top.active {
            visibility: visible;
            opacity: 1;
        }

        /*--------------------------------------------------------------
# Preloader
--------------------------------------------------------------*/
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 9999;
            overflow: hidden;
            background: #fff;
        }

        #preloader:before {
            content: "";
            position: fixed;
            top: calc(50% - 30px);
            left: calc(50% - 30px);
            border: 6px solid #ff4a17;
            border-top-color: #ffe9e3;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            -webkit-animation: animate-preloader 1s linear infinite;
            animation: animate-preloader 1s linear infinite;
        }

        @-webkit-keyframes animate-preloader {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes  animate-preloader {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /*--------------------------------------------------------------
# Disable aos animation delay on mobile devices
--------------------------------------------------------------*/
        @media  screen and (max-width: 768px) {
            [data-aos-delay] {
                transition-delay: 0 !important;
            }
        }

        /*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
        .header {
            transition: all 0.5s;
            z-index: 997;
            padding: 30px 0;
        }

        .header.sticked {
            background: rgba(14, 29, 52, 0.9);
            padding: 15px 0;
            box-shadow: 0px 2px 20px rgba(14, 29, 52, 0.1);
        }

        .header .logo img {
            max-height: 60px;
            margin-right: 6px;
        }

        .header .logo h1 {
            font-size: 30px;
            margin: 0;
            font-weight: 700;
            color: #fff;
            font-family: var(--font-primary);
        }

        /*--------------------------------------------------------------
# Desktop Navigation
--------------------------------------------------------------*/
        @media (min-width: 1280px) {
            .navbar {
                padding: 0;
            }

            .navbar ul {
                margin: 0;
                padding: 0;
                display: flex;
                list-style: none;
                align-items: center;
            }

            .navbar li {
                position: relative;
            }

            .navbar a,
            .navbar a:focus {
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 10px 0 10px 30px;
                font-family: var(--font-primary);
                font-size: 16px;
                font-weight: 400;
                color: rgba(255, 255, 255, 0.6);
                white-space: nowrap;
                transition: 0.3s;
            }

            .navbar a i,
            .navbar a:focus i {
                font-size: 12px;
                line-height: 0;
                margin-left: 5px;
            }

            .navbar a:hover,
            .navbar .active,
            .navbar .active:focus,
            .navbar li:hover>a {
                color: #fff;
            }

            .navbar .get-a-quote,
            .navbar .get-a-quote:focus {
                background: var(--color-primary);
                padding: 8px 20px;
                margin-left: 30px;
                border-radius: 4px;
                color: #fff;
            }

            .navbar .get-a-quote:hover,
            .navbar .get-a-quote:focus:hover {
                color: #fff;
                background: #2756ff;
            }

            .navbar .dropdown ul {
                display: block;
                position: absolute;
                left: 14px;
                top: calc(100% + 30px);
                margin: 0;
                padding: 10px 0;
                z-index: 99;
                opacity: 0;
                visibility: hidden;
                background: #fff;
                box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
                transition: 0.3s;
                border-radius: 4px;
            }

            .navbar .dropdown ul li {
                min-width: 200px;
            }

            .navbar .dropdown ul a {
                padding: 10px 20px;
                font-size: 15px;
                text-transform: none;
                font-weight: 400;
                color: var(--color-secondary);
            }

            .navbar .dropdown ul a i {
                font-size: 12px;
            }

            .navbar .dropdown ul a:hover,
            .navbar .dropdown ul .active:hover,
            .navbar .dropdown ul li:hover>a {
                color: var(--color-primary);
            }

            .navbar .dropdown:hover>ul {
                opacity: 1;
                top: 100%;
                visibility: visible;
            }

            .navbar .dropdown .dropdown ul {
                top: 0;
                left: calc(100% - 30px);
                visibility: hidden;
            }

            .navbar .dropdown .dropdown:hover>ul {
                opacity: 1;
                top: 0;
                left: 100%;
                visibility: visible;
            }
        }

        @media (min-width: 1280px) and (max-width: 1366px) {
            .navbar .dropdown .dropdown ul {
                left: -90%;
            }

            .navbar .dropdown .dropdown:hover>ul {
                left: -100%;
            }
        }

        @media (min-width: 1280px) {

            .mobile-nav-show,
            .mobile-nav-hide {
                display: none;
            }
        }

        /*--------------------------------------------------------------
# Mobile Navigation
--------------------------------------------------------------*/
        @media (max-width: 1279px) {
            .navbar {
                position: fixed;
                top: 0;
                right: -100%;
                width: 100%;
                max-width: 400px;
                bottom: 0;
                transition: 0.3s;
                z-index: 9997;
            }

            .navbar ul {
                position: absolute;
                inset: 0;
                padding: 50px 0 10px 0;
                margin: 0;
                background: rgba(14, 29, 52, 0.9);
                overflow-y: auto;
                transition: 0.3s;
                z-index: 9998;
            }

            .navbar a,
            .navbar a:focus {
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 12px 20px;
                font-family: var(--font-primary);
                font-size: 16px;
                font-weight: 500;
                color: rgba(255, 255, 255, 0.7);
                white-space: nowrap;
                transition: 0.3s;
            }

            .navbar a i,
            .navbar a:focus i {
                font-size: 12px;
                line-height: 0;
                margin-left: 5px;
            }

            .navbar a:hover,
            .navbar .active,
            .navbar .active:focus,
            .navbar li:hover>a {
                color: #fff;
            }

            .navbar .get-a-quote,
            .navbar .get-a-quote:focus {
                background: var(--color-primary);
                padding: 8px 20px;
                border-radius: 4px;
                margin: 15px;
                color: #fff;
            }

            .navbar .get-a-quote:hover,
            .navbar .get-a-quote:focus:hover {
                color: #fff;
                background: rgba(13, 66, 255, 0.8);
            }

            .navbar .dropdown ul,
            .navbar .dropdown .dropdown ul {
                position: static;
                display: none;
                padding: 10px 0;
                margin: 10px 20px;
                transition: all 0.5s ease-in-out;
                border: 1px solid #19335c;
            }

            .navbar .dropdown>.dropdown-active,
            .navbar .dropdown .dropdown>.dropdown-active {
                display: block;
            }

            .mobile-nav-show {
                color: #fff;
                font-size: 28px;
                cursor: pointer;
                line-height: 0;
                transition: 0.5s;
                z-index: 9999;
                margin-right: 10px;
            }

            .mobile-nav-hide {
                color: #fff;
                font-size: 32px;
                cursor: pointer;
                line-height: 0;
                transition: 0.5s;
                position: fixed;
                right: 20px;
                top: 20px;
                z-index: 9999;
            }

            .mobile-nav-active {
                overflow: hidden;
            }

            .mobile-nav-active .navbar {
                right: 0;
            }

            .mobile-nav-active .navbar:before {
                content: "";
                position: fixed;
                inset: 0;
                background: rgba(14, 29, 52, 0.8);
                z-index: 9996;
            }
        }


        /*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
        #hero {
            width: 100%;
            height: 70vh;
            background: url("<?php echo e(asset('frontend/img/forex.jpg')); ?>") top center;
            background-size: cover;
            position: relative;
            padding: 0;
        }

        #hero:before {
            content: "";
            background: rgba(13, 20, 26, 0.7);
            position: absolute;
            bottom: 0;
            top: 0;
            left: 0;
            right: 0;
        }

        #hero .hero-container {
            position: absolute;
            bottom: 0;
            top: 0;
            left: 0;
            right: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
        }

        #hero h1 {
            margin: 0 0 10px 0;
            font-size: 48px;
            font-weight: 700;
            line-height: 56px;
            text-transform: uppercase;
            color: #fff;
        }

        #hero h2 {
            color: #eee;
            margin-bottom: 50px;
            font-size: 24px;
        }

        #hero .btn-get-started {
            font-family: "Open Sans", sans-serif;
            text-transform: uppercase;
            font-weight: 500;
            font-size: 14px;
            display: inline-block;
            padding: 10px 35px 10px 35px;
            border-radius: 4px;
            transition: 0.5s;
            color: #fff;
            background: #ff4a17;
            border: 2px solid #ff4a17;
        }

        #hero .btn-get-started:hover {
            border-color: #fff;
            background: rgba(255, 255, 255, 0.1);
        }

        #hero .btn-watch-video {
            font-size: 16px;
            display: inline-block;
            transition: 0.5s;
            margin-left: 25px;
            color: #fff;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        #hero .btn-watch-video i {
            line-height: 0;
            color: #fff;
            font-size: 32px;
            transition: 0.3s;
            margin-right: 8px;
        }

        #hero .btn-watch-video:hover i {
            color: #ff4a17;
        }

        @media (min-width: 1024px) {
            #hero {
                background-attachment: fixed;
            }
        }

        @media (max-width: 768px) {
            #hero h1 {
                font-size: 28px;
                line-height: 36px;
            }

            #hero h2 {
                font-size: 18px;
                line-height: 24px;
                margin-bottom: 30px;
            }
        }
    </style>
</head>

<body style="background-color:#F2F2F5">

    <?php echo $__env->make('frontend.panels.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section id="hero">
        <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
            <h1>Forex Trading</h1>
            <h2>Forex trading, also known as Foreign Exchange, currency trading or FX is a global market for trading one
                currency for another one from a different country. </h2>
            <div class="d-flex">
                <a href="<?php echo e(route('register')); ?>" class="btn-get-started scrollto">Trade Now</a>
            </div>
        </div>
    </section>
    <br><br>
    <div class="container-fluid end-divider">
        <div id="section1" class="container default-wd mobile-padding-top1 bottom-divider">
            <div class="title">
                <h2>
                    <p class="hidden-xs" style="padding-bottom:5px;font-size:20px;text-align:center;font-weight:600;">
                        Why Trade Forex with Bitstocks Trading Limited</p>
                </h2>
            </div>
            <div class="sub-title mobile-subtitle-1 text-center">
            </div>
            <div class="padding-70"></div>
            <div class="row fb-cus-row">
                <div class="col-sm-6 text-content-1 pad-right-30" style="paddding-left:0px;padding-right:30px;">
                    <div class="text-block1">
                        <p style="font-family: 'Helvetica Neue LT Pro',  sans-serif;">The global foreign exchange market
                            is one of the fastest, most liquid and exciting markets. Join thousands of traders who are
                            already trading with Bitstocks Trading Limited, a multi award-winning United Kingdom asset
                            manager & forex broker, offering over 60+ fx pairs in all the major currencies 24 hours a
                            day, 5 days a week. All major currency pairs include the US dollar (USD) as either the base
                            or counter currency. Majors include pairs like the GBP/USD, EUR/USD, and USD/JPY.</p>
                    </div>
                    <div class="text-block2 padding-30">
                        <p style="font-family: font-size:12px; 'Helvetica Neue LT Pro', sans-serif;">Bitstocks Trading
                            Limited offers you consistently tight spreads, starting from as low as 0.0 pips. We’ve
                            partnered with leading banking and non-banking financial institutions to ensure a deep
                            liquidity pool, so that you get the best available market prices and ultra-low latency order
                            execution.</p>
                    </div>
                </div>
                <div class="col-sm-6 text_content-1 padding-left-40" style="padding-left:40px;">
                    <div class="text-block1">
                        <p class="para-cent forex-trade-head-padding"
                            style="font-size:23px!important;font-weight:400!important; font-family: 'Helvetica Neue LT Pro',  sans-serif;">
                            What are the benefits of Forex trading? </p>
                        <div class="inner_text padding-default forex-trade-points-padding">
                            <ul class="width-for-bullet-first-section"
                                style="padding-left: 0px;margin-left:0px!important;">
                                <p></p>
                                <li class="list-item-default forex-trade-points-padding">
                                    <p style="font-family: 'Helvetica Neue LT Pro',  sans-serif;">Trade on spreads from
                                        0.0 pips </p>
                                </li>
                                <li class="list-item-default forex-trade-points-padding">
                                    <p style="font-family: 'Helvetica Neue LT Pro',  sans-serif;">Leverage options up to
                                        30:1</p>
                                </li>
                                <li class="list-item-default forex-trade-points-padding">
                                    <p style="font-family: 'Helvetica Neue LT Pro',  sans-serif;">60+ currency pairs</p>
                                </li>
                                <li class="list-item-default forex-trade-points-padding">
                                    <p style="font-family: 'Helvetica Neue LT Pro',  sans-serif;">The Forex markets are
                                        open 24 hours a day, 5 days a week</p>
                                </li>
                                <li class="list-item-default forex-trade-points-padding">
                                    <p style="font-family: 'Helvetica Neue LT Pro',  sans-serif;">Award-winning
                                        multilingual customer support</p>
                                </li>
                                <li class="list-item-default forex-trade-points-padding">
                                    <p style="font-family: 'Helvetica Neue LT Pro',  sans-serif;">No price manipulation,
                                        no requotes and no dealing desk</p>
                                </li>
                                <li class="list-item-default forex-trade-points-padding">
                                    <p style="font-family: 'Helvetica Neue LT Pro',  sans-serif;">Benefit from low
                                        margin, low-cost trading</p>
                                </li>
                                <li class="list-item-default forex-trade-points-padding">
                                    <p style="font-family: 'Helvetica Neue LT Pro',  sans-serif;">High speed trade
                                        execution from Equinix servers</p>
                                </li>
                                <li class="list-item-default forex-trade-points-padding">
                                    <p style="font-family: 'Helvetica Neue LT Pro',  sans-serif;">Enter and exit trades
                                        whenever you want to, 24/5</p>
                                </li>
                                <li class="list-item-default forex-trade-points-padding">
                                    <p style="font-family: 'Helvetica Neue LT Pro',  sans-serif;">Trade in any direction
                                        you think the markets will go, short or long, maximising trading opportunities.
                                    </p>
                                </li>
                                <li class="list-item-default forex-trade-points-padding">
                                    <p style="font-family: 'Helvetica Neue LT Pro',  sans-serif;">Get access to pre-open
                                        price action and gauge market direction with cutting-edge tools.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="padding-50 mobile-padding-none"></div>
    <div class="container-fluid c5">
        <div id="six-reason-section" class="container default-wd">
            <div class="title mobile-title-3">
                <h2>
                    <p class="hidden-xs" style="color:#ffffff!important;padding-bottom: 10px; font-size:25px;">6 Reasons
                        to Choose Bitstocks Trading Limited</p>
                </h2>
            </div>
            <div class="row fb-cus-row hidden-xs">
                <div class="col-sm-4 mobile-sm4 gr1">
                    <div class="image-section gr1" style="padding-bottom: 10px;text-align:center">
                        <span class="section_image_wrap ">
                            <img src="<?php echo e(asset('frontend/img/section%203-6-min.png')); ?>" alt="" title="" class="cus-mob-img-1"
                                data-lazy-src="<?php echo e(asset('frontend/img/section 3-6-min.png')); ?>"><noscript><img src="<?php echo e(asset('frontend/img/section%203-6-min.png')); ?>"
                                    alt="" title="" class="cus-mob-img-1"></noscript>
                        </span>
                    </div>
                    <span class="metals-reasons gr1">
                        <p
                            style="font-weight: 700;text-align:center;color:#ffffff!important;font-family: 'Helvetica Neue BD Pro',  sans-serif !important;">
                            Globally Regulated</p>
                        <p style="font-size: 17px;color:#ffffff!important;text-align:center">Segregated client funds
                            <br>& regulation in United Kingdom</p>
                    </span>
                </div>
                <div class="col-sm-4 mobile-sm4 gr2 ">
                    <div class="image-section gr2" style="padding-bottom: 10px;text-align:center;padding-top: 33px;">
                        <span class="section_image_wrap ">
                            <img src="<?php echo e(asset('frontend/img/section%203-5-min.png')); ?>" alt="" title="" class="cus-mob-img-2"
                                data-lazy-src="<?php echo e(asset('frontend/img/section 3-5-min.png')); ?>"><noscript><img src="<?php echo e(asset('frontend/img/section%203-5-min.png')); ?>"
                                    alt="" title="" class="cus-mob-img-2"></noscript>
                        </span>
                    </div>
                    <span class="metals-reasons gr2">
                        <p
                            style="font-weight: 700;text-align:center;color:#ffffff!important;font-family: 'Helvetica Neue BD Pro',  sans-serif !important;">
                            Tighter Spreads Market</p>
                        <p
                            style="font-size: 17px;padding-left: 16px;padding-right: 12px;color:#ffffff!important;text-align:center;">
                            leading spreads from <br>0.0 pips, 24/5<p>
                    </span>
                </div>
                <div class="col-sm-4 mobile-sm4 gr3" style="min-height:290px;">
                    <div class="image-section gr3" style="padding-bottom: 10px;text-align:center;padding-top: 16px;">
                        <span class="section_image_wrap ">
                            <img src="<?php echo e(asset('frontend/img/section%203-4-min.png')); ?>" alt="" title="" class="cus-mob-img-3"
                                data-lazy-src="<?php echo e(asset('frontend/img/section 3-4-min.png')); ?>"><noscript><img src="<?php echo e(asset('frontend/img/section%203-4-min.png')); ?>"
                                    alt="" title="" class="cus-mob-img-3"></noscript>
                        </span>
                    </div>
                    <span class="metals-reasons gr3">
                        <p
                            style="font-weight: 700;text-align:center;color:#ffffff!important;font-family: 'Helvetica Neue BD Pro',  sans-serif !important;">
                            Faster Execution</p>
                        <p style="font-size: 17px;padding-left: 20px;text-align:center;color:#ffffff!important;">Low
                            latency<br>execution under 40ms*<p>
                    </span>
                </div>
                <div class="col-sm-4 mobile-sm4 gr4 ">
                    <div class="image-section gr4" style="padding-bottom: 10px;text-align:center">
                        <span class="section_image_wrap ">
                            <img src="<?php echo e(asset('frontend/img/section%203-3-min.png')); ?>" alt="" title="" class="cus-mob-img-4"
                                data-lazy-src="<?php echo e(asset('frontend/img/section 3-3-min.png')); ?>"><noscript><img src="<?php echo e(asset('frontend/img/section%203-3-min.png')); ?>"
                                    alt="" title="" class="cus-mob-img-4"></noscript>
                        </span>
                    </div>
                    <span class="metals-reasons gr4">
                        <p
                            style="font-weight: 700;text-align:center;color:#ffffff!important;font-family: 'Helvetica Neue BD Pro',  sans-serif !important;">
                            Advanced Platforms</p>
                        <p style="font-size: 17px;color:#ffffff!important;text-align:center;">MT4, MT5 & WebTrader
                            with<br> superior client portal</p>
                    </span>
                </div>
                <div class="col-sm-4 mobile-sm4 gr5 ">
                    <div class="image-section gr5" style="padding-bottom: 10px;text-align:center">
                        <span class="section_image_wrap ">
                            <img src="<?php echo e(asset('frontend/img/section%203-2-min.png')); ?>" alt="" title="" class="cus-mob-img-5"
                                data-lazy-src="<?php echo e(asset('frontend/img/section 3-2-min.png')); ?>"><noscript><img src="<?php echo e(asset('frontend/img/section%203-2-min.png')); ?>"
                                    alt="" title="" class="cus-mob-img-5"></noscript>
                        </span>
                    </div>
                    <span class="metals-reasons gr5">
                        <p
                            style="font-weight: 700;text-align:center;color:#ffffff!important;font-family: 'Helvetica Neue BD Pro',  sans-serif !important;">
                            24/5 Multilingual <br>Customer Support</p>
                        <p
                            style="font-size: 17px;padding-left: 16px;padding-right: 12px;color:#ffffff!important;text-align:center;">
                            Award-winning support & <br>personal account managers<p>
                    </span>
                </div>
                <div class="col-sm-4 mobile-sm4 gr6 ">
                    <div class="image-section gr6" style="padding-bottom: 10px;text-align:center">
                        <span class="section_image_wrap ">
                            <img src="<?php echo e(asset('frontend/img/section%203-min.png')); ?>" alt="" title="" class="cus-mob-img-6"
                                data-lazy-src="<?php echo e(asset('frontend/img/section 3-min.png')); ?>"><noscript><img src="<?php echo e(asset('frontend/img/section%203-min.png')); ?>"
                                    alt="" title="" class="cus-mob-img-6"></noscript>
                        </span>
                    </div>
                    <span class="metals-reasons gr6">
                        <p
                            style="font-weight: 700;text-align:center;color:#ffffff!important;font-family: 'Helvetica Neue BD Pro',  sans-serif !important;">
                            Established in 2005</p>
                        <p style="font-size: 17px;padding-left: 20px;text-align:center;color:#ffffff!important;">15+
                            years <br>trading experience<p>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid c6 bottom-divider">
        <div id="forex-australian-regulated-forex-section" class="container cs-11569-pad-algn-fo-ru">
            <div class="row">
                <div class="col-sm-6">
                    <div class="text-center">
                        <span>
                            <img src="<?php echo e(asset('frontend/img/australian-regulated-broker.png')); ?>" style="width:90%; height:auto;"
                                data-lazy-src="<?php echo e(asset('frontend/img/australian-regulated-broker.png')); ?>" /><noscript><img
                                    src="<?php echo e(asset('frontend/img/australian-regulated-broker.png')); ?>"
                                    style="width:90%; height:auto;" /></noscript>
                        </span>
                    </div>
                </div>
                <div class="col-sm-6 padding-left-30-for-mobile title-pt-35">
                    <div class="title mobile-title-1">
                        <h2>
                            <p class="text-center" id="headdig-textalign-right"
                                style="text-align: left;font-size:32px!important;font-family: 'Helvetica Neue BD Pro',  sans-serif;">
                                Trade Forex with Bitstocks Trading Limited
                            </p>
                        </h2>
                    </div>
                    <div class="text_block pad-for-what-com-sec">
                        <p style="font-family: 'Helvetica Neue LT Pro',  sans-serif;" id="headdig-textalign-right">
                            Access the forex market with a professional forex trading experience by opening a trading
                            account with FP Markets. With advanced charting tools for informed decision-making,
                            fundamental and technical analysis, the support of an experienced team, live streaming of
                            prices and low latency execution.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid c11">
        <div id="cfd-section-table" class="container default-wd">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="title mobile-title-1">
                            <h2>
                                <p class="pad-for-table" style="padding-bottom: 2px;font-size:32px!important;">Forex
                                    Spreads</p>
                            </h2>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <span>
                            <img class="searchbar-image-align"
                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                alt="" title=""
                                data-lazy-src="wp-content/themes/fptheme/image-2020/metals/desktop/search-min.html"><noscript><img
                                    class="searchbar-image-align"
                                    src="wp-content/themes/fptheme/image-2020/metals/desktop/search-min.html" alt=""
                                    title=""></noscript>
                            <input
                                class="form-control bg-style-for-box cs10essearchw cs10visearchsym cs10frsearch cs10brsearch cs-pl-10-serc-box-al"
                                onkeyup="tableFunction()" id="myInput" type="text" placeholder="Search by Symbol"
                                style="width: 75%;border: 1px solid transparent!important;border-image-source: url(wp-content/themes/fptheme/image-2020/metals/desktop/search-2-min.html)!important;border-image-slice: 16!important;border-image-width: 10px!important;">
                        </span>
                    </div>
                </div>
                <script>
                    function tableFunction() {
                        var input, filter, table, tr, td, i, txtValue;
                        input = document.getElementById("myInput");
                        filter = input.value.toUpperCase();
                        table = document.getElementById("tableFunction");
                        tr = table.getElementsByTagName("tr");
                        for (i = 0; i < tr.length; i++) {
                            td = tr[i].getElementsByTagName("td")[0];
                            if (td) {
                                txtValue = td.textContent || td.innerText;
                                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                    tr[i].style.display = "";
                                } else {
                                    tr[i].style.display = "none";
                                }
                            }
                        }
                    }
                </script>
            </div>
            <div class="col-md-12 padding-30">
                <div class="pad-for-table-align">
                    <div class="nctable scroll-bar-for-table height-for-forex-table">
                        <table class="table  forex-table-style" id="tableFunction"
                            style="border: 2px solid transparent;">
                            <tbody>
                                <tr class="active0 first-row-linear-grd">
                                    <th class="tbe-hd first-row-column-linear-grd cs-213-ru-regn-align-font-new-2021-symbol"
                                        style="padding: 15px;background-image: linear-gradient(to right,rgb(9, 30, 86) 18%,#0086A9)!important; "
                                        rowspan="2">Symbol</th>
                                    <th class="tbe-hd" style="padding: 15px;text-align:left!important;" rowspan="2">
                                        Product</th>
                                    <th class="tbe-hd" style="padding: 15px;text-align: right!important;" colspan="2">
                                        Standard A/c</th>
                                    <th class="tbe-hd" style="padding: 15px;" colspan="2">Raw ECN A/c</th>
                                </tr>
                                <tr class="last-row-sect"
                                    style="background-image: linear-gradient(to right,rgb(-140, 134, 171) 55%,#26cc68);">
                                    <th class="tbe-hd" style="padding: 15px;">&nbsp;</th>
                                    <th class="tbe-hd" style="padding: 15px;">Avg</th>
                                    <th class="tbe-hd" style="padding: 15px;">Min</th>
                                    <th class="tbe-hd" style="padding: 15px;">Avg</th>
                                </tr>
                                <tr class="active0">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"><a
                                            target="_blank" href="index.html#"> AUDCAD </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Australian Dollar vs Canadian
                                        Dollar </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 1.9 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 0 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 0.9 </td>
                                </tr>
                                <tr class="active1">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> AUDCHF </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Australian Dollar vs Swiss
                                        Franc </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 2.2 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 0 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 1.1 </td>
                                </tr>
                                <tr class="active0">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> AUDJPY </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Australian Dollar vs Japanese
                                        Yen </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 2.1 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 0 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 1 </td>
                                </tr>
                                <tr class="active1">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> AUDNZD </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Australian Dollar vs New
                                        Zealand Dollar </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 2.9 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 0 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 1.8 </td>
                                </tr>
                                <tr class="active0">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> AUDSGD </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Australian Dollar vs Singapore
                                        Dollar </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 4 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 0 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 2.5 </td>
                                </tr>
                                <tr class="active1">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> AUDUSD </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Australian Dollar vs US Dollar
                                    </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 1.5 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 0 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 0.4 </td>
                                </tr>
                                <tr class="active0">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> CADCHF </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Canadian Dollar vs Swiss Franc
                                    </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 2.5 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 0 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 1.4 </td>
                                </tr>
                                <tr class="active1">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> CADJPY </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Canadian Dollar vs Japanese Yen
                                    </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 2.2 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 0 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 1.1 </td>
                                </tr>
                                <tr class="active0">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> CHFJPY </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Swiss Franc vs Japanese Yen
                                    </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 4 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 0.4 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 2.9 </td>
                                </tr>
                                <tr class="active1">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> CHFSGD </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Swiss Franc vs Singapore Dollar
                                    </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 6.2 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 1.9 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 6.2 </td>
                                </tr>
                                <tr class="active0">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> EURAUD </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Euro vs Australian Dollar </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 2.5 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 0 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 1.4 </td>
                                </tr>
                                <tr class="active1">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> EURCAD </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Euro vs Canadian Dollar </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 2.9 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 0 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 1.3 </td>
                                </tr>
                                <tr class="active0">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> EURCHF </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Euro vs Swiss Franc </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 2.3 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 0 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 1.2 </td>
                                </tr>
                                <tr class="active1">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> EURCZK </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Euro vs Czech Koruna </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 159.3 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 39.3 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 141.9 </td>
                                </tr>
                                <tr class="active0">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> EURDKK </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Euro vs Danish Krone </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 17.9 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 9.5 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 11.9 </td>
                                </tr>
                                <tr class="active1">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> EURGBP </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Euro vs Great Britain Pound
                                    </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 1.7 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 0 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 0.6 </td>
                                </tr>
                                <tr class="active0">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> EURHUF </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Euro vs Hungarian Forint </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 261.1 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 10.2 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 47.5 </td>
                                </tr>
                                <tr class="active1">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> EURJPY </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Euro vs Japanese Yen </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 2 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 0.1 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 0.9 </td>
                                </tr>
                                <tr class="active0">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> EURMXN </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Euro vs Mexican Peso </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 99.4 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 15.3 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 79.4 </td>
                                </tr>
                                <tr class="active1">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> EURNOK </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Euro vs Norwegian Krone </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 98.2 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 21.1 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 90.7 </td>
                                </tr>
                                <tr class="active0">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> EURNZD </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Euro vs New Zealand Dollar
                                    </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 3.6 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 0.2 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 2.5 </td>
                                </tr>
                                <tr class="active1">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> EURPLN </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Euro vs Polish Zloty </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 46.9 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 8 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 43.6 </td>
                                </tr>
                                <tr class="active0">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> EURSEK </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Euro vs Swedish Krona </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 80.3 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 20.5 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 74.8 </td>
                                </tr>
                                <tr class="active1">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> EURSGD </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Euro vs Singapore Dollar </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 4.2 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 0.5 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 3.1 </td>
                                </tr>
                                <tr class="active0">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> EURTRY </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Euro vs Turkish Lira </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 783.9 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 117.2 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 780.8 </td>
                                </tr>
                                <tr class="active1">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> EURUSD </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Euro vs US Dollar </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 1.3 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 0 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 0.2 </td>
                                </tr>
                                <tr class="active0">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> EURZAR </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Euro vs South African Rand
                                    </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 189.6 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 44.9 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 178.1 </td>
                                </tr>
                                <tr class="active1">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> GBPAUD </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Great Britain Pound vs
                                        Australian Dollar </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 3 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 0 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 1.9 </td>
                                </tr>
                                <tr class="active0">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> GBPCAD </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Great Britain Pound vs Canadian
                                        Dollar </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 3.1 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 0 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 2 </td>
                                </tr>
                                <tr class="active1">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> GBPCHF </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Great Britain Pound vs Swiss
                                        Franc </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 3.2 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 0.3 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 2.1 </td>
                                </tr>
                                <tr class="active0">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> GBPDKK </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Great Britain Pound vs Danish
                                        Krone </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 32.9 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 11.5 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 26.9 </td>
                                </tr>
                                <tr class="active1">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> GBPJPY </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Great Britain Pound vs Japanese
                                        Yen </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 2.9 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 0.1 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 1.8 </td>
                                </tr>
                                <tr class="active0">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> GBPMXN </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Great Britain Pound vs Mexican
                                        Peso </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 145.7 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 30.1 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 125.7 </td>
                                </tr>
                                <tr class="active1">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> GBPNZD </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Great Britain Pound vs New
                                        Zealand Dollar </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 4.8 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 0.2 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 3.3 </td>
                                </tr>
                                <tr class="active0">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> GBPPLN </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Great Britain Pound vs Polish
                                        Zloty </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 69.3 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 19.9 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 67.8 </td>
                                </tr>
                                <tr class="active1">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> GBPSEK </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Great Britain Pound vs Swedish
                                        Krona </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 132.3 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 54.7 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 127.6 </td>
                                </tr>
                                <tr class="active0">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> GBPSGD </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Great Britain Pound vs
                                        Singapore Dollar </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 5.8 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 1 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 4.6 </td>
                                </tr>
                                <tr class="active1">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> GBPTRY </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Great Britain Pound vs Turkish
                                        Lira </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 957.8 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 140.7 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 950.8 </td>
                                </tr>
                                <tr class="active0">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> GBPUSD </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Great Britain Pound vs US
                                        Dollar </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 2.2 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 0 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 1.1 </td>
                                </tr>
                                <tr class="active1">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> NZDCAD </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> New Zealand Dollar vs Canadian
                                        Dollar </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 2.8 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 0 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 1.7 </td>
                                </tr>
                                <tr class="active0">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> NZDCHF </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> New Zealand Dollar vs Swiss
                                        Franc </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 2.7 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 0 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 1.6 </td>
                                </tr>
                                <tr class="active1">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> NZDJPY </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> New Zealand Dollar vs Japanese
                                        Yen </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 2.9 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 0 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 1.8 </td>
                                </tr>
                                <tr class="active0">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> NZDSGD </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> New Zealand Dollar vs Singapore
                                        Dollar </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 4.2 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 0.7 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 3.1 </td>
                                </tr>
                                <tr class="active1">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> NZDUSD </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> New Zealand Dollar vs US Dollar
                                    </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 2.2 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 0 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 1 </td>
                                </tr>
                                <tr class="active1">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> USDBRL </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> US Dollar vs Brazilian Real
                                    </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 51.22 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 19.12 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 41.22 </td>
                                </tr>
                                <tr class="active0">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> USDCAD </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> US Dollar vs Canadian Dollar
                                    </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 1.9 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 0 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 0.8 </td>
                                </tr>
                                <tr class="active1">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> USDCHF </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> US Dollar vs Swiss Franc </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 2.7 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 0 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 1.5 </td>
                                </tr>
                                <tr class="active0">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> USDCNH </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> US Dollar vs Chinese Yuan </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 2.6 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 0 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 1.5 </td>
                                </tr>
                                <tr class="active1">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> USDCZK </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> US Dollar vs Czech Koruna </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 132.3 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 29.1 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 114.9 </td>
                                </tr>
                                <tr class="active0">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> USDDKK </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> US Dollar vs Danish Krone </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 16.7 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 2.4 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 10.7 </td>
                                </tr>
                                <tr class="active1">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> USDHKD </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> US Dollar vs Hong Kong Dollar
                                    </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 6.4 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 2.3 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 5.3 </td>
                                </tr>
                                <tr class="active0">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> USDHUF </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> US Dollar vs Hungarian Forint
                                    </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 261.3 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 9.5 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 47.7 </td>
                                </tr>
                                <tr class="active1">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> USDINR </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> US Dollar vs Indian Rupee </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 33 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 11.4 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 13 </td>
                                </tr>
                                <tr class="active0">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> USDJPY </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> US Dollar vs Japanese Yen </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 1.5 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 0 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 0.4 </td>
                                </tr>
                                <tr class="active1">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> USDKRW </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> US Dollar vs Korean Won </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 115.5 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 47 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 85.5 </td>
                                </tr>
                                <tr class="active0">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> USDMXN </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> US Dollar vs Mexican Peso </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 61.7 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 3.6 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 51.7 </td>
                                </tr>
                                <tr class="active1">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> USDNOK </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> US Dollar vs Norwegian Krone
                                    </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 109.3 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 23.5 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 100.8 </td>
                                </tr>
                                <tr class="active0">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> USDPLN </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> US Dollar vs Polish Zloty </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 43.2 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 8.2 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 39.5 </td>
                                </tr>
                                <tr class="active1">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> USDSEK </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> US Dollar vs Swedish Krona
                                    </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 88 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 20.9 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 79.3 </td>
                                </tr>
                                <tr class="active0">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> USDSGD </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> US Dollar vs Singapore Dollar
                                    </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 3.1 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 0.1 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 2 </td>
                                </tr>
                                <tr class="active1">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> USDTHB </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> US Dollar vs Thai Baht </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 287.6 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 171.9 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 267.6 </td>
                                </tr>
                                <tr class="active0">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> USDTRY </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> US Dollar vs Turkish Lira </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 421.4 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 36.4 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 418.9 </td>
                                </tr>
                                <tr class="active1">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> USDZAR </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> US Dollar vs South African Rand
                                    </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 111.4 </td>
                                    <td class="tbe-blue" style="padding: 5px;"> 13.4 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 98.5 </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .row>div.visible-xs.fp-font.no-uppercase.color-white {
            padding-top: 70px !important;
        }

        .col-sm-6.mobile-title-2 h3 {
            font-size: 30px !important;
            font-weight: 700 !important;
            padding-left: 19px !important;
            padding-right: 16px !important;
            text-align: center !important;
        }

        .mobile-title-3 h3 {
            font-weight: 700 !important;
            padding-left: 8px;
            font-size: 28px;
        }

        p.padding-10.mobile-title-3 {
            font-size: 20px !important;
            text-align: center;
        }

        .right-divider-1 {
            position: unset;
            background: none
        }

        .right-divider-2 {
            position: unset;
            background: none
        }

        .full-width-divider {
            display: none;
        }

        .mobile_image_wrap {
            display: none;
        }

        .col-sm-6.mobile-title-2 p {
            text-align: center !important;
            font-size: 24px !important;
            padding-left: 52px !important;
            padding-right: 48px !important;
        }

        .first-row-linear-grd {
            background-image: linear-gradient(to right, rgb(-140, 134, 171) 55%, #26cc68);
        }

        .mobile-divider {
            display: none;
        }

        .sub-title p {
            text-align: center;
        }

        .au-mt4 {
            font-size: 18.5px;
            line-height: 28px;
            text-align: left;
            color: #2e3642 !important;
        }

        .image-effect-top {
            position: absolute;
            left: 483px;
            top: -196px;
            width: 100%;
        }

        .image-effect-bottom {
            position: absolute;
            left: 485px;
            top: 337px;
            width: 100%;
        }

        p.text-7 {
            font-weight: bold;
            font-size: 26px !important;
            line-height: 36px !important;
            color: #3e495c !important;
            text-align: center;
        }

        .section7_text_box {
            text-align: center;
            font-size: 17px;
        }

        .full-width-divider {
            width: 100%;
            height: 1px;
            border-top: 1px solid rgba(0, 0, 0, .1);
            position: absolute;
            left: 0;
            top: 0;
            z-index: 10;
            border-top-color: #c4c4c4;
        }

        .inner-section-6 {
            top: 20px;
            left: 60px;
        }

        .image-for-autochartist-mobile {
            display: none;
        }



        .mobile-full-width-divider {
            display: none !important;
        }


        .mob-active-link {
            font-weight: 700;
        }


        @media  only screen and (max-width: 600px) {
            .arrow-blue-alignments {
                margin-right: 20px !important;
                margin-top: -211px;
            }

            .arrow_blue {
                padding-left: 20px !Important;
                padding-right: 35px !Important;
            }

            .arrow_blue:after,
            .arrow_blue:before {
                left: -30% !important;

            }
        }

        span.mobile_image_wrap {
            position: absolute;
            top: -76px;
        }



        .row.fb-cus-row {

            max-width: 1080px;
            margin: auto;
            position: relative;
            top: 10px;
        }

        .sub-title.mobile-subtitle-1 p {
            font-size: 17px;
        }

        .title p {
            font-family: 'Helvetica Neue BD Pro', sans-serif;
            font-size: 30px !important;
            line-height: 40px !important;
            color: #0b121c !important;
            text-align: center;
            padding-bottom: 24px;
            font-weight: 800;
        }

        .text-block1 p {
            font-size: 17.5px;
        }

        div#section1 {
            padding-top: 32px;
            padding-bottom: 70px;
        }

        div#section4 {
            padding-top: 32px;
            padding-bottom: 100px;
        }

        .section7_text_box p {
            padding-right: 16px;
            padding-left: 24px;
        }

        .padding-default {
            padding-top: 20px;
        }

        .padding-10 {
            padding-top: 10px;
        }

        .padding-30 {
            padding-top: 30px;
        }

        .padding-50 {
            padding-top: 50px;
        }

        .padding-70 {
            padding-top: 70px;
        }

        .padding-top-60 {
            padding-top: 60px;
        }

        .left-padding-1 {
            padding-left: 90px;
        }

        .left-padding-2 {
            padding-left: 50px;
        }

        .mobile_image_wrap {
            display: none;
        }

        .image-effect-top {
            display: none;
        }

        .image-effect-bottom {
            display: none;
        }

        .inner-section-6 {
            left: 0px;
        }

        .row>.col-md-12>nav {
            display: block !important;
            padding-left: 10px;
            padding-right: 10px;

        }

        .row>div.visible-xs.fp-font.no-uppercase.color-white {
            padding-top: 70px !important;
            margin-top: 35px;
        }

        .padding-30 {
            padding-top: 20px !important;
        }

        .pad-for-table {
            padding-left: 0px !important;
            padding-right: 0px !important;
        }

        .scroll-bar-for-table {
            overflow-x: auto;
            white-space: nowrap;

        }

        .scroll-bar-for-table::-webkit-scrollbar {
            width: 369px;
            height: 10px;


        }

        .scroll-bar-for-table::-webkit-scrollbar-track {
            border-radius: 10px;

            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0);
        }

        .scroll-bar-for-table::-webkit-scrollbar-thumb {
            border-radius: 10px;
            background-color: #00BFFF;
            outline: 2px solid #00BFFF;

        }

        .scroll-bar-for-table::-webkit-scrollbar:vertical {
            display: none;

        }

        .bg-style-for-box {
            margin: 0 auto;
            margin-top: 20px;
            float: none !important;
            text-align: left !important;
            width: 55% !important;
        }

        .col-sm-4.mobile-sm4 {
            width: 50%;
            max-width: 100%;
            float: left;
            margin: 0px;
            padding: 0px;
        }

        .dis-blo {
            display: block !important;
            margin-top: 25px;
        }

        .para-for-list {
            font-size: 22px !important;
            margin-top: 15px;
            margin-bottom: -40px;
        }

        .pad-top-50 {
            padding-top: 0px !important;
        }

        .pad-top-20-imp-for-mob {
            padding-top: 20px !important;
        }

        .padding-left-40 {
            padding-left: 25px !important;
        }

        .para-cent {
            text-align: center !important;
            padding-top: 30px;
            padding-bottom: 10px;
        }

        .pad-align-what-sec {
            padding-left: 0px !important;
        }

        .title p {
            font-size: 50px !important;
            line-height: 50px !important;
        }

        .padding-default.mobile-padding-none {
            padding-top: 0px;
        }

        .col-sm-4.mobile-sm4-1 {
            padding-top: 0px !important;
        }

        .inner_text.padding-30.mobile-text-4 {
            padding-left: 54px !important;
            padding-right: 30px !important;
        }

        .title.mobile-title-3 p {
            font-size: 38px !important;
            text-align: center;
        }

        .padding-70.mobile-padding-section-5 {
            display: none;
        }

        .left-padding-1 {
            padding-left: 25px !important;
        }

        .left-padding-2 {
            padding-left: 25px !important;
        }

        .padding-70.mobile-padding-none {
            padding-top: 0px;
        }

        .padding-50.mobile-padding-none {
            padding-top: 0px;
        }

        .section7_text_box p {
            padding-right: 8px;
            padding-left: 12px;
        }

        .final-content {
            padding-left: 11px !important;
            padding-right: 16px !important;
        }

        .final-content p {
            font-size: 14px !important;
        }

        }

        @media  only screen and (device-width : 375px) and (device-height : 812px) and (-webkit-device-pixel-ratio : 3) {
            .arrow-blue-alignments {
                margin-top: -185px;
            }
        }

        }
        }

        .table tr {
            border-bottom: none !important;
            border-right: none !important;
            border-top: none !important;
        }

        .first-row-column-linear-grd {
            background-image: linear-gradient(to right, rgb(9, 30, 86) 18%, #0086A9);
        }

        .forex-table-style {
            background: linear-gradient(white, white), linear-gradient(to bottom, #fff 6%, #00BDFF 90%, #26cc68);
            background-clip: padding-box, border-box;
            background-origin: padding-box, border-box;
            border: 1px solid transparent !important;
            border-left: 1px solid transparent !important;
            border-radius: 0px 10px 20px 20px;
            border-collapse: collapse;
            overflow: hidden;
            position: inherit;
            border-left: 1px solid transparent !important;
            border-right: 1px solid transparent !important;
        }

        table tr th {
            background: none !important;
            border-left: none !important;
        }

        .table>tbody>tr>th {
            border-top: none !important;
            line-height: .2 !important;
            vertical-align: inherit !important;
        }

        .table>tbody>tr>td {
            border-top: none !important;
        }

        table tr td {
            border-left: none !important;
        }

        table tr td,
        table tr th {
            min-width: 143px !important;
        }

        .tbe-hd {
            font-family: 'Helvetica Neue BD Pro', sans-serif;
            font-size: 18.5px !important;
            font-weight: 600 !important;
            font-stretch: normal !important;
            font-style: normal !important;
            line-height: 1 !important;
            letter-spacing: normal !important;
            text-align: center !important;
            color: #fff !important;
        }

        .tbe-con {
            font-size: 18.5px !important;
            font-weight: 300 !important;
            font-stretch: normal !important;
            font-style: normal !important;
            line-height: 2.7 !important;
            letter-spacing: normal !important;
            text-align: center !important;
            color: #3e495c !important;
        }

        .active1 {
            background-color: #f5f6f7;
        }

        .active0 {
            background-color: #ffffff !important;
        }

        .nctable table {
            background: linear-gradient(white, white), linear-gradient(to bottom right, #fff 4%, rgba(0, 189, 255, .48), #26CC68);
            background-clip: padding-box, border-box;
            background-origin: padding-box, border-box;
            border: 1px solid transparent !important;
            border-left: 1px solid transparent !important;
            border-radius: 0px 10px 20px 20px;
            border-collapse: collapse;
            overflow: hidden;
            position: inherit;
            border-left: 1px solid transparent !important;
            border-right: 1px solid transparent !important;
        }

        b {
            font-weight: 600 !important;
            color: #00BEFF;
        }

        .pad-for-six-reason-sec {
            margin-bottom: -30px;
            padding-bottom: 0px !important;
        }

        body img {
            max-width: none !important;
        }

        #padding-options-section {
            padding-top: 40px;
            padding-bottom: 65px !important;
        }

        #what-trade-section {
            padding-top: 0px;
            padding-bottom: 60px !important;
        }

        .text-cent {
            text-align: center !important;
        }

        .container.default-wd.mobile-padding-top1 {
            padding-top: 40px !important;
        }

        .margin-image-top {
            margin-top: -20px !important;
        }

        .pad-for-what-com-sec {
            padding-right: 15px;
            padding-left: 30px;
        }

        .padding-for-an-example-sec {
            padding-right: 20px;
            padding-left: 20px;
            padding-bottom: 40px;
        }

        .an-example-sec-para {

            font-size: 30px !important;
            text-align: center !important;
            padding-bottom: 15px !important;

        }

        #an-example-section {
            padding-top: 30px !important;
            padding-bottom: 0px !important;
        }

        .padding-left-60 {
            padding-left: 15px !important;
        }

        .mob-img {
            max-width: 100% !important;
        }

        .bg-align-desktop {
            padding-left: 25px !important;
            padding-right: 25px !important;
        }

        #red-green-section {
            padding-top: 32px;
            padding-bottom: 50px;
            padding-left: 20px !important;
            padding-right: 20px !important
        }

        .pading-top-for-red-green {
            padding-top: 20px !important;
        }

        .padding-for-mobile-para-section {
            padding-top: 0px !important;
            padding-bottom: 40px;
            padding-right: 20px;
            padding-left: 20px;
        }

        .end-divider {
            background-size: auto !important;

        }

        #normal-table-section {
            padding-top: 30px;
            padding-bottom: 45px !important;
        }

        .bg-align-desktop {
            padding-bottom: 30px !important;
        }

        #cfd-section-table {
            padding-top: 60px !important;
            padding-bottom: 65px !important;
        }


        .scroll-bar-for-table {
            overflow-x: auto;
            white-space: nowrap;

        }

        .scroll-bar-for-table::-webkit-scrollbar {
            width: 369px;
            height: 10px;


        }

        .scroll-bar-for-table::-webkit-scrollbar-track {
            border-radius: 10px;

            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0);
        }

        .scroll-bar-for-table::-webkit-scrollbar-thumb {
            border-radius: 10px;
            background-color: #00BFFF;
            outline: 2px solid #00BFFF;

        }

        .scroll-bar-for-table::-webkit-scrollbar:vertical {
            display: none;

        }

        .bg-style-for-box {
            margin: 0 auto;
            margin-top: 20px;
            float: none !important;
            text-align: left !important;
            width: 55% !important;
        }

        .padding-30 {
            padding-top: 20px !important;
        }

        .pad-for-table {
            padding-left: 0px !important;
            padding-right: 0px !important;
        }

        #start-trading-forex-section {
            padding-top: 80px;
            padding-bottom: 85px;
        }

        #forex-australian-regulated-forex-section {
            padding-top: 90px;
            padding-bottom: 15px;
        }

        #red-green-section {
            padding-top: 32px;
            padding-bottom: 100px;
        }

        .layer {
            background-color: rgba(0, 0, 0, 0) !Important;
        }

        #best-platform-section {
            padding-top: 30px;
            padding-bottom: 55px;
        }

        #padding-options-section {
            padding-top: 50px;
            padding-bottom: 40px;
        }

        .platform-para {
            font-size: 23px !important;
            font-weight: 300 !important;
            letter-spacing: 0;
            line-height: 28px;
            text-align: center !important;
        }

        #six-reason-section {
            padding-top: 85px;
            padding-bottom: 100px;
        }

        #what-trade-section {
            padding-top: 105px;
            padding-bottom: 95px;
        }

        .pad-align-what-sec {
            padding-left: 60px;
        }

        #an-example-section {
            padding-top: 95px;
            padding-bottom: 30px;
        }

        .pad-for-forex-example {
            padding-top: 20px;
        }

        #going-strat-section {
            padding-bottom: 0px;
            padding-top: 0px;
        }

        #normal-table-section {
            padding-top: 65px;
            padding-bottom: 85px;
        }

        #cfd-section-table {
            padding-top: 85px;
            padding-bottom: 70px;
        }

        .c5 {
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 50%;
            background-image: url(<?php echo e(asset('frontend/img/reasons.jpg')); ?>);
        }

        .col-sm-6.text-content-1 {
            padding-left: 20px;
        }

        .col-sm-4 p {
            padding-left: 12px !important;
        }

        .title.mobile-title-1 p {
            padding-bottom: 2px;
            padding-left: 38px;
            padding-right: 34px;
            font-size: 32px !important;
            padding-top: 20px;
            line-height: 36px !important;
        }
    </style>
    <style>
        .footers {
            font-size: 14px;
            background-color: var(--color-secondary);
            padding: 50px 0;
            color: white;
        }

        .footers a {
            color: #f5f5f5;
        }

        .footers a:hover {
            color: #e3612d;
        }

        .footers p {
            color: #f5f5f5;
        }

        .footers ul {
            line-height: 30px;
        }

        .footers h5 {
            color: #fff;
            font-family: "Raleway", sans-serif;
            font-size: 20px;
            font-weight: 500;
            line-height: 26px;
        }

        .footers .bg-dark {
            background-color: #010c2b;
        }

        #social-fb:hover {
            color: #3B5998;
            transition: all .001s;
        }

        #social-tw:hover {
            color: #4099FF;
            transition: all .001s;
        }

        #social-gp:hover {
            color: #d34836;
            transition: all .001s;
        }

        #social-em:hover {
            color: #f39c12;
            transition: all .001s;
        }

        #social-yb:hover {
            color: #f50a0a;
            transition: all .001s;
        }

        #social-tm:hover {
            color: #02103b;
            transition: all .001s;
        }

        hr {
            width: 50%;
            margin: 0;
            border: none;
        }

        .disc {
            font-size: 12px;
            line-height: 20px;
            color: #fff;
        }

        ul#footermenu li {
            display: inline;
            float: left;
        }

        .footer {
            padding: 10px 0;
        }

        .footer .copyright {
            margin: 0;
        }

        .footer .footer-social-links {
            text-align: right;
        }

        .footer .footer-social-links a {
            display: inline-block;
            padding: 0 6px;
            color: #fff;
        }

        .footer .footer-social-links a:hover {
            color: #e3612d;
        }

        .bg-dark a {
            color: #aaa;
        }

        .font-alt {
            font-family: "Raleway", sans-serif;
            color: #fff;
        }
    </style>

       <?php echo $__env->make('frontend.panels.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script src="<?php echo e(asset('frontend/vendor/vendor/purecounter/purecounter.html')); ?>"></script>
    <script src="<?php echo e(asset('frontend/vendor/vendor/aos/aos.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/vendor/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/vendor/vendor/glightbox/js/glightbox.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/vendor/vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/vendor/vendor/swiper/swiper-bundle.min.js')); ?>"></script>

    <script src="<?php echo e(asset('frontend/vendor/vendor/main.js')); ?>"></script>
</body>


</html>
<?php /**PATH S:\jobs\bitstocks_trading\resources\views/frontend/forex.blade.php ENDPATH**/ ?>