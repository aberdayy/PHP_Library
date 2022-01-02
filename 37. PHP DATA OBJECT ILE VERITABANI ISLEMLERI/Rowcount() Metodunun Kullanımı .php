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
    rowCount()        :     MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun toplam sayisini bulmak veya islem yapildiginda etkilenen kayit sayisini bulmak icin kullanilir.
    */
    /*
    try {
        $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8","root","root");
        echo "islem okay <br /><br />";
    } catch (PDOEXception $error) {
        echo $error->getMessage();
        die();
    }
    $sorgu = $db->query("SELECT*FROM uyeler",PDO::FETCH_OBJ);
    if ($sorgu) {
        $kayitsayisi = $sorgu->rowCount();
        echo $kayitsayisi;
    } else {
        echo "sorgu hatasi";
    }
    

    $sb=null;
------------------------------*/

try {
    $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8","root","root");
    echo "islem okay <br /><br />";
} catch (PDOEXception $error) {
    echo $error->getMessage();
    die();
}
$sorgu = $db->query("SELECT*FROM uyeler WHERE cinsiyet='erkek' ",PDO::FETCH_OBJ);
if ($sorgu) {
    $kayitsayisi = $sorgu->rowCount();
    echo $kayitsayisi;
} else {
    echo "sorgu hatasi";
}


$sb=null;

    ?>
</body>
</html>	