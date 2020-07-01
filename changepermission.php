<?php
session_start();
?>
<?php
$servername = "localhost";
$username = "root";
$password = "PeezCheck61.";
$dbname = "peezcheck";

$id = $_POST["id"];
$yenizin = $_POST["izin"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE kisiler SET kisi_izin=$yenizin where  kisi_id='$id'";

if ($conn->query($sql) === TRUE) {
    header("Location:adminpanel.php");
  } else {
    echo "Hata: ";
  }


$conn->close();



?>