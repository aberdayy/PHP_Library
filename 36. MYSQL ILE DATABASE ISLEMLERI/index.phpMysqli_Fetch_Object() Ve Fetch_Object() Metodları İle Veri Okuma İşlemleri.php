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
    mysqli_fetch_object()   :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun tum verilerini nesne halinde okumak icin kullanilir.
    fetch_object()          :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun nesnesel yapi ile tum verilerini nesne halinde okumak icin kullanilir.
    */
    /*
    $veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
    mysqli_set_charset($veritabanibaglantisi, "UTF8");
    if (mysqli_connect_errno()) { 
        echo "veritabani baglanti hatasi";
        echo "hata aciklamasi : " . mysqli_connect_error() . "<br />";
        die(); 
    }
    $sorgu = mysqli_query($veritabanibaglantisi , "SELECT * FROM kisiler");
    if ($sorgu) {
       $kayit = mysqli_fetch_object($sorgu);

        echo "<pre>";
        print_r($kayit);
        echo "<pre>";



    } else {
      echo "sorgu hatasi"; 
    }
    
mysqli_close($veritabanibaglantisi);
-----------------------------------------------------------*/
/*
$veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
    mysqli_set_charset($veritabanibaglantisi, "UTF8");
    if (mysqli_connect_errno()) { 
        echo "veritabani baglanti hatasi";
        echo "hata aciklamasi : " . mysqli_connect_error() . "<br />";
        die(); 
    }
    $sorgu = mysqli_query($veritabanibaglantisi , "SELECT * FROM kisiler");
    if ($sorgu) {
        $kayit = mysqli_fetch_object($sorgu);
        
       echo "kayit id degeri : " . $kayit->id."<br />";
       echo "kayit isim degeri : " . $kayit->isim."<br />";
       echo "kayit yas degeri : " . $kayit->yas."<br />";
       echo "kayit beceriler degeri : " . $kayit->beceriler."<br />";
       echo "kayit beceriseviyeleri degeri : " . $kayit->beceriseviyeleri."<br />";
       
    } else {
        echo "sorgu hatasi"; 
    }
    
    mysqli_close($veritabanibaglantisi);
    -----------------------------------------------------------*/
    /*
    $veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
    mysqli_set_charset($veritabanibaglantisi, "UTF8");
    if (mysqli_connect_errno()) { 
        echo "veritabani baglanti hatasi";
        echo "hata aciklamasi : " . mysqli_connect_error() . "<br />";
        die(); 
    }
    $sorgu = mysqli_query($veritabanibaglantisi , "SELECT * FROM kisiler");
    if ($sorgu) {
        while($kayit = mysqli_fetch_object($sorgu)){
            
       echo "kayit id degeri : " . $kayit->id."<br />";
       echo "kayit isim degeri : " . $kayit->isim."<br />";
       echo "kayit yas degeri : " . $kayit->yas."<br />";
       echo "kayit beceriler degeri : " . $kayit->beceriler."<br />";
       echo "kayit beceriseviyeleri degeri : " . $kayit->beceriseviyeleri."<br /><br />";
    }
} else {
    echo "sorgu hatasi"; 
}

mysqli_close($veritabanibaglantisi);
-----------------------------------------------------------*/
/*
$veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
mysqli_set_charset($veritabanibaglantisi, "UTF8");
if (mysqli_connect_errno()) { 
    echo "veritabani baglanti hatasi";
    echo "hata aciklamasi : " . mysqli_connect_error() . "<br />";
    die(); 
}
$sorgu = mysqli_query($veritabanibaglantisi , "SELECT isim,beceriler FROM kisiler");
if ($sorgu) {
    
    while($kayit = mysqli_fetch_object($sorgu)){    
   echo "kayit isim degeri : " . $kayit->isim."<br />";
   echo "kayit beceriler degeri : " . $kayit->beceriler."<br />";
}
} else {
    echo "sorgu hatasi"; 
}

mysqli_close($veritabanibaglantisi);

-----------------------------------------------------------*/
/*
$veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
mysqli_set_charset($veritabanibaglantisi, "UTF8");
if (mysqli_connect_errno()) { 
    echo "veritabani baglanti hatasi";
    echo "hata aciklamasi : " . mysqli_connect_error() . "<br />";
    die(); 
}
$sorgu = mysqli_query($veritabanibaglantisi , "SELECT isim AS kullaniciadi, beceriler AS kullaniciyetenegi FROM kisiler");
if ($sorgu) {
    
    while($kayit = mysqli_fetch_object($sorgu)){    
   echo "kayit isim degeri : " . $kayit->kullaniciadi."<br />";
   echo "kayit beceriler degeri : " . $kayit->kullaniciyetenegi."<br />";
}
} else {
    echo "sorgu hatasi"; 
}

mysqli_close($veritabanibaglantisi);
-----------------------------------------------------------*/
//-----------------------------------------------------------*/-----------------------------------------------------------*/-----------------------------------------------------------*/
/*
$veritabanibaglantisi = new mysqli ("localhost","root","root","RDYmedia");
$veritabanibaglantisi->set_charset("UTF8");
if ($veritabanibaglantisi->connect_errno) { 
    echo "veritabani baglanti hatasi";
    echo "hata aciklamasi : " . $veritabanibaglantisi->connect_error . "<br />";
    die(); 
}
$sorgu = $veritabanibaglantisi->query( "SELECT * FROM kisiler");
if ($sorgu) {
    $kayit = $sorgu->fetch_object();
    
    echo "<pre>";
    print_r($kayit);
    echo "<pre>";

    
    
} else {
    echo "sorgu hatasi"; 
}

$veritabanibaglantisi->close();
-----------------------------------------------------------*/
/*
$veritabanibaglantisi = new mysqli ("localhost","root","root","RDYmedia");
$veritabanibaglantisi->set_charset("UTF8");
if ($veritabanibaglantisi->connect_errno) { 
    echo "veritabani baglanti hatasi";
    echo "hata aciklamasi : " . $veritabanibaglantisi->connect_error . "<br />";
    die(); 
}
$sorgu = $veritabanibaglantisi->query( "SELECT * FROM kisiler");
if ($sorgu) {
    $kayit = $sorgu->fetch_object();
     
    echo "kayit id degeri : " . $kayit->id."<br />";
    echo "kayit isim degeri : " . $kayit->isim."<br />";
    echo "kayit yas degeri : " . $kayit->yas."<br />";
    echo "kayit beceriler degeri : " . $kayit->beceriler."<br />";
    echo "kayit beceriseviyeleri degeri : " . $kayit->beceriseviyeleri."<br />";
    
    
    
} else {
    echo "sorgu hatasi"; 
}

$veritabanibaglantisi->close();
-----------------------------------------------------------*/
/*
$veritabanibaglantisi = new mysqli ("localhost","root","root","RDYmedia");
$veritabanibaglantisi->set_charset("UTF8");
if ($veritabanibaglantisi->connect_errno) { 
    echo "veritabani baglanti hatasi";
    echo "hata aciklamasi : " . $veritabanibaglantisi->connect_error . "<br />";
    die(); 
}
$sorgu = $veritabanibaglantisi->query( "SELECT * FROM kisiler");
if ($sorgu) {
    while($kayit = $sorgu->fetch_object()){
        
        
        echo "kayit id degeri : " . $kayit->id."<br />";
        echo "kayit isim degeri : " . $kayit->isim."<br />";
        echo "kayit yas degeri : " . $kayit->yas."<br />";
        echo "kayit beceriler degeri : " . $kayit->beceriler."<br />";
        echo "kayit beceriseviyeleri degeri : " . $kayit->beceriseviyeleri."<br />";
    }
    
    
} else {
    echo "sorgu hatasi"; 
}

$veritabanibaglantisi->close();
-----------------------------------------------------------*/
/*
$veritabanibaglantisi = new mysqli ("localhost","root","root","RDYmedia");
$veritabanibaglantisi->set_charset("UTF8");
if ($veritabanibaglantisi->connect_errno) { 
    echo "veritabani baglanti hatasi";
    echo "hata aciklamasi : " . $veritabanibaglantisi->connect_error . "<br />";
    die(); 
}
$sorgu = $veritabanibaglantisi->query( "SELECT isim,beceriler FROM kisiler");
if ($sorgu) {
    while($kayit = $sorgu->fetch_object()){
        
        
        echo "kayit isim degeri : " . $kayit->isim."<br />";
        echo "kayit beceriler degeri : " . $kayit->beceriler."<br />";
    }
    
    
} else {
    echo "sorgu hatasi"; 
}

$veritabanibaglantisi->close();
-----------------------------------------------------------*/

$veritabanibaglantisi = new mysqli ("localhost","root","root","RDYmedia");
$veritabanibaglantisi->set_charset("UTF8");
if ($veritabanibaglantisi->connect_errno) { 
    echo "veritabani baglanti hatasi";
    echo "hata aciklamasi : " . $veritabanibaglantisi->connect_error . "<br />";
    die(); 
}
$sorgu = $veritabanibaglantisi->query( "SELECT isim AS kullaniciadi,beceriler AS kullaniciyetenegi FROM kisiler");
if ($sorgu) {
    while($kayit = $sorgu->fetch_object()){
        
        
        echo "kayit isim degeri : " . $kayit->kullaniciadi."<br />";
        echo "kayit beceriler degeri : " . $kayit->kullaniciyetenegi."<br /><br />";
    }
    
    
} else {
    echo "sorgu hatasi"; 
}

$veritabanibaglantisi->close();



?>
</body>
</html>	