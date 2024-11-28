@extends('layouts.website')

@section('title', 'About us')

@push('styles')
    <!-- Additional page specific style sheets in custom.css -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

@endpush

@section('content')
    <!--==============================
Breadcumb
===============================-->
    <div class="breadcumb-wrapper" data-bg-src="assets/images/blackfordsiteimages_Aboutusbanner.png">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">About Blackfordby College of Agriculture</h1>
            </div>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="{{route('website.index')}}">Home</a></li>
                    <li>About Us</li>
                </ul>
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

    <section class="vision-mission-layout4 space">
        <div class="container">
            <div class="row align-items-center">
                <!-- Text Content -->
                <div class="col-lg-6">
                    <div class="content-area">
                        <h6 class="subtitle text-theme">Our Purpose</h6>
                        <p class="text-light">
                            Blackfordby Agriculture College is committed to excellence in agricultural education and innovation. We inspire students to shape the future of farming through sustainable and modern practices.
                        </p>

                        <h3 class="subheading text-theme mt-4">Our Vision</h3>
                        <p class="text-light">
                            To be a regional leader in agricultural education, empowering future generations to transform farming for a thriving, food-secure world.
                        </p>

                        <h3 class="subheading text-theme mt-4">Our Mission</h3>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check-circle text-theme"></i> Provide cutting-edge knowledge and practical skills in farming and agribusiness.</li>
                            <li><i class="fas fa-check-circle text-theme"></i> Foster leadership, innovation, and sustainability in agriculture.</li>
                            <li><i class="fas fa-check-circle text-theme"></i> Create a supportive environment for growth and learning.</li>
                            <li><i class="fas fa-check-circle text-theme"></i> Contribute to Zimbabwe’s and the SADC region’s agricultural development.</li>
                        </ul>
                    </div>
                </div>

                <!-- Image Content -->
                <div class="col-lg-6 text-center">
                    <div class="image-area">
                        <img src="{{ asset('assets/images/blackfordsiteimages_PurposeVsnMsn.png') }}" alt="Vision and Mission" class="img-fluid shadow rounded">
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <!-- Additional page specific scripts in custom.js -->

@endpush