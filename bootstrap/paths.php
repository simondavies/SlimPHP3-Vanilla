<?php
/**
 * Application paths
 */
return [

    'config' => __DIR__ . '/config.php',

    'settings' => __DIR__ . '/settings.php',

    'routes' => __DIR__ . '/../Routes/site.php',

    'middleware' => __DIR__ . '/middleware.php',

    'dependencies' => __DIR__ . '/dependencies.php',

    'views' => [
        'folder' => __DIR__ . '/../Views/',
        'cache' => __DIR__ . '/../cache/views'
    ],

    'cache' => __DIR__ . '/../cache/',

    'logs' => __DIR__ . '/../logs/app.log',

    'helpers' => __DIR__ . '/helpers.php'

];
