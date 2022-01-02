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
    DISTINCT        :       MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun verilerini okuma islemi sirasinda belirtilecek olan sutuna veya sutunlara ait tekrar eden verilerin sadece
    ilkini isleme dahil eder digerlerinin islem disinda birakilmasini saglamak icin  kullanilir.
    
    GROUP BY        :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun verilerini okuma islemi sirasinda belirtilecek olan sutuna veya sutunlara ait tekrar eden verilerin 
    gruplandirilmasini saglamak icin  kullanilir.
    
    HAVING          :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun verilerini okuma islemi sirasinda belirtilecek olan sutuna veya sutunlara ait tekrar eden verilerin 
    GROUP BY ifadesi ile gruplandrilmasi sirasinda kosul veya kosullar tanimlamak icin kullanilir.
    */
    /*
    try {
        $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8;","root","root");
        echo "islem basarili <br />";
    } catch (PDOException $error) {
        echo "hata kodu : " . $error->getMessage();
        die();
    }

    $sorgu = $db->query("SELECT DISTINCT sehir FROM kayitlar",PDO::FETCH_ASSOC);
    if ($sorgu) {
        $kayitsayisi = $sorgu->rowCount();
            if ($kayitsayisi>0) {
                foreach ($sorgu as $satirlar) {
                    echo $satirlar["sehir"]."<br />";
                }
            } else {
                echo "kayit yok!";
            }
        } else {
        echo "sorgu hatasi ";
    }
    $db = null;
------------------------------------*/
/*
try {
    $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8;","root","root");
    echo "islem basarili <br /><br />";
} catch (PDOException $error) {
    echo "hata kodu : " . $error->getMessage();
    die();
}

$sorguA = $db->query("SELECT DISTINCT sehir FROM kayitlar",PDO::FETCH_ASSOC);
if ($sorguA) {
    $kayitsayisiA = $sorguA->rowCount();
        if ($kayitsayisiA>0) {
            foreach ($sorguA as $satirlarA) {
                echo $satirlarA["sehir"]."<br />";
                $sorguB = $db->query("SELECT * FROM kayitlar WHERE sehir='".$satirlarA["sehir"] ."'" ,PDO::FETCH_ASSOC);
                if ($sorguB) {
                    $kayitsayisiB = $sorguB->rowCount();
                    if ($kayitsayisiB>0) {
                        foreach ($sorguB as $satirlarB) {
                            echo $satirlarB["adisoyadi"]. "<br />";
                        }                        
                    } else {
                        echo "kayit yok B ";
                    }                                     
                } else {
                    echo "sorgu hatasi B ";
                }
                echo "<br />";
            }
        } else {
            echo "kayit yok!";
        }
    } else {
        echo "sorgu hatasi ";
    }
    $db = null;
    ------------------------------------*/

    try {
        $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8;","root","root");
        echo "islem basarili <br />";
    } catch (PDOException $error) {
        echo "hata kodu : " . $error->getMessage();
        die();
    }

    $sorgu = $db->query("SELECT sehir, SUM(siparistoplamtutarlari) AS toplamtutar,  FROM kayitlar ",PDO::FETCH_ASSOC);
    if ($sorgu) {
        $kayitsayisi = $sorgu->rowCount();
            if ($kayitsayisi>0) {
                foreach ($sorgu as $satirlar) {
                    echo $satirlar["sehir"]." : " .
                    $satirlar["toplamtutar"]."<br /><br />";
                }
            } else {
                echo "kayit yok!";
            }
        } else {
        echo "sorgu hatasi ";
    }
    $db = null;
                ?>
</body>
</html>	