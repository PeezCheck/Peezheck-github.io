<?php
session_start();
?>
<html>

<head>
    <title>Ozgecmis</title>
    <link href="ana.css" type="text/css" rel="stylesheet">
    <script src="jsPDF-1.3.2/dist/jspdf.min.js"></script>
    <script src="jquery.js"></script>



    <script>
        function indirPDF() { /*https://www.codexworld.com/convert-html-to-pdf-using-javascript-jspdf/*/
            var doc = new jsPDF();
            var yazi1 = document.getElementById("cvbaslik1").innerHTML;
            var yazi2 = document.getElementById("cvad").innerHTML;
            var yazi3 = document.getElementById("cvsoyad").innerHTML;
            var yazi4 = document.getElementById("cvdtarihi").innerHTML;
            var yazi5 = document.getElementById("cvdyeri").innerHTML;
            var yazi6 = document.getElementById("cvmedenidurum").innerHTML;
            var yazi7 = document.getElementById("cvbaslik2").innerHTML;
            var yazi8 = document.getElementById("cvadres").innerHTML;
            var yazi9 = document.getElementById("cvtelefon").innerHTML;
            var yazi10 = document.getElementById("cvemail").innerHTML;
            var yazi11 = document.getElementById("cvbaslik3").innerHTML;
            var yazi12 = document.getElementById("cvegitim1").innerHTML;
            var yazi13 = document.getElementById("cvegitim2").innerHTML;
            var yazi14 = document.getElementById("cvegitim3").innerHTML;
            var yazi15 = document.getElementById("cvbaslik4").innerHTML;
            var yazi16 = document.getElementById("cvydil").innerHTML;
            var yazi17 = document.getElementById("cvbaslik5").innerHTML;
            var yazi18 = document.getElementById("cvyetkin1").innerHTML;
            var yazi19 = document.getElementById("cvyetkin2").innerHTML;
            
            var pageHeight = doc.internal.pageSize.height;

            doc.setFontSize("15");
            doc.setLineWidth("1000");
            doc.setProperties("title:CV");
            doc.text(15, 30, yazi1);
            doc.text(15, 40, yazi2);
            doc.text(15, 50, yazi3);
            doc.text(15, 60, yazi4);
            doc.text(15, 70, yazi5);
            doc.text(15, 80, yazi6);
            doc.text(15, 90, yazi7);
            doc.text(15, 100, yazi8);
            doc.text(15, 110, yazi9);
            doc.text(15, 120, yazi10);
            doc.text(15, 130, yazi11);
            doc.text(15, 140, yazi12);
            doc.text(15, 160, yazi13);
            doc.text(15, 170, yazi14);
            doc.text(15, 180, yazi15);
            doc.text(15, 190, yazi16);
            doc.text(15, 200, yazi17);
            doc.text(15, 210, yazi18);
            doc.text(15, 220, yazi19);
            doc.save('AkinBalturkcv.pdf');
        }
        function duzenleCV() { /*http://www.developphp.com/video/JavaScript/In-Place-Editing-CMS-Development-HTML-JavaScript-Tutorial*/
            document.getElementById("CV").style.border = "4px solid"
            document.getElementById("CV").style.borderColor = "white"
            document.getElementById("CV").contentEditable = "true";
            document.getElementById("CV").style.backgroundColor = "rgb(240,0,0)";
            document.getElementById("kaydetbtn").style.visibility = "visible";
            document.getElementById("duzenlebtn").disabled = true;
            document.getElementById("indirbtn").disabled = true;
            document.getElementById("duzenlebtn").style.cursor = "not-allowed";
            document.getElementById("indirbtn").style.cursor = "not-allowed";
            document.getElementById("duzenlebtn").style.opacity = "0.4";
            document.getElementById("indirbtn").style.opacity = "0.4";
        }
        function kaydetCV() {
            document.getElementById("cvbaslik1").text+=document.getElementById("cvbaslik1").innerHTML;
            document.getElementById("cvbaslik1").text+=document.getElementById("cvad").innerHTML;
            document.getElementById("cvsoyad").text+=document.getElementById("cvsoyad").innerHTML;
            document.getElementById("cvdtarihi").text+=document.getElementById("cvdtarihi").innerHTML;
            document.getElementById("cvdyeri").text+=document.getElementById("cvdyeri").innerHTML;
            document.getElementById("cvmedenidurum").text+=document.getElementById("cvmedenidurum").innerHTML;
            document.getElementById("cvbaslik2").text+=document.getElementById("cvbaslik2").innerHTML;
            document.getElementById("cvadres").text+=document.getElementById("cvadres").innerHTML;
            document.getElementById("cvtelefon").text+=document.getElementById("cvtelefon").innerHTML;
            document.getElementById("cvemail").text+=document.getElementById("cvemail").innerHTML;
            document.getElementById("cvbaslik3").text+=document.getElementById("cvbaslik3").innerHTML;
            document.getElementById("cvegitim1").text+=document.getElementById("cvegitim1").innerHTML;
            document.getElementById("cvegitim2").text+=document.getElementById("cvegitim2").innerHTML;
            document.getElementById("cvegitim3").text+=document.getElementById("cvegitim3").innerHTML;
            document.getElementById("cvbaslik4").text+=document.getElementById("cvbaslik4").innerHTML;
            document.getElementById("cvydil").text+=document.getElementById("cvydil").innerHTML;
            document.getElementById("cvbaslik5").text+=document.getElementById("cvbaslik5").innerHTML;
            document.getElementById("cvyetkin1").text+=document.getElementById("cvyetkin1").innerHTML;
            document.getElementById("cvyetkin2").text+=document.getElementById("cvyetkin2").innerHTML;
            document.getElementById("kaydetbtn").style.visibility = "hidden";
            comeback();
        }
        function comeback(div) {
            document.getElementById("duzenlebtn").disabled = false;
            document.getElementById("indirbtn").disabled = false;
            document.getElementById("CV").contentEditable = "false";
            document.getElementById("duzenlebtn").style.cursor = "default";
            document.getElementById("indirbtn").style.cursor = "default";
            document.getElementById("CV").style.backgroundColor = "black";
            document.getElementById("duzenlebtn").style.opacity = "1";
            document.getElementById("indirbtn").style.opacity = "1";
        }
    </script>
</head>

<body>
    </br>
    <header>
        <div class="headerlogo">
            <a href="index.php"><img class="logo" src="Resimler/logo.jpg"></a>
        </div>
        <div class="headerbaslik">
            <h1>Akın Baltürk Kişisel Web Sitesi</h1>
        </div>
    </header> <br /> <br /> <br />

    <div id="CV">
        <table id="test1">

            <div class="cv1">
                <h3 id="cvbaslik1">Kisisel Bilgiler</h3>
                <div id="cvad">Adi:Akin </div>
                <div id="cvsoyad">Soyadi:Balturk</div>
                <div id="cvdtarihi">Dogum tarihi:11.05.1999</div>
                <div id="cvdyeri">Dogum yeri :Golcuk</div>
                <div id="cvmedenidurum">Medeni Durum:Bekar</div><br />
                <h3 id="cvbaslik2">Iletisim Bilgileri</h3>
                <div id="cvadres">Adres:xxxxxxxxxxxxxx xxx xxxxxxxx xxxxxx xxxxxxxxx</div>
                <div id="cvtelefon">Telefon:+905xxxxxxxxx </div>
                <div id="cvemail">E-mail:akinbalturk@hotmail.com</div> <br />
                <h3 id="cvbaslik3">Egitim Bilgileri</h3>
                <div id="cvegitim1">2017-2019:Kocaeli Universitesi Teknoloji Fakultesi
                    Bilisim Sistemleri Muhendisligi
                </div>
                <div id="cvegitim2">2013-2017 :Cakabey Anadolu Lisesi</div>
                <div id="cvegitim3">2005-2013 :Piyale Pasa Ilkokulu</div>
            </div>
            <div class="cv1" id="cv2">
                <h3 id=cvbaslik4>Yabanci Dil</h3>
                <div id="cvydil">Ingilizce:B1 Seviye</div> <br />
                <h3 id="cvbaslik5">Yetkinlikler</h3 id="baslik5">
                <div id="cvyetkin1">Bilgisayar:Microsoft Office (Word,Excel,Powerpoint)(Giris)</div>
                <div id="cvyetkin2">Programlama Dilleri:C++,C#,JAVA,SQL,HTML,CSS,JavaScript</div>

            </div>

        </table>
    </div>
    <div id="cvbuttons">
    <?php if($_SESSION["izin"]=="1")
    {?> <button id="duzenlebtn" class="cvbutton" onclick="duzenleCV();">Düzenle</button> <?php }   ?>
    
        <button id="indirbtn" class="cvbutton" onclick="indirPDF();">İndir</button>
        <button id="kaydetbtn" class="cvbutton" style="visibility:hidden;" onclick="kaydetCV();">Kaydet</button>
    </div>


    <hr class="cizgiozgecmis">
    <footer>
        <div class="footeric"><b>İletişim</b> <br /> <br /> 
            E-mail:akinbalturk@hotmail.com <br />
            <br />Telefon:+905xxxxxxxxx <br /> <br />
            Adres:Xxxxxx xxxx xxxxxxx xxxxxxx xxxxxx <br />xxxxxx/Xxxxxx <br /> <br /> <a class="hrefsoru" href="Soru.html">Soru
                Sormak İçin Tıklayınız</a> </div>
        <div class="footeric"><b>Bilgilendirme</b> <br /> <br /> Bu Site Akın Baltürk Tarafından Proje Amaçlı
            Yapılmıştır. <br /> <br />© No Copyright 2019  <br /> <br />
            <a href="https://www.instagram.com/akinbalturkk/" target="_blank"><img class="mainicon" id="instagram1" src="Resimler/instagram.png" ></a>
            <a href="https://www.facebook.com/akinbalturkk" target="_blank"><img class="mainicon"  src="Resimler/facebook.png" ></a>
            <a href="https://twitter.com/Aknbaltrk" target="_blank"><img class="mainicon" src="Resimler/twitter.png" ></a>
        </div>
        <div class="footeric"><b>Site İçinceki Sekmelere buradan ulaşabilirsiniz</b> <br /> <br /> <a href="index.php">Anasayfa</a> <br/> <br/> <a
                href="Misyon.php">Misyon</a> <br /> <br />
            <a href="Vizyon.php">Vizyon</a> <br /> <br /> <a href="Ozgecmis.php">Öz Geçmiş</a> <br /> <br /><a
                href="Sosyalmedya.php">Sosyal Medya</a> <br /> <br />
            <a href="Soru.php">Soru</a> <br /> </div>

    </footer>
</body>

</html>