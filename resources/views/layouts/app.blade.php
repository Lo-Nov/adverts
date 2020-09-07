<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel='icon' href='demo/img/icon_3.png' type='image/x-icon'>
    <title>Nakuru Adverts</title>

    <!-- icon fonts -->

    <link rel="stylesheet" href="css/icon_fonts/css/icon_set_1.css">
    <link rel="stylesheet" href="css/icon_fonts/css/icon_set_2.css">
    <link rel="stylesheet" href="css/icon_fonts/css/icon_set_3.css">
    <link rel="stylesheet" href="css/icon_fonts/css/icon_set_4.css">

    <!-- Vendor styles -->
    <link rel="stylesheet" href="vendors/OwlCarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/OwlCarousel/assets/owl.theme.default.css">
    <link rel="stylesheet" href="css/flaticon-font/flaticon.css">

    <link rel="stylesheet" href="vendors/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendors/animate.css/animate.min.css">
    <link rel="stylesheet" href="vendors/jquery-scrollbar/jquery.scrollbar.css">
    <link rel="stylesheet" href="vendors/fullcalendar/fullcalendar.min.css">
    <link rel="stylesheet" href="vendors/select2/css/select2.min.css">
    <link rel="stylesheet" href="vendors/dropzone/dropzone.css">
    <link rel="stylesheet" href="vendors/nouislider/nouislider.min.css">
    <link rel="stylesheet" href="vendors/trumbowyg/ui/trumbowyg.min.css">
    <link rel="stylesheet" href="vendors/flatpickr/flatpickr.min.css" />
    <link rel="stylesheet" href="vendors/rateyo/jquery.rateyo.min.css">
    <link rel="stylesheet" href="vendors/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">

    <!-- App styles -->
    <link rel="stylesheet" href="css/app.min.css">

</head>

<body data-ma-theme="green">
<main class="main">
    <div class="page-loader">
        <div class="page-loader__spinner">
            <svg viewBox="25 25 50 50">
                <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
            </svg>
        </div>
        <span class="powerd-container">
					<img src="demo/img/logo-files/NBk.png">
					<strong>POWERED BY NBK</strong>
				</span>
    </div>

    <header class="header">
        <div class="navigation-trigger hidden-xl-up" data-ma-action="aside-open" data-ma-target=".sidebar">
            <div class="navigation-trigger__inner">
                <i class="navigation-trigger__line"></i>
                <i class="navigation-trigger__line"></i>
                <i class="navigation-trigger__line"></i>
            </div>
        </div>

        <div class="header__logo hidden-sm-down">
            <h1><a href="index.html"><img class="the-logo" src="demo/img/logo-files/logo-white.png"></a></h1>
        </div>

        <form class="search">
            <div class="search__inner">
                <input type="text" class="search__text" placeholder="Search site">
                <i class="zmdi zmdi-search search__helper" data-ma-action="search-close"></i>
            </div>
        </form>

        <ul class="top-nav">
            <li class="hidden-xl-up"><a href="#" data-ma-action="search-open"><i class="zmdi zmdi-search"></i></a></li>
            <li   class="dropdown">
                <a href="#" data-toggle="dropdown" data-toggle="tooltip" data-original-title="Create Accounts" class="px-4 py-3" ><strong>Create</strong></a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu--block">
                    <div class="listview listview--hover">
                        <div class="listview__header">
                            Create an Account
                        </div>
                        <div class="p-1"></div>
                    </div>
                </div>

            </li>
            <li data-toggle="tooltip" data-original-title="Notifications" class="dropdown top-nav__notifications">
                <a href="#" data-toggle="dropdown"  class="top-nav__notify" >
                    <i class="zmdi zmdi-notifications"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu--block">
                    <div class="listview listview--hover">
                        <div class="listview__header">
                            Notifications

                            <div class="actions">
                                <a href="#" class="actions__item zmdi zmdi-check-all" data-ma-action="notifications-clear"></a>
                            </div>
                        </div>

                        <div class="listview__scroll scrollbar-inner">
                            <a href="#" class="listview__item">
                                <img src="demo/img/profile-pics/1.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">David Belle</div>
                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                </div>
                            </a>

                            <a href="#" class="listview__item">
                                <img src="demo/img/profile-pics/2.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">Jonathan Morris</div>
                                    <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                </div>
                            </a>

                            <a href="#" class="listview__item">
                                <img src="demo/img/profile-pics/3.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">Fredric Mitchell Jr.</div>
                                    <p>Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</p>
                                </div>
                            </a>

                            <a href="#" class="listview__item">
                                <img src="demo/img/profile-pics/4.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">Glenn Jecobs</div>
                                    <p>Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</p>
                                </div>
                            </a>

                            <a href="#" class="listview__item">
                                <img src="demo/img/profile-pics/5.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">Bill Phillips</div>
                                    <p>Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</p>
                                </div>
                            </a>

                            <a href="#" class="listview__item">
                                <img src="demo/img/profile-pics/1.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">David Belle</div>
                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                </div>
                            </a>

                            <a href="#" class="listview__item">
                                <img src="demo/img/profile-pics/2.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">Jonathan Morris</div>
                                    <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                </div>
                            </a>

                            <a href="#" class="listview__item">
                                <img src="demo/img/profile-pics/3.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">Fredric Mitchell Jr.</div>
                                    <p>Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</p>
                                </div>
                            </a>
                        </div>

                        <div class="p-1"></div>
                    </div>
                </div>
            </li>
            <li class="" >
                <a href="new-parent.html" data-ma-action="aside-open" data-ma-target=".chat" data-toggle="tooltip" data-original-title="Associate Blinker Requests" class="top-nav__notify">
                    <i class="zmdi zmdi-accounts-add"></i>
                </a>
            </li>
        </ul>


    </header>

    <aside class="sidebar">
        <div class="scrollbar-inner">
            <div class="user">
                <div class="user__info" data-toggle="dropdown">
                    <div class="avatar-char bg-warning text-black mr-3 font-weight-bold">JM</div>
                    <div>
                        <div class="user__name">{{ Session::get('auth_session')[0]['user_full_name'] }}</div>
                        <div class="user__email">{{ Session::get('auth_session')[0]['roles'] }}</div>
                    </div>
                </div>

                <div class="dropdown-menu">
                    <a class="dropdown-item" href="my-profile.html">View Profile</a>
                    <a class="dropdown-item d-none" href="#">Settings</a>
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();" data-toggle-fullscreen="">
                        Logout</a>
                    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>

            <ul class="navigation">
                <li class="navigation__active"><a href="index.html"><i class="flaticon-bar-chart"></i>Dashboard</a></li>
                <li class="navigation__active"><a href="new-bill.html"><i class="flaticon-bill"></i>New Bill</a></li>
                <li class="navigation__active"><a href="receipting-bill.html"><i class="flaticon-bill-1"></i>Payment & Receipting</a></li>
                <li class="navigation__sub">
                    <a href="#"><i class="flaticon-register"></i>Payment edits  <i class="zmdi zmdi-caret-down drop-down-icon"></i></a>
                    <ul>
                        <li><a href=""><i class="flaticon-undo mr-2"></i>Reversals</a></li>
                        <li><a href=""><i class="flaticon-transfer mr-2"></i>Transfers</a></li>
                        <li><a href=""><i class="zmdi zmdi-edit mr-2"></i>Non Cash Edits</a></li>
                    </ul>
                </li>
                <li class="navigation__sub">
                    <a href="#"><i class="flaticon-paper"></i>Reports  <i class="zmdi zmdi-caret-down drop-down-icon"></i></a>
                    <ul>
                        <li><a href="bill-raised.html">Bills raised</a></li>
                        <li><a href="bill-receipted.html">Bills receipted</a></li>
                        <li><a href="bill-reversals.html">Bill reversals</a></li>
                        <li><a href="bill-transfer.html">Bills Transfers</a></li>
                    </ul>
                </li>

                <li class="navigation__sub">
                    <a href="#"><i class="pe-7s-user"></i>My Account <i class="zmdi zmdi-caret-down drop-down-icon pt-0"></i></a>
                    <ul>
                        <li><a href=""><i class="pe-7s-id mr-2"></i>My profile</a></li>
                        <li><a href=""><i class="icon_hourglass mr-2"></i>Account Logs</a></li>
                        <li><a href=""><i class="pe-7s-portfolio mr-2"></i>Delegate role</a></li>
                        <li><a href=""><i class="flaticon-forgot mr-2"></i>Change password</a></li>
                    </ul>
                </li>

                <li class="navigation__sub">
                    <a href="#"><i class="pe-7s-officers"></i>User Accounts  <i class="zmdi zmdi-caret-down drop-down-icon pt-0"></i></a>
                    <ul>
                        <li><a href=""><i class="flaticon-add mr-2"></i>New user</a></li>
                        <li><a href=""><i class="zmdi zmdi-settings mr-2"></i>User Management</a></li>

                    </ul>
                </li>
                <li class="navigation__active mt-4"><a href="landing-page.html"><i class="zmdi zmdi-power"></i>Logout</a></li>
            </ul>
        </div>
    </aside>

    <div class="content--full map-main-container d-none">
        <div class="col-12">
            <header class="content__title px-0 border-0">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
							<span class="rev-title-container">
							 <h1 class="text-capitalize stream_name m-0">Biller Dashboard</h1>
							</span>
                        <div class="">
                            <ol class="breadcrumb border-0">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item active">Dashboard</li>

                            </ol>

                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right text-white"><small>Date last updated <span>22 June 2020, 10:00 EAT</span></small></div>
                </div>
            </header>
        </div>
        <div class="pb-4">
            <div class="col-12">
                <h4 class="text-white text-light d-none">Revenue Collection By Subcounty</h4>
                <div id="the-map-container">
                </div>
                <!--							control buttons-->
                <div class="row map-buttons d-flex">
                    <span class="map-date p-3 text-white ml-3">30 Jun 2020</span>
                    <div class="col">
                        <button id="today" disabled="true" class="active"><span></span>Today: 7,895,897</button>
                        <button id="this-week"><span></span>This Week: 15,237,895,897</button>
                        <button id="this-month"><span></span>June 2020: 21,237,895,897</button>
                        <button id="financial-year"><span></span>FY 19/20: 452,237,895,897</button>
                    </div>
                </div>
                <!--							control buttons-->
            </div>
        </div>
    </div>
    @yield('content')
</main>

<!-- Older IE warning message -->
<!--[if IE]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade to any of the following web browsers to access this website.</p>

    <div class="ie-warning__downloads">
        <a href="http://www.google.com/chrome">
            <img src="img/browsers/chrome.png" alt="">
        </a>

        <a href="https://www.mozilla.org/en-US/firefox/new">
            <img src="img/browsers/firefox.png" alt="">
        </a>

        <a href="http://www.opera.com">
            <img src="img/browsers/opera.png" alt="">
        </a>

        <a href="https://support.apple.com/downloads/safari">
            <img src="img/browsers/safari.png" alt="">
        </a>

        <a href="https://www.microsoft.com/en-us/windows/microsoft-edge">
            <img src="img/browsers/edge.png" alt="">
        </a>

        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
            <img src="img/browsers/ie.png" alt="">
        </a>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->

<!-- Javascript -->
<!-- Vendors -->
<script src="vendors/jquery/jquery.min.js"></script>
<script src="vendors/popper.js/popper.min.js"></script>
<script src="vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="vendors/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="vendors/jquery-scrollLock/jquery-scrollLock.min.js"></script>

<script src="vendors/flot/jquery.flot.js"></script>
<script src="vendors/flot/jquery.flot.resize.js"></script>
<script src="vendors/flot.curvedlines/curvedLines.js"></script>
<script src="vendors/jqvmap/jquery.vmap.min.js"></script>
<script src="vendors/jqvmap/maps/jquery.vmap.world.js"></script>
<script src="vendors/easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="vendors/salvattore/salvattore.min.js"></script>
<script src="vendors/sparkline/jquery.sparkline.min.js"></script>
<script src="vendors/moment/moment.min.js"></script>
<script src="vendors/fullcalendar/fullcalendar.min.js"></script>

<script src="vendors/jquery-mask-plugin/jquery.mask.min.js"></script>
<script src="vendors/select2/js/select2.full.min.js"></script>
<script src="vendors/dropzone/dropzone.min.js"></script>
<script src="vendors/moment/moment.min.js"></script>
<script src="vendors/nouislider/nouislider.min.js"></script>
<script src="vendors/trumbowyg/trumbowyg.min.js"></script>
<script src="vendors/flatpickr/flatpickr.min.js"></script>
<script src="vendors/rateyo/jquery.rateyo.min.js"></script>
<script src="vendors/jquery-text-counter/textcounter.min.js"></script>
<script src="vendors/autosize/autosize.min.js"></script>
<script src="vendors/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>

<!-- Charts and maps-->
<script src="demo/js/flot-charts/curved-line.js"></script>
<script src="demo/js/flot-charts/dynamic.js"></script>
<script src="demo/js/flot-charts/line.js"></script>
<script src="demo/js/flot-charts/chart-tooltips.js"></script>
<script src="demo/js/other-charts.js"></script>
<script src="demo/js/jqvmap.js"></script>

<!--high chart-->
<script src="https://code.highcharts.com/maps/highmaps.js"></script>
<script src="https://code.highcharts.com/maps/modules/exporting.js"></script>

<script src="vendors/highcharts/highchart.js"></script>
<script src="vendors/highcharts/data.js"></script>
<script src="vendors/highcharts/drilldown.js"></script>
<script src="vendors/highcharts/exporting.js"></script>
<script src="vendors/highcharts/export-data.js"></script>
<script src="vendors/highcharts/accesibility.js"></script>
<script src="js/highcharts/bullet.js"></script>

<script src="js/highcharts/highcharts-more.js"></script>
<script src="js/highcharts/theme1.js"></script>
<!--owl corousel-->
<script src="vendors/OwlCarousel/owl.carousel.min.js"></script>


<!-- App functions and actions -->
<script src="js/wow.js"></script>
<script src="js/app.min.js"></script>
<script src="js/main.js"></script>

<script src="js/chart-data/revenue-targets.js"></script>
<script src="js/chart-data/revenue-streams.js"></script>
<script src="js/chart-data/revenue-by-bank.js"></script>
<script src="js/chart-data/revenue-collected.js"></script>
<script src="js/chart-data/perfomance.js"></script>

<!--map scripts-->

<script src="js/chart-data/map-data.js"></script>





</body>

<!-- Mirrored from byrushan.com/projects/material-admin/app/2.6/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jul 2019 11:34:43 GMT -->
</html>
