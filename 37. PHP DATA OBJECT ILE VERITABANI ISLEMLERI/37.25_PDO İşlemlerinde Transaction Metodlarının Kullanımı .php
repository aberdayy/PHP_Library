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
    begin_transaction()     :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tabloya islem yapilacagi anda otomatik isleyen gecici islem yapilarini acmak veya kapatmak icin kullanilir.
    
    commit()                :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tabloya islem yapilacagi anda daha oonceden begin_transaction metodu kullanilarak acilmis olan otomatik 
    isleyen gecici islem yapilari dahilinde isleme alinmis olan querynin gecicilikten cikarak kalici hale dondurulmesi icin kullanilir.
    
    rollback()              :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tabloya islem yapilacagi anda daha oonceden begin_transaction metodu kullanilarak acilmis olan otomatik 
    isleyen gecici islem yapilari dahilinde isleme alinmis olan querynin gecicilikten cikartilarak islemin geri alinmasi icin kullanilir.
    */
    try {
        $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8;","root","root");
        echo "islem basarili <br />";
    } catch (PDOException $th) {
        echo "error : " . $th->getMessage() . "<br />";
        die();
    }
    $db->begin_Transaction();   //once hafizada tutar sonra yazar
    $guncellebir = $db->prepare("UPDATE hesaplar SET hesapbakiyesi=hesapbakiyesi-1000 WHERE id=1");
    $guncellebir->execute();
    $guncelleiki = $db->prepare("UPDATE hesaplar SET hesapbakiyesi=hesapbakiyesi+1000 WHERE id=3");
    $guncelleiki->execute();
    if ($guncellebir and $guncelleiki) {
        echo "islemler basarili! <br /><br />";

    } else {
        $db->rollBack();
     echo "sorgu hatasi !";   
    }
    $sorgu = $db->prepare("SELECT * FROM hesaplar");
    $sorgu->execute();
    if ($sorgu) {
            $kayitsayisi = $sorgu->rowCount();
                if ($kayitsayisi>0) {
                    echo "kayit sayisi : " .  $kayitsayisi . "<br /><br />";
                    foreach ($sorgu as $satirlar) {   
                    echo $satirlar["id"] . " = " .$satirlar["adisoyadi"] . " : " .$satirlar["hesapbakiyesi"] . " <br />";
                }
                } else {
                    echo " kayit yok!";
                }
            
    } else {
        echo "sorgu hatasi ";
    }
    



    $db = null;
    
    
    
    ?>





</body>
</html>	