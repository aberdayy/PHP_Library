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
    COUNT       :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun belirtilecek olan sutununun toplam kayit sayisini bulmak icin kullanilir.   
    MIN         :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun belirtilecek olan sutununun en kucuk kayit degerini bulmak icin kullanilir.
    MAX         :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun belirtilecek olan sutununun en buyuk kayit degerini bulmak icin kullanilir.
    SUM         :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun belirtilecek olan sutununun tum kayit degerlerininin toplamini bulmak icin kullanilir.
    AVG         :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun belirtilecek olan sutununun tum kayit degelerininin ortlamasini bulmak icin kullanilir.
    */
/*
    $veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
        mysqli_set_charset($veritabanibaglantisi, "UTF8");

        if (mysqli_connect_errno()) {
            echo "veritabani baglanti hatasi!";
            echo "hata aciklamasi : " . mysqli_connect_error() . "<br />";
            die();
        }
            $sorgu = mysqli_query($veritabanibaglantisi, "SELECT COUNT(siparissayisi) AS toplamsatir FROM kayitlar");
                if ($sorgu) {
                        $kayitsayisi = mysqli_num_rows($sorgu);
                            if ($kayitsayisi>0) { 
                                    $kayitlar = mysqli_fetch_assoc($sorgu);
                                        

                                echo "kayit sayisi : " . $kayitlar["toplamsatir"] . "<br />";
                        } else {
                            echo "kayit yok!";
                        } 
                }else{
                    echo "sorgu hatasi!";
                }
    mysqli_close($veritabanibaglantisi);
---------------------------------------------------------------------------------*/
/*
$veritabanibaglantisi = new mysqli("localhost","root","root","RDYmedia");
$veritabanibaglantisi->set_charset("UTF8");

if ($veritabanibaglantisi->connect_errno) {
    echo "veritabani baglanti hatasi!";
    echo "hata aciklamasi : " . $veritabanibaglantisi->connect_error . "<br />";
    die();
}
    $sorgu = $veritabanibaglantisi->query("SELECT COUNT(siparissayisi) AS toplamsatir FROM kayitlar");
    if ($sorgu) {
                $kayitsayisi = $sorgu->num_rows;
                    if ($kayitsayisi>0) { 
                        $kayitlar = $sorgu->fetch_assoc();
                                
                        
                        echo "kayit sayisi : " . $kayitlar["toplamsatir"] . "<br />";
                } else {
                    echo "kayit yok!";
                } 
        }else{
            echo "sorgu hatasi!";
        }
        $veritabanibaglantisi->close();
        ---------------------------------------------------------------------------------*/
        /*
        $veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
        mysqli_set_charset($veritabanibaglantisi, "UTF8");
        
        if (mysqli_connect_errno()) {
            echo "veritabani baglanti hatasi!";
            echo "hata aciklamasi : " . mysqli_connect_error() . "<br />";
            die();
        }
            $sorgu = mysqli_query($veritabanibaglantisi, "SELECT MIN(sehir) AS enkucukdeger FROM kayitlar");
            if ($sorgu) {
                        $kayitsayisi = mysqli_num_rows($sorgu);
                        if ($kayitsayisi>0) { 
                                    $kayitlar = mysqli_fetch_assoc($sorgu);
                                        

                                echo "en kucuk deger : " . $kayitlar["enkucukdeger"] . "<br />";
                            } else {
                            echo "kayit yok!";
                        } 
                }else{
                    echo "sorgu hatasi!";
                }
    mysqli_close($veritabanibaglantisi);
    ---------------------------------------------------------------------------------*/
    /*
    $veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
    mysqli_set_charset($veritabanibaglantisi, "UTF8");
    
    if (mysqli_connect_errno()) {
        echo "veritabani baglanti hatasi!";
        echo "hata aciklamasi : " . mysqli_connect_error() . "<br />";
        die();
    }
        $sorgu = mysqli_query($veritabanibaglantisi, "SELECT MIN(siteyegirissayisi) AS tiklama FROM kayitlar");
        if ($sorgu) {
                    $kayitsayisi = mysqli_num_rows($sorgu);
                        if ($kayitsayisi>0) { 
                                $kayitlar = mysqli_fetch_assoc($sorgu);
                                    

                                echo "en az tiklama sayisi : " . $kayitlar["tiklama"] . "<br />";
                    } else {
                        echo "kayit yok!";
                    } 
            }else{
                echo "sorgu hatasi!";
            }
            mysqli_close($veritabanibaglantisi);
            ---------------------------------------------------------------------------------*/
            /*
            $veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
            mysqli_set_charset($veritabanibaglantisi, "UTF8");
            
            if (mysqli_connect_errno()) {
                echo "veritabani baglanti hatasi!";
                echo "hata aciklamasi : " . mysqli_connect_error() . "<br />";
                die();
            }
                $sorgu = mysqli_query($veritabanibaglantisi, "SELECT MAX(siteyegirissayisi) AS tiklama FROM kayitlar");
                if ($sorgu) {
                            $kayitsayisi = mysqli_num_rows($sorgu);
                                if ($kayitsayisi>0) { 
                                        $kayitlar = mysqli_fetch_assoc($sorgu);
                                            
                                        
                                        echo "en cok tiklama sayisi : " . $kayitlar["tiklama"] . "<br />";
                                    } else {
                                echo "kayit yok!";
                            } 
                    }else{
                        echo "sorgu hatasi!";
                    }
                    mysqli_close($veritabanibaglantisi);
                    ---------------------------------------------------------------------------------*/
                    /*
                    $veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
                    mysqli_set_charset($veritabanibaglantisi, "UTF8");
                    
                    if (mysqli_connect_errno()) {
                        echo "veritabani baglanti hatasi!";
                        echo "hata aciklamasi : " . mysqli_connect_error() . "<br />";
                        die();
                    }
                        $sorgu = mysqli_query($veritabanibaglantisi, "SELECT SUM(siteyegirissayisi) AS tiklama FROM kayitlar");
                        if ($sorgu) {
                                    $kayitsayisi = mysqli_num_rows($sorgu);
                                    if ($kayitsayisi>0) { 
                                                $kayitlar = mysqli_fetch_assoc($sorgu);
                                                    
                                                
                                                echo "toplam tiklama sayisi : " . $kayitlar["tiklama"] . "<br />";
                                            } else {
                                                echo "kayit yok!";
                                    } 
                            }else{
                                echo "sorgu hatasi!";
                            }
                            mysqli_close($veritabanibaglantisi);
                            ---------------------------------------------------------------------------------*/
                            
                    $veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
                    mysqli_set_charset($veritabanibaglantisi, "UTF8");
                    
                    if (mysqli_connect_errno()) {
                        echo "veritabani baglanti hatasi!";
                        echo "hata aciklamasi : " . mysqli_connect_error() . "<br />";
                        die();
                    }
                        $sorgu = mysqli_query($veritabanibaglantisi, "SELECT AVG(siteyegirissayisi) AS tiklama FROM kayitlar");
                        if ($sorgu) {
                                    $kayitsayisi = mysqli_num_rows($sorgu);
                                    if ($kayitsayisi>0) { 
                                                $kayitlar = mysqli_fetch_assoc($sorgu);
                                                    
                                                
                                                echo "ortalama tiklama sayisi : " . $kayitlar["tiklama"] . "<br />";
                                            } else {
                                                echo "kayit yok!";
                                    } 
                            }else{
                                echo "sorgu hatasi!";
                            }
                            mysqli_close($veritabanibaglantisi);
                            
                    
                    ?>
</body>
</html>	