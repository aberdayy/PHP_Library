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
    INSERT INTO         :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tabloya yeni bir kayit satiri ile birlikte verisinide eklemek icin kullanilir.
    */
    /*
    try {
        $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8;","root","root");
        echo "islem basarili <br />";
    } catch (PDOException $error) {
        echo "hata kodu : " . $error->getMessage();
        die();
    }   
    $ekle = $db->query("INSERT INTO kisiler (isim,yas,beceriler,beceriseviyeleri) values ('demo1','66','demodemodemodemo','66,66,66,66') ");
    if ($ekle) {
        echo "kayit eklendi";
    } else {
        echo "soorg hata";
    }
    

    $db = null;
-------------------------*/

try {
    $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8;","root","root");
    echo "islem basarili <br />";
} catch (PDOException $error) {
    echo "hata kodu : " . $error->getMessage();
    die();
}   
$ekle = $db->query("INSERT INTO kisiler (isim,yas,beceriler,beceriseviyeleri) values ('demo2','77','demo2demo2demo2demo2','77,77,77,77,77') ");

if (!$ekle) {
    echo "sorgu hatasi";
}
$sorgu = $db->query("SELECT * FROM kisiler");
if ($sorgu) {
    $kayitsayisi = $sorgu->rowCount();
    if ($kayitsayisi>0) {
        foreach ($sorgu as $satirlar) {
         echo $satirlar["id"] . " = " .   
         $satirlar["isim"] . " | " .   
         $satirlar["yas"] . " | " .   
         $satirlar["beceriler"] . " | " .   
         $satirlar["beceriseviyeleri"] . " <br /> ";    
        }

    } else {
        echo "kayit yok";
    }
    
} else {
    echo "sorgu hatasi";
}



$db = null;
    ?>
</body>
</html>	