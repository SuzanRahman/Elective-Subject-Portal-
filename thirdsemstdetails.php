<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
</head>
<style>
    body {
        background-image: url('bg.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        flex-direction: column;
    }

    @import url(https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700|Open+Sans:400,300,600);

    *,
    *:before,
    *:after {
        box-sizing: border-box;
        font-family: "open sans", helvetica, arial, sans;
    }

    #students-table {
        border-collapse: collapse;
        width: 100%;
    }

    #students-table td {
        text-align: center;
        border: 1px solid #15191a;
        padding: 8px;
    }

    #students-table th {
        text-align: center;
        padding: 12px 8px 12px 8px;
        background-color: black;
        color: white;
    }

    #students-table tr {
        background-color: aliceblue;
    }

    #students-table tr:hover {
        background-color: lightblue;
    }
</style>

<body>
    <?php
    session_start();
    require 'php/config.php';

    if (isset($_SESSION['login_user'])) {
        $userLoggedIn = $_SESSION['login_user'];

        $stmt = $pdo->prepare("SELECT Roll, Name, Semester, Elective_1, Elective_2 FROM formdetails WHERE Semester='3rd'");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        echo "<table border='3' id='students-table'>
                <tr>
                    <th>Roll</th>
                    <th>Name</th>
                    <th>Semester</th>
                    <th>Elective_1</th>
                    <th>Elective_2</th>
                </tr>";

        foreach ($result as $row) {
            echo "<tr>";
            echo "<td>" . $row['Roll'] . "</td>";
            echo "<td>" . $row['Name'] . "</td>";
            echo "<td>" . $row['Semester'] . "</td>";
            echo "<td>" . $row['Elective_1'] . "</td>";
            echo "<td>" . $row['Elective_2'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        // Redirect to another page or display a message if the user is not logged in.
    }
    ?>
    <button style="background-color:  black;
        color: #d7e4e4;
        padding: 8px 20px;
	    margin-top: 20px;
        font-size: 18px;
        font-weight: bold;
        border: 2px solid #565452; /* Border */
        border-radius: 7px; /* Rounded corners */
        cursor: pointer;
        text-shadow: 0px 0px 1px rgb(255, 255, 255);
        box-shadow: 4px 4px 10px rgba(255, 255, 255);" id="back">Back</button>

    <script>
      document.getElementById("back").addEventListener("click", function() {
        window.location.href = "fetchdetails.php"; // Replace with your homepage URL.
      });
    </script>
</body>

</html>
