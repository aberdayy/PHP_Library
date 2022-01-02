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
    UPDATE      :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun herhangi bir kaydini iceren satirdaki sutuna veya sutunlara ait veriyi yada verileri guncellemek icin kullanilir.
    */
    /*
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
    mysqli_set_charset($veritabanibaglantisi,"UTF8");
    $guncelle = mysqli_query($veritabanibaglantisi,"UPDATE uyeler SET adisoyadi='A1' ,  sifre='A3' ");
    //dikkat bu sorguda tablodaki tum sonuclar guncellenecektir!
    if ($guncelle) {
        echo "kayit guncellendi";
    } else {
        echo "sorgu hatasi";
    }
   
  mysqli_close($veritabanibaglantisi);
----------------------------------------------------------------------*/

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
mysqli_set_charset($veritabanibaglantisi,"UTF8");
$guncelle = mysqli_query($veritabanibaglantisi,"UPDATE uyeler SET adisoyadi='A1' ,  sifre='A3' WHERE id=10 ");
if ($guncelle) {
    echo "kayit guncellendi";
} else {
    echo "sorgu hatasi";
}

mysqli_close($veritabanibaglantisi);



    ?>
</body>
</html>	