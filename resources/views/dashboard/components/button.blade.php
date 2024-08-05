<button wire:loading.attr='disabled' class="btn btn-primary {{ $size }}" type="submit"><span
        wire:loading.remove>{{ $lable }}</span>
    <div class="text-center" wire:loading wire:target='submit'>
        <div class="spinner-border spinner-border-sm text-white text-center" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
</button>
