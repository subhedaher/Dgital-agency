@include('dashboard.components.modal', [
    'title' => 'Edit Service',
    'id' => 'updateService',
    'lable' => 'Save',
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
