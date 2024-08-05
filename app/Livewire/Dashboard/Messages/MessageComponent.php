<?php

namespace App\Livewire\Dashboard\Messages;

use App\Models\Message;
use Livewire\Component;
use Livewire\WithPagination;

class MessageComponent extends Component
{
    use WithPagination;

    public $search;

    protected $listeners = [
        'refresh' => '$refresh',
    ];

    public function render()
    {
        $messages = Message::where('name', 'like', '%' . $this->search . '%')
            ->orwhere('email', 'like', '%' . $this->search . '%')
            ->orwhere('subject', 'like', '%' . $this->search . '%')
            ->orwhere('status', 'like', '%' . $this->search . '%')
            ->paginate(10);
        return view('dashboard.messages.message-component', ['messages' => $messages]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    protected function queryString()
    {
        return [
            'search' => [
                'as' => 'q',
                'except' => ''
            ],
        ];
    }
}
