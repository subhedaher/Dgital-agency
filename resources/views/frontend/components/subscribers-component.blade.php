<div>
    <div class="position-relative w-100 mt-3">
        <form wire:submit.prevent='submit'>
            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="email" placeholder="Enter Your Email"
                style="height: 48px;" wire:model='email'>
            <button type="submit" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                    class="fa fa-paper-plane text-primary fs-4"></i></button>
        </form>
    </div>
    <div class="mt-3">
        @error('email')
            <div class="alert alert-danger" role="alert">{{ $message }}</div>
        @enderror
        @if (session('message'))
            <div class="alert alert-primary" role="alert">{{ session('message') }}</div>
        @endif
    </div>
</div>
