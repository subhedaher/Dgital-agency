<?php

namespace App\Livewire\Dashboard\Skills;

use App\Models\Skill;
use Livewire\Component;
use Livewire\WithPagination;

class SkillsComponent extends Component
{
    use WithPagination;


    public $search;

    protected $listeners = [
        'refresh' => '$refresh',
    ];

    public function render()
    {
        $skills = Skill::where('name', 'like', '%' . $this->search . '%')
            ->orwhere('progress', 'like', '%' . $this->search . '%')->paginate(10);
        return view('dashboard.skills.skills-component', ['skills' => $skills]);
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
