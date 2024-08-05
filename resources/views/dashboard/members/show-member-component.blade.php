<div class="modal fade" id="showMember" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Show Member</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Name"
                                wire:model='name' @disabled(true)>
                        </div>
                        <div class="col mb-3">
                            <label for="position" class="form-label">Position</label>
                            <input type="text" class="form-control" @disabled(true) id="position"
                                placeholder="Position" wire:model='position'>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="facebook" class="form-label">Facebook</label>
                            <input type="text" class="form-control" id="facebook" placeholder="Facebook"
                                wire:model='facebook' @disabled(true)>
                        </div>
                        <div class="col mb-3">
                            <label for="instagram" class="form-label">Instagram</label>
                            <input type="text" class="form-control" id="instagram" placeholder="Instagram"
                                wire:model='instagram' @disabled(true)>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="twitter" class="form-label">Twitter</label>
                            <input type="text" class="form-control" id="twitter" placeholder="Twitter"
                                wire:model='twitter' @disabled(true)>
                        </div>
                        <div class="col mb-3">
                            <label for="linkedin" class="form-label">Linkedin</label>
                            <input type="text" class="form-control" id="linkedin" placeholder="Linkedin"
                                wire:model='linkedin' @disabled(true)>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input class="form-control" type="file" id="image" wire:model='image'
                            @disabled(true)>
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
