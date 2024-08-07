<?php
session_start();
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
        header("Location: studentindex.php?error=User Name is required");
        exit();
    } elseif (empty($pass)) {
        header("Location: studentindex.php?error=Password is required");
        exit();
    } else {
        try {
            $sql = "SELECT * FROM users WHERE user_name = :uname AND password = :pass";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':uname', $uname);
            $stmt->bindParam(':pass', $pass);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($row && $row['user_name'] === $uname && $row['password'] === $pass) {
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("Location: checksemester.php");
                exit();
            } else {
                header("Location: studentindex.php?error=Incorrect User name or password");
                exit();
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
} else {
    header("Location: studentindex.php");
    exit();
}
