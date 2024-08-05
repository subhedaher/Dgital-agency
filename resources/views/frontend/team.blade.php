@extends('frontend.parent')


@section('title', 'Team')
@section('hero-start')

    @include('frontend.components.hero-strat', [
        'lable' => 'Our Team',
    ])

@endsection

@section('content')
    <!-- Team Start -->
    @livewire('frontend.components.members-component')
    <!-- Team End -->
@endsection
