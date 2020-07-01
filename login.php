<?php
session_start();
?>
<?php
$servername = "localhost";
$username = "root";
$password = "PeezCheck61.";
$dbname = "peezcheck";

$kullanicigiris_kadi = $_POST["kullaniciadi"];
$kullanicigiris_sifre = $_POST["sifre"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM kisiler where kisi_kadi='$kullanicigiris_kadi' and kisi_sifre='$kullanicigiris_sifre'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        $_SESSION["kullanici_ad"]=$row["kisi_ad"];
        $_SESSION["kullanici_soyad"]=$row["kisi_soyad"];
        $_SESSION["kadi"] =$row["kisi_kadi"];
        $_SESSION["pw"] =$row["kisi_sifre"];
        $_SESSION["izin"] = $row["kisi_izin"];
        $izin = $row["kisi_izin"];
        $_SESSION["logged"]="true";
        
    }
    if($_SESSION["logged"])
    {
        if(!empty($_POST["hatırla"]))
    {
        setcookie ("uye_giris",$_SESSION["kadi"]);
        setcookie ("uye_sifre",$_SESSION["pw"]);
    }
    else
    {
        if(isset($_COOKIE["uye_giris"]))
        {
            setcookie ("uye_giris","");
        }
        if(isset($_COOKIE["uye_sifre"]))
        {
            setcookie ("uye_sifre","");
        }
    }
    }
    
    if($izin==1)
    header("Location:adminpanel.php");
    else if($izin==2)
    header("Location:index.php");
} 
else {

    header("Location:loginpage.php");
}
$conn->close();



?>