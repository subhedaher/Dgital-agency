<div class="modal fade" id="updateMember" tabindex="-1" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Edit Member</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent='submit'>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Name"
                                wire:model='name'>
                            @include('dashboard.components.error', [
                                'lable' => 'name',
                            ])
                        </div>
                        <div class="col mb-3">
                            <label for="position" class="form-label">Position</label>
                            <input type="text" class="form-control" id="position" placeholder="Position"
                                wire:model='position'>
                            @include('dashboard.components.error', [
                                'lable' => 'position',
                            ])
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="facebook" class="form-label">Facebook</label>
                            <input type="text" class="form-control" id="facebook" placeholder="Facebook"
                                wire:model='facebook'>
                            @include('dashboard.components.error', [
                                'lable' => 'facebook',
                            ])
                        </div>
                        <div class="col mb-3">
                            <label for="instagram" class="form-label">Instagram</label>
                            <input type="text" class="form-control" id="instagram" placeholder="Instagram"
                                wire:model='instagram'>
                            @include('dashboard.components.error', [
                                'lable' => 'instagram',
                            ])
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="twitter" class="form-label">Twitter</label>
                            <input type="text" class="form-control" id="twitter" placeholder="Twitter"
                                wire:model='twitter'>
                            @include('dashboard.components.error', [
                                'lable' => 'twitter',
                            ])
                        </div>
                        <div class="col mb-3">
                            <label for="linkedin" class="form-label">Linkedin</label>
                            <input type="text" class="form-control" id="linkedin" placeholder="Linkedin"
                                wire:model='linkedin'>
                            @include('dashboard.components.error', [
                                'lable' => 'linkedin',
                            ])
                        </div>
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
