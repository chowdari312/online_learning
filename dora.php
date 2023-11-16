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
$pic_uploaded = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $phone = $_POST["phone"];
    $c = $_POST["c"];
    $py = $_POST["py"];
    $java = $_POST["java"];
    $html = $_POST["html"];
    $dbms = $_POST["dbms"];
    $gender = $_POST["gen"];
    $course="";
    if($c!="")
        $course=$course." ".$c;
    if($py!="")
        $course=$course." ".$py;
    if($java!="")
        $course=$course." ".$java;
    if($html!="")
        $course=$course." ".$html;
    if($dbms!="")
        $course=$course." ".$dbms;
    $course=trim($course);
    $image = $_FILES["pic"]['name'];
    $image_temp = $_FILES["pic"]['tmp_name'];
    $uploadDirectory = 'C:\\xampp\\htdocs\\hello\\photo\\'; 

    $target_file = $uploadDirectory . $image;

    if (move_uploaded_file($image_temp, $target_file)) {
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $picname = basename($_FILES['pic']['name']);
        $photo = time() . $picname;

        if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png") {
            echo "Invalid file type. Please upload a JPG, JPEG, or PNG file.";
        } elseif ($_FILES["pic"]["size"] > 2000000) {
            echo "The file size exceeds the limit of 2MB.";
        } else {
            $pic_uploaded = 1;
        }
    }

    if ($pic_uploaded == 1 && $name != "" && $email != "") {
        $ex = "CREATE TABLE IF NOT EXISTS nesly (name varchar(40), email varchar(30), password varchar(20),phno varchar(20),gender varchar(20),course varchar(225),img longblob)";
        
        if ($connection->query($ex) === TRUE) {
            echo "Table created successfully<br>";
        } else {
            echo "Error creating table: " . $connection->error . "<br>";
        }

        $imageData = file_get_contents($target_file);
        
        $sql = "INSERT INTO nesly (name, email, password, phno, gender, course, img) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param("sssssss", $name, $email, $pass, $phone, $gender, $course, $imageData);
        
        if ($stmt->execute()) {
            $_SESSION['c'] = 1;
            header("location:login.php");
        } else {
            $_SESSION['c'] = 0;
            echo "Error inserting data: " . $stmt->error . "<br>";
        }
        $stmt->close();
    } else {
        echo "Data not uploaded, or name and email missing.<br>";
    }
    
    $connection->close();
}
?>
