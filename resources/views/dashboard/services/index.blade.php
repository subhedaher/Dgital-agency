@extends('dashboard.parent')

@section('title', 'Services')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="d-flex justify-content-between align-items-center">
            @include('dashboard.components.main-title', [
                'mainTitle' => 'Services',
            ])
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#createService">
                Add Service
            </button>
        </div>
        <!-- Hoverable Table rows -->
        @livewire('dashboard.services.service-component')
        <!--/ Hoverable Table Actions -->
        @livewire('dashboard.services.create-service-component')
        @livewire('dashboard.services.update-service-component')
        @livewire('dashboard.services.delete-service-component')
    </div>
@endsection

@section('scripts')
    <script>
        window.addEventListener('createService', event => {
            $('#createService').modal('toggle');
        })
        window.addEventListener('editService', event => {
            $('#updateService').modal('toggle');
        })
        window.addEventListener('dService', event => {
            $('#deleteService').modal('toggle');
        })
    </script>
@endsection
