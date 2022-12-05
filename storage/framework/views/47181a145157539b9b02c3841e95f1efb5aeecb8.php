<!Doctype html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Bitstocks Trading Limited | Our Company</title>
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


</head>
<style>
    body {
        background: #fff;
        color: #2f3138;
        font-family: "Open Sans", sans-serif;
    }

    a {
        color: #f82249;
        text-decoration: none;
        transition: 0.5s;
    }

    a:hover,
    a:active,
    a:focus {
        color: #f8234a;
        outline: none;
        text-decoration: none;
    }

    p {
        padding: 0;
        margin: 0 0 30px 0;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "Raleway", sans-serif;
        font-weight: 400;
        margin: 0 0 20px 0;
        padding: 0;
        color: #0e1b4d;
    }

    .main-page {
        margin-top: 70px;
    }

    /* Prelaoder */
    #preloader {
        position: fixed;
        left: 0;
        top: 0;
        z-index: 999;
        width: 100%;
        height: 100%;
        overflow: visible;
        background: #fff url("img/preloader.html") no-repeat center center;
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
        background: #f82249;
        width: 40px;
        height: 40px;
        border-radius: 50px;
        transition: all 0.4s;
    }

    .back-to-top i {
        font-size: 28px;
        color: #fff;
        line-height: 0;
    }

    .back-to-top:hover {
        background: #f94a6a;
        color: #fff;
    }

    .back-to-top.active {
        visibility: visible;
        opacity: 1;
    }

    /* Sections Header
--------------------------------*/
    .section-header {
        margin-bottom: 60px;
        position: relative;
        padding-bottom: 20px;
    }

    .section-header::before {
        content: "";
        position: absolute;
        display: block;
        width: 60px;
        height: 5px;
        background: #f82249;
        bottom: 0;
        left: calc(50% - 25px);
    }

    .section-header h2 {
        font-size: 36px;
        text-transform: uppercase;
        text-align: center;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .section-header p {
        text-align: center;
        padding: 0;
        margin: 0;
        font-size: 18px;
        font-weight: 500;
        color: #9195a2;
    }

    .section-with-bg {
        background-color: #f6f7fd;
    }

    /*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
    #header {
        height: 90px;
        position: fixed;
        left: 0;
        top: 0;
        right: 0;
        transition: all 0.5s;
        z-index: 997;
    }

    #header.header-scrolled,
    #header.header-inner {
        background: rgba(6, 12, 34, 0.98);
        height: 70px;
    }

    #header #logo h1 {
        font-size: 36px;
        margin: 0;
        font-family: "Raleway", sans-serif;
        font-weight: 700;
        letter-spacing: 3px;
        text-transform: uppercase;
    }

    #header #logo h1 span {
        color: #f82249;
    }

    #header #logo h1 a,
    #header #logo h1 a:hover {
        color: #fff;
    }

    #header #logo img {
        padding: 0;
        margin: 0;
        max-height: 40px;
    }

    @media (max-width: 992px) {
        #header #logo img {
            max-height: 30px;
        }
    }

    /*--------------------------------------------------------------
# Buy Tickets
--------------------------------------------------------------*/
    .buy-tickets {
        color: #fff;
        background: #f82249;
        padding: 7px 22px;
        margin: 0 0 0 15px;
        border-radius: 50px;
        border: 2px solid #f82249;
        transition: all ease-in-out 0.3s;
        font-weight: 500;
        line-height: 1;
        font-size: 13px;
        white-space: nowrap;
    }

    .buy-tickets:hover {
        background: none;
        color: #fff;
    }

    .buy-tickets:focus {
        color: #fff;
    }

    @media (max-width: 992px) {
        .buy-tickets {
            margin: 0 15px 0 0;
        }
    }

    /*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
    /**
* Desktop Navigation
*/
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
            background: url("<?php echo e(asset('frontend/img/Event_Header.jpg')); ?>") top center;
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

    @-webkit-keyframes pulsate-btn {
        0% {
            transform: scale(0.6, 0.6);
            opacity: 1;
        }

        100% {
            transform: scale(1, 1);
            opacity: 0;
        }
    }

    @keyframes  pulsate-btn {
        0% {
            transform: scale(0.6, 0.6);
            opacity: 1;
        }

        100% {
            transform: scale(1, 1);
            opacity: 0;
        }
    }

    /*--------------------------------------------------------------
# About Section
--------------------------------------------------------------*/
    #about {
        background: url("<?php echo e(asset('frontend/img/about-bg.jpg')); ?>");
        background-size: cover;
        overflow: hidden;
        position: relative;
        color: #fff !important;
        padding: 60px 0 40px 0;
    }

    @media (min-width: 1024px) {
        #about {
            background-attachment: fixed;
        }
    }

    #about:before {
        content: "";
        /* background: rgba(13, 20, 41, 0.8); */
        position: absolute;
        bottom: 0;
        top: 0;
        left: 0;
        right: 0;
    }

    #about h2 {
        font-size: 36px;
        font-weight: bold;
        margin-bottom: 10px;
        color: #fff;
    }

    #about h3 {
        font-size: 18px;
        font-weight: bold;
        text-transform: uppercase;
        margin-bottom: 10px;
        color: #fff;
    }

    #about p {
        font-size: 14px;
        margin-bottom: 20px;
        color: #fff !important;
    }


    /*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
    #herod {
        width: 100%;
        height: 70vh;
        background: url(img/bsv.jpg) top center;
        background-size: cover;
        overflow: hidden;
        position: relative;
    }

    @media (min-width: 1024px) {
        #herod {
            background-attachment: fixed;
        }
    }

    #herod:before {
        content: "";
        background: rgba(6, 12, 34, 0.8);
        position: absolute;
        bottom: 0;
        top: 0;
        left: 0;
        right: 0;
    }

    #herod .hero-container {
        position: absolute;
        bottom: 0;
        left: 0;
        top: 70px;
        right: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        text-align: center;
        padding: 0 15px;
    }

    @media (max-width: 991px) {
        #herod .hero-container {
            top: 50px;
        }
    }

    #herod h1 {
        color: #fff;
        font-family: "Raleway", sans-serif;
        font-size: 56px;
        font-weight: 600;

    }

    #herod span {
        color: #f82249;
        font-weight: 700;
        font-size: 20px;
    }

    @media (max-width: 991px) {
        #herod h1 {
            font-size: 34px;
        }
    }

    #herod p {
        color: #ebebeb;
        font-weight: 700;
        font-size: 20px;
    }

    @media (max-width: 991px) {
        #herod p {
            font-size: 16px;
        }
    }



    #herod .about-btn {
        font-family: "Raleway", sans-serif;
        font-weight: 500;
        font-size: 14px;
        letter-spacing: 1px;
        display: inline-block;
        padding: 12px 32px;
        border-radius: 50px;
        transition: 0.5s;
        line-height: 1;
        margin: 10px;
        color: #fff;
        -webkit-animation-delay: 0.8s;
        animation-delay: 0.8s;
        border: 2px solid #f82249;
    }

    #herod .about-btn:hover {
        background: #f82249;
        color: #fff;
    }

    @-webkit-keyframes pulsate-btn {
        0% {
            transform: scale(0.6, 0.6);
            opacity: 1;
        }

        100% {
            transform: scale(1, 1);
            opacity: 0;
        }
    }

    @keyframes  pulsate-btn {
        0% {
            transform: scale(0.6, 0.6);
            opacity: 1;
        }

        100% {
            transform: scale(1, 1);
            opacity: 0;
        }
    }

    /*--------------------------------------------------------------
# Speakers Section
--------------------------------------------------------------*/
    #speakers {
        padding: 60px 0 30px 0;
    }

    #speakers .speaker {
        position: relative;
        overflow: hidden;
        margin-bottom: 30px;
    }

    #speakers .speaker .details {
        background: rgba(6, 12, 34, 0.76);
        position: absolute;
        left: 0;
        bottom: -40px;
        right: 0;
        text-align: center;
        padding-top: 10px;
        transition: all 300ms cubic-bezier(0.645, 0.045, 0.355, 1);
    }

    #speakers .speaker .details h3 {
        color: #fff;
        font-size: 22px;
        font-weight: 600;
        margin-bottom: 5px;
    }

    #speakers .speaker .details p {
        color: #fff;
        font-size: 15px;
        margin-bottom: 10px;
        font-style: italic;
    }

    #speakers .speaker .details .social {
        height: 40px;
    }

    #speakers .speaker .details .social i {
        line-height: 0;
        margin: 0 2px;
    }

    #speakers .speaker .details a {
        color: #fff;
    }

    #speakers .speaker .details a:hover {
        color: #f82249;
    }

    #speakers .speaker:hover .details {
        bottom: 0;
    }

    #speakers-details {
        padding: 60px 0;
    }

    #speakers-details .details h2 {
        color: #112363;
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 10px;
    }

    #speakers-details .details .social {
        margin-bottom: 15px;
    }

    #speakers-details .details .social a {
        background: #e9edfb;
        color: #112363;
        line-height: 1;
        display: inline-block;
        text-align: center;
        border-radius: 50%;
        width: 36px;
        height: 36px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    #speakers-details .details .social a:hover {
        background: #f82249;
        color: #fff;
    }

    #speakers-details .details .social a i {
        font-size: 16px;
        line-height: 0;
    }

    #speakers-details .details p {
        color: #112363;
        font-size: 15px;
        margin-bottom: 10px;
    }


    /*--------------------------------------------------------------
# Schedule Section
--------------------------------------------------------------*/
    #schedule {
        padding: 60px 0 60px 0;
    }

    #schedule .nav-tabs {
        text-align: center;
        margin: auto;
        display: block;
        border-bottom: 0;
        margin-bottom: 30px;
    }

    #schedule .nav-tabs li {
        display: inline-block;
        margin-bottom: 0;
    }

    #schedule .nav-tabs a {
        border: none;
        border-radius: 50px;
        font-weight: 600;
        background-color: #0e1b4d;
        color: #fff;
        padding: 10px 100px;
    }

    @media (max-width: 991px) {
        #schedule .nav-tabs a {
            padding: 8px 60px;
        }
    }

    @media (max-width: 767px) {
        #schedule .nav-tabs a {
            padding: 8px 50px;
        }
    }

    @media (max-width: 480px) {
        #schedule .nav-tabs a {
            padding: 8px 30px;
        }
    }

    #schedule .nav-tabs a.active {
        background-color: #f82249;
        color: #fff;
    }

    #schedule .sub-heading {
        text-align: center;
        font-size: 18px;
        font-style: italic;
        margin: 0 auto 30px auto;
    }

    @media (min-width: 991px) {
        #schedule .sub-heading {
            width: 75%;
        }
    }

    #schedule .tab-pane {
        transition: ease-in-out 0.2s;
    }

    #schedule .schedule-item {
        border-bottom: 1px solid #cad4f6;
        padding-top: 15px;
        padding-bottom: 15px;
        transition: background-color ease-in-out 0.3s;
    }

    #schedule .schedule-item:hover {
        background-color: #fff;
    }

    #schedule .schedule-item time {
        padding-bottom: 5px;
        display: inline-block;
    }

    #schedule .schedule-item .speaker {
        width: 60px;
        height: 60px;
        overflow: hidden;
        border-radius: 50%;
        float: left;
        margin: 0 10px 10px 0;
    }

    #schedule .schedule-item .speaker img {
        height: 100%;
        transform: translateX(-50%);
        margin-left: 50%;
        transition: all ease-in-out 0.3s;
    }

    #schedule .schedule-item h4 {
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 5px;
    }

    #schedule .schedule-item h4 span {
        font-style: italic;
        color: #19328e;
        font-weight: normal;
        font-size: 16px;
    }

    #schedule .schedule-item p {
        font-style: italic;
        color: #152b79;
        margin-bottom: 0;
    }

    /*--------------------------------------------------------------
# Venue Section
--------------------------------------------------------------*/
    #venue {
        padding: 60px 0;
    }

    #venue .container-fluid {
        margin-bottom: 3px;
    }

    #venue .venue-map iframe {
        width: 100%;
        height: 100%;
        min-height: 300px;
    }

    #venue .venue-info {
        background: url("img/venue-info-bg.html") top center no-repeat;
        background-size: cover;
        position: relative;
        padding-top: 60px;
        padding-bottom: 60px;
    }

    #venue .venue-info:before {
        content: "";
        background: rgba(13, 20, 41, 0.8);
        position: absolute;
        bottom: 0;
        top: 0;
        left: 0;
        right: 0;
    }

    #venue .venue-info h3 {
        font-size: 36px;
        font-weight: 700;
        color: #fff;
    }

    @media (max-width: 574px) {
        #venue .venue-info h3 {
            font-size: 24px;
        }
    }

    #venue .venue-info p {
        color: #fff;
        margin-bottom: 0;
    }

    #venue .venue-gallery-container {
        padding-right: 12px;
    }

    #venue .venue-gallery {
        overflow: hidden;
        border-right: 3px solid #fff;
        border-bottom: 3px solid #fff;
    }

    #venue .venue-gallery img {
        transition: all ease-in-out 0.4s;
    }

    #venue .venue-gallery:hover img {
        transform: scale(1.1);
    }

    /*--------------------------------------------------------------
# Hotels Section
--------------------------------------------------------------*/
    #hotels {
        padding: 60px 0;
    }

    #hotels .hotel {
        border: 1px solid #e0e5fa;
        background: #fff;
        margin-bottom: 30px;
    }

    #hotels .hotel:hover .hotel-img img {
        transform: scale(1.1);
    }

    #hotels .hotel-img {
        overflow: hidden;
        margin-bottom: 15px;
    }

    #hotels .hotel-img img {
        transition: 0.3s ease-in-out;
    }

    #hotels h3 {
        font-weight: 600;
        font-size: 20px;
        margin-bottom: 5px;
        padding: 0 20px;
    }

    #hotels a {
        color: #152b79;
    }

    #hotels a:hover {
        color: #f82249;
    }

    #hotels .stars {
        padding: 0 20px;
        margin-bottom: 5px;
    }

    #hotels .stars i {
        color: #ffc31d;
    }

    #hotels p {
        padding: 0 20px;
        margin-bottom: 20px;
        color: #060c22;
        font-style: italic;
        font-size: 15px;
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


    /*--------------------------------------------------------------
# Buy Tickets Section
--------------------------------------------------------------*/
    #buy-tickets {
        padding: 60px 0;
    }

    #buy-tickets .card {
        border: none;
        border-radius: 5px;
        transition: all 0.3s ease-in-out;
        box-shadow: 0 10px 25px 0 rgba(6, 12, 34, 0.1);
    }

    #buy-tickets .card:hover {
        box-shadow: 0 10px 35px 0 rgba(6, 12, 34, 0.2);
    }

    #buy-tickets .card hr {
        margin: 25px 0;
    }

    #buy-tickets .card .card-title {
        margin: 10px 0;
        font-size: 14px;
        letter-spacing: 1px;
        font-weight: bold;
    }

    #buy-tickets .card .card-price {
        font-size: 48px;
        margin: 0;
    }

    #buy-tickets .card ul li {
        margin-bottom: 20px;
    }

    #buy-tickets .card .text-muted {
        opacity: 0.7;
    }

    #buy-tickets .card .btn {
        font-size: 15px;
        border-radius: 50px;
        padding: 10px 40px;
        transition: all 0.2s;
        background-color: #f82249;
        border: 0;
        color: #fff;
    }

    #buy-tickets .card .btn:hover {
        background-color: #e0072f;
    }

    #buy-tickets #buy-ticket-modal input,
    #buy-tickets #buy-ticket-modal select {
        border-radius: 0;
    }

    #buy-tickets #buy-ticket-modal .btn {
        font-size: 15px;
        border-radius: 50px;
        padding: 10px 40px;
        transition: all 0.2s;
        background-color: #f82249;
        border: 0;
        color: #fff;
    }

    #buy-tickets #buy-ticket-modal .btn:hover {
        background-color: #e0072f;
    }
</style>


<body>

    <?php echo $__env->make('frontend.panels.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section id="hero">
        <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
            <h1>WE'RE ON A MISSION</h1>
            <h2>A mission to harness the power of Bitcoin and technology to enable individual sovereignty and eventually garner the next evolution of humanity. </h2>
        </div>
    </section>
    <main id="main">

        <section id="about">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-6">
                        <h2>Bitstocks</h2>
                        <p>As our understanding of the boundless potential of Bitcoin has developed and deepened, so too
                            has our vision.</p>
                        <p>By leveraging Bitcoin and the advanced technologies at our disposal it's possible to
                            reimagine, redefine and reengineer our lives, and our world.
                        </p>
                        <p>Global leaders of the past and present have ransomed our future in the pursuit of profits. We
                            have been manipulated, influenced and controlled by a global pyramid of power that
                            infiltrates just about every aspect of our lives; our education, our entertainment, our
                            societal beliefs and our finances.</p>
                        <p>But we are the new generation.</p>
                        <p>We are conscious and choose to fight with ‘light, harnessing the tools of humanity; the
                            incredible technologies available to us to steer the evolution of humankind and create a new
                            world.</p>
                        <p>A world where everyone has a role.</p>
                        <p>Bitstocks Trading Limited is committed to leading this wave of change; by connecting with,
                            educating and empowering younger generations to reimagine, redefine and reengineer their
                            lives, and the world.</p>
                    </div>
                    <div class="col-lg-3">
                        <h3>Office</h3>
                        <p>Queen Elizabeth olympic Park Plexal, London E20 3BS England</p>
                    </div>
                    <div class="col-lg-3">
                        <h3>Phone</h3>
                        <p>+44(0)7716549288</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="schedule" class="section-with-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Our Principles</h2>
                    <p>One day, everyone will become involved with crypto</p>
                </div>
                <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
                    <li class="nav-item">
                        <a class="nav-link active" href="#day-1" role="tab" data-bs-toggle="tab">Educate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#day-2" role="tab" data-bs-toggle="tab">Empower</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#day-3" role="tab" data-bs-toggle="tab">Evolve</a>
                    </li>
                </ul>
                <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">

                    <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">
                        <div class="row schedule-item">
                            <div class="col-md-2"><time></time></div>
                            <div class="col-md-10">
                                <h4 style="color:red;">We believe in learning to teach, and teaching to learn. Bitstocks
                                    Media is our channel to educate; to connect with the world, to maintain the
                                    integrity of our perspective, and to share our intellectual truth.</h4>
                                <p></p>
                            </div>
                        </div>
                    </div>


                    <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-2">
                        <div class="row schedule-item">
                            <div class="col-md-2"><time></time></div>
                            <div class="col-md-10">
                                <h4 style="color:red;">We seek to provide access to tools and information that allows
                                    people to empower themselves (both financially and philosophically) as a means
                                    towards economic and intellectual sovereignty. </h4>
                                <p></p>
                            </div>
                        </div>
                    </div>


                    <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-3">
                        <div class="row schedule-item">
                            <div class="col-md-2"><time></time></div>
                            <div class="col-md-10">
                                <h4 style="color:red;">We aim to actively contribute to the evolution of humanity
                                    through the application and provision of advanced technologies and tools that have a
                                    positive impact at both an individual and collective level.</h4>
                                <p></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="herod">
            <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
                <h1 class="mb-4 pb-0">Bitcoin Satoshi's Vision<br><span></span> </h1>
                <p class="mb-4 pb-0">The traditional financial system is built on debt and designed to strip individuals
                    of their financial sovereignty. We never truly own the money we earn and save. It remains the
                    property of the banks and can be seized at any time.</p>
                <p class="mb-4 pb-0">By combining the power of Bitcoin and the Internet, we're building Bitstocks
                    Trading Limited, an alternative ecosystem. One that has sovereignty embedded in its blueprint and
                    allows us to, finally, take ownership of our money.</p>
            </div>
        </section>

        <section id="speakers">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <p>Meet The Team</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="speaker" data-aos="fade-up" data-aos-delay="100">
                            <img src="<?php echo e(asset('frontend/img/micheal.jpg')); ?>" alt="Speaker 1" class="img-fluid">
                            <div class="details">
                                <h3><a href="#">Michael Hudson</a></h3>
                                <p>CEO Bitstocks</p>
                                <div class="social">
                                    <a href="#"><i class="bi bi-twitter"></i></a>
                                    <a href="#"><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="speaker" data-aos="fade-up" data-aos-delay="200">
                            <img src="<?php echo e(asset('frontend/img/david.jpg')); ?>" alt="Speaker 2" class="img-fluid">
                            <div class="details">
                                <h3><a href="#">David Arakelian</a></h3>
                                <p>CTO</p>
                                <div class="social">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="speaker" data-aos="fade-up" data-aos-delay="300">
                            <img src="<?php echo e(asset('frontend/img/nicola.jpg')); ?>" alt="Speaker 3" class="img-fluid">
                            <div class="details">
                                <h3><a href="#">Nichola Shillingford</a></h3>
                                <p>Head of Marketing</p>
                                <div class="social">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="speaker" data-aos="fade-up" data-aos-delay="100">
                            <img src="<?php echo e(asset('frontend/img/lara.jpg')); ?>" alt="Speaker 4" class="img-fluid">
                            <div class="details">
                                <h3><a href="#">Lara Port </a></h3>
                                <p>Careers & Wellbeing</p>
                                <div class="social">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="speaker" data-aos="fade-up" data-aos-delay="200">
                            <img src="<?php echo e(asset('frontend/img/damien.jpg')); ?>" alt="Speaker 5" class="img-fluid">
                            <div class="details">
                                <h3><a href="#">Damien Hartley</a></h3>
                                <p>Head of Brand & Design</p>
                                <div class="social">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="speaker" data-aos="fade-up" data-aos-delay="300">
                            <img src="<?php echo e(asset('frontend/img/james.jpg')); ?>" alt="Speaker 6" class="img-fluid">
                            <div class="details">
                                <h3><a href="speaker-details.html">James Coughlan</a></h3>
                                <p>Relationship Manager</p>
                                <div class="social">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
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
<?php /**PATH S:\jobs\bitstocks_trading\resources\views/frontend/about.blade.php ENDPATH**/ ?>