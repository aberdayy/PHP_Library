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
    lastinsertId()      :   MySQL sunucusundaki database icerisindee bulunan herhangi bir tabloya yeni bir kayit eklendiginde eklenen son kaydin ID degerini / verisini bulmak icin kullanilir.
    */

    try {
        $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8;","root","root");
         echo "islem basarili <br />";
    } catch (PDOException $error) {
        echo "hata kodu : " . $error->getMessage();
        die();
    }
    $ekle  = $db->query("INSERT INTO siparisler (uyeid,urunadi,urunfiyati) values (1,'apple macbookpro','25000')");
    if ($ekle) {
        echo "kayit eklendi <br />" ;
        echo "eklenen kaydin ID degeri : " . $db->lastinsertId() . "<br /><br /><br />";
    } else {
        echo "ekleme hatasi<br /><br /><br />";
    }
    $sorgu  = $db->query("SELECT * FROM siparisler");
    if ($sorgu) {
        foreach ($sorgu as $kayitlar) {
            echo "id degeri : " . $kayitlar["id"] . "<br />";
            echo "uyeid degeri : " . $kayitlar["uyeid"] . "<br />";
            echo "urun adi degeri : " . $kayitlar["urunadi"] . "<br />";
            echo "urun fiyati degeri : " . $kayitlar["urunfiyati"] . "<br /><br />";
        }
    } else {
        echo "sorgu hatasi";
    }
    

    $db =null;










    ?>
</body>
</html>	