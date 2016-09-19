<?php

require __DIR__ . '/../vendor/autoload.php';
session_start();
//-- load the env file data
$dotenv = new Dotenv\Dotenv(__DIR__ . '/../');
$dotenv->load();
//-- Pathing
$paths = require __DIR__ . '/paths.php';
// Instantiate the app
$settings = require $paths['settings'];
//-- init app
$app = new \Slim\App($settings);
//-- Register site config
$config = require $paths['config'];
// Set up dependencies
require $paths['dependencies'];
// Register middleware
require $paths['middleware'];
// Register routes
require $paths['routes'];
// Register helpers
require $paths['helpers'];
