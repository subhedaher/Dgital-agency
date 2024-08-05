<?php

namespace App\Livewire\Dashboard\Messages;

use App\Models\Message;
use Livewire\Component;

class DeleteMessageComponent extends Component
{
    public $message;

    protected $listeners = ['deleteMessage'];

    public function render()
    {
        return view('dashboard.messages.delete-message-component');
    }

    public function deleteMessage($id)
    {
        $this->message = Message::find($id);
        $this->dispatch('dMessage');
    }

    public function submit()
    {
        $this->message->delete();
        $this->reset('message');
        $this->dispatch('dMessage');
        $this->dispatch('refresh')->to(MessageComponent::class);
    }
}
