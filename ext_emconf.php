<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Six Seven - TYPO3 auf Jugendsprache',
    'description' => 'Sheesh! Registriert die Sprache \'Jugendsprache\' und übersetzt alle TYPO3 Backend-Labels. No cap!',
    'category' => 'be',
    'state' => 'stable',
    'author' => 'Benni Mack',
    'author_email' => 'benni@typo3.org',
    'version' => '1.1.0',
    'constraints' => [
        'depends' => [
            'typo3' => '14.0.0-14.99.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
