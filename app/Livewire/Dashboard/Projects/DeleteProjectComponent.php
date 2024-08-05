<?php

namespace App\Livewire\Dashboard\Projects;

use App\Models\Project;
use Livewire\Component;

class DeleteProjectComponent extends Component
{
    public $project;

    protected $listeners = ['deleteProject'];

    public function render()
    {
        return view('dashboard.projects.delete-project-component');
    }

    public function deleteProject($id)
    {
        $this->project = Project::find($id);
        $this->dispatch('dProject');
    }

    public function submit()
    {
        $this->project->delete();
        unlink('storage/' . $this->project->image);
        $this->reset('project');
        $this->dispatch('dProject');
        $this->dispatch('refresh')->to(ProjectComponent::class);
    }
}
