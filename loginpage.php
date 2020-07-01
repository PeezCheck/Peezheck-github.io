<?php
session_start();
?>
<html>

<head>
    <title>Kullanıcı Giriş</title>
    <link href="ana.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
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
                <div class="row" style="width:50%;margin-top:5%;margin-left:8%">
                    <div class="col border text-center p-5 m-1">
                        <h1 class="display-5">Giriş</h1><br />
                        <form action="login.php" method="POST">
                            <div class="form-group" style="width: 250px;margin-left:29%">

                                Kullanıcı Adı <input type="text" class="form-control" value="<?php if(isset($_COOKIE["uye_giris"])) {echo $_COOKIE["uye_giris"];}  ?>"  name="kullaniciadi" required>
                            </div>
                            <div class="form-group" style="width: 250px;margin-left:29%">

                                Şifre <input type="password" value="<?php if(isset($_COOKIE["uye_sifre"])) {echo $_COOKIE["uye_sifre"];}  ?>" class="form-control" name="sifre">
                            </div> <br />
                            <div class="form-group">
                                <input type="checkbox" <?php if(isset($_COOKIE["uye_giris"])) {?> checked <?php } ?> name="hatırla"> <label>Beni Hatırla</label>
                                <a href="forgotpasswordpage.php"><label>Şifremi Unuttum</label></a>
                            </div>
                            <input type="submit" class="btn btn-primary px-5 btn-block" style="width: 250px;margin-left:29%" value="Giriş Yap" name="Gonder">
                            </br>
                            <a href="registerpage.php"><input class="btn btn-primary px-5 btn-block" style="width: 250px;margin-left:29%" value="Kayıt ol" name="kayıt"></a>
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