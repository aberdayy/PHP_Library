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
    mysqli_affected_rows()      :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tabloya baglanilarak islem yapildiginda etkilenen kayit sayisini bulmak icin kullanilir.
    affected_rows               :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tabloya nesnesel yapi ile baglanilarak islem yapildiginda etkilenen kayit sayisini bulmak icin kullanilir.
                                            NESNESEL YAPI ILE AYNI KULLANIMA SAHIPTIR!!!!
    */
    /*
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
   $veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
   mysqli_set_charset($veritabanibaglantisi,"UTF8");

   $sorgu = mysqli_query($veritabanibaglantisi,"SELECT * FROM uyeler WHERE uyeler.yas=18");
        if ($sorgu) {
           echo "okundu. ";
                echo "islemde etkilenen kayit sayisi : " . mysqli_affected_rows($veritabanibaglantisi);

        }else{
            echo "s h";
        }
    mysqli_close($veritabanibaglantisi);
----------------------------------------------------------------*/
/*
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
    mysqli_set_charset($veritabanibaglantisi,"UTF8");
    
    $sorgu = mysqli_query($veritabanibaglantisi,"INSERT INTO uyeler 
    (adisoyadi,emailadresi,sifre,telefon,yas,cinsiyet,sehir)
     values 
     ('deneme1 deneme1','deneme1@gmai.com','deneme1','0987654321','19','erkek','deneme1'),
     ('deneme2 deneme2','deneme2@gmai.com','deneme2','0987654321','19','erkek','deneme2'),      
     ('deneme3 deneme3','deneme3@gmai.com','deneme3','0987654321','19','erkek','deneme3')");// ayni anda 3 kayit ekler!!
     if ($sorgu) {
            echo "eklendi. ";
            echo "islemde etkilenen kayit sayisi : " . mysqli_affected_rows($veritabanibaglantisi);
            
         }else{
             echo "s h";
         }
     mysqli_close($veritabanibaglantisi);
     ----------------------------------------------------------------*/
     /*
     mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
     $veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
     mysqli_set_charset($veritabanibaglantisi,"UTF8");
     
     $sorgu = mysqli_query($veritabanibaglantisi,"UPDATE uyeler SET adisoyadi='degisti', sifre='xxxx' WHERE id>=2 AND id<=5");
      if ($sorgu) {
             echo "guncellendi. ";
             echo "islemde etkilenen kayit sayisi : " . mysqli_affected_rows($veritabanibaglantisi);
             
          }else{
              echo "s h";
            }
            mysqli_close($veritabanibaglantisi);
            ----------------------------------------------------------------*/
            /*
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
            $veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
            mysqli_set_charset($veritabanibaglantisi,"UTF8");
     
     $sorgu = mysqli_query($veritabanibaglantisi,"UPDATE uyeler SET adisoyadi=REPLACE(adisoyadi,'degisti','guncellendi'), sifre=REPLACE(sifre,'xxxx','ataberk') WHERE id>=2 AND id<=5");
      if ($sorgu) {
             echo "degisti. ";
             echo "islemde etkilenen kayit sayisi : " . mysqli_affected_rows($veritabanibaglantisi);
             
            }else{
              echo "s h";
            }
    mysqli_close($veritabanibaglantisi);
    ----------------------------------------------------------------*/
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
    mysqli_set_charset($veritabanibaglantisi,"UTF8");

$sorgu = mysqli_query($veritabanibaglantisi,"DELETE FROM uyeler WHERE id>=2 AND id<=5");
if ($sorgu) {
     echo "silindi. ";
     echo "islemde etkilenen kayit sayisi : " . mysqli_affected_rows($veritabanibaglantisi);
     
    }else{
      echo "s h";
    }
mysqli_close($veritabanibaglantisi);
    
            
    
    
    
    ?>
</body>
</html>	