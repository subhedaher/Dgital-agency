@extends('dashboard.parent')

@section('title', 'Skills')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="d-flex justify-content-between align-items-center">
            @include('dashboard.components.main-title', [
                'mainTitle' => 'Skills',
            ])
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#createSkill">
                Add Skill
            </button>
        </div>
        <!-- Hoverable Table rows -->
        @livewire('dashboard.skills.skills-component')
        <!--/ Hoverable Table Actions -->
        @livewire('dashboard.skills.create-skill-component')
        @livewire('dashboard.skills.update-skill-component')
        @livewire('dashboard.skills.delete-skill-component')
    </div>
@endsection

@section('scripts')
    <script>
        window.addEventListener('createSkill', event => {
            $('#createSkill').modal('toggle');
        })
        window.addEventListener('editSkill', event => {
            $('#updateSkill').modal('toggle');
        })
        window.addEventListener('dskill', event => {
            $('#deleteSkill').modal('toggle');
        })
    </script>
@endsection
