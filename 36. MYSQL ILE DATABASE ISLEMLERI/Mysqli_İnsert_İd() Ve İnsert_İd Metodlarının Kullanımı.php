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
    mysqli_insert_id()      :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tabloya yeni bir kayit eklendiginde, eklenen son kaydin ID degerini bulmak icin kullanilir.
    insert_id               :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tabloya nesnesel yapi ile yeni bir kayit eklendiginde, eklenen son kaydin ID degerini bulmak icin kullanilir.   
    */
    /*
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
    mysqli_set_charset($veritabanibaglantisi,"UTF8");

    $ekle = mysqli_query($veritabanibaglantisi,"INSERT INTO uyeler (adisoyadi,emailadresi,sifre,telefon,yas,cinsiyet,sehir) values ('demo demo','demo@demo.com','1234546767','12345667890', '18','erkek','kayseri')");
        if ($ekle) {
            echo "kayit basariyla yapildi <br />";
            echo "eklenen kaydin ID'si : " , mysqli_insert_id($veritabanibaglantisi);
        } else {
            echo "sorgu hatasi";
        }
        

    mysqli_close($veritabanibaglantisi);
-----------------------------*/

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$veritabanibaglantisi = new mysqli("localhost","root","root","RDYmedia");
$veritabanibaglantisi->set_charset("UTF8");

$ekle = $veritabanibaglantisi->query("INSERT INTO uyeler (adisoyadi,emailadresi,sifre,telefon,yas,cinsiyet,sehir) values ('demo demo','demo@demo.com','1234546767','12345667890', '18','erkek','kayseri')");
    if ($ekle) {
        echo "kayit basariyla yapildi <br />";
        echo "eklenen kaydin ID'si : " , $veritabanibaglantisi->insert_id;
    } else {
        echo "sorgu hatasi";
    }
    

    $veritabanibaglantisi->close();
    ?>
</body>
</html>	