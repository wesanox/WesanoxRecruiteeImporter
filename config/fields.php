<?php

return [
    [
        'name' => 'dynamic_city',
        'type' => 'DynamicOptions',
        'label' => 'Stelle in ... ',
        'tags' => 'dynamic',
        'icon' => 'Magic',
        'width' => 50,
        'inputfield_class' => [
            'InputfieldSelect',
            'InputfieldCheckboxes'
        ],
    ],
    [
        'name' => 'dynamic_company',
        'type' => 'DynamicOptions',
        'label' => 'Stelle für Unternehmen',
        'tags' => 'dynamic',
        'icon' => 'Magic',
        'width' => 50,
        'inputfield_class' => [
            'InputfieldSelect',
            'InputfieldCheckboxes'
        ],
    ],
    [
        'name' => 'text_recruitee_id',
        'type' => 'Text',
        'label' => 'Recruitee ID',
        'tags' => 'text',
        'icon' => 'File text o',
        'collapsed' => 4,
        'width' => 100,
        'formatter' => 'TextformatterEntities'
    ]
];