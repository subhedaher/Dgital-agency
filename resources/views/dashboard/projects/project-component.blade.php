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
                    <th>Description</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($projects as $project)
                    <tr>
                        <td class="w-25"><strong>{{ $project->name }}</strong>
                        </td>
                        @if (strlen($project->description) > 20)
                            <td><strong>{{ substr($project->description, 0, 20) . '...' }}</strong></td>
                        @else
                            <td><strong>{{ $project->description }}</strong></td>
                        @endif
                        <td><img src="{{ Storage::url($project->image) }}" width="70"></td>
                        <td>{{ $project->category->name }}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <button class="dropdown-item"
                                        wire:click="$dispatch('showProject', { id: {{ $project->id }} })"><i
                                            class="bx bx-show"></i>
                                        Show</button>
                                    <button class="dropdown-item"
                                        wire:click="$dispatch('updateProject', { id: {{ $project->id }} })"><i
                                            class="bx bx-edit-alt me-1"></i>
                                        Edit</button>
                                    <button class="dropdown-item"
                                        wire:click="$dispatch('deleteProject', { id: {{ $project->id }} })"><i
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
            {{ $projects->links() }}
        </div>
    </div>
</div>
