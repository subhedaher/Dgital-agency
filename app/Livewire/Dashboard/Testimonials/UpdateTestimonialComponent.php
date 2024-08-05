<?php

namespace App\Livewire\Dashboard\Testimonials;

use App\Models\Testimonial;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateTestimonialComponent extends Component
{
    use WithFileUploads;

    public $testimonial, $name, $position, $description, $image;

    protected $listeners = ['updateTestimonial'];

    public function render()
    {
        return view('dashboard.testimonials.update-testimonial-component');
    }


    public function updateTestimonial($id)
    {
        $this->testimonial = Testimonial::find($id);
        $this->name = $this->testimonial->name;
        $this->position = $this->testimonial->position;
        $this->description = $this->testimonial->description;
        $this->dispatch('editTestimonial');
        $this->resetValidation();
    }


    public function rules()
    {
        return [
            'name' => 'required|string',
            'position' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable'
        ];
    }

    public function submit()
    {
        $data = $this->validate();
        if ($this->image) {
            unlink('storage/' . $this->testimonial->image);
            $imageName = time() . '.' . $this->image->getClientOriginalExtension();
            $this->image->storeAs('testimonials', $imageName, 'public');
            $data['image'] = 'testimonials/' . $imageName;
        } else {
            unset($data['image']);
        }
        $this->testimonial->update($data);
        $this->reset('image');
        $this->dispatch('editTestimonial');
        $this->dispatch('refresh')->to(TestimonialComponent::class);
    }
}
