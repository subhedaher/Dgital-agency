@extends('dashboard.parent')

@section('title', 'Members')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="d-flex justify-content-between align-items-center">
            @include('dashboard.components.main-title', [
                'mainTitle' => 'Members',
            ])
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#createMember">
                Add Member
            </button>
        </div>
        <!-- Hoverable Table rows -->
        @livewire('dashboard.members.member-component')
        <!--/ Hoverable Table Actions -->
        @livewire('dashboard.members.create-member-component')
        @livewire('dashboard.members.update-member-component')
        @livewire('dashboard.members.delete-member-component')
        @livewire('dashboard.members.show-member-component')
    </div>
@endsection

@section('scripts')
    <script>
        window.addEventListener('createMember', event => {
            $('#createMember').modal('toggle');
        })
        window.addEventListener('editMember', event => {
            $('#updateMember').modal('toggle');
        })
        window.addEventListener('dMember', event => {
            $('#deleteMember').modal('toggle');
        })
        window.addEventListener('sMember', event => {
            $('#showMember').modal('toggle');
        })
    </script>
@endsection
