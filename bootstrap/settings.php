<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header
        // Renderer settings
        'view' => [
            'template_path' => $paths['views']['folder'],
            'cache_path' => $paths['views']['cache'],
        ],
        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => $paths['logs'],
            'level' => \Monolog\Logger::DEBUG,
        ],
    ],
];
