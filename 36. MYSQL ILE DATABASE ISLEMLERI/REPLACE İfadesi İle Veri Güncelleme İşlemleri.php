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
    REPLACE     :   MySQL sunusundaki database icerisinde bulunan hernagi bir tablonun herhangi bir kaydini iceren satirindaki yada satirlarindaki sutuna ait veriyi tam veya kismi olarak degistirmek icin kullanilir.
    */
/*
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
    mysqli_set_charset($veritabanibaglantisi,"UTF8");

    $guncelle  =    mysqli_query($veritabanibaglantisi, "UPDATE yorumlar SET yorummetni=REPLACE(yorummetni, '<br />', '\n')"); //metindeki <br /> ifadelerini \n yapar!
        if ($guncelle) {
            echo "basarili!";
        }else {
            echo "s h";
        }



    mysqli_close($veritabanibaglantisi);
---------------------------------------------------------------*/

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$veritabanibaglantisi = new mysqli("localhost","root","root","RDYmedia");
$veritabanibaglantisi->set_charset("UTF8");

$guncelle  =    $veritabanibaglantisi->query("UPDATE yorumlar SET yorummetni=REPLACE(yorummetni, '<br />', '\n')"); //metindeki <br /> ifadelerini \n yapar!
    if ($guncelle) {
        echo "basarili!";
    }else {
        echo "s h";
    }



    $veritabanibaglantisi->close();
    ?>
</body>
</html>	