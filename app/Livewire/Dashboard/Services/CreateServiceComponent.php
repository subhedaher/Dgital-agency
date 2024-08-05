<?php

namespace App\Livewire\Dashboard\Services;

use App\Models\Service;
use Livewire\Component;

class CreateServiceComponent extends Component
{
    public $name, $description, $icon;

    public function render()
    {
        return view('dashboard.services.create-service-component');
    }

    public function rules()
    {
        return [
            'name' => 'required|string',
            'description' => 'required|string',
            'icon' => 'required|string',
        ];
    }

    public function submit()
    {
        $counter = $this->validate();
        Service::create($counter);
        $this->reset(['name', 'description', 'icon']);
        $this->dispatch('createService');
        $this->dispatch('refresh')->to(ServiceComponent::class);
    }
}
