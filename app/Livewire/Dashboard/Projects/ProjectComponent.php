<?php

namespace App\Livewire\Dashboard\Projects;

use App\Models\Project;
use Livewire\Component;
use Livewire\WithPagination;

class ProjectComponent extends Component
{
    use WithPagination;

    public $search;

    protected $listeners = [
        'refresh' => '$refresh',
    ];

    public function render()
    {
        $projects = Project::with('category')->where('name', 'like', '%' . $this->search . '%')
            ->paginate(5);
        return view('dashboard.projects.project-component', ['projects' => $projects]);
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
