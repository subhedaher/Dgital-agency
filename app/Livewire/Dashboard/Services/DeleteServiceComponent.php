<?php

namespace App\Livewire\Dashboard\Services;

use App\Models\Service;
use Livewire\Component;

class DeleteServiceComponent extends Component
{
    public $service;

    protected $listeners = ['deleteService'];

    public function render()
    {
        return view('dashboard.services.delete-service-component');
    }

    public function deleteService($id)
    {
        $this->service = Service::find($id);
        $this->dispatch('dService');
    }

    public function submit()
    {
        $this->service->delete();
        $this->reset('service');
        $this->dispatch('dService');
        $this->dispatch('refresh')->to(ServiceComponent::class);
    }
}