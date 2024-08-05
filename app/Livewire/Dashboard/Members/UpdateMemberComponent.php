<?php

namespace App\Livewire\Dashboard\Members;

use App\Models\Member;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateMemberComponent extends Component
{
    use WithFileUploads;

    public $member, $name, $position, $facebook, $instagram, $twitter, $linkedin, $image;

    protected $listeners = ['updateMember'];

    public function render()
    {
        return view('dashboard.members.update-member-component');
    }


    public function updateMember($id)
    {
        $this->member = Member::find($id);
        $this->name = $this->member->name;
        $this->position = $this->member->position;
        $this->facebook = $this->member->facebook;
        $this->instagram = $this->member->instagram;
        $this->twitter = $this->member->twitter;
        $this->linkedin = $this->member->linkedin;
        $this->dispatch('editMember');
        $this->resetValidation();
    }

    public function rules()
    {
        return [
            'name' => 'required|string',
            'position' => 'required|string',
            'facebook' => 'nullable|url',
            'instagram' => 'nullable|url',
            'twitter' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'image' => 'nullable'
        ];
    }

    public function submit()
    {
        $data = $this->validate();
        if ($this->image) {
            unlink('storage/' . $this->member->image);
            $imageName = time() . '.' . $this->image->getClientOriginalExtension();
            $this->image->storeAs('members', $imageName, 'public');
            $data['image'] = 'members/' . $imageName;
        } else {
            unset($data['image']);
        }
        $this->member->update($data);
        $this->reset('image');
        $this->dispatch('editMember');
        $this->dispatch('refresh')->to(MemberComponent::class);
    }
}
