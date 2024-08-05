@include('dashboard.components.modal', [
    'title' => 'Create Category',
    'id' => 'createCategory',
    'lable' => 'Add',
    'size' => 'modal-lg',
    'feilds' => [
        [
            'name' => 'name',
            'type' => 'text',
        ],
    ],
])
