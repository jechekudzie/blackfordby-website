@extends('layouts.website')

@section('title', 'Contact us')

@push('styles')
    <!-- Additional page specific style sheets in custom.css -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

@endpush

@section('content')
    <style>
        .grecaptcha-badge {
            visibility: hidden;
        }
    </style>

    <div class="breadcumb-wrapper">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Contact</h1>
            </div>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="{{route('website.index')}}">Home</a></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </div>

    <!--==============================
    Contact Area
    ===============================-->
    <section class="contact-layout1 space">
        <div class="container">
            <div class="row">
                <!-- Left Section -->
                <div class="col-xl-8 col-lg-7">
                    <div class="title-area wow fadeInUp wow-animated" data-wow-delay="0.3s">
                        <span class="sec-subtitle">CONTACT US</span>
                        <h2 class="sec-title">We're Here to Help You. Get in Touch with Our Team!</h2>
                    </div>
                    <div class="vs-comment-form">
                        <div id="respond" class="comment-respond">
                            <div class="form-title">
                                <p class="form-text">Please fill out the form below and one of our recruitment
                                    specialists will get back to you shortly.</p>
                            </div>
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Success!</strong> {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            @if (session('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Error!</strong> {{ session('error') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            <form action="{{ route('contact-send') }}" method="POST" class="form-style3">
                                @csrf
                                <div class="row">
                                    <div class="col-12 form-group">
                                        <textarea name="message" class="form-control" placeholder="Message" required></textarea>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input name="name" type="text" class="form-control" placeholder="Name" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input name="email" type="email" class="form-control" placeholder="Email Address" required>
                                    </div>

                                    <!-- Add reCAPTCHA -->
                                    <div class="col-12 form-group text-center">
                                        {!! NoCaptcha::display() !!}
                                    </div>

                                    <div class="col-12 form-group">
                                        <button class="vs-btn" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>

                            <!-- reCAPTCHA Scripts -->
                            {!! NoCaptcha::renderJs() !!}

                        </div>
                    </div>
                </div>

                <!-- Right Section -->
                <div class="col-xl-4 col-lg-5">
                    <div class="contact-left">
                        <div class="team-media">
                            <h2 class="contact-title">Contact Information</h2>
                            <div class="media-style1">
                                <div class="media-icon"><i style="color: black;" class="fas fa-phone-alt"></i></div>
                                <div class="media-body">
                                    <h3 class="media-title">Phone No:</h3>
                                    <p class="media-info">
                                        <a href="tel:+263772887370">+263 772 887 370</a><br/>
                                        <a href="tel:+263772887370">+263775 884 968</a>
                                        <br> Mon -
                                        Sat: 08.00 to 16.30</p>
                                </div>
                            </div>
                            <div class="media-style1">
                                <div class="media-icon"><i style="color: black;" class="fas fa-envelope"></i></div>
                                <div class="media-body">
                                    <h3 class="media-title">Email Address:</h3>
                                    <p class="media-info">
                                        <a href="mailto:info@blackfordbyagric.ac.zw">info@blackfordbyagric.ac.zw</a><br>
                                        <a href="mailto:admin@blackfordby.co.zw">admin@blackfordby.co.zw</a>
                                    </p>
                                </div>
                            </div>
                            <div class="media-style1">
                                <div class="media-icon"><i style="color: black;" class="fas fa-map-marker-alt"></i></div>
                                <div class="media-body">
                                    <h3 class="media-title">Location:</h3>
                                    <p class="media-info">Blackfordby College, Klein Kopjes Farm, Concession, Mazowe
                                        District, Zimbabwe</p>
                                </div>
                            </div>
                            <div class="media-style1 mt-4">
                                <a href="{{ route('website.gallery') }}" class="vs-btn"
                                   style="background-color: #28a745;">Explore Our Gallery</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Map Section -->
            <div class="map mt-5">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15225.374714102752!2d30.7912315!3d-17.4432572!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1930f127c0733627%3A0x99bbb7c90fffe613!2sBlackfordby%20College%20of%20Agriculture!5e0!3m2!1sen!2szw!4v1732678278238!5m2!1sen!2szw"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <!-- Additional page specific scripts in custom.js -->


@endpush
