<?php

// define a working directory
define('APP_PATH', dirname(__DIR__)); // PHP v5.6+

// load
require APP_PATH . '/vendor/autoload.php';

// init app
$app = New \SlimController\Slim([
    'templates.path'             => APP_PATH . '/templates',
    'controller.class_prefix'    => '\\FSTool\\Controller',
    'controller.method_suffix'   => 'Action',
    'controller.template_suffix' => 'php',
]);

// bootstrap routes
require APP_PATH . '/src/FSTool/Routes/BasicAuth.php';

$app->run();