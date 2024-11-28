@extends('layouts.website')

@section('title', 'Diploma in Agriculture (Part-Time Program)')

@push('styles')
    <!-- Additional page-specific styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
@endpush

@section('content')
    <!--==============================
    Breadcumb
    ===============================-->
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/images/blackfordsiteimages_ServicesBanner.png') }}">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Diploma in Agriculture (Part-Time Program)</h1>
            </div>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('website.index') }}">Home</a></li>
                    <li>Programs</li>
                    <li>Part-Time Program</li>
                </ul>
            </div>
        </div>
    </div>

    <!--==============================
    Program Overview
    ===============================-->
    <section class="program-overview space">
        <div class="container">
            <div class="row align-items-center">
                <!-- Content Section -->
                <div class="col-lg-6">
                    <div class="content-area">
                        <h2 class="sec-title">Why Choose the Part-Time Program?</h2>
                        <p>
                            Our Diploma in Agriculture (Part-Time Program) is designed to accommodate working professionals and individuals seeking flexibility. With a balanced structure of online learning and practical sessions, this program enables students to advance their careers without compromising other commitments.
                        </p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check-circle text-theme"></i> Flexible scheduling with online and weekend practical sessions.</li>
                            <li><i class="fas fa-check-circle text-theme"></i> Industry-relevant curriculum tailored for immediate application.</li>
                            <li><i class="fas fa-check-circle text-theme"></i> Accessible learning via Google Classroom, WhatsApp, and face-to-face sessions.</li>
                        </ul>
                        <a href="#entry-requirements" class="vs-btn mt-4">View Entry Requirements</a>
                    </div>
                </div>
                <!-- Image Section -->
                <div class="col-lg-6 text-center">
                    <div class="image-area">
                        <img src="{{ asset('assets/images/blackfordsiteimages_Diplomashort.png') }}" alt="Part-Time Program" class="img-fluid shadow rounded">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==============================
    Key Program Features
    ===============================-->
    <section class="program-features space bg-light">
        <div class="container">
            <h2 class="sec-title text-center">Key Program Features</h2>
            <div class="row g-4 mt-4">
                <div class="col-md-6 col-lg-4">
                    <div class="feature-box">
                        <i class="fas fa-calendar-alt text-theme"></i>
                        <h4>Flexible Scheduling</h4>
                        <p>Weekend practical sessions and online classes fit into your busy schedule.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-box">
                        <i class="fas fa-laptop text-theme"></i>
                        <h4>Convenient Online Learning</h4>
                        <p>Leverage platforms like Google Classroom and WhatsApp for easy access to study materials.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-box">
                        <i class="fas fa-user-check text-theme"></i>
                        <h4>Industry-Focused Curriculum</h4>
                        <p>Practical and theoretical knowledge designed for real-world applications in agriculture.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-box">
                        <i class="fas fa-user-graduate text-theme"></i>
                        <h4>Career Advancement</h4>
                        <p>Enhance your expertise and grow your career in the agricultural sector while working.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==============================
    Entry Requirements
    ===============================-->
    <section id="entry-requirements" class="entry-requirements space bg-dark text-white">
        <div class="container">
            <h2 class="sec-title text-center text-light">Entry Requirements</h2>
            <div class="row mt-4">
                <div class="col-lg-6">
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check-circle text-theme"></i> At least five O-Level passes, including English, Math, and Science (Grade C or better).</li>
                        <li><i class="fas fa-check-circle text-theme"></i> Prior farming or agricultural work experience (mandatory).</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <p style="color: white;">
                        Start your part-time learning journey with us. Reach out to our admissions team for personalized assistance or click below to apply.
                    </p>
                   {{-- <a href="{{ route('website.admissions') }}" class="vs-btn text-white">How to Apply</a>--}}
                </div>
            </div>
        </div>
    </section>

    <!--==============================
    How to Apply Section
    ===============================-->
    <section class="apply-layout1 space" data-bg-src="{{ asset('assets/img/bg/apply-bg.jpg') }}">
        <div class="container">
            <div class="row">
                <!-- Content Section -->
                <div class="col-lg-8">
                    <div class="apply-content">
                        <div class="title-area">
                            <span class="sec-subtitle">How to Apply</span>
                            <h2 class="sec-title">We’ve Made Applying Easy and Accessible</h2>
                        </div>
                        <p class="apply-text">
                            Blackfordby Agriculture College ensures a simple and straightforward application process for the Part-Time Program. You can apply online or visit our campus for more assistance.
                        </p>
                        <ul class="list-unstyled">
                            <li>
                                <i class="far fa-envelope text-theme"></i>
                                <strong>Online Applications:</strong> Request enrollment forms via email or WhatsApp and submit them digitally.
                                <div class="mt-2">
                                    <a href="{{ route('website.online-application') }}" class="vs-btn mt-2">Start Your Application</a>
                                </div>
                            </li>
                            <li>
                                <i class="fas fa-building text-theme"></i>
                                <strong>In-Person Visits:</strong> Stop by our Principal’s Office at Blackfordby College for personalized guidance and support.
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Image Section -->
                <div class="col-lg-4">
                    <div class="apply-img">
                        <img src="{{ asset('assets/images/blackfordsiteimages_applying.png') }}" alt="How to Apply" class="img-fluid rounded shadow">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <!-- Additional page-specific scripts -->
@endpush
