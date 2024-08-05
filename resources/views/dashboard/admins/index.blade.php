@extends('dashboard.parent')

@section('title', 'Admin')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        @include('dashboard.components.main-title', [
            'mainTitle' => 'My Profile',
        ])
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <h5 class="card-header">Edit Information</h5>
                    <div class="card-body">
                        @livewire('dashboard.admins.update-profile-admin-component')
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <h5 class="card-header">Edit Password</h5>
                    <div class="card-body">
                        @livewire('dashboard.admins.update-password-admin-component')
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
