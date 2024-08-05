<?php

namespace App\Livewire\Dashboard\Counters;

use App\Models\Counter;
use Livewire\Component;

class UpdateCounterComponent extends Component
{
    public $counterModel, $name, $counter, $icon;

    protected $listeners = ['updateCounter'];

    public function render()
    {
        return view('dashboard.counters.update-counter-component');
    }

    public function updateCounter($id)
    {
        $this->counterModel = Counter::find($id);
        $this->name = $this->counterModel->name;
        $this->counter = $this->counterModel->counter;
        $this->icon = $this->counterModel->icon;
        $this->dispatch('editCounter');
        $this->resetValidation();
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
        $data = $this->validate();
        $this->counterModel->update($data);
        $this->dispatch('editCounter');
        $this->dispatch('refresh')->to(CounterComponent::class);
    }
}