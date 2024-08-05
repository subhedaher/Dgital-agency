@extends('frontend.parent')

@section('title', 'Home')

@section('hero-start')
    <div class="container-xxl bg-primary hero-header">
        <div class="container px-lg-5">
            <div class="row g-5 align-items-end">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="text-white mb-4 animated slideInDown">A Digital Agency Of Inteligents & Creative
                        People</h1>
                    <p class="text-white pb-3 animated slideInDown">Tempor rebum no at dolore lorem clita rebum
                        rebum ipsum rebum stet dolor sed justo kasd. Ut dolor sed magna dolor sea diam. Sit diam
                        sit justo amet ipsum vero ipsum clita lorem</p>
                    <a href="{{ route('front.about') }}"
                        class="btn btn-secondary py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Read
                        More</a>
                    <a href="{{ route('front.contact') }}"
                        class="btn btn-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contact Us</a>
                </div>
                <div class="col-lg-6 text-center text-lg-start">
                    <img class="img-fluid animated zoomIn" src="{{ asset('front-assets/img/hero.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <!-- Feature Start -->
    @livewire('frontend.components.services-component', [
        'count' => 3,
    ])
    <!-- Feature End -->


    <!-- About Start -->
    @livewire('frontend.components.skills-component')
    <!-- About End -->


    <!-- Facts Start -->
    @livewire('frontend.components.counters-component')
    <!-- Facts End -->

    <!-- Service Start -->
    @livewire('frontend.components.services-component', [
        'count' => 6,
    ])
    <!-- Service End -->

    <!-- Newsletter Start -->
    <div class="container-xxl bg-primary newsletter py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 px-lg-5">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <p class="section-title text-white justify-content-center"><span></span>Newsletter<span></span>
                    </p>
                    <h1 class="text-center text-white mb-4">Stay Always In Touch</h1>
                    <p class="text-white mb-4">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos
                        labore. Clita erat ipsum et lorem et sit sed stet lorem sit clita duo justo</p>
                    @livewire('frontend.components.subscribers-component')
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->


    <!-- Projects Start -->
    @livewire('frontend.components.projects-component')

    <!-- Projects End -->

    <!-- Testimonial Start -->
    @livewire('frontend.components.testimonials-component')
    <!-- Testimonial End -->


    <!-- Team Start -->
    @livewire('frontend.components.members-component')
    <!-- Team End -->
@endsection
