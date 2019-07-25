<?php

return [
    '__name' => 'api-contact',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/api-contact.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/api-contact' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'contact' => NULL
            ],
            [
                'api' => NULL
            ],
            [
                'lib-app' => NULL
            ],
            [
                'lib-form' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'ApiContact\\Controller' => [
                'type' => 'file',
                'base' => 'modules/api-contact/controller'
            ]
        ],
        'files' => []
    ],
    'routes' => [
        'api' => [
            'apiContactCreate' => [
                'path' => [
                    'value' => '/contact'
                ],
                'handler' => 'ApiContact\\Controller\\Contact::create',
                'method' => 'POST'
            ]
        ]
    ],
    'libForm' => [
        'forms' => [
            'api-contact' => [
                'fullname' => [
                    'label' => 'Fullname',
                    'type' => 'text',
                    'rules' => [
                        'required' => true
                    ]
                ],
                'email' => [
                    'label' => 'Email',
                    'type' => 'email',
                    'rules' => [
                        'required' => true,
                        'email' => true
                    ],
                    'filters' => [
                        'lowercase' => true
                    ]
                ],
                'subject' => [
                    'label' => 'Subject',
                    'type' => 'text',
                    'rules' => [
                        'required' => true
                    ]
                ],
                'content' => [
                    'label' => 'Content',
                    'type' => 'text',
                    'rules' => [
                        'required' => true
                    ]
                ]
            ]
        ]
    ]
];