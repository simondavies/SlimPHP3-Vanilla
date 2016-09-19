<?php

/**
 * Main Site Routes
 */
//-- homepage
$app->get('/', '\App\Controllers\PagesController:home')->setName('homepage');
$app->get('/about', '\App\Controllers\PagesController:about')->setName('about');
