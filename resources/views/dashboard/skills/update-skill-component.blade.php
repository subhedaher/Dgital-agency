@include('dashboard.components.modal', [
    'title' => 'Edit Skill',
    'id' => 'updateSkill',
    'lable' => 'Save',
    'size' => 'modal-lg',
    'feilds' => [
        [
            'name' => 'name',
            'type' => 'text',
        ],
        [
            'name' => 'progress',
            'type' => 'number',
        ],
    ],
])
