<?php 
?>
<html>
<head>
    <title>Kayıt Ol</title>
    <link href="ana.css" type="text/css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="jquery.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
    .logindiv1 {
        width: 40%;
        height: 60%;
        background-color: rgb(100, 0, 0);
        margin-left: 28%;
        padding-top: 50px;
    }

    .logindiv2 {
        width: 90%;
        height: 90%;
        background-color: white;
        margin-left: 5%;
    }

</style>
    <script>
    function signup() {

    }
    </script>
</head>

<body>
<header>
        <div class="headerlogo"><a href="index.php"><img class="logo" src="Resimler/logo.jpg"></a></div>
        <div class="headerbaslik">
            <h1>Akın Baltürk Kişisel Web Sitesi</h1>
        </div>
    </header> </br> <br /> <br />
    
    <div class="container" style="width: 40%;">

        <div class="row" style="background-color: white;">
            <div class="col border text-center p-5 m-1">
                <h1 class="display-5">Kayıt Ol</h1><br/>
                <form action="register.php" method="POST">
                    <div class="form-group" style="width: 250px;margin-left:35%;">

                        Adınız <input type="text" class="form-control"  name="kayıtad"  required>
                    </div>
                    <div class="form-group" style="width: 250px;margin-left:35%;">

                        Soyadınız <input type="text" class="form-control" name="kayıtsoyad"  required >
                    </div>
                    <div class="form-group" style="width: 250px;margin-left:35%;">

                        E-Mailiniz <input type="text" class="form-control" name="kayıtemail"  required >
                    </div>
                    <div class="form-group" style="width: 250px;margin-left:35%;">

                        Kullanıcı Adı <input type="text" class="form-control"  name="kayıtkadi" required  >
                    </div> 
                    
                    <div class="form-group" style="width: 250px;margin-left:35%;">

                        Şifre <input type="password" class="form-control"  name="kayıtsifre" required>
                    </div>
                    
                   <input style="margin-top: 5%;margin-bottom: 5%; width: 250px;margin-left:35%;" type="submit" class="btn btn-primary px-5 btn-block" value="Kayıt Ol">
                </form>
            </div>

        </div>

    </div><br/> <br/> <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
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