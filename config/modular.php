<?php

return [
    'path' => base_path() . '/app/Modules',
    'base_namespace' => 'App\Modules',
    'groupWithoutPrefix' => 'Pub',

    'groupMidleware' => [
        'Admin' => [
            'web' => ['auth'],
            'api' => ['auth.api'],
        ]
    ],

    'modules' => [
        'Admin' => [
            'TasksComments',
            'Test',
            'TaskComment',
            'Task',
            'Analitics',
            'LeadComment',
            'Status',
            'Unit',
            'Lead',
            'Sources',
            'Role',
            'Menu',
            'Dashboard',
            'User'
        ],

        'Pub' => [
            'Auth'
        ],
    ]
];
