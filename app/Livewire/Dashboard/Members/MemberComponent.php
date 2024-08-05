<?php

namespace App\Livewire\Dashboard\Members;

use App\Models\Member;
use Livewire\Component;
use Livewire\WithPagination;

class MemberComponent extends Component
{
    use WithPagination;

    public $search;

    protected $listeners = [
        'refresh' => '$refresh',
    ];

    public function render()
    {
        $members = Member::where('name', 'like', '%' . $this->search . '%')
            ->where('position', 'like', '%' . $this->search . '%')
            ->paginate(5);
        return view('dashboard.members.member-component', ['members' => $members]);
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
