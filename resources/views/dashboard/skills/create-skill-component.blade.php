@include('dashboard.components.modal', [
    'title' => 'Create Skill',
    'id' => 'createSkill',
    'lable' => 'Add',
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
