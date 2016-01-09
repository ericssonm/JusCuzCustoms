<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home/students/dig4104c_006/public_html/juscuzcustoms1.0/wp-content/themes/g5_hydrogen/blueprints/styles/navigation.yaml',
    'modified' => 1448392394,
    'data' => [
        'name' => 'Navigation Colors',
        'description' => 'Navigation colors for the Hydrogen theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#439A86'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text',
                    'default' => '#ffffff'
                ],
                'overlay' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Overlay',
                    'description' => 'Set the color of the page overlay when the certain menu modes are active.',
                    'default' => 'rgba(0, 0, 0, 0.4)'
                ]
            ]
        ]
    ]
];
