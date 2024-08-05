<?php

namespace App\Livewire\Frontend\Components;

use App\Models\Counter;
use Livewire\Component;

class CountersComponent extends Component
{
    public function render()
    {
        return view('frontend.components.counters-component', [
            'counters' => Counter::take(4)->get()
        ]);
    }
}