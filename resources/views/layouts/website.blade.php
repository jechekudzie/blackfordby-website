<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>@yield('title', 'Blackfordby College of Agriculture | Excellence in Agricultural Education')</title>

    <meta name="author" content="Blackfordby College of Agriculture">
    <meta name="description"
          content="Blackfordby College of Agriculture offers world-class training in agriculture, focusing on sustainable practices, agribusiness, and hands-on farming experience.">
    <meta name="keywords"
          content="Agriculture College, Blackfordby, Farming Education, Agricultural Training, Agribusiness, Sustainable Farming, Zimbabwe Agriculture">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    {{--<link rel="shortcut icon" href="{{ asset('assets/images/logo-removebg-preview.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/images/logo-removebg-preview.png') }}" type="image/x-icon">
--}}

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&family=DM+Sans:wght@400&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    @stack('styles')

</head>

<body>


<!--********************************
       Code Start From Here
******************************** -->
<!--==============================
Mobile Menu
==============================-->
<div class="vs-menu-wrapper">
    <div class="vs-menu-area text-center">
        <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href="{{ route('website.index') }}"><img src="{{ asset('assets/img/logo.png') }}" alt="Blackfordby Logo"></a>
        </div>
        <div class="vs-mobile-menu">
            <ul>
                <li><a href="{{ route('website.index') }}">Home</a></li>
                <li><a href="{{ route('website.about') }}">About Us</a></li>
                <li class="menu-item-has-children">
                    <a href="#">Programs</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('website.programs.fulltime') }}">Full-Time Program</a></li>
                        <li><a href="{{ route('website.programs.parttime') }}">Part-Time Program</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('website.admissions') }}">Admissions</a></li>
                <li><a href="{{ route('website.studentlife') }}">Student Life</a></li>
                <li><a href="{{ route('website.downloads') }}">Downloads</a></li>
                <li><a href="{{ route('website.contact') }}">Contact</a></li>
            </ul>
        </div>
    </div>
</div>


<!--==============================
Header Area
==============================-->
<header class="vs-header header-layout1">
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-between">
                <!-- Contact Information -->
                <div class="col-auto">
                    <div class="header-links">
                        <ul>
                            <li>
                                <i style="color:#FFD800FF" class="far fa-map-marker-alt">
                                </i>Klein Kopjes Farm, Concession, Mazowe District
                                <br/>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </li>

                            <li>
                                <i style="color:#FFD800FF" class="far fa-envelope"></i>
                                <a href="mailto:info@blackfordbyagric.ac.zw">info@blackfordbyagric.ac.zw</a><br/>
                                <i style="color:#FFD800FF" class="far fa-envelope"></i>
                                <a href="mailto:admin@blackfordby.co.zw">admin@blackfordby.co.zw</a>
                            </li>
                            <li>
                                <i style="color:#FFD800FF" class="far fa-phone-alt"></i>
                                <a href="tel:+263772887370">+263 772 887 370</a><br/>
                                <i style="color:#FFD800FF" class="far fa-phone-alt"></i>
                                <a href="tel:+263775884968">+263 775 884 968</a>
                            </li>
                            <li><i style="color:#FFD800FF" class="far fa-clock">
                                </i>Mon - Sat: 08.00 to 16.30
                                <br/>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Social Media Links -->
                <div class="col-auto">
                    <div class="social-style1">
                        <a href="https://www.facebook.com/BlackfordbyCollege" target="_blank"><i style="color:#FFD800FF"
                                class="fab fa-facebook-f"></i></a>
                        <a href="https://www.linkedin.com/in/BlackfordbyCollege" target="_blank"><i style="color:#FFD800FF"
                                class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.instagram.com/BlackfordbyCollege" target="_blank"><i style="color:#FFD800FF"
                                class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrapper">
        <div class="sticky-active">
            <div class="menu-area">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="{{ route('website.index') }}">
                                <!-- Default Logo -->
                                <img class="logo1" src="{{ asset('assets/img/logo.png') }}" alt="Blackfordby Logo">
                                <!-- Sticky Logo -->
                                <img class="logo2" src="{{ asset('assets/img/logo.png') }}"
                                     alt="Sticky Blackfordby Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <nav class="main-menu menu-style1 d-none d-lg-block">
                            <ul>
                                <li><a href="{{ route('website.index') }}">Home</a></li>
                                <li><a href="{{ route('website.about') }}">About Us</a></li>
                                <li class="menu-item-has-children">
                                    <a href="#">Programs</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('website.programs.fulltime') }}">Full-Time Program</a>
                                        </li>
                                        <li><a href="{{ route('website.programs.parttime') }}">Part-Time Program</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('website.admissions') }}">Admissions</a></li>
                                <li><a href="{{ route('website.studentlife') }}">Student Life</a></li>
                                <li><a href="{{ route('website.downloads') }}">Downloads</a></li>
                                <li><a href="{{ route('website.contact') }}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-auto d-lg-none">
                        <button class="vs-menu-toggle d-inline-block">
                            <i class="fal fa-bars"></i>
                        </button>
                    </div>
                    <div class="col-auto d-xl-block d-none">
                        <div class="header-icons">
                            <a href="#" class="link-btn"><i class="fal fa-user"></i>Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


@yield('content')

<!--==============================
        Footer Area
==============================-->
<footer style="background-color: #065d40;" class="footer-wrapper footer-layout1">
    <div class="footer-top">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <div class="media-style1">
                        <div class="media-icon"><img src="{{asset('assets/img/icon/icon-1-1.png')}}" alt="icon"></div>
                        <div class="media-body">
                            <h3 class="media-title">Contact Us:</h3>
                            <p class="media-info">
                                <a href="tel:+263772887370">+263 772 887 370</a><br>
                                <a href="tel:+263775884968">+263 775 884 968</a><br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="media-style1">
                        <div class="media-icon"><img src="{{asset('assets/img/icon/icon-1-2.png')}}" alt="icon"></div>
                        <div class="media-body">
                            <h3 class="media-title">Email Address:</h3>
                            <p class="media-info">
                                <a href="mailto:admin@blackfordby.co.zw">info@blackfordbyagric.ac.zw</a><br>
                                <a href="mailto:admin@admin@blackfordby.co.zw">admin@blackfordby.co.zw</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="media-style1">
                        <div class="media-icon"><img src="{{asset('assets/img/icon/icon-1-3.png')}}" alt="icon"></div>
                        <div class="media-body">
                            <h3 class="media-title">Location:</h3>
                            <p class="media-info">
                                Klein Kopjes Farm, Concession, Mazowe District, Zimbabwe
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="widget-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-md-6">
                    <div class="widget footer-widget">
                        <div class="vs-widget-about">
                            <div class="footer-logo">
                                <a href="{{ route('website.index') }}">
                                    <img src="{{ asset('assets/images/logo-removebg-preview.png') }}" alt="Blackfordby Logo"></a>
                            </div>
                            <p class="footer-text">
                                Blackfordby College of Agriculture has been a leader in agricultural education since
                                1974, offering hands-on training and world-class knowledge to aspiring agriculturalists.
                            </p>
                            <div class="footer-social">
                                <a href="https://facebook.com/blackfordby" target="_blank"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a href="https://twitter.com/blackfordby" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a href="https://instagram.com/blackfordby" target="_blank"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-3">
                    <div class="widget widget_categories footer-widget">
                        <h3 class="widget_title">Quick Links</h3>
                        <ul>
                            <li><a href="{{ route('website.about') }}">About Us</a></li>
                            <li><a href="{{ route('website.programs.fulltime') }}">Programs</a></li>
                            <li><a href="{{ route('website.admissions') }}">Admissions</a></li>
                            <li><a href="{{ route('website.contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-md-3">
                    <div class="widget widget_categories footer-widget">
                        <h3 class="widget_title">Resources</h3>
                        <ul>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Events</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Support Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="widget widget_newsletter footer-widget">
                        <h4 class="widget_title">Subscribe to Our Newsletter</h4>
                        <form class="newsletter-form" action="{{ route('website.subscribe') }}" method="post">
                            @csrf
                            <p class="form_text">Stay updated with the latest news and events at Blackfordby College of
                                Agriculture.</p>
                            <div class="search-btn">
                                <input class="form-control" type="email" name="email" placeholder="Enter your email..."
                                       required>
                                <button type="submit" class="icon-btn"><i class="fas fa-paper-plane"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <div class="row justify-content-xl-between justify-content-center align-items-center">
                <div class="col-auto">
                    <p class="copyright-text">
                        Copyright <i class="fal fa-copyright"></i> {{ date('Y') }} Blackfordby College of Agriculture.
                        All Rights Reserved.
                    </p>
                </div>
                <div class="col-auto">
                    <div class="copyright-menu">
                        <ul class="list-unstyled">
                            <li><a href="{{ route('website.sitemap') }}">Sitemap</a></li>
                            <li><a href="{{ route('website.contact') }}">Contact</a></li>
                            <li><a href="{{ route('website.privacy-policy') }}">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- Scroll To Top -->
<a href="#" class="scrollToTop scroll-btn"><i class="far fa-arrow-up"></i></a>

<!--********************************
        Code End  Here
******************************** -->

<!--==============================
    All Js File
============================== -->
<!-- Jquery -->
<script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
<!-- Slick Slider -->
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- Magnific Popup -->
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<!-- Isotope Filter -->
<script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
<!-- Main Js File -->
<script src="{{ asset('assets/js/main.js') }}"></script>


@stack('scripts')

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/67516d2b4304e3196aecab4f/1ieb14soq';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->


</body>

</html>
