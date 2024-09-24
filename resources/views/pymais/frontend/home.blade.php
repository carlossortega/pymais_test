@extends('layouts.pymais')

@push('accordion-css')
    <!-- CSS for Accordion -->
    <style>
        .pymais-accordion-card {
            border: 1px solid #e0e0e0 !important;
            margin-bottom: 1rem;
            padding: 1rem;
            border-radius: 8px !important;
            transition: background-color 0.3s ease;
        }

        .pymais-accordion-header {
            cursor: pointer;
            padding: 10px 0;
            display: flex;
            align-items: center;
        }

        .pymais-accordion-title {
            font-size: 1.25rem;
            cursor: pointer;
            padding: 10px 0;
            margin: 0;
        }

        .pymais-accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s ease-out;
        }

        .pymais-accordion-content p {
            margin: 0;
            padding: 0px 10px !important;
        }

        .pymais-accordion-card.active .pymais-accordion-content {
            max-height: none;
            overflow: visible;
            transition: max-height 0.5s ease-in;
        }

        /* Efecto de hover para la tarjeta */
        .pymais-accordion-card:hover {
            background-color: #f2f2f2;
        }

        /* Efecto de hover para los iconos dentro de la tarjeta */
        .pymais-accordion-card:hover .icon-class {
            background-color: #ddd;
            transition: background-color 0.3s ease;
        }
    </style>

@endpush
@section('content')
    <!-- Start Hero Area -->
    <section class="ep-hero ep-hero--style2 hero-bg particle-container" style="background-color: #f2f2f2">
        <div id="particles-js"></div>
        <div class="container ep-container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-xl-6 col-12">
                    <div class="ep-hero__content ep-hero__content--style2">
                        <h1 class="ep-hero__title ep-split-text left"> {{ __('Welcome to') }} <span
                                class="ep-hero__title ep-split-text" style="color:#506CC9;">PYMAIS</span></h1>
                        <span class="ep-hero__text">
                            {{ __('An innovative training program to accelerate the growth of manufacturing industry supply chain businesses, to strengthen and professionalize them based on real demands of each region.') }}
                        </span>
                        <div class="mt-3">
                            <a href="#" class="pymais-button-gradient">{{ __('Apply now') }}</a>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-12 offset-xl-1 col-xl-5 col-12 order-top">
                            <div class="ep-hero__widget ep-hero__widget-style2 position-relative">
                                <div class="ep-hero__img">
                                    <img src="{{ asset('assets/frontend/pymais/images/welcome.jpg') }}" alt="hero-img" />
                                </div>
                            </div>
                        </div> -->
            </div>
        </div>
    </section>
    <!-- End Start Hero Area -->
    <!-- Start About Area -->
    <section class="ep-about ep-about--style2 ep-section section-gap position-relative">
        <div class="container ep-container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-12 text-center">
                    <div class="ep-section__content ep-section__content--style2">
                        <h3 class="ep-section__title ep-split-text left"> {{ __('About ') }} <span
                                style="color:#2849E6">PYMAIS</span></h3>
                        <p class="ep-section__text">
                            {{ __('PYMAIS Platform accelerates SME growth in the manufacturing supply chain by strengthening and aligning them with regional demands, enhancing MX-US value chains, and capitalizing on nearshoring opportunities.') }}
                        </p>
                        <div class="pymais-section__widget">
                            <ul class="pymais-feature-list">
                                <li><i class="fi fi-ss-check-circle"></i>{{ __('Innovation') }}</li>
                                <li><i class="fi fi-ss-check-circle"></i>{{ __('Scalability And Growth') }}</li>
                                <li><i class="fi fi-ss-check-circle"></i>{{ __('Digital Transformation') }}</li>
                                <li><i
                                        class="fi fi-ss-check-circle"></i>{{ __('Modernization And Improvement Of Operations') }}
                                </li>
                                <li><i class="fi fi-ss-check-circle"></i>{{ __('Financial Preparedness') }}</li>
                                <li><i class="fi fi-ss-check-circle"></i>{{ __('Make SMEs Visible Within Value Chains') }}
                                </li>
                            </ul>
                        </div>
                        <div class="ep-section__btn">
                            <a href="{{ asset('pdfs/PYMAIS.pdf') }}" class="ep-btn border-btn pymais-20"
                                target="_blank">{{ __('Why PYMAIS') }} <i class="fi fi-rs-arrow-small-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Start About Area -->

    <!-- Start Accordion Profile Area -->
    <section class="ep-category section-gap pt-0">
        <div class="container ep-container">
            <div class="row justify-content-center mb-50">
                <div class="col-lg-12 col-xl-12 col-md-12 col-12">
                    <div class="ep-section-head text-center 0">
                        <h3 class="ep-section-head__big-title ep-split-text left">
                            {{ __('This program is for you') }}
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row accordion accordion-flush" id="accordionExample">
                <!-- Single Card with Accordion -->
                <div class="col-lg-3 col-xl-3 col-md-3 col-12">
                    <div class="accordion-item pymais-accordion-card">
                        <div class="text-center pymais-accordion-title">
                            <div class="accordion-header" id="headingOne">
                                <div data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    <div class="ep-category__icon ep2-bg">
                                        <img src="{{ asset('assets/frontend/pymais/images/category/category-1/1.svg') }}"
                                            alt="category-icon" />
                                    </div>
                                    <h3 class="pymais-accordion-title">{{ __('SMEs') }}</h3>
                                </div>
                            </div>
                        </div>
                        <div id="collapseOne" class="accordion-collapse collapse hide" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <p class="accordion-body text-center">
                                {{ __('By joining PYMAIS, you will be able to accelerate the growth of your SME through specialized training, mentoring, key certifications and connections with large companies. This will help you expand your operations and strengthen your competitiveness in the MX-US market.') }}
                                <br><br>{{ __('To participate, your company must be an established SME with at least 2 years of operation, have a scalable business model and be interested in selling to the industry, and be committed to innovation and collaboration.') }}
                                <a href="{{ asset('pdfs/PARTICIPANT.pdf') }}" class="mt-3 pymais-button-gradient"
                                    target="_blank">{{ __('More Information') }} </a></i>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Single Card with Accordion -->
                <div class="col-lg-3 col-xl-3 col-md-3 col-12">
                    <div class="accordion-item pymais-accordion-card">
                        <div class="pymais-accordion-title text-center">
                            <div class="accordion-header" id="headingTwo">
                                <div data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true"
                                    aria-controls="collapseTwo">
                                    <div class="ep-category__icon ep2-bg">
                                        <img src="{{ asset('assets/frontend/pymais/images/category/category-1/2.svg') }}"
                                            alt="category-icon" />
                                    </div>
                                    <h3 class="pymais-accordion-title">{{ __('Mentor') }}</h3>
                                </div>
                            </div>
                        </div>
                        <div id="collapseTwo" class="accordion-collapse collapse hide" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <p class="accordion-body text-center">
                                {{ __('As a PYMAIS mentor, you will have the opportunity to share your knowledge with growing SMEs, impact their development, and expand your network. You will also position yourself as a leader in your sector and gain access to valuable collaboration opportunities.') }}
                                <br><br>{{ __('To be a mentor, you need professional experience in key areas, industry sector knowledge, virtual mentoring skills and a focus on practical results that help SMEs grow.') }}
                                <a href="{{ asset('pdfs/MENTOR.pdf') }}" class="mt-3 pymais-button-gradient"
                                    target="_blank">{{ __('More Information') }} </a></i>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Single Card with Accordion -->
                <div class="col-lg-3 col-xl-3 col-md-3 col-12">
                    <div class="accordion-item pymais-accordion-card">
                        <div class="pymais-accordion-title text-center">
                            <div class="accordion-header" id="headingThree">
                                <div data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true"
                                    aria-controls="collapseThree">
                                    <div class="ep-category__icon ep2-bg">
                                        <img src="{{ asset('assets/frontend/pymais/images/category/category-1/3.svg') }}"
                                            alt="category-icon" />
                                    </div>
                                    <h3 class="pymais-accordion-title">{{ __('Corporate') }}</h3>
                                </div>
                            </div>
                        </div>
                        <div id="collapseThree" class="accordion-collapse collapse hide" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <p class="accordion-body text-center">
                                {{ __('By joining PYMAIS as a traction company, you will be able to access a network of innovative SMEs, diversify your supply chain and explore nearshoring opportunities through virtual sessions. You will also strengthen your market position and contribute to regional economic development.') }}
                                <br><br>
                                {{ __('To participate, you must be a corporate with an interest in acquiring products or investing in SMEs, with experience in supplier integration and a commitment to innovation and strategic collaboration.') }}
                                <a href="{{ asset('pdfs/CORPORATE.pdf') }}" class="mt-3 pymais-button-gradient"
                                    target="_blank">{{ __('More Information') }} </a></i>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Single Card with Accordion -->
                <div class="col-lg-3 col-xl-3 col-md-3 col-12">
                    <div class="accordion-item pymais-accordion-card">
                        <div class="pymais-accordion-title text-center">
                            <div class="accordion-header" id="headingFour">
                                <div data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true"
                                    aria-controls="collapseFour">
                                    <div class="ep-category__icon ep2-bg">
                                        <img src="{{ asset('assets/frontend/pymais/images/category/category-1/7.svg') }}"
                                            alt="category-icon" />
                                    </div>
                                    <h3 class="pymais-accordion-title">{{ __('Allies') }}</h3>
                                </div>
                            </div>
                        </div>
                        <div id="collapseFour" class="accordion-collapse collapse hide" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <p class="accordion-body text-center">
                                {{ __('By joining PYMAIS as an ally or partner, you will be able to collaborate in the growth of SMEs, position your brand in an environment of innovation and generate new business opportunities. You will contribute to economic development and create synergies with key market players.') }}
                                <br><br>{{ __('To become an ally, you need to be an organization interested in supporting SMEs, preferably with experience in technology, finance, education or industry, and contribute resources, knowledge or connections that will boost their growth and professionalization.') }}
                                <a href="{{ asset('pdfs/PARTNER_ALLY.pdf') }}" class="mt-3 pymais-button-gradient"
                                    target="_blank">{{ __('More Information') }} </a></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Accordion Profile Area -->

    <!-- Start Group Study Area -->
    <section class="ep-about ep-about--style2 ep-section section-gap position-relative">
        <div class="container ep-container">
            {{--  Business Enhancer  --}}
            <div class="row align-items-center">
                <div class="col-lg-12 col-12">
                    <div class="ep-section__content ep-section__content--style2">
                        <h3 class="ep-section__title ep-split-text text-center">{{ __('Program Outline') }} </h3>
                        <h3 class="text-center" style="color:#2849E6"> <u>1</u></h3>
                        <h3 class="ep-section__title ep-split-text text-center">{{ __('Business Enhancer') }} </h3>
                        <p class="ep-section__text text-center">
                            {{ __('Helping SMEs accelerate AI and tech adoption along with other crucial business functions.') }}
                        </p>
                        <ul class="nav nav-tabs mt-5 ep-product-tab-list" id="productTabs" role="tablist">
                            <li class="nav-item">
                                <button class="nav-link active" id="description-tab" data-bs-toggle="tab"
                                    data-bs-target="#description" role="tab">{{ __('Primer') }}</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="additional-info-tab" data-bs-toggle="tab"
                                    data-bs-target="#additional-info" role="tab">
                                    {{ __('Accelerating') }}</button>
                            </li>
                        </ul>
                        <div class="tab-content mt-4" id="productTabsContent">
                            <div class="tab-pane fade show active" id="description" role="tabpanel"
                                aria-labelledby="description-tab">
                                <div class="ep-product-tab-inside">
                                    <div class="ep-product-tab-inside__content">
                                        <p class="ep-product-single__tab-text">
                                            {{ __('Through asynchronous online sessions, participating companies will become aware of US - Mexico business opportunities and will be equipped with six 1-hour topics.') }}
                                        </p>
                                        <ul class="mt-3">
                                            <li>- {{ __('US - Mexico Business Opportunities Overview') }}</li>
                                            <li>- {{ __('Industry Trends + Digital Transformation') }}</li>
                                            <li>- {{ __('Generative AI') }}</li>
                                            <li>- {{ __('Cybersecurity and Data Protection') }}</li>
                                            <li>- {{ __('Sustainability') }}</li>
                                            <li>- {{ __('Open Innovation') }}</li>
                                        </ul>
                                        <p class="ep-product-single__tab-text mg-top-20"> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="additional-info" role="tabpanel"
                                aria-labelledby="additional-info">
                                <div class="ep-product-tab-inside">
                                    <div class="ep-product-tab-inside__content">
                                        <p class="ep-product-single__tab-text">
                                            {{ __('After the Primer program participants will accelerate their business model by receiving 5 modules of online asynchronous sessions plus optional online synchronic mentoring activities to improve their value proposition.') }}
                                        </p>
                                        <p class="ep-product-single__tab-text">{{ __("Program's key modules:") }}</p>
                                        <ul class="mt-3">
                                            <li>- {{ __('Innovation') }}</li>
                                            <li>- {{ __('Scalability and Growth') }}</li>
                                            <li>- {{ __('Digital Transformation') }}</li>
                                            <li>- {{ __('Key operations') }}</li>
                                            <li>- {{ __('Financial readiness') }}</li>
                                        </ul>
                                        <p class="ep-product-single__tab-text mg-top-20">
                                            {{ __('During each of the modules deployment AI tools will be included as part of the programming, learning and activities.') }}
                                        </p>

                                        <div class="ep-section__btn">
                                            <a href="{{ asset('pdfs/Full-Curriculum.pdf') }}" class="ep-btn border-btn"
                                                target="_blank">{{ __('See full curriculum') }}
                                                <i class="fi fi-rs-arrow-small-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{--  Market Access & Specialization  --}}
            <div class="row align-items-center">
                <div class="col-lg-12 col-12">
                    <div class="ep-section__content ep-section__content--style2">
                        <h3 class="text-center" style="color:#2849E6"><u>2</u></h3>
                        <h3 class="ep-section__title ep-split-text text-center">{{ __('Market Access & Specialization') }}
                        </h3>
                        <p class="ep-section__text">
                            {{ __("Promoting SMEs' value propositions to potential binational industry customers through speed dating and demo day's sessions furthermore participating companies will have the opportunity to take specialization content according to their development needs.") }}
                        </p>
                        <p class="ep-section__text">
                            <small>{{ __("(To access this stage SME's must pay a 350 USD annual membership, 4 sessions live mentoring, platform exposure, continuous learning, up to 5 participants per SME).") }}</small>
                        </p>
                        <ul class="nav nav-tabs mt-5 ep-product-tab-list" id="productTabs" role="tablist">
                            <li class="nav-item">
                                <button class="nav-link active" id="visibility-tab" data-bs-toggle="tab"
                                    data-bs-target="#visibility" role="tab">
                                    {{ __('On-going Visibility') }}</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="specialization-tab" data-bs-toggle="tab"
                                    data-bs-target="#specialization" role="tab">
                                    {{ __('Specialization Opportunities') }}</button>
                            </li>
                        </ul>
                        <div class="tab-content mt-4" id="productTabsContent">
                            <div class="tab-pane fade show active" id="visibility" role="tabpanel"
                                aria-labelledby="visibility-tab">
                                <div class="ep-product-tab-inside">
                                    <div class="ep-product-tab-inside__content">
                                        <p class="ep-product-single__tab-text">
                                            {{ __('Participating companies that complete Primer and Accelerating programs will have the chance to be continuously exposed through online and in-person events, such as:') }}
                                        </p>
                                        <ul class="mt-3">
                                            <li>- <strong>{{ __('Continuous exposure on the platform:') }}</strong>
                                                {{ __('Tailored to their line of business, participants will have a constant presence on our platform, increasing their reach.') }}
                                            </li>
                                            <li>- {{ __('Business sessions.') }}
                                                <ul>
                                                    <li><strong>{{ __('Virtual Demo Days: ') }}</strong>Participants will
                                                        present 1-minute pitch videos, highlighting their value
                                                        propositions.</li>
                                                    <li><strong>{{ __('Speed dating meeting/interviews (online and in-person):') }}</strong>These
                                                        sessions will allow participants to engage in business conversations
                                                        at different levels:
                                                        <ul>
                                                            <li>- Local</li>
                                                            <li>- Regional</li>
                                                            <li>- {{ __('National') }}</li>
                                                            <li>- {{ __('Binational') }}</li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <p class="ep-product-single__tab-text mg-top-20"> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="specialization" role="tabpanel"
                                aria-labelledby="specialization">
                                <div class="ep-product-tab-inside">
                                    <div class="ep-product-tab-inside__content">
                                        <p class="ep-product-single__tab-text">
                                            {{ __('During the program participating companies will be able to take specialization and certification content according to their industry vertical of interest e.g.') }}
                                        </p>
                                        <ul class="mt-3">
                                            <li>- {{ __('Automotive') }}</li>
                                            <li>- {{ __('Bio-medical') }}</li>
                                            <li>- {{ __('Electronics') }}</li>
                                            <li>- {{ __('IT') }}</li>
                                            <li>- {{ __('Aerospace-aeronautical') }}</li>
                                            <li>- {{ __('Advanced Technologies') }}</li>
                                            <li>- {{ __('Cybersecurity') }}</li>
                                            <li>- {{ __('AI') }}</li>
                                        </ul>
                                        <p class="ep-product-single__tab-text mg-top-20">
                                            {{ __('Furthermore participating companies may take key updating content such as LinkedIn courses anytime.') }}
                                        </p>


                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-3">
                            <a href="#" class="pymais-button-gradient">{{ __('Apply now') }}</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Video Area -->
    <section class="ep-group-study position-relative section-gap mg-btm-120 pt-0">

        <div class="container ep-container">
            <div class="ep-group-study__inner position-relative">
                <div class="ep-brand-name">
                    <img src="{{ asset('assets/frontend/pymais/images/brand-name.svg') }}" alt="brand-name" />
                </div>
                <div class="ep-group-study__shape updown-ani">
                    <img src="{{ asset('assets/frontend/pymais/images/group-study/shape.svg') }}" alt="arrow-icon" />
                </div>

                <div class="row">
                    <div class="col-lg-6 col-xl-4 col-12">
                        <div class="ep-section__content ep-section__content--style2">
                            <h3 class="ep-section__title ep-split-text left">{{ __('How PYMAIS works') }} </h3>
                            <p class="ep-section__text">
                                {{ __('PYMAIS Platform is a training program that accelerates the growth of SMEs in the manufacturing supply chain by helping them take advantage of nearshoring opportunities and improve the MX-US value chains. It focuses on strengthening and professionalizing these businesses, aligning them with the specific demands and needs of each region to capitalize on opportunities in emerging markets.') }}
                            </p>
                            {{--  <div class="ep-section__btn">
                                                <a href="#" class="ep-btn border-btn">Read More <i class="fi fi-rs-arrow-small-right"></i>
                                                </a>
                                            </div>  --}}
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 offset-xl-2 col-12">
                        <div class="ep-group-study__video background-image ep-hobble position-relative"
                            style="background-image: url('{{ asset('assets/frontend/pymais/images/home/home-03.jpg') }}');">
                            <a href="{{ asset('assets/frontend/pymais/video/PYMAIS-spanish.mp4') }}"
                                class="ep-video__btn popup-video ep-hover-layer-2">
                                <i class="fi fi-sr-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Group Study Area -->

    <!-- Start Courses Area -->
    <section class="ep-event ep-team--style2 section-gap position-relative">
        <div class="container ep-container">
            <div class="col-12">
                <div class="ep-section-head ep-section-head--style2">
                    <h3 class="ep-section__title ep-split-text text-center"> {{ __('Get Started With ') }}</h3>
                    <h5 class="text-center" style="color:#2849E6">Key resources</h5>
                </div>
            </div>
        </div>
        <div class="ep-event__container">
            <div class="ep-event__shape updown-ani">
                <img src="{{ asset('assets/frontend/pymais/images/event/event-1/arrow.svg') }}" alt="arrow-icon" />
            </div>
            <div class="row">
                <div class="owl-carousel ep-event__slider">
                    @php
                        // Obtén los cursos únicos y activos
                        $featured_courses = DB::table('courses')
                            ->where('status', 'active')
                            ->distinct('id') // Asegúrate de obtener cursos únicos
                            ->latest('id')
                            ->get();
                    @endphp
                    @foreach ($featured_courses as $row)
                        <!-- Single Event -->
                        <div class="ep-event__card">
                            <a href="{{ route('course.details', $row->slug) }}" class="ep-event__img">
                                <img src="{{ get_image($row->thumbnail) }}" alt="event-img" />
                            </a>
                            @php
                                // Calcula la calificación promedio del curso
                                $ratings = DB::table('reviews')
                                    ->where('course_id', $row->id)
                                    ->pluck('rating')
                                    ->toArray();
                                $average_rating = count($ratings) > 0 ? array_sum($ratings) / count($ratings) : 0;
                                $full_stars = floor($average_rating);
                                $has_half_star = $average_rating - $full_stars >= 0.5;
                                $review_count = count($ratings);
                            @endphp
                            <div class="ep-event__info">
                                <a href="{{ route('course.details', $row->slug) }}"
                                    class="ep-event__title">{{ ucfirst($row->title) }}</a>
                                <a href="{{ route('course.details', $row->slug) }}">
                                    <p class="ep-event__p">
                                        {{ \Illuminate\Support\Str::words(strip_tags($row->description), 15, '...') }}
                                    </p>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- End Courses Area -->

    <!-- Start Newsletter Area -->
    <section class="pymais-newsletter pymais-newsletter--style2 section-gap position-relative"
        style="background-color: #f2f2f2">
        <div class="container pymais-container">
            <div class="row align-items-center">
                <!-- Left Column: Newsletter Area -->
                <div class="col-lg-6 col-xl-6 col-12 offset-md-1">
                    <div class="pymais-newsletter__content">
                        <h3 class="pymais-newsletter__title pymais-split-text left">
                            {{ __('Empowering SMEs for the future') }}</h3>
                        <p class="pymais-newsletter__text mb-3">
                            {{ __('Sign up to be the first to access our groundbreaking platform, and be at the forefront of innovation and growth!') }}
                        </p>
                    </div>
                    <div class="pymais-newsletter__form">
                        <form action="{{ route('newsletter.store') }}" class="pymais-newsletter__form" method="post">
                            @csrf
                            <!-- Email input -->
                            <input type="email" name="email" placeholder="{{ __('Email address:') }}"
                                class="pymais-newsletter-input" />

                            <!-- Checkbox for terms and conditions -->
                            <div class="pymais-newsletter-checkbox">
                                <input type="checkbox" id="accept-terms" name="accept-terms" required>
                                <label for="accept-terms"><span
                                        class="small">{{ __('I accept the terms and conditions') }}</span></label>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="pymais-btn pymais-button-gradient">
                                {{ __('Submit') }}
                            </button>
                        </form>
                    </div>
                </div>
                <!-- Right Column: Logo -->
                <div class="col-lg-5 col-xl-5 col-12 d-flex justify-content-center align-items-center">
                    <div class="pymais-logo-container">
                        <img src="{{ asset('assets/frontend/pymais/images/favicon.svg') }}" alt="Logo"
                            class="pymais-newsletter-logo" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Newsletter Area -->

    <!-- Start Partnership -->
    <div class="container mt-60">
        <div class="ep-brand section-gap pt-0">
            <div class="row">
                <div class="col-12">
                    <div class="ep-section-head ep-section-head--style2">
                        <h3 id="partnership" class="ep-section__title"> {{ __('In partnership with') }} </h3>
                    </div>
                </div>
            </div>
            {{-- QUITAR ESTILO DE COLOR EN EL DIV --}}
            <div class="container ep-container">
                <div class="row">
                    <div class="col-md-2 offset-md-1">
                        <a href="https://www.microsoft.com/en-us/corporate-responsibility/techspark"
                            class="ep-brand__logo ep-brand__logo--style2">
                            <img src="{{ asset('assets/frontend/pymais/images/collab/Microsoft_Logo.png') }}" alt="brand-logo" />
                        </a>
                    </div>
                    <div class="col-md-2 offset-md-1">
                        <a href="https://funax.org/" class="ep-brand__logo ep-brand__logo--style2">
                            <img src="{{ asset('assets/frontend/pymais/images/collab/LOGO-FUNAX-ACTUALIZACION-HORIZONTAL-ESP-01.png') }}"
                                alt="brand-logo" />
                        </a>
                    </div>
                    <div class="col-md-2 offset-md-1">
                        <a href="https://tb-xl.com/" class="ep-brand__logo ep-brand__logo--style2">
                            <img src="{{ asset('assets/frontend/pymais/images/collab/THEBRIDGE_LOGO-01.png') }}" alt="brand-logo" />
                        </a>
                    </div>
                    <div class="col-md-2 offset-md-1">
                        <a href="https://t-hub.mx/" class="ep-brand__logo ep-brand__logo--style2">
                            <img src="{{ asset('assets/frontend/pymais/images/collab/logo-thub-01.png') }}" alt="brand-logo" />
                        </a>
                    </div>
                </div>
            </div>

        </div>


    </div>
    <!-- End Start Partnership -->
@endsection

@push('accordion-js')
    <!-- JavaScript for Accordion with Dynamic Height -->
    <script>
        document.querySelectorAll('.pymais-accordion-title').forEach(function(title) {
            title.addEventListener('click', function() {
                var card = this.parentElement.parentElement;
                var content = card.querySelector('.pymais-accordion-content');

                // Toggle active class on the card
                card.classList.toggle('active');

                if (card.classList.contains('active')) {
                    // Expande la altura del contenido basado en su altura real
                    content.style.maxHeight = content.scrollHeight + "px";
                } else {
                    // Colapsa el contenido
                    content.style.maxHeight = 0;
                }

                // Cierra otros acordeones
                document.querySelectorAll('.pymais-accordion-card').forEach(function(otherCard) {
                    if (otherCard !== card) {
                        otherCard.classList.remove('active');
                        otherCard.querySelector('.pymais-accordion-content').style.maxHeight = 0;
                    }
                });
            });
        });
    </script>

@endpush
<link rel="stylesheet" href="{{ asset('assets/frontend/pymais/plugins/css/particles.css') }}" />
<script src="{{ asset('assets/frontend/pymais/plugins/js/particles.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            particlesJS('particles-js', {
                "particles": {
                    "number": {
                        "value": 80,
                        "density": {
                            "enable": true,
                            "value_area": 800
                        }
                    },
                    "color": {
                        "value": "#3C6EE2"
                    },
                    "shape": {
                        "type": "circle",
                        "stroke": {
                            "width": 0,
                            "color": "#000000"
                        },
                        "polygon": {
                            "nb_sides": 5
                        },
                        "image": {
                            "src": "img/github.svg",
                            "width": 100,
                            "height": 100
                        }
                    },
                    "opacity": {
                        "value": 0.5,
                        "random": false,
                        "anim": {
                            "enable": false,
                            "speed": 1,
                            "opacity_min": 0.1,
                            "sync": false
                        }
                    },
                    "size": {
                        "value": 2,
                        "random": true,
                        "anim": {
                            "enable": false,
                            "speed": 40,
                            "size_min": 0.1,
                            "sync": false
                        }
                    },
                    "line_linked": {
                        "enable": true,
                        "distance": 150,
                        "color": "#5f8cde",
                        "opacity": 0.4,
                        "width": 1
                    },
                    "move": {
                        "enable": true,
                        "speed": 6,
                        "direction": "none",
                        "random": false,
                        "straight": false,
                        "out_mode": "out",
                        "attract": {
                            "enable": false,
                            "rotateX": 600,
                            "rotateY": 1200
                        }
                    }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onhover": {
                            "enable": false,
                            "mode": "repulse"
                        },
                        "onclick": {
                            "enable": false,
                            "mode": "push"
                        },
                        "resize": true
                    },
                    "modes": {
                        "grab": {
                            "distance": 400,
                            "line_linked": {
                                "opacity": 1
                            }
                        },
                        "bubble": {
                            "distance": 400,
                            "size": 40,
                            "duration": 2,
                            "opacity": 8,
                            "speed": 3
                        },
                        "repulse": {
                            "distance": 200
                        },
                        "push": {
                            "particles_nb": 4
                        },
                        "remove": {
                            "particles_nb": 2
                        }
                    }
                },
                "retina_detect": true,
                "config_demo": {
                    "hide_card": false,
                    "background_color": "#101010",
                    "background_image": "",
                    "background_position": "50% 50%",
                    "background_repeat": "no-repeat",
                    "background_size": "cover"
                }
            });
        });
    </script>
