<!Doctype html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Bitstocks Trading Limited | Stocks & ETFs</title>
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
            background: url("<?php echo e(asset('frontend/img/stocks.jpg')); ?>") top center;
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
            <h1>Stocks & ETFs</h1>
            <div class="d-flex">
                <a href="<?php echo e(route('register')); ?>" class="btn-get-started scrollto">Get Started</a>
            </div>
        </div>
    </section>
    <br><br>
    <div class="container-fluid c1">
        <div id="What-is-an-ETF" class="container">
            <div class="title">
                <h2>
                    <p style="padding-bottom:5px; font-size:28px!important;">What is an ETF?</p>
                </h2>
            </div>
            <div class="row padding-top-30 padding-top-20-for-mobile">
                <div class="col-sm-6 padding-left-30-for-mobile pad-right-40 ">
                    <div class="text-block1">
                        <p class="normal-para-font">ETFs are passive investment products that it’s price aims to track
                            the basket of assets under the ETF. In ETF investing, traders do not have to acquire the
                            investment product physically. Mutual funds such as The Vanguard Group, Commonwealth Funds,
                            Morningstar, and BlackRock manage ETFs. A diverse range of companies are contained inside
                            the fund.</p>
                        <p class="normal-para-font">An exchange-traded fund (ETF) is a passive investment fund traded on
                            global stock exchanges. ETFs are popular financial instruments combining the advantages and
                            benefits of investing in stocks, unlike mutual funds trading, over and above the benefits of
                            trading in Index CFDs. Like other types of funds, ETFs pull together capital from traders
                            into a basket of various investments, including stocks, bonds and other security assets.</p>
                    </div>
                </div>
                <div class="col-sm-6 pad-left-40 padding-top-10-for-mobile">
                    <div class="text-block1">
                        <p class="normal-para-font">ETFs are passive investment products that it’s price aims to track
                            the basket of assets under the ETF. In ETF investing, traders do not have to acquire the
                            investment product physically. Mutual funds such as The Vanguard Group, Commonwealth Funds,
                            Morningstar, and BlackRock manage ETFs. A diverse range of companies are contained inside
                            the fund.</p>
                        <p class="normal-para-font">ETFs usually represent several asset classes, which means that the
                            objective of the ETF is to replicate the performance of that asset class. ETFs track
                            specific assets such as stocks, bonds, <a class="custom-link-for-a"
                                href="#">commodities</a>, and currency indices; thus, traders consider
                            exchange-traded funds (ETFs) as a classic among portfolio diversification investments. ETFs
                            are valuable financial assets that offer numerous advantages and could be an excellent
                            financial instrument for traders to reach their trading goals. In 2021, ETFs reached a
                            volume of $5.83T (USD), with nearly 2,354 ETF products traded on US stock exchanges.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid c2">
        <div class="container" id="brief-history-ETF-trading">
            <div class="row">
                <div class="col-sm-6 pad-right-40">
                </div>
                <div class="col-sm-6 pad-left-40">
                    <div>
                        <p class="h1-font-sec" style="font-size:32px; text-align:left;"> A brief history of ETF trading
                        </p>
                        <p class="normal-para-font padding-top-25 padding-top-20-for-mobile">ETF trading began in Canada
                            in 1990, following the American Stock Exchange (AMEX) crash of 1987, when physicist Nate
                            Most was commissioned to create a new class of assets. Most created the first
                            exchange-traded fund (ETF) to fuel the AMEX trading basket with a new and revolutionary
                            structured asset class. Nate initially transformed the investing philosophy for
                            institutional investors to execute sophisticated trading strategies. ETFs introduced the
                            markets to the advantages of pooled investing and trading flexibility. The Standard & Poor's
                            Depository Receipts, commonly known as SPDR (SPY), launched in 1993, is still the world’s
                            most popular exchange-traded fund (ETF) with over $400B (USD) in investments. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid c6">
        <div id="what-trade-section" class="container default-wd">
            <div class="row">
                <div class="col-sm-6">
                    <span>
                        <img class="margin-image-top" src="<?php echo e(asset('frontend/img/share-first-pic.png')); ?>" alt="" title=""
                            style="margin-top: 20px;max-width: 100%!important;"
                            data-lazy-src="<?php echo e(asset('frontend/img/share-first-pic.png')); ?>"><noscript><img class="margin-image-top"
                                src="<?php echo e(asset('frontend/img/share-first-pic.png')); ?>" alt="" title=""
                                style="margin-top: 20px;max-width: 100%!important;"></noscript>
                    </span>
                </div>
                <div class="col-sm-6 pad-align-what-sec trade-commodities-sec-con-div-padding">
                    <div class="title mobile-title-1">
                        <h2>
                            <p class="text-cent trade-commodities-sec-con-head-padding"
                                style="text-align: left;font-size:32px!important;">What is Stocks?</p>
                        </h2>
                    </div>
                    <div class="text_block pad-for-what-com-sec">
                        <p> A stock, also known as equity, is a security that represents the ownership of a fraction of
                            the issuing corporation. Units of stock are called "shares" which entitles the owner to a
                            proportion of the corporation's assets and profits equal to how much stock they own.</p>
                    </div>
                    <div class="text-block padding-30 pad-for-what-com-sec">
                        <p> Stocks are bought and sold predominantly on stock exchanges and are the foundation of many
                            individual investors' portfolios. Stock trades have to conform to government regulations
                            meant to protect investors from fraudulent practices.</p>
                    </div>
                    <div class="text-block padding-30 pad-for-what-com-sec">
                        <p> A stock is a form of security that indicates the holder has proportionate ownership in the
                            issuing corporation and is sold predominantly on stock exchanges. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid c3">
        <div class="container" id="Different-types-ETF">
            <div class="row">
                <div class="center-conent">
                    <h2>
                        <p class="text-cent trade-commodities-sec-con-head-padding"
                            style="text-align: left;font-size:32px!important;">Different types of ETFs</p>
                    </h2>
                    <p class="normal-para-font padding-top-30">The investors’ demand and continuous technological
                        progress have created more than 8000 exchange-traded funds. ETFs are now accessible to traders
                        around the globe with lower ETF pricing access to different financial markets, sectors and asset
                        types.</p>
                    <p class="normal-para-font">There are various types of exchange-traded funds (ETFs). Some ETFs
                        invest in a variety of stocks and bonds. Some others track the performance of a stock index,
                        like the Standard and Poor’s E-Mini Index (S&P 500 E-Mini) or the Dow Jones Industrial Average
                        (DJIA E-Mini (CBOT), and others track the market performance (IBM Index).</p>
                    <p class="normal-para-font">However, different ETFs offer traders different advantages and benefits
                        of portfolio diversification. For instance, exchange-traded funds (ETFs) focused on specific
                        sectors typically offer less diversification than those designed to replicate indices and their
                        performances. </p>
                </div>
                <div class="col-sm-6 padding-top-40 padding-top-20-for-mobile pad-right-40">
                    <div class="sub-para-etf1">
                        <p class="h1-font-sec-32"><strong>Bond ETFs</strong></p>
                        <p class="normal-para-font">Bond exchange-traded funds (ETFs), commonly known as (Fixed Income
                            ETFs) are important for traders in diversifying investment portfolios. Making different
                            investment types is considered a good risk minimisation strategy and practice. Most
                            professional traders also invest in fixed-income and bond ETFs because these investments can
                            provide steady returns at potentially lower risks than equity ETFs.</p>
                        <p class="normal-para-font">Bond ETFs are designed to provide exposure to virtually every type
                            of bond available; US Treasury Bonds, corporate and municipal bonds (munis), international,
                            high-yield bonds, etc.</p>
                    </div>
                    <div class="sub-para-etf">
                        <p class="h1-font-sec-32"><strong>Gold (XAU)</strong></p>
                        <p class="normal-para-font">Gold can be Invested in various ways, ranging from purchasing gold
                            directly or owning shares of publicly traded mining firms.</p>
                    </div>
                    <div class="sub-para-etf">
                        <p class="h1-font-sec-32"><strong>Simple Transactions</strong></p>
                        <p class="normal-para-font">Gold ETFs can be bought and sold at any time of the day, as long as
                            the stock exchanges are open. Gold investments are seen by many as a great investment
                            opportunity against inflation when the national currency is declining.</p>
                    </div>
                    <div class="sub-para-etf">
                        <p class="h1-font-sec-32"><strong>Gold ETFs and Dividends</strong></p>
                        <p class="normal-para-font">Many ETFs provide dividends, making them appealing to investors.</p>
                        <p class="normal-para-font">These are some companies offering dividends.</p>
                        <ul class="bullet-fonts">
                            <li class="normal-para-font list-item-default ">iShares S&P 500 Growth ETF (IVW.arcx).</li>
                            <li class="normal-para-font list-item-default ">ProShares UltraPro QQQ ETF (TQQQ.xnms).</li>
                            <li class="normal-para-font list-item-default ">Vanguard Dividend Appreciation ETF
                                (VIG.arcx).</li>
                        </ul>
                        <p class="normal-para-font">Always check availability If you are looking for this particular
                            service.</p>
                        <p class="normal-para-font">Gold is considered a safe-haven asset due to its regular price
                            increases in response to stock market dips. Meanwhile, investors are placing money into gold
                            ETFs in extensive amounts. Gold ETFs have stayed relatively stable in recent months despite
                            the pandemic outbreak.</p>
                    </div>
                    <div class="sub-para-etf">
                        <p class="h1-font-sec-32"><strong>Equity ETFs</strong></p>
                        <p class="normal-para-font">Equity ETFs track the performance of companies and stocks from
                            specific regions and countries. Equity exchange-traded funds (ETFs) enable trading sectors
                            like medical, techοlogy stocks and banking stocks to amplify traders' and investors' trading
                            opportunities and potentials.</p>
                    </div>
                    <div class="sub-para-etf">
                        <p class="h1-font-sec-32"><strong>Alternative investment ETFs</strong></p>
                        <p class="normal-para-font">Alternative investment ETFs are innovative structures enabling
                            traders to invest in volatility or gain exposure to investment strategies, including covered
                            call writing and currency carry.</p>
                    </div>
                    <div class="sub-para-etf">
                        <p class="h1-font-sec-32"><strong>Factor ETFs</strong></p>
                        <p class="normal-para-font">Factor ETF investing is an investment strategy traders deploy to
                            target specific vessels of returns across asset classes. Professional traders, Institutional
                            investors and active managers have consistently used Factor ETFs trading through rules-based
                            ETFs to manage their investment portfolios.</p>
                    </div>
                    <div class="sub-para-etf">
                        <p class="h1-font-sec-32"><strong>Inverse ETFs</strong></p>
                        <p class="normal-para-font">An inverse ETF fund is an inverse reflection of a target index. For
                            instance inverse funds go up when the target index depreciates, like when traders
                            short-selling a stock due to stock price depreciation. Inverse ETFs are designed to profit
                            from a decline in the underlying market or index.</p>
                    </div>
                    <div class="sub-para-etf">
                        <p class="h1-font-sec-32"><strong>Market ETFs</strong></p>
                        <p class="normal-para-font">Market ETFs are designed to track a particular index like the
                            SPY.ARC (Standard & Poor’s 500), and the STW.AXW (Australia 200 Index Cash).</p>
                    </div>
                    <div class="sub-para-etf">
                        <p class="h1-font-sec-32"><strong>Specialty ETFs</strong></p>
                        <p class="normal-para-font">Specialty ETFs have two fund types that have emerged recently to
                            meet specific needs for leveraged funds and inverse funds. These specialty ETFs offer much
                            greater growth potential and a much higher risk.</p>
                    </div>
                    <div class="sub-para-etf">
                        <p class="h1-font-sec-32"><strong>Sustainable ETFs</strong></p>
                        <p class="normal-para-font">Sustainable ETF trading combines different investment styles
                            focusing on funds, either promoting sustainable economic models or markets. Sustainable ETFs
                            include investment styles and socio-environmental, socio-economic and governmental insights.
                            The main driving forces of the sustainable ETFs market are the ever-changing geopolitical
                            risks such as demographic shifts, government regulations and laws.</p>
                    </div>
                </div>
                <div class="col-sm-6 padding-top-40 padding-top-20-for-mobile pad-left-40">
                    <div class="sub-para-etf1">
                        <p class="h1-font-sec-32"><strong>Commodity ETFs</strong></p>
                        <p class="normal-para-font">Exchange-traded funds (ETFs) are ideal for getting into commodities
                            like gold (XAU), silver (XAG), oil (WTI, XBR, XTI) and other attractive stock alternatives
                            for portfolio diversification and risk management. Commodity ETFs often do not directly own
                            the underlying asset, like gold (XAU), but use derivatives instead. Commodity derivatives
                            track the commodity's underlying price but often carry more risk, such as counterparty
                            risks, than an exchange-traded fund (ETF) that owns the underlying asset directly.</p>
                    </div>
                    <div class="sub-para-etf">
                        <p class="h1-font-sec-32"><strong>Physically Backed ETF</strong></p>
                        <p class="normal-para-font">Gold (XAU) is a prominent physically-backed ETF. Gold can be
                            utilised in various ways; some people hedge against stock market volatility, US dollar
                            weakness, and inflation. Gold is a simple instrument with gold bullion stockpiled in secure
                            vaults. The price of this ETF will likely fluctuate in tandem with spot gold prices.</p>
                    </div>
                    <div class="sub-para-etf">
                        <p class="h1-font-sec-32"><strong>Gold mining investing</strong></p>
                        <p class="normal-para-font">Investing in gold mining is generally seen as a long-term
                            investment. Gold mostly outperforms all other precious metals. However, there are always
                            risks to every investment.</p>
                        <p class="normal-para-font">The issuer’s organisation purchases and holds gold bars or invests
                            in gold-related businesses with other ETFs. Investors subscribe to the fund’s shares, which
                            vary in value (in tandem) with the price of gold or corporate stock.</p>
                    </div>
                    <div class="sub-para-etf">
                        <p class="h1-font-sec-32"><strong>Currency ETFs</strong></p>
                        <p class="normal-para-font">Currency ETFs invest in currency and groups of currencies such as
                            the United States Dollar (USD) or a basket of currencies. Currency ETFs trading is when
                            traders invest either a single currency or currency derivatives or a group of currencies and
                            currency derivatives. Traders consider currency derivatives to be currying additional risks
                            to the ETF in some cases. In currency ETF investing, traders mainly buy the underlying
                            currency when the market price rises. However, currency ETFs can be used by traders for
                            hedging purposes to protect their investment portfolios and avoid potential currency risks.
                        </p>
                    </div>
                    <div class="sub-para-etf">
                        <p class="h1-font-sec-32"><strong>Actively managed ETFs</strong></p>
                        <p class="normal-para-font">Actively managed ETFs aim to outperform a single or a basket of
                            indices, unlike most ETFs designed to track an index.</p>
                    </div>
                    <div class="sub-para-etf">
                        <p class="h1-font-sec-32"><strong>Exchange-traded notes (ETNs)</strong></p>
                        <p class="normal-para-font">Exchange-traded notes (ETNs) are debt securities of illiquid markets
                            backed by the credit reliability of issuing banks.</p>
                    </div>
                    <div class="sub-para-etf">
                        <p class="h1-font-sec-32"><strong>Foreign market ETFs</strong></p>
                        <p class="normal-para-font">Foreign market ETFs are designed to track the Japanese Nikkei Index,
                            Hong Kong’s Hang Seng Index, the S&P/ASX 200 index (Standard & Poor's and Australian
                            Securities Exchange 200) and other non-US markets.</p>
                    </div>
                    <div class="sub-para-etf">
                        <p class="h1-font-sec-32"><strong>Leveraged ETFs</strong></p>
                        <p class="normal-para-font">Leveraged funds are marketable securities that aim to amplify
                            potential profits on a trade or investment by borrowing capital in the form of leverage to
                            invest. ETFs ratios may vary depending on the underlying asset a trader wants to target.</p>
                    </div>
                    <div class="sub-para-etf">
                        <p class="h1-font-sec-32"><strong>Sector and Industry ETFs</strong></p>
                        <p class="normal-para-font">Sector and industry ETFs are designed to provide exposure to
                            particular industries, such as oil, pharmaceutical, or tech companies.</p>
                    </div>
                    <div class="sub-para-etf">
                        <p class="h1-font-sec-32"><strong>Style ETFs</strong></p>
                        <p class="normal-para-font">Style ETFs track an investment style or market capitalisation focus,
                            including value and growth, such as large-cap value, medium-cap, and small-cap growth
                            stocks.</p>
                    </div>
                    <div class="sub-para-img">
                        <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                            class="devices-img"
                            data-lazy-src="wp-content/themes/fptheme/images/etf-page/devices-desktop.html"><noscript><img
                                src="wp-content/themes/fptheme/images/etf-page/devices-desktop.html"
                                class="devices-img"></noscript>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid c4">
        <div id="How-does-ETF-tradingwork" class="container">
            <div class="padding-rightleft-30-mob">
                <p class="h1-font-sec" style="text-align:center;font-size:32px;"> How does ETF trading work?</p>
            </div>
            <div class="row padding-top-30 padding-top-20-for-mobile">
                <div class="col-sm-6 padding-left-30-for-mobile pad-right-40">
                    <div>
                        <p class="normal-para-font">An ETF (exchange-traded fund) is a class of securities traders buy
                            or sell through a brokerage firm on the stock exchange. In ETF investing, traders do not
                            have to acquire the investment product physically. ETFs are popular financial instruments
                            combining the advantages and benefits of investing in stocks and trading mutual funds. ETFs
                            pull together capital from traders into a basket of various investments, including stocks,
                            bonds, and other security assets.</p>
                        <p class="normal-para-font">ETFs work in a similar way to stock trading, meaning that the
                            underlying assets’ owner creates a fund to track the underlying assets performance and sells
                            shares to investors participating in the fund. Thus, shareholders own a percentage of the
                            exchange-traded funds (ETFs) and not the underlying asset in the fund. However, unlike a
                            company stock, the number of outstanding shares of an exchange-traded fund (ETF) can change
                            daily due to the everchanging creation of new shares and the redemption of existing shares.
                        </p>
                        <p class="normal-para-font">ETF issuers create baskets of underlying securities, including
                            commodities, bonds, currencies, and stocks, under a unique ticker symbol and intraday price
                            data. The underlying securities</p>
                    </div>
                </div>
                <div class="col-sm-6 pad-left-40">
                    <div>
                        <p class="normal-para-font">are always in line with the exchange-traded fund market price
                            because of exchange-traded funds (ETFs) capability to continuously redeem shares. Financial
                            institutions use the arbitrage mechanism to control any unexpected price fluctuations in the
                            case of ETF market price deviations from the underlying asset value. ETFs are usually
                            offered at lower fees than other types of funds and are also considered easy to trade by
                            some traders and investors.</p>
                        <p class="normal-para-font">Traders should always consider the risks before investing in any
                            financial instrument.</p>
                        <div>
                            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                data-lazy-src="wp-content/themes/fptheme/images/etf-page/ipad-mt-5.html"><noscript><img
                                    src="wp-content/themes/fptheme/images/etf-page/ipad-mt-5.html"></noscript>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid com1">
        <div id="introduction-to-commodities-section" class="container">
            <div>
                <p class="h2-cent-font-sec visible-xs"
                    style="margin-bottom:25px; padding-top:50px!important;font-size:28px; text-align:center;font-weight:600;">
                    Introduction to Stocks Market </p>
            </div>
            <div class="sub-title mobile-subtitle-1">
                <p class="margin-for-subtitile hidden-xs" style="font-size:23px!important;line-height:36px!important;">
                    Learn more about stock markets
                </p>
            </div>
            <div class="row padding-50">
                <div class="col-sm-6 pad-right-40">
                    <div>
                        <p class="h2-cent-font-sec visible-xs text-start"
                            style="margin-bottom:25px;font-size:18px; font-weight:500; margin-top:30px;"><strong> What
                                Are Stocks?</strong> </p>
                        <p class="normal-para-font trade-commodities-sec2-subhead-padding" style="margin-bottom:20px;">
                            A stock, also known as equity, is a security that represents the ownership of a fraction of
                            the issuing corporation. Units of stock are called "shares" which entitles the owner to a
                            proportion of the corporation's assets and profits equal to how much stock they own.
                        </p>
                        <p class="normal-para-font trade-commodities-sec2-subhead-padding"
                            style="margin-bottom:20px;font-size:12px; font-weight:500;">
                            Stocks are bought and sold predominantly on stock exchanges and are the foundation of many
                            individual investors' portfolios. Stock trades have to conform to government regulations
                            meant to protect investors from fraudulent practices.
                        </p>
                        <p class="normal-para-font-sec trade-commodities-sec2-subhead-padding">
                            There are two ways to earn money by owning shares of stock is through dividends and capital
                            appreciation. Dividends are cash distributions of company profits. If a company has 1,000
                            shares outstanding and declares a $5,000 dividend, then stockholders will get $5 for each
                            share they own. Capital appreciation is the increase in the share price itself. If you sell
                            a share to someone for $10, and the stock is later worth $11, the shareholder has made $1.
                        </p>
                        <p class="normal-para-font-sec trade commodities-sec2-subhead-padding">
                            All investments have a degree of risk. Stocks, bonds, mutual funds, and exchange-traded
                            funds can lose value if market conditions decline. When you invest, you make choices about
                            what to do with your financial assets. Your investment value might rise or fall because of
                            market conditions or corporate decisions, such as whether to expand into a new area of
                            business or merge with another company.
                            Historically, stocks have outperformed most other investments over the long run.
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 pad-right-40">
                    <div>
                        <p class="h2-cent-font-sec visible-xs text-start"
                            style="margin-bottom:25px; font-size:18px; font-weight:500; margin-top:30px;"><strong>
                                Understanding Stocks</strong> </p>
                        <p class="normal-para-font trade-commodities-sec2-subhead-padding" style="margin-bottom:20px;">
                            Corporations issue stock to raise funds to operate their businesses and the holder of stock,
                            a shareholder, may have a claim to part of the company's assets and earnings.
                            A shareholder is considered an owner of the issuing company, determined by the number of
                            shares an investor owns relative to the number of outstanding shares. If a company has 1,000
                            shares of stock outstanding and one person owns 100 shares, that person would own and have a
                            claim to 10% of the company's assets and earnings.
                        </p>
                        <p class="normal-para-font trade-commodities-sec2-subhead-padding"
                            style="margin-bottom:20px;font-size:12px; font-weight:500;">
                            Stockholders do not own a corporation but corporations are a special type of organization
                            because the law treats them as legal persons. Corporations file taxes. can borrow, can own
                            property, and can be sued. The idea that a corporation is a “person” means that the
                            corporation owns its assets. A corporate office full of chairs and tables belongs to the
                            corporation, and not to the shareholders.
                        </p>
                        <p class="normal-para-font trade-commodities-sec2-subhead-padding">
                            Corporate property is legally separated from the property of shareholders, which limits the
                            liability of both the corporation and the shareholder. If the corporation goes bankrupt, a
                            judge may order all of its assets sold but a shareholder's assets are not at risk. The court
                            cannot force you to sell your shares, although the value of your shares may have fallen.
                            Likewise, if a major shareholder goes bankrupt, they cannot sell the company’s assets to pay
                            their creditors.
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 pad-right-40 pad-top-20" id="width-adj">
                    <div>
                        <p class="h2-cent-font-sec visible-xs text-start"
                            style="margin-bottom:25px;font-size:12px; font-weight:500; margin-top:30px;"><strong>What Is
                                Shareholder Ownership?</strong></p>
                        <p class="normal-para-font trade-commodities-sec2-subhead-padding" style="margin-bottom:20px;">
                            What shareholders own are shares issued by the corporation, and the corporation owns the
                            assets held by a firm. If you own 33% of the shares of a company, it is incorrect to assert
                            that you own one-third of that company. However, you do own one-third of the company’s
                            shares. This is known as the “separation of ownership and control.”
                        </p>
                        <p class="normal-para-font trade-commodities-sec2-subhead-padding" style="margin-bottom:20px;">
                            Owning stock gives you the right to vote in shareholder meetings, receive dividends if and
                            when they are distributed, and the right to sell your shares to somebody else.
                            If you own a majority of shares, your voting power increases so that you can indirectly
                            control the direction of a company by appointing its board of directors.
                            This becomes most apparent when one company buys another. The acquiring company buys all the
                            outstanding shares.
                            The board of directors is responsible for increasing the value of the corporation and often
                            does so by hiring professional managers, or officers, such as the chief executive officer,
                            or CEO. Ordinary shareholders do not manage the company.
                            The importance of being a shareholder is that you are entitled to a portion of the company's
                            profits, which is the foundation of a stock’s value. The more shares you own, the larger the
                            portion of the profits you get. Many stocks, however, do not pay out dividends and instead
                            reinvest profits back into growing the company. These retained earnings, however, are still
                            reflected in the value of a stock.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .c4 {
            background-color: #0b121c;
        }

        #How-to-trade-ETFs .h1-font-sec-32 {
            font-size: 18.5px;
            padding-bottom: 10px;
        }

        #How-does-ETF-tradingwork {
            padding-top: 100px;
            padding-bottom: 85px;
        }

        #How-does-ETF-tradingwork p {
            color: #ffffff !important;
        }

        #brief-history-ETF-trading {
            padding-top: 95px;
            padding-bottom: 85px;
        }

        .center-conent {
            width: 630px;
            margin: 0 auto;
        }

        .c2 {
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 45% 100%;
            background-image: url(<?php echo e(asset('frontend/img/brief_history.jpg')); ?>);
        }

        .sub-para-etf {
            padding-top: 35px;
        }

        #going-strat-section1 {
            padding-top: 80px;
            padding-bottom: 30px;
        }

        .padding-40-for-hen-section {
            padding-top: 40px;
        }

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
            padding-bottom: 50px;
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

        .first-row-column-linear-grd {
            background-image: linear-gradient(to right, rgb(9, 30, 86) 18%, #0086A9);
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
            background-image: url(img/reasons.jpg);
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
<?php /**PATH S:\jobs\bitstocks_trading\resources\views/frontend/stock.blade.php ENDPATH**/ ?>