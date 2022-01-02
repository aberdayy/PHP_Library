<?php
// header("Refresh:5")
?>
<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta http-equiv="content-language" content="tr">
<meta charset="utf-8">
<title>baslik</title>
</head>
<body>
    <?php
    /*
    DISTINCT        :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun verilerini okuma islemi sirasinda belirtilecek olan sutuna veya sutunlara ait tekrar eden verilerin sadece
    ilkini isleme dahil ederek digerlerinin islem disinda birakilmasini saglamak icin kullanilir.
    GROUP BY        :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun verilerini okuma islemi sirasinda belirtilecek olan sutuna veya sutunlara ait tekrar eden verilerin 
    gruplandirilmasini saglamak icin kullanilir.
    HAVING          :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun verilerini okuma islemi sirasinda belirtilecek olan sutuna veya sutunlara ait tekrar eden verilerin 
    GROUP BY ifadesi ile gruplandirilmasi sirasinda kosul veya kosullar tanimlamak icin kullanilir.
    */
    /*
        $veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
        mysqli_set_charset($veritabanibaglantisi,"UTF8");
        if (mysqli_connect_errno()) {
            echo "veritabani hatasi!";
            echo "hata kodu : " . mysqli_connect_error() . "<br />";
            die();
        }
        $sorgu = mysqli_query($veritabanibaglantisi,"SELECT DISTINCT sehir FROM kayitlar");
            if ($sorgu) {
                    $kayitsayisi = mysqli_num_rows($sorgu);
                        if ($kayitsayisi>0) {
                            echo "uyelere ait sehirler ; <br /><br /> ";
                            while ($kayitlar=mysqli_fetch_assoc($sorgu)) {
                                echo $kayitlar["sehir"]."<br />";
                            }                       
                            
                        }else {
                            echo "kayit yok!";
                        }
            }else{
                echo "sorgu hatasi!";
            }
        mysqli_close($veritabanibaglantisi);
------------------------------------------------------------------------------------------*/
/*
$veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
mysqli_set_charset($veritabanibaglantisi,"UTF8");
if (mysqli_connect_errno()) {
    echo "veritabani hatasi!";
    echo "hata kodu : " . mysqli_connect_error() . "<br />";
    die();
}
$sorguA = mysqli_query($veritabanibaglantisi,"SELECT DISTINCT sehir FROM kayitlar");
    if ($sorguA) {
            $kayitsayisi = mysqli_num_rows($sorguA);
                if ($kayitsayisi>0) {
                    echo "uyelere ait sehirler ve kayitlari ; <br /><br /> ";

                    while ($kayitlar=mysqli_fetch_assoc($sorguA)) {

                        echo $kayitlar["sehir"]."<br />";

                        $sorguB = mysqli_query($veritabanibaglantisi,"SELECT * FROM kayitlar WHERE sehir='" . $kayitlar["sehir"] . "'");

                            if ($sorguB) {
                                
                                $kayitsayisiB = mysqli_num_rows($sorguB);

                                    if ($kayitsayisiB>0) {

                                            while ($kayitlarB=mysqli_fetch_assoc($sorguB)) {

                                                echo $kayitlarB["adisoyadi"] . "<br />";

                                            }
                                    }else {
                                        echo "kayit yok! B ";
                                    }

                            }else {
                                echo "sorgu hatasi b! ";
                            }
                        echo "<br />";                     
                    }                       
                    
                }else {
                    echo "kayit yok!";
                }
    }else{
        echo "sorgu hatasi!";
    }
mysqli_close($veritabanibaglantisi);
------------------------------------------------------------------------------------------*/
/*
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
mysqli_set_charset($veritabanibaglantisi,"UTF8");
if (mysqli_connect_errno()) {
    echo "veritabani hatasi!";
    echo "hata kodu : " . mysqli_connect_error() . "<br />";
    die();
}
$sorgu = mysqli_query($veritabanibaglantisi,"SELECT sehir,MIN(siparistoplamtutarlari) AS minimumtutar, MAX(siparistoplamtutarlari) AS maximumtutar, SUM(siparistoplamtutarlari) AS toplamtutar FROM kayitlar GROUP BY sehir ");
if ($sorgu) {
    $kayitsayisi = mysqli_num_rows($sorgu);
    if ($kayitsayisi>0) {
        echo "uyelere ait sehirler ; <br /><br /> ";
        while ($kayitlar=mysqli_fetch_assoc($sorgu)) {
            echo $kayitlar["sehir"]. "<br />";
                        echo "minimum siparis tutari : " . $kayitlar["minimumtutar"] ."<br />";
                        echo "maksimum siparis tutari : " . $kayitlar["maximumtutar"] ."<br />";
                        echo "toplam siparis tutari : " . $kayitlar["toplamtutar"] ."<br /><br />";
                        
                    }                       
                    
                }else {
                    echo "kayit yok!";
                }
            }else{
                echo "sorgu hatasi!";
    }
    mysqli_close($veritabanibaglantisi);
    ------------------------------------------------------------------------------------------*/
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
    mysqli_set_charset($veritabanibaglantisi,"UTF8");
    if (mysqli_connect_errno()) {
        echo "veritabani hatasi!";
        echo "hata kodu : " . mysqli_connect_error() . "<br />";
        die();
    }
    $sorgu = mysqli_query($veritabanibaglantisi,"SELECT sehir,MIN(siparistoplamtutarlari) AS minimumtutar, MAX(siparistoplamtutarlari) AS maximumtutar, SUM(siparistoplamtutarlari) AS toplamtutar FROM kayitlar GROUP BY sehir HAVING toplamtutar>0 ");
    if ($sorgu) {
        $kayitsayisi = mysqli_num_rows($sorgu);
        if ($kayitsayisi>0) {
            echo "uyelere ait sehirler ; <br /><br /> ";
            while ($kayitlar=mysqli_fetch_assoc($sorgu)) {
                echo $kayitlar["sehir"]. "<br />";
                            echo "minimum siparis tutari : " . $kayitlar["minimumtutar"] ."<br />";
                            echo "maksimum siparis tutari : " . $kayitlar["maximumtutar"] ."<br />";
                            echo "toplam siparis tutari : " . $kayitlar["toplamtutar"] ."<br /><br />";
                            
                        }                       
                        
                    }else {
                        echo "kayit yok!";
                    }
                }else{
                    echo "sorgu hatasi!";
        }
        mysqli_close($veritabanibaglantisi);
    





    ?>
</body>
</html>	