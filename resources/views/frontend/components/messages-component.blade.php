<form wire:submit.prevent='submit'>
    @if (session('message'))
        <div class="alert alert-success" role="alert">{{ session('message') }}</div>
    @endif
    <div class="row g-3">
        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" id="name" placeholder="Your Name" wire:model='name'>
                <label for="name">Your Name</label>
                @include('dashboard.components.error', [
                    'lable' => 'name',
                ])
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <input type="email" class="form-control" id="email" placeholder="Your Email" wire:model='email'>
                <label for="email">Your Email</label>
                @include('dashboard.components.error', [
                    'lable' => 'email',
                ])
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <input type="text" class="form-control" id="subject" placeholder="Subject" wire:model='subject'>
                <label for="subject">Subject</label>
                @include('dashboard.components.error', [
                    'lable' => 'subject',
                ])
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a message here" id="message" wire:model='message'
                    style="height: 150px"></textarea>
                <label for="message">Message</label>
                @include('dashboard.components.error', [
                    'lable' => 'message',
                ])
            </div>
        </div>
        @include('dashboard.components.button', [
            'lable' => 'Send Message',
            'size' => 'w-100',
        ])
    </div>
</form>
