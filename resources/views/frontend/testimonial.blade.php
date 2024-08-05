@extends('frontend.parent')

@section('title', 'Testimonial')

@section('hero-start')
    @include('frontend.components.hero-strat', [
        'lable' => 'Testimonial',
    ])
@endsection

@section('content')
    <!-- Testimonial Start -->
    @livewire('frontend.components.testimonials-component')
    <!-- Testimonial End -->
@endsection
