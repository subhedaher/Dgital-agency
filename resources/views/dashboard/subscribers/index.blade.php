@extends('dashboard.parent')

@section('title', 'Subscribers')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="d-flex justify-content-between align-items-center">
            @include('dashboard.components.main-title', [
                'mainTitle' => 'Subscribers',
            ])
        </div>
        <!-- Hoverable Table rows -->
        @livewire('dashboard.subscribers.subscribers-component')
        @livewire('dashboard.subscribers.delete-subscriber-component')
        <!--/ Hoverable Table Actions -->
    </div>
@endsection

@section('scripts')
    <script>
        window.addEventListener('dSubscriber', event => {
            $('#deleteSubscriber').modal('toggle');
        })
    </script>
@endsection
