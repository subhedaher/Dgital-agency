@extends('dashboard.parent')

@section('title', 'Projects')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="d-flex justify-content-between align-items-center">
            @include('dashboard.components.main-title', [
                'mainTitle' => 'Projects',
            ])
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#createProject">
                Add Project
            </button>
        </div>
        <!-- Hoverable Table rows -->
        @livewire('dashboard.projects.project-component')
        <!--/ Hoverable Table Actions -->
        @livewire('dashboard.projects.create-project-component')
        @livewire('dashboard.projects.update-project-component')
        @livewire('dashboard.projects.delete-project-component')
        @livewire('dashboard.projects.show-project-component')
    </div>
@endsection

@section('scripts')
    <script>
        window.addEventListener('createProject', event => {
            $('#createProject').modal('toggle');
        })
        window.addEventListener('editProject', event => {
            $('#updateProject').modal('toggle');
        })
        window.addEventListener('dProject', event => {
            $('#deleteProject').modal('toggle');
        })

        window.addEventListener('sProject', event => {
            $('#showProject').modal('toggle');
        })
    </script>
@endsection
