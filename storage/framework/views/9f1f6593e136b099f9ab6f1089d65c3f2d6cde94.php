<!Doctype html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Bitstocks Trading Limited | Staking</title>
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

    <script src="../code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <div class="cover hide"></div>

    <section id="hero">
        <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
            <h1>Stake Popular Coins</h1>
            <h2>Stake major, minor and exotic currency pairs.</h2>
            <div class="d-flex">
                <a href="<?php echo e(route('register')); ?>" class="btn-get-started scrollto">Stake Now</a>
            </div>
        </div>
    </section><br><br>
    <div class="container-fluid end-divider">
        <div id="section1" class="container default-wd mobile-padding-top1">
            <div class="title">
                <h2>
                    <p class="hidden-xs" style="padding-bottom:5px;font-size:28px; text-align:center;font-weight:600;">
                        Stake with Bitstocks Trading Limited</p>
                </h2>
            </div>
            <div class="sub-title mobile-subtitle-1 text-center">
            </div>
            <div class="padding-70"></div>
            <div class="row fb-cus-row">
                <div class="col-sm-6 text-content-1" style="paddding-left:0px;padding-right:30px;">
                    <div class="text-block1">
                        <p>Staking cryptocurrencies is a great way to diversify your portfolio and hedge risks.
                            Bitstocks Trading Limited has carved a niche for itself in it's staking pool.</p>
                    </div>
                    <div class="text-block2 padding-30">
                        <p>Our soft-staking program allows you to easily generate rewards by simply holding your digital
                            tokens on Bitstocks. Staking rewards can be as high as 10%* for supported Digital Tokens.
                        </p>
                    </div>
                    <div class="text-block3 padding-30">
                        <p> A newer consensus mechanism called Proof of Stake has emerged — with the idea of increasing
                            speed and efficiency while lowering fees. A major way Proof of Stake reduces costs is by not
                            requiring all those miners to churn through math problems, which is an energy-intensive
                            process. Instead, transactions are validated by people who are literally invested in the
                            blockchain via staking. </p>
                    </div>
                </div>
                <div class="col-sm-6 text_content-1 padding-left-40" style="padding-left:40px;">
                    <div class="text-block1">
                        <p class="para-cent trade-commodities-cont-subhead-padding" style="font-size:23px!important;">
                            What are the benefits of cryptocurrency staking?</p>
                        <div class="inner_text padding-default trade-commodities-cont-full-div-padding">
                            <ul style="padding-left: 0px;margin-left:0px!important;">
                                <p></p>
                                <li class="list-item-default cs-209-pl-regin-al-level list-item-trade-commodities91">
                                    <p>Staking has the added benefit of contributing to the security and efficiency of
                                        the blockchain projects you support</p>
                                </li>
                                <div class="padding-15"></div>
                                <li class="list-item-default list-item-trade-commodities91">
                                    <p>By staking your funds, you make the blockchain more resistant to attacks and
                                        strengthen its ability to process transactions.</p>
                                </li>
                                <div class="padding-15"></div>
                                <li class="list-item-default list-item-trade-commodities91">
                                    <p>The network chooses validators (as they’re usually known) based on the size of
                                        their stake and the length of time they’ve held it. So the most invested
                                        participants are rewarded, </p>
                                </li>
                                <div class="padding-15"></div>
                                <li class="list-item-default list-item-trade-commodities91">
                                    <p>Many long-term crypto holders look at staking as a way of making their assets
                                        work for them by generating rewards, rather than collecting dust in their crypto
                                        wallets.</p>
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
                    <p class="hidden-xs" style="padding-bottom:5px;font-size:28px; text-align:center;font-weight:600;">
                        The Top Ten Cryptocurrencies to Stake</p>
                </h2>
            </div>
            <div class="padding-30"></div>
            <div class="row fb-cus-row">
                <div class="col-sm-6 text-content-1" style="padding-right:15px;">
                    <div class="text-block1">
                        <p>The reason your crypto earns rewards while staked is because the blockchain puts it to work.
                            Cryptocurrencies that allow staking use a “consensus mechanism” called Proof of Stake, which
                            is the way they ensure that all transactions are verified and secured without a bank or
                            payment processor in the middle. Your crypto, if you choose to stake it, becomes part of
                            that process. </p>
                    </div>
                    <div class="text-block2 padding-30">
                        <p>Staking is only possible via the proof-of-stake consensus mechanism, which is a specific
                            method used by certain blockchains to select honest participants and verify new blocks of
                            data being added to the network.
                        </p>
                    </div>
                    <div class="text-block3 padding-30">
                        <p>By forcing these network participants – known as validators or stakers” – to purchase and
                            lock away a certain amount of tokens, it makes it unattractive to act dishonestly in the
                            network. If the blockchain was corrupted in any way through malicious activity, the native
                            token associated with it would likely plummet in price, and the perpetrator(s) would stand
                            to lose money. </p>
                    </div>
                </div>
                <div class="col-sm-6 text_content-1 padding-left-40" style="padding-left:100px;">
                    <div class="text-block1">
                        <p> staking is only possible with cryptocurrencies linked to blockchains that use the
                            proof-of-stake consensus mechanism.</p>
                        <div class="inner_text padding-30">
                            <ul style="padding-left: 0px;margin-left:0px!important;">
                                <p></p>
                                <li class="list-item-default">
                                    <p>Ethereum</p>
                                </li>
                                <div class="padding-15"></div>
                                <li class="list-item-default">
                                    <p>Cardano</p>
                                </li>
                                <div class="padding-15"></div>
                                <li class="list-item-default">
                                    <p>Solana</p>
                                </li>
                                <div class="padding-15"></div>
                                <li class="list-item-default">
                                    <p>Polkadot </p>
                                </li>
                                <div class="padding-15"></div>
                                <li class="list-item-default">
                                    <p>Luna</p>
                                </li>
                                <div class="padding-15"></div>
                                <li class="list-item-default">
                                    <p>Avalanche</p>
                                </li>
                                <div class="padding-15"></div>
                                <li class="list-item-default">
                                    <p>Tezos</p>
                                </li>
                                <div class="padding-15"></div>
                                <li class="list-item-default">
                                    <p>Chainlink</p>
                                </li>
                                <div class="padding-15"></div>
                                <li class="list-item-default">
                                    <p>EOS</p>
                                </li>
                                <div class="padding-15"></div>
                                <li class="list-item-default">
                                    <p>Cosmos</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="padding-50 mobile-padding-none"></div>
    <style>
        .col-sm-6.text-content-1 {
            padding-left: 20px;
        }

        /*--------------------------------------------------------------
# F.A.Q Section
--------------------------------------------------------------*/
        #faq {
            padding: 60px 0;
        }

        #faq .faq-list {
            padding: 0;
            list-style: none;
        }

        #faq .faq-list li {
            border-bottom: 1px solid #e9eaed;
            margin-bottom: 20px;
            padding-bottom: 20px;
        }

        #faq .faq-list .question {
            display: block;
            position: relative;
            font-family: #f82249;
            font-size: 18px;
            line-height: 24px;
            font-weight: 400;
            padding-left: 25px;
            cursor: pointer;
            color: #e0072f;
            transition: 0.3s;
        }

        #faq .faq-list i {
            font-size: 16px;
            position: absolute;
            left: 0;
            top: -2px;
        }

        #faq .faq-list p {
            margin-bottom: 0;
            padding: 10px 0 0 25px;
        }

        #faq .faq-list .icon-show {
            display: none;
        }

        #faq .faq-list .collapsed {
            color: black;
        }

        #faq .faq-list .collapsed:hover {
            color: #f82249;
        }

        #faq .faq-list .collapsed .icon-show {
            display: inline-block;
            transition: 0.6s;
        }

        #faq .faq-list .collapsed .icon-close {
            display: none;
            transition: 0.6s;
        }
    </style>
    <style>
        .stepper-horizontal {
            display: table;
            width: 100%;
            margin: 0 auto;
        }

        .stepper-horizontal .step {
            display: table-cell;
            position: relative;
            padding: 1.5rem;
            z-index: 2;
            width: 25%;
        }

        .stepper-horizontal .step:last-child .step-bar-left,
        .stepper-horizontal .step:last-child .step-bar-right {
            display: none;
        }

        .stepper-horizontal .step .step-circle {
            width: 2rem;
            height: 2rem;
            margin: 0 auto;
            border-radius: 50%;
            text-align: center;
            line-height: 1.75rem;
            font-size: 1rem;
            font-weight: 600;
            z-index: 2;
            border: 2px solid #D9E2EC;
        }

        .stepper-horizontal .step.done .step-circle {
            background-color: #199473;
            border: 2px solid #199473;
            color: #FFFFFF;
        }

        .stepper-horizontal .step.done .step-circle:before {
            font-family: "FontAwesome";
            font-weight: 100;
            content: "";
        }

        .stepper-horizontal .step.done .step-circle * {
            display: none;
        }

        .stepper-horizontal .step.done .step-title {
            color: #102A43;
        }

        .stepper-horizontal .step.editing .step-circle {
            background: #ffffff;
            border-color: #199473;
            color: #199473;
        }

        .stepper-horizontal .step.editing .step-title {
            color: #199473;
            text-decoration: underline;
        }

        .stepper-horizontal .step .step-title {
            margin-top: 1rem;
            font-size: 1rem;
            font-weight: 600;
        }

        .stepper-horizontal .step .step-title,
        .stepper-horizontal .step .step-optional {
            text-align: center;
            color: #829AB1;
        }

        .stepper-horizontal .step .step-optional {
            font-size: 0.75rem;
            font-style: italic;
            color: #9FB3C8;
        }

        .stepper-horizontal .step .step-bar-left,
        .stepper-horizontal .step .step-bar-right {
            position: absolute;
            top: calc(2rem + 5px);
            height: 5px;
            background-color: #D9E2EC;
            border: solid #D9E2EC;
            border-width: 2px 0;
        }

        .stepper-horizontal .step .step-bar-left {
            width: calc(100% - 2rem);
            left: 50%;
            margin-left: 1rem;
            z-index: -1;
        }

        .stepper-horizontal .step .step-bar-right {
            width: 0;
            left: 50%;
            margin-left: 1rem;
            z-index: -1;
            transition: width 500ms ease-in-out;
        }

        .stepper-horizontal .step.done .step-bar-right {
            background-color: #199473;
            border-color: #199473;
            z-index: 3;
            width: calc(100% - 2rem);
        }
    </style>
    <script>
        var currentStep = 1;
        var numSteps = 4;

        function nextStep() {
            currentStep++;
            if (currentStep > numSteps) {
                currentStep = 1;
            }
            var stepper = document.getElementById('stepper1');
            var steps = stepper.getElementsByClassName('step');

            Array.from(steps).forEach((step, index) => {
                let stepNum = index + 1;
                if (stepNum === currentStep) {
                    addClass(step, 'editing');
                } else {
                    removeClass(step, 'editing');
                }
                if (stepNum < currentStep) {
                    addClass(step, 'done');
                } else {
                    removeClass(step, 'done');
                }
            })
        }


        /* get, set class, see https://ultimatecourses.com/blog/javascript-hasclass-addclass-removeclass-toggleclass */

        function hasClass(elem, className) {
            return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
        }

        function addClass(elem, className) {
            if (!hasClass(elem, className)) {
                elem.className += ' ' + className;
            }
        }

        function removeClass(elem, className) {
            var newClass = ' ' + elem.className.replace(/[\t\r\n]/g, ' ') + ' ';
            if (hasClass(elem, className)) {
                while (newClass.indexOf(' ' + className + ' ') >= 0) {
                    newClass = newClass.replace(' ' + className + ' ', ' ');
                }
                elem.className = newClass.replace(/^\s+|\s+$/g, '');
            }
        }
    </script>

    <br><br>

    <section id="faq">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>F.A.Q </h2>
            </div>
            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-9">
                    <ul class="faq-list">
                        <li>
                            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">What is Staking? <i
                                    class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                                <p>On a Proof of Stake blockchain, staking is the act of depositing tokens in order to
                                    become a validator; that is, to participate in proposing and attesting to
                                    transaction blocks. Anyone with a minimum necessary coin balance can validate
                                    transactions and earn staking rewards on these blockchains.</p>
                            </div>
                        </li>
                        <li>
                            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">How can I calculate
                                potential profit? <i class="bi bi-chevron-down icon-show"></i><i
                                    class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Each crypto is independent and has a different reward system. Therefore, the size of
                                    calculated rewards, frequency of receiving rewards will be slightly different. It
                                    depends on multiple factors including the current blockchain block, developers
                                    roadmap changes, compounded coins addition but the simplest and the most popular
                                    dependency is: the more is staked, the more rewards can be earned, Bitstocks
                                    presents indicative annual awards amount next to every asset on the list. Most
                                    values displayed there are provided by the developers of individual coins.</p>
                            </div>
                        </li>
                        <li>
                            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">How can I earn
                                passive income with crypto? <i class="bi bi-chevron-down icon-show"></i><i
                                    class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    You can earn passive income with crypto thanks to the Proof-of-Stake (PoS) consesus
                                    model which is the alternative mechanism for Proof-of-Work (PoW) that is described
                                    as a concept that lets an individual to mine or validate block transactions based on
                                    the number of coins that are held. Thanks to the assuring security and liquidity for
                                    a given network, we can be awarded with rewards in form of 'stakes'. Staking refers
                                    to holding crypto coins to verify transactions and support the network on
                                    Proof-of-Stake (PoS) blockchain, which allows to generate a passive income.</p>
                            </div>
                        </li>
                        <li>
                            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Why move to Proof of
                                Stake? <i class="bi bi-chevron-down icon-show"></i><i
                                    class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Decentralization and sustainability are two of the key benefits of POS networks
                                    compared to POW networks. Instead of miners using computer hardware, proof-of-stake
                                    token owners offer their coins as collateral for the chance to validate blocks to
                                    secure the network, in turn they earn a staking reward.</p>
                            </div>
                        </li>
                        <li>
                            <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Are there risks
                                associated with staking ETH? <i class="bi bi-chevron-down icon-show"></i><i
                                    class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Yes, a portion of your staked ETH can be slashed. You can lose ETH for malicious
                                    actions, going offline, failing to validate, or from double-spending.
                                    Bitstocks insures our clients from slashing and has never had a slashing event.</p>
                            </div>
                        </li>
                        <li>
                            <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">What are the
                                advantages of DeFi Staking? <i class="bi bi-chevron-down icon-show"></i><i
                                    class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    1. Easy to use: You don't need to manage private keys, acquire resources, make
                                    trades, or perform other complicated tasks to participate in DeFi Staking.
                                    Bitstocks's one-stop service allows users to obtain generous online rewards without
                                    keeping an on-chain wallet. 2. No gas fee: Bitstocks Staking deposits users’ funds
                                    into smart contracts on users’ behalf, saving users on-chain gas fees.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
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
<?php /**PATH S:\jobs\bitstocks_trading\resources\views/frontend/stake.blade.php ENDPATH**/ ?>