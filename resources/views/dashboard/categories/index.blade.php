@extends('dashboard.parent')

@section('title', 'Categories')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="d-flex justify-content-between align-items-center">
            @include('dashboard.components.main-title', [
                'mainTitle' => 'Categories',
            ])
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#createCategory">
                Add Category
            </button>
        </div>
        <!-- Hoverable Table rows -->
        @livewire('dashboard.categories.category-component')
        <!--/ Hoverable Table Actions -->
        @livewire('dashboard.categories.create-category-component')
        @livewire('dashboard.categories.update-category-component')
        @livewire('dashboard.categories.delete-category-component')
    </div>
@endsection

@section('scripts')
    <script>
        window.addEventListener('createCategory', event => {
            $('#createCategory').modal('toggle');
        })
        window.addEventListener('editCategory', event => {
            $('#updateCategory').modal('toggle');
        })
        window.addEventListener('dCategory', event => {
            $('#deleteCategory').modal('toggle');
        })
    </script>
@endsection
