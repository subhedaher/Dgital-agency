<?php

namespace App\Livewire\Dashboard\Members;

use App\Models\Member;
use Livewire\Component;

class DeleteMemberComponent extends Component
{
    public $member;

    protected $listeners = ['deleteMember'];

    public function render()
    {
        return view('dashboard.members.delete-member-component');
    }

    public function deleteMember($id)
    {
        $this->member = Member::find($id);
        $this->dispatch('dMember');
    }

    public function submit()
    {
        $this->member->delete();
        unlink('storage/' . $this->member->image);
        $this->reset('member');
        $this->dispatch('dMember');
        $this->dispatch('refresh')->to(MemberComponent::class);
    }
}
