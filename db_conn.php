<?php
$hostname = "localhost";
$username = "root";
$password = "";
$db_name = "test_db";

try {
    $pdo = new PDO("mysql:host=$hostname;dbname=$db_name", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
