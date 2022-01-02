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
    TRUNCATE TABLE   :   MySQL sunucusundaki database icerisinde bulunan herhangi  bir tablonun tum iceriklerini bosaltmak / sifirlamak icin kullanilir.
    */

    try {
        $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=UTF8;","root","root");
        echo "basariyla baglanildi <br />";
    } catch (PDOException $error) {
        echo "hata kodu : " . $error->getMessage();
        echo "calistirilamadi";
        die();
    }


    $sorgu = $db->query("TRUNCATE TABLE ornekyedek");

    if ($sorgu) {
        echo "tablo icerigi temizlendi";
    }else{
        echo "basarisiz";
    }






    $db = null;


    


    ?>
</body>
</html>	