<?php

namespace App\Livewire\Dashboard\Categories;

use App\Models\Category;
use Livewire\Component;

class UpdateCategoryComponent extends Component
{
    public $category, $name;

    protected $listeners = ['updateCategory'];

    public function render()
    {
        return view('dashboard.categories.update-category-component');
    }


    public function updateCategory($id)
    {
        $this->category = Category::find($id);
        $this->name = $this->category->name;
        $this->dispatch('editCategory');
        $this->resetValidation();
    }

    public function rules()
    {
        return [
            'name' => 'required|string',
        ];
    }

    public function submit()
    {
        $data = $this->validate();
        $this->category->update($data);
        $this->dispatch('editCategory');
        $this->dispatch('refresh')->to(CategoryComponent::class);
    }
}
