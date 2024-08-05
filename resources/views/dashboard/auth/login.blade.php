@extends('dashboard.auth.parent')

@section('title', 'Login')

@section('content')
    @if (session('success'))
        <div class="alert alert-primary" role="alert">{{ session('success') }}</div>
    @endif
    <h4 class="mb-2">Welcome to Sneat! 👋</h4>
    <p class="mb-4">Please sign-in to your account and start the adventure</p>

    @livewire('dashboard.auth.admin-login-component')
@endsection
