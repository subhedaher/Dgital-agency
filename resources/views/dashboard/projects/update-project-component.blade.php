<div class="modal fade" id="updateProject" tabindex="-1" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Create Project</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent='submit'>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Name" wire:model='name'>
                        @include('dashboard.components.error', [
                            'lable' => 'name',
                        ])
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" rows="3" wire:model='description'></textarea>
                        @include('dashboard.components.error', [
                            'lable' => 'description',
                        ])
                    </div>
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Category</label>
                        <select class="form-select" id="category_id" aria-label="Default select example"
                            wire:model='category_id'>
                            <option></option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @include('dashboard.components.error', [
                            'lable' => 'category_id',
                        ])
                    </div>
                    <div class="mb-3">
                        <label for="url" class="form-label">Url</label>
                        <input type="text" class="form-control" id="url" placeholder="Url" wire:model='url'>
                        @include('dashboard.components.error', [
                            'lable' => 'url',
                        ])
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input class="form-control" type="file" id="image" wire:model='image'>
                        @include('dashboard.components.error', [
                            'lable' => 'image',
                        ])
                    </div>
                    <div wire:loading wire:teaget='image' class="spinner-border text-secondary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    @if ($image)
                        <div class="mb-3">
                            <img src="{{ $image->temporaryUrl() }}" width="150px" height="150px">
                        </div>
                    @endif
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        @include('dashboard.components.button', [
                            'lable' => 'Save',
                            'size' => '',
                        ])
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
