@include('dashboard.components.modal', [
    'title' => 'Edit Counter',
    'id' => 'updateCounter',
    'lable' => 'Save',
    'size' => 'modal-lg',
    'feilds' => [
        [
            'name' => 'name',
            'type' => 'text',
        ],
        [
            'name' => 'counter',
            'type' => 'number',
        ],
        [
            'name' => 'icon',
            'type' => 'text',
        ],
    ],
])
