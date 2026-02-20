<?php

require __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');

$dotenv->load();

// Turn off displaying errors to users
error_reporting(E_ALL);
ini_set('display_errors', 0);
ini_set('log_errors', 1);


// error_reporting(E_ALL);
// ini_set('display_errors', 0);

// Set custom log file
ini_set('error_log', __DIR__ . '/../logs/app.log');


/* Enable MySQLi Exceptions */
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);