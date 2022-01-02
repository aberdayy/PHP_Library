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
    mysqli_autocommit()     :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tabloya islem yapilacagi anda otomatik isleyen gecici islem yapilarini acmak veya kapatmak icin kullanilir.
    
    autocommit()            :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tabloya nesnesel yapi ile islem yapilacagi anda otomatik isleyen gecici islem yapilarini 
    acmak veya kapatmak icin kullanilir.
    
    mysqli_commit()         :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tabloya islem yapilacagi anda onceden mysqli_autocommit metodu
    kullanilarak acilmis olan otomatik isleyen gecici islem yapilari dahilinde isleme alinmis olan query'nin(sorgunun) gecicilikten cikarilarak kalici hale dondurmek icin kullanilir
    
    commit()                :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tabloya nesnesel yapi ile islem yapilacagi anda onceden mysqli_autocommit metodu
    kullanilarak acilmis olan otomatik isleyen gecici islem yapilari dahilinde isleme alinmis olan query'nin(sorgunun) gecicilikten cikarilarak kalici hale dondurmek icin kullanilir
    
    mysqli_rollback()       :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tabloya  islem yapilacagi anda onceden mysqli_autocommit metodu
    kullanilarak acilmis olan otomatik isleyen gecici islem yapilari dahilinde isleme alinmis olan query'nin(sorgunun) gecicilikten cikarilarak islemin geri alinmasi / iptal edilmesi icin kullanilir.
    
    rollback()              :    MySQL sunucusundaki database icerisinde bulunan herhangi bir tabloya nesnesel yapi ile islem yapilacagi anda onceden mysqli_autocommit metodu
    kullanilarak acilmis olan otomatik isleyen gecici islem yapilari dahilinde isleme alinmis olan query'nin(sorgunun) gecicilikten cikarilarak islemin geri alinmasi / iptal edilmesi icin kullanilir.
    */

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
    mysqli_set_charset($veritabanibaglantisi,"UTF8");

    mysqli_autocommit($veritabanibaglantisi,FALSE);
    $sorgubir     =     mysqli_query($veritabanibaglantisi,"UPDATE hesaplar SET hesapbakiyesi=hesapbakiyesi-3000 WHERE id=1");
    $sorguiki     =     mysqli_query($veritabanibaglantisi,"UPDATE hesaplar SET hesapbakiyesi=hesapbakiyesi+3000 WHERE id=4");
    if ($sorgubir and $sorguiki) {
        mysqli_commit($veritabanibaglantisi);
        echo "islem ok";
    }else {
        mysqli_rollback($veritabanibaglantisi);
        echo "islem ok deil";
    }

    mysqli_close($veritabanibaglantisi);












    ?>
</body>
</html>	