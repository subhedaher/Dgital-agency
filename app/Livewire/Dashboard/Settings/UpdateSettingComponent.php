<?php

namespace App\Livewire\Dashboard\Settings;

use App\Models\Setting;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateSettingComponent extends Component
{
    use WithFileUploads;

    public $settings, $image;

    public function mount()
    {
        $this->settings = Setting::first();
    }

    public function render()
    {
        return view('dashboard.settings.update-setting-component');
    }

    public function rules()
    {
        return [
            'settings.name' => 'required|string',
            'settings.image' => 'nullable',
            'settings.email' => 'required|email',
            'settings.address' => 'required|string',
            'settings.phone' => 'required|string',
            'settings.facebook' => 'nullable|url',
            'settings.instagram' => 'nullable|url',
            'settings.twitter' => 'nullable|url',
            'settings.linkedin' => 'nullable|url',
        ];
    }

    public function submit()
    {
        $data = $this->validate();
        if ($this->image) {
            if ($this->settings->image) {
                unlink('storage/' . $this->settings->image);
            }
            $imageName = time() . '.' . $this->image->getClientOriginalExtension();
            $this->image->storeAs('settings', $imageName, 'public');
            $imageName = 'settings/' . $imageName;
            $data['image'] = $imageName;
        } else {
            unset($data['image']);
        }
        $this->settings->update($data);
        session()->flash('success', 'Update Settings Successfully');
    }
}
