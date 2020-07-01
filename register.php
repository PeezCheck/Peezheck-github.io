<?php

$servername = "localhost";
$username = "root";
$password = "PeezCheck61.";
$dbname = "peezcheck";

$kullanici_ad = $_POST["kayıtad"];
$kullanici_soyad = $_POST["kayıtsoyad"];
$kullanici_kadi = $_POST["kayıtkadi"];
$kullanici_sifre = $_POST["kayıtsifre"];
$kullanici_email = $_POST["kayıtemail"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO kisiler (kisi_ad, kisi_soyad, kisi_kadi, kisi_sifre, kisi_email, kisi_izin)
VALUES ('$kullanici_ad', '$kullanici_soyad', '$kullanici_kadi', '$kullanici_sifre','$kullanici_email', 2)";

if ($conn->query($sql) === TRUE) {
    header("Location:loginpage.php");
} else {
    header("Location:registerpage.php");
}

$conn->close();

?> 