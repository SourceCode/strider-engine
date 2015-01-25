<?php
return [
    'propel' => [
        'database' => [
            'connections' => [
                '<database>' => [
                    'adapter'    => '<adapter>',
                    'classname'  => 'Propel\Runtime\Connection\ConnectionWrapper',
                    'dsn'        => 'mysql:host=localhost;dbname=<database>',
                    'user'       => '<user>',
                    'password'   => '<pass>',
                    'attributes' => []
                ]
            ]
        ],
        'runtime' => [
            'defaultConnection' => '<database>',
            'connections' => ['<database>']
        ],
        'generator' => [
            'defaultConnection' => '<database>',
            'connections' => ['<database>']
        ]
    ]
];