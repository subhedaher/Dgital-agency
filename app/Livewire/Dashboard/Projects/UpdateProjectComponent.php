<?php

namespace App\Livewire\Dashboard\Projects;

use App\Models\Category;
use App\Models\Project;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateProjectComponent extends Component
{
    use WithFileUploads;

    public $project, $name, $description, $category_id, $url, $image;

    protected $listeners = ['updateProject'];


    public function render()
    {
        $categories = Category::all();
        return view('dashboard.projects.update-project-component', ['categories' => $categories]);
    }

    public function updateProject($id)
    {
        $this->project = Project::find($id);
        $this->name = $this->project->name;
        $this->description = $this->project->description;
        $this->category_id = $this->project->category_id;
        $this->url = $this->project->url;
        $this->dispatch('editProject');
        $this->resetValidation();
    }

    public function rules()
    {
        return [
            'name' => 'required|string',
            'description' => 'required|string',
            'category_id' => 'required|numeric',
            'url' => 'required|string',
            'image' => 'nullable'
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
        if ($this->image) {
            unlink('storage/' . $this->project->image);
            $imageName = time() . '.' . $this->image->getClientOriginalExtension();
            $this->image->storeAs('projects', $imageName, 'public');
            $data['image'] = 'projects/' . $imageName;
        } else {
            unset($data['image']);
        }
        $this->project->update($data);
        $this->reset('image');
        $this->dispatch('editProject');
        $this->dispatch('refresh')->to(ProjectComponent::class);
    }
}
