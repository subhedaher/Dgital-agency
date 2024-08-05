@extends('frontend.parent')

@section('title', 'Contact')

@section('hero-start')
    @include('frontend.components.hero-strat', [
        'lable' => 'Contact',
    ])
@endsection


@section('content')
    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container py-5 px-lg-5">
            <div class="wow fadeInUp" data-wow-delay="0.1s">
                <p class="section-title text-secondary justify-content-center"><span></span>Contact Us<span></span>
                </p>
                <h1 class="text-center mb-5">Contact For Any Query</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="wow fadeInUp" data-wow-delay="0.3s">
                        <p class="text-center mb-4">The contact form is currently inactive. Get a functional and
                            working contact form with Ajax & PHP in a few minutes. Just copy and paste the files,
                            add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download
                                Now</a>.</p>
                        @livewire('frontend.components.messages-component')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
