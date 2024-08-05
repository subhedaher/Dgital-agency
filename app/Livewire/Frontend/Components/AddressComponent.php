<?php

namespace App\Livewire\Frontend\Components;

use App\Models\Setting;
use Livewire\Component;

class AddressComponent extends Component
{
    public $settings;

    public function render()
    {
        return view('frontend.components.address-component');
    }

    public function mount()
    {
        $this->settings = Setting::first();
    }
}
