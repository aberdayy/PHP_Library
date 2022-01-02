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
    DELETE  :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun herhangi bir kaydini iceren satiri veya satirlari silmek icin kullanilir.
    */
/*
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
    mysqli_set_charset($veritabanibaglantisi,"UTF8");

    $sil = mysqli_query($veritabanibaglantisi,"DELETE FROM uyeler WHERE uyeler.id=10 ");
        if ($sil) {
            echo "basrili";
        }else {
            echo "basarisiz";
        }
    mysqli_close($veritabanibaglantisi);
----------------------------------------------------------*/
    
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
    mysqli_set_charset($veritabanibaglantisi,"UTF8");

    $sil = mysqli_query($veritabanibaglantisi,"DELETE FROM uyeler WHERE uyeler.id=10 ");
        if ($sil) {
            echo "basrili";
        }else {
            echo "basarisiz";
        }
    mysqli_close($veritabanibaglantisi);
    
    
    
    
    
    
    
    ?>
</body>
</html>	