<?php

namespace App\Livewire\Frontend\Components;

use App\Models\Skill;
use Livewire\Component;

class SkillsComponent extends Component
{
    public function render()
    {
        return view('frontend.components.skills-component', [
            'skills' => Skill::take(3)->get()
        ]);
    }
}