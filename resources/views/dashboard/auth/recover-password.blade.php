@extends('dashboard.auth.parent')

@section('title', 'Recover Password')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger" role="alert">{{ $errors->all()[0] }}</div>
    @endif
    <h4 class="mb-2">Welcome to Sneat! 👋</h4>
    <p class="mb-4">Recover Password</p>
    <form action="{{ route('auth.changePassword') }}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="newPassword" class="form-label">New Password</label>
            <input type="password" class="form-control" id="newPassword" placeholder="New Password" name="newPassword"
                value="{{ old('newPassword') }}" aria-describedby="defaultFormControlHelp">
        </div>
        <div class="mb-3">
            <label for="newPassword_confirmation" class="form-label">New Password Confirmation</label>
            <input type="password" class="form-control" id="newPassword_confirmation" name="newPassword_confirmation"
                placeholder="New Password Confirmation" aria-describedby="defaultFormControlHelp"
                value="{{ old('newPassword_confirmation') }}">
        </div>
        <div class="mb-3">
            <button class="btn btn-primary d-grid w-100" type="submit">Send</button>
        </div>
        <input type="hidden" name="email" value="{{ $email }}"></input>
        <input type="hidden" name="token" value="{{ $token }}"></input>

    </form>
@endsection
