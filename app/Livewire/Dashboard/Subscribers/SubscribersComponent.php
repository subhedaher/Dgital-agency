<?php

namespace App\Livewire\Dashboard\Subscribers;

use App\Models\Subscriber;
use Livewire\Component;
use Livewire\WithPagination;

class SubscribersComponent extends Component
{
    use WithPagination;

    public $search;

    protected function queryString()
    {
        return [
            'search' => [
                'as' => 's',
                'except' => ''
            ],
        ];
    }

    protected $listeners = [
        'refresh' => '$refresh'
    ];

    public function render()
    {
        $subscribers = Subscriber::where('email', 'like', '%' . $this->search . '%')->paginate(10);
        return view('dashboard.subscribers.subscribers-component', ['subscribers' => $subscribers]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
