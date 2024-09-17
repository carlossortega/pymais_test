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
                    @yield('content')
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
