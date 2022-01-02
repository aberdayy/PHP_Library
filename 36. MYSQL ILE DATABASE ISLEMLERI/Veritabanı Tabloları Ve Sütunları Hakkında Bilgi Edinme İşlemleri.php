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
SHOW TABLES     :   MySQL sunucusundaki database icerisinde bulunan tum tablolarin listesini bulmak icin kullanilir.
SHOW COLUMNS    :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun tum sutunlarinin listesini bulmak icin kullanilir.
*/
/*
$veritabanibaglantisi = mysqli_connect("localhost","root","root","ataberk");
mysqli_set_charset($veritabanibaglantisi,"UTF8");
if (mysqli_connect_errno()) {
        echo "veritabani baglanti hatasi<br />";
        echo "hata aciklamasi : " . mysqli_connect_error()."<br />";
}else {
    echo "veritabanina baglanti kuruldu<br />";
}

$sorgu = mysqli_query($veritabanibaglantisi,"SHOW TABLES");
    if ($sorgu) {
        while ($tabloadi=mysqli_fetch_array($sorgu)) {
           echo $tabloadi[0] . "<br />";      
        }
        print_r($sorgu);
    }else {
        echo "sorgu hatasi";
    }
-------------------------------------------------------------------------*/
/*
$veritabanibaglantisi = mysqli_connect("localhost","root","root");
mysqli_set_charset($veritabanibaglantisi,"UTF8");
if (mysqli_connect_errno()) {
    echo "veritabani baglanti hatasi<br />";
        echo "hata aciklamasi : " . mysqli_connect_error()."<br />";
    }else {
    echo "veritabanina baglanti kuruldu<br />";
    mysqli_select_db($veritabanibaglantisi,"ataberk");
}

$sorgu = mysqli_query($veritabanibaglantisi,"SHOW TABLES");
if ($sorgu) {
        while ($tabloadi=mysqli_fetch_array($sorgu)) {
            echo $tabloadi[0] . "<br />";      
        }
        print_r($sorgu);
    }else {
        echo "sorgu hatasi";
    }
-------------------------------------------------------------------------*/
/*
$veritabanibaglantisi = mysqli_connect("localhost","root","root");
mysqli_set_charset($veritabanibaglantisi,"UTF8");
if (mysqli_connect_errno()) {
    echo "veritabani baglanti hatasi<br />";
        echo "hata aciklamasi : " . mysqli_connect_error()."<br />";
    }else {
    echo "veritabanina baglanti kuruldu<br />";

}

$sorgu = mysqli_query($veritabanibaglantisi,"SHOW TABLES FROM ataberk");
if ($sorgu) {
        while ($tabloadi=mysqli_fetch_array($sorgu)) {
            echo $tabloadi[0] . "<br />";      
        }
        print_r($sorgu);
    }else {
        echo "sorgu hatasi";
}
-------------------------------------------------------------------------*/
/*
$VeritabaniBaglantisi = mysqli_connect("localhost","root","root","ataberk");
mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
if(mysqli_connect_errno()){
    echo "Veritabanı Bağlantı Hatası<br />";
    echo "Hata Açıklaması : " . mysqli_connect_errno() . "<br />";
}else{
    echo "Veritabanına Bağlantı Kuruldu<br />";
}

$SorguA	=	mysqli_query($VeritabaniBaglantisi, "SHOW TABLES");
    if($SorguA){
        while($TabloAdi=mysqli_fetch_array($SorguA)){
            echo "Tablo Adı : " . $TabloAdi[0] . "<br />";
        
            $SorguB	=	mysqli_query($VeritabaniBaglantisi, "SHOW COLUMNS FROM " . $TabloAdi[0]);
            if($SorguB){
                    while($SutunAdi=mysqli_fetch_array($SorguB)){
                        echo "Sütün Adı : " . $SutunAdi[0] . "<br />";
                    }
                    echo "<br />";
                }else{
                    echo "Sorgu Hatası";
                }
        }
    }else{
        echo "Sorgu Hatası";
    }
    
    mysqli_close($VeritabaniBaglantisi);
-------------------------------------------------------------------------*/
/*
$VeritabaniBaglantisi = mysqli_connect("localhost","root","root");
mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
if(mysqli_connect_errno()){
    echo "Veritabanı Bağlantı Hatası<br />";
    echo "Hata Açıklaması : " . mysqli_connect_errno() . "<br />";
}else{
    echo "Veritabanına Bağlantı Kuruldu<br />";
    mysqli_select_db($VeritabaniBaglantisi,"ataberk");
}

$SorguA	=	mysqli_query($VeritabaniBaglantisi, "SHOW TABLES");
    if($SorguA){
        while($TabloAdi=mysqli_fetch_array($SorguA)){
            echo "Tablo Adı : " . $TabloAdi[0] . "<br />";
            
            $SorguB	=	mysqli_query($VeritabaniBaglantisi, "SHOW COLUMNS FROM " . $TabloAdi[0]);
            if($SorguB){
                while($SutunAdi=mysqli_fetch_array($SorguB)){
                    echo "Sütün Adı : " . $SutunAdi[0] . "<br />";
                    }
                    echo "<br />";
                }else{
                    echo "Sorgu Hatası";
                }
        }
    }else{
        echo "Sorgu Hatası";
    }
    
    mysqli_close($VeritabaniBaglantisi);
-------------------------------------------------------------------------*/
/*
$VeritabaniBaglantisi = mysqli_connect("localhost","root","root");
mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
if(mysqli_connect_errno()){
    echo "Veritabanı Bağlantı Hatası<br />";
    echo "Hata Açıklaması : " . mysqli_connect_errno() . "<br />";
}else{
    echo "Veritabanına Bağlantı Kuruldu<br />";
}

$SorguA	=	mysqli_query($VeritabaniBaglantisi, "SHOW TABLES FROM ataberk");
    if($SorguA){
        while($TabloAdi=mysqli_fetch_array($SorguA)){
            echo "Tablo Adı : " . $TabloAdi[0] . "<br />";
            
            $SorguB	=	mysqli_query($VeritabaniBaglantisi, "SHOW COLUMNS FROM ataberk." . $TabloAdi[0]);
            if($SorguB){
                while($SutunAdi=mysqli_fetch_array($SorguB)){
                    echo "Sütün Adı : " . $SutunAdi[0] . "<br />";
                }
                    echo "<br />";
                }else{
                    echo "Sorgu Hatası";
                }
        }
    }else{
        echo "Sorgu Hatası";
    }
    
    mysqli_close($VeritabaniBaglantisi);
-------------------------------------------------------------------------*/
$VeritabaniBaglantisi = mysqli_connect("localhost","root","root","ataberk");
mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
if(mysqli_connect_errno()){
    echo "Veritabanı Bağlantı Hatası<br />";
    echo "Hata Açıklaması : " . mysqli_connect_errno() . "<br />";
}else{
    echo "Veritabanına Bağlantı Kuruldu<br />";
}

$SorguB	=	mysqli_query($VeritabaniBaglantisi, "SHOW COLUMNS FROM siparisler");
    if($SorguB){
        while($SutunAdi=mysqli_fetch_array($SorguB)){
            echo "Sütün Adı : " . $SutunAdi[0] . "<br />";
        }
        echo "<br />";
    }else{
        echo "Sorgu Hatası";
    }

mysqli_close($VeritabaniBaglantisi);


?>
</body>
</html>	