<?php

// Add access control header
header('Access-Control-Allow-Origin: *');

// Require the api autoload
require 'vendor/autoload.php';

// Setting default timezone
date_default_timezone_set("Asia/Manila");

// Calling the database configuration
$pdo = require 'extra/database.php';

// Calling the api settings
$settings = require 'extra/settings.php';

// Instantiating the api app with pre-defined settings
$app = new \Slim\App($settings);

// Register routes
require 'extra/route.php';

// Run the app
$app->run();
