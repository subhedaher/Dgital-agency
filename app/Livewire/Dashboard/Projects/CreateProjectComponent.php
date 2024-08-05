<?php

namespace App\Livewire\Dashboard\Projects;

use App\Models\Category;
use App\Models\Project;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateProjectComponent extends Component
{
    use WithFileUploads;

    public $name, $description, $category_id, $url, $image;

    public function render()
    {
        $categories = Category::all();
        return view('dashboard.projects.create-project-component', [
            'categories' => $categories
        ]);
    }

    public function rules()
    {
        return [
            'name' => 'required|string',
            'description' => 'required|string',
            'category_id' => 'required|numeric',
            'url' => 'required|string',
            'image' => 'required|image'
        ];
    }

    public function messages()
    {
        return [
            'category_id.required' => 'The category field is required.',
        ];
    }

    public function submit()
    {
        $data = $this->validate();
        $imageName = time() . '.' . $this->image->getClientOriginalExtension();
        $this->image->storeAs('projects', $imageName, 'public');
        $data['image'] = 'projects/' . $imageName;
        Project::create($data);
        $this->reset(['name', 'description', 'category_id', 'url', 'image']);
        $this->dispatch('createProject');
        $this->dispatch('refresh')->to(ProjectComponent::class);
    }
}
