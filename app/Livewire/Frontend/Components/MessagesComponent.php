<?php

namespace App\Livewire\Frontend\Components;

use App\Models\Message;
use Livewire\Component;

class MessagesComponent extends Component
{
    public $name, $email, $subject, $message;
    public function render()
    {
        return view('frontend.components.messages-component');
    }

    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ];
    }

    public function submit()
    {
        $message = $this->validate();
        Message::create($message);
        session()->flash('message', 'Send Message Successfully');
        $this->reset(['name', 'email', 'subject', 'message']);
    }
}