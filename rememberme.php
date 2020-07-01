<?php
session_start();
?>
<?php
$hatamesajı = "Yanlış Bilgi Girişi";
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
        $_SESSION["kadi"]=$row["kisi_kadi"];
        $_SESSION["pw"]=$row["kisi_sifre"];
        $_SESSION["logged"]="true";
    }
} 
else {

    header("Location:loginpage.php");
}
$conn->close();

?>
<html>
<head>

</head>
<body>
    <form method="GET" action="index.php">
        <table>
        <tr>
                <td><hr></td>
        </tr>
        <tr>
            <td><label style="font-size:30;font-weight:bold;" >Uygulama 5</label></td>
        </tr>
        <tr>
                <td><hr></td>
        </tr>
        <tr>
            <td><label>Hoşgeldin <?php echo $kadi ?></label> </td>
            
        <tr>
            <td><input style="background-color: red;color:white;width:75;height:30" type="submit" value="Çıkış Yap"></td>
        </tr>
        </table>
 
    </form>
</body>
</html>