<?php
session_start();

$server = "localhost:3307";
$uname = "root";
$pass = "root";
$dname = "mydata";

$connection = new mysqli($server, $uname, $pass, $dname);
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $authenticated = false;
    $sql = "SELECT * FROM nesly WHERE password = ? AND email = ?";

    $stmt = $connection->prepare($sql);

    if ($stmt === false) {
        die("Error in prepare: " . $connection->error);
    }

    $stmt->bind_param("ss", $name, $email);
    if ($stmt === false) {
        die("Error in bind_param: " . $connection->error);
    }

    if ($stmt->execute()) {
        $result = $stmt->get_result();

        if ($result->num_rows > 0) { 
            $authenticated=true;
            while ($row = $result->fetch_assoc()) {
                $_SESSION['name'] = $row['name'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['course'] = $row['course'];
                $_SESSION['gender'] = $row['gender'];
                $_SESSION['phone'] = $row['phno'];
                $_SESSION['img'] = !empty($row['img']) ? base64_encode($row['img']) : null;
            }
        } 
    } else {
        die("Error in execute: " . $stmt->error);
    }

    $stmt->close();

    if ($authenticated) {
        header("Location: show.php");
    } else 
            {
                echo "<html><body><script>";
                echo "alert('Invalid User Or Password');";
                echo "window.location.href = 'login.php';"; 
                echo "</script></body></html>";
           }
}

$connection->close();
$c = $_SESSION['course'];
$_SESSION['cou'] = explode(" ", $c);






?>
