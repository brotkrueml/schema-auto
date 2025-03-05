<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Schema.org extension for auto',
    'description' => 'Extend the schema extension with auto-related terms',
    'category' => 'fe',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'author' => 'Chris Müller',
    'author_email' => 'typo3@brotkrueml.dev',
    'version' => '2.3.0-dev',
    'constraints' => [
        'depends' => [
            'php' => '8.1.0-0.0.0',
            'schema' => '3.9.0-3.99.99',
            'typo3' => '11.5.19-13.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => ['Brotkrueml\\SchemaAuto\\' => 'Classes']
    ],
];
