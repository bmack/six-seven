<?php

return [
    'backend' => [
        'bmack/six-seven/login-language-override' => [
            'target' => \Bmack\SixSeven\Middleware\LoginLanguageOverride::class,
            'after' => [
                'typo3/cms-backend/backend-routing',
            ],
            'before' => [
                'typo3/cms-backend/authentication',
            ],
        ],
    ],
];
