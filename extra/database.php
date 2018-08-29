<?php

/**
* database configuration
**/

// Change to point to database host
$database_host = '';
// Change to point to database name
$database_name = '';
// Change to different character set
$charset = 'utf8';
// Change to database authorized username
$database_username = '';
// Change to database authorized password
$database_password = '';

// Returns new pdo connection
return new PDO(
  "mysql:host=". $database_host .";dbname=". $database_name .";charset=". $charset ."",
  $database_username,
  $database_password
);
