<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from techydevs.com/demos/themes/html/trizen-demo/html/index6.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Jun 2024 08:50:42 GMT -->
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="TechyDevs" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Trizen - Travel Booking HTML Template</title>

    <!-- Favicon -->
    <link rel="icon" href="/trizen-demo/html/images/favicon.png" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&amp;display=swap"
        rel="stylesheet"
    />

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="/trizen-demo/html/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/trizen-demo/html/css/select2.min.css" />
    <link rel="stylesheet" href="/trizen-demo/html/css/line-awesome.css" />
    <link rel="stylesheet" href="/trizen-demo/html/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="/trizen-demo/html/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="/trizen-demo/html/css/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="/trizen-demo/html/css/daterangepicker.css" />
    <link rel="stylesheet" href="/trizen-demo/html/css/animated-headline.css" />
    <link rel="stylesheet" href="/trizen-demo/html/css/jquery-ui.css" />
    <link rel="stylesheet" href="/trizen-demo/html/css/flag-icon.min.css" />
    <link rel="stylesheet" href="/trizen-demo/html/css/style.css" />

    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
</head>
<body>
<!-- start cssload-loader -->
<div class="preloader" id="preloader">
    <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle
                class="path"
                cx="25"
                cy="25"
                r="20"
                fill="none"
                stroke-width="5"
            ></circle>
        </svg>
    </div>
</div>
<!-- end cssload-loader -->

<!-- ================================
        START HEADER AREA
================================= -->
<header class="header-area">
    <div class="header-top-bar padding-right-100px padding-left-100px">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="header-top-content">
                        <div class="header-left">
                            <ul class="list-items">
                                <li>
                                    <a href="#"
                                    ><i class="la la-phone me-1"></i>+254708473015</a
                                    >
                                </li>
                                <li>
                                    <a href="#"
                                    ><i class="la la-envelope me-1"></i
                                        >info@davetravels.com</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header-top-content">
                        <div
                            class="header-right d-flex align-items-center justify-content-end"
                        >
                            <div class="header-right-action">
                                <div class="select-contain select--contain w-auto">
                                    <select class="select-contain-select">
                                        <option
                                            data-content='<span class="flag-icon flag-icon-id me-1"></span> Bahasa Indonesia'
                                        >
                                            Bahasa Indonesia
                                        </option>
                                        <option
                                            data-content='<span class="flag-icon flag-icon-de me-1"></span> Deutsch'
                                        >
                                            Deutsch
                                        </option>
                                        <option
                                            data-content='<span class="flag-icon flag-icon-us me-1"></span> English(US)'
                                            selected
                                        >
                                            English US
                                        </option>
                                        <option
                                            data-content='<span class="flag-icon flag-icon-gb-eng me-1"></span> English(UK)'
                                        >
                                            English UK
                                        </option>
                                        <option
                                            data-content='<span class="flag-icon flag-icon-ro me-1"></span> Romanian'
                                        >
                                            Romanian
                                        </option>
                                        <option
                                            data-content='<span class="flag-icon flag-icon-es me-1"></span> Español'
                                        >
                                            Español
                                        </option>
                                        <option
                                            data-content='<span class="flag-icon flag-icon-fr me-1"></span> Francais'
                                        >
                                            Francais
                                        </option>
                                        <option
                                            data-content='<span class="flag-icon flag-icon-it me-1"></span> Italiano'
                                        >
                                            Italiano
                                        </option>
                                        <option
                                            data-content='<span class="flag-icon flag-icon-pl me-1"></span> Polski'
                                        >
                                            Polski
                                        </option>
                                        <option
                                            data-content='<span class="flag-icon flag-icon-pt me-1"></span> Portuguese'
                                        >
                                            Portuguese
                                        </option>
                                        <option
                                            data-content='<span class="flag-icon flag-icon-tr me-1"></span> Turkish'
                                        >
                                            Turkish
                                        </option>
                                        <option
                                            data-content='<span class="flag-icon flag-icon-ru me-1"></span> Russian'
                                        >
                                            Russian
                                        </option>
                                        <option
                                            data-content='<span class="flag-icon flag-icon-jp me-1"></span> Japanese'
                                        >
                                            Japanese
                                        </option>
                                        <option
                                            data-content='<span class="flag-icon flag-icon-cn me-1"></span> Mandarin'
                                        >
                                            Mandarin
                                        </option>
                                        <option
                                            data-content='<span class="flag-icon flag-icon-tw me-1"></span> Mandarin Chinese'
                                        >
                                            Mandarin Chinese
                                        </option>
                                        <option
                                            data-content='<span class="flag-icon flag-icon-kr me-1"></span> Korean'
                                        >
                                            Korean
                                        </option>
                                        <option
                                            data-content='<span class="flag-icon flag-icon-in me-1"></span> Hindi'
                                        >
                                            Hindi
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="header-right-action">
                                <div class="select-contain select--contain w-auto">
                                    <select class="select-contain-select">
{{--                                        <option value="1">AED</option>--}}
{{--                                        <option value="2">AUD</option>--}}
{{--                                        <option value="3">BRL</option>--}}
{{--                                        <option value="4">CAD</option>--}}
{{--                                        <option value="5">CHF</option>--}}
{{--                                        <option value="6">CNY</option>--}}
{{--                                        <option value="7">EUR</option>--}}
{{--                                        <option value="8">GBP</option>--}}
{{--                                        <option value="9">HKD</option>--}}
{{--                                        <option value="10">IDR</option>--}}
{{--                                        <option value="11">INR</option>--}}
{{--                                        <option value="12">JPY</option>--}}
{{--                                        <option value="13">KRW</option>--}}
{{--                                        <option value="14">MYR</option>--}}
{{--                                        <option value="15">NZD</option>--}}
{{--                                        <option value="16">PHP</option>--}}
{{--                                        <option value="17">PLN</option>--}}
{{--                                        <option value="18">RUB</option>--}}
{{--                                        <option value="19">SAR</option>--}}
{{--                                        <option value="20">SGD</option>--}}
{{--                                        <option value="21">THB</option>--}}
{{--                                        <option value="22">TRY</option>--}}
{{--                                        <option value="23">TWD</option>--}}
                                        <option value="24" >USD</option>
{{--                                        <option value="25">VND</option>--}}
{{--                                        <option value="26">MXN</option>--}}
{{--                                        <option value="27">ARS</option>--}}
{{--                                        <option value="28">INR</option>--}}
                                        <option value="28" selected>KES</option>
                                    </select>
                                </div>
                            </div>
                            <div class="header-right-action">
                                @guest
                                    @if (Route::has('register'))
                                        <a
                                            href="#"
                                            class="theme-btn theme-btn-small theme-btn-transparent me-1"
                                            data-bs-toggle="modal"
                                            data-bs-target="#signupPopupForm"
                                        >Sign Up</a
                                        >
                                    @endif
                                    @if (Route::has('login'))
                                            <a
                                                href="#"
                                                class="theme-btn theme-btn-small"
                                                data-bs-toggle="modal"
                                                data-bs-target="#loginPopupForm"
                                            >Login</a
                                            >
                                    @endif
                                @else
                                    <div class="select-contain select--contain w-auto">
                                        <select class="select-contain-select" onchange="this.value === '24' && document.getElementById('logout-form').submit();">
                                            <option value="28" selected>{{ Auth::user()->name }}</option>
                                            <option value="24">Log out</option>
                                        </select>
                                    </div>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                @endguest
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-menu-wrapper padding-right-100px padding-left-100px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="menu-wrapper">
                        <a href="#" class="down-button"
                        ><i class="la la-angle-down"></i
                            ></a>
                        <div class="logo" >
                            <a href="/" style="font-weight:bolder; font-size:30px;color:#e20177; font-family:'Red Serif', serif;">
{{--                                <img src="/trizen-demo/html/images/logo.png" alt="logo"/>--}}
                                DaveTravels
                            </a>
                            <div class="menu-toggler">
                                <i class="la la-bars"></i>
                                <i class="la la-times"></i>
                            </div>
                            <!-- end menu-toggler -->
                        </div>
                        <!-- end logo -->
                        <div class="main-menu-content">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="#">Home</a>
                                    </li>
                                    <li>
                                        <a href="#">Flights</a>
                                    </li>
                                    <li>
                                        <a href="#">Destinations</a>
                                    </li>
                                    <li>
                                        <a href="#">My Bookings</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- end main-menu-content -->
                        <div class="nav-btn">
                            <a href="become-local-expert.html" class="theme-btn"
                            >Flight Deals</a
                            >
                        </div>
                        <!-- end nav-btn -->
                    </div>
                    <!-- end menu-wrapper -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </div>
    <!-- end header-menu-wrapper -->
</header>
<!-- ================================
     END HEADER AREA
================================= -->

<!-- ================================
START HERO-WRAPPER AREA
================================= -->
<section class="hero-wrapper hero-wrapper6">
    <div class="hero-box hero-bg-6">
        <div class="container">
            <div class="row">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="row" style="height:300px">
                <div class="col-lg-12">
                    <div class="hero-content">
                        <div class="section-heading">
                            <h2
                                class="sec__title cd-headline slide d-flex align-items-center"
                            >
                                It's the Time to
                                <span class="cd-words-wrapper ps-2">
                      <b class="is-visible">discover</b>
                      <b>fly far</b>
                      <b>explore</b>
                      <b>travel</b>
                      <b>meet</b>
                      <b>have fun</b>
                      <b>run away</b>
                      <b>rejuvenate</b>
                      <b>live</b>
                      <b>relax</b>
                      <b>enjoy life</b>
                    </span>
                            </h2>
                        </div>
                    </div>
                    <!-- end hero-content -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content text-center">
                        <div class="section-heading">
                            <h2 class="sec__title text-white">
                                Find your dream flight with the world's <br />
                                largest travel company
                            </h2>
                        </div>
                    </div>
                    <!-- end breadcrumb-content -->
                </div>
                <!-- end col-lg-12 -->
            </div>
        </div>
        <!-- end container -->
{{--        <svg--}}
{{--            class="hero-svg"--}}
{{--            xmlns="http://www.w3.org/2000/svg"--}}
{{--            viewBox="0 0 1000 100"--}}
{{--            preserveAspectRatio="none"--}}
{{--        >--}}
{{--            <path d="M761.9,40.6L643.1,24L333.9,93.8L0.1,1H0v99h1000V1"></path>--}}
{{--        </svg>--}}
    </div>
</section>
<!-- end hero-wrapper -->
<!-- ================================
END HERO-WRAPPER AREA
================================= -->

<!-- ================================
START INFO AREA
================================= -->
<section class="info-area info-bg padding-top-90px padding-bottom-70px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h2 class="sec__title">Search for flight now</h2>
                </div>
                <!-- end section-heading -->
            </div>
            <!-- end col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="search-fields-container">
                    <div class="section-tab section-tab-2 pb-3">
                        <ul class="nav nav-tabs" id="myTab3" role="tablist">
                            <li class="nav-item">
                                <a
                                    class="nav-link active"
                                    id="one-way-tab"
                                    data-bs-toggle="tab"
                                    href="#one-way"
                                    role="tab"
                                    aria-controls="one-way"
                                    aria-selected="true"
                                >
                                    One way
                                </a>
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    id="round-trip-tab"
                                    data-bs-toggle="tab"
                                    href="#round-trip"
                                    role="tab"
                                    aria-controls="round-trip"
                                    aria-selected="false"
                                >
                                    Round-trip
                                </a>
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    id="multi-city-tab"
                                    data-bs-toggle="tab"
                                    href="#multi-city"
                                    role="tab"
                                    aria-controls="multi-city"
                                    aria-selected="false"
                                >
                                    Multi-city
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- end section-tab -->
                    <div class="tab-content" id="myTabContent3">
                        <div
                            class="tab-pane fade show active"
                            id="one-way"
                            role="tabpanel"
                            aria-labelledby="one-way-tab"
                        >
                            <div class="contact-form-action">
                                <form action="#" class="row align-items-center">
                                    <div class="col-lg-6 pe-0">
                                        <div class="input-box">
                                            <label class="label-text">Flying from</label>
                                            <div class="form-group">
                                                <span class="la la-map-marker form-icon"></span>
                                                <input
                                                    class="form-control"
                                                    type="text"
                                                    placeholder="City or airport"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col-lg-3 -->
                                    <div class="col-lg-6">
                                        <div class="input-box">
                                            <label class="label-text">Flying to</label>
                                            <div class="form-group">
                                                <span class="la la-map-marker form-icon"></span>
                                                <input
                                                    class="form-control"
                                                    type="text"
                                                    placeholder="City or airport"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col-lg-3 -->
                                    <div class="col-lg-3 pe-0">
                                        <div class="input-box">
                                            <label class="label-text">Departing</label>
                                            <div class="form-group">
                                                <span class="la la-calendar form-icon"></span>
                                                <input
                                                    class="date-range form-control"
                                                    type="text"
                                                    name="daterange-single"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col-lg-3 -->
                                    <div class="col-lg-3 pe-0">
                                        <div class="input-box">
                                            <label class="label-text">Passengers</label>
                                            <div class="form-group">
                                                <div
                                                    class="dropdown dropdown-contain gty-container"
                                                >
                                                    <a
                                                        class="dropdown-toggle dropdown-btn"
                                                        href="#"
                                                        role="button"
                                                        data-bs-toggle="dropdown"
                                                        aria-expanded="false"
                                                    >
                                  <span
                                      class="adult"
                                      data-text="Adult"
                                      data-text-multi="Adults"
                                  >0 Adult</span
                                  >
                                                        -
                                                        <span
                                                            class="children"
                                                            data-text="Child"
                                                            data-text-multi="Children"
                                                        >0 Child</span
                                                        >
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-wrap">
                                                        <div class="dropdown-item">
                                                            <div
                                                                class="qty-box d-flex align-items-center justify-content-between"
                                                            >
                                                                <label>Adults</label>
                                                                <div
                                                                    class="qtyBtn d-flex align-items-center"
                                                                >
                                                                    <div class="qtyDec">
                                                                        <i class="la la-minus"></i>
                                                                    </div>
                                                                    <input
                                                                        type="text"
                                                                        name="adult_number"
                                                                        value="0"
                                                                    />
                                                                    <div class="qtyInc">
                                                                        <i class="la la-plus"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-item">
                                                            <div
                                                                class="qty-box d-flex align-items-center justify-content-between"
                                                            >
                                                                <label>Children</label>
                                                                <div
                                                                    class="qtyBtn d-flex align-items-center"
                                                                >
                                                                    <div class="qtyDec">
                                                                        <i class="la la-minus"></i>
                                                                    </div>
                                                                    <input
                                                                        type="text"
                                                                        name="child_number"
                                                                        value="0"
                                                                    />
                                                                    <div class="qtyInc">
                                                                        <i class="la la-plus"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-item">
                                                            <div
                                                                class="qty-box d-flex align-items-center justify-content-between"
                                                            >
                                                                <label>Infants</label>
                                                                <div
                                                                    class="qtyBtn d-flex align-items-center"
                                                                >
                                                                    <div class="qtyDec">
                                                                        <i class="la la-minus"></i>
                                                                    </div>
                                                                    <input
                                                                        type="text"
                                                                        name="infants_number"
                                                                        value="0"
                                                                        class="qty-input"
                                                                    />
                                                                    <div class="qtyInc">
                                                                        <i class="la la-plus"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end dropdown-->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col-lg-3 -->
                                    <div class="col-lg-3 pe-0">
                                        <div class="input-box">
                                            <label class="label-text">Coach</label>
                                            <div
                                                class="form-group select2-container-wrapper select-contain select-contain-shadow w-auto"
                                            >
                                                <select class="select-contain-select">
                                                    <option value="1" selected>Economy</option>
                                                    <option value="2">Business</option>
                                                    <option value="3">First class</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col-lg-3 -->
                                    <div class="col-lg-3">
                                        <a
                                            href="flight-search-result.html"
                                            class="theme-btn w-100 text-center margin-top-20px"
                                        >Search Now</a
                                        >
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- end tab-pane -->
                        <div
                            class="tab-pane fade"
                            id="round-trip"
                            role="tabpanel"
                            aria-labelledby="round-trip-tab"
                        >
                            <div class="contact-form-action">
                                <form action="#" class="row align-items-center">
                                    <div class="col-lg-6 pe-0">
                                        <div class="input-box">
                                            <label class="label-text">Flying from</label>
                                            <div class="form-group">
                                                <span class="la la-map-marker form-icon"></span>
                                                <input
                                                    class="form-control"
                                                    type="text"
                                                    placeholder="City or airport"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col-lg-3 -->
                                    <div class="col-lg-6">
                                        <div class="input-box">
                                            <label class="label-text">Flying to</label>
                                            <div class="form-group">
                                                <span class="la la-map-marker form-icon"></span>
                                                <input
                                                    class="form-control"
                                                    type="text"
                                                    placeholder="City or airport"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col-lg-3 -->
                                    <div class="col-lg-3 pe-0">
                                        <div class="input-box">
                                            <label class="label-text"
                                            >Departing - Returning</label
                                            >
                                            <div class="form-group">
                                                <span class="la la-calendar form-icon"></span>
                                                <input
                                                    class="date-range form-control"
                                                    type="text"
                                                    name="daterange"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col-lg-3 -->
                                    <div class="col-lg-3 pe-0">
                                        <div class="input-box">
                                            <label class="label-text">Passengers</label>
                                            <div class="form-group">
                                                <div
                                                    class="dropdown dropdown-contain gty-container"
                                                >
                                                    <a
                                                        class="dropdown-toggle dropdown-btn"
                                                        href="#"
                                                        role="button"
                                                        data-bs-toggle="dropdown"
                                                        aria-expanded="false"
                                                    >
                                  <span
                                      class="adult"
                                      data-text="Adult"
                                      data-text-multi="Adults"
                                  >0 Adult</span
                                  >
                                                        -
                                                        <span
                                                            class="children"
                                                            data-text="Child"
                                                            data-text-multi="Children"
                                                        >0 Child</span
                                                        >
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-wrap">
                                                        <div class="dropdown-item">
                                                            <div
                                                                class="qty-box d-flex align-items-center justify-content-between"
                                                            >
                                                                <label>Adults</label>
                                                                <div
                                                                    class="qtyBtn d-flex align-items-center"
                                                                >
                                                                    <div class="qtyDec">
                                                                        <i class="la la-minus"></i>
                                                                    </div>
                                                                    <input
                                                                        type="text"
                                                                        name="adult_number"
                                                                        value="0"
                                                                    />
                                                                    <div class="qtyInc">
                                                                        <i class="la la-plus"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-item">
                                                            <div
                                                                class="qty-box d-flex align-items-center justify-content-between"
                                                            >
                                                                <label>Children</label>
                                                                <div
                                                                    class="qtyBtn d-flex align-items-center"
                                                                >
                                                                    <div class="qtyDec">
                                                                        <i class="la la-minus"></i>
                                                                    </div>
                                                                    <input
                                                                        type="text"
                                                                        name="child_number"
                                                                        value="0"
                                                                    />
                                                                    <div class="qtyInc">
                                                                        <i class="la la-plus"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-item">
                                                            <div
                                                                class="qty-box d-flex align-items-center justify-content-between"
                                                            >
                                                                <label>Infants</label>
                                                                <div
                                                                    class="qtyBtn d-flex align-items-center"
                                                                >
                                                                    <div class="qtyDec">
                                                                        <i class="la la-minus"></i>
                                                                    </div>
                                                                    <input
                                                                        type="text"
                                                                        name="infants_number"
                                                                        value="0"
                                                                        class="qty-input"
                                                                    />
                                                                    <div class="qtyInc">
                                                                        <i class="la la-plus"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end dropdown-->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col-lg-3 -->
                                    <div class="col-lg-3 pe-0">
                                        <div class="input-box">
                                            <label class="label-text">Coach</label>
                                            <div class="form-group select2-container-wrapper">
                                                <div
                                                    class="select-contain select-contain-shadow w-auto"
                                                >
                                                    <select class="select-contain-select">
                                                        <option value="1" selected>Economy</option>
                                                        <option value="2">Business</option>
                                                        <option value="3">First class</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col-lg-3 -->
                                    <div class="col-lg-3">
                                        <a
                                            href="flight-search-result.html"
                                            class="theme-btn w-100 text-center margin-top-20px"
                                        >Search Now</a
                                        >
                                    </div>
                                </form>
                            </div>
                            <div class="advanced-wrap">
                                <a
                                    class="btn collapse-btn theme-btn-hover-gray font-size-15"
                                    data-bs-toggle="collapse"
                                    href="#collapseThree"
                                    role="button"
                                    aria-expanded="false"
                                    aria-controls="collapseThree"
                                >
                                    Advanced options <i class="la la-angle-down ms-1"></i>
                                </a>
                                <div class="collapse pt-3" id="collapseThree">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="input-box">
                                                <label class="label-text"
                                                >Preferred airline</label
                                                >
                                                <div class="form-group select2-container-wrapper">
                                                    <div
                                                        class="select-contain select-contain-shadow w-100"
                                                    >
                                                        <select class="select-contain-select">
                                                            <option selected="selected" value="">
                                                                No preference
                                                            </option>
                                                            <option value="AN">Advanced Air</option>
                                                            <option value="A3">Aegean</option>
                                                            <option value="EI">Aer Lingus</option>
                                                            <option value="5G">
                                                                Aerocuahonte / Mayair
                                                            </option>
                                                            <option value="SU">
                                                                Aeroflot-Russian Airlines
                                                            </option>
                                                            <option value="AR">
                                                                Aerolineas Argentinas
                                                            </option>
                                                            <option value="VW">Aeromar Airlines</option>
                                                            <option value="AM">Aeromexico</option>
                                                            <option value="ZI">Aigle Azur</option>
                                                            <option value="AH">Air Algerie</option>
                                                            <option value="KC">Air Astana</option>
                                                            <option value="UU">Air Austral</option>
                                                            <option value="BT">Air Baltic</option>
                                                            <option value="BP">Air Botswana</option>
                                                            <option value="AC">Air Canada</option>
                                                            <option value="TX">Air Caraibes</option>
                                                            <option value="CA">Air China</option>
                                                            <option value="3E">Air Choice One</option>
                                                            <option value="XK">Air Corsica</option>
                                                            <option value="UX">Air Europa</option>
                                                            <option value="X4">
                                                                Air Excursions LLC
                                                            </option>
                                                            <option value="AF">Air France</option>
                                                            <option value="NY">
                                                                Air Iceland Connect
                                                            </option>
                                                            <option value="AI">Air India</option>
                                                            <option value="IG">Air Italy</option>
                                                            <option value="MD">Air Madagascar</option>
                                                            <option value="KM">Air Malta</option>
                                                            <option value="MK">Air Mauritius</option>
                                                            <option value="9U">Air Moldova</option>
                                                            <option value="NZ">Air New Zealand</option>
                                                            <option value="PX">Air Niugini</option>
                                                            <option value="OG">Air Onix</option>
                                                            <option value="JU">Air Serbia</option>
                                                            <option value="TN">Air Tahiti Nui</option>
                                                            <option value="TS">Air Transat</option>
                                                            <option value="H/">
                                                                AirAsia with baggage
                                                            </option>
                                                            <option value="AS">Alaska Airlines</option>
                                                            <option value="AZ">Alitalia</option>
                                                            <option value="NH">
                                                                All Nippon Airways
                                                            </option>
                                                            <option value="G4">Allegiant Air</option>
                                                            <option value="AA">
                                                                American Airlines
                                                            </option>
                                                            <option value="OY">
                                                                Andes Lineas Aereas
                                                            </option>
                                                            <option value="OZ">Asiana Airlines</option>
                                                            <option value="KP">ASKY</option>
                                                            <option value="OS">
                                                                Austrian Airlines
                                                            </option>
                                                            <option value="AV">Avianca</option>
                                                            <option value="2K">Avianca Ecuador</option>
                                                            <option value="9V">Avior Airlines</option>
                                                            <option value="J2">
                                                                Azerbaijan Airlines
                                                            </option>
                                                            <option value="AD">Azul</option>
                                                            <option value="JD">
                                                                Beijing Capital Airlines
                                                            </option>
                                                            <option value="0B">BlueAir</option>
                                                            <option value="OB">
                                                                Boliviana De Aviacion
                                                            </option>
                                                            <option value="4B">Boutique Air</option>
                                                            <option value="BA">British Airways</option>
                                                            <option value="SN">
                                                                Brussels Airlines
                                                            </option>
                                                            <option value="A7">Calafia Airlines</option>
                                                            <option value="K6">
                                                                Cambodia Angkor Air
                                                            </option>
                                                            <option value="BW">
                                                                Caribbean Airlines
                                                            </option>
                                                            <option value="CX">Cathay Pacific</option>
                                                            <option value="KX">Cayman Airways</option>
                                                            <option value="CI">China Airlines</option>
                                                            <option value="MU">
                                                                China Eastern Airlines
                                                            </option>
                                                            <option value="CZ">
                                                                China Southern Airlines
                                                            </option>
                                                            <option value="CC">CM Airlines</option>
                                                            <option value="DE">Condor</option>
                                                            <option value="LF">Contour Airlines</option>
                                                            <option value="CM">Copa</option>
                                                            <option value="SS">Corsair</option>
                                                            <option value="OK">Czech Airlines</option>
                                                            <option value="DL">Delta</option>
                                                            <option value="KG">
                                                                Denver Air Connection
                                                            </option>
                                                            <option value="U2">easyJet</option>
                                                            <option value="MS">Egyptair</option>
                                                            <option value="LY">
                                                                EL AL Israel Airlines
                                                            </option>
                                                            <option value="7Q">Elite Airways</option>
                                                            <option value="EL">Ellinair</option>
                                                            <option value="EK">Emirates</option>
                                                            <option value="ET">
                                                                Ethiopian Airlines
                                                            </option>
                                                            <option value="EY">Etihad Airways</option>
                                                            <option value="EW">Eurowings</option>
                                                            <option value="BR">EVA Airways</option>
                                                            <option value="FJ">Fiji Airways</option>
                                                            <option value="AY">Finnair</option>
                                                            <option value="FY">Firefly</option>
                                                            <option value="F8">Flair Airlines</option>
                                                            <option value="BE">Flybe</option>
                                                            <option value="FZ">flydubai</option>
                                                            <option value="XY">flynas</option>
                                                            <option value="F9">
                                                                Frontier Airlines
                                                            </option>
                                                            <option value="GA">Garuda Indonesia</option>
                                                            <option value="GM">Germania Flug AG</option>
                                                            <option value="4U">Germanwings</option>
                                                            <option value="G3">
                                                                GOL Linhas Aereas S.A.
                                                            </option>
                                                            <option value="ZK">
                                                                Great Lakes Airlines
                                                            </option>
                                                            <option value="GF">Gulf Air</option>
                                                            <option value="HU">Hainan Airlines</option>
                                                            <option value="HA">
                                                                Hawaiian Airlines
                                                            </option>
                                                            <option value="HX">
                                                                Hong Kong Airlines
                                                            </option>
                                                            <option value="IB">Iberia</option>
                                                            <option value="FI">Icelandair</option>
                                                            <option value="JY">
                                                                interCaribbean Airways
                                                            </option>
                                                            <option value="4O">Interjet</option>
                                                            <option value="03">Involatus</option>
                                                            <option value="JL">Japan Airlines</option>
                                                            <option value="9W">Jet Airways</option>
                                                            <option value="B6">JetBlue Airways</option>
                                                            <option value="DV">
                                                                JSC Aircompany SCAT
                                                            </option>
                                                            <option value="KQ">Kenya Airways</option>
                                                            <option value="KL">KLM</option>
                                                            <option value="KE">Korean Air</option>
                                                            <option value="B0">La Compagnie</option>
                                                            <option value="LR">LACSA</option>
                                                            <option value="QV">Lao Airlines</option>
                                                            <option value="LP">
                                                                LATAM Airlines Group
                                                            </option>
                                                            <option value="LA">
                                                                LATAM Airlines Group
                                                            </option>
                                                            <option value="JJ">
                                                                LATAM Airlines Group
                                                            </option>
                                                            <option value="XL">
                                                                LATAM Airlines Group
                                                            </option>
                                                            <option value="4M">
                                                                LATAM Airlines Group
                                                            </option>
                                                            <option value="W4">LC Peru</option>
                                                            <option value="LI">Liat</option>
                                                            <option value="LO">
                                                                LOT-Polish Airlines
                                                            </option>
                                                            <option value="LH">Lufthansa</option>
                                                            <option value="LG">Luxair</option>
                                                            <option value="MH">
                                                                Malaysia Airlines
                                                            </option>
                                                            <option value="OD">Malindo Air</option>
                                                            <option value="2M">Maya Island Air</option>
                                                            <option value="7M">Mayair</option>
                                                            <option value="OM">
                                                                MIAT-Mongolian Airlines
                                                            </option>
                                                            <option value="ME">
                                                                Middle East Airlines
                                                            </option>
                                                            <option value="YM">Montenegro</option>
                                                            <option value="8M">
                                                                Myanmar Airways International
                                                            </option>
                                                            <option value="NO">Neos S.P.A.</option>
                                                            <option value="RA">Nepal Airlines</option>
                                                            <option value="NP">Nile Air</option>
                                                            <option value="W/">
                                                                NokScoot with baggage
                                                            </option>
                                                            <option value="DN">
                                                                Norwegian Air Argentina
                                                            </option>
                                                            <option value="D8">
                                                                Norwegian Air International Ltd
                                                            </option>
                                                            <option value="DY">
                                                                Norwegian Air Shuttle
                                                            </option>
                                                            <option value="DI">Norwegian Air UK</option>
                                                            <option value="Y/">
                                                                Olympic Air with baggage
                                                            </option>
                                                            <option value="WY">Oman Air</option>
                                                            <option value="8Q">Onur Air</option>
                                                            <option value="8P">
                                                                Pacific Coastal Airlines
                                                            </option>
                                                            <option value="PK">
                                                                Pakistan International Airlines
                                                            </option>
                                                            <option value="ZM">Pegasus Asia</option>
                                                            <option value="KS">PenAir</option>
                                                            <option value="PR">
                                                                Philippine Airlines
                                                            </option>
                                                            <option value="PU">
                                                                Plus Ultra Lineas Aereas S. A.
                                                            </option>
                                                            <option value="PD">Porter Airlines</option>
                                                            <option value="PW">PrecisionAir</option>
                                                            <option value="P0">Proflight Zambia</option>
                                                            <option value="QF">Qantas Airways</option>
                                                            <option value="QR">Qatar Airways</option>
                                                            <option value="7H">Ravn Alaska</option>
                                                            <option value="WZ">
                                                                Red Wings Airlines
                                                            </option>
                                                            <option value="4P">Regional Sky</option>
                                                            <option value="AT">Royal Air Maroc</option>
                                                            <option value="BI">
                                                                Royal Brunei Airlines
                                                            </option>
                                                            <option value="RJ">Royal Jordanian</option>
                                                            <option value="WB">Rwandair</option>
                                                            <option value="SK">SAS</option>
                                                            <option value="S4">
                                                                SATA International-Azores Airlines S.A.
                                                            </option>
                                                            <option value="SV">
                                                                Saudi Arabian Airlines
                                                            </option>
                                                            <option value="/Y">
                                                                Scoot with baggage
                                                            </option>
                                                            <option value="BB">
                                                                Seaborne Airlines
                                                            </option>
                                                            <option value="SC">
                                                                Shandong Airlines
                                                            </option>
                                                            <option value="3U">Sichuan Airlines</option>
                                                            <option value="3M">Silver Airways</option>
                                                            <option value="SQ">
                                                                Singapore Airlines
                                                            </option>
                                                            <option value="H2">Sky Airlines</option>
                                                            <option value="GQ">Sky Express</option>
                                                            <option value="IE">Solomon Airlines</option>
                                                            <option value="SA">
                                                                South African Airways
                                                            </option>
                                                            <option value="9X">Southern Airways</option>
                                                            <option value="NK">Spirit Airlines</option>
                                                            <option value="UL">
                                                                SriLankan Airlines
                                                            </option>
                                                            <option value="2I">STAR PERU</option>
                                                            <option value="6G">Sun Air Express</option>
                                                            <option value="SY">
                                                                Sun Country Airlines
                                                            </option>
                                                            <option value="PY">Surinam Airways</option>
                                                            <option value="LX">
                                                                Swiss International Air Lines
                                                            </option>
                                                            <option value="WO">Swoop</option>
                                                            <option value="DT">
                                                                TAAG Angola Airlines
                                                            </option>
                                                            <option value="TA">TACA Airlines</option>
                                                            <option value="VR">
                                                                TACV-Cabo Verde Airlines
                                                            </option>
                                                            <option value="5U">TAG Airlines</option>
                                                            <option value="EQ">Tame</option>
                                                            <option value="TP">TAP Portugal</option>
                                                            <option value="RO">
                                                                Tarom-Romanian Air Transport
                                                            </option>
                                                            <option value="TG">
                                                                Thai Airways International
                                                            </option>
                                                            <option value="MT">
                                                                Thomas Cook Airlines
                                                            </option>
                                                            <option value="/X">
                                                                Tigerair Australia with Bag
                                                            </option>
                                                            <option value="IT">Tigerair Taiwan</option>
                                                            <option value="/Z">
                                                                Tigerair Taiwan with bag
                                                            </option>
                                                            <option value="TJ">
                                                                Tradewind Aviation
                                                            </option>
                                                            <option value="9N">Tropic Air</option>
                                                            <option value="TB">TUI fly</option>
                                                            <option value="TK">Turkish Airlines</option>
                                                            <option value="PS">
                                                                Ukraine International Airlines
                                                            </option>
                                                            <option value="UA">United</option>
                                                            <option value="UT">Utair Aviation</option>
                                                            <option value="HY">
                                                                Uzbekistan Airways
                                                            </option>
                                                            <option value="VN">Vietnam Airlines</option>
                                                            <option value="VX">Virgin America</option>
                                                            <option value="VS">Virgin Atlantic</option>
                                                            <option value="VA">Virgin Australia</option>
                                                            <option value="V2">Vision Airlines</option>
                                                            <option value="VB">Viva Aerobus</option>
                                                            <option value="F1">
                                                                Viva Air Colombia
                                                            </option>
                                                            <option value="VV">
                                                                Viva Airlines Peru
                                                            </option>
                                                            <option value="Y4">Volaris</option>
                                                            <option value="V7">Volotea</option>
                                                            <option value="VY">Vueling Airlines</option>
                                                            <option value="WS">WestJet</option>
                                                            <option value="WM">
                                                                Windward Island Airways International
                                                            </option>
                                                            <option value="MF">Xiamen Airlines</option>
                                                            <option value="SE">XL Airways</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end advanced-wrap -->
                        </div>
                        <!-- end tab-pane -->
                        <div
                            class="tab-pane fade multi-flight-wrap"
                            id="multi-city"
                            role="tabpanel"
                            aria-labelledby="multi-city-tab"
                        >
                            <div
                                class="contact-form-action multi-flight-field d-flex align-items-center"
                            >
                                <form
                                    action="#"
                                    class="row flex-grow-1 align-items-center"
                                >
                                    <div class="col-lg-4 pe-0">
                                        <div class="input-box">
                                            <label class="label-text">Flying from</label>
                                            <div class="form-group">
                                                <span class="la la-map-marker form-icon"></span>
                                                <input
                                                    class="form-control"
                                                    type="text"
                                                    placeholder="City or airport"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col-lg-3 -->
                                    <div class="col-lg-4 pe-0">
                                        <div class="input-box">
                                            <label class="label-text">Flying to</label>
                                            <div class="form-group">
                                                <span class="la la-map-marker form-icon"></span>
                                                <input
                                                    class="form-control"
                                                    type="text"
                                                    placeholder="City or airport"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col-lg-3 -->
                                    <div class="col-lg-4">
                                        <div class="input-box">
                                            <label class="label-text">Departing</label>
                                            <div class="form-group">
                                                <span class="la la-calendar form-icon"></span>
                                                <input
                                                    class="date-range form-control date-multi-picker"
                                                    type="text"
                                                    name="daterange-single"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col-lg-3 -->
                                </form>
                                <div class="multi-flight-delete-wrap pt-3 ps-3">
                                    <button class="multi-flight-remove" type="button">
                                        <i class="la la-remove"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-lg-3 pe-0">
                                    <div class="form-group">
                                        <button
                                            class="theme-btn add-flight-btn margin-top-40px w-100"
                                            type="button"
                                        >
                                            <i class="la la-plus me-1"></i>Add another flight
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg-3 pe-0">
                                    <div class="input-box">
                                        <label class="label-text">Passengers</label>
                                        <div class="form-group">
                                            <div
                                                class="dropdown dropdown-contain gty-container"
                                            >
                                                <a
                                                    class="dropdown-toggle dropdown-btn"
                                                    href="#"
                                                    role="button"
                                                    data-bs-toggle="dropdown"
                                                    aria-expanded="false"
                                                >
                                <span
                                    class="adult"
                                    data-text="Adult"
                                    data-text-multi="Adults"
                                >0 Adult</span
                                >
                                                    -
                                                    <span
                                                        class="children"
                                                        data-text="Child"
                                                        data-text-multi="Children"
                                                    >0 Child</span
                                                    >
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-wrap">
                                                    <div class="dropdown-item">
                                                        <div
                                                            class="qty-box d-flex align-items-center justify-content-between"
                                                        >
                                                            <label>Adults</label>
                                                            <div
                                                                class="qtyBtn d-flex align-items-center"
                                                            >
                                                                <div class="qtyDec">
                                                                    <i class="la la-minus"></i>
                                                                </div>
                                                                <input
                                                                    type="text"
                                                                    name="adult_number"
                                                                    value="0"
                                                                />
                                                                <div class="qtyInc">
                                                                    <i class="la la-plus"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item">
                                                        <div
                                                            class="qty-box d-flex align-items-center justify-content-between"
                                                        >
                                                            <label>Children</label>
                                                            <div
                                                                class="qtyBtn d-flex align-items-center"
                                                            >
                                                                <div class="qtyDec">
                                                                    <i class="la la-minus"></i>
                                                                </div>
                                                                <input
                                                                    type="text"
                                                                    name="child_number"
                                                                    value="0"
                                                                />
                                                                <div class="qtyInc">
                                                                    <i class="la la-plus"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item">
                                                        <div
                                                            class="qty-box d-flex align-items-center justify-content-between"
                                                        >
                                                            <label>Infants</label>
                                                            <div
                                                                class="qtyBtn d-flex align-items-center"
                                                            >
                                                                <div class="qtyDec">
                                                                    <i class="la la-minus"></i>
                                                                </div>
                                                                <input
                                                                    type="text"
                                                                    name="infants_number"
                                                                    value="0"
                                                                    class="qty-input"
                                                                />
                                                                <div class="qtyInc">
                                                                    <i class="la la-plus"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end dropdown-->
                                        </div>
                                    </div>
                                </div>
                                <!-- end col-lg-3 -->
                                <div class="col-lg-3 pe-0">
                                    <div class="input-box">
                                        <label class="label-text">Coach</label>
                                        <div class="form-group select2-container-wrapper">
                                            <div
                                                class="select-contain select-contain-shadow w-auto"
                                            >
                                                <select class="select-contain-select">
                                                    <option value="1" selected>Economy</option>
                                                    <option value="2">Business</option>
                                                    <option value="3">First class</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col-lg-3 -->
                                <div class="col-lg-3">
                                    <a
                                        href="flight-search-result.html"
                                        class="theme-btn w-100 text-center margin-top-20px"
                                    >Search Now</a
                                    >
                                </div>
                            </div>
                        </div>
                        <!-- end tab-pane -->
                    </div>
                </div>
                <!-- end main-search-input -->
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end info-area -->
<!-- ================================
END INFO AREA
================================= -->

<div class="section-block"></div>

<!-- ================================
START DESTINATION AREA
================================= -->
<section class="destination-area padding-top-100px padding-bottom-80px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h2 class="sec__title">Featured Flight Deals</h2>
                </div>
                <!-- end section-heading -->
            </div>
            <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
        <div class="row padding-top-60px">
            <div class="col-lg-4 responsive-column">
                <div class="card-item flight-card">
                    <div class="card-img">
                        <a href="flight-single.html" class="d-block">
                            <img src="/trizen-demo/html/images/img15.jpg" alt="destination-img" />
                            <span class="badge">Paris</span>
                        </a>
                    </div>
                    <div class="card-body">
                        <img
                            src="/trizen-demo/html/images/american-airline.png"
                            alt=""
                            class="flight-logo"
                        />
                        <h3 class="card-title">
                            <a href="flight-single.html">London to Paris</a>
                        </h3>
                        <p class="card-meta">One way Flight</p>
                        <div
                            class="card-price d-flex align-items-center justify-content-between"
                        >
                            <p>
                                <span class="price__from">From</span>
                                <span class="price__num">$399.00</span>
                            </p>
                            <a href="flight-single.html" class="btn-text"
                            >Read details<i class="la la-angle-right"></i
                                ></a>
                        </div>
                    </div>
                </div>
                <!-- end card-item -->
            </div>
            <!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="card-item flight-card">
                    <div class="card-img">
                        <a href="flight-single.html" class="d-block">
                            <img src="/trizen-demo/html/images/img16.jpg" alt="destination-img" />
                            <span class="badge">Spain</span>
                            <span class="badge badge-ribbon">Save 29%</span>
                        </a>
                    </div>
                    <div class="card-body">
                        <img
                            src="/trizen-demo/html/images/united-airline.png"
                            alt=""
                            class="flight-logo"
                        />
                        <h3 class="card-title">
                            <a href="flight-single.html">Dubai to Spain</a>
                        </h3>
                        <p class="card-meta">Round-trip Flight</p>
                        <div
                            class="card-price d-flex align-items-center justify-content-between"
                        >
                            <p>
                                <span class="price__from">From</span>
                                <span class="price__num">$570.00</span>
                                <span class="price__num before-price color-text-3"
                                >$599.00</span
                                >
                            </p>
                            <a href="flight-single.html" class="btn-text"
                            >Read details<i class="la la-angle-right"></i
                                ></a>
                        </div>
                    </div>
                </div>
                <!-- end card-item -->
            </div>
            <!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="card-item flight-card">
                    <div class="card-img">
                        <a href="flight-single.html" class="d-block">
                            <img src="/trizen-demo/html/images/img17.jpg" alt="destination-img" />
                            <span class="badge">Australia</span>
                        </a>
                    </div>
                    <div class="card-body">
                        <img src="/trizen-demo/html/images/air-france.png" alt="" class="flight-logo" />
                        <h3 class="card-title">
                            <a href="flight-single.html">Bangkok to Australia</a>
                        </h3>
                        <p class="card-meta">One way Flight</p>
                        <div
                            class="card-price d-flex align-items-center justify-content-between"
                        >
                            <p>
                                <span class="price__from">From</span>
                                <span class="price__num">$299.00</span>
                            </p>
                            <a href="flight-single.html" class="btn-text"
                            >Read details<i class="la la-angle-right"></i
                                ></a>
                        </div>
                    </div>
                </div>
                <!-- end card-item -->
            </div>
            <!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="card-item flight-card">
                    <div class="card-img">
                        <a href="flight-single.html" class="d-block">
                            <img src="/trizen-demo/html/images/img18.jpg" alt="destination-img" />
                            <span class="badge">Turkey</span>
                        </a>
                    </div>
                    <div class="card-body">
                        <img
                            src="/trizen-demo/html/images/american-airline.png"
                            alt=""
                            class="flight-logo"
                        />
                        <h3 class="card-title">
                            <a href="flight-single.html">London to Turkey</a>
                        </h3>
                        <p class="card-meta">Round-trip Flight</p>
                        <div
                            class="card-price d-flex align-items-center justify-content-between"
                        >
                            <p>
                                <span class="price__from">From</span>
                                <span class="price__num">$599.00</span>
                            </p>
                            <a href="flight-single.html" class="btn-text"
                            >Read details<i class="la la-angle-right"></i
                                ></a>
                        </div>
                    </div>
                </div>
                <!-- end card-item -->
            </div>
            <!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="card-item flight-card">
                    <div class="card-img">
                        <a href="flight-single.html" class="d-block">
                            <img src="/trizen-demo/html/images/img19.jpg" alt="destination-img" />
                            <span class="badge">Dubai</span>
                        </a>
                    </div>
                    <div class="card-body">
                        <img
                            src="/trizen-demo/html/images/delta-airline.png"
                            alt=""
                            class="flight-logo"
                        />
                        <h3 class="card-title">
                            <a href="flight-single.html">New york to Dubai</a>
                        </h3>
                        <p class="card-meta">Round-trip Flight</p>
                        <div
                            class="card-price d-flex align-items-center justify-content-between"
                        >
                            <p>
                                <span class="price__from">From</span>
                                <span class="price__num">$599.00</span>
                            </p>
                            <a href="flight-single.html" class="btn-text"
                            >Read details<i class="la la-angle-right"></i
                                ></a>
                        </div>
                    </div>
                </div>
                <!-- end card-item -->
            </div>
            <!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="card-item flight-card">
                    <div class="card-img">
                        <a href="flight-single.html" class="d-block">
                            <img
                                src="/trizen-demo/html/images/destination-img3.jpg"
                                alt="destination-img"
                            />
                            <span class="badge">Chicago</span>
                        </a>
                    </div>
                    <div class="card-body">
                        <img
                            src="/trizen-demo/html/images/cathay-pacific-airline.png"
                            alt=""
                            class="flight-logo"
                        />
                        <h3 class="card-title">
                            <a href="flight-single.html">Dhaka to Chicago</a>
                        </h3>
                        <p class="card-meta">One way Flight</p>
                        <div
                            class="card-price d-flex align-items-center justify-content-between"
                        >
                            <p>
                                <span class="price__from">From</span>
                                <span class="price__num">$399.00</span>
                            </p>
                            <a href="flight-single.html" class="btn-text"
                            >Read details<i class="la la-angle-right"></i
                                ></a>
                        </div>
                    </div>
                </div>
                <!-- end card-item -->
            </div>
            <!-- end col-lg-4 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end destination-area -->
<!-- ================================
END DESTINATION AREA
================================= -->

<!-- ================================
START LOW FARE AREA
================================= -->
<section class="low-fare-area padding-bottom-100px">
    <div class="container">
        <div class="row">
            <div class="discount-box">
                <div class="discount-img">
                    <img src="/trizen-demo/html/images/scooter.jpg" alt="scooter-img" />
                </div>
                <!-- end discount-img -->
                <div class="discount-content">
                    <div class="section-heading">
                        <h2 class="sec__title mb-2 line-height-50 text-white">
                            Got flexible travel plans?
                        </h2>
                        <p class="sec__desc text-white">
                            Use our Low Fare Calendar to find the cheapest flights
                            available <br />
                            inside your travel window.
                        </p>
                    </div>
                    <!-- end section-heading -->
                    <div class="btn-box pt-4">
                        <a href="#" class="theme-btn border-0"
                        >Find flights <i class="la la-arrow-right ms-1"></i
                            ></a>
                    </div>
                </div>
                <!-- end discount-content -->
            </div>
        </div>
    </div>
</section>
<!-- ================================
END LOW FARE AREA
================================= -->

<!-- ================================
START DESTINATION AREA
================================= -->
<section
    class="destination-area position-relative section-bg padding-top-100px padding-bottom-140px"
>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h2 class="sec__title">Top Destinations</h2>
                </div>
                <!-- end section-heading -->
            </div>
            <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
        <div class="row padding-top-60px">
            <div class="col-lg-12">
                <div class="car-wrap">
                    <div class="car-carousel carousel-action">
                        <div class="card-item destination-card">
                            <div class="card-img">
                                <img
                                    src="/trizen-demo/html/images/destination-img2.jpg"
                                    alt="destination-img"
                                />
                                <span class="badge">New York</span>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">
                                    <a href="tour-details.html">Main Street Park</a>
                                </h3>
                                <div class="card-rating d-flex align-items-center">
                      <span class="ratings d-flex align-items-center me-1">
                        <i class="la la-star"></i>
                        <i class="la la-star"></i>
                        <i class="la la-star"></i>
                        <i class="la la-star-o"></i>
                        <i class="la la-star-o"></i>
                      </span>
                                    <span class="rating__text">(70694 Reviews)</span>
                                </div>
                                <div
                                    class="card-price d-flex align-items-center justify-content-between"
                                >
                                    <p class="tour__text">50 Tours</p>
                                    <p>
                                        <span class="price__from">Price</span>
                                        <span class="price__num">$58.00</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- end card-item -->
                        <div class="card-item destination-card">
                            <div class="card-img">
                                <img
                                    src="/trizen-demo/html/images/destination-img3.jpg"
                                    alt="destination-img"
                                />
                                <span class="badge">chicago</span>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">
                                    <a href="tour-details.html">Chicago Cultural Center</a>
                                </h3>
                                <div class="card-rating d-flex align-items-center">
                      <span class="ratings d-flex align-items-center me-1">
                        <i class="la la-star"></i>
                        <i class="la la-star"></i>
                        <i class="la la-star"></i>
                        <i class="la la-star"></i>
                        <i class="la la-star-o"></i>
                      </span>
                                    <span class="rating__text">(70694 Reviews)</span>
                                </div>
                                <div
                                    class="card-price d-flex align-items-center justify-content-between"
                                >
                                    <p class="tour__text">50 Tours</p>
                                    <p>
                                        <span class="price__from">Price</span>
                                        <span class="price__num">$68.00</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- end card-item -->
                        <div class="card-item destination-card">
                            <div class="card-img">
                                <img
                                    src="/trizen-demo/html/images/destination-img4.jpg"
                                    alt="destination-img"
                                />
                                <span class="badge">Hong Kong</span>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">
                                    <a href="tour-details.html">Lugard Road Lookout</a>
                                </h3>
                                <div class="card-rating d-flex align-items-center">
                      <span class="ratings d-flex align-items-center me-1">
                        <i class="la la-star"></i>
                        <i class="la la-star"></i>
                        <i class="la la-star"></i>
                        <i class="la la-star-o"></i>
                        <i class="la la-star-o"></i>
                      </span>
                                    <span class="rating__text">(70694 Reviews)</span>
                                </div>
                                <div
                                    class="card-price d-flex align-items-center justify-content-between"
                                >
                                    <p class="tour__text">150 Tours</p>
                                    <p>
                                        <span class="price__from">Price</span>
                                        <span class="price__num">$79.00</span>
                                        <span class="price__num before-price">$89.00</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- end card-item -->
                        <div class="card-item destination-card">
                            <div class="card-img">
                                <img
                                    src="/trizen-demo/html/images/destination-img5.jpg"
                                    alt="destination-img"
                                />
                                <span class="badge">Las Vegas</span>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">
                                    <a href="tour-details.html">Planet Hollywood Resort</a>
                                </h3>
                                <div class="card-rating d-flex align-items-center">
                      <span class="ratings d-flex align-items-center me-1">
                        <i class="la la-star"></i>
                        <i class="la la-star"></i>
                        <i class="la la-star"></i>
                        <i class="la la-star"></i>
                        <i class="la la-star-o"></i>
                      </span>
                                    <span class="rating__text">(70694 Reviews)</span>
                                </div>
                                <div
                                    class="card-price d-flex align-items-center justify-content-between"
                                >
                                    <p class="tour__text">50 Tours</p>
                                    <p>
                                        <span class="price__from">Price</span>
                                        <span class="price__num">$88.00</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- end card-item -->
                    </div>
                    <!-- end car-carousel -->
                </div>
            </div>
            <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
    <svg class="cta-svg" viewBox="0 0 500 150" preserveAspectRatio="none">
        <path
            d="M-103.55,167.27 C150.39,-132.72 134.59,237.33 517.77,30.09 L500.00,150.00 L0.00,150.00 Z"
        ></path>
    </svg>
</section>
<!-- end destination-area -->
<!-- ================================
END DESTINATION AREA
================================= -->

<!-- ================================
START DEAL AREA
================================= -->
<section class="deal padding-top-60px padding-bottom-80px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h2 class="sec__title">Travel Deals</h2>
                </div>
                <!-- end section-heading -->
            </div>
            <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
        <div class="row padding-top-50px">
            <div class="col-lg-3 responsive-column">
                <div class="deal-list">
                    <div
                        class="d-flex align-items-center justify-content-between mb-3"
                    >
                        <h5 class="title">
                            <a href="flight-single.html">San Francisco</a>
                        </h5>
                        <span class="font-weight-bold font-size-18">$359.00</span>
                    </div>
                    <a href="flight-single.html" class="theme-btn theme-btn-small"
                    >Book</a
                    >
                </div>
            </div>
            <!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="deal-list">
                    <div
                        class="d-flex align-items-center justify-content-between mb-3"
                    >
                        <h5 class="title"><a href="flight-single.html">Spain</a></h5>
                        <span class="font-weight-bold font-size-18">$359.00</span>
                    </div>
                    <a href="flight-single.html" class="theme-btn theme-btn-small"
                    >Book</a
                    >
                </div>
            </div>
            <!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="deal-list">
                    <div
                        class="d-flex align-items-center justify-content-between mb-3"
                    >
                        <h5 class="title"><a href="flight-single.html">Italy</a></h5>
                        <span class="font-weight-bold font-size-18">$359.00</span>
                    </div>
                    <a href="flight-single.html" class="theme-btn theme-btn-small"
                    >Book</a
                    >
                </div>
            </div>
            <!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="deal-list">
                    <div
                        class="d-flex align-items-center justify-content-between mb-3"
                    >
                        <h5 class="title"><a href="flight-single.html">Florida</a></h5>
                        <span class="font-weight-bold font-size-18">$359.00</span>
                    </div>
                    <a href="flight-single.html" class="theme-btn theme-btn-small"
                    >Book</a
                    >
                </div>
            </div>
            <!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="deal-list">
                    <div
                        class="d-flex align-items-center justify-content-between mb-3"
                    >
                        <h5 class="title">
                            <a href="flight-single.html">Philippines</a>
                        </h5>
                        <span class="font-weight-bold font-size-18">$359.00</span>
                    </div>
                    <a href="flight-single.html" class="theme-btn theme-btn-small"
                    >Book</a
                    >
                </div>
            </div>
            <!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="deal-list">
                    <div
                        class="d-flex align-items-center justify-content-between mb-3"
                    >
                        <h5 class="title">
                            <a href="flight-single.html">Australia</a>
                        </h5>
                        <span class="font-weight-bold font-size-18">$359.00</span>
                    </div>
                    <a href="flight-single.html" class="theme-btn theme-btn-small"
                    >Book</a
                    >
                </div>
            </div>
            <!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="deal-list">
                    <div
                        class="d-flex align-items-center justify-content-between mb-3"
                    >
                        <h5 class="title"><a href="flight-single.html">Hawaii</a></h5>
                        <span class="font-weight-bold font-size-18">$359.00</span>
                    </div>
                    <a href="flight-single.html" class="theme-btn theme-btn-small"
                    >Book</a
                    >
                </div>
            </div>
            <!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="deal-list">
                    <div
                        class="d-flex align-items-center justify-content-between mb-3"
                    >
                        <h5 class="title">
                            <a href="flight-single.html">Las Vegas</a>
                        </h5>
                        <span class="font-weight-bold font-size-18">$359.00</span>
                    </div>
                    <a href="flight-single.html" class="theme-btn theme-btn-small"
                    >Book</a
                    >
                </div>
            </div>
            <!-- end col-lg-3 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end deal -->
<!-- ================================
END DEAL AREA
================================= -->

<div class="section-block"></div>

<!-- ================================
   START BLOG AREA
================================= -->
<section class="blog-area section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h2 class="sec__title">Travel Advice and Inspiration</h2>
                </div>
                <!-- end section-heading -->
            </div>
            <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
        <div class="row padding-top-60px">
            <div class="col-lg-4 responsive-column">
                <div class="card-item blog-card">
                    <div class="card-img">
                        <img src="/trizen-demo/html/images/blog-img.jpg" alt="blog-img" />
                        <div class="post-format icon-element">
                            <i class="la la-photo"></i>
                        </div>
                        <div class="card-body">
                            <div class="post-categories">
                                <a href="#" class="badge">Travel</a>
                                <a href="#" class="badge">lifestyle</a>
                            </div>
                            <h3 class="card-title line-height-26">
                                <a href="blog-single.html"
                                >When Traveling Avoid Expensive Hotels & Resorts</a
                                >
                            </h3>
                            <p class="card-meta">
                                <span class="post__date"> 1 January, 2020</span>
                                <span class="post-dot"></span>
                                <span class="post__time">5 Mins read</span>
                            </p>
                        </div>
                    </div>
                    <div
                        class="card-footer d-flex align-items-center justify-content-between"
                    >
                        <div class="author-content d-flex align-items-center">
                            <div class="author-img">
                                <img src="/trizen-demo/html/images/small-team1.jpg" alt="testimonial image" />
                            </div>
                            <div class="author-bio">
                                <a href="#" class="author__title">Leroy Bell</a>
                            </div>
                        </div>
                        <div class="post-share">
                            <ul>
                                <li>
                                    <i class="la la-share icon-element"></i>
                                    <ul class="post-share-dropdown d-flex align-items-center">
                                        <li>
                                            <a href="#"><i class="lab la-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="lab la-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="lab la-instagram"></i></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end card-item -->
            </div>
            <!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="card-item blog-card">
                    <div class="card-img">
                        <img src="/trizen-demo/html/images/blog-img2.jpg" alt="blog-img" />
                        <div class="post-format icon-element">
                            <i class="la la-play"></i>
                        </div>
                        <div class="card-body">
                            <div class="post-categories">
                                <a href="#" class="badge">Video</a>
                            </div>
                            <h3 class="card-title line-height-26">
                                <a href="blog-single.html"
                                >My Best Travel Tips: The Ultimate Travel Guide</a
                                >
                            </h3>
                            <p class="card-meta">
                                <span class="post__date"> 1 February, 2020</span>
                                <span class="post-dot"></span>
                                <span class="post__time">4 Mins read</span>
                            </p>
                        </div>
                    </div>
                    <div
                        class="card-footer d-flex align-items-center justify-content-between"
                    >
                        <div class="author-content d-flex align-items-center">
                            <div class="author-img">
                                <img src="/trizen-demo/html/images/small-team2.jpg" alt="testimonial image" />
                            </div>
                            <div class="author-bio">
                                <a href="#" class="author__title">Phillip Hunt</a>
                            </div>
                        </div>
                        <div class="post-share">
                            <ul>
                                <li>
                                    <i class="la la-share icon-element"></i>
                                    <ul class="post-share-dropdown d-flex align-items-center">
                                        <li>
                                            <a href="#"><i class="lab la-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="lab la-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="lab la-instagram"></i></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end card-item -->
            </div>
            <!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="card-item blog-card">
                    <div class="card-img">
                        <img src="/trizen-demo/html/images/blog-img3.jpg" alt="blog-img" />
                        <div class="post-format icon-element">
                            <i class="la la-music"></i>
                        </div>
                        <div class="card-body">
                            <div class="post-categories">
                                <a href="#" class="badge">audio</a>
                            </div>
                            <h3 class="card-title line-height-26">
                                <a href="blog-single.html">
                                    Travel to Popular Sites & Don’t Rule Out Other
                                    Locations</a
                                >
                            </h3>
                            <p class="card-meta">
                                <span class="post__date"> 1 March, 2020</span>
                                <span class="post-dot"></span>
                                <span class="post__time">3 Mins read</span>
                            </p>
                        </div>
                    </div>
                    <div
                        class="card-footer d-flex align-items-center justify-content-between"
                    >
                        <div class="author-content d-flex align-items-center">
                            <div class="author-img">
                                <img src="/trizen-demo/html/images/small-team3.jpg" alt="testimonial image" />
                            </div>
                            <div class="author-bio">
                                <a href="#" class="author__title">Luke Jacobs</a>
                            </div>
                        </div>
                        <div class="post-share">
                            <ul>
                                <li>
                                    <i class="la la-share icon-element"></i>
                                    <ul class="post-share-dropdown d-flex align-items-center">
                                        <li>
                                            <a href="#"><i class="lab la-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="lab la-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="lab la-instagram"></i></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end card-item -->
            </div>
            <!-- end col-lg-4 -->
        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="btn-box text-center pt-4">
                    <a href="blog-grid.html" class="theme-btn">Read More Post</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end container -->
</section>
<!-- end blog-area -->
<!-- ================================
   START BLOG AREA
================================= -->

<!-- ================================
START CTA AREA
================================= -->
<section
    class="cta-area subscriber-area section-bg-2 padding-top-60px padding-bottom-60px"
>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="section-heading">
                    <h2 class="sec__title font-size-30 text-white">
                        Subscribe to see Secret Deals
                    </h2>
                </div>
                <!-- end section-heading -->
            </div>
            <!-- end col-lg-7 -->
            <div class="col-lg-5">
                <div class="subscriber-box">
                    <div class="contact-form-action">
                        <form action="#">
                            <div class="input-box">
                                <label class="label-text text-white"
                                >Enter email address</label
                                >
                                <div class="form-group mb-0">
                                    <span class="la la-envelope form-icon"></span>
                                    <input
                                        class="form-control"
                                        type="email"
                                        name="email"
                                        placeholder="Email address"
                                    />
                                    <button
                                        class="theme-btn theme-btn-small submit-btn"
                                        type="submit"
                                    >
                                        Subscribe
                                    </button>
                                    <span class="font-size-14 pt-1 text-white-50"
                                    ><i class="la la-lock me-1"></i>Don't worry your
                        information is safe with us.</span
                                    >
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end section-heading -->
            </div>
            <!-- end col-lg-5 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end cta-area -->
<!-- ================================
END CTA AREA
================================= -->

<!-- ================================
   START FOOTER AREA
================================= -->
<section
    class="footer-area section-bg padding-top-100px padding-bottom-30px"
>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 responsive-column">
                <div class="footer-item">
                    <div class="footer-logo padding-bottom-30px">
                        <a href="index.html" class="foot__logo"
                        ><img src="/trizen-demo/html/images/logo.png" alt="logo"
                            /></a>
                    </div>
                    <!-- end logo -->
                    <p class="footer__desc">
                        Morbi convallis bibendum urna ut viverra. Maecenas consequat
                    </p>
                    <ul class="list-items pt-3">
                        <li>
                            3015 Grand Ave, Coconut Grove,<br />
                            Cerrick Way, FL 12345
                        </li>
                        <li>+123-456-789</li>
                        <li><a href="#">trizen@yourwebsite.com</a></li>
                    </ul>
                </div>
                <!-- end footer-item -->
            </div>
            <!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="footer-item">
                    <h4
                        class="title curve-shape pb-3 margin-bottom-20px"
                        data-text="curvs"
                    >
                        Company
                    </h4>
                    <ul class="list-items list--items">
                        <li><a href="about.html">About us</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="blog-grid.html">News</a></li>
                        <li><a href="contact.html">Support</a></li>
                        <li><a href="#">Advertising</a></li>
                    </ul>
                </div>
                <!-- end footer-item -->
            </div>
            <!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="footer-item">
                    <h4
                        class="title curve-shape pb-3 margin-bottom-20px"
                        data-text="curvs"
                    >
                        Other Services
                    </h4>
                    <ul class="list-items list--items">
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Trizen.com Rewards</a></li>
                        <li><a href="#">Partners</a></li>
                        <li><a href="#">List My Hotel</a></li>
                        <li><a href="#">All Hotels</a></li>
                        <li><a href="#">TV Ads</a></li>
                    </ul>
                </div>
                <!-- end footer-item -->
            </div>
            <!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="footer-item">
                    <h4
                        class="title curve-shape pb-3 margin-bottom-20px"
                        data-text="curvs"
                    >
                        Other Links
                    </h4>
                    <ul class="list-items list--items">
                        <li><a href="#">USA Vacation Packages</a></li>
                        <li><a href="#">USA Flights</a></li>
                        <li><a href="#">USA Hotels</a></li>
                        <li><a href="#">USA Car Hire</a></li>
                        <li><a href="#">Create an Account</a></li>
                        <li><a href="#">Trizen Reviews</a></li>
                    </ul>
                </div>
                <!-- end footer-item -->
            </div>
            <!-- end col-lg-3 -->
        </div>
        <!-- end row -->
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="term-box footer-item">
                    <ul class="list-items list--items d-flex align-items-center">
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Help Center</a></li>
                    </ul>
                </div>
            </div>
            <!-- end col-lg-8 -->
            <div class="col-lg-4">
                <div class="footer-social-box text-end">
                    <ul class="social-profile">
                        <li>
                            <a href="#"><i class="lab la-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="lab la-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="lab la-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="lab la-linkedin-in"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- end col-lg-4 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
    <div class="section-block mt-4"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="copy-right padding-top-30px">
                    <p class="copy__desc">
                        &copy; Copyright Trizen <span id="get-year"></span> . Made with
                        <span class="la la-heart"></span> by
                        <a href="https://themeforest.net/user/techydevs/portfolio"
                        >TechyDevs</a
                        >
                    </p>
                </div>
                <!-- end copy-right -->
            </div>
            <!-- end col-lg-7 -->
            <div class="col-lg-5">
                <div
                    class="copy-right-content d-flex align-items-center justify-content-end padding-top-30px"
                >
                    <h3 class="title font-size-15 pe-2">We Accept</h3>
                    <img src="/trizen-demo/html/images/payment-img.png" alt="" />
                </div>
                <!-- end copy-right-content -->
            </div>
            <!-- end col-lg-5 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end footer-area -->
<!-- ================================
   START FOOTER AREA
================================= -->

<!-- start back-to-top -->
<div id="back-to-top">
    <i class="la la-angle-up" title="Go top"></i>
</div>
<!-- end back-to-top -->

<!-- end modal-shared -->
<div class="modal-popup">
    <div class="modal fade" id="signupPopupForm" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title title" id="exampleModalLongTitle">
                            Register
                        </h5>
                        <p class="font-size-14">Hello! Welcome Create a New Account</p>
                    </div>
                    <button type="button" class="btn-close close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la la-close"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="contact-form-action">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="input-box">
                                <label class="label-text">Name</label>
                                <div class="form-group">
                                    <span class="la la-user form-icon"></span>
                                    <input id="name" class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" placeholder="Type your username" required autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Email Address</label>
                                <div class="form-group">
                                    <span class="la la-envelope form-icon"></span>
                                    <input id="email" class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" placeholder="Type your email" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Password</label>
                                <div class="form-group">
                                    <span class="la la-lock form-icon"></span>
                                    <input id="password" class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Type password" required autocomplete="new-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Repeat Password</label>
                                <div class="form-group">
                                    <span class="la la-lock form-icon"></span>
                                    <input id="password-confirm" class="form-control" type="password" name="password_confirmation" placeholder="Type again password" required autocomplete="new-password">
                                </div>
                            </div>
                            <!-- end input-box -->
                            <div class="btn-box pt-3 pb-4">
                                <button type="submit" class="theme-btn w-100">Register Account</button>
                            </div>
                        </form>
                    </div>
                    <!-- end contact-form-action -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end modal-popup -->

<!-- end modal-shared -->
<div class="modal-popup">
    <div class="modal fade" id="loginPopupForm" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title title" id="exampleModalLongTitle2">
                            Login
                        </h5>
                        <p class="font-size-14">Hello! Welcome to your account</p>
                    </div>
                    <button type="button" class="btn-close close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la la-close"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="contact-form-action">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="input-box mb-3">
                                <label class="label-text">Email Address</label>
                                <div class="form-group">
                                    <span class="la la-envelope form-icon"></span>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Type your email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- end input-box -->

                            <div class="input-box mb-3">
                                <label class="label-text">Password</label>
                                <div class="form-group">
                                    <span class="la la-lock form-icon"></span>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Type your password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- end input-box -->

                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">Remember me</label>
                                </div>
                                <p class="forgot-password">
                                    <a href="{{ route('password.request') }}">Forgot Password?</a>
                                </p>
                            </div>
                            <!-- end d-flex -->

                            <div class="btn-box">
                                <button type="submit" class="theme-btn w-100">Login Account</button>
                            </div>

                            <div class="action-box text-center">
                                <p class="font-size-14">Or Login Using</p>
                                <ul class="social-profile py-3">
                                    <li><a href="#" class="bg-5 text-white"><i class="lab la-facebook-f"></i></a></li>
                                    <li><a href="#" class="bg-6 text-white"><i class="lab la-twitter"></i></a></li>
                                    <li><a href="#" class="bg-7 text-white"><i class="lab la-instagram"></i></a></li>
                                    <li><a href="#" class="bg-5 text-white"><i class="lab la-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <!-- end action-box -->
                        </form>
                    </div>
                    <!-- end contact-form-action -->
                </div>
                <!-- end modal-body -->
            </div>
            <!-- end modal-content -->
        </div>
        <!-- end modal-dialog -->
    </div>
    <!-- end modal fade -->
</div>
<!-- end modal-popup -->

<!-- end modal-popup -->

<!-- Template JS Files -->
<script src="/trizen-demo/html/js/jquery-3.7.1.min.js"></script>
<script src="/trizen-demo/html/js/jquery-ui.js"></script>

<script src="/trizen-demo/html/js/bootstrap.bundle.min.js"></script>
<script src="/trizen-demo/html/js/select2.min.js"></script>
<script src="/trizen-demo/html/js/moment.min.js"></script>
<script src="/trizen-demo/html/js/daterangepicker.js"></script>
<script src="/trizen-demo/html/js/owl.carousel.min.js"></script>
<script src="/trizen-demo/html/js/jquery.fancybox.min.js"></script>
<script src="/trizen-demo/html/js/jquery.countTo.min.js"></script>
<script src="/trizen-demo/html/js/animated-headline.js"></script>
<script src="/trizen-demo/html/js/jquery.ripples-min.js"></script>
<script src="/trizen-demo/html/js/quantity-input.js"></script>
<script src="/trizen-demo/html/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-vy1oQbJQh7IjoxFPE0nJym4gNC8g+jNNpL/sKfONe+TQu2mXoZC43/OgS+6ZJkzR" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js" integrity="sha384-Ck75qsT0qS6R5bPfE5I6Y8Y0ccIQ5MiU2f2JbqYlUqYpmmRwhsf+igApfWBxWf5" crossorigin="anonymous"></script>
</body>

<!-- Mirrored from techydevs.com/demos/themes/html/trizen-demo/html/index6.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Jun 2024 08:51:31 GMT -->
</html>
