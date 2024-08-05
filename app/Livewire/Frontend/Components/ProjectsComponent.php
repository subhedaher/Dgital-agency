<?php

namespace App\Livewire\Frontend\Components;

use App\Models\Category;
use App\Models\Project;
use Livewire\Component;

class ProjectsComponent extends Component
{
    public function render()
    {
        return view('frontend.components.projects-component', [
            'projects' => Project::take(6)->get(),
            'categories' => Category::all()
        ]);
    }
}
