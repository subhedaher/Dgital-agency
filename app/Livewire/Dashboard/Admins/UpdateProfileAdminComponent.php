<?php

namespace App\Livewire\Dashboard\Admins;

use Livewire\Component;

class UpdateProfileAdminComponent extends Component
{
    public $admin, $name, $email;

    public function render()
    {
        return view('dashboard.admins.update-profile-admin-component', []);
    }

    public function mount()
    {
        $this->admin = auth('admin')->user();
        $this->name = $this->admin->name;
        $this->email = $this->admin->email;
    }

    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email'
        ];
    }

    public function submit()
    {
        $data = $this->validate();
        $this->admin->update($data);
    }
}
