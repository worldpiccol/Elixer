
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

        <!-- preloader css -->
        <link rel="stylesheet" href="{{ asset('dash/assets/css/preloader.min.css') }}" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="{{ asset('dash/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('dash/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('dash/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
        <script src="{{ asset('dash/assets/libs/jquery/jquery.min.js') }}"></script>

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
                                       <img class="" src="frontend/assets/img/logo11.png" width="170" srcset=""
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
                                <span class="d-none d-xl-inline-block ms-1 fw-medium">{{ auth()->user()->name }}</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="{{ route('admin.profile.settings') }}"><i class="mdi mdi-cog font-size-16 align-middle me-1"></i> Profile Settings</a>
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
                                <a href="{{ route('admin.dashboard')}}">
                                    <i data-feather="home"></i>
                                    <span data-key="t-dashboard">Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.deposit.index') }}">
                                    <i data-feather="log-in"></i>
                                    <span data-key="">Deposit</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.withdrawal.index') }}">
                                    <i data-feather="log-out"></i>
                                    <span data-key="">Withdrawals</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.swap.index') }}">
                                    <i data-feather="percent"></i>
                                    <span data-key="">Swaps</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="gift"></i>
                                    <span data-key="t-apps">Reward Center</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li>
                                        <a href="{{ route('admin.coupon.list') }}">
                                            <span data-key="">Manage Coupons</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.coupon.create') }}">
                                            <span data-key="">Add Coupons</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="repeat"></i>
                                    <span data-key="">Transactions</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li>
                                        <a href="{{ route('admin.trans.index') }}">
                                            <span data-key="t-calendar">Transaction History</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.tran.create') }}">
                                            <span data-key="t-calendar">Add Transaction</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.referral.index') }}">
                                            <span data-key="t-calendar">referrals</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <li class="menu-title" data-key="t-menu">Investment</li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="bar-chart"></i>
                                    <span data-key="">Binary Trade</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li>
                                        <a href="{{ route('admin.binary.index') }}">
                                            <span data-key="t-calendar">Trade History</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.binary.schemes') }}">
                                            <span data-key="t-calendar">Binary Schemes</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.binary.create') }}">
                                            <span data-key="t-calendar">Create Binary Schemes</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="activity"></i>
                                    <span data-key="">Crypto Investment</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li>
                                        <a href="{{ route('admin.invest.index') }}">
                                            <span data-key="t-calendar">Investments</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.iv.schemes') }}">
                                            <span data-key="t-calendar">Crypto Schemes</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.iv.create') }}">
                                            <span data-key="t-calendar">Create Crypto Schemes</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-title" data-key="t-menu">Crypto</li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="dollar-sign"></i>
                                    <span data-key="">Cryptos</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li>
                                        <a href="{{ route('admin.crypto.list') }}">
                                            <span data-key="">Manage Cryptos</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.crypto.create') }}">
                                            <span data-key="">Add Crypto</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="gift"></i>
                                    <span data-key="t-apps">Wallet Addresses</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li>
                                        <a href="{{ route('admin.wallet.list') }}">
                                            <span data-key="">Manage Wallets</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.wallet.create') }}">
                                            <span data-key="">Add Wallet</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                              <li class="menu-title" data-key="t-menu">User Management</li>
                             <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="users"></i>
                                    <span data-key="">Manage Users</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li>
                                        <a href="{{ route('admin.users.list') }}">
                                            <span data-key="">Users (133)</span>
                                        </a>
                                    </li>
                                                                        <li>
                                        <a href="{{ route('admin.users.admins') }}">
                                            <span data-key="">Administrators (2)</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            {{-- <li class="menu-title" data-key="t-menu">Management</li>
                            <li>
                                <a href="#">
                                    <i data-feather="settings"></i>
                                    <span data-key="">Application Settings</span>
                                </a>
                            </li> --}}

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

                    @if (Session::has('success'))

                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <i class="mdi mdi-check-all me-2"></i>
                                    {{ Session::get('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @elseif (Session::has('warning'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <i class="mdi mdi-check-all me-2"></i>
                                    {{ Session::get('warning') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @elseif (Session::has('danger'))
                         <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="mdi mdi-check-all me-2"></i>
                                    {{ Session::get('danger') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                        @yield('content')
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="mb-0">&copy; {{ now()->year }}&nbsp; Hightrove Finace.</p>
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">

                                </div>
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

         <!-- Required datatable js -->
        <script src="{{ asset('dash/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('dash/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

        <!-- Responsive examples -->
        <script src="{{ asset('dash/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('dash/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

        <!-- Plugins js-->
        <script src="{{ asset('dash/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script src="{{ asset('dash/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js') }}"></script>
        <!-- dashboard init -->

        <script src="{{ asset('dash/assets/js/pages/validation.init.js') }}"></script>

        <script src="{{ asset('dash/assets/js/app.js') }}"></script>

    </body>

</html>
