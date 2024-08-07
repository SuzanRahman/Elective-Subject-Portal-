<?php
session_start();
ob_start();

require('config.php');

$email = $_POST['email'];
$password = $_POST['password'];

try {
    $dsn = "mysql:host=localhost;dbname=test_db";
    $pdo = new PDO($dsn, 'root', '');

    // Prepare the SQL statement with placeholders
    $stmt = $pdo->prepare("SELECT * FROM `user` WHERE `email` = :email AND `password` = :password");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    $row = $stmt->fetch();
    $count_query = $stmt->rowCount();

    if ($count_query != 0) {
        $sessionemail = $row['email'];
        $_SESSION['login_user'] = $sessionemail;
        header("Location: ../fetchdetails.php");
        exit();
    } else {
        echo '<script>alert("Incorrect Credentials Entered"); location.replace(document.referrer);</script>';
    }
} catch (PDOException $e) {
    // Handle any database connection errors here
    echo "Error: " . $e->getMessage();
}
?>
