<?php

namespace App\Livewire\Dashboard\Categories;

use App\Models\Category;
use Livewire\Component;

class CreateCategoryComponent extends Component
{
    public $name;

    public function render()
    {
        return view('dashboard.categories.create-category-component');
    }

    public function rules()
    {
        return [
            'name' => 'required|string',
        ];
    }

    public function submit()
    {
        $category = $this->validate();
        Category::create($category);
        $this->reset('name');
        $this->dispatch('createCategory');
        $this->dispatch('refresh')->to(CategoryComponent::class);
    }
}
