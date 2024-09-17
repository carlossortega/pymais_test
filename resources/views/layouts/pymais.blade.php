<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Meta Tags -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="all" />
        <meta name="keywords" content="online learning, education, e-learning, courses, tutorials, educational resources, skill development, career enhancement" />

        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="{{asset('assets/frontend/pymais/images/favicon.svg')}}" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{asset('assets/frontend/pymais/plugins/css/bootstrap.min.css')}}">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="{{asset('assets/frontend/pymais/plugins/css/animate.min.css')}}">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="{{asset('assets/frontend/pymais/plugins/css/owl.carousel.min.css')}}">
        <!-- Maginific Popup CSS -->
        <link rel="stylesheet" href="{{asset('assets/frontend/pymais/plugins/css/maginific-popup.min.css')}}">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="{{asset('assets/frontend/pymais/plugins/css/nice-select.min.css')}}">
        <!-- Icofont -->
        <link rel="stylesheet" href="{{asset('assets/frontend/pymais/plugins/css/icofont.css')}}">
        <!-- Uicons -->
        <link rel="stylesheet" href="{{asset('assets/frontend/pymais/plugins/css/uicons.css')}}">
        <!-- Main CSS -->
        <link rel="stylesheet" href="{{asset('style.css')}}">

    </head>
    <body class="ep-magic-cursor">

        <!-- Start Preloader  -->
        <div id="preloader">
            <div id="ep-preloader" class="ep-preloader">
                <div class="animation-preloader">
                    <div class="spinner"></div>
                </div>
            </div>
        </div>
        <!-- End Preloader -->

        <!-- Start Cursor To Top  -->
        <div class="cursor"></div>
        <div class="cursor2"></div>
        <!-- End Cursor To Top -->

        <!-- Start Begin Magic Cursor -->
        <div id="magic-cursor">
            <div id="ball"></div>
        </div>
        <!-- End Begin Magic Cursor -->

        <!-- Start Back To Top  -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <!-- End Back To Top -->

        <!-- Mobile Menu Modal -->
        <div class="modal mobile-menu-modal offcanvas-modal fade" id="offcanvas-modal">
            <div class="modal-dialog offcanvas-dialog">
                <div class="modal-content">
                    <div class="modal-header offcanvas-header">
                        <!-- offcanvas-logo-start -->
                        <div class="offcanvas-logo">
                            <a href="{{route('home')}}">
                                <img src="{{asset('assets/frontend/pymais/images/logo-3.svg')}}" alt="#" />
                            </a>
                        </div>
                        <!-- offcanvas-logo-end -->
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fi fi-ss-cross"></i>
                        </button>
                    </div>
                    {{--  Menu movil  --}}
                    <div class="mobile-menu-modal-main-body">
                        <!-- offcanvas-menu start -->
                        <nav id="offcanvas-menu" class="navigation offcanvas-menu">
                            <ul id="nav mobile-nav" class="list-none offcanvas-men-list">
                                <li>
                                    <a href="{{route('home')}}">{{__('Home')}}</a>
                                </li>
                                {{--  <li>
                                    <a class="menu-arrow" href="javascript:void(0)">Courses</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="course.html">Course</a>
                                        </li>
                                        <li>
                                            <a href="course-details.html">Course Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="menu-arrow" href="javascript:void(0)">Events</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="event.html">Event</a>
                                        </li>
                                        <li>
                                            <a href="event-details.html">Event Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="menu-arrow" href="javascript:void(0)">Pages</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="about.html">About Us</a>
                                        </li>
                                        <li>
                                            <a href="team.html">Team</a>
                                        </li>
                                        <li>
                                            <a href="team-details.html">Team Details</a>
                                        </li>
                                        <li>
                                            <a href="login.html">Login</a>
                                        </li>
                                        <li>
                                            <a href="register.html">Register</a>
                                        </li>
                                        <li>
                                            <a href="404.html">404 Error</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="menu-arrow" href="javascript:void(0)">Shop</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="shop.html">Shop</a>
                                        </li>
                                        <li>
                                            <a href="cart.html">Cart</a>
                                        </li>
                                        <li>
                                            <a href="wishlist.html">Wishlist</a>
                                        </li>
                                        <li>
                                            <a href="checkout.html">Checkout</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="menu-arrow" href="javascript:void(0)">Blog</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="blog.html">Blog </a>
                                        </li>
                                        <li>
                                            <a href="blog-details.html">Blog Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contact.html">Contact</a>
                                </li>  --}}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Mobile Menu Modal -->

        <!-- Start Header Area -->
        <header class="ep-header ep-header--style2 position-relative">
            <!-- Header Middle -->
            <div id="active-sticky" class="ep-header__middle ep-header__middle--style2">
                <div class="container ep-container">
                    <div class="ep-header__inner ep-header__inner--style2">
                        <div class="row align-items-center">
                            <div class="col-lg-2 col-6">
                                <div class="ep-logo">
                                    <a href="{{route('home')}}">
                                        <img src="{{asset('assets/frontend/pymais/images/logo.svg')}}" alt="logo" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-10 col-6">
                                <div class="ep-header__inner-right">
                                    <nav class="ep-header__navigation">
                                        <ul class="ep-header__menu ep-header__menu--style2">
                                            <li class="active">
                                                <a href="{{route('home')}}">{{__('Home')}}</a>
                                            </li>
                                            {{--  <li>
                                                <a href="#">Courses <i class="fi fi-ss-angle-small-down"></i>
                                                </a>
                                                <ul class="sub-menu">
                                                    <li>
                                                        <a href="course.html">Course</a>
                                                    </li>
                                                    <li>
                                                        <a href="course-details.html">Course Details</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Events <i class="fi fi-ss-angle-small-down"></i>
                                                </a>
                                                <ul class="sub-menu">
                                                    <li>
                                                        <a href="event.html">Event</a>
                                                    </li>
                                                    <li>
                                                        <a href="event-details.html">Event Details</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Pages <i class="fi fi-ss-angle-small-down"></i>
                                                </a>
                                                <ul class="sub-menu">
                                                    <li>
                                                        <a href="about.html">About Us</a>
                                                    </li>
                                                    <li>
                                                        <a href="team.html">Team</a>
                                                    </li>
                                                    <li>
                                                        <a href="team-details.html">Team Details</a>
                                                    </li>
                                                    <li>
                                                        <a href="login.html">Login</a>
                                                    </li>
                                                    <li>
                                                        <a href="register.html">Register</a>
                                                    </li>
                                                    <li>
                                                        <a href="404.html">404 Error</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Shop <i class="fi fi-ss-angle-small-down"></i>
                                                </a>
                                                <ul class="sub-menu">
                                                    <li>
                                                        <a href="shop.html">Shop</a>
                                                    </li>
                                                    <li>
                                                        <a href="cart.html">Cart</a>
                                                    </li>
                                                    <li>
                                                        <a href="wishlist.html">Wishlist</a>
                                                    </li>
                                                    <li>
                                                        <a href="checkout.html">Checkout</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Blog <i class="fi fi-ss-angle-small-down"></i>
                                                </a>
                                                <ul class="sub-menu">
                                                    <li>
                                                        <a href="blog.html">Blog</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-details.html">Blog Details</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="contact.html">Contact</a>
                                            </li>  --}}
                                        </ul>
                                    </nav>
                                    <div class="ep-header__btn">
                                        <a href="about.html" class="ep-btn ep5-bg">Read More <i class="fi fi-rs-arrow-small-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- Mobile Menu Button -->
                                <button type="button" class="mobile-menu-offcanvas-toggler" data-bs-toggle="modal" data-bs-target="#offcanvas-modal">
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                                </button>
                                <!-- End Mobile Menu Button -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Header Area -->
        <div id="smooth-wrapper">
            <div id="smooth-content">
                <main>
                    <!-- Start Hero Area -->
                    <section class="ep-hero ep-hero--style2 hero-bg background-image" style="background-image: url('{{asset('assets/frontend/pymais/images/hero/home-2/bg.png')}}')">
                        <div class="container ep-container">
                            <div class="row align-items-center">
                                <div class="col-lg-12 col-xl-6 col-12">
                                    <div class="ep-hero__content ep-hero__content--style2">
                                        <h1 class="ep-hero__title ep-split-text left"> Transforming Lives <span>Through</span> Education </h1>
                                        <p class="ep-hero__text"> They play a vital role in the economy by providing security and stability design enabling individuals and businesses Claims processing entails evaluating and paying out claim </p>
                                        <div class="ep-hero__search">
                                            <form action="#" method="post" class="ep-hero__search-form position-relative">
                                                <input type="search" name="search" placeholder="Search.." required />
                                                <button type="submit" class="ep-hero__search-btn">
                                                    <i class="fi fi-rs-search"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 offset-xl-1 col-xl-5 col-12 order-top">
                                    <div class="ep-hero__widget ep-hero__widget-style2 position-relative">
                                        <div class="ep-hero__img">
                                            <img src="{{asset('assets/frontend/pymais/images/hero/home-2/hero-img.png')}}" alt="hero-img" />
                                        </div>
                                        <div class="ep-hero__overview-card updown-ani">
                                            <h4>
                                                <span>2</span>k+
                                            </h4>
                                            <p>Full Time Student</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Start Hero Area -->
                    <!-- Start About Area -->
                    <section class="ep-about ep-about--style2 ep-section section-gap position-relative">
                        <div class="container ep-container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="ep-section-head ep-section-head--style2">
                                        <h3 class="ep-section-head__color-title ep1-color ep1-border-color"> 1.ABOUT US </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-12">
                                    <div class="ep-section__img ep-section__img--style2 position-relative">
                                        <div class="ep-section__img-main">
                                            <img src="{{asset('assets/frontend/pymais/images/about/about-2/about-img.png')}}" alt="about-img" />
                                        </div>
                                        <div class="overview-card updown-ani">
                                            <div class="overview-card__icon">
                                                <img src="{{asset('assets/frontend/pymais/images/about/about-1/user.svg')}}" alt="user-icon" />
                                            </div>
                                            <div class="overview-card__info">
                                                <h4>
                                                    <span>2</span>k+
                                                </h4>
                                                <p>Full Time Student</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="ep-section__content ep-section__content--style2">
                                        <h3 class="ep-section__title ep-split-text left"> Our Inspiring Story and <br /> Vision Who We Are </h3>
                                        <p class="ep-section__text"> Lorem ipsum dolor sit amet consectetur. Amet lectus mi ultricies dict Lorem ipsum dolor sit amet consectetur. Amet lectus mi ultricies dictum facilisis sem. Imperdiet massa turpis sit proin metus volutpat.facilisis </p>
                                        <div class="ep-section__widget ep-section__widget--style2">
                                            <ul class="ep-feature-list">
                                                <li>
                                                    <i class="fi fi-ss-check-circle"></i>Exploring Minds
                                                </li>
                                                <li>
                                                    <i class="fi fi-ss-check-circle"></i>Hoppers Kinderland
                                                </li>
                                            </ul>
                                            <ul class="ep-feature-list">
                                                <li>
                                                    <i class="fi fi-ss-check-circle"></i>Elementary School
                                                </li>
                                                <li>
                                                    <i class="fi fi-ss-check-circle"></i>Daycare and Learn
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="ep-section__btn">
                                            <a href="about.html" class="ep-btn ep1-bg">Read More <i class="fi fi-rs-arrow-small-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Start About Area -->
                    <!-- Start Funfact Area -->
                    <section class="ep-funfact ep-funfact--style2 section-gap pt-0 position-relative">
                        <div class="container ep-container">
                            <div class="ep-funfact-shape updown-ani">
                                <img src="{{asset('assets/frontend/pymais/images/funfact/funfact-2/arrow.svg')}}" alt="arrow-icon" />
                            </div>
                            <div class="row">
                                <!-- Single Funfact Card -->
                                <div class="col-lg-4 col-xl-3 col-md-6 col-12">
                                    <div class="ep-funfact__card ep-funfact__card--style2 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                                        <div class="ep-funfact__icon ep5-bg-light">
                                            <img src="{{asset('assets/frontend/pymais/images/funfact/funfact-2/1.svg')}}" alt="funfact-icon" />
                                        </div>
                                        <div class="ep-funfact__info m-0">
                                            <h4>
                                                <span class="counter">200</span>+
                                            </h4>
                                            <p>Team member</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Funfact Card -->
                                <div class="col-lg-4 col-xl-3 col-md-6 col-12">
                                    <div class="ep-funfact__card ep-funfact__card--style2 wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                                        <div class="ep-funfact__icon ep1-bg-light">
                                            <img src="{{asset('assets/frontend/pymais/images/funfact/funfact-2/2.svg')}}" alt="funfact-icon" />
                                        </div>
                                        <div class="ep-funfact__info m-0">
                                            <h4>
                                                <span class="counter">30</span>k+
                                            </h4>
                                            <p>Winning award</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Funfact Card -->
                                <div class="col-lg-4 col-xl-3 col-md-6 col-12">
                                    <div class="ep-funfact__card ep-funfact__card--style2 wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                                        <div class="ep-funfact__icon ep7-bg-light">
                                            <img src="{{asset('assets/frontend/pymais/images/funfact/funfact-2/3.svg')}}" alt="funfact-icon" />
                                        </div>
                                        <div class="ep-funfact__info m-0">
                                            <h4>
                                                <span class="counter">25</span>k
                                            </h4>
                                            <p>Complete project</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Funfact Card -->
                                <div class="col-lg-4 col-xl-3 col-md-6 col-12">
                                    <div class="ep-funfact__card ep-funfact__card--style2 wow fadeInUp" data-wow-delay=".9s" data-wow-duration="1s">
                                        <div class="ep-funfact__icon ep2-bg-light">
                                            <img src="{{asset('assets/frontend/pymais/images/funfact/funfact-2/4.svg')}}" alt="funfact-icon" />
                                        </div>
                                        <div class="ep-funfact__info m-0">
                                            <h4>
                                                <span class="counter">300</span>k
                                            </h4>
                                            <p>Client review</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Funfact Area -->
                    <!-- Start Group Study Area -->
                    <section class="ep-group-study position-relative section-gap mg-btm-120 pt-0">
                        <div class="container ep-container">
                            <div class="ep-group-study__inner position-relative">
                                <div class="ep-brand-name">
                                    <img src="{{asset('assets/frontend/pymais/images/brand-name.svg')}}" alt="brand-name" />
                                </div>
                                <div class="ep-group-study__shape updown-ani">
                                    <img src="{{asset('assets/frontend/pymais/images/group-study/shape.svg')}}" alt="arrow-icon" />
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="ep-section-head ep-section-head--style2">
                                            <h3 class="ep-section-head__color-title ep9-color ep9-border-color"> 2.Group ACTIVITES </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-xl-4 col-12">
                                        <div class="ep-section__content ep-section__content--style2">
                                            <h3 class="ep-section__title ep-split-text left"> Tools and Guides for <br /> Success Explore </h3>
                                            <p class="ep-section__text"> Lorem ipsum dolor sit amet consectetur. Amet lectus mi ultricies dictum facilisis of sem. Imperdiet massa turpis sit proin metus volutpat.Lorem </p>
                                            <div class="ep-section__btn">
                                                <a href="about.html" class="ep-btn border-btn">Read More <i class="fi fi-rs-arrow-small-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-6 offset-xl-2 col-12">
                                        <div class="ep-group-study__video background-image ep-hobble position-relative" style="
                        background-image: url('{{asset('assets/frontend/pymais/images/group-study/study-img.png')}}');
                      ">
                                            <a href="https://www.youtube.com/watch?v=gyGsPlt06bo" class="ep-video__btn popup-video ep-hover-layer-2">
                                                <i class="fi fi-sr-play"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Group Study Area -->
                    <!-- Start Service Area -->
                    <section class="ep-service section-gap pt-0">
                        <div class="container ep-container">
                            <div class="col-12">
                                <div class="ep-section-head ep-section-head--style2">
                                    <h3 class="ep-section-head__color-title ep1-color ep1-border-color"> 3.Service </h3>
                                    <h2 class="ep-section-head__big-title ep-split-text left"> Celebrate Our Successful <br />Graduates with Us </h2>
                                </div>
                            </div>
                            <div class="row">
                                <!-- Single Card -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="ep-service__card service-1 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                                        <div class="ep-service__icon">
                                            <img src="{{asset('assets/frontend/pymais/images/service/1.svg')}}" alt="service-icon" />
                                        </div>
                                        <div class="ep-service__info">
                                            <h3>Nurturing Young Minds</h3>
                                            <p> currencies and get paid like a local Use Use receiving accounts a number a </p>
                                            <div class="ep-service__btn">
                                                <a href="contact.html">Read More <i class="fi fi-rs-arrow-small-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Card -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="ep-service__card service-2 wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                                        <div class="ep-service__icon">
                                            <img src="{{asset('assets/frontend/pymais/images/service/2.svg')}}" alt="service-icon" />
                                        </div>
                                        <div class="ep-service__info">
                                            <h3>Learning Fun and Growth</h3>
                                            <p> currencies and get paid like a local Use Use receiving accounts a number a </p>
                                            <div class="ep-service__btn">
                                                <a href="contact.html">Read More <i class="fi fi-rs-arrow-small-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Card -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="ep-service__card service-3 wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                                        <div class="ep-service__icon">
                                            <img src="{{asset('assets/frontend/pymais/images/service/3.svg')}}" alt="service-icon" />
                                        </div>
                                        <div class="ep-service__info">
                                            <h3>Where Kids Love to Learn</h3>
                                            <p> currencies and get paid like a local Use Use receiving accounts a number a </p>
                                            <div class="ep-service__btn">
                                                <a href="contact.html">Read More <i class="fi fi-rs-arrow-small-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Card -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="ep-service__card service-4 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                                        <div class="ep-service__icon">
                                            <img src="{{asset('assets/frontend/pymais/images/service/4.svg')}}" alt="service-icon" />
                                        </div>
                                        <div class="ep-service__info">
                                            <h3>Playful Minds Academy</h3>
                                            <p> currencies and get paid like a local Use Use receiving accounts a number a </p>
                                            <div class="ep-service__btn">
                                                <a href="contact.html">Read More <i class="fi fi-rs-arrow-small-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Card -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="ep-service__card service-5 wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                                        <div class="ep-service__icon">
                                            <img src="{{asset('assets/frontend/pymais/images/service/5.svg')}}" alt="service-icon" />
                                        </div>
                                        <div class="ep-service__info">
                                            <h3>Place for Little Explorers</h3>
                                            <p> currencies and get paid like a local Use Use receiving accounts a number a </p>
                                            <div class="ep-service__btn">
                                                <a href="contact.html">Read More <i class="fi fi-rs-arrow-small-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Card -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="ep-service__card service-6 wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                                        <div class="ep-service__icon">
                                            <img src="{{asset('assets/frontend/pymais/images/service/6.svg')}}" alt="service-icon" />
                                        </div>
                                        <div class="ep-service__info">
                                            <h3>Inspiring Young Learners</h3>
                                            <p> currencies and get paid like a local Use Use receiving accounts a number a </p>
                                            <div class="ep-service__btn">
                                                <a href="contact.html">Read More <i class="fi fi-rs-arrow-small-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End  Service Area -->
                    <!-- Start Course Area -->
                    <section class="ep-course ep-course--style2 section-gap pt-0 position-relative">
                        <div class="container ep-container">
                            <div class="col-12">
                                <div class="ep-section-head ep-section-head--style2">
                                    <h3 class="ep-section-head__color-title ep1-color ep1-border-color"> 4.Our Courses </h3>
                                    <h2 class="ep-section-head__big-title ep-split-text left"> Access Our Learning Resources & <br />Browse Our Helpful Materials </h2>
                                </div>
                            </div>
                            <div class="ep-brand-name">
                                <img src="{{asset('assets/frontend/pymais/images/brand-name.svg')}}" alt="brand-name" />
                            </div>
                            <div class="ep-course_shape rotate-ani">
                                <img src="{{asset('assets/frontend/pymais/images/course/course-2/shape.svg')}}" alt="shape" />
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="ep-course__wrapper position-relative mg-top-30">
                                        <div class="ep-course__cover-img">
                                            <img src="{{asset('assets/frontend/pymais/images/course/course-2/course-img.png')}}" alt="course-img" />
                                        </div>
                                        <div class="owl-carousel ep-course__slider">
                                            <!-- Single Slider -->
                                            <div class="ep-course__slider-item">
                                                <div class="ep-course__slider-content">
                                                    <a href="course-details.html" class="ep-course__title">
                                                        <h3>Best course For You</h3>
                                                    </a>
                                                    <span class="ep-course__price">25.00$ <del>29.80$</del>
                                                    </span>
                                                    <p class="ep-course__text"> Education is a vital aspect of a child's development. Prescho elementary schools, and middle schools play a significant role in providing quality education and fostering growth in young minds </p>
                                                    <div class="ep-course__rattings">
                                                        <ul>
                                                            <li>
                                                                <i class="icofont-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="icofont-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="icofont-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="icofont-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="icofont-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="ep-course__lesson">
                                                        <div class="ep-course__student">
                                                            <i class="fi fi-rs-book-alt"></i>
                                                            <p>10 lessons</p>
                                                        </div>
                                                        <div class="ep-course__student">
                                                            <i class="fi-rr-user"></i>
                                                            <p>250 Student</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Slider -->
                                            <div class="ep-course__slider-item">
                                                <div class="ep-course__slider-content">
                                                    <a href="course-details.html" class="ep-course__title">
                                                        <h3>Ancient to Modern Times</h3>
                                                    </a>
                                                    <span class="ep-course__price">75.00$ <del>80.00$</del>
                                                    </span>
                                                    <p class="ep-course__text"> Education is a vital aspect of a child's development. Prescho elementary schools, and middle schools play a significant role in providing quality education and fostering growth in young minds </p>
                                                    <div class="ep-course__rattings">
                                                        <ul>
                                                            <li>
                                                                <i class="icofont-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="icofont-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="icofont-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="icofont-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="icofont-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="ep-course__lesson">
                                                        <div class="ep-course__student">
                                                            <i class="fi fi-rs-book-alt"></i>
                                                            <p>10 lessons</p>
                                                        </div>
                                                        <div class="ep-course__student">
                                                            <i class="fi-rr-user"></i>
                                                            <p>250 Student</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Slider -->
                                            <div class="ep-course__slider-item">
                                                <div class="ep-course__slider-content">
                                                    <a href="course-details.html" class="ep-course__title">
                                                        <h3>Environmental Science</h3>
                                                    </a>
                                                    <span class="ep-course__price">25.00$ <del>29.80$</del>
                                                    </span>
                                                    <p class="ep-course__text"> Education is a vital aspect of a child's development. Prescho elementary schools, and middle schools play a significant role in providing quality education and fostering growth in young minds </p>
                                                    <div class="ep-course__rattings">
                                                        <ul>
                                                            <li>
                                                                <i class="icofont-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="icofont-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="icofont-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="icofont-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="icofont-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="ep-course__lesson">
                                                        <div class="ep-course__student">
                                                            <i class="fi fi-rs-book-alt"></i>
                                                            <p>10 lessons</p>
                                                        </div>
                                                        <div class="ep-course__student">
                                                            <i class="fi-rr-user"></i>
                                                            <p>250 Student</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End  Course Area -->
                    <!-- Start Pricing Area -->
                    <section class="ep-pricing section-gap position-relative pt-0">
                        <div class="container ep-container">
                            <div class="ep-pricing__shape updown-ani">
                                <img src="./assets/images/pricing/arrow.svg" alt="pricing-shape" />
                            </div>
                            <div class="col-12">
                                <div class="ep-section-head ep-section-head--style2">
                                    <h3 class="ep-section-head__color-title ep1-color ep1-border-color"> 5.Pricing </h3>
                                    <h2 class="ep-section-head__big-title ep-split-text left"> Your Next Career Move Awaits <br /> Guides for Success </h2>
                                </div>
                            </div>
                            <div class="row">
                                <!-- Pricing Card -->
                                <div class="col-lg-6 col-xl-4 col-md-6 col-12">
                                    <div class="ep-pricing__card pricing-1 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                                        <div class="ep-pricing__head">
                                            <div class="ep-pricing__icon ep5-bg-light">
                                                <img src="{{asset('assets/frontend/pymais/images/pricing/icon-1.svg')}}" alt="pricing-icon" />
                                            </div>
                                            <h3 class="ep-pricing__title">Primary</h3>
                                            <div class="ep-pricing__price">
                                                <span class="ep-pricing__amount ep5-color">20.7$</span>
                                                <span class="ep-pricing__duration">(5-10Years)</span>
                                            </div>
                                        </div>
                                        <ul class="ep-pricing__features">
                                            <li>
                                                <i class="fi fi-sr-checkbox"></i> Mistakes To Avoid
                                            </li>
                                            <li>
                                                <i class="fi fi-sr-checkbox"></i> Your Startup
                                            </li>
                                            <li>
                                                <i class="fi fi-sr-checkbox"></i> Knew About Fonts
                                            </li>
                                            <li>
                                                <i class="fi fi-sr-square-x"></i> Winning Metric for Your Startup
                                            </li>
                                            <li>
                                                <i class="fi fi-sr-square-x"></i> Your Startup
                                            </li>
                                        </ul>
                                        <div class="ep-pricing__btn">
                                            <a href="contact.html" class="ep-btn border-btn">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Pricing Card -->
                                <div class="col-lg-6 col-xl-4 col-md-6 col-12">
                                    <div class="ep-pricing__card pricing-2 wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                                        <div class="ep-pricing__head">
                                            <div class="ep-pricing__icon ep2-bg-light">
                                                <img src="{{asset('assets/frontend/pymais/images/pricing/icon-2.svg')}}" alt="pricing-icon" />
                                            </div>
                                            <h3 class="ep-pricing__title">Pro Primary</h3>
                                            <div class="ep-pricing__price">
                                                <span class="ep-pricing__amount ep2-color">40.5$</span>
                                                <span class="ep-pricing__duration">(11-15Years)</span>
                                            </div>
                                        </div>
                                        <ul class="ep-pricing__features">
                                            <li>
                                                <i class="fi fi-sr-checkbox"></i> Mistakes To Avoid
                                            </li>
                                            <li>
                                                <i class="fi fi-sr-checkbox"></i> Your Startup
                                            </li>
                                            <li>
                                                <i class="fi fi-sr-checkbox"></i> Knew About Fonts
                                            </li>
                                            <li>
                                                <i class="fi fi-sr-checkbox"></i> Winning Metric for Your Startup
                                            </li>
                                            <li>
                                                <i class="fi fi-sr-square-x"></i> Your Startup
                                            </li>
                                        </ul>
                                        <div class="ep-pricing__btn">
                                            <a href="contact.html" class="ep-btn border-btn">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Pricing Card -->
                                <div class="col-lg-6 col-xl-4 col-md-6 col-12">
                                    <div class="ep-pricing__card pricing-3 wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                                        <div class="ep-pricing__head">
                                            <div class="ep-pricing__icon ep1-bg-light">
                                                <img src="{{asset('assets/frontend/pymais/images/pricing/icon-3.svg')}}" alt="pricing-icon" />
                                            </div>
                                            <h3 class="ep-pricing__title">Middle School</h3>
                                            <div class="ep-pricing__price">
                                                <span class="ep-pricing__amount ep1-color">50.7$</span>
                                                <span class="ep-pricing__duration">(11-15Years)</span>
                                            </div>
                                        </div>
                                        <ul class="ep-pricing__features">
                                            <li>
                                                <i class="fi fi-sr-checkbox"></i> Mistakes To Avoid
                                            </li>
                                            <li>
                                                <i class="fi fi-sr-checkbox"></i> Your Startup
                                            </li>
                                            <li>
                                                <i class="fi fi-sr-checkbox"></i> Knew About Fonts
                                            </li>
                                            <li>
                                                <i class="fi fi-sr-checkbox"></i> Winning Metric for Your Startup
                                            </li>
                                            <li>
                                                <i class="fi fi-sr-checkbox"></i> Your Startup
                                            </li>
                                        </ul>
                                        <div class="ep-pricing__btn">
                                            <a href="contact.html" class="ep-btn border-btn">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Pricing Area -->
                    <!-- Start Event Area -->
                    <section class="ep-event section-gap section-bg-1 position-relative">
                        <div class="container ep-container">
                            <div class="col-12">
                                <div class="ep-section-head ep-section-head--style2">
                                    <h3 class="ep-section-head__color-title ep1-color ep1-border-color"> 6.Our event </h3>
                                    <div class="ep-section-head__inner">
                                        <h2 class="ep-section-head__big-title ep-split-text left"> Stay Updated on <br /> Upcoming Events </h2>
                                        <p class="ep-section-head__text mg-top-30"> Lorem ipsum dolor sit amet consectetur. A lectus mi <br /> ultricies dictum facilisis of sem. Imperdiet an massa turpis </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ep-event__container">
                            <div class="ep-event__shape updown-ani">
                                <img src="./assets/images/event/event-1/arrow.svg" alt="arrow-icon" />
                            </div>
                            <div class="row">
                                <div class="owl-carousel ep-event__slider">
                                    <!-- Single Event -->
                                    <div class="ep-event__card">
                                        <a href="event-details.html" class="ep-event__img">
                                            <img src="{{asset('assets/frontend/pymais/images/event/event-1/1.png')}}" alt="event-img" />
                                        </a>
                                        <div class="ep-event__info">
                                            <div class="ep-event__date ep6-bg">25 Dec</div>
                                            <div class="ep-event__location">
                                                <i class="fi fi-rs-marker ep6-color"></i>Mirpur Bangladesh
                                            </div>
                                            <a href="event-details.html" class="ep-event__title">A Place for Little Explor</a>
                                        </div>
                                    </div>
                                    <!-- Single Event -->
                                    <div class="ep-event__card">
                                        <a href="event-details.html" class="ep-event__img">
                                            <img src="{{asset('assets/frontend/pymais/images/event/event-1/2.png')}}" alt="event-img" />
                                        </a>
                                        <div class="ep-event__info">
                                            <div class="ep-event__date ep6-bg">25 Dec</div>
                                            <div class="ep-event__location">
                                                <i class="fi fi-rs-marker ep6-color"></i>Mirpur Bangladesh
                                            </div>
                                            <a href="event-details.html" class="ep-event__title">Education foundation</a>
                                        </div>
                                    </div>
                                    <!-- Single Event -->
                                    <div class="ep-event__card">
                                        <a href="event-details.html" class="ep-event__img">
                                            <img src="{{asset('assets/frontend/pymais/images/event/event-1/3.png')}}" alt="event-img" />
                                        </a>
                                        <div class="ep-event__info">
                                            <div class="ep-event__date ep6-bg">25 Dec</div>
                                            <div class="ep-event__location">
                                                <i class="fi fi-rs-marker ep6-color"></i>Mirpur Bangladesh
                                            </div>
                                            <a href="event-details.html" class="ep-event__title">A Place for Little Explor</a>
                                        </div>
                                    </div>
                                    <!-- Single Event -->
                                    <div class="ep-event__card">
                                        <a href="event-details.html" class="ep-event__img">
                                            <img src="{{asset('assets/frontend/pymais/images/event/event-1/4.png')}}" alt="event-img" />
                                        </a>
                                        <div class="ep-event__info">
                                            <div class="ep-event__date ep6-bg">25 Dec</div>
                                            <div class="ep-event__location">
                                                <i class="fi fi-rs-marker ep6-color"></i>Mirpur Bangladesh
                                            </div>
                                            <a href="event-details.html" class="ep-event__title">Education foundation</a>
                                        </div>
                                    </div>
                                    <!-- Single Event -->
                                    <div class="ep-event__card">
                                        <a href="event-details.html" class="ep-event__img">
                                            <img src="{{asset('assets/frontend/pymais/images/event/event-1/3.png')}}" alt="event-img" />
                                        </a>
                                        <div class="ep-event__info">
                                            <div class="ep-event__date ep6-bg">25 Dec</div>
                                            <div class="ep-event__location">
                                                <i class="fi fi-rs-marker ep6-color"></i>Mirpur Bangladesh
                                            </div>
                                            <a href="event-details.html" class="ep-event__title">A Place for Little Explor</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Event Area -->
                    <!-- Start Team Area -->
                    <section class="ep-team ep-team--style2 section-gap position-relative">
                        <div class="ep-team__pattern-style2">
                            <img class="pattern-1 updown-ani" src="{{asset('assets/frontend/pymais/images/team/team-2/pattern-1.svg')}}" alt="pattern-1" />
                            <img class="pattern-2 rotate-ani" src="{{asset('assets/frontend/pymais/images/team/team-2/pattern-2.svg')}}" alt="pattern-2" />
                            <img class="pattern-3 updown-ani" src="{{asset('assets/frontend/pymais/images/team/team-2/pattern-3.svg')}}" alt="pattern-3" />
                        </div>
                        <div class="container ep-container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="ep-section-head ep-section-head--style2">
                                        <h3 class="ep-section-head__color-title ep1-color ep1-border-color"> 7.Our Team Member </h3>
                                        <h2 class="ep-section-head__big-title ep-split-text left"> Popular Cources the <br /> Main learning </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- Single Team -->
                                <div class="col-lg-6 col-xl-4 col-md-6 col-12">
                                    <div class="ep-team__card ep-team__card--style2 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                                        <a href="team-details.html" class="ep-team__img">
                                            <img src=".{{asset('assets/frontend/pymais/images/team/team-2/1.png')}}" alt="team-img" />
                                        </a>
                                        <div class="ep-team__content">
                                            <div class="ep-team__author">
                                                <a href="team-details.html">
                                                    <h5>Jane Cooper</h5>
                                                </a>
                                                <p>Marketing Coordinator</p>
                                            </div>
                                            <div class="ep-team__social">
                                                <span class="ep-team__social-btn">
                                                    <i class="fi-rr-share"></i>
                                                </span>
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <i class="icofont-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="icofont-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="icofont-instagram"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="icofont-linkedin"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Team -->
                                <div class="col-lg-6 col-xl-4 col-md-6 col-12">
                                    <div class="ep-team__card ep-team__card--style2 wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                                        <a href="team-details.html" class="ep-team__img">
                                            <img src="{{asset('assets/frontend/pymais/images/team/team-2/2.png')}}" alt="team-img" />
                                        </a>
                                        <div class="ep-team__content">
                                            <div class="ep-team__author">
                                                <a href="team-details.html">
                                                    <h5>Kane Saan</h5>
                                                </a>
                                                <p>Menager</p>
                                            </div>
                                            <div class="ep-team__social">
                                                <span class="ep-team__social-btn">
                                                    <i class="fi-rr-share"></i>
                                                </span>
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <i class="icofont-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="icofont-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="icofont-instagram"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="icofont-linkedin"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Team -->
                                <div class="col-lg-6 col-xl-4 col-md-6 col-12">
                                    <div class="ep-team__card ep-team__card--style2 wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                                        <a href="team-details.html" class="ep-team__img">
                                            <img src="{{asset('assets/frontend/pymais/images/team/team-2/3.png')}}" alt="team-img" />
                                        </a>
                                        <div class="ep-team__content">
                                            <div class="ep-team__author">
                                                <a href="team-details.html">
                                                    <h5>Jack Win</h5>
                                                </a>
                                                <p>Ceo</p>
                                            </div>
                                            <div class="ep-team__social">
                                                <span class="ep-team__social-btn">
                                                    <i class="fi-rr-share"></i>
                                                </span>
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <i class="icofont-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="icofont-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="icofont-instagram"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="icofont-linkedin"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Team Area -->
                    <!-- Start Faq Area -->
                    <section class="ep-faq ep-faq--style2 section-gap pt-0 position-relative">
                        <div class="ep-faq__pattern-3 updown-ani">
                            <img src="{{asset('assets/frontend/pymais/images/faq/faq-2/pattern.svg')}}" alt="pattern" />
                        </div>
                        <div class="container ep-container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="ep-section-head ep-section-head--style2">
                                        <h3 class="ep-section-head__color-title ep7-color ep7-border-color"> 8.some Faq </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 align-items-center">
                                <div class="col-lg-6 col-12">
                                    <div class="ep-faq__img">
                                        <img src="{{asset('assets/frontend/pymais/images/faq/faq-2/faq-img.png')}}" alt="faq-img" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="ep-faq__content">
                                        <div class="ep-section-head">
                                            <h3 class="ep-section-head__big-title fs-28 ep-split-text left"> Frequently Asked Questions and Answers <br />Find Solutions </h3>
                                        </div>
                                        <div class="ep-faq__accordion faq-inner accordion" id="accordionExample">
                                            <!-- Single Faq -->
                                            <div class="ep-faq__accordion-item ep-faq__accordion-item--style2">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        <span>01</span>What are the benefits of education? </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="ep-faq__accordion-body">
                                                        <p class="ep-faq__accordion-text"> The generated is therefore always free from repetition is the injected humour or words etc. </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Faq -->
                                            <div class="ep-faq__accordion-item ep-faq__accordion-item--style2">
                                                <h2 class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        <span>02</span>How can I find the program for me? </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="ep-faq__accordion-body">
                                                        <p class="ep-faq__accordion-text"> The generated is therefore always free from repetition is the injected humour or words etc. </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Faq -->
                                            <div class="ep-faq__accordion-item ep-faq__accordion-item--style2">
                                                <h2 class="accordion-header" id="headingThree">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        <span>03</span>Can I get financial for my education? </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                    <div class="ep-faq__accordion-body">
                                                        <p class="ep-faq__accordion-text"> The generated is therefore always free from repetition is the injected humour or words etc. </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Faq Area -->
                    <!-- Start Blog Area -->
                    <section class="ep-blog section-gap pt-0 position-relative">
                        <div class="container ep-container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="ep-section-head ep-section-head--style2">
                                        <h3 class="ep-section-head__color-title ep1-color ep1-border-color"> 9.OUR BLOGS </h3>
                                        <h2 class="ep-section-head__big-title ep-split-text left"> Dive into Our Education <br />Insights Latest Blog Posts </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- Single Blog Card -->
                                <div class="col-lg-6 col-xl-4 col-md-6 col-12">
                                    <div class="ep-blog__card ep-blog__card--style2 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                                        <a href="blog-details.html" class="ep-blog__img">
                                            <img src="{{asset('assets/frontend/pymais/images/blog/blog-1/4.png')}}" alt="blog-img" />
                                        </a>
                                        <div class="ep-blog__info">
                                            <div class="ep-blog__date">22 jan</div>
                                            <div class="ep-blog__content">
                                                <div class="ep-blog__meta">
                                                    <ul>
                                                        <li>
                                                            <i class="fi-rr-comments"></i>Comments (05)
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fi-rr-user"></i>By admin </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <a href="blog-details.html" class="ep-blog__title">
                                                    <h5 class="m-0"> Lifelong Learning Endless was Possibilities </h5>
                                                </a>
                                                <div class="ep-blog__btn">
                                                    <a href="blog-details.html">Read More <i class="fi fi-rs-arrow-small-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Blog Card -->
                                <div class="col-lg-6 col-xl-4 col-md-6 col-12">
                                    <div class="ep-blog__card ep-blog__card--style2 wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                                        <a href="blog-details.html" class="ep-blog__img">
                                            <img src="{{asset('assets/frontend/pymais/images/blog/blog-1/5.png')}}" alt="blog-img" />
                                        </a>
                                        <div class="ep-blog__info">
                                            <div class="ep-blog__date">22 jan</div>
                                            <div class="ep-blog__content">
                                                <div class="ep-blog__meta">
                                                    <ul>
                                                        <li>
                                                            <i class="fi-rr-comments"></i>Comments (05)
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fi-rr-user"></i>By admin </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <a href="blog-details.html" class="ep-blog__title">
                                                    <h5 class="m-0"> Foundation for a better most tomorrow design </h5>
                                                </a>
                                                <div class="ep-blog__btn">
                                                    <a href="blog-details.html">Read More <i class="fi fi-rs-arrow-small-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Blog Card -->
                                <div class="col-lg-6 col-xl-4 col-md-6 col-12">
                                    <div class="ep-blog__card ep-blog__card--style2 wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                                        <a href="blog-details.html" class="ep-blog__img">
                                            <img src="{{asset('assets/frontend/pymais/images/blog/blog-1/6.png')}}" alt="blog-img" />
                                        </a>
                                        <div class="ep-blog__info">
                                            <div class="ep-blog__date">22 jan</div>
                                            <div class="ep-blog__content">
                                                <div class="ep-blog__meta">
                                                    <ul>
                                                        <li>
                                                            <i class="fi-rr-comments"></i>Comments (05)
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fi-rr-user"></i>By admin </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <a href="blog-details.html" class="ep-blog__title">
                                                    <h5 class="m-0"> Empowering Students designer is Transforming Lives </h5>
                                                </a>
                                                <div class="ep-blog__btn">
                                                    <a href="blog-details.html">Read More <i class="fi fi-rs-arrow-small-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Blog Area -->
                    <!-- Start Brand -->
                    <div class="ep-brand section-gap pt-0">
                        <div class="container ep-container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="owl-carousel ep-brand__slider">
                                        <!-- Single Brand -->
                                        <a href="#" class="ep-brand__logo ep-brand__logo--style2">
                                            <img src="{{asset('assets/frontend/pymais/images/brand/brand-2/1.svg')}}" alt="brand-logo" />
                                        </a>
                                        <!-- Single Brand -->
                                        <a href="#" class="ep-brand__logo ep-brand__logo--style2">
                                            <img src="{{asset('assets/frontend/pymais/images/brand/brand-2/2.svg')}}" alt="brand-logo" />
                                        </a>
                                        <!-- Single Brand -->
                                        <a href="#" class="ep-brand__logo ep-brand__logo--style2">
                                            <img src="{{asset('assets/frontend/pymais/images/brand/brand-2/3.svg')}}" alt="brand-logo" />
                                        </a>
                                        <!-- Single Brand -->
                                        <a href="#" class="ep-brand__logo ep-brand__logo--style2">
                                            <img src="{{asset('assets/frontend/pymais/images/brand/brand-2/4.svg')}}" alt="brand-logo" />
                                        </a>
                                        <!-- Single Brand -->
                                        <a href="#" class="ep-brand__logo ep-brand__logo--style2">
                                            <img src="{{asset('assets/frontend/pymais/images/brand/brand-2/5.svg')}}" alt="brand-logo" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Start Brand -->
                </main>
                <!-- Start Footer Area -->
                <footer class="ep-footer ep-footer--style2 position-relative">
                    <div class="ep-footer__overlay"></div>
                    <div class="container ep-container">
                        <div class="ep-footer__top">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="ep-footer__widget footer-about">
                                        <div class="ep-footer__logo ep-footer__logo--style2">
                                            <a href="index.html">
                                                <img src="{{asset('assets/frontend/pymais/images/logo-2.svg')}}" alt="footer-logo" />
                                            </a>
                                        </div>
                                        <p class="ep-footer__text mg-top-46"> It is a long established fact that a reader will be distracted </p>
                                        <div class="ep-footer__social mg-top-42">
                                            <h5 class="ep-footer__social-title">Follow Us</h5>
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="icofont-facebook"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="icofont-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="icofont-linkedin"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="icofont-pinterest"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="ep-footer__widget footer-services--style2">
                                        <h4 class="ep-footer__widget-title ep-footer__widget-title--style2"> Services </h4>
                                        <ul class="ep-footer__links-list ep-footer__links-list--style2">
                                            <li>
                                                <a href="service.html">
                                                    <i class="fi fi-br-angle-double-small-right ep6-color"></i>Reliable Rentals </a>
                                            </li>
                                            <li>
                                                <a href="service.html">
                                                    <i class="fi fi-br-angle-double-small-right ep6-color"></i>Golden Key Properties </a>
                                            </li>
                                            <li>
                                                <a href="service.html">
                                                    <i class="fi fi-br-angle-double-small-right ep6-color"></i>Swift Home Sales </a>
                                            </li>
                                            <li>
                                                <a href="service.html">
                                                    <i class="fi fi-br-angle-double-small-right ep6-color"></i>Elite Realty Services </a>
                                            </li>
                                            <li>
                                                <a href="service.html">
                                                    <i class="fi fi-br-angle-double-small-right ep6-color"></i>Dream Property Solutions </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="ep-footer__widget footer-contact">
                                        <h4 class="ep-footer__widget-title ep-footer__widget-title--style2"> Contact </h4>
                                        <div class="ep-footer__contact">
                                            <div class="ep-footer__contact-single">
                                                <div class="ep-footer__contact-icon">
                                                    <i class="fi fi-rs-marker ep6-color"></i>
                                                </div>
                                                <div class="ep-footer__contact-info">
                                                    <p>Address</p>
                                                    <span>66 Broklyant, New York India</span>
                                                </div>
                                            </div>
                                            <div class="ep-footer__contact-single">
                                                <div class="ep-footer__contact-icon">
                                                    <i class="fi fi-rr-phone-call ep6-color"></i>
                                                </div>
                                                <div class="ep-footer__contact-info ep-footer__contact-info--style2">
                                                    <p>Phone Number</p>
                                                    <a href="tel:012 345 678 9101">012 345 678 9101</a>
                                                </div>
                                            </div>
                                            <div class="ep-footer__contact-single">
                                                <div class="ep-footer__contact-icon">
                                                    <i class="fi fi-rr-envelope ep6-color"></i>
                                                </div>
                                                <div class="ep-footer__contact-info ep-footer__contact-info--style2">
                                                    <p>Emaill</p>
                                                    <a href="mailto:codeglim@gmail.com">codeglim@gmail.com</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="ep-footer__widget footer-newsletter">
                                        <h4 class="ep-footer__widget-title ep-footer__widget-title--style2"> Newsletter </h4>
                                        <p class="ep-footer__text m-0"> It is a long established fact that a reader will be distracted </p>
                                        <form action="#" method="post" class="ep-footer__newsletter ep-footer__newsletter--style2 mg-top-30">
                                            <input type="email" name="email" placeholder="Your e-mail" required />
                                            <button type="submit">
                                                <i class="fi fi-ss-paper-plane"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ep-footer__bottom">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div class="ep-footer__copyright">
                                        <p> © <a PYMAis @php echo date('Y'); @endphp | All Rights Reserved </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="ep-footer__bottom-link">
                                        <ul>
                                            <li>
                                                <a href="#">Trams & Condition</a>
                                            </li>
                                            <li>
                                                <a href="#">Privacy Policy</a>
                                            </li>
                                            <li>
                                                <a href="contact.html">Contact Us</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ep-footer__brand">
                        <img src="{{asset('assets/frontend/pymais/images/footer/footer-brand-name.svg')}}" alt="footer-brand-name" />
                    </div>
                </footer>
                <!-- End Footer Area -->
            </div>
        </div>
        <!-- Jquery JS -->
        <script src="{{asset('assets/frontend/pymais/plugins/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/frontend/pymais/plugins/js/jquery-migrate.js')}}"></script>
        <!-- Modernizer JS -->
        <script src="{{asset('assets/frontend/pymais/plugins/js/modernizer.min.js')}}"></script>
        <!-- Bootstrap JS -->
        <script src="{{asset('assets/frontend/pymais/plugins/js/bootstrap.min.js')}}"></script>
        <!-- Gsap JS -->
        <script src="{{asset('assets/frontend/pymais/plugins/js/gsap/gsap.js')}}"></script>
        <script src="{{asset('assets/frontend/pymais/plugins/js/gsap/gsap-scroll-to-plugin.js')}}"></script>
        <script src="{{asset('assets/frontend/pymais/plugins/js/gsap/gsap-scroll-smoother.js')}}"></script>
        <script src="{{asset('assets/frontend/pymais/plugins/js/gsap/gsap-scroll-trigger.js')}}"></script>
        <script src="{{asset('assets/frontend/pymais/plugins/js/gsap/gsap-split-text.js')}}"></script>
        <!-- Wow JS -->
        <script src="{{asset('assets/frontend/pymais/plugins/js/wow.min.js')}}"></script>
        <!-- Owl Carousel JS -->
        <script src="{{asset('assets/frontend/pymais/plugins/js/owl.carousel.min.js')}}"></script>
        <!-- Magnific Popup JS -->
        <script src="{{asset('assets/frontend/pymais/plugins/js/magnific-popup.min.js')}}"></script>
        <!-- CounterUp  JS -->
        <script src="{{asset('assets/frontend/pymais/plugins/js/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('assets/frontend/pymais/plugins/js/waypoints.min.js')}}"></script>
        <!-- Nice Select JS -->
        <script src="{{asset('assets/frontend/pymais/plugins/js/nice-select.min.js')}}"></script>
        <!-- Cursor JS -->
        <script src="{{asset('assets/frontend/pymais/plugins/js/ep-cursor.js')}}"></script>
        <!-- Back To Top JS -->
        <script src="{{asset('assets/frontend/pymais/plugins/js/backToTop.js')}}"></script>
        <!-- Main JS -->
        <script src="{{asset('assets/frontend/pymais/plugins/js/active.js')}}"></script>
    </body>
</html>
