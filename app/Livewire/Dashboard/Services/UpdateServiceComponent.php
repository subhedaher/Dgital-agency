<?php

namespace App\Livewire\Dashboard\Services;

use App\Models\Service;
use Livewire\Component;

class UpdateServiceComponent extends Component
{
    public $service, $name, $description, $icon;

    protected $listeners = ['updateService'];

    public function render()
    {
        return view('dashboard.services.update-service-component');
    }

    public function updateService($id)
    {
        $this->service = Service::find($id);
        $this->name = $this->service->name;
        $this->description = $this->service->description;
        $this->icon = $this->service->icon;
        $this->dispatch('editService');
        $this->resetValidation();
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
        $data = $this->validate();
        $this->service->update($data);
        $this->dispatch('editService');
        $this->dispatch('refresh')->to(ServiceComponent::class);
    }
}
