@extends('dashboard.parent')

@section('title', 'Counters')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="d-flex justify-content-between align-items-center">
            @include('dashboard.components.main-title', [
                'mainTitle' => 'Counters',
            ])
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#createCounter">
                Add Counter
            </button>
        </div>
        <!-- Hoverable Table rows -->
        @livewire('dashboard.counters.counter-component')
        <!--/ Hoverable Table Actions -->
        @livewire('dashboard.counters.create-counter-component')
        @livewire('dashboard.counters.update-counter-component')
        @livewire('dashboard.counters.delete-counter-component')
    </div>
@endsection

@section('scripts')
    <script>
        window.addEventListener('createCounter', event => {
            $('#createCounter').modal('toggle');
        })
        window.addEventListener('editCounter', event => {
            $('#updateCounter').modal('toggle');
        })
        window.addEventListener('dCounter', event => {
            $('#deleteCounter').modal('toggle');
        })
    </script>
@endsection
