<?php

namespace App\Livewire\Dashboard\Subscribers;

use App\Models\Subscriber;
use Livewire\Component;

class DeleteSubscriberComponent extends Component
{
    public $subscriber;

    public $listeners = [
        'deleteSubscriber'
    ];

    public function render()
    {
        return view('dashboard.subscribers.delete-subscriber-component');
    }

    public function deleteSubscriber($id)
    {
        $this->subscriber = Subscriber::find($id);
        $this->dispatch('dSubscriber');
    }

    public function submit()
    {
        $this->subscriber->delete();
        $this->reset('subscriber');
        $this->dispatch('dSubscriber');
        $this->dispatch('refresh')->to(SubscribersComponent::class);
    }
}
