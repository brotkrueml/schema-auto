<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Schema.org extension for auto',
    'description' => 'Extend the schema extension with auto-related terms',
    'category' => 'fe',
    'state' => 'stable',
    'createDirs' => '',
    'clearCacheOnLoad' => true,
    'author' => 'Chris Müller',
    'author_email' => 'typo3@krue.ml',
    'version' => '1.2.0',
    'constraints' => [
        'depends' => [
            'schema' => '1.7.0-2.99.99',
            'typo3' => '9.5.16-11.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => ['Brotkrueml\\SchemaAuto\\' => 'Classes']
    ],
];
