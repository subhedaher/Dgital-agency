<?php

namespace App\Livewire\Dashboard\Skills;

use App\Models\Skill;
use Livewire\Component;

class UpdateSkillComponent extends Component
{

    public $skill, $name, $progress;
    protected $listeners = ['updateSkill'];

    public function render()
    {
        return view('dashboard.skills.update-skill-component');
    }


    public function updateSkill($id)
    {
        $this->skill = Skill::find($id);
        $this->name = $this->skill->name;
        $this->progress = $this->skill->progress;
        $this->dispatch('editSkill');
        $this->resetValidation();
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
        $data = $this->validate();
        $this->skill->update($data);
        $this->dispatch('editSkill');
        $this->dispatch('refresh')->to(SkillsComponent::class);
    }
}
