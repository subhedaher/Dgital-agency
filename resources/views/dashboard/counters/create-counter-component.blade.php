@include('dashboard.components.modal', [
    'title' => 'Create Counter',
    'id' => 'createCounter',
    'lable' => 'Add',
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
