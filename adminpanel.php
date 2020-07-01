<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "PeezCheck61.";
$dbname = "peezcheck";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
<html>

<head>
    <title>Admin Panel</title>
    <link href="ana.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<style>
    .logindiv1 {
        width: 70%;
        height: 120%;
        background-color: rgb(100, 0, 0);
        margin-left: 15%;
        padding-top: 50px;
    }

    .logindiv2 {
        width: 90%;
        height: 90%;
        background-color: white;
        margin-left: 5%;
    }
    table, th, td {
     border: 1px solid black;
     
    }
    th,td {
        padding: 15px;
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
            <div class="container" >
                <div class="row" style="width:50%;margin-top:5%;margin-left:8%;">
                    <div class="col border" style="margin-left: 25%;">
                       <form>
                        <table style="width:100%">
                            <h1 style="margin-left: 65%;font-size:50" >Kişiler</h1></br>
                            <tr>
                                <td>ID</td>
                                <td>AD</td>
                                <td>SOYAD</td>
                                <td>KULLANICI ADI</td>
                                <td>ŞİFRE</td>
                                <td>E-MAİL</td>
                                <td>İZİN</td>

                            </tr>
                        <?php
                        $sql = "SELECT * FROM kisiler";
                        $result = $conn->query($sql);
                        
                        if ($result->num_rows > 0) {
                        
                            while($row = $result->fetch_assoc()) {
                            ?>  
                            
                                <tr>
                                <td><a href="changepermissionpage.php?id=<?php echo $row["kisi_id"] ?>"><?php echo $row["kisi_id"] ?><a></td>
                                <td><?php echo $row["kisi_ad"] ?></td>
                                <td><?php echo $row["kisi_soyad"] ?></td>
                                <td><?php echo $row["kisi_kadi"] ?></td>
                                <td><?php echo $row["kisi_sifre"] ?></td>
                                <td><?php echo $row["kisi_email"] ?></td>
                                <td><?php echo $row["kisi_izin"] ?></td>
                                </tr>
                                <?php
                            }
                            
                        } 
                        else {
                        }
                        
                        $conn->close();
                        ?>

                        </table>

                       </form>
                    
                    </div> </br> 
                    <div style="width: 800;height:500;margin-left:20%">
                        <h1 style="margin-left: 30%;font-size:50" >Duyuru Ekle</h1></br>
                        <form method="POST" action="addduyuru.php">
                           <label>Başlık</label> <input type="text" style="width:60%;margin-left:9%;" name="duyurubaslik">
                            <textarea style="width: 60%; height:60%;margin-left:15%;margin-top:5%;" name="duyurutext"> </textarea>
                            <input type="submit" class="btn btn-primary px-5 btn-block" style="width: 250px;margin-left:29%;margin-top:2%" value="Ekle" name="duyuruekle">
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