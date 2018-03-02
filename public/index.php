<?php
// Use Composer autoloader:
$loader = require_once "../vendor/autoload.php";

$loader->addPsr4('App\\', '../app');

// Init and run the application:
$app = new \Mindk\Framework\App(require "../config/config.php");
$app->run();