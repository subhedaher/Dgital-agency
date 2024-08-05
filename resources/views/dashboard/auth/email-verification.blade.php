@extends('dashboard.auth.parent')

@section('title', 'Email Verification')

@section('content')
    @if (session('message'))
        <div class="alert alert-primary" role="alert">{{ session('message') }}</div>
    @endif
    <h4 class="mb-2">Welcome to Sneat! 👋</h4>
    <p class="mb-4">Please verify email your send</p>
    <form action="{{ route('auth.emailVerification') }}" method="POST">
        @csrf
        <div class="mb-3">
            <button class="btn btn-primary d-grid w-100" type="submit">Verify</button>
        </div>
    </form>
@endsection
