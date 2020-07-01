<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "PeezCheck61.";
$dbname = "peezcheck";

$kisiid = $_GET['id'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM kisiler where  kisi_id='$kisiid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        $id = $row["kisi_id"];
        $izin = $row["kisi_izin"];
    }
} else {
}
$conn->close();



?>
?>
<html>

<head>
    <title>İzin Değiştir</title>
    <link href="ana.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<style>
    .logindiv1 {
        width: 25%;
        height: 40%;
        background-color: rgb(100, 0, 0);
        margin-left: 40%;
        padding-top: 50px;
    }

    .logindiv2 {
        width: 90%;
        height: 90%;
        background-color: white;
        margin-left: 5%;
    }
</style>

<body>
    <header>
        <div class="headerlogo"><a href="index.php"><img class="logo" src="Resimler/logo.jpg"></a></div>
        <div class="headerbaslik">
            <h1>Akın Baltürk Kişisel Web Sitesi</h1>
        </div>
    </header> </br> <br /> <br />
    <div class='logindiv1'>
        <div class="logindiv2">
            <div class="container">
                <div class="row" style="width:50%;height:50%;margin-top:8%;margin-left:8%;">
                    <div class="col border text-center p-5 m-1">

                        <form action="changepermission.php" method="POST">
                            <div class="form-group" style="width: 250px;">

                                ID <input type="text" class="form-control" value="<?php echo $id ?>" name="id" required>
                            </div>
                            <div class="form-group" style="width: 250px;">

                                İzin Bilgisi <input type="text" class="form-control" value="<?php echo $izin ?>" name="izin" required>
                            </div>

                            <input type="submit" class="btn btn-primary px-5 btn-block" style="width: 250px;" value="Değiştir">


                        </form>
                    </div>

                </div>

            </div>

        </div>
    </div>
    <hr class="cizgigame">
    <footer>
        <div class="footeric"><b>İletişim</b> <br /> <br />
            E-mail:akinbalturk@hotmail.com <br />
            <br />Telefon:+905xxxxxxxxx <br /> <br />
            Adres:Xxxxxx xxxx xxxxxxx xxxxxxx xxxxxx <br />xxxxxx/Xxxxxx <br /> <br /> <a class="hrefsoru" href="Soru.html">Soru
                Sormak İçin Tıklayınız</a> </div>
        <div class="footeric"><b>Bilgilendirme</b> <br /> <br /> Bu Site Akın Baltürk Tarafından Proje Amaçlı
            Yapılmıştır. <br /> <br />© No Copyright 2019 <br /> <br />
            <a href="https://www.instagram.com/akinbalturkk/" target="_blank"><img class="mainicon" id="instagram1" src="Resimler/instagram.png"></a>
            <a href="https://www.facebook.com/akinbalturkk" target="_blank"><img class="mainicon" src="Resimler/facebook.png"></a>
            <a href="https://twitter.com/Aknbaltrk" target="_blank"><img class="mainicon" src="Resimler/twitter.png"></a>
        </div>
        <div class="footeric"><b>Site İçinceki Sekmelere buradan ulaşabilirsiniz</b> <br /> <br /> <a href="index.php">Anasayfa</a> <br /> <br /> <a href="Misyon.php">Misyon</a> <br /> <br />
            <a href="Vizyon.php">Vizyon</a> <br /> <br /> <a href="Ozgecmis.php">Öz Geçmiş</a> <br /> <br /><a href="Sosyalmedya.php">Sosyal Medya</a> <br /> <br />
            <a href="Soru.php">Soru</a> <br /> </div>

    </footer>
</body>

</html>