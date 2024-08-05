<div class="modal fade" id="{{ $id }}" tabindex="-1" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog {{ $size }}" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">{{ $title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent='submit'>
                    <div class="row g-2">
                        @foreach ($feilds as $feild)
                            <div class="col mb-0">
                                <label for="{{ $feild['name'] }}" class="form-label">{{ $feild['name'] }}</label>
                                <input type="{{ $feild['type'] }}" id="{{ $feild['name'] }}" class="form-control"
                                    placeholder="{{ $feild['name'] }}" wire:model="{{ $feild['name'] }}" />
                                @include('dashboard.components.error', [
                                    'lable' => $feild['name'],
                                ])
                            </div>
                        @endforeach
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Close
                            </button>
                            @include('dashboard.components.button', [
                                'lable' => $lable,
                                'size' => '',
                            ])
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
