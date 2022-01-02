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
    COUNT   :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun belirtilecek olan sutununun toplam kayit sayisini bulmak icin kullanilir.   
    MIN     :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun belirtilecek olan sutununun en kucuk degerini bulmak icin kullanilir.   
    MAX     :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun belirtilecek olan sutununun en buyuk degerini bulmak icin kullanilir.   
    SUM     :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun belirtilecek olan sutununun tum kayit degerlerinin toplamini bulmak icin kullanilir.   
    AVG     :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun belirtilecek olan sutununun tum kayit degerlerinin ortalamasini bulmak icin kullanilir.   
    */
    /*
    try {
        $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8;","root","root");
        echo "basarili islem <br />";
    } catch (PDOException $error) {
        echo "hata : " . $error->getMessage();
        die();
    }

    $sorgu = $db->query("SELECT COUNT(id) AS satirsayisi FROM kayitlar");
    
    if ($sorgu) {
        $kayit = $sorgu->fetch();
        echo "kayitsaysis : " .$kayit["satirsayisi"];

    } else {
        echo "sorgu hatasi";
    }
    
    

    $db = null;
    ------------------------*/
    /*
    try {
        $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8;","root","root");
        echo "basarili islem <br />";
    } catch (PDOException $error) {
        echo "hata : " . $error->getMessage();
        die();
    }
    
    $sorgu = $db->query("SELECT MIN(yas) AS satirsayisi FROM kayitlar");
    
    if ($sorgu) {
        $kayit = $sorgu->fetch();
        echo "en kucuk yas : " .$kayit["satirsayisi"];

    } else {
        echo "sorgu hatasi";
    }
    
    
    
    $db = null;
    ------------------------*/
    /*
    try {
        $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8;","root","root");
        echo "basarili islem <br />";
    } catch (PDOException $error) {
        echo "hata : " . $error->getMessage();
        die();
    }
    
    $sorgu = $db->query("SELECT SUM(siteyegirissayisi) AS satirsayisi FROM kayitlar");
    
    if ($sorgu) {
        $kayit = $sorgu->fetch();
        echo "toplam tiklama : " .$kayit["satirsayisi"];

    } else {
        echo "sorgu hatasi";
    }
    
    
    
    $db = null;
    ------------------------*/
    try {
        $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8;","root","root");
        echo "basarili islem <br />";
    } catch (PDOException $error) {
        echo "hata : " . $error->getMessage();
        die();
    }
    
    $sorgu = $db->query("SELECT AVG(siteyegirissayisi) AS satirsayisi FROM kayitlar");
    
    if ($sorgu) {
        $kayit = $sorgu->fetch();
        echo "kullanici basina ortlama tiklama : " .$kayit["satirsayisi"];

    } else {
        echo "sorgu hatasi";
    }
    
    
    
    $db = null;


    ?>
</body>
</html>	