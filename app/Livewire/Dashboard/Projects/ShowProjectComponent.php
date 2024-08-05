<?php

namespace App\Livewire\Dashboard\Projects;

use App\Models\Project;
use Livewire\Component;

class ShowProjectComponent extends Component
{
    public $project, $name, $description, $category_id, $url, $image;

    protected $listeners = [
        'showProject'
    ];

    public function showProject($id)
    {
        $this->project = Project::find($id);
        $this->name = $this->project->name;
        $this->description = $this->project->description;
        $this->category_id = $this->project->category->name;
        $this->url = $this->project->url;
        $this->image = $this->project->image;
        $this->dispatch('sProject');
    }

    public function render()
    {
        return view('dashboard.projects.show-project-component');
    }
}