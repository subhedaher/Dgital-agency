@extends('frontend.parent')

@section('title', 'Project')

@section('hero-start')
    @include('frontend.components.hero-strat', [
        'lable' => 'Project',
    ])
@endsection

@section('content')
    <!-- Projects Start -->
    @livewire('frontend.components.projects-component')
    <!-- Projects End -->
@endsection
