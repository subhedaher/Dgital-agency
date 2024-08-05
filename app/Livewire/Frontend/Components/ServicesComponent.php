<?php

namespace App\Livewire\Frontend\Components;

use App\Models\Service;
use Livewire\Component;

class ServicesComponent extends Component
{
    public $count;

    public function render()
    {
        return view('frontend.components.services-component', [
            'services' => Service::take($this->count)->get()
        ]);
    }
}