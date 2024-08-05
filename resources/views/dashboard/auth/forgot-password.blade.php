@extends('dashboard.auth.parent')

@section('title', 'Forgot Password')

@section('content')
    @if (session('success'))
        <div class="alert alert-primary" role="alert">{{ session('success') }}</div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger" role="alert">{{ $errors->all()[0] }}</div>
    @endif
    <h4 class="mb-2">Welcome to Sneat! 👋</h4>
    <p class="mb-4">Please verify email your send</p>
    <form action="{{ route('auth.requestResetPassword') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Email"
                value="{{ old('email') }}">
        </div>
        <div class="mb-3">
            <button class="btn btn-primary d-grid w-100" type="submit">Send</button>
        </div>
    </form>
@endsection
