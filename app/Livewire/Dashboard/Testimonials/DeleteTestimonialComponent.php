<?php

namespace App\Livewire\Dashboard\Testimonials;

use App\Models\Testimonial;
use Livewire\Component;

class DeleteTestimonialComponent extends Component
{
    public $testimonial;

    protected $listeners = ['deleteTestimonial'];

    public function render()
    {
        return view('dashboard.testimonials.delete-testimonial-component');
    }


    public function deleteTestimonial($id)
    {
        $this->testimonial = Testimonial::find($id);
        $this->dispatch('dTestimonial');
    }

    public function submit()
    {
        $this->testimonial->delete();
        unlink('storage/' . $this->testimonial->image);
        $this->reset('testimonial');
        $this->dispatch('dTestimonial');
        $this->dispatch('refresh')->to(TestimonialComponent::class);
    }
}
