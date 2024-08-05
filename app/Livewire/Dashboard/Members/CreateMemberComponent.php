<?php

namespace App\Livewire\Dashboard\Members;

use App\Models\Member;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateMemberComponent extends Component
{
    use WithFileUploads;

    public  $name, $position, $facebook, $instagram, $twitter, $linkedin, $image;


    public function render()
    {
        return view('dashboard.members.create-member-component');
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
            'image' => 'required|image'
        ];
    }

    public function submit()
    {
        $data = $this->validate();
        $imageName = time() . '.' . $this->image->getClientOriginalExtension();
        $this->image->storeAs('members', $imageName, 'public');
        $data['image'] = 'members/' . $imageName;
        Member::create($data);
        $this->reset(['name', 'position', 'facebook', 'instagram', 'twitter', 'linkedin', 'image']);
        $this->dispatch('createMember');
        $this->dispatch('refresh')->to(MemberComponent::class);
    }
}
