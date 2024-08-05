<form class="row" wire:submit.prevent='submit'>
    @if (session('success'))
        <div class="alert alert-primary my-success-alert" role="alert">{{ session('success') }}</div>
    @endif
    <div class="col-md-6">
        <label class="form-label" for="name">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Name" wire:model='settings.name' />
        @include('dashboard.components.error', [
            'lable' => 'settings.name',
        ])
    </div>
    <div class="col-md-6">
        <label class="form-label" for="email">Email</label>
        <input type="text" class="form-control" id="email" placeholder="Email" wire:model='settings.email' />
        @include('dashboard.components.error', [
            'lable' => 'settings.email',
        ])
    </div>
    <div class="col-md-6 mt-2">
        <label class="form-label" for="address">Address</label>
        <input type="text" class="form-control" id="address" placeholder="Address" wire:model='settings.address' />
        @include('dashboard.components.error', [
            'lable' => 'settings.address',
        ])
    </div>
    <div class="col-md-6 mt-2">
        <label class="form-label" for="phone">Phone</label>
        <input type="text" class="form-control" id="phone" placeholder="Phone" wire:model='settings.phone' />
        @include('dashboard.components.error', [
            'lable' => 'settings.phone',
        ])
    </div>
    <div class="col-md-6 mt-2">
        <label class="form-label" for="facebook">Facebook</label>
        <input type="text" class="form-control" id="facebook" placeholder="Facebook"
            wire:model='settings.facebook' />
        @include('dashboard.components.error', [
            'lable' => 'settings.facebook',
        ])
    </div>
    <div class="col-md-6 mt-2">
        <label class="form-label" for="twitter">Twitter</label>
        <input type="text" class="form-control" id="twitter" placeholder="Twitter" wire:model='settings.twitter' />
        @include('dashboard.components.error', [
            'lable' => 'settings.twitter',
        ])
    </div>
    <div class="col-md-6 mt-2">
        <label class="form-label" for="linkedin">Linkedin</label>
        <input type="text" class="form-control" id="linkedin" placeholder="Linkedin"
            wire:model='settings.linkedin' />
        @include('dashboard.components.error', [
            'lable' => 'settings.linkedin',
        ])
    </div>
    <div class="col-md-6 mt-2">
        <label class="form-label" for="instagram">Instagram</label>
        <input type="text" class="form-control" id="instagram" placeholder="Instagram"
            wire:model='settings.instagram' />
        @include('dashboard.components.error', [
            'lable' => 'settings.instagram',
        ])
    </div>
    <div class="col-md-6 mt-2">
        <label for="image" class="form-label">Image</label>
        <input class="form-control" type="file" id="image" wire:model='image'>
        @include('dashboard.components.error', [
            'lable' => 'settings.image',
        ])
    </div>
    <div class="col-md-6 mt-2">
        <div wire:loading wire:teaget='image' class="spinner-border text-secondary my-2" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
        @if ($image)
            <div class="mb-3">
                <img src="{{ $image->temporaryUrl() }}" width="150px" height="150px">
            </div>
        @else
            @if ($settings->image)
                <div class="mb-3">
                    <img src="{{ Storage::url($settings->image) }}" width="150px" height="150px">
                </div>
            @endif
        @endif
    </div>

    <div class="col-md-12 mt-4">
        @include('dashboard.components.button', [
            'lable' => 'Save',
            'size' => '',
        ])
    </div>

</form>
