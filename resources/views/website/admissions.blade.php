@extends('layouts.website')

@section('title', 'Admissions')

@push('styles')
    <!-- Additional page-specific styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
@endpush

@section('content')
    <!--==============================
    Breadcumb
    ===============================-->
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/images/ADMISSIONS.jpg') }}">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Admissions</h1>
            </div>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('website.index') }}">Home</a></li>
                    <li>Admissions</li>
                </ul>
            </div>
        </div>
    </div>

    <!--==============================
    Admissions Overview
    ===============================-->
    <section class="admissions-overview space">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="content-area">
                        <h2 class="sec-title">Your Journey to Excellence Starts Here</h2>
                        <p>
                            Blackfordby Agriculture College welcomes students passionate about making an impact in agriculture. Our admissions process is straightforward, ensuring you can focus on preparing for a successful career.
                        </p>
                        <p>
                            Join a legacy of excellence, practical learning, and innovation that has shaped the agricultural professionals of tomorrow for nearly 50 years.
                        </p>
                       {{-- <a href="#entry-requirements" class="vs-btn mt-4">View Entry Requirements</a>--}}
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="image-area">
                        <img src="{{ asset('assets/images/BlackfordSiteImages_yourJny.jpg') }}" alt="Admissions" class="img-fluid shadow rounded">
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
                        <img src="{{ asset('/assets/images/BlackfordSiteImages_Diploma_full.jpg') }}" alt="Programs Overview">
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
                    <a href="#"><img src="{{asset('assets/images/BlackfordSiteImages_Why_fultimeProgram.jpg')}}" alt="Blog Image"></a>
                </div>
                <div class="col-auto">
                    <a href="#"><img src="{{asset('assets/images/BlackfordSiteImages_WhyParttimeProgram.jpg')}}" alt="Blog Image"></a>
                </div>
            </div>
        </div>


    </section>


    <!--==============================
    Entry Requirements
    ===============================-->
   {{-- <section id="entry-requirements" class="entry-requirements space bg-dark text-white">
        <div class="container">
            <h2 class="sec-title text-center text-light">Entry Requirements</h2>
            <div class="row mt-4">
                <div class="col-lg-6">
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check-circle text-theme"></i> At least five O-Level passes, including English, Math, and Science (Grade C or better).</li>
                        <li><i class="fas fa-check-circle text-theme"></i> Prior farming or agricultural work experience (mandatory for part-time applicants).</li>
                        <li><i class="fas fa-check-circle text-theme"></i> Aged below 40 for the full-time program.</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <p style="color: white;">
                        Both programs require the following attachments:
                    </p>
                </div>
            </div>
        </div>
    </section>
--}}
    <!--==============================
    Key Differences
    ===============================-->
  {{--  <section class="program-differences space">
        <div class="container">
            <h2 class="sec-title text-center">Key Differences Between Full-Time and Part-Time Programs</h2>
            <div class="row mt-4">
                <div class="col-lg-6">
                    <h4>Full-Time Program</h4>
                    <ul class="list-unstyled">
                        <li><i style="font-size: 20px;" class="fas fa-calendar text-theme"></i> Duration: Trimester-based structure.</li>
                        <li><i style="font-size: 20px;" class="fas fa-dollar-sign text-theme"></i> Fees: $20.00 (non-refundable) and General Purpose Levy of $350.00.</li>
                        <li><i style="font-size: 20px;" class="fas fa-chalkboard-teacher text-theme"></i> Designed for individuals available for on-campus learning.</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <h4>Part-Time Program</h4>
                    <ul class="list-unstyled">
                        <li><i style="font-size: 20px;" class="fas fa-calendar-alt text-theme"></i> Duration: Semester-based structure.</li>
                        <li><i style="font-size: 20px;" class="fas fa-dollar-sign text-theme"></i> Fees: $30.00 (non-refundable) and General Purpose Levy of $150.00.</li>
                        <li><i style="font-size: 20px;" class="fas fa-laptop text-theme"></i> Designed for working professionals with online classes and Saturday sessions.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
--}}
    <!--==============================
    How to Apply
    ===============================-->
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
                                        <a href="{{ asset('documents/Application Form GAD28 May 2025 Full Time Intake.pdf')}}" target="_blank" class="vs-btn" style="color: white; text-transform: uppercase; background-color: #28a745; padding: 10px 20px; border-radius: 5px; display: inline-block;">
                                            Click Here to Start Your Application
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
                        <img src="{{ asset('assets/images/BlackfordSiteImages_applying.jpg') }}" alt="How to Apply">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@push('scripts')
    <!-- Additional page-specific scripts -->
@endpush
