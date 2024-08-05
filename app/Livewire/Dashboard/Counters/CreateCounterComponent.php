<?php

namespace App\Livewire\Dashboard\Counters;

use App\Models\Counter;
use Livewire\Component;

class CreateCounterComponent extends Component
{
    public $name, $counter, $icon;

    public function render()
    {
        return view('dashboard.counters.create-counter-component');
    }

    public function rules()
    {
        return [
            'name' => 'required|string',
            'counter' => 'required|numeric',
            'icon' => 'required|string',
        ];
    }

    public function submit()
    {
        $counter = $this->validate();
        Counter::create($counter);
        $this->reset(['name', 'counter', 'icon']);
        $this->dispatch('createCounter');
        $this->dispatch('refresh')->to(CounterComponent::class);
    }
}