<?php

require __DIR__ . '/config.php';

try {
    $hostname = $_ENV['DB_HOST'];
    $dbname   = $_ENV['DB_NAME'];
    $username = $_ENV['DB_USER'];
    $password = $_ENV['DB_PASS'];

    $conn = mysqli_connect($hostname, $username, $password, $dbname);

} catch (mysqli_sql_exception $e) {
    error_log("Database connection failed: " . $e->getMessage());
    die("Something went wrong. Please try later.");
}