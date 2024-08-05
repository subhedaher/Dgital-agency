<?php

namespace App\Livewire\Dashboard\Skills;

use App\Models\Skill;
use Livewire\Component;

class DeleteSkillComponent extends Component
{
    public $skill;
    protected $listeners = ['deleteSkill'];

    public function render()
    {
        return view('dashboard.skills.delete-skill-component');
    }

    public function deleteSkill($id)
    {
        $this->skill = Skill::find($id);
        $this->dispatch('dskill');
    }

    public function submit()
    {
        $this->skill->delete();
        $this->reset('skill');
        $this->dispatch('dskill');
        $this->dispatch('refresh')->to(SkillsComponent::class);
    }
}
