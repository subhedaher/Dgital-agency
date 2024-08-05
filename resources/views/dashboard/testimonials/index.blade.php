@extends('dashboard.parent')

@section('title', 'Testimonials')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="d-flex justify-content-between align-items-center">
            @include('dashboard.components.main-title', [
                'mainTitle' => 'Testimonials',
            ])
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#createTestimonial">
                Add Testimonial
            </button>
        </div>
        <!-- Hoverable Table rows -->
        @livewire('dashboard.testimonials.testimonial-component')
        <!--/ Hoverable Table Actions -->
        @livewire('dashboard.testimonials.create-testimonial-component')
        @livewire('dashboard.testimonials.update-testimonial-component')
        @livewire('dashboard.testimonials.delete-testimonial-component')
        @livewire('dashboard.testimonials.show-testimonial-component')
    </div>
@endsection

@section('scripts')
    <script>
        window.addEventListener('createtesTistimonial', event => {
            $('#createTestimonial').modal('toggle');
        })
        window.addEventListener('editTestimonial', event => {
            $('#updateTestimonial').modal('toggle');
        })
        window.addEventListener('dTestimonial', event => {
            $('#deleteTestimonial').modal('toggle');
        })
        window.addEventListener('sTestimonial', event => {
            $('#showTestimonial').modal('toggle');
        })
    </script>
@endsection
