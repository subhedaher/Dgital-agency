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
                    <th>Progress</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($skills as $skill)
                    <tr>
                        <td class="w-50"><strong>{{ $skill->name }}</strong>
                        </td>
                        <td>{{ $skill->progress }}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <button class="dropdown-item"
                                        wire:click="$dispatch('updateSkill', { id: {{ $skill->id }} })"><i
                                            class="bx bx-edit-alt me-1"></i>
                                        Edit</button>
                                    <button class="dropdown-item"
                                        wire:click="$dispatch('deleteSkill', { id: {{ $skill->id }} })"><i
                                            class="bx bx-trash me-1"></i>
                                        Delete</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mx-3">
            {{ $skills->links() }}
        </div>
    </div>
</div>
