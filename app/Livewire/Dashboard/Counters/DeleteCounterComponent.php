<?php

namespace App\Livewire\Dashboard\Counters;

use App\Models\Counter;
use Livewire\Component;

class DeleteCounterComponent extends Component
{
    public $counter;

    protected $listeners = ['deleteCounter'];


    public function render()
    {
        return view('dashboard.counters.delete-counter-component');
    }

    public function deleteCounter($id)
    {
        $this->counter = Counter::find($id);
        $this->dispatch('dCounter');
    }

    public function submit()
    {
        $this->counter->delete();
        $this->reset('counter');
        $this->dispatch('dCounter');
        $this->dispatch('refresh')->to(CounterComponent::class);
    }
}
