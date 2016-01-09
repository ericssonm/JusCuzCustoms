<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home/students/dig4104c_006/public_html/juscuzcustoms1.0//wp-content/themes/g5_hydrogen/blueprints/content/page/title.yaml',
    'modified' => 1448392405,
    'data' => [
        'name' => 'Page Title',
        'description' => 'Options for displaying title',
        'type' => 'page',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Display Title',
                    'description' => 'Display page title.',
                    'default' => 1
                ],
                'link' => [
                    'type' => 'input.checkbox',
                    'label' => 'Link Title',
                    'description' => 'Link title to the page.',
                    'default' => 0
                ]
            ]
        ]
    ]
];
