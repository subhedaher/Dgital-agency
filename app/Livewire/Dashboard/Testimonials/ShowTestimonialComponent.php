<?php

namespace App\Livewire\Dashboard\Testimonials;

use App\Models\Testimonial;
use Livewire\Component;

class ShowTestimonialComponent extends Component
{
    public $testimonial, $name, $position, $description, $image;

    protected $listeners = [
        'showTestimonial'
    ];

    public function showTestimonial($id)
    {
        $this->testimonial = Testimonial::find($id);
        $this->name = $this->testimonial->name;
        $this->position = $this->testimonial->position;
        $this->description = $this->testimonial->description;
        $this->name = $this->testimonial->name;
        $this->image = $this->testimonial->image;
        $this->dispatch('sTestimonial');
    }

    public function render()
    {
        return view('dashboard.testimonials.show-testimonial-component');
    }
}