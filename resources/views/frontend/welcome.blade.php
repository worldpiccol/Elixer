<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Hightrove is a UK-based investment manager with offices in USA, Canada and Switzerland. We are a dynamic group whose main focus is to provide our clients with the best possible service">
    <meta name="keywords"
        content="Hightrove, managed investments, investment, crypto investment, btc, eth, ">
    <meta name="author" content="">
    <title> Hightrove | Smartly Managed Investments.</title>
    <link rel="shortcut icon" href="frontend/assets/img/favicon.jpg">
    <link rel="stylesheet" href="frontend/assets/css/plugins.css">
    <link rel="stylesheet" href="frontend/assets/css/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>

<body>
    <div class="content-wrapper">
        <header class="wrapper bg-soft-primary">
            <nav class="navbar navbar-expand-lg center-nav transparent position-absolute navbar-dark caret-none">
                <div class="container flex-lg-row flex-nowrap align-items-center">
                    <div class="navbar-brand w-100">
                        <a href="{{ url('/') }}">
                            <img class="logo-dark" src="frontend/assets/img/logo11.png" width="170" srcset=""
                                alt="" />
                            <img class="logo-light" width="170" src="frontend/assets/img/logo11.png"
                                srcset="" alt="" />
                        </a>
                    </div>
                    <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                        <div class="offcanvas-header d-lg-none">
                            <h3 class="text-white fs-30 mb-0">Hightrove</h3>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/') }}">HOME</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('about-us') }}">ABOUT</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">SERVICES</a>
                                    <ul class="dropdown-menu">

                                        <li class="nav-item"><a class="dropdown-item" href="{{ url('/cryptocurrency-trading') }}">CRYPTOCURRENCY</a>
                                        </li>
                                        <li class="nav-item"><a class="dropdown-item" href="{{ url('forex-trading') }}">FOREX TRADING</a>
                                        </li>
                                        <li class="nav-item"><a class="dropdown-item" href="{{ url('real-estate') }}">REAL ESTAE</a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">REGISTER</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">LOGIN</a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="{{ url('faq') }}">FAQ</a>
                                </li> --}}
                            </ul>
                            <!-- /.navbar-nav -->
                            <div class="offcanvas-footer d-lg-none">
                                <div>
                                    <a href="mailto:support@hightrove.finance"
                                        class="link-inverse">support@hightrove.finance</a>
                                    <br /> <a href="tel:+19174730728">+19174730728</a><br />
                                    <!-- /.social -->
                                </div>
                            </div>
                            <!-- /.offcanvas-footer -->
                        </div>
                        <!-- /.offcanvas-body -->
                    </div>
                    <!-- /.navbar-collapse -->
                    <div class="navbar-other w-100 d-flex ms-auto">
                        <ul class="navbar-nav flex-row align-items-center ms-auto">

                            <li class="nav-item d-lg-none">
                                <button class="hamburger offcanvas-nav-btn"><span></span></button>
                            </li>
                        </ul>
                        <!-- /.navbar-nav -->
                    </div>
                    <!-- /.navbar-other -->
                </div>
                <!-- /.container -->
            </nav>
            <!-- /.navbar -->
        </header>
        <!-- /header -->
        <section class="wrapper bg-dark">
            <div class="swiper-container swiper-hero dots-over" data-margin="0" data-autoplay="true"
                data-autoplaytime="7000" data-nav="true" data-dots="true" data-items="1">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image"
                            data-image-src="frontend/assets/img/bank.jpg">
                            <div class="container h-100">
                                <div class="row h-100">
                                    <div
                                        class="col-md-10 offset-md-1 col-lg-7 offset-lg-0 col-xl-6 col-xxl-5 text-center text-lg-start justify-content-center align-self-center align-items-start">
                                        <h2
                                            class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">
                                        Planning for the future</h2>
                                        <p
                                            class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">
                                            Highly skilled industrial expertise assisting you in meeting your financial objectives.</p>
                                        <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="#"
                                                class="btn btn-sm btn-outline-white rounded-pill">Get Started</a></div>
                                    </div>
                                    <!--/column -->
                                </div>
                                <!--/.row -->
                            </div>
                            <!--/.container -->
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image"
                            data-image-src="frontend/assets/img/group.jpg">
                            <div class="container h-100">
                                <div class="row h-100">
                                    <div
                                        class="col-md-11 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center justify-content-center align-self-center">
                                        <h2
                                            class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">
                                            Enhance your investment decisions.</h2>
                                        <p
                                            class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">
                                            Explore financial growth and protection strategies</p>
                                        <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="#"
                                                class="btn btn-sm btn-outline-white rounded-pill">Get Started</a></div>
                                    </div>
                                    <!--/column -->
                                </div>
                                <!--/.row -->
                            </div>
                            <!--/.container -->
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image"
                            data-image-src="frontend/assets/img/slider3.jpg">
                            <div class="container h-100">
                                <div class="row h-100">
                                    <div
                                        class="col-md-10 offset-md-1 col-lg-7 offset-lg-5 col-xl-6 offset-xl-6 col-xxl-5 offset-xxl-6 text-center text-lg-start justify-content-center align-self-center align-items-start">
                                        <h2
                                            class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">
                                            Just sit and relax.</h2>
                                        <p
                                            class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">
                                        Start investing with us today and put your money to work for you.</p>
                                        <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="#"
                                                class="btn btn-sm btn-outline-white rounded-pill">Get Started</a></div>
                                    </div>
                                    <!--/column -->
                                </div>
                                <!--/.row -->
                            </div>
                            <!--/.container -->
                        </div>
                        <!--/.swiper-slide -->
                    </div>
                    <!--/.swiper-wrapper -->
                </div>
                <!-- /.swiper -->
            </div>
            <!-- /.swiper-container -->
        </section>
        <section class="wrapper bg-light">
            <div class="container py-14 py-md-18">
                <div class="row gx-lg-8 gx-xl-12 gy-12 align-items-center mb-10 mb-md-13">
                    <div class="col-lg-6 position-relative">
                        <!-- <div class="btn btn-circle btn-primary pe-none position-absolute counter-wrapper flex-column d-none d-md-flex"
                            style="top: 50%; left: 50%; transform: translate(-50%, -50%); width: 170px; height: 170px;">
                            <h3 class="text-white mb-1 mt-n2"><span class="counter counter-lg">20+</span></h3>
                            <p>Year Experience</p>
                        </div> -->
                        <div class="row gx-md-5 gy-5 align-items-center">
                            <div class="col-md-6">
                                <div class="row gx-md-5 gy-5">
                                    <div class="col-md-10 offset-md-2">
                                        <figure class="rounded"><img src="frontend/assets/img/photos/ab1.jpg"
                                                alt=""></figure>
                                    </div>
                                    <!--/column -->
                                    <div class="col-md-12">
                                        <figure class="rounded"><img src="frontend/assets/img/photos/ab2.jpg"
                                                 alt=""></figure>
                                    </div>
                                    <!--/column -->
                                </div>
                                <!--/.row -->
                            </div>
                            <!--/column -->
                            <div class="col-md-6">
                                <figure class="rounded"><img src="frontend/assets/img/photos/ab3.jpg"
                                     alt=""></figure>
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!--/column -->
                    <div class="col-lg-6">
                        <h3 class="display-4 mb-5">YOUR SATISFACTION DEFINES US</h3>
                        <p class="mb-7">Finding the best investment firm to work with can make or break your financial security. Whether you're investing a
                        little or a lot, your money is just as important to you, and it's critical to find a financial investment professional
                        you can rely on to steer you toward wise investment buys.</p>
                        <div class="row gy-3">
                            <div class="col-xl-6">
                                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                                    <li><span><i class="uil uil-check"></i></span><span>Seasoned financial experts and brokers.</span></li>
                                    <li class="mt-3"><span><i class="uil uil-check"></i></span><span>We are constantly hungry to learn new things and to impart the finest knowledge we can to our consumers.</span></li>
                                </ul>
                            </div>
                            <!--/column -->
                            <div class="col-xl-6">
                                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                                    <li><span><i class="uil uil-check"></i></span><span>Better investment decisions, informed by rigorous, proprietary macro-economic research and market analysis.</span></li>

                                </ul>
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
                <div class="row gx-lg-8 gx-xl-12 gy-8">
                    <div class="col-md-6 col-lg-4">
                        <div class="d-flex flex-row">
                            <div>
                                <img src="frontend/assets/img/icons/lineal/telephone-3.svg"
                                    class="svg-inject icon-svg icon-svg-sm text-primary me-4" alt="" />
                            </div>
                            <div>
                                <h4 class="mb-1">Consultation</h4>
                                <p class="mb-0">We assure you that it is our desire and intentions to keep the doors of consultation always and fully open.</p>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                    <div class="col-md-6 col-lg-4">
                        <div class="d-flex flex-row">
                            <div>
                                <img src="frontend/assets/img/icons/lineal/shield.svg"
                                    class="svg-inject icon-svg icon-svg-sm text-primary me-4" alt="" />
                            </div>
                            <div>
                                <h4 class="mb-1">Saving Adviser</h4>
                                <p class="mb-0">Our team of professionals are committed to guiding you in choosing plans that best suits your budget.</p>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                    <div class="col-md-6 col-lg-4">
                        <div class="d-flex flex-row">
                            <div>
                                <img src="frontend/assets/img/icons/lineal/analytics.svg"
                                    class="svg-inject icon-svg icon-svg-sm text-primary me-4" alt="" />
                            </div>
                            <div>
                                <h4 class="mb-1">Financial Strategy</h4>
                                <p class="mb-0">We all want wealth, but how do we achieve it? It starts with a successful Investment into an Opportunity which no one
                                else seems to see.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.row -->

            </div>
            <!-- /.container -->
        </section>
        <section class="wrapper bg-soft-ash">
            <div class="container pt-14 pb-14 pt-md-16">
                <div class="row text-center">
                    <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                        <h2 class="fs-16 text-uppercase text-muted mb-3">Why Trusting Us?</h2>
                        <h3 class="display-4 mb-10 px-xl-10">Solutions tailored to your needs.
                        </h3>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
                <div class="position-relative">
                    <div class="shape rounded-circle bg-soft-blue rellax w-16 h-16" data-rellax-speed="1"
                        style="bottom: -0.5rem; right: -2.2rem; z-index: 0;"></div>
                    <div class="shape bg-dot primary rellax w-16 h-17" data-rellax-speed="1"
                        style="top: -0.5rem; left: -2.5rem; z-index: 0;"></div>
                    <div class="row gx-md-5 gy-5 text-center">
                        <div class="col-md-6 col-xl-4">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <img src="frontend/assets/img/icons/lineal/search-2.svg"
                                        class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
                                    <h4>Financial Strategy</h4>
                                    <p class="mb-2">We all want wealth, but how do we achieve it? It starts with a successful Investment into an Opportunity which no one
                                    else seems to see.</p>

                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.card -->
                        </div>
                        <!--/column -->
                        <div class="col-md-6 col-xl-4">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <img src="frontend/assets/img/icons/lineal/briefcase.svg"
                                        class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="" />
                                    <h4>Tax Consultant</h4>
                                    <p class="mb-2">Wages are only medicine to poverty as you need other source of incomes in order to meet up with your Taxes and that is
                                    why you need our Investment Manager's.</p>

                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.card -->
                        </div>
                        <!--/column -->
                        <div class="col-md-6 col-xl-4">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <img src="frontend/assets/img/icons/lineal/award-2.svg"
                                        class="svg-inject icon-svg icon-svg-md text-green mb-3" alt="" />
                                    <h4>Retirement Advisor</h4>
                                    <p class="mb-2">Don't simply retire from something; have something to retire to. We are here to help you with that.</p>

                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.card -->
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!-- /.position-relative -->
            </div>
            <!-- /.container -->
        </section>
        <section class="wrapper bg-light angled lower-end">
            <div class="container py-8 py-md-16">
                <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
                    <div class="col-lg-6 position-relative order-lg-2">
                        <div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1"
                            style="top: 3rem; left: 5.5rem"></div>
                        <div class="overlap-grid overlap-grid-2">
                            <div class="item">
                                <figure class="rounded shadow"><img src="frontend/assets/img/photos/about2.jpg"
                                         alt=""></figure>
                            </div>
                            <div class="item">
                                <figure class="rounded shadow"><img src="frontend/assets/img/photos/about3.jpg"
                                         alt=""></figure>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                    <div class="col-lg-6">
                        <h2 class="display-4 mb-3">COMPREHENSIVE WEALTH MANAGEMENT</h2>
                        <p class="">At Hightrove Finance, our customers are put first at all times. Your own Client Relationship Officer is there for you
                        every step of the way whether you're delving into a specific issue, taking in the big picture, or balancing financial
                        opportunities and risks. Our objective is to fully understand your requirements and work with you to develop long-term
                        perspectives so that we can give you the best advice and react swiftly and efficiently, even if circumstances alter
                        unforeseenly.</p>

                    </div>
                    <!--/column -->
                </div>
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
        <section class="wrapper bg-soft-primary">
            <div class="container py-14 pt-md-17 pb-md-21">
                <div class="row gx-lg-8 gx-xl-12 gy-10 gy-lg-0 mb-2 align-items-end">
                    <div class="col-lg-4">
                        <h3 class="display-4 mb-0 pe-xxl-15">More Reasons To Work With Us</h3>
                    </div>
                    <!-- /column -->
                    <div class="col-lg-8 mt-lg-2">
                        <div class="row align-items-center counter-wrapper gy-6 text-center">
                            <div class="col-md-4">
                                <h3 class="counter counter-lg">26</h3>
                                <p>Associated Companies</p>
                            </div>
                            <!--/column -->
                            <div class="col-md-4">
                                <h3 class="counter counter-lg">13111+</h3>
                                <p>Happy Clients</p>
                            </div>
                            <!--/column -->
                            <div class="col-md-4">
                                <h3 class="counter counter-lg">13</h3>
                                <p>Awards Won</p>
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
        <section class="wrapper bg-light angled upper-end">
            <div class="container pt-16 position-relative">
                <div class="position-relative mt-n18 mt-md-n23 mb-16 mb-md-18">
                    <div class="shape rounded-circle bg-line primary rellax w-18 h-18" data-rellax-speed="1"
                        style="top: -2rem; right: -2.7rem; z-index:0;"></div>
                    <div class="shape rounded-circle bg-soft-primary rellax w-18 h-18" data-rellax-speed="1"
                        style="bottom: -1rem; left: -3rem; z-index:0;"></div>
                    <div class="card shadow-lg">
                        <div class="row gx-0">
                            <div class="col-lg-6 image-wrapper bg-image bg-cover rounded-top rounded-lg-start"
                                data-image-src="frontend/assets/img/photos/tm1.jpg">
                            </div>
                            <!--/column -->
                            <div class="col-lg-6">
                                <div class="p-10 p-md-11 p-lg-13">
                                    <div class="swiper-container dots-closer mb-4" data-margin="30" data-dots="true">
                                        <div class="swiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <blockquote class="icon icon-top fs-lg text-center">
                                                        <p>“I am completely new to investing, so this is like learning a new language to
                                                        me, hightrove has been a very suitable to me and my friends.”</p>
                                                        <div class="blockquote-details justify-content-center text-center">
                                                            <div class="info ps-0">
                                                                <h5 class="mb-1">Simmons Smith</h5>

                                                            </div>
                                                        </div>
                                                    </blockquote>
                                                </div>
                                                <!--/.swiper-slide -->
                                                <div class="swiper-slide">
                                                    <blockquote class="icon icon-top fs-lg text-center">
                                                        <p>"I’ve been a client at hightrove investment for many years, I appreciate the
                                                        courtesy from the staff, not only do they have an outstanding work ethic and their moral
                                                        standards are of the highest caliber, I would recommend hightrove to anyone without
                                                        Hesitation."</p>
                                                        <div class="blockquote-details justify-content-center text-center">
                                                            <div class="info ps-0">
                                                                <h5 class="mb-1">Evans Junior</h5>

                                                            </div>
                                                        </div>
                                                    </blockquote>
                                                </div>
                                                <!--/.swiper-slide -->
                                                <div class="swiper-slide">
                                                    <blockquote class="icon icon-top fs-lg text-center">
                                                        <p>"I travel a lot because for my work and usually don’t have much time to monitor
                                                        my account, I get emails of the progress, money is sent to me wherever I am and it’s just
                                                        perfect.. so I will advise everyone to look into hightrove."</p>
                                                        <div class="blockquote-details justify-content-center text-center">
                                                            <div class="info ps-0">
                                                                <h5 class="mb-1">Alex Norwick</h5>

                                                            </div>
                                                        </div>
                                                    </blockquote>
                                                </div>
                                                <!--/.swiper-slide -->
                                            </div>
                                            <!-- /.swiper-wrapper -->
                                        </div>
                                        <!-- /.swiper -->
                                    </div>
                                    <!-- /.swiper-container -->
                                </div>
                                <!--/div -->
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /div -->
                <!--/.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="bg-dark text-inverse">
        <div class="container py-13 py-md-14">
            <div class=""></div>
            <div class="row ">
                <div class="col-md-5">
                    <div class="widget">
                        <img class="mb-4" src="frontend/assets/img/logo11.png" width="200" alt="" />
                        <p class="mb-4">Hightrove is a UK-based investment manager with offices in USA, Canada and
                            Switzerland. We are a dynamic group whose
                            main focus is to provide our clients with the best possible service, by applying a
                            systematic
                            and quantitative approach
                            to investment management, with the aim of generating high-quality and diversifying alpha
                            for our
                            clients’ portfolios.</p>

                        <!-- /.social -->
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <!-- /column -->
                <div class="col-md-3 mb-4">
                    <div class="widget">
                        <h4 class="widget-title text-white mb-4">Learn More</h4>
                        <ul class="list-unstyled  mb-0">
                            <li><a href="mailto:support@hightrove.finance">Support</a></li>
                            <li><a href="#">Terms and condition</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-3">
                    <div class="widget">
                        <h4 class="widget-title text-white mb-3">Get in Touch</h4>
                        <address class="pe-xl-15 pe-xxl-17">Location:
                            3580 Logan Lane, Colorado.
                        </address>
                        <a href="mailto:support@hightrove.finance"> Mail: support@hightrove.finance</a><br />

                        <span><a href="tel:+19174730728">Phone: +19174730728</a></span>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <hr class="my-8" />
                <div class="col-md-12 text-center">
                    <span class="">© 2022 Hightrove Finance. All rights reserved.</span>
                </div>
            </div>
            <!--/.row -->

        </div>
        <!-- /.container -->
    </footer>
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <script src="frontend/assets/js/plugins.js"></script>
    <script src="frontend/assets/js/theme.js"></script>
</body>


</html>
