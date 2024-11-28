@extends('layouts.website')

@section('title', 'Blackfordby College of Agriculture | Excellence in Agricultural Education')

@push('styles')
    <!-- Additional page specific style sheets in custom.css -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

@endpush

@section('content')
    <!--==============================
Hero Area
============================== -->

    <div class="hero-layout1">
        <div class="position-relative">
            <div class="vs-carousel hero-slider1" data-slide-show="1" data-autoplay="true" data-fade="true">
                <!-- Slide 1 -->
                <div class="hero-slide" data-bg-src="{{ asset('assets/images/blackfordsiteimages_HomeBanner1.png') }}">
                    <div class="container">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-8 mx-auto">
                                <div class="hero-content text-center">
                                    <h1 class="hero-title">Transforming Agriculture, One Student at a Time</h1>
                                    <p class="hero-text">Empowering future leaders in sustainable farming and
                                        agribusiness.</p>
                                    <a href="{{ route('website.programs') }}" class="vs-btn">Explore Programs</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="hero-slide" data-bg-src="{{ asset('assets/images/blackfordsiteimages_HomeBanner2.png') }}">
                    <div class="container">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-8 mx-auto">
                                <div class="hero-content text-center">
                                    <h1 class="hero-title">Join the Legacy of Excellence at Blackfordby</h1>
                                    <p class="hero-text">50 years of shaping agricultural professionals across the
                                        region.</p>
                                    <a href="{{ route('website.about') }}" class="vs-btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="hero-slide" data-bg-src="{{ asset('assets/images/blackfordsiteimages_HomeBanner3.png') }}">
                    <div class="container">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-8 mx-auto">
                                <div class="hero-content text-center">
                                    <h1 class="hero-title">Practical Skills for Real-World Success</h1>
                                    <p class="hero-text">From the classroom to the farm, we prepare you for the
                                        challenges of modern agriculture.</p>
                                    <a href="{{ route('website.admissions') }}" class="vs-btn">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <button class="icon-btn slick-prev" data-slick-prev=".hero-slider1"><i
                        class="fas fa-angle-double-left"></i></button>
                <button class="icon-btn slick-next" data-slick-next=".hero-slider1"><i
                        class="fas fa-angle-double-right"></i></button>
            </div>
        </div>
    </div>


    <section class="about-layout1 space">
        <div class="container">
            <div class="row gx-5 justify-content-end">
                <!-- Image Section -->
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{ asset('assets/images/blackfordsiteimages_Hopeinagric.png') }}" alt="Blackfordby Campus">
                    </div>
                </div>

                <!-- Content Section -->
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="title-area wow fadeInUp wow-animated" data-wow-delay="0.3s">
                            <span class="sec-subtitle">Welcome to Blackfordby Agriculture College</span>
                            <h2 class="sec-title">"Hope in Agriculture" – Shaping the Future of Farming</h2>
                        </div>
                        <p class="about-text">
                            For nearly five decades, Blackfordby Agriculture College has been the cornerstone of
                            agricultural education in Zimbabwe. Established in 1974, the college has grown from its
                            roots as a tobacco training institute to become a leading center for agricultural
                            excellence.
                            <br/>
                            <br/>

                            Located on the serene Klein Kopjes Farm in Concession, Mazowe District, our
                            institution is renowned for its innovative teaching, practical learning experiences, and a
                            strong commitment to nurturing future leaders in agriculture.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Additional Information -->
            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="about-style1 border1">
                        <div class="about-inner">
                            <div class="about-icon" style="display: flex; justify-content: center; align-items: center;">
                                <i style="color: #065d40" class="fa fa-chalkboard-teacher"></i>
                            </div>

                            <h3 class="about-title">Innovative Teaching</h3>
                            <p class="about-text">Our programs integrate practical training with academic excellence.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-style1 border1">
                        <div class="about-inner">
                            <div class="about-icon" style="display: flex; justify-content: center; align-items: center;">
                                <i style="color:#065d40;" class="fa fa-user-graduate"></i>
                            </div>
                            <h3 class="about-title">Future Leaders</h3>
                            <p class="about-text">We empower students to thrive in the evolving world of agriculture.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-style1 border1">
                        <div class="about-inner">
                            <div class="about-icon" style="display: flex; justify-content: center; align-items: center;">
                                <i style="color:#065d40;" class="fa fa-seedling"></i>
                            </div>
                            <h3 class="about-title">Sustainability Focus</h3>
                            <p class="about-text">We emphasize sustainable practices for long-term agricultural success.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="about-layout1 space">
        <div class="container">
            <div class="row gx-5 justify-content-end">
                <!-- Content Section -->
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="title-area wow fadeInUp wow-animated" data-wow-delay="0.3s">
                            <span class="sec-subtitle">Our Programs</span>
                            <h2 class="sec-title">Tailored Pathways to Agricultural Excellence</h2>
                        </div>
                        <p class="about-text">
                            At Blackfordby, we offer two distinct yet complementary diploma programs to cater to the diverse needs of our students:
                        </p>
                    </div>
                </div>
                <!-- Image Section -->
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{ asset('/assets/images/blackfordsiteimages_Tailered.png') }}" alt="Programs Overview">
                    </div>
                </div>


            </div>

            <!-- Program Details Section -->
            <div class="row mt-5">
                <!-- Full-Time Program -->
                <div class="col-lg-6">
                    <div class="about-style1 border1">
                        <div class="about-inner">
                            <div class="about-icon">
                                <i style="color: #065d40" class="fa fa-book"></i>
                            </div>
                            <h3 class="about-title">Diploma in Agriculture (Full-Time Program)</h3>
                            <p class="about-text">
                                Our immersive two-year program blends academic learning with hands-on training in:
                            </p>
                            <div class="list-style1">
                                <ul class="list-unstyled">
                                    <li>
                                        <span class="icon"><i class="far fa-check-circle"></i></span>
                                        Animal Production: Health, nutrition, and management of livestock.
                                    </li>
                                    <li>
                                        <span class="icon"><i class="far fa-check-circle"></i></span>
                                        Crop Production: Soil science, crop protection, and post-harvest handling.
                                    </li>
                                    <li>
                                        <span class="icon"><i class="far fa-check-circle"></i></span>
                                        Farm Mechanisation: Irrigation systems, machinery management, and energy solutions.
                                    </li>
                                    <li>
                                        <span class="icon"><i class="far fa-check-circle"></i></span>
                                        Agribusiness Management: Budgeting, marketing, and enterprise management.
                                    </li>
                                </ul>
                            </div>
                            <p>The program includes a year-long industrial attachment on successful commercial farms.</p>
                        </div>
                    </div>
                </div>

                <!-- Part-Time Program -->
                <div class="col-lg-6">
                    <div class="about-style1">
                        <div class="about-inner">
                            <div class="about-icon">
                                <i style="color:#FFD800FF" class="fa fa-laptop"></i>
                            </div>
                            <h3 class="about-title">Diploma in Agriculture (Part-Time Program)</h3>
                            <p class="about-text">
                                Designed for professionals, this program offers flexibility with:
                            </p>
                            <div class="list-style1">
                                <ul class="list-unstyled">
                                    <li>
                                        <span class="icon"><i class="far fa-check-circle"></i></span>
                                        Online Learning: Google Classroom and WhatsApp platforms.
                                    </li>
                                    <li>
                                        <span class="icon"><i class="far fa-check-circle"></i></span>
                                        Practical Sessions: Face-to-face training on Saturdays.
                                    </li>
                                    <li>
                                        <span class="icon"><i class="far fa-check-circle"></i></span>
                                        Balanced Scheduling: Academic and professional commitments aligned.
                                    </li>
                                </ul>
                            </div>
                            <p>An ideal choice for those looking to deepen their expertise without compromising their work or personal life.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-3 vs-carousel" data-arrows="false" data-dots="true" data-autoplay="true" data-slide-show="2">
                <div class="col-auto">
                    <a href="#"><img src="{{asset('assets/images/blackfordsiteimages_WhyfultimeProgram.png')}}" alt="Blog Image"></a>
                </div>
                <div class="col-auto">
                    <a href="#"><img src="{{asset('assets/images/blackfordsiteimages_WhyParttimeProgram.png')}}" alt="Blog Image"></a>
                </div>
            </div>
        </div>


    </section>

    <section class="admissions-layout1 space" data-bg-src="assets/img/bg/admissions-bg.jpg">
        <div class="container">
            <div class="row">
                <!-- Content Section -->
                <div class="col-xl-8 col-lg-12">
                    <div class="admissions-content">
                        <div class="title-area wow fadeInUp wow-animated" data-wow-delay="0.3s">
                            <span class="sec-subtitle">Admissions</span>
                            <h2 class="sec-title">Your Journey to Excellence Starts Here</h2>
                        </div>
                        <p class="admissions-text">
                            Blackfordby Agriculture College welcomes students passionate about making an impact in agriculture.
                            Our admissions process is straightforward to ensure you can focus on what matters – preparing for a successful career.
                        </p>
                        <div class="list-style1">
                            <h4 class="admissions-subtitle" style="color: white;">Entry Requirements</h4>
                            <ul class="list-unstyled">
                                <li>
                                    <span class="icon"><i class="far fa-check-circle"></i></span>
                                    At least five O-Level passes, including English, Math, and Science (Grade C or better).
                                </li>
                                <li>
                                    <span class="icon"><i class="far fa-check-circle"></i></span>
                                    Prior farming or agricultural work experience (mandatory for part-time applicants).
                                </li>
                                <li>
                                    <span class="icon"><i class="far fa-check-circle"></i></span>
                                    Aged below 40 for the full-time program.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Decorative Image Section -->
                <div class="col-xl-4 col-lg-12">
                    <div class="admissions-img">
                        <img src="{{asset('assets/images/blackfordsiteimages_yourJny.png')}}" alt="Admissions Overview">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="apply-layout1 space" data-bg-src="assets/img/bg/apply-bg.jpg">
        <div class="container">
            <div class="row">
                <!-- Content Section -->
                <div class="col-lg-8">
                    <div class="apply-content">
                        <div class="title-area wow fadeInUp wow-animated" data-wow-delay="0.3s">
                            <span class="sec-subtitle">How to Apply</span>
                            <h2 class="sec-title">We’ve Made Applying Easy and Accessible</h2>
                        </div>
                        <p class="apply-text">
                            Blackfordby Agriculture College ensures a simple and straightforward application process, so you can focus on starting your journey with us.
                        </p>
                        <div class="list-style1">
                            <ul class="list-unstyled">
                                <li>
                                    <span class="icon"><i class="far fa-envelope"></i></span>
                                    <strong>Online Applications:</strong> Request enrollment forms via email or WhatsApp, or submit them digitally.
                                    <div class="mt-2">
                                        <a href="{{ route('website.online-application') }}" class="vs-btn" style="color: white; text-transform: uppercase; background-color: #28a745; padding: 10px 20px; border-radius: 5px; display: inline-block;">
                                            Click Here to Start Your Online Application
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <span class="icon"><i class="fas fa-building"></i></span>
                                    <strong>In-Person Visits:</strong> Stop by our Principal’s Office at Blackfordby College for personalized guidance and assistance.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Decorative Image Section -->
                <div class="col-lg-4">
                    <div class="apply-img">
                        <img src="{{asset('assets/images/blackfordsiteimages_applying.png')}}" alt="How to Apply">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="provide-layout1 space" data-bg-src="{{asset('assets/images/blackfordsiteimages_Alegacy.png')}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-12">
                    <div class="provide-style1">
                        <div class="title-area wow fadeInUp wow-animated" data-wow-delay="0.3s">
                            <span class="sec-subtitle" style="color: white;">Why Choose Blackfordby?</span>
                            <h2 class="sec-title" style="color: white;">A Legacy of Excellence in Agricultural Education</h2>
                        </div>
                        <div class="row g-5">
                            <div class="col-lg-6">
                                <div class="provide-item">
                                    <div class="provide-icon">
                                        <i class="fas fa-award" style="color: white; font-size: 24px;"></i>
                                    </div>
                                    <div class="provide-content">
                                        <h2 class="title h6" style="color: white;">Heritage and Reputation</h2>
                                        <p class="text" style="color: white;">
                                            With nearly 50 years of experience, our college has a proven track record of producing graduates who excel in the agriculture sector.
                                        </p>
                                    </div>
                                </div>
                                <div class="provide-item">
                                    <div class="provide-icon">
                                        <i class="fas fa-globe-africa" style="color: white; font-size: 24px;"></i>
                                    </div>
                                    <div class="provide-content">
                                        <h2 class="title h6" style="color: white;">Regional Recognition</h2>
                                        <p class="text" style="color: white;">
                                            Accredited by the Ministry of Higher & Tertiary Education and recognized across the SADC region.
                                        </p>
                                    </div>
                                </div>
                                <div class="provide-item">
                                    <div class="provide-icon">
                                        <i class="fas fa-tools" style="color: white; font-size: 24px;"></i>
                                    </div>
                                    <div class="provide-content">
                                        <h2 class="title h6" style="color: white;">Practical Approach</h2>
                                        <p class="text" style="color: white;">
                                            Hands-on experiences in every course prepare students for the realities of modern farming.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="provide-item">
                                    <div class="provide-icon">
                                        <i class="fas fa-users" style="color: white; font-size: 24px;"></i>
                                    </div>
                                    <div class="provide-content">
                                        <h2 class="title h6" style="color: white;">Supportive Environment</h2>
                                        <p class="text" style="color: white;">
                                            Our close-knit community fosters collaboration and mutual growth among students and faculty.
                                        </p>
                                    </div>
                                </div>
                                <div class="provide-item">
                                    <div class="provide-icon">
                                        <i class="fas fa-seedling" style="color: white; font-size: 24px;"></i>
                                    </div>
                                    <div class="provide-content">
                                        <h2 class="title h6" style="color: white;">Focus on Sustainability</h2>
                                        <p class="text" style="color: white;">
                                            Emphasizing sustainable practices in every aspect of agricultural education.
                                        </p>
                                    </div>
                                </div>
                                <div class="provide-item">
                                    <div class="provide-icon">
                                        <i class="fas fa-graduation-cap" style="color: white; font-size: 24px;"></i>
                                    </div>
                                    <div class="provide-content">
                                        <h2 class="title h6" style="color: white;">Innovative Programs</h2>
                                        <p class="text" style="color: white;">
                                            Courses designed to equip students with skills for long-term agricultural success.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@push('scripts')
    <script>
        // Additional JavaScript specific to this page
    </script>
@endpush
