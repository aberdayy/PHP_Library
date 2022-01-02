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
    UPDATE      :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun herhangi bir kaydini icceren satirindaki sutuna veya sutunlara ait veriyi guncellemek icin kullanilir.

                !!!!!!!!!!!!!!!!!!!!!!!!!!!WHERE TANIMLANMAZ ISE BUTUN DB VERILERINI SIFIRLAR !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

    */
    /*
    try {
        $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8;","root","root");
         echo "islem basarili <br />";
    } catch (PDOException $error) {
        echo "hata kodu : " . $error->getMessage();
        die();
        
    }
    $guncelle = $db->query("UPDATE kisiler SET isim='111',yas='111',beceriler='111',beceriseviyeleri='111' where id=8");
    if ($guncelle) {
        echo "kayitlar guncellendi";
    } else {
        echo "sorgu hatasi";
    }
    

    $db = null;
-------------------*/               

try {
    $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8;","root","root");
     echo "islem basarili <br />";
} catch (PDOException $error) {
    echo "hata kodu : " . $error->getMessage();
    die();
    
}
$guncelle = $db->query("UPDATE kisiler SET isim='111',yas='111',beceriler='111',beceriseviyeleri='111' where id=8");
if ($guncelle) {
    echo "kayitlar guncellendi";
} else {
    echo "sorgu hatasi";
}


$db = null;


    ?>
</body>
</html>	