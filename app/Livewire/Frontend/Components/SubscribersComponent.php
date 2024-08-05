<?php

namespace App\Livewire\Frontend\Components;

use App\Models\Subscriber;
use Livewire\Attributes\Validate;
use Livewire\Component;

class SubscribersComponent extends Component
{
    public $email;
    public function render()
    {
        return view('frontend.components.subscribers-component');
    }

    public function rules()
    {
        return [
            'email' => 'required|email|unique:subscribers'
        ];
    }

    public function submit()
    {
        $subscriber = $this->validate();
        Subscriber::create($subscriber);
        $this->reset('email');
        session()->flash('message', 'Subscribers Successfully');
    }
}