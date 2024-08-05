<?php

namespace App\Livewire\Dashboard\Members;

use App\Models\Member;
use Livewire\Component;

class ShowMemberComponent extends Component
{
    public $member, $name, $position, $facebook, $instagram, $twitter, $linkedin, $image;

    protected $listeners = [
        'showMember'
    ];

    public function showMember($id)
    {
        $this->member = Member::find($id);
        $this->name = $this->member->name;
        $this->position = $this->member->position;
        $this->facebook = $this->member->facebook;
        $this->instagram = $this->member->instagram;
        $this->twitter = $this->member->twitter;
        $this->linkedin = $this->member->linkedin;
        $this->image = $this->member->image;
        $this->dispatch('sMember');
    }

    public function render()
    {
        return view('dashboard.members.show-member-component');
    }
}