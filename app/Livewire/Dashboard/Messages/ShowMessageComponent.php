<?php

namespace App\Livewire\Dashboard\Messages;

use App\Models\Message;
use Livewire\Component;

class ShowMessageComponent extends Component
{
    // public $message;
    public $name, $email, $subject, $message;

    protected $listeners = [
        'showMessage'
    ];

    public function render()
    {
        return view('dashboard.messages.show-message-component');
    }

    public function showMessage($id)
    {
        $record = Message::find($id);
        $this->name = $record->name;
        $this->email = $record->email;
        $this->subject = $record->subject;
        $this->message = $record->message;
        $this->dispatch('sMessage');
        $record->update(['status' => '1']);
        $this->dispatch('refresh')->to(MessageComponent::class);
    }
}
