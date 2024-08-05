<?php

namespace App\Livewire\Dashboard\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class AdminLoginComponent extends Component
{
    public $email;
    public $password;
    public $remember;

    public function render()
    {
        return view('dashboard.auth.admin-login-component');
    }

    public function rules()
    {
        return [
            'email' => 'required|email|exists:admins',
            'password' => 'required|string',
            'remember' => 'nullable|boolean'
        ];
    }

    public function submit()
    {
        $this->validate();
        if (Auth::guard('admin')->attempt([
            'email' => $this->email,
            'password' => $this->password
        ], $this->remember)) {
            session()->flash('loged', 'Login Successfully');
            return to_route('dashboard.index');
        } else {
            throw ValidationException::withMessages([
                'password' => 'Login Failed!',
            ]);
        }
    }
}
