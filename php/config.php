<?php
ob_start(); // Turns on output buffering

$timezone = date_default_timezone_set("Europe/London");

try {
    $dsn = "mysql:host=localhost;dbname=test_db";
    $pdo = new PDO($dsn, "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Failed to connect: " . $e->getMessage();
}
?>
