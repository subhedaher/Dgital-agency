@extends('frontend.parent')

@section('title', 'About Us')

@section('hero-start')
    @include('frontend.components.hero-strat', [
        'lable' => 'About Us',
    ])
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

    <!-- Team Start -->
    @livewire('frontend.components.members-component')

    <!-- Team End -->
@endsection
