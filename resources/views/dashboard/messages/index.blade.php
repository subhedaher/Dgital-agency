@extends('dashboard.parent')

@section('title', 'Messages')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="d-flex justify-content-between align-items-center">
            @include('dashboard.components.main-title', [
                'mainTitle' => 'Messages',
            ])
        </div>
        <!-- Hoverable Table rows -->
        @livewire('dashboard.messages.message-component')
        <!--/ Hoverable Table Actions -->
        @livewire('dashboard.messages.delete-message-component')
        @livewire('dashboard.messages.show-message-component')
    </div>
@endsection

@section('scripts')
    <script>
        window.addEventListener('dMessage', event => {
            $('#deleteMessage').modal('toggle');
        })
        window.addEventListener('sMessage', event => {
            $('#showMessage').modal('toggle');
        })
    </script>
@endsection
