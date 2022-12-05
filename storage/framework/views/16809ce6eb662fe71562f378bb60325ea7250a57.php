dashboard
<!doctype html>
<html lang="en">
<head>

        <meta charset="utf-8" />
        <title>Bitstocks Trading Limited  | <?php echo $__env->yieldContent('title'); ?> </title>
        <meta name="description"
            content="Bitstocks Trading Limited is a global leader in online trading and investing, providing thousands of clients worldwide with access to forex, contracts for difference (CFDs), stockbroking and bonds markets via award-winning platforms.">
        <meta name="keywords"
            content="Bitstocks Trading Limited bank,regulated banking,forex trading,CFD trading,Forex,trading,online trading,mobile trading,licensed trading">
        <meta name="robots" content="index, no-follow">
        <meta name="theme-color" content="#282828">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <link rel="icon" href="<?php echo e(asset('frontend/img/favicon.ico')); ?>">

        <!-- plugin css -->
        <link href="<?php echo e(asset('dashboard/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css')); ?>" rel="stylesheet" type="text/css" />

        <!-- preloader css -->
        <link rel="stylesheet" href="<?php echo e(asset('dashboard/assets/css/preloader.min.css')); ?>" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="<?php echo e(asset('dashboard/assets/css/bootstrap.min.css')); ?>" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?php echo e(asset('dashboard/assets/css/icons.min.css')); ?>" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?php echo e(asset('dashboard/assets/css/app.min.css')); ?>" id="app-style" rel="stylesheet" type="text/css" />
        <script src="<?php echo e(asset('dashboard/assets/libs/jquery/jquery.min.js')); ?>"></script>

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
                            <a href="<?php echo e(url('/dashboard')); ?>" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="<?php echo e(asset('frontend/img/favicon.ico')); ?>" alt="" width="30">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?php echo e(asset('dashboard/assets/images/logo-dark.png')); ?>" alt="" width="200">
                                </span>
                            </a>
                            <a href="<?php echo e(url('/dashboard')); ?>" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="<?php echo e(asset('dashboard/assets/images/logo.png')); ?>" alt="" height="24">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?php echo e(asset('dashboard/')); ?>assets/images/logo.png" alt="" height="24">
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
                                <img class="rounded-circle header-profile-user" src="<?php echo e(auth()->user()->avarta); ?>"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium"><?php echo e(auth()->user()->name); ?></span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="<?php echo e(route('admin.profile.settings')); ?>"><i class="mdi mdi-cog font-size-16 align-middle me-1"></i> Profile Settings</a>
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
                                <a href="<?php echo e(route('admin.dashboard')); ?>">
                                    <i data-feather="home"></i>
                                    <span data-key="t-dashboard">Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('admin.deposit.index')); ?>">
                                    <i data-feather="log-in"></i>
                                    <span data-key="">Deposit</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('admin.withdrawal.index')); ?>">
                                    <i data-feather="log-out"></i>
                                    <span data-key="">Withdrawals</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('admin.swap.index')); ?>">
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
                                        <a href="<?php echo e(route('admin.coupon.list')); ?>">
                                            <span data-key="">Manage Coupons</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(route('admin.coupon.create')); ?>">
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
                                        <a href="<?php echo e(route('admin.trans.index')); ?>">
                                            <span data-key="t-calendar">Transaction History</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(route('admin.tran.create')); ?>">
                                            <span data-key="t-calendar">Add Transaction</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(route('admin.referral.index')); ?>">
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
                                        <a href="<?php echo e(route('admin.binary.index')); ?>">
                                            <span data-key="t-calendar">Trade History</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(route('admin.binary.schemes')); ?>">
                                            <span data-key="t-calendar">Binary Schemes</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(route('admin.binary.create')); ?>">
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
                                        <a href="<?php echo e(route('admin.invest.index')); ?>">
                                            <span data-key="t-calendar">Investments</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(route('admin.iv.schemes')); ?>">
                                            <span data-key="t-calendar">Crypto Schemes</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(route('admin.iv.create')); ?>">
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
                                        <a href="<?php echo e(route('admin.crypto.list')); ?>">
                                            <span data-key="">Manage Cryptos</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(route('admin.crypto.create')); ?>">
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
                                        <a href="<?php echo e(route('admin.wallet.list')); ?>">
                                            <span data-key="">Manage Wallets</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(route('admin.wallet.create')); ?>">
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
                                        <a href="<?php echo e(route('admin.users.list')); ?>">
                                            <span data-key="">Users (133)</span>
                                        </a>
                                    </li>
                                                                        <li>
                                        <a href="<?php echo e(route('admin.users.admins')); ?>">
                                            <span data-key="">Administrators (2)</span>
                                        </a>
                                    </li>

                                </ul>
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

                    <?php if(Session::has('success')): ?>

                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <i class="mdi mdi-check-all me-2"></i>
                                    <?php echo e(Session::get('success')); ?>

                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php elseif(Session::has('warning')): ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <i class="mdi mdi-check-all me-2"></i>
                                    <?php echo e(Session::get('warning')); ?>

                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php elseif(Session::has('danger')): ?>
                         <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="mdi mdi-check-all me-2"></i>
                                    <?php echo e(Session::get('danger')); ?>

                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                        <?php echo $__env->yieldContent('content'); ?>
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="mb-0">&copy; <?php echo e(now()->year); ?>&nbsp; Bitstocks Trading Limited.</p>
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


        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title d-flex align-items-center p-3">

                    <h5 class="m-0 me-2">Theme Customizer</h5>

                    <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                </div>

                <!-- Settings -->
                <hr class="m-0" />

                <div class="p-4">
                    <h6 class="mb-3">Layout</h6>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout"
                            id="layout-vertical" value="vertical">
                        <label class="form-check-label" for="layout-vertical">Vertical</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout"
                            id="layout-horizontal" value="horizontal">
                        <label class="form-check-label" for="layout-horizontal">Horizontal</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Layout Mode</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-mode"
                            id="layout-mode-light" value="light">
                        <label class="form-check-label" for="layout-mode-light">Light</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-mode"
                            id="layout-mode-dark" value="dark">
                        <label class="form-check-label" for="layout-mode-dark">Dark</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Layout Width</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-width"
                            id="layout-width-fuild" value="fuild" onchange="document.body.setAttribute('data-layout-size', 'fluid')">
                        <label class="form-check-label" for="layout-width-fuild">Fluid</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-width"
                            id="layout-width-boxed" value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed')">
                        <label class="form-check-label" for="layout-width-boxed">Boxed</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Layout Position</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-position"
                            id="layout-position-fixed" value="fixed" onchange="document.body.setAttribute('data-layout-scrollable', 'false')">
                        <label class="form-check-label" for="layout-position-fixed">Fixed</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-position"
                            id="layout-position-scrollable" value="scrollable" onchange="document.body.setAttribute('data-layout-scrollable', 'true')">
                        <label class="form-check-label" for="layout-position-scrollable">Scrollable</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Topbar Color</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="topbar-color"
                            id="topbar-color-light" value="light" onchange="document.body.setAttribute('data-topbar', 'light')">
                        <label class="form-check-label" for="topbar-color-light">Light</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="topbar-color"
                            id="topbar-color-dark" value="dark" onchange="document.body.setAttribute('data-topbar', 'dark')">
                        <label class="form-check-label" for="topbar-color-dark">Dark</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Size</h6>

                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-size"
                            id="sidebar-size-default" value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
                        <label class="form-check-label" for="sidebar-size-default">Default</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-size"
                            id="sidebar-size-compact" value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'md')">
                        <label class="form-check-label" for="sidebar-size-compact">Compact</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-size"
                            id="sidebar-size-small" value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
                        <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Color</h6>

                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-color"
                            id="sidebar-color-light" value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
                        <label class="form-check-label" for="sidebar-color-light">Light</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-color"
                            id="sidebar-color-dark" value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
                        <label class="form-check-label" for="sidebar-color-dark">Dark</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-color"
                            id="sidebar-color-brand" value="brand" onchange="document.body.setAttribute('data-sidebar', 'brand')">
                        <label class="form-check-label" for="sidebar-color-brand">Brand</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Direction</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-direction"
                            id="layout-direction-ltr" value="ltr">
                        <label class="form-check-label" for="layout-direction-ltr">LTR</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-direction"
                            id="layout-direction-rtl" value="rtl">
                        <label class="form-check-label" for="layout-direction-rtl">RTL</label>
                    </div>

                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->

        <script src="<?php echo e(asset('dashboard/assets/libs/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
        <script src="<?php echo e(asset('dashboard/assets/libs/metismenu/metisMenu.min.js')); ?>"></script>
        <script src="<?php echo e(asset('dashboard/assets/libs/simplebar/simplebar.min.js')); ?>"></script>
        <script src="<?php echo e(asset('dashboard/assets/libs/node-waves/waves.min.js')); ?>"></script>
        <script src="<?php echo e(asset('dashboard/assets/libs/feather-icons/feather.min.js')); ?>"></script>
        <!-- pace js -->
        <script src="<?php echo e(asset('dashboard/assets/libs/pace-js/pace.min.js')); ?>"></script>

        <!-- apexcharts -->
        <script src="<?php echo e(asset('dashboard/assets/libs/apexcharts/apexcharts.min.js')); ?>"></script>

         <!-- Required datatable js -->
        <script src="<?php echo e(asset('dashboard/assets/libs/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
        <script src="<?php echo e(asset('dashboard/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>

        <!-- Responsive examples -->
        <script src="<?php echo e(asset('dashboard/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')); ?>"></script>
        <script src="<?php echo e(asset('dashboard/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')); ?>"></script>

        <!-- Plugins js-->
        <script src="<?php echo e(asset('dashboard/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js')); ?>"></script>
        <script src="<?php echo e(asset('dashboard/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js')); ?>"></script>
        <!-- dashboard init -->

        <script src="<?php echo e(asset('dashboard/assets/js/pages/validation.init.js')); ?>"></script>

        <script src="<?php echo e(asset('dashboard/assets/js/app.js')); ?>"></script>

    </body>

</html>
<?php /**PATH S:\jobs\bitstocks_trading\resources\views/admin/layouts/app.blade.php ENDPATH**/ ?>