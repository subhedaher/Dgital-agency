<div class="modal fade" id="showMessage" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Show Message</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row g-3">
                    <div class="row g-2">
                        <div class="row">
                            <div class="col mb-0">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" id="name" class="form-control" @disabled(true)
                                    placeholder="Name" wire:model="name" />
                            </div>
                            <div class="col mb-0">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" class="form-control" @disabled(true)
                                    placeholder="Email" wire:model="email" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col mb-0">
                                <label for="subject" class="form-label">Subject</label>
                                <input type="text" id="subject" class="form-control" @disabled(true)
                                    placeholder="Subject" wire:model="subject" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col mb-0">
                                <label for="message" class="form-label">Message</label>
                                <textarea id="message" cols="30" rows="5" id="message" @disabled(true) class="form-control"
                                    placeholder="Message" wire:model="message"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
