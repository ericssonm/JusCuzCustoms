<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home/students/dig4104c_006/public_html/juscuzcustoms1.0/wp-content/themes/g5_hydrogen/blueprints/content/single/meta-author.yaml',
    'modified' => 1448392405,
    'data' => [
        'name' => 'Author Meta',
        'description' => 'Options for displaying author meta',
        'type' => 'single',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Display Author',
                    'description' => 'Display author.',
                    'default' => 1
                ],
                'link' => [
                    'type' => 'input.checkbox',
                    'label' => 'Link Author',
                    'description' => 'Link author to his archives.',
                    'default' => 1
                ],
                'prefix' => [
                    'type' => 'input.text',
                    'label' => 'Author Prefix',
                    'description' => 'Display text directly before the author name.'
                ]
            ]
        ]
    ]
];
