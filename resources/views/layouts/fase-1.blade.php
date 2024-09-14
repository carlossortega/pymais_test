<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all" />
    <meta name="keywords"
        content="online learning, education, e-learning, courses, tutorials, educational resources, skill development, career enhancement" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon.svg') }}" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/css/bootstrap.min.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/css/animate.min.css') }}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/css/owl.carousel.min.css') }}">
    <!-- Maginific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/css/maginific-popup.min.css') }}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/css/nice-select.min.css') }}">
    <!-- Icofont -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/css/icofont.css') }}">
    <!-- Uicons -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/css/uicons.css') }}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets/section-css/style.css') }}">

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
                        <a href="index.html">
                            <img src="./assets/images/logo-3.svg" alt="#" />
                        </a>
                    </div>
                    <!-- offcanvas-logo-end -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fi fi-ss-cross"></i>
                    </button>
                </div>
                <div class="mobile-menu-modal-main-body">
                    <!-- offcanvas-menu start -->
                    <nav id="offcanvas-menu" class="navigation offcanvas-menu">
                        <ul id="nav mobile-nav" class="list-none offcanvas-men-list">
                            <li>
                                <a href="index.html">Home One</a>
                                <!-- <ul class="sub-menu">
                                    <li>
                                        <a href="index.html">Home One</a>
                                    </li>
                                    <li>
                                        <a href="index-2.html">Home Two</a>
                                    </li>
                                </ul> -->
                            </li>
                            <!-- <li>
                                <a class="menu-arrow" href="javascript:void(0)">Courses</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a>Course</a>
                                    </li>
                                    <li>
                                        <a href="course-details.html">Course Details</a>
                                    </li>
                                </ul>
                            </li> -->
                            <!-- <li>
                                <a class="menu-arrow" href="javascript:void(0)">Events</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="event.html">Event</a>
                                    </li>
                                    <li>
                                        <a href="event-details.html">Event Details</a>
                                    </li>
                                </ul>
                            </li> -->
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
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Mobile Menu Modal -->

    <!-- Start Header Area -->
    <header class="ep-header position-relative section-bg-1">
        <!-- Topbar -->
        <div class="ep-topbar">
            <div class="container ep-container">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-6">
                        <div class="ep-topbar__column">
                            <div class="ep-logo">
                                <a href="index.html">
                                    <img src="./assets/images/logo-3.svg" alt="logo" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10 col-6">
                        <div class="ep-topbar__column ep-topbar__column2">
                            <!-- <div class="ep-topbar__search-widget">
                                <div class="ep-topbar__category">
                                    <select>
                                        <option data-display="All">All</option>
                                        <option value="1">Study Buddy</option>
                                        <option value="2">Tutoring Services</option>
                                        <option value="3">Digital Advertising</option>
                                        <option value="4">Online Courses</option>
                                        <option value="5">Tutoring Services</option>
                                    </select>
                                </div>
                                <div class="ep-topbar__search">
                                    <form action="#" method="post">
                                        <input type="search" name="search" placeholder="Search" required />
                                        <button type="submit">
                                            <i class="fi-rr-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </div> -->
                            <nav class="ep-header__navigation">
                                <ul class="ep-header__menu ep-header__menu--style2">
                                    
                                    <li>
                                        <a href="#">Signup <i class="fi fi-ss-angle-small-down"></i>
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="signup_applicant.html">Participant</a>
                                            </li>
                                            <li>
                                                <a href="signup_instructor.html">Instructor</a>
                                            </li>
                                            <li>
                                                <a href="signup_company.html">Company</a>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                </ul>
                            </nav>
                            <a href="login.html" class="ep-header__account">
                                <i class="fi fi-rr-user"></i>
                                <div class="ep-header__account-info">
                                    <span>Sign In</span>
                                </div>
                            </a>
                            <!-- <a href="signup.html" class="ep-header__account">
                                <i class="fi fi-rr-user"></i>
                                <div class="ep-header__account-info">
                                    <span>Sign Up</span>
                                </div>
                            </a> -->
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Middle -->
        <div id="active-sticky" class="ep-header__middle">
            <div class="container ep-container">
                <div class="ep-header__inner">
                    <div class="row align-items-center">
                        
                        <div class="col-lg-12 col-xl-2 col-12">
                            <div class="ep-header__right">
                                <!-- <div class="ep-topbar__action">
                                    <div class="ep-topbar__wishlist">
                                        <a href="wishlist.html" class="ep-topbar__action-icon">
                                            <i class="fi-rr-heart"></i>
                                            <span>4</span>
                                        </a>
                                    </div>
                                    <div class="ep-topbar__cart">
                                        <a href="cart.html" class="ep-topbar__action-icon">
                                            <i class="fi-rr-shopping-cart"></i>
                                            <span>3</span>
                                        </a>
                                        <div class="ep-topbar__info">
                                            <p>Total</p>
                                            <span>$496.00</span>
                                        </div>
                                    </div>
                                </div> -->
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
        </div>
    </header>
    <!-- End Header Area -->


    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>
                @yield('content')
            </main>
            <!-- Start Footer Area -->
            <footer class="ep-footer position-relative">
                <div class="container ep-container">
                    <div class="ep-footer__top">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="ep-footer__widget footer-about">
                                    <div class="ep-footer__logo">
                                        <a href="index.html">
                                            <img src="{{ asset('assets/images/logo-2.svg') }}" alt="footer-logo" />
                                        </a>
                                    </div>
                                    <p class="ep-footer__text"> It is a long established fact that a reader will be
                                        distracted </p>
                                    <div class="ep-footer__contact">
                                        <div class="ep-footer__contact-single">
                                            <div class="ep-footer__contact-icon">
                                                <i class="fi fi-rs-marker"></i>
                                            </div>
                                            <div class="ep-footer__contact-info">
                                                <p>Address</p>
                                                <span>66 Broklyant, New York India</span>
                                            </div>
                                        </div>
                                        <div class="ep-footer__contact-single">
                                            <div class="ep-footer__contact-icon">
                                                <i class="fi fi-rr-phone-call"></i>
                                            </div>
                                            <div class="ep-footer__contact-info">
                                                <p>Phone Number</p>
                                                <a href="tel:012 345 678 9101">012 345 678 9101</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12">
                                <div class="ep-footer__widget footer-links">
                                    <h4 class="ep-footer__widget-title">About Company</h4>
                                    <ul class="ep-footer__links-list">
                                        <li>
                                            <a href="service.html">Service</a>
                                        </li>
                                        <li>
                                            <a href="faq.html">FAQ</a>
                                        </li>
                                        <li>
                                            <a href="testimonial.html">Testimonial</a>
                                        </li>
                                        <li>
                                            <a href="about.html">About Us</a>
                                        </li>
                                        <li>
                                            <a href="portfolio.html">Portfolio</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="ep-footer__widget footer-services">
                                    <h4 class="ep-footer__widget-title">Services</h4>
                                    <ul class="ep-footer__links-list">
                                        <li>
                                            <a href="service.html">
                                                <i class="fi fi-br-angle-double-small-right"></i>Reliable Rentals </a>
                                        </li>
                                        <li>
                                            <a href="service.html">
                                                <i class="fi fi-br-angle-double-small-right"></i>Golden Key Properties
                                            </a>
                                        </li>
                                        <li>
                                            <a href="service.html">
                                                <i class="fi fi-br-angle-double-small-right"></i>Swift Home Sales </a>
                                        </li>
                                        <li>
                                            <a href="service.html">
                                                <i class="fi fi-br-angle-double-small-right"></i>Elite Realty Services
                                            </a>
                                        </li>
                                        <li>
                                            <a href="service.html">
                                                <i class="fi fi-br-angle-double-small-right"></i>Dream Property
                                                Solutions </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="ep-footer__widget footer-newsletter">
                                    <h4 class="ep-footer__widget-title">Newsletter</h4>
                                    <form action="#" method="post" class="ep-footer__newsletter">
                                        <input type="email" name="email" placeholder="Your e-mail" required />
                                        <button type="submit">
                                            <i class="fi fi-ss-paper-plane"></i>
                                        </button>
                                    </form>
                                    <div class="ep-footer__social">
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
                        </div>
                    </div>
                    <div class="ep-footer__bottom">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="ep-footer__copyright">
                                    <p> © <a >PYMAis</a> @php echo date('Y') @endphp | All
                                        Rights Reserved </p>
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
                <div class="ep-footer__pattern">
                    <img src="./assets/images/footer/footer-pattern.png" alt="footer-pattern" />
                </div>
            </footer>
            <!-- End Footer Area -->
        </div>
    </div>
    <!-- Jquery JS -->
    <script src="{{ asset('assets/plugins/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/js/jquery-migrate.js') }}"></script>
    <!-- Modernizer JS -->
    <script src="{{ asset('assets/plugins/js/modernizer.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/plugins/js/bootstrap.min.js') }}"></script>
    <!-- Gsap JS -->
    <script src="{{ asset('assets/plugins/js/gsap/gsap.js') }}"></script>
    <script src="{{ asset('assets/plugins/js/gsap/gsap-scroll-to-plugin.js') }}"></script>
    <script src="{{ asset('assets/plugins/js/gsap/gsap-scroll-smoother.js') }}"></script>
    <script src="{{ asset('assets/plugins/js/gsap/gsap-scroll-trigger.js') }}"></script>
    <script src="{{ asset('assets/plugins/js/gsap/gsap-split-text.js') }}"></script>
    <!-- Wow JS -->
    <script src="{{ asset('assets/plugins/js/wow.min.js') }}"></script>
    <!-- Owl Carousel JS -->
    <script src="{{ asset('assets/plugins/js/owl.carousel.min.js') }}"></script>
    <!-- Magnific Popup JS -->
    <script src="{{ asset('assets/plugins/js/magnific-popup.min.js') }}"></script>
    <!-- CounterUp  JS -->
    <script src="{{ asset('assets/plugins/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/js/waypoints.min.js') }}"></script>
    <!-- Nice Select JS -->
    <script src="{{ asset('assets/plugins/js/nice-select.min.js') }}"></script>
    <!-- Cursor JS -->
    <script src="{{ asset('assets/plugins/js/ep-cursor.js') }}"></script>
    <!-- Back To Top JS -->
    <script src="{{ asset('assets/plugins/js/backToTop.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('assets/plugins/js/active.js') }}"></script>
</body>

</html>
