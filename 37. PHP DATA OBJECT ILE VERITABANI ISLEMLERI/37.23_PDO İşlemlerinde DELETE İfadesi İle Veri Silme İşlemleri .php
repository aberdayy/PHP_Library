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
    DELETE          :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun herhangi bir kaydini iceren satiri veya satirlari silmek icin kullanilir.
    */

    /*
    try {
        $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8;","root","root");
        echo "bassarili islem <br />";
    } catch (PDOException $error) {
        echo "hata ::: " . $error->getMessage();
        die();
    }   

    $sil = $db->query("DELETE FROM kisiler WHERE id = 18 ");
    if ($sil) {
        echo "basariyla silindi";
    } else {
        echo "sorgu hatasi";
    }
    
    $db = null;
--------------------------------------------*/

    try {
        $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8;","root","root");
        echo "bassarili islem <br />";
    } catch (PDOException $error) {
        echo "hata ::: " . $error->getMessage();
        die();
    }   

    $sil = $db->query("DELETE FROM kisiler WHERE id = 17 ");
    if ($sil) {
    } else {
        echo "sorgu hatasi";
    }

    $db = null;

    
    ?>

</body>
</html>	