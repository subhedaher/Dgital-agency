@extends('dashboard.parent')

@section('title', 'Settings')

@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="d-flex justify-content-between align-items-center">
            @include('dashboard.components.main-title', [
                'mainTitle' => 'Settings',
            ])
        </div>
        <div class="card mb-4">
            <div class="card-body">
                @livewire('dashboard.settings.update-setting-component')
            </div>
        </div>
    </div>
    <!-- / Content -->
@endsection

@section('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            Livewire.hook('morph.updated', (el, component) => {
                const mySuccessAlert = document.querySelector('.my-success-alert');
                if (mySuccessAlert) {
                    setTimeout(() => {
                        mySuccessAlert.style.display = 'none';
                    }, 2000);
                }
            });
        });
    </script>
@endsection
