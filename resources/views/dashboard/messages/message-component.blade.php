<div class="card">
    <div class="card-body">
        <div>
            <input type="text" class="form-control w-25" placeholder="Search..."
                aria-describedby="defaultFormControlHelp" wire:model.live='search' wire:key='search'>
        </div>
    </div>
    <div class="table-responsive text-nowrap">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($messages as $message)
                    <tr>
                        <td class="w-25"><strong>{{ $message->name }}</strong></td>
                        <td class="w-25"><strong>{{ $message->email }}</strong></td>
                        @if (strlen($message->subject) > 20)
                            <td class="w-25"><strong>{{ substr($message->subject, 0, 20) . '...' }}</strong></td>
                        @else
                            <td class="w-25"><strong>{{ $message->subject }}</strong></td>
                        @endif
                        <td class="w-25"><strong>
                                @if ($message->status)
                                    <span class="badge bg-label-success me-1">{{ $message->status_active }}</span>
                                @else
                                    <span class="badge bg-label-danger me-1">{{ $message->status_active }}</span>
                                @endif
                            </strong>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <button class="dropdown-item"
                                        wire:click="$dispatch('deleteMessage', { id: {{ $message->id }} })"><i
                                            class="bx bx-trash me-1"></i>
                                        Delete</button>
                                    <button class="dropdown-item"
                                        wire:click="$dispatch('showMessage', { id: {{ $message->id }} })"><i
                                            class="bx bx-show"></i>
                                        Show</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mx-3">
            {{ $messages->links() }}
        </div>
    </div>
</div>
