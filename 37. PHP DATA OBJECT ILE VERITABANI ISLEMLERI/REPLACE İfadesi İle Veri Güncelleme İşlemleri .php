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
    REPLACE     :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun herhangi  bir kaydini iceren satirdaki veya satirlarindaki sutuna ait veriyi tam veya kismi olarak degistirmek icin
    kullanilir.
    */
    /*
    try {
        $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8;","root","root");
        echo "islem basarili";
    } catch (PDOException $error) {
        echo "hata kodu : "  . $error->getMessage();
        die();
    }
    $degistir = $db->query("UPDATE yorumlar SET yorummetni=REPLACE(yorummetni, 'guzel', 'kotu')");
    if ($degistir) {
        echo "basariyla degisti";
    } else {
        echo "sorgu hatasi";
    }
    

    $db = null;
    --------------------*/
    /*
    try {
        $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8;","root","root");
        echo "islem basarili";
    } catch (PDOException $error) {
        echo "hata kodu : "  . $error->getMessage();
        die();
    }
    $degistir = $db->query("UPDATE yorumlar SET yorummetni=REPLACE(yorummetni, ' ', '\n')");
    if ($degistir) {
        echo "basariyla degisti";
    } else {
        echo "sorgu hatasi";
    }
    
    
    $db = null;
    --------------------*/
    try {
        $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8;","root","root");
        echo "islem basarili";
    } catch (PDOException $error) {
        echo "hata kodu : "  . $error->getMessage();
        die();
    }
    $degistir = $db->query("UPDATE yorumlar SET yorummetni=REPLACE(yorummetni, '\n', 'XXX') where id=2");
    if ($degistir) {
        echo "basariyla degisti";
    } else {
        echo "sorgu hatasi";
    }
    
    
    $db = null;
    
    ?>

</body>
</html>	