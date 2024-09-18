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
                                        <h3 class="ep-section-head__color-title ep5-color ep1-border-color"> {{__('What do we offer?')}} </h3>
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
                                                    <span>30</span>k+
                                                </h4>
                                                <p>{{__("Projected SME's")}}</p>
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
                    <!-- Start Profile Area -->
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
                    <!-- End  Profile Area -->
                    <!-- Start Group Study Area -->
                    <section class="ep-about ep-about--style2 ep-section section-gap position-relative">
                        <div class="container ep-container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="ep-section-head ep-section-head--style2">
                                        <h3 class="ep-section-head__color-title ep5-color ep1-border-color"> {{__('The program')}} </h3>
                                    </div>
                                </div>
                            </div>
                            {{--  Business Enhancer  --}}
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-12">
                                    <div class="ep-section__content ep-section__content--style2">
                                        <h3 class="ep-section__title ep-split-text left">1. {{__('Business Enhancer')}} </h3>
                                        <p class="ep-section__text"> {{__('Helping SMEs accelerate AI and tech adoption along with other crucial business functions.')}} </p>
                                        <ul class="nav nav-tabs mt-5 ep-product-tab-list" id="productTabs" role="tablist">
                                            <li class="nav-item">
                                                <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" role="tab">1.1 {{__('Primer Program')}}</button>
                                            </li>
                                            <li class="nav-item">
                                                <button class="nav-link" id="additional-info-tab" data-bs-toggle="tab" data-bs-target="#additional-info" role="tab">1.2 {{__('Accelerating Program')}}</button>
                                            </li>
                                        </ul>
                                        <div class="tab-content mt-4" id="productTabsContent">
                                            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                                                <div class="ep-product-tab-inside">
                                                    <div class="ep-product-tab-inside__content">
                                                        <p class="ep-product-single__tab-text"> {{__('Through asynchronous online sessions, participating companies will become aware of US - Mexico business opportunities and will be equipped with six 1-hour topics.')}} </p>
                                                        <ul class="mt-3">
                                                            <li>- {{__('US - Mexico Business Opportunities Overview')}}</li>
                                                            <li>- {{__('Industry Trends + Digital Transformation')}}</li>
                                                            <li>- {{__('Generative AI')}}</li>
                                                            <li>- {{__('Cybersecurity and Data Protection')}}</li>
                                                            <li>- {{__('Sustainability')}}</li>
                                                            <li>- {{__('Open Innovation')}}</li>
                                                        </ul>
                                                        <p class="ep-product-single__tab-text mg-top-20"> </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="additional-info" role="tabpanel" aria-labelledby="additional-info">
                                                <div class="ep-product-tab-inside">
                                                    <div class="ep-product-tab-inside__content">
                                                        <p class="ep-product-single__tab-text"> {{__('After the Primer program participants will accelerate their business model by receiving 5 modules of online asynchronous sessions plus optional online synchronic mentoring activities to improve their value proposition.')}} </p>
                                                        <p class="ep-product-single__tab-text">{{__("Program's key modules:")}}</p>
                                                        <ul class="mt-3">
                                                            <li>- {{__('Innovation')}}</li>
                                                            <li>- {{__('Scalability and Growth')}}</li>
                                                            <li>- {{__('Digital Transformation')}}</li>
                                                            <li>- {{__('Key operations')}}</li>
                                                            <li>- {{__('Financial readiness')}}</li>
                                                        </ul>
                                                        <p class="ep-product-single__tab-text mg-top-20">{{__('During each of the modules deployment AI tools will be included as part of the programming, learning and activities.')}}</p>

                                                        <div class="ep-section__btn">
                                                            <a href="#" class="ep-btn border-btn">{{__('See full curriculum')}} <i class="fi fi-rs-arrow-small-right"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="ep-section__img ep-section__img--style2 position-relative">
                                        <div class="ep-section__img-main">
                                            <img src="{{asset('assets/frontend/pymais/images/home/home-01.jpg')}}" alt="about-img" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{--  Market Access & Specialization  --}}
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-12">
                                    <div class="ep-section__img ep-section__img--style2 position-relative">
                                        <div class="ep-section__img-main">
                                            <img src="{{asset('assets/frontend/pymais/images/home/home-02.jpg')}}" alt="about-img" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="ep-section__content ep-section__content--style2">
                                        <h3 class="ep-section__title ep-split-text left">2. {{__('Market Access & Specialization')}} </h3>
                                        <p class="ep-section__text"> {{__("Promoting SMEs' value propositions to potential binational industry customers through speed dating and demo day's sessions furthermore participating companies will have the opportunity to take specialization content according to their development needs.")}} </p>
                                        <p class="ep-section__text"><small>{{__("(To access this stage SME's must pay a 350 USD annual membership, 4 sessions live mentoring, platform exposure, continuous learning, up to 5 participants per SME).")}}</small></p>
                                        <ul class="nav nav-tabs mt-5 ep-product-tab-list" id="productTabs" role="tablist">
                                            <li class="nav-item">
                                                <button class="nav-link active" id="visibility-tab" data-bs-toggle="tab" data-bs-target="#visibility" role="tab">2.1 {{__('On-going Visibility')}}</button>
                                            </li>
                                            <li class="nav-item">
                                                <button class="nav-link" id="specialization-tab" data-bs-toggle="tab" data-bs-target="#specialization" role="tab">2.2 {{__('Specialization Opportunities')}}</button>
                                            </li>
                                        </ul>
                                        <div class="tab-content mt-4" id="productTabsContent">
                                            <div class="tab-pane fade show active" id="visibility" role="tabpanel" aria-labelledby="visibility-tab">
                                                <div class="ep-product-tab-inside">
                                                    <div class="ep-product-tab-inside__content">
                                                        <p class="ep-product-single__tab-text"> {{__('Participating companies that complete Primer and Accelerating programs will have the chance to be continuously exposed through online and in-person events, such as:')}} </p>
                                                        <ul class="mt-3">
                                                            <li>- <strong>{{__('Continuous exposure on the platform:')}}</strong> {{__('Tailored to their line of business, participants will have a constant presence on our platform, increasing their reach.')}}</li>
                                                            <li>- {{__('Business sessions.')}}
                                                                <ul>
                                                                    <li><strong>{{__('Virtual Demo Days: ')}}</strong>Participants will present 1-minute pitch videos, highlighting their value propositions.</li>
                                                                    <li><strong>{{__('Speed dating meeting/interviews (online and in-person):')}}</strong>These sessions will allow participants to engage in business conversations at different levels:
                                                                        <ul>
                                                                            <li>- Local</li>
                                                                            <li>- Regional</li>
                                                                            <li>- {{__('National')}}</li>
                                                                            <li>- {{__('Binational')}}</li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                        <p class="ep-product-single__tab-text mg-top-20"> </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="specialization" role="tabpanel" aria-labelledby="specialization">
                                                <div class="ep-product-tab-inside">
                                                    <div class="ep-product-tab-inside__content">
                                                        <p class="ep-product-single__tab-text"> {{__('During the program participating companies will be able to take specialization and certification content according to their industry vertical of interest e.g.')}} </p>
                                                        <ul class="mt-3">
                                                            <li>- {{__('Automotive')}}</li>
                                                            <li>- {{__('Bio-medical')}}</li>
                                                            <li>- {{__('Electronics')}}</li>
                                                            <li>- {{__('IT')}}</li>
                                                            <li>- {{__('Aerospace-aeronautical')}}</li>
                                                            <li>- {{__('Advanced Technologies')}}</li>
                                                            <li>- {{__('Cybersecurity')}}</li>
                                                            <li>- {{__('AI')}}</li>
                                                        </ul>
                                                        <p class="ep-product-single__tab-text mg-top-20">{{__('Furthermore participating companies may take key updating content such as LinkedIn courses anytime.')}}</p>

                                                        <div class="ep-section__btn">
                                                            <a href="#" class="ep-btn border-btn">{{__('About us')}} <i class="fi fi-rs-arrow-small-right"></i>
                                                            </a>
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
                                            <h3 class="ep-section-head__color-title ep9-color ep9-border-color">{{__('PYMAis')}}</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-xl-4 col-12">
                                        <div class="ep-section__content ep-section__content--style2">
                                            <h3 class="ep-section__title ep-split-text left">{{__('How PYMAis works?')}} </h3>
                                            {{--  <p class="ep-section__text"> Lorem ipsum dolor sit amet consectetur. Amet lectus mi ultricies dictum facilisis of sem. Imperdiet massa turpis sit proin metus volutpat.Lorem </p>  --}}
                                            {{--  <div class="ep-section__btn">
                                                <a href="#" class="ep-btn border-btn">Read More <i class="fi fi-rs-arrow-small-right"></i>
                                                </a>
                                            </div>  --}}
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-6 offset-xl-2 col-12">
                                        <div class="ep-group-study__video background-image ep-hobble position-relative" style="background-image: url('{{asset('assets/frontend/pymais/images/home/home-03.jpg')}}');">
                                            <a href="{{asset('assets/frontend/pymais/video/video-01.mp4')}}" class="ep-video__btn popup-video ep-hover-layer-2">
                                                <i class="fi fi-sr-play"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Group Study Area -->
                    <!-- Start Event Area -->
                    <section class="ep-event ep-team--style2 section-gap position-relative">
                        <div class="container ep-container">
                            <div class="col-12">
                                <div class="ep-section-head ep-section-head--style2">
                                    <h3 class="ep-section-head__color-title ep1-color ep1-border-color">{{__('Courses')}}</h3>
                                    {{--  <div class="ep-section-head__inner">
                                        <h2 class="ep-section-head__big-title ep-split-text left">  </h2>
                                        <p class="ep-section-head__text mg-top-30"> Lorem ipsum dolor sit amet consectetur. A lectus mi <br /> ultricies dictum facilisis of sem. Imperdiet an massa turpis </p>
                                    </div>  --}}
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
                                        <a href="#" class="ep-event__img">
                                            <img src="{{asset('assets/frontend/pymais/images/event/event-1/2.png')}}" alt="event-img" />
                                        </a>
                                        <div class="ep-event__info">
                                            <a href="#" class="ep-event__title">Education foundation</a>
                                            <p class="ep-event__p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta unde, alias iusto cum, reprehenderit aspernatur necessitatibus quod deleniti ad, assumenda accusantium aliquid iste magnam doloribus voluptas facilis at. Aspernatur, nemo.</p>
                                        </div>
                                    </div>
                                    <!-- Single Event -->
                                    <div class="ep-event__card">
                                        <a href="#" class="ep-event__img">
                                            <img src="{{asset('assets/frontend/pymais/images/event/event-1/2.png')}}" alt="event-img" />
                                        </a>
                                        <div class="ep-event__info">
                                            <a href="#" class="ep-event__title">Education foundation</a>
                                            <p class="ep-event__p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta unde, alias iusto cum, reprehenderit aspernatur necessitatibus quod deleniti ad, assumenda accusantium aliquid iste magnam doloribus voluptas facilis at. Aspernatur, nemo.</p>
                                        </div>
                                    </div>
                                    <!-- Single Event -->
                                    <div class="ep-event__card">
                                        <a href="#" class="ep-event__img">
                                            <img src="{{asset('assets/frontend/pymais/images/event/event-1/2.png')}}" alt="event-img" />
                                        </a>
                                        <div class="ep-event__info">
                                            <a href="#" class="ep-event__title">Education foundation</a>
                                            <p class="ep-event__p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta unde, alias iusto cum, reprehenderit aspernatur necessitatibus quod deleniti ad, assumenda accusantium aliquid iste magnam doloribus voluptas facilis at. Aspernatur, nemo.</p>
                                        </div>
                                    </div>
                                    <!-- Single Event -->
                                    <div class="ep-event__card">
                                        <a href="#" class="ep-event__img">
                                            <img src="{{asset('assets/frontend/pymais/images/event/event-1/2.png')}}" alt="event-img" />
                                        </a>
                                        <div class="ep-event__info">
                                            <a href="#" class="ep-event__title">Education foundation</a>
                                            <p class="ep-event__p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta unde, alias iusto cum, reprehenderit aspernatur necessitatibus quod deleniti ad, assumenda accusantium aliquid iste magnam doloribus voluptas facilis at. Aspernatur, nemo.</p>
                                        </div>
                                    </div>
                                    <!-- Single Event -->
                                    <div class="ep-event__card">
                                        <a href="#" class="ep-event__img">
                                            <img src="{{asset('assets/frontend/pymais/images/event/event-1/2.png')}}" alt="event-img" />
                                        </a>
                                        <div class="ep-event__info">
                                            <a href="#" class="ep-event__title">Education foundation</a>
                                            <p class="ep-event__p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta unde, alias iusto cum, reprehenderit aspernatur necessitatibus quod deleniti ad, assumenda accusantium aliquid iste magnam doloribus voluptas facilis at. Aspernatur, nemo.</p>
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
                        {{-- QUITAR ESTILO DE COLOR EN EL DIV --}}
                        <div style="background-color: blue" class="container ep-container">
                        {{-- QUITAR ESTILO DE COLOR EN EL DIV --}}
                            <div class="row">
                                <div class="col-12">
                                    <div class="owl-carousel ep-brand__slider">
                                        <!-- Single Brand -->
                                        <a href="#" class="ep-brand__logo ep-brand__logo--style2">
                                            <img src="{{asset('assets/frontend/pymais/images/collab/microsoft.png')}}" alt="brand-logo" />
                                        </a>
                                        <!-- Single Brand -->
                                        <a href="#" class="ep-brand__logo ep-brand__logo--style2">
                                            <img src="{{asset('assets/frontend/pymais/images/collab/decj_soft.png')}}" alt="brand-logo" />
                                        </a>
                                        <!-- Single Brand -->
                                        <a href="#" class="ep-brand__logo ep-brand__logo--style2">
                                            <img src="{{asset('assets/frontend/pymais/images/collab/fechac_perse.png')}}" alt="brand-logo" />
                                        </a>
                                        <!-- Single Brand -->
                                        <a href="#" class="ep-brand__logo ep-brand__logo--style2">
                                            <img src="{{asset('assets/frontend/pymais/images/collab/fix_nm.png')}}" alt="brand-logo" />
                                        </a>
                                        <!-- Single Brand -->
                                        <a href="#" class="ep-brand__logo ep-brand__logo--style2">
                                            <img src="{{asset('assets/frontend/pymais/images/collab/fletes_mexico.png')}}" alt="brand-logo" />
                                        </a>
                                        <a href="#" class="ep-brand__logo ep-brand__logo--style2">
                                            <img src="{{asset('assets/frontend/pymais/images/collab/flo_networks.png')}}" alt="brand-logo" />
                                        </a>
                                        <a href="#" class="ep-brand__logo ep-brand__logo--style2">
                                            <img src="{{asset('assets/frontend/pymais/images/collab/high_desert.png')}}" alt="brand-logo" />
                                        </a>
                                        <a href="#" class="ep-brand__logo ep-brand__logo--style2">
                                            <img src="{{asset('assets/frontend/pymais/images/collab/hunt.png')}}" alt="brand-logo" />
                                        </a>
                                        <a href="#" class="ep-brand__logo ep-brand__logo--style2">
                                            <img src="{{asset('assets/frontend/pymais/images/collab/kelly_tomblin.png')}}" alt="brand-logo" />
                                        </a>
                                        <a href="#" class="ep-brand__logo ep-brand__logo--style2">
                                            <img src="{{asset('assets/frontend/pymais/images/collab/mt_net.png')}}" alt="brand-logo" />
                                        </a>
                                        <a href="#" class="ep-brand__logo ep-brand__logo--style2">
                                            <img src="{{asset('assets/frontend/pymais/images/collab/novamex.png')}}" alt="brand-logo" />
                                        </a>
                                        <a href="#" class="ep-brand__logo ep-brand__logo--style2">
                                            <img src="{{asset('assets/frontend/pymais/images/collab/pioneers_21.png')}}" alt="brand-logo" />
                                        </a>
                                        <a href="#" class="ep-brand__logo ep-brand__logo--style2">
                                            <img src="{{asset('assets/frontend/pymais/images/collab/sunflower_bank.png')}}" alt="brand-logo" />
                                        </a>
                                        <a href="#" class="ep-brand__logo ep-brand__logo--style2">
                                            <img src="{{asset('assets/frontend/pymais/images/collab/technology_hub.png')}}" alt="brand-logo" />
                                        </a>
                                        <a href="#" class="ep-brand__logo ep-brand__logo--style2">
                                            <img src="{{asset('assets/frontend/pymais/images/collab/tecma.png')}}" alt="brand-logo" />
                                        </a>
                                        <a href="#" class="ep-brand__logo ep-brand__logo--style2">
                                            <img src="{{asset('assets/frontend/pymais/images/collab/the_city_of_eptx.png')}}" alt="brand-logo" />
                                        </a>
                                        <a href="#" class="ep-brand__logo ep-brand__logo--style2">
                                            <img src="{{asset('assets/frontend/pymais/images/collab/the_electric_company.png')}}" alt="brand-logo" />
                                        </a>
                                        <a href="#" class="ep-brand__logo ep-brand__logo--style2">
                                            <img src="{{asset('assets/frontend/pymais/images/collab/weststar_bank.png')}}" alt="brand-logo" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Start Brand -->

@endsection
