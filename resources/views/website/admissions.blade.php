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
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/images/BlackfordSiteImages_Admissions.jpg') }}">
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
    <section class="program-differences space">
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
