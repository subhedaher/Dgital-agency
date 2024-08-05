<?php

namespace App\Livewire\Frontend\Components;

use App\Models\Testimonial;
use Livewire\Component;

class TestimonialsComponent extends Component
{
    public function render()
    {
        return view('frontend.components.testimonials-component', [
            'testimonials' => Testimonial::all()
        ]);
    }
}