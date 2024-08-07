<?php
ob_start(); // Turn on output buffering

$timezone = date_default_timezone_set("Europe/London");

try {
    $pdo = new PDO("mysql:host=localhost;dbname=test_db", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Failed to connect: " . $e->getMessage();
}
?>
