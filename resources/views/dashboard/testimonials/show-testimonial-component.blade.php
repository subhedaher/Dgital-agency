<div class="modal fade" id="showTestimonial" tabindex="-1" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Show Testimonial</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent='submit'>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" @disabled(true) id="name"
                                placeholder="Name" wire:model='name'>
                        </div>
                        <div class="col mb-3">
                            <label for="position" class="form-label">Position</label>
                            <input type="text" class="form-control" @disabled(true) id="position"
                                placeholder="Position" wire:model='position'>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" @disabled(true) rows="3" wire:model='description'></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input class="form-control" type="file" id="image" @disabled(true)
                            wire:model='image'>
                    </div>
                    <div wire:loading wire:teaget='image' class="spinner-border text-secondary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="mb-3">
                        <img src="{{ Storage::url($image) }}" width="150px" height="150px">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
