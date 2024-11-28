@extends('layouts.website')

@section('title', 'Diploma in Agriculture (Full-Time Program)')

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
                <h1 class="breadcumb-title">Diploma in Agriculture (Full-Time Program)</h1>
            </div>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('website.index') }}">Home</a></li>
                    <li>Programs</li>
                    <li>Full-Time Program</li>
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
                        <h2 class="sec-title">Why Choose the Full-Time Program?</h2>
                        <p>
                            Immerse yourself in a two-year journey combining academic learning with hands-on training in agriculture. Our Diploma in Agriculture (Full-Time Program) equips students with comprehensive knowledge in key areas such as crop production, animal husbandry, farm mechanization, and agribusiness.
                        </p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check-circle text-theme"></i> One year of industrial attachment for practical experience.</li>
                            <li><i class="fas fa-check-circle text-theme"></i> Specialized training in both crop and livestock production.</li>
                            <li><i class="fas fa-check-circle text-theme"></i> Access to modern farm facilities and expert instructors.</li>
                        </ul>
                        <a href="#entry-requirements" class="vs-btn mt-4">View Entry Requirements</a>
                    </div>
                </div>
                <!-- Image Section -->
                <div class="col-lg-6 text-center">
                    <div class="image-area">
                        <img src="{{ asset('assets/images/blackfordsiteimages_Diplomafull.png') }}" alt="Full-Time Program" class="img-fluid shadow rounded">
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
                        <i class="fas fa-tractor text-theme"></i>
                        <h4>Farm Mechanization</h4>
                        <p>Hands-on training in modern irrigation systems, machinery management, and energy solutions.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-box">
                        <i class="fas fa-seedling text-theme"></i>
                        <h4>Crop Production</h4>
                        <p>Learn soil science, crop protection, and post-harvest handling for commercial agriculture.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-box">
                        <i class="fas fa-paw text-theme"></i>
                        <h4>Animal Production</h4>
                        <p>Study animal health, nutrition, and management for livestock like cattle, pigs, and poultry.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-box">
                        <i class="fas fa-chart-line text-theme"></i>
                        <h4>Agribusiness Management</h4>
                        <p>Gain skills in budgeting, marketing, and managing agricultural enterprises effectively.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-box">
                        <i class="fas fa-tools text-theme"></i>
                        <h4>Practical Training</h4>
                        <p>Apply classroom knowledge to real-world scenarios during a year-long industrial attachment.</p>
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
                        <li><i class="fas fa-check-circle text-theme"></i> Aged below 40 for the full-time program.</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <p style="color: white;">
                        Ready to start your journey? Our admissions team is here to assist you every step of the way. Click below to learn how to apply.
                    </p>
                    {{--<a href="{{ route('website.admissions') }}" class="vs-btn text-white">How to Apply</a>--}}
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
                            Blackfordby Agriculture College ensures a simple and straightforward application process, so you can focus on starting your journey with us.
                        </p>
                        <ul class="list-unstyled">
                            <li>
                                <i class="far fa-envelope text-theme"></i>
                                <strong>Online Applications:</strong> Request enrollment forms via email or WhatsApp, or submit them digitally.
                                <div class="mt-2">
                                    <a href="{{ route('website.online-application') }}" class="vs-btn mt-2">Start Your Application</a>
                                </div>
                            </li>
                            <li>
                                <i class="fas fa-building text-theme"></i>
                                <strong>In-Person Visits:</strong> Stop by our Principal’s Office at Blackfordby College for personalized guidance and assistance.
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
