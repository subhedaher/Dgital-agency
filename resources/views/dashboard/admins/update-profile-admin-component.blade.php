<form wire:submit.prevent='submit'>
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Name" wire:model='name'
            aria-describedby="defaultFormControlHelp">
        @include('dashboard.components.error', [
            'lable' => 'name',
        ])
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Email" wire:model='email'
            aria-describedby="defaultFormControlHelp">
        @include('dashboard.components.error', [
            'lable' => 'email',
        ])
    </div>
    @include('dashboard.components.button', [
        'lable' => 'Save',
        'size' => '',
    ])
</form>
