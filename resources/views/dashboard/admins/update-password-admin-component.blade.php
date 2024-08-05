<form wire:submit.prevent='submit'>
    <div class="mb-3">
        <label for="oldPassword" class="form-label">Old Password</label>
        <input type="password" class="form-control" id="oldPassword" placeholder="Old Password" wire:model='oldPassword'
            aria-describedby="defaultFormControlHelp">
        @include('dashboard.components.error', [
            'lable' => 'oldPassword',
        ])
    </div>
    <div class="mb-3">
        <label for="newPassword" class="form-label">New Password</label>
        <input type="password" class="form-control" id="newPassword" placeholder="New Password" wire:model='newPassword'
            aria-describedby="defaultFormControlHelp">
        @include('dashboard.components.error', [
            'lable' => 'newPassword',
        ])
    </div>
    <div class="mb-3">
        <label for="newPassword_confirmation" class="form-label">New Password Confirmation</label>
        <input type="password" class="form-control" id="newPassword_confirmation"
            placeholder="New Password Confirmation" wire:model='newPassword_confirmation'
            aria-describedby="defaultFormControlHelp">
        @include('dashboard.components.error', [
            'lable' => 'newPassword_confirmation',
        ])
    </div>
    @include('dashboard.components.button', [
        'lable' => 'Save',
        'size' => '',
    ])
</form>
