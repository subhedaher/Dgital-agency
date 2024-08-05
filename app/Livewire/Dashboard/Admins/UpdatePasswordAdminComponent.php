<?php

namespace App\Livewire\Dashboard\Admins;

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Livewire\Component;

class UpdatePasswordAdminComponent extends Component
{
    public $oldPassword, $newPassword, $newPassword_confirmation;

    public function render()
    {
        return view('dashboard.admins.update-password-admin-component');
    }

    public function rules()
    {
        return [
            'oldPassword' => 'required|string|current_password:admin',
            'newPassword' => ['required', 'string', Password::min(8)->letters()->numbers()->mixedCase()->symbols()->uncompromised(), 'confirmed'],
        ];
    }

    public function submit()
    {
        $this->validate();
        $admin = auth('admin')->user();
        $admin->forceFill(['password' => Hash::make($this->newPassword)])->save();
        $this->reset(['oldPassword', 'newPassword', 'newPassword_confirmation']);
    }
}
