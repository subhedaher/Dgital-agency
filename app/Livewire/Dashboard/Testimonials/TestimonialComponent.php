<?php

namespace App\Livewire\Dashboard\Testimonials;

use App\Models\Testimonial;
use Livewire\Component;
use Livewire\WithPagination;

class TestimonialComponent extends Component
{
    use WithPagination;

    public $search;

    protected $listeners = [
        'refresh' => '$refresh',
    ];

    public function render()
    {
        $testimonials = Testimonial::where('name', 'like', '%' . $this->search . '%')
            ->where('position', 'like', '%' . $this->search . '%')
            ->paginate(5);
        return view('dashboard.testimonials.testimonial-component', ['testimonials' => $testimonials]);
    }


    public function updatingSearch()
    {
        $this->resetPage();
    }

    protected function queryString()
    {
        return [
            'search' => [
                'as' => 'q',
                'except' => ''
            ],
        ];
    }
}
