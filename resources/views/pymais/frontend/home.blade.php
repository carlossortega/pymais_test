@extends('layouts.pymais')

@section('content')
    <!-- Start Hero Area -->
    <section class="ep-hero ep-hero--style2 hero-bg" style="background-color: #f2f2f2">
        <div class="container ep-container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-xl-6 col-12">
                    <div class="ep-hero__content ep-hero__content--style2">
                        <h1 class="ep-hero__title ep-split-text left"> {{ __('Welcome to PYMAIS') }}</h1>
                        <p class="ep-hero__text">
                            {{ __('An innovative training program to accelerate the growth of manufacturing industry supply chain businesses, to strengthen and professionalize them based on real demands of each region.') }}
                        </p>
                        <div class="">
                            <a href="#" class="pymais-button-gradient">{{ __('Apply now') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 offset-xl-1 col-xl-5 col-12 order-top">
                    <div class="ep-hero__widget ep-hero__widget-style2 position-relative">
                        <div class="ep-hero__img">
                            <img src="{{ asset('assets/frontend/pymais/images/welcome.jpg') }}" alt="hero-img" />
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
                        <h3 class="ep-section-head__color-title ep5-color ep1-border-color"> {{ __('What do we offer?') }}
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-12 col-12 text-center">
                    <div class="ep-section__content ep-section__content--style2">
                        <h3 class="ep-section__title ep-split-text left"> {{ __('About PYMAIS') }} </h3>
                        <p class="ep-section__text"> {{ __('Strengthen supply chain integration through six key areas:') }}</p>
                        <div class="pymais-section__widget">
                            <ul class="pymais-feature-list">
                                <li><i class="fi fi-ss-check-circle"></i>{{ __('Innovation') }}</li>
                                <li><i class="fi fi-ss-check-circle"></i>{{ __('Scalability And Growth') }}</li>
                                <li><i class="fi fi-ss-check-circle"></i>{{ __('Digital Transformation') }}</li>
                                <li><i class="fi fi-ss-check-circle"></i>{{ __('Modernization And Improvement Of Operations') }}</li>
                                <li><i class="fi fi-ss-check-circle"></i>{{ __('Financial Preparedness') }}</li>
                                <li><i class="fi fi-ss-check-circle"></i>{{ __('Make SMEs Visible Within Value Chains') }}</li>
                            </ul>
                        </div>
                        <div class="ep-section__btn">
                            <a href="#" class="ep-btn border-btn pymais-20">{{ __('Why This Program') }} <i class="fi fi-rs-arrow-small-right"></i></a>
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
                        <h3 class="ep-section-head__big-title ep-split-text left">{{ __('Profiles') }}
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single Card -->
                <div class="col-lg-3 col-xl-3 col-md-3 col-12">
                    <a href="#" class="ep-category__card wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                        <div class="ep-category__icon ep1-bg">
                            <img src="{{ asset('assets/frontend/pymais/images/category/category-1/1.svg') }}"
                                alt="category-icon" />
                        </div>
                        <div class="ep-category__info">
                            <h3>{{ __('SMEs') }}</h3>
                            <p>{{ __('The ideal participant is an SME with at least 2 years of successful operation, a scalable business model, interest in the industrial market, focus on innovation, and willingness to collaborate with mentors.') }}
                            </p>
                        </div>
                    </a>
                </div>
                <!-- Single Card -->
                <div class="col-lg-3 col-xl-3 col-md-3 col-12">
                    <a href="#" class="ep-category__card wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                        <div class="ep-category__icon ep2-bg">
                            <img src="{{ asset('assets/frontend/pymais/images/category/category-1/2.svg') }}"
                                alt="category-icon" />
                        </div>
                        <div class="ep-category__info">
                            <h3>{{ __('Mentor') }}</h3>
                            <p>{{ __('The ideal mentor has expertise in management, finance, or technology, understands the industrial sector, excels in virtual mentoring, and is committed to fostering SME growth through motivation and tangible results.') }}
                            </p>
                        </div>
                    </a>
                </div>
                <!-- Single Card -->
                <div class="col-lg-3 col-xl-3 col-md-3 col-12">
                    <a href="#" class="ep-category__card wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                        <div class="ep-category__icon ep4-bg">
                            <img src="{{ asset('assets/frontend/pymais/images/category/category-1/3.svg') }}"
                                alt="category-icon" />
                        </div>
                        <div class="ep-category__info">
                            <h3>{{ __('Corporate') }}</h3>
                            <p>{{ __('The ideal tractor company is a large corporation aiming to diversify its supply chain, invest in innovative SMEs, and has experience integrating new suppliers, with a focus on strategic collaboration and regional development.') }}
                            </p>
                        </div>
                    </a>
                </div>
                <!-- Single Card -->
                <div class="col-lg-3 col-xl-3 col-md-3 col-12">
                    <a href="#" class="ep-category__card wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                        <div class="ep-category__icon ep4-bg">
                            <img src="{{ asset('assets/frontend/pymais/images/category/category-1/7.svg') }}"
                                alt="category-icon" />
                        </div>
                        <div class="ep-category__info">
                            <h3>{{ __('Allies') }}</h3>
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
                        <h3 class="ep-section-head__color-title ep5-color ep1-border-color"> {{ __('The program') }} </h3>
                    </div>
                </div>
            </div>
            {{--  Business Enhancer  --}}
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="ep-section__content ep-section__content--style2">
                        <h3 class="ep-section__title ep-split-text left">1. {{ __('Business Enhancer') }} </h3>
                        <p class="ep-section__text">
                            {{ __('Helping SMEs accelerate AI and tech adoption along with other crucial business functions.') }}
                        </p>
                        <ul class="nav nav-tabs mt-5 ep-product-tab-list" id="productTabs" role="tablist">
                            <li class="nav-item">
                                <button class="nav-link active" id="description-tab" data-bs-toggle="tab"
                                    data-bs-target="#description" role="tab">1.1 {{ __('Primer Program') }}</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="additional-info-tab" data-bs-toggle="tab"
                                    data-bs-target="#additional-info" role="tab">1.2
                                    {{ __('Accelerating Program') }}</button>
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
                                            <a href="#" class="ep-btn border-btn">{{ __('See full curriculum') }}
                                                <i class="fi fi-rs-arrow-small-right"></i>
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
                            <img src="{{ asset('assets/frontend/pymais/images/home/home-01.jpg') }}" alt="about-img" />
                        </div>
                    </div>
                </div>
            </div>

            {{--  Market Access & Specialization  --}}
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="ep-section__img ep-section__img--style2 position-relative">
                        <div class="ep-section__img-main">
                            <img src="{{ asset('assets/frontend/pymais/images/home/home-02.jpg') }}" alt="about-img" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="ep-section__content ep-section__content--style2">
                        <h3 class="ep-section__title ep-split-text left">2. {{ __('Market Access & Specialization') }}
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
                                    data-bs-target="#visibility" role="tab">2.1
                                    {{ __('On-going Visibility') }}</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="specialization-tab" data-bs-toggle="tab"
                                    data-bs-target="#specialization" role="tab">2.2
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

                                        <div class="ep-section__btn">
                                            <a href="#" class="ep-btn border-btn">{{ __('About us') }} <i
                                                    class="fi fi-rs-arrow-small-right"></i>
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
                    <img src="{{ asset('assets/frontend/pymais/images/brand-name.svg') }}" alt="brand-name" />
                </div>
                <div class="ep-group-study__shape updown-ani">
                    <img src="{{ asset('assets/frontend/pymais/images/group-study/shape.svg') }}" alt="arrow-icon" />
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="ep-section-head ep-section-head--style2">
                            <h3 class="ep-section-head__color-title ep9-color ep9-border-color">{{ __('PYMAis') }}</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-xl-4 col-12">
                        <div class="ep-section__content ep-section__content--style2">
                            <h3 class="ep-section__title ep-split-text left">{{ __('How PYMAis works?') }} </h3>
                            <p class="ep-section__text">
                                {{ __('PyMAis Platform is a training program that accelerates the growth of SMEs in the manufacturing supply chain by helping them take advantage of nearshoring opportunities and improve the MX-US value chains. It focuses on strengthening and professionalizing these businesses, aligning them with the specific demands and needs of each region to capitalize on opportunities in emerging markets.') }}
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
                            <a href="{{ asset('assets/frontend/pymais/video/video-01.mp4') }}"
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
                    <h3 class="ep-section-head__color-title ep1-color ep1-border-color">{{ __('Courses') }}</h3>
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
                            ->take(4) // Limita la consulta a los 4 más recientes
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
                                <a href="{{ route('course.details', $row->slug) }}" class="ep-event__title">{{ ucfirst($row->title) }}</a>
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

    <!-- Start Partnership -->
    <div class="container">
        <div class="ep-brand section-gap pt-0">
            <div class="row">
                <div class="col-12">
                    <div class="ep-section-head ep-section-head--style2">
                        <h3 class="ep-section-head__color-title ep5-color ep1-border-color"> {{ __('In partnership with') }}
                        </h3>
                    </div>
                </div>
            </div>
            {{-- QUITAR ESTILO DE COLOR EN EL DIV --}}
            <div style="background-color: #3C6EE2; padding:15px" class="container ep-container">
                {{-- QUITAR ESTILO DE COLOR EN EL DIV --}}
                <div class="row">
                    <div class="col-12">
                        <div class="owl-carousel ep-brand__slider">
                            <!-- Single Brand -->
                            <a href="#" class="ep-brand__logo ep-brand__logo--style2">
                                <img src="{{ asset('assets/frontend/pymais/images/collab/microsoft.png') }}"
                                    alt="brand-logo" />
                            </a>
                            <!-- Single Brand -->
                            <a href="#" class="ep-brand__logo ep-brand__logo--style2">
                                <img src="{{ asset('assets/frontend/pymais/images/collab/decj_soft.png') }}"
                                    alt="brand-logo" />
                            </a>
                            <!-- Single Brand -->
                            <a href="#" class="ep-brand__logo ep-brand__logo--style2">
                                <img src="{{ asset('assets/frontend/pymais/images/collab/fechac_perse.png') }}"
                                    alt="brand-logo" />
                            </a>
                            <!-- Single Brand -->
                            <a href="#" class="ep-brand__logo ep-brand__logo--style2">
                                <img src="{{ asset('assets/frontend/pymais/images/collab/fix_nm.png') }}"
                                    alt="brand-logo" />
                            </a>
                            <!-- Single Brand -->
                            <a href="#" class="ep-brand__logo ep-brand__logo--style2">
                                <img src="{{ asset('assets/frontend/pymais/images/collab/fletes_mexico.png') }}"
                                    alt="brand-logo" />
                            </a>
                            <a href="#" class="ep-brand__logo ep-brand__logo--style2">
                                <img src="{{ asset('assets/frontend/pymais/images/collab/flo_networks.png') }}"
                                    alt="brand-logo" />
                            </a>
                            <a href="#" class="ep-brand__logo ep-brand__logo--style2">
                                <img src="{{ asset('assets/frontend/pymais/images/collab/high_desert.png') }}"
                                    alt="brand-logo" />
                            </a>
                            <a href="#" class="ep-brand__logo ep-brand__logo--style2">
                                <img src="{{ asset('assets/frontend/pymais/images/collab/hunt.png') }}"
                                    alt="brand-logo" />
                            </a>
                            <a href="#" class="ep-brand__logo ep-brand__logo--style2">
                                <img src="{{ asset('assets/frontend/pymais/images/collab/kelly_tomblin.png') }}"
                                    alt="brand-logo" />
                            </a>
                            <a href="#" class="ep-brand__logo ep-brand__logo--style2">
                                <img src="{{ asset('assets/frontend/pymais/images/collab/mt_net.png') }}"
                                    alt="brand-logo" />
                            </a>
                            <a href="#" class="ep-brand__logo ep-brand__logo--style2">
                                <img src="{{ asset('assets/frontend/pymais/images/collab/novamex.png') }}"
                                    alt="brand-logo" />
                            </a>
                            <a href="#" class="ep-brand__logo ep-brand__logo--style2">
                                <img src="{{ asset('assets/frontend/pymais/images/collab/pioneers_21.png') }}"
                                    alt="brand-logo" />
                            </a>
                            <a href="#" class="ep-brand__logo ep-brand__logo--style2">
                                <img src="{{ asset('assets/frontend/pymais/images/collab/sunflower_bank.png') }}"
                                    alt="brand-logo" />
                            </a>
                            <a href="#" class="ep-brand__logo ep-brand__logo--style2">
                                <img src="{{ asset('assets/frontend/pymais/images/collab/technology_hub.png') }}"
                                    alt="brand-logo" />
                            </a>
                            <a href="#" class="ep-brand__logo ep-brand__logo--style2">
                                <img src="{{ asset('assets/frontend/pymais/images/collab/tecma.png') }}"
                                    alt="brand-logo" />
                            </a>
                            <a href="#" class="ep-brand__logo ep-brand__logo--style2">
                                <img src="{{ asset('assets/frontend/pymais/images/collab/the_city_of_eptx.png') }}"
                                    alt="brand-logo" />
                            </a>
                            <a href="#" class="ep-brand__logo ep-brand__logo--style2">
                                <img src="{{ asset('assets/frontend/pymais/images/collab/the_electric_company.png') }}"
                                    alt="brand-logo" />
                            </a>
                            <a href="#" class="ep-brand__logo ep-brand__logo--style2">
                                <img src="{{ asset('assets/frontend/pymais/images/collab/weststar_bank.png') }}"
                                    alt="brand-logo" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- End Start Partnership -->
@endsection
