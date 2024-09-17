@extends('layouts.pymais')

@section('content')

<!-- Start Hero Area -->
                    <section class="ep-hero ep-hero--style2 hero-bg background-image" style="background-image: url('{{asset('assets/frontend/pymais/images/hero/home-2/bg.png')}}')">
                        <div class="container ep-container">
                            <div class="row align-items-center">
                                <div class="col-lg-12 col-xl-6 col-12">
                                    <div class="ep-hero__content ep-hero__content--style2">
                                        <h1 class="ep-hero__title ep-split-text left"> {{__('Welcome to PYMAis Platform')}}</h1>
                                        <p class="ep-hero__text">{{__('An innovative training program to accelerate the growth of manufacturing industry supply chain businesses, to strengthen and professionalize them based on real demands of each region.')}}</p>
                                        <div class="">
                                            <a href="#" class="btn btn-primary">{{__('Apply now')}}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 offset-xl-1 col-xl-5 col-12 order-top">
                                    <div class="ep-hero__widget ep-hero__widget-style2 position-relative">
                                        <div class="ep-hero__img">
                                            <img src="{{asset('assets/images/DSC09353.jpg')}}" alt="hero-img" />
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
                                        <h3 class="ep-section-head__color-title ep1-color ep1-border-color"> 1.{{__('What do we offer?')}} </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-12">
                                    <div class="ep-section__img ep-section__img--style2 position-relative">
                                        <div class="ep-section__img-main">
                                            <img src="{{asset('assets/images/meeting.jpeg')}}" alt="about-img" />
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
                                        <h3 class="ep-section__title ep-split-text left"> {{__('Value offer')}} </h3>
                                        <p class="ep-section__text"> {{__('Strengthen supply chain integration through six key areas:')}} </p>
                                        <div class="ep-section__widget ep-section__widget--style2">
                                            <ul class="ep-feature-list">
                                                <li>
                                                    <i class="fi fi-ss-check-circle"></i>{{__('Innovation')}}
                                                </li>
                                                <li>
                                                    <i class="fi fi-ss-check-circle"></i>{{__('Scalability And Growth')}}
                                                </li>
                                                <li>
                                                    <i class="fi fi-ss-check-circle"></i>{{__('Digital Transformation')}}
                                                </li>
                                            </ul>
                                            <ul class="ep-feature-list">
                                                <li>
                                                    <i class="fi fi-ss-check-circle"></i>{{__('Modernization And Improvement Of Operations')}}
                                                </li>
                                                <li>
                                                    <i class="fi fi-ss-check-circle"></i>{{__('Financial Preparedness')}}
                                                </li>
                                                <li>
                                                    <i class="fi fi-ss-check-circle"></i>{{__('Make SMEs Visible Within Value Chains')}}
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="ep-section__btn">
                                            <a href="#" class="ep-btn border-btn">{{__('Why This Program')}} <i class="fi fi-rs-arrow-small-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Start About Area -->
                    <!-- Start Category Area -->
                    <section class="ep-category section-gap pt-0">
                        <div class="container ep-container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 col-xl-4 col-md-8 col-12">
                                    <div class="ep-section-head text-center">
                                        <h3 class="ep-section-head__big-title ep-split-text left">{{__('Profiles')}}
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- Single Card -->
                                <div class="col-lg-4 col-xl-4 col-md-4 col-12">
                                    <a href="#" class="ep-category__card wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                                        <div class="ep-category__icon ep1-bg">
                                            <img src="{{asset('assets/frontend/pymais/images/category/category-1/1.svg')}}" alt="category-icon" />
                                        </div>
                                        <div class="ep-category__info">
                                            <h3>{{__("SME's")}}</h3>
                                        </div>
                                    </a>
                                </div>
                                <!-- Single Card -->
                                <div class="col-lg-4 col-xl-4 col-md-4 col-12">
                                    <a href="#" class="ep-category__card wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                                        <div class="ep-category__icon ep2-bg">
                                            <img src="{{asset('assets/frontend/pymais/images/category/category-1/2.svg')}}" alt="category-icon" />
                                        </div>
                                        <div class="ep-category__info">
                                            <h3>{{__('Mentor')}}</h3>
                                        </div>
                                    </a>
                                </div>
                                <!-- Single Card -->
                                <div class="col-lg-4 col-xl-4 col-md-4 col-12">
                                    <a href="#" class="ep-category__card wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                                        <div class="ep-category__icon ep4-bg">
                                            <img src="{{asset('assets/frontend/pymais/images/category/category-1/3.svg')}}" alt="category-icon" />
                                        </div>
                                        <div class="ep-category__info">
                                            <h3>{{__('Corporate')}}</h3>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </section>
                    <!-- End  Category Area -->
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
                                <img src="{{asset('assets/frontend/pymais/images/pricing/arrow.svg')}}" alt="pricing-shape" />
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
                                <img src="{{asset('assets/frontend/pymais/images/event/event-1/arrow.svg')}}" alt="arrow-icon" />
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
                                            <img src="{{asset('assets/frontend/pymais/images/team/team-2/1.png')}}" alt="team-img" />
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

@endsection
