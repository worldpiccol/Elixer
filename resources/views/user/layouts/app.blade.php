<!doctype html>
<html lang="en">
<head>

        <meta charset="utf-8" />
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hightrove Finance  | @yield('title') </title>
        <meta name="description"
            content="Hightrove Trading Limited is a global leader in online trading and investing, providing thousands of clients worldwide with access to forex, contracts for difference (CFDs), stockbroking and bonds markets via award-winning platforms.">
        <meta name="keywords"
            content="Hightrove Finance,regulated banking,forex trading,CFD trading,Forex,trading,online trading,mobile trading,licensed trading">
        <meta name="robots" content="index, no-follow">
        <meta name="theme-color" content="#282828">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <link rel="icon" href="{{ asset('frontend/img/favicon.ico') }}">

        <!-- plugin css -->
        <link href="{{ asset('dash/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />

         <!-- alertifyjs Css -->
        <link href="{{ asset('dash/assets/libs/alertifyjs/build/css/alertify.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- preloader css -->
        <link rel="stylesheet" href="{{ asset('dash/assets/css/preloader.min.css') }}" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="{{ asset('dash/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('dash/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('dash/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

        <script src="{{ asset('dash/assets/libs/jquery/jquery.min.js') }}"></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js' integrity='sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==' crossorigin='anonymous'></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js" integrity="sha512-ElRFoEQdI5Ht6kZvyzXhYG9NqjtkmlkfYk0wr6wHxU9JEHakS7UJZNeml5ALk+8IKlU6jDgMabC3vkumRokgJA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>

    <body>

    <!-- <body data-layout="horizontal"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">


            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="{{ url('/dashboard') }}" class="logo logo-dark">
                                <span class="logo-sm">
                                       <img class="" src="frontend/assets/img/logo11.png" width="170" srcset=""
                                alt="" />
                                </span>
                                <span class="logo-lg">
                                       <img class="" src="frontend/assets/img/logo11.png" width="170" srcset=""
                                alt="" />
                                </span>
                            </a>
                            <a href="{{ url('/dashboard') }}" class="logo logo-light">
                                <span class="logo-sm">
                                       <img class="" src="frontend/assets/img/logo11.png" width="150" srcset=""
                                alt="" />
                                </span>
                                <span class="logo-lg">
                                       <img class="" src="frontend/assets/img/logo11.png" width="150 " srcset=""
                                alt="" />
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                    </div>

                    <div class="d-flex">


                        <div class="dropdown d-none d-sm-inline-block">
                            <button type="button" class="btn header-item" id="mode-setting-btn">
                                <i data-feather="moon" class="icon-lg layout-mode-dark"></i>
                                <i data-feather="sun" class="icon-lg layout-mode-light"></i>
                            </button>
                        </div>


                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item bg-soft-light border-start border-end" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="{{ auth()->user()->avarta }}"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium">
                                    @if (empty(auth()->user()->username))
                                        {{ auth()->user()->name }}
                                    @else
                                        {{ auth()->user()->username }}
                                    @endif
                                </span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="{{ route('user.account.profile') }}"><i class="mdi mdi-account-cowboy-hat-outline font-size-16 align-middle me-1"></i> Profile</a>
                                <a class="dropdown-item" href="{{ route('user.account.password') }}"><i class="mdi mdi-lock font-size-16 align-middle me-1"></i> Change Password</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="auth-logout.html"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a>
                            </div>
                        </div>

                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" data-key="t-menu">Menu</li>

                            <li>
                                <a href="{{ url('/dashboard') }}">
                                    <i data-feather="home"></i>
                                    <span data-key="t-dashboard">Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('user.deposit.create') }}">
                                    <i data-feather="log-in"></i>
                                    <span data-key="">Deposit</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('user.withdraw.create') }}">
                                    <i data-feather="log-out"></i>
                                    <span data-key="">Withdraw</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('user.wallet') }}">
                                    <i data-feather="hard-drive"></i>
                                    <span data-key="t-dashboard">Crypto Wallet</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="repeat"></i>
                                    <span data-key="">Transactions</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li>
                                        <a href="{{ route('user.transactions.index') }}">
                                            <span data-key="t-calendar">Transaction History</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('user.swap.history') }}">
                                            <span data-key="t-calendar">Swaps</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="bar-chart"></i>
                                    <span data-key="">Crypto Option</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li>
                                        <a href="{{ route('user.options.account') }}">
                                            <span data-key="t-calendar">Trade</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('user.options.history') }}">
                                            <span data-key="t-calendar">Histroy</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="activity"></i>
                                    <span data-key="t-apps">Investment</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">

                                    <li>
                                       <a href="javascript: void(0);" class="has-arrow" data-key="t-level-1-2">Crypto Staking</a>
                                        <ul class="sub-menu" aria-expanded="true">
                                            <li><a href="{{ route('user.invest.crypto') }}" data-key="t-level-2-1">Stakes</a></li>
                                            <li><a href="{{ route('user.invest.schemes') }}" data-key="t-level-2-2">Plans</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ route('user.invest.stocks') }}">
                                            <span data-key="">Stocks</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('user.invest.forex') }}">
                                            <span data-key="">Forex</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                             <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="gift"></i>
                                    <span data-key="t-apps">Rewards</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li>
                                        <a href="{{ route('user.rewards.index') }}">
                                            <span data-key="">Reward Center</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li>
                                <a href="{{ route('user.referrals') }}">
                                    <i data-feather="share-2"></i>
                                    <span data-key="t-horizontal">Referral</span>
                                </a>
                            </li>

                            <li>
                            <a href="{{ route('user.account.profile') }}">
                                    <i data-feather="settings"></i>
                                    <span data-key="t-horizontal">Account</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <div class="col-md-12">
                            @if (Session::has('success'))

                                <div class="alert text-center alert-success alert-dismissible fade show" role="alert">
                                    <i class="mdi mdi-check-all me-2"></i>
                                    {{ Session::get('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @elseif (Session::has('warning'))
                                <div class="alert text-center alert-warning alert-dismissible fade show" role="alert">
                                        <i class="mdi mdi-check-all me-2"></i>
                                        {{ Session::get('warning') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @elseif (Session::has('danger'))
                                <div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
                                        <i class="mdi mdi-check-all me-2"></i>
                                        {{ Session::get('danger') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @elseif (Session::has('info'))
                                <div class="alert alert-info alert-dismissible text-center fade show" role="alert">
                                        <i class="mdi mdi-check-all me-2"></i>
                                        {{ Session::get('info') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                        </div>

                        @yield('content')
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                 <p class="mb-0">&copy; {{ now()->year }}&nbsp; Hightrove Finance.</p>
                            </div>

                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->



        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->

        <script src="{{ asset('dash/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('dash/assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('dash/assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('dash/assets/libs/node-waves/waves.min.js') }}"></script>
        <script src="{{ asset('dash/assets/libs/feather-icons/feather.min.js') }}"></script>
        <!-- pace js -->
        <script src="{{ asset('dash/assets/libs/pace-js/pace.min.js') }}"></script>

        <!-- apexcharts -->
        <script src="{{ asset('dash/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

        <!-- Plugins js-->
        <script src="{{ asset('dash/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script src="{{ asset('dash/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js') }}"></script>

        <!-- alertifyjs js -->
        <script src="{{ asset('dash/assets/libs/alertifyjs/build/alertify.min.js') }}"></script>

        <script src="{{ asset('dash/assets/js/app.js') }}"></script>

        <script>
        $(document).ready(function () {

            $.fn.digits = function(){
                return this.each(function(){
                    $(this).text( $(this).text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") );
                })

            }
        });
    </script>

    </body>

</html>
