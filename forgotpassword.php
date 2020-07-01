<?php

$servername = "localhost";
$username = "root";
$password = "PeezCheck61.";
$dbname = "peezcheck";

$fpassword_kadi = $_POST["fpasswordkadi"];
$fpassword_email = $_POST["fpasswordemail"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM kisiler where kisi_kadi='$fpassword_kadi' and kisi_email='$fpassword_email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    function random_str(    //https://stackoverflow.com/questions/6101956/generating-a-random-password-in-php
        $length,
        $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'
    ) {
        $str = '';
        $max = mb_strlen($keyspace, '8bit') - 1;
        if ($max < 1) {
            throw new Exception('$keyspace must be at least two characters long');
        }
        for ($i = 0; $i < $length; ++$i) {
            $str .= $keyspace[random_int(0, $max)];
        }
        return $str;
    }
    $headers ='From: php.mailing.test@gmail.com' . "\r\n" .  //https://www.youtube.com/watch?v=3mCRD4-tU2o
                'MIME-Version:1.0' . "\r\n" . 
                'Content-Type: text/html; charset=utf-8';
    $abc = mail($fpassword_email,"Yeni Şifre",$str,$headers);
    var_dump($abc);

    header("Location:forgotpasswordpage.php");
    
} 
else {

    
}
$conn->close();

?> 