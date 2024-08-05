<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dgital | @yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('front-assets/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('front-assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front-assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front-assets/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('front-assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('front-assets/css/style.css') }}" rel="stylesheet">
    @yield('style')
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="{{ route('front.index') }}" class="navbar-brand p-0">
                    @livewire('frontend.components.settings-component')
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        @include('frontend.components.nav', [
                            'label' => 'Home',
                            'routeName' => 'front.index',
                        ])
                        @include('frontend.components.nav', [
                            'label' => 'About',
                            'routeName' => 'front.about',
                        ])
                        @include('frontend.components.nav', [
                            'label' => 'Service',
                            'routeName' => 'front.service',
                        ])
                        @include('frontend.components.nav', [
                            'label' => 'Project',
                            'routeName' => 'front.project',
                        ])
                        @include('frontend.components.nav-dropdown', [
                            'lable' => 'Pages',
                            'pages' => [
                                [
                                    'lable' => 'Our Team',
                                    'routeName' => 'front.page.team',
                                ],
                                [
                                    'lable' => 'Testimonial',
                                    'routeName' => 'front.page.testimonial',
                                ],
                            ],
                        ])
                        @include('frontend.components.nav', [
                            'label' => 'Contact',
                            'routeName' => 'front.contact',
                        ])
                    </div>
                    <a href="" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Get Started</a>
                </div>
            </nav>

            @yield('hero-start')
            <!-- Navbar & Hero End -->

            @yield('content')

            <!-- Footer Start -->
            <div class="container-fluid bg-primary text-light footer wow fadeIn" data-wow-delay="0.1s">
                <div class="container py-5 px-lg-5">
                    <div class="row g-5">
                        @livewire('frontend.components.address-component')
                        <div class="col-md-6 col-lg-3">
                            <p class="section-title text-white h5 mb-4">Quick Link<span></span></p>
                            <a class="btn btn-link" href="{{ route('front.about') }}">About Us</a>
                            <a class="btn btn-link" href="{{ route('front.contact') }}">Contact Us</a>
                            <a class="btn btn-link" href="">Privacy Policy</a>
                            <a class="btn btn-link" href="">Terms & Condition</a>
                            <a class="btn btn-link" href="">Career</a>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <p class="section-title text-white h5 mb-4">Gallery<span></span></p>
                            <div class="row g-2">
                                <div class="col-4">
                                    <img class="img-fluid" src="{{ asset('front-assets/img/portfolio-1.jpg') }}"
                                        alt="Image">
                                </div>
                                <div class="col-4">
                                    <img class="img-fluid" src="{{ asset('front-assets/img/portfolio-2.jpg') }}"
                                        alt="Image">
                                </div>
                                <div class="col-4">
                                    <img class="img-fluid" src="{{ asset('front-assets/img/portfolio-3.jpg') }}"
                                        alt="Image">
                                </div>
                                <div class="col-4">
                                    <img class="img-fluid" src="{{ asset('front-assets/img/portfolio-4.jpg') }}"
                                        alt="Image">
                                </div>
                                <div class="col-4">
                                    <img class="img-fluid" src="{{ asset('front-assets/img/portfolio-5.jpg') }}"
                                        alt="Image">
                                </div>
                                <div class="col-4">
                                    <img class="img-fluid" src="{{ asset('front-assets/img/portfolio-6.jpg') }}"
                                        alt="Image">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <p class="section-title text-white h5 mb-4">Newsletter<span></span></p>
                            <p>Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare
                                velit
                                non vulpu</p>
                            <div class="position-relative w-100 mt-3">
                                @livewire('frontend.components.subscribers-component')
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container px-lg-5">
                    <div class="copyright">
                        <div class="row">
                            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                                &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.

                                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                                Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML
                                    Codex</a><br><br>
                                Distributed By a <a class="border-bottom" href="https://themewagon.com"
                                    target="_blank">ThemeWagon</a>
                            </div>
                            <div class="col-md-6 text-center text-md-end">
                                <div class="footer-menu">
                                    <a href="">Home</a>
                                    <a href="">Cookies</a>
                                    <a href="">Help</a>
                                    <a href="">FQAs</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->


            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i
                    class="bi bi-arrow-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('front-assets/lib/wow/wow.min.js') }}"></script>
        <script src="{{ asset('front-assets/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('front-assets/lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('front-assets/lib/counterup/counterup.min.j') }}s"></script>
        <script src="{{ asset('front-assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('front-assets/lib/isotope/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('front-assets/lib/lightbox/js/lightbox.min.js') }}"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('front-assets/js/main.js') }}"></script>
        @yield('scripts')

</body>

</html>
