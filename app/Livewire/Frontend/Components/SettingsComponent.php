<?php

namespace App\Livewire\Frontend\Components;

use App\Models\Setting;
use Livewire\Component;

class SettingsComponent extends Component
{
    public $settings;
    public function render()
    {
        return view('frontend.components.settings-component');
    }

    public function mount()
    {
        $this->settings = Setting::first();
    }
}
