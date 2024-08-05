@include('dashboard.components.modal', [
    'title' => 'Create Service',
    'id' => 'createService',
    'lable' => 'Add',
    'size' => 'modal-lg',
    'feilds' => [
        [
            'name' => 'name',
            'type' => 'text',
        ],
        [
            'name' => 'description',
            'type' => 'text',
        ],
        [
            'name' => 'icon',
            'type' => 'text',
        ],
    ],
])
