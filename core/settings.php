<?php

// Global functions

$settings = [
    'global' => [
        // TODO: change to default
        'full_path' => 'http://localhost/~elvinaslukasevicius/fortnite/',
        'assets_path' => 'http://localhost/~elvinaslukasevicius/fortnite/assets',
        'website' => [
            'title' => 'FortniteAcc.com - New Website here!',
            'keywords' => 'fortniteacc keywords',
            'description' => 'forniteacc description'
        ]
    ],
    'cache' => [
        'enable' => false,
        'version' => '1'
    ]
];

$cache_prefix = ($settings['cache']['enable']) ? '?v='.$settings['cache']['version'] : '';
