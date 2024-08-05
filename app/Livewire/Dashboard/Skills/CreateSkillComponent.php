<?php

namespace App\Livewire\Dashboard\Skills;

use App\Models\Skill;
use Livewire\Component;

class CreateSkillComponent extends Component
{
    public $name;
    public $progress;

    public function render()
    {
        return view('dashboard.skills.create-skill-component');
    }

    public function rules()
    {
        return [
            'name' => 'required|string',
            'progress' => 'required|numeric|min:1|max:100',
        ];
    }

    public function submit()
    {
        $skill = $this->validate();
        Skill::create($skill);
        $this->reset('name', 'progress');
        $this->dispatch('createSkill');
        $this->dispatch('refresh')->to(SkillsComponent::class);
    }
}
