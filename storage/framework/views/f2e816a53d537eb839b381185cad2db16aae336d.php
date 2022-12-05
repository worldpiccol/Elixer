<!Doctype html>
<html>


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Bitstocks Trading Limited | Cryptocurrency Trading</title>
    <meta name="description"
        content="Bitstocks Trading Limited is a global leader in online trading and investing, providing thousands of clients worldwide with access to forex, contracts for difference (CFDs), stockbroking and bonds markets via award-winning platforms.">
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
        <style>

        /*--------------------------------------------------------------
# General
--------------------------------------------------------------*/
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
            max-height: 40px;
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
    </style>
</head>

<body style="background-color:#F2F2F5">

     <?php echo $__env->make('frontend.panels.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script src="../code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $('.hotdog').click(function () {
                $(this).toggleClass('menu-is-open');
                $('div.cover').toggleClass('hide');
                $('header nav.main').toggleClass('menu-is-open');
            });
            $('ul#menu-main-menu li.menu-item a').click(function () {
                $(this).next().toggleClass('blk');
            });
            $('div.cover').click(function () {
                $('.hotdog').toggleClass('menu-is-open');
                $('div.cover').toggleClass('hide');
                $('header nav.main').toggleClass('menu-is-open');
            });
        });
    </script>
    <div class="cover hide"></div>
    <style>
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

    <section id="hero">
        <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
            <h1>Trade Cryptocurrencies </h1>
            <h2>Speculate on the rise and fall of the most popular cryptocurrencies <br /> including Bitcoin, Ethereum,
                and Binance Coin .</h2>
            <div class="d-flex">
                <a href="<?php echo e(route('register')); ?>" class="btn-get-started scrollto">Start Trading</a>
            </div>
        </div>
    </section>
    <br><br>
    <div class="container-fluid end-divider">
        <div id="section1" class="container default-wd mobile-padding-top1">
            <div class="title">
                <h2 style="padding-bottom:5px;">Trade Cryptocurrencies with Bitstocks Trading Limited</h2>
            </div>
            <div class="sub-title mobile-subtitle-1 text-center">
            </div>
            <div class="padding-70"></div>
            <div class="row fb-cus-row">
                <div class="col-sm-6 text-content-1" style="paddding-left:0px;padding-right:30px;">
                    <div class="text-block1">
                        <p>Trading cryptocurrency CFDs ("contracts for difference") is a great way to diversify your
                            portfolio and hedge risks. Bitstocks Trading Limited has carved a niche for itself in the
                            Crypto trading market in the United Kingdom, offering the optimal trading experience.</p>
                    </div>
                    <div class="text-block2 padding-30">
                        <p>Choosing from an extensive portfolio of financial products, while benefiting from the latest
                            real-time technology and the leverage available on
                            Crypto pairs BTCUSD, ETHUSD, LTCUSD and BCHUSD is now 1:200 for clients registered with
                            Bitstocks Trading Limited.</p>
                    </div>
                    <div class="text-block3 padding-30">
                        <p> Unlike other asset classes (FX, Equities, Commodities, etc.), the Cryptocurrency market is
                            dominated by retail speculators.
                            With IC Markets Cryptocurrency CFDs, youll trade in a market where there is no central bank
                            intervention, interbank dealers controlling order flow or giant pension funds moving prices.
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 text_content-1 padding-left-40" style="padding-left:40px;">
                    <div class="text-block1">
                        <p class="para-cent trade-commodities-cont-subhead-padding" style="font-size:23px!important;">
                            What are the benefits of crypto trading?</p>
                        <div class="inner_text padding-default trade-commodities-cont-full-div-padding">
                            <ul style="padding-left: 0px;margin-left:0px!important;">
                                <p></p>
                                <li class="list-item-default cs-209-pl-regin-al-level list-item-trade-commodities91">
                                    <p>1:200 Leverage MT4/MT5
                                        1:5 Leverage Trader</p>
                                </li>
                                <div class="padding-15"></div>
                                <li class="list-item-default list-item-trade-commodities91">
                                    <p>Trade the market 7 days a week</p>
                                </li>
                                <div class="padding-15"></div>
                                <li class="list-item-default list-item-trade-commodities91">
                                    <p>Enter and exit trades whenever you want to 24/5</p>
                                </li>
                                <div class="padding-15"></div>
                                <li class="list-item-default list-item-trade-commodities91">
                                    <p>Trade in any direction you think the markets will go. Sell and go short or buy to
                                        go long, maximizing trading opportunities and minimizing risks.</p>
                                </li>
                                <div class="padding-15"></div>
                                <li class="list-item-default list-item-trade-commodities91">
                                    <p>No price manipulation and no requotes</p>
                                </li>
                                <div class="padding-15"></div>
                                <li class="list-item-default list-item-trade-commodities91">
                                    <p>Hedge Risks - Hedge your investment risks with high-value assets, like gold
                                        (XAU), silver (XAG), and Oil (WTI / CL) </p>
                                </li>
                                <div class="padding-15"></div>
                                <li class="list-item-default list-item-trade-commodities91">
                                    <p>Benefit from low margin, low-cost trading, without compromising execution</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="padding-50 pad-top-50"></div>
    <div class="padding-50 mobile-padding-none"></div>
    <div class="container-fluid">
        <div id="top-ten-section" class="container default-wd">
            <div class="title">
                <h2>
                    <p class="hidden-xs" style="padding-bottom:5px;">The Top Ten Crypto Pairs to Trade</p>
                </h2>
            </div>
            <div class="padding-30"></div>
            <div class="row fb-cus-row">
                <div class="col-sm-6 text-content-1" style="padding-right:15px;">
                    <div class="text-block1">
                        <p>When you trade cryptocurrencies with IG, you are speculating on whether your chosen market
                            will rise or fall in value, without ever taking ownership of the digital asset. This is done
                            by using derivative products such as CFDs.
                        </p>
                    </div>
                    <div class="text-block2 padding-30">
                        <p>Although the cryptocurrency market is relatively new, it has experienced significant
                            volatility due to huge amounts of short-term speculative interest. For example, between
                            October 2017 and October 2018, the price of bitcoin rose as high as $19,378 and fell to lows
                            of $5851,<br>
                            The volatility of cryptocurrencies is part of what makes this market so exciting. Rapid
                            intraday price movements can provide a range of opportunities to traders to go long and
                            short but also come with increased risk. So, if you decide to explore the cryptocurrency
                            market, make sure that you have done your research and developed a risk management strategy.
                        </p>
                    </div>
                    <div class="text-block3 padding-30">
                        <p>However, when it comes to digital currencies trading, not all currencies are tradable. </p>
                    </div>
                </div>
                <div class="col-sm-6 text_content-1 padding-left-40" style="padding-left:100px;">
                    <div class="text-block1">
                        <p>Some are better than others. With a wide range of currencies on the market, it’s important to
                            know what makes a coin best for trading.</p>
                        <div class="inner_text padding-30">
                            <ul style="padding-left: 0px;margin-left:0px!important;">
                                <p></p>
                                <li class="list-item-default">
                                    <p>Bitcoin CFD</p>
                                </li>
                                <div class="padding-15"></div>
                                <li class="list-item-default">
                                    <p>Ethereum CFD</p>
                                </li>
                                <div class="padding-15"></div>
                                <li class="list-item-default">
                                    <p>Litecoin CFD</p>
                                </li>
                                <div class="padding-15"></div>
                                <li class="list-item-default">
                                    <p>Dash CFD </p>
                                </li>
                                <div class="padding-15"></div>
                                <li class="list-item-default">
                                    <p>Bitcoin Cash CFD</p>
                                </li>
                                <div class="padding-15"></div>
                                <li class="list-item-default">
                                    <p>BitcoinSV CFD</p>
                                </li>
                                <div class="padding-15"></div>
                                <li class="list-item-default">
                                    <p>Ripple CFD</p>
                                </li>
                                <div class="padding-15"></div>
                                <li class="list-item-default">
                                    <p>EOS CFD</p>
                                </li>
                                <div class="padding-15"></div>
                                <li class="list-item-default">
                                    <p>Polkadot CFD </p>
                                </li>
                                <div class="padding-15"></div>
                                <li class="list-item-default">
                                    <p>Dogecoin CFD</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="padding-50 mobile-padding-none"></div>
    <div class="container-fluid c1">
        <div id="good-trading-section" class="container default-wd">
            <div class="row">
                <div class="col-sm-6">
                    <span>
                        <img class="margin-image-top" src="<?php echo e(asset('frontend/img/tradecrypto.png')); ?>" alt="" title=""
                            style="margin-top: 20px;max-width: 100%!important;"
                            data-lazy-src="<?php echo e(asset('frontend/img/tradecrypto.png')); ?>"><noscript><img class="margin-image-top"
                                src="<?php echo e(asset('frontend/img/tradecrypto.png')); ?>" alt="" title=""
                                style="margin-top: 20px;max-width: 100%!important;"></noscript>
                    </span>
                </div>
                <div class="col-sm-6 pad-align-what-sec">
                    <div class="title mobile-title-1">
                        <h2>
                            <p class="text-cent hidden-xs"
                                style="text-align: left;font-size:28px!important;line-height: 1.25!important;">What
                                Makes a Good<br>Trading Digital Currency?</p>
                        </h2>
                    </div>
                    <div class="text_block pad-for-what-com-sec">
                        <p>The market capitalization of all publicly traded cryptos plunged by 33% in that short period,
                            falling from $1.31 trillion to $880 billion. That, in turn, is a 70% decline from the $2.96
                            trillion market cap in November 2021. Needless to say, this asset class isn't a playground
                            for momentum investors at the moment, but contrarians may want to start considering small
                            investments in some of the top cryptocurrencies at current levels, for a few reasons. </p>
                    </div>
                    <div class="text_block pad-for-what-com-sec padding-30">
                        <p>First, digital assets are more established than they've ever been at any point in their
                            history, and projects in the young industry continue to attract huge levels of brainpower,
                            labor and investment.</p>
                        <p>Second, 70% declines aren't actually unprecedented in crypto. Bitcoin fell from roughly
                            $20,000 to about $3,000 between late 2017 and late 2018, for example</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="padding-50 mobile-padding-none"></div>
    <div class="container-fluid">
        <div id="best-platform-section" class="container default-wd bottom-divider">
            <div class="visible-xs" style="text-align:center;">
                <span>
                    <img src="<?php echo e(asset('frontend/img/image.png')); ?>" style="top: 23px;left: 85px;max-width: 100%!important;margin-top:-20px;"
                        data-lazy-src="<?php echo e(asset('frontend/img/image.png')); ?>"><noscript><img src="<?php echo e(asset('frontend/img/image.png')); ?>"
                            style="top: 23px;left: 85px;max-width: 100%!important;margin-top:-20px;"></noscript>
                </span>
            </div>
            <div class="title mobile-title-1">
                <h2 style="margin-bottom:0px;">
                    <p style="padding-bottom: 0px;font-size:32px!important;">What is the best Platform to trade Crypto
                        Currencies?</p>
                </h2>
            </div>
            <div class="sub-title mobile-subtitle-1">
                <p class="margin-for-subtitile hidden-xs" style="font-size:23px!important;line-height:36px!important;">
                    MetaTrader 4. The world's most popular trading platform.</p>
            </div>
            <div class="row fb-cus-row padding-50 padding-for-green-bullet-top">
                <div class="col-sm-6 mobile-padding-1 pading-right-40" style="padding-right:40px;">
                    <div class="inner_text1 com-section-cus-link trade-commodities-sec-head-cont-padding">
                        <span>
                            <p>
                                Discover the benefits of Crypto Currency trading on one of the most powerful trading
                                platforms available, MetaTrader 4 (MT4).</p>
                        </span>
                    </div>
                    <div class="inner_text padding-default padding-for-green-bullet">
                        <span style="display: inline-flex;padding-bottom: 10px;">
                            <p><img class="trade-commodities-sec-checkbox-img-small" style="padding-top: 6px;"
                                    src="<?php echo e(asset('frontend/img/check-box-new-small.png')); ?>"
                                    data-lazy-src="<?php echo e(asset('frontend/img/check-box-new-small.png')); ?>"><noscript><img
                                        class="trade-commodities-sec-checkbox-img-small" style="padding-top: 6px;"
                                        src="<?php echo e(asset('frontend/img/check-box-new-small.png')); ?>"></noscript> </p>
                            <p class="trade-commodities-sec-para-cont-padding"
                                style="padding-left: 10px;padding-top: 5px;">Leverage shift in price</p>
                        </span><br>
                        <span style="display: inline-flex;padding-bottom: 10px;">
                            <p><img class="trade-commodities-sec-checkbox-img-small" style="padding-top: 3px;"
                                    src="<?php echo e(asset('frontend/img/check-box-new-small.png')); ?>"
                                    data-lazy-src="<?php echo e(asset('frontend/img/check-box-new-small.png')); ?>"><noscript><img
                                        class="trade-commodities-sec-checkbox-img-small" style="padding-top: 3px;"
                                        src="<?php echo e(asset('frontend/img/check-box-new-small.png')); ?>"></noscript> </p>
                            <p class="trade-commodities-sec-para-cont-padding"
                                style="padding-left: 10px;padding-top: 5px;">Customisable interface, including colours
                                of technical indicators</p>
                        </span><br>
                        <span style="display: inline-flex;padding-bottom: 10px;">
                            <p><img class="trade-commodities-sec-checkbox-img-small" style="padding-top: 6px;"
                                    src="<?php echo e(asset('frontend/img/check-box-new-small.png')); ?>"
                                    data-lazy-src="<?php echo e(asset('frontend/img/check-box-new-small.png')); ?>"><noscript><img
                                        class="trade-commodities-sec-checkbox-img-small" style="padding-top: 6px;"
                                        src="<?php echo e(asset('frontend/img/check-box-new-small.png')); ?>"></noscript> </p>
                            <p class="trade-commodities-sec-para-cont-padding"
                                style="padding-left: 10px;padding-top: 5px;">One-click trading</p>
                        </span><br>
                        <span style="display: inline-flex;padding-bottom: 10px;">
                            <p><img class="trade-commodities-sec-checkbox-img-small"
                                    style="padding-top: 6px;max-width: none" src="<?php echo e(asset('frontend/img/check-box-new-small.png')); ?>"
                                    data-lazy-src="<?php echo e(asset('frontend/img/check-box-new-small.png')); ?>"><noscript><img
                                        class="trade-commodities-sec-checkbox-img-small"
                                        style="padding-top: 6px;max-width: none"
                                        src="<?php echo e(asset('frontend/img/check-box-new-small.png')); ?>"></noscript> </p>
                            <p class="trade-commodities-sec-para-cont-padding"
                                style="padding-left: 10px;padding-top: 5px;">Live price streaming on all accounts
                                128-bits encryption for secure trading</p>
                        </span><br>
                        <span style="display: inline-flex;padding-bottom: 10px;">
                            <p><img class="trade-commodities-sec-checkbox-img-small" style="padding-top: 6px;"
                                    src="<?php echo e(asset('frontend/img/check-box-new-small.png')); ?>"
                                    data-lazy-src="<?php echo e(asset('frontend/img/check-box-new-small.png')); ?>"><noscript><img
                                        class="trade-commodities-sec-checkbox-img-small" style="padding-top: 6px;"
                                        src="<?php echo e(asset('frontend/img/check-box-new-small.png')); ?>"></noscript> </p>
                            <p class="trade-commodities-sec-para-cont-padding"
                                style="padding-left: 10px;padding-top: 5px;">Expert Advisors (EAs) </p>
                        </span><br>
                        <span style="display: inline-flex;padding-bottom: 10px;">
                            <p><img class="trade-commodities-sec-checkbox-img-small" style="padding-top: 6px;"
                                    src="<?php echo e(asset('frontend/img/check-box-new-small.png')); ?>"
                                    data-lazy-src="<?php echo e(asset('frontend/img/check-box-new-small.png')); ?>"><noscript><img
                                        class="trade-commodities-sec-checkbox-img-small" style="padding-top: 6px;"
                                        src="<?php echo e(asset('frontend/img/check-box-new-small.png')); ?>"></noscript> </p>
                            <p class="trade-commodities-sec-para-cont-padding"
                                style="padding-left: 10px;padding-top: 5px;">The option of going long or short </p>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div id="padding-options-section" class="container default-wd section-mobile">
                <div class="row fb-cus-row">
                    <div class="mobile-title-2 com-section-cus-link">
                        <h3 class="platform-para">Are there more platform options?</h3>
                        <p class="hidden-xs" style="text-align:center;padding-top:20px;">We recommend MT4 for Crypto
                            Currencies but a range of products can also<br> be traded on MT5 platforms.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="padding-50 mobile-padding-none"></div>
    </div>
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
    <div class="container-fluid c11">
        <div id="cfd-section-table" class="container default-wd">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="title mobile-title-1">
                            <h2>
                                <p class="pad-for-table" style="padding-bottom: 2px;font-size:32px!important;">Crypto
                                    CFD Spreads</p>
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
                                </tr>
                                <tr class="last-row-sect"
                                    style="background-image: linear-gradient(to right,rgb(-140, 134, 171) 55%,#26cc68);">
                                    <th class="tbe-hd" style="padding: 15px;">&nbsp;</th>
                                    <th class="tbe-hd" style="padding: 15px;">Min</th>
                                    <th class="tbe-hd" style="padding: 15px;">Avg</th>
                                </tr>
                                <tr class="active0">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"><a
                                            target="_blank" href="index.html#"> BCHUSD </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Bitcoin Cash vs United States
                                        Dollar CFD </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 2.210</td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 5.839 </td>
                                </tr>
                                <tr class="active1">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> BTCUSD </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Bitcoin vs United States Dollar
                                        CFD </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 8.710 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 42.036 </td>
                                </tr>
                                <tr class="active0">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> DOTUSD </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Polkadot vs United States
                                        Dollar CFD </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 0.011 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 0.013 </td>
                                </tr>
                                <tr class="active1">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> DSHUSD </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Dash Coin vs United States
                                        Dollar CFD </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 0.000 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 1.241 </td>
                                </tr>
                                <tr class="active0">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> EOSUSD </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> EOS vs United States Dollar CFD
                                    </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 0.000 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 0.064 </td>
                                </tr>
                                <tr class="active1">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> ETHUSD </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Ethereum vs United States
                                        Dollar CFD </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 4.560 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 11.605 </td>
                                </tr>
                                <tr class="active0">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> LNKUSD </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Chainlink vs United States
                                        Dollar CFD </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 0.012 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 0.020 </td>
                                </tr>
                                <tr class="active1">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> LTCUSD </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Lite Coin vs United States
                                        Dollar CFD </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 1.050 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 1.597 </td>
                                </tr>
                                <tr class="active0">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> NMCUSD </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> NameCoin vs United States
                                        Dollar CFD </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 7.895 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 7.895 </td>
                                </tr>
                                <tr class="active1">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> XLMUSD </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Stellar vs United States Dollar
                                        CFD </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 0.000 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 0.000 </td>
                                </tr>
                                <tr class="active0">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> XRPUSD </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Ripple vs United States Dollar
                                        CFD </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 0.008 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 0.020 </td>
                                </tr>
                                <tr class="active1">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> ADAUSD </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Cardano vs United States Dollar
                                        CFD </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 0.003 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 0.003 </td>
                                </tr>
                                <tr class="active1">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> BNBUSD </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Binance Smartchain vs United
                                        States Dollar CFD </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 1.266 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 1.415 </td>
                                </tr>
                                <tr class="active0">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> DOGUSD </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Doge vs United States Dollar
                                        CFD </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 0.001 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 0.001 </td>
                                </tr>
                                <tr class="active1">
                                    <td class="tbe-para"
                                        style="padding: 15px;font-size:18.5px;font-weight:300;padding-left:40px;"> <a
                                            target="_blank" href="index.html#"> BSVUSD </a> </td>
                                    <td class="tbe-para font300" style="padding: 15px;"> Bitcoin SV vs United States
                                        Dollar CFD </td>
                                    <td class="tbe-red" style="padding: 5px;"></td>
                                    <td class="tbe-red" style="padding: 5px;"> 1.7 </td>
                                    <td class="tbe-liteblue" style="padding: 5px;"> 0.6 </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .btn.btn-lg.btn-transparent-red {
            border-radius: 0 10px 10px 10px;
        }

        .mob-hei {
            line-height: 25px;
        }

        .arrow-font {
            color: white;
            font-size: 23px;
            font-weight: bold;
            letter-spacing: 0;
        }

        .arrow-blue-alignments {
            float: right;
            margin-right: 40px;
            margin-top: -190px;
        }

        .arrow_blue {
            position: relative;
            background: #00beff !Important;
            margin-left: 20px !Important;
            border-radius: 0px 0px 10px 0px !Important;
            padding-left: 30px;
            padding-right: 35px;
            padding-top: 15px;
            padding-bottom: 15px;
        }

        .arrow_blue:after,
        .arrow_blue:before {
            left: -29%;
            top: 51%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg);
        }

        .arrow_blue:after {
            border-left-color: #00bdff;
            border-width: 30px;
            margin-top: -31px;
        }

        .width-for-bullet-first-section {
            width: 560px;
        }

        b {
            font-weight: 600 !important;
            color: #00BEFF;
        }

        .pad-for-six-reason-sec {
            margin-bottom: -30px;
            padding-bottom: 0px !important;
        }

        .col-sm-4.mobile-sm4 {
            padding-top: 60px !important;
        }

        .h4-font-sem {
            font-family: 'Helvetica Neue LT Pro', sans-serif;
            font-size: 23px !important;
            font-weight: 300;
            font-stretch: normal;
            font-style: normal;
            line-height: 1.22;
            letter-spacing: normal;
            text-align: center;
            color: #0b121c;
        }

        .card-h2-font-sec {
            font-family: 'Helvetica Neue BD Pro', sans-serif;
            font-size: 22px;
            font-weight: bold;
            text-align: center;
            font-stretch: normal;
            font-style: normal;
            line-height: 1.51;
            letter-spacing: normal;
            color: #0b121c;
        }

        .normal-para-font {
            font-size: 18.5px;
            font-weight: 300;
            font-stretch: normal;
            font-style: normal;
            line-height: 1.51;
            letter-spacing: normal;
            text-align: left;
            color: #0b121c !important;
            font-family: 'Helvetica Neue LT Pro', sans-serif;
        }

        .title-pt-35 {
            padding-top: 35px;
        }

        .padding-top-20 {
            padding-top: 20px;
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


        .pad-for-table {
            padding-left: 250px;
        }

        .bg-style-for-box {
            font-weight: 300;
            width: 75%;
            box-shadow: none;
            font-size: 18px;
            color: #2E3642 !important;
            float: right;

        }

        .tbe-red {
            font-size: 18.5px !important;
            font-weight: 600 !important;
            font-stretch: normal !important;
            font-style: normal !important;
            line-height: 2.7 !important;
            letter-spacing: normal !important;
            text-align: center !important;
            color: #24ca69 !important;
        }

        .tbe-litered {
            font-size: 18.5px !important;
            font-weight: 300 !important;
            font-stretch: normal !important;
            font-style: normal !important;
            line-height: 2.7 !important;
            letter-spacing: normal !important;
            text-align: center !important;
            color: #24ca69 !important;
        }

        .tbe-blue {
            font-size: 18.5px !important;
            font-weight: 600 !important;
            font-stretch: normal !important;
            font-style: normal !important;
            line-height: 2.7 !important;
            letter-spacing: normal !important;
            text-align: center !important;
            color: #00bdff !important;
        }

        .tbe-liteblue {
            font-size: 18.5px !important;
            font-weight: 300 !important;
            font-stretch: normal !important;
            font-style: normal !important;
            line-height: 2.7 !important;
            letter-spacing: normal !important;
            text-align: center !important;
            color: #00bdff !important;
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

        .first-row-linear-grd {
            background-image: linear-gradient(to right, rgb(-140, 134, 171) 55%, #26cc68);
        }

        .table tr {
            border-bottom: none !important;
            border-right: none !important;
            border-top: none !important;
        }

        .first-row-column-linear-grd {
            background-image: linear-gradient(to right, rgb(9, 30, 86) 18%, #0086A9);
        }

        .bg-align-desktop {
            background-color: #f5f5f5;
            padding-left: 40px;
            padding-right: 40px;
            padding-top: 40px;
            padding-bottom: 40px;
            border-radius: 0 20px 20px 20px;
        }

        .c5 {
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 50%;
            background-image: url(<?php echo e(asset('frontend/img/reasons.jpg')); ?>);
        }

        .c6 {
            background-color: #ffffff !important;

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
            font-size: 40px !important;
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


        .mobile-divider {
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

            .ipad-image-section-with-buttom {
                max-width: 100% !important;
                margin-bottom: -125px;
                margin-top: 30px !important;
            }

            .pad-for-sys-section {
                padding-top: 15px !important;
                padding-bottom: 60px !important;
            }

            .pad-right-30 {
                padding-right: 15px !important;
            }

            .height-for-forex-table {
                height: 500px;
            }

            .padding-15 {
                padding-top: 10px !important;
            }

            .headerbg {
                background-position: 50%;
            }

            .btn.btn-lg.btn-transparent-red {

                display: none;
            }

            .width-for-bullet-first-section {
                width: auto !important;
            }

            .margin-for-subtitile {
                margin-top: 10px;
            }

            .padding-left-30-for-mobile {
                padding-left: 30px;
                padding-right: 30px;
            }

            .card-h2-font-sec {
                line-height: 23px;
            }

            #start-trading-forex-section {
                padding-top: 60px;
                padding-bottom: 50px;
            }

            #forex-australian-regulated-forex-section {
                padding-top: 90px;
                padding-bottom: 50px;
            }

            #six-reason-section {
                padding-top: 60px;
                padding-bottom: 70px;
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

            div#section1 {
                padding-top: 32px;
                padding-bottom: 60px !important;
            }

            #best-platform-section {
                padding-top: 0px !important;
                padding-bottom: 54px;
            }

            .padding-for-green-bullet {
                padding-right: 20px;
                padding-left: 20px;
            }

            .padding-for-green-bullet-top {
                padding-top: 20px !important;

            }

            .pading-right-40 {
                padding-right: 15px !important;

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

            .row>.col-md-12>nav {
                display: block !important;
                padding-left: 10px;
                padding-right: 10px;

            }

            .row>div.visible-xs.fp-font.no-uppercase.color-white {
                padding-top: 70px !important;
                margin-top: 35px;
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



            .image-for-autochartist-mobile {
                display: block !important;
                padding-bottom: 30px;
            }

            .mobile-full-width-divider {
                display: block !important;
            }

            .mobile-divider {
                display: block !important;
            }

            .mobile-container {
                display: block !important;
            }

            .container-fluid.c2 {
                height: 950px !important;
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

            .image-effect-top {
                display: none;
            }

            .image-effect-bottom {
                display: none;
            }

            .inner-section-6 {
                left: 0px;
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


</html><?php /**PATH S:\jobs\bitstocks_trading\resources\views/frontend/crypto.blade.php ENDPATH**/ ?>