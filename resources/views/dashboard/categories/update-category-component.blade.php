@include('dashboard.components.modal', [
    'title' => 'Edit Category',
    'id' => 'updateCategory',
    'lable' => 'Save',
    'size' => 'modal-lg',
    'feilds' => [
        [
            'name' => 'name',
            'type' => 'text',
        ],
    ],
])
