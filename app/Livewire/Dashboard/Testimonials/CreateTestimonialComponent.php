<?php

namespace App\Livewire\Dashboard\Testimonials;

use App\Models\Testimonial;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateTestimonialComponent extends Component
{
    use WithFileUploads;

    public  $name, $position, $description, $image;

    public function render()
    {
        return view('dashboard.testimonials.create-testimonial-component');
    }

    public function rules()
    {
        return [
            'name' => 'required|string',
            'position' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image'
        ];
    }

    public function submit()
    {
        $data = $this->validate();
        $imageName = time() . '.' . $this->image->getClientOriginalExtension();
        $this->image->storeAs('testimonials', $imageName, 'public');
        $data['image'] = 'testimonials/' . $imageName;
        Testimonial::create($data);
        $this->reset(['name', 'position', 'description', 'image']);
        $this->dispatch('createtesTistimonial');
        $this->dispatch('refresh')->to(TestimonialComponent::class);
    }
}