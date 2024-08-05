<?php

namespace App\Livewire\Frontend\Components;

use App\Models\Member;
use Livewire\Component;

class MembersComponent extends Component
{
    public function render()
    {
        return view('frontend.components.members-component', [
            'members' => Member::take(3)->get()
        ]);
    }
}