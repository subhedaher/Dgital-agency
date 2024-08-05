<?php

namespace App\Livewire\Dashboard\Services;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class ServiceComponent extends Component
{
    use WithPagination;

    public $search;

    protected $listeners = [
        'refresh' => '$refresh',
    ];

    public function render()
    {
        $services = Service::where('name', 'like', '%' . $this->search . '%')
            ->paginate(5);
        return view('dashboard.services.service-component', ['services' => $services]);
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
