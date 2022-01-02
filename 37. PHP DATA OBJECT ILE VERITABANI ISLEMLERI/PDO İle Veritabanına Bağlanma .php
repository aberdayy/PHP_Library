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
    PDO()           :   Kendisine verilen parametreler dogrultusunda mySQL sunucusuna yeni bir baglanti acmak icin kullanilir.
    PDOException    :   MySQL sunucusuna yeni bir baglanti acma islemi sirasinda olasi bir hata ile karsilasilmasi durumunda hatayi yakalamak icin kullanilir.
    getMessage()    :   MySQL sunucusuna yeni bir baglanti acma islemi sirasinda olasi bir hata ile karsilasilmasi durumunda hata aciklama degerini bularak, buldugu degeri geriye dondurur.
    */
    /*
   $veritabaniHOSTADRESI    =   "localhost";
   $veritabaniKULLANICIADI  =   "root";
   $veritabaniSIFRESI       =   "root";
   $veritabaniADI           =   "RDYmedia";
   
   $veritabanibaglantisi    = new PDO("mysql:host=$veritabaniHOSTADRESI;dbname=$veritabaniADI;charset=UTF8","$veritabaniKULLANICIADI","$veritabaniSIFRESI"); 

    echo "<pre>";
    print_r($veritabanibaglantisi);
    echo "<pre>";

    $veritabanibaglantisi = null;
    -----------------------------------------------------------------------*/
    /*
    $veritabanibaglantisi    = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=UTF8","root","root"); 
 
     echo "<pre>";
     print_r($veritabanibaglantisi);
     echo "<pre>";
     
     $veritabanibaglantisi = null;
     -----------------------------------------------------------------------*/
     /*
     try {
        $veritabanibaglantisi    = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=UTF8","root","root"); 
        echo "veritabanina baglanti kuruldu";
        
     } catch(PDOException $hatakodu){
         echo "veritabani baglanti hatasi<br />";
         echo "hata aciklamasi : " . $hatakodu->getMessage();
         die();
     }

        
    $veritabanibaglantisi = null;
 -----------------------------------------------------------------------*/
 try {
    $veritabanibaglantisi    = new PDO("mysql:host=localhost;dbname=RDYmedia;","root","root"); 
    $veritabanibaglantisi->exec("SET CHARACTER SET UTF8");
    echo "veritabanina baglanti kuruldu";
    
 } catch(PDOException $hatakodu){
     echo "veritabani baglanti hatasi<br />";
     echo "hata aciklamasi : " . $hatakodu->getMessage();
     die();
 }

    
$veritabanibaglantisi = null;


























    ?>
</body>
</html>	