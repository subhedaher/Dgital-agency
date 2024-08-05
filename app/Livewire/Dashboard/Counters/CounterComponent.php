<?php

namespace App\Livewire\Dashboard\Counters;

use App\Models\Counter;
use Livewire\Component;
use Livewire\WithPagination;

class CounterComponent extends Component
{
    use WithPagination;

    public $search;

    protected $listeners = [
        'refresh' => '$refresh',
    ];

    public function render()
    {
        $counters = Counter::where('name', 'like', '%' . $this->search . '%')
            ->paginate(5);
        return view('dashboard.counters.counter-component', ['counters' => $counters]);
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