@extends('layouts.website')

@section('title', 'Student Life')

@push('styles')
    <!-- Additional page-specific styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
@endpush

@section('content')
    <!--==============================
    Breadcumb
    ===============================-->
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/images/BlackfordSiteImages_Student_life.jpg') }}">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Student Life</h1>
            </div>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('website.index') }}">Home</a></li>
                    <li>Student Life</li>
                </ul>
            </div>
        </div>
    </div>

    <!--==============================
    Life Beyond the Classroom
    ===============================-->
    <section class="about-layout3 space">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="title-area mb-60 text-center wow fadeInUp wow-animated" data-wow-delay="0.3s">
                        <div class="title-img">
                            <img src="{{ asset('assets/img/icon/title-logo.png') }}" alt="title logo">
                        </div>
                        <span class="sec-subtitle">Explore Vibrant Campus Life</span>
                        <h2 class="sec-title">Creating a Nurturing Environment for <span>Growth, Leadership, and Community</span></h2>
                    </div>
                </div>
            </div>
            <div class="row gy-5 gx-5 align-items-center">
                <div class="col-lg-6">
                    <div class="about-content">
                        <p class="about-text">
                            At Blackfordby Agriculture College, our student life goes beyond academics. We foster a vibrant environment that promotes personal growth, leadership, and a sense of community. From comfortable accommodations to engaging extracurricular activities, students are provided with opportunities to explore, connect, and lead.
                        </p>
                        <div class="accordion-style2">
                            <div class="accordion" id="studentLifeAccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAccommodation" aria-expanded="false" aria-controls="collapseAccommodation">
                                            Comfortable Accommodation
                                        </button>
                                    </h2>
                                    <div id="collapseAccommodation" class="accordion-collapse collapse" data-bs-parent="#studentLifeAccordion">
                                        <div class="accordion-body">
                                            Enjoy single-room occupancy with modern amenities, providing a conducive environment for study and relaxation.
                                        </div>
                                    </div>
                                </div>
                              {{--  <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseActivities" aria-expanded="true" aria-controls="collapseActivities">
                                            Extracurricular Activities
                                        </button>
                                    </h2>
                                    <div id="collapseActivities" class="accordion-collapse collapse show" data-bs-parent="#studentLifeAccordion">
                                        <div class="accordion-body">
                                            Engage in sports, cultural events, creative arts, and other exciting activities that enhance your college experience.
                                        </div>
                                    </div>
                                </div>--}}
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLeadership" aria-expanded="false" aria-controls="collapseLeadership">
                                            Leadership Opportunities
                                        </button>
                                    </h2>
                                    <div id="collapseLeadership" class="accordion-collapse collapse" data-bs-parent="#studentLifeAccordion">
                                        <div class="accordion-body">
                                            Join the Student Representative Council (SRC) or participate in leadership workshops to build essential skills.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAlumni" aria-expanded="false" aria-controls="collapseAlumni">
                                            Alumni Network
                                        </button>
                                    </h2>
                                    <div id="collapseAlumni" class="accordion-collapse collapse" data-bs-parent="#studentLifeAccordion">
                                        <div class="accordion-body">
                                            Connect with our alumni network for mentorship and career opportunities in agriculture.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{ asset('assets/images/BlackfordSiteImages_HomeAway.jpg') }}" alt="Student Life" class="img-fluid">
                    </div>
                    <div class="img-content">
                        <h2 class="img-title h4">Discover Your Home Away From Home</h2>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--==============================
    Extracurricular Activities
    ===============================-->
    <section class="service-layout2 space">
        <div class="container">
            <div class="title-area text-center wow fadeInUp wow-animated" data-wow-delay="0.3s">
                <div class="title-img">
                    <img src="{{ asset('assets/img/icon/title-logo.png') }}" alt="title logo">
                </div>
                <span class="sec-subtitle">Enrich Your Experience</span>
                <h2 class="sec-title">Explore Leadership and Community Building</h2>
            </div>
            <div class="service-style2">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-4">
                        <div class="service-list">
                            <ul>
                                <li>
                                    <a href="#" class="vs-btn">Interactive Group Discussions<i class="fas fa-angle-double-right"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="vs-btn">In-Class Per Student Presentation<i class="fas fa-angle-double-right"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="vs-btn">Business Agricultural Projects<i class="fas fa-angle-double-right"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="vs-btn">Leadership Workshops<i class="fas fa-angle-double-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="service-inner">
                            <div class="service-icon">
                                <img src="{{ asset('assets/img/icon/service-icon-1-3.png') }}" alt="service-icon">
                            </div>
                            <div class="service-content">
                                <h2 class="service-title h4">Leadership Opportunities</h2>
                                <p class="service-text">
                                    Develop essential skills by leading campus initiatives and representing fellow students.
                                </p>
                                {{--<a class="link-btn" href="#">Learn More</a>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="service-img">
                            <img src="{{ asset('assets/images/BlackfordSiteImages_Leadership.jpg') }}" alt="Extracurricular Activities">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <!-- Additional page-specific scripts -->
@endpush
