<?php
ob_start();
require 'config.php';

$Name = $_POST['Name'];
$Roll = $_POST['Roll'];
$Semester = $_POST['Semester'];
$Elective_1 = $_POST['Elective_1'];
$Elective_2 = $_POST['Elective_2'];
$Elective_3 = $_POST['Elective_3'];
$Elective_4 = $_POST['Elective_4'];

try {
    $pdo = new PDO("mysql:host=localhost;dbname=test_db", 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare("INSERT INTO `formdetails`(`Name`, `Roll`, `Semester`, `Elective_1`, `Elective_2`, `Elective_3`, `Elective_4`) VALUES (:Name, :Roll, :Semester, :Elective_1, :Elective_2, :Elective_3, :Elective_4)");

    $stmt->bindParam(':Name', $Name);
    $stmt->bindParam(':Roll', $Roll);
    $stmt->bindParam(':Semester', $Semester);
    $stmt->bindParam(':Elective_1', $Elective_1);
    $stmt->bindParam(':Elective_2', $Elective_2);
    $stmt->bindParam(':Elective_3', $Elective_3);
    $stmt->bindParam(':Elective_4', $Elective_4);

    $stmt->execute();

    echo '<script>alert("Successfully Submitted."); location.replace(document.referrer);</script>';
} catch (PDOException $e) {
    echo '<script>alert("You already have submitted."); location.replace(document.referrer);</script>' . $e->getMessage();
}
?>
