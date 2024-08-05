<?php

namespace App\Livewire\Dashboard\Auth;

use Livewire\Component;

class AdminLogoutComponents extends Component
{
    public function render()
    {
        return view('dashboard.auth.admin-logout-components');
    }

    public function logout()
    {
        auth('admin')->logout();
        session()->invalidate();
        session()->regenerateToken();
        return to_route('auth.login');
    }
}
