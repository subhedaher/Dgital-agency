<?php

namespace App\Livewire\Dashboard\Categories;

use App\Models\Category;
use Livewire\Component;

class DeleteCategoryComponent extends Component
{
    public $category;

    protected $listeners = ['deleteCategory'];

    public function render()
    {
        return view('dashboard.categories.delete-category-component');
    }

    public function deleteCategory($id)
    {
        $this->category = Category::find($id);
        $this->dispatch('dCategory');
    }

    public function submit()
    {
        $this->category->delete();
        $this->reset('category');
        $this->dispatch('dCategory');
        $this->dispatch('refresh')->to(CategoryComponent::class);
    }
}
