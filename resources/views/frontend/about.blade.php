<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Hightrove is a UK-based investment manager with offices in USA, Canada and Switzerland. We are a dynamic group whose main focus is to provide our clients with the best possible service">
    <meta name="keywords" content="Hightrove, managed investments, investment, crypto investment, btc, eth, ">
    <meta name="author" content="">
    <title> Hightrove | About Us</title>
    <link rel="shortcut icon" href="frontend/assets/img/favicon.jpg">
    <link rel="stylesheet" href="frontend/assets/css/plugins.css">
    <link rel="stylesheet" href="frontend/assets/css/style.css">
</head>

<body>
    <div class="content-wrapper">
        <header class="wrapper bg-gray">
            <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
                <div class="container flex-lg-row flex-nowrap align-items-center">
                    <div class="navbar-brand w-100">
                        <a href="{{ url('/') }}">
                            <img src="frontend/assets/img/logo11.png" width="170" alt="" />
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
                                    <a href="mailto:support@hightrove.finance" class="link-inverse">support@hightrove.finance</a>
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
        <section class="wrapper bg-gray">
            <div class="container pt-10 pt-md-14 text-center">
                <div class="row">
                    <div class="col-xl-6 mx-auto">
                        <h1 class="display-1 mb-4">Hello! This is HighTrove</h1>
                        <p class="lead fs-lg mb-0">A company turning ideas into beautiful things.</p>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
            <figure class="position-absoute" style="bottom: 0; left: 0; z-index: 2;"><img
                    src="frontend/assets/img/photos/bg12.jpg" alt="" /></figure>
        </section>
        <!-- /section -->
        <section class="wrapper bg-light angled upper-end">
            <div class="container py-14 py-md-16">
                <div class="row align-items-center">
                    <div class="col-lg-6 position-relative order-lg-2">
                        <div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1"
                            style="top: 3rem; left: 5.5rem"></div>
                        <div class="overlap-grid overlap-grid-2">
                            <div class="item">
                                <figure class="rounded shadow"><img src="frontend/assets/img/photos/about20.jpg"
                                    alt=""></figure>
                            </div>
                            <div class="item">
                                <figure class="rounded shadow"><img src="frontend/assets/img/photos/about7.jpg"
                                         alt=""></figure>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                    <div class="col-lg-6">

                        <h2 class="display-4 mb-3">About Us</h2>
                        <p class="">
                            High Trove is a UK based investment manager with offices in the USA, Canada and Switzerland. We are a dynamic group
                            whose main focus is to provide our clients with the best possible services, by applying a systematic and quantitative
                            approach to investment management with the aim of generating high-quality and diversifying alpha for our clients’
                            portfolios. We offer long term and short term investment opportunities. High Trove was established in 2002, initially
                            offering trading services in stocks, bonds and shares, before expanding to Forex trading in 2005. At the advent of
                            Bitcoin in 2008, we further extended our tentacles to the crypto-trading market making us one of the earlier pioneers in
                            crypto trading. High Trove is currently managed by a senior team with extensive experience in the development and
                            implementation of systematic investment strategies. Our directors together with our employees and Employees Benefit
                            Trust, currently owns 98% of the company assets. At High Trove we employ the expertise of a team of over 130
                            professionals and invest heavily in the ongoing research-driven evolution of its quantitative alpha-generating systems
                            and their efficient implementation across a wide range of liquid asset classes. The company emphasises strong corporate
                            governance and the provision of first class investor service to a client base which includes many of the world’s leading
                            institutional investors.
                        </p>

                        </div>
                        <!--/.row -->
                    </div>
                    <!--/column -->
                    <div class="row">
                        <p>High Trove is a profitable and Trusted investment program, established by a strong team of
                        highly skilled traders and investment consultants in the offline and online investment market. We put your investments
                        in new highly remunerative innovative projects, which offers great returns along. Today our company has a professional
                        team to develop a business. We know how much, where and when to put your investments. And we know how to achieve maximum
                        income. We are constantly diversifying our investment portfolio and building stronger connections worldwide. When one
                        opportunity fails, you can be rest assured that our strategy of diversification continues to keep our business
                        profitable and growing. You have the opportunity right now to join a revolutionary investing opportunity that is sure to
                        continue growing and mature into the most successful high yield opportunities in the future.… Our Support Department is
                        at your disposal 24 hours a day, 7 days a week. All you need to do is to make a deposit using your most convenient
                        payment processor and get in from time to time to withdraw profit. We make use of up-to-date anti-hacker technologies,
                        to safely receive your deposit and pay out profits. Join High Trove today and Let your money work for you. If you have
                        any problems or further questions you are most welcome to contact us through our contact channels.</p>
                    </div>
                </div>
                <!--/.row -->
            </div>
            <!-- /.container -->
        </section>

        <!-- /section -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="bg-dark text-inverse">
        <div class="container py-13 py-md-15">
            <div class=""></div>
            <div class="row ">
                <div class="col-md-5">
                    <div class="widget">
                        <img class="mb-4" src="frontend/assets/img/logo11.png" width="200"
                            alt="" />
                        <p class="mb-4">Hightrove is a UK-based investment manager with offices in USA, Canada and Switzerland. We are a dynamic group whose
                        main focus is to provide our clients with the best possible service, by applying a systematic and quantitative approach
                        to investment management, with the aim of generating high-quality and diversifying alpha for our clients’ portfolios.</p>

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
                            <li><a href="{{ url('/terms') }}">Terms and condition</a></li>
                            <li><a href="{{ url('faq') }}">FAQ</a></li>
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
