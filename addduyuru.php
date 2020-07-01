<?php

$servername = "localhost";
$username = "root";
$password = "PeezCheck61.";
$dbname = "peezcheck";

$baslik = $_POST["duyurubaslik"];
$text = $_POST["duyurutext"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO duyurular (duyuru_baslik,duyuru_text)
VALUES ('$baslik','$text')";

if ($conn->query($sql) === TRUE) {
    header("Location:index.php");
} else {
    
}
$conn->close();

?> 