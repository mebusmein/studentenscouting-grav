<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/mebus/Workspace/studentenscouting-grav/user/plugins/admin-addon-user-manager/blueprints/user/account-raw.yaml',
    'modified' => 1528282100,
    'data' => [
        'title' => 'User',
        'form' => [
            'fields' => [
                'raw' => [
                    'type' => 'editor',
                    'label' => 'Raw',
                    'autofocus' => true,
                    'codemirror' => [
                        'mode' => 'yaml',
                        'indentUnit' => 4,
                        'autofocus' => true,
                        'indentWithTabs' => false,
                        'lineNumbers' => true,
                        'styleActiveLine' => true,
                        'gutters' => [
                            0 => 'CodeMirror-lint-markers'
                        ],
                        'lint' => true
                    ]
                ]
            ]
        ]
    ]
];
