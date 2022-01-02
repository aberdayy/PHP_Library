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
mysqli_fetch_assoc()    :   MySQL sunucundaki database icerisinde bulunan herhangi bir tablonun tum verilerini iliskisel bir dizi halinde okumak icin kullanilir.   
fetch_assoc()           :   MySQL sunucundaki database icerisinde bulunan herhangi bir tablonun nesnesel yapi ile tum verilerini iliskisel bir dizi halinde okumak icin kullanilir.   
*/
/*
$veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
mysqli_set_charset($veritabanibaglantisi, "UTF8");
if (mysqli_connect_errno()) {
    echo "veritabanina baglanti kurulamadi <br />";
    echo "hata degeri : " . mysqli_connect_error() . "<br />";
    die();
}
$sorgu = mysqli_query($veritabanibaglantisi, "SELECT * FROM kisiler");
if ($sorgu) {
    
    $kayit      =   mysqli_fetch_assoc($sorgu);
    echo "<pre>";
    print_r($kayit);
    echo "</pre>";

} else {
    echo "sorgu hatasi";
}

mysqli_close($veritabanibaglantisi);
------------------------------------------------------------------------*/
/*
$veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
mysqli_set_charset($veritabanibaglantisi, "UTF8");
if (mysqli_connect_errno()) {
    echo "veritabanina baglanti kurulamadi <br />";
    echo "hata degeri : " . mysqli_connect_error() . "<br />";
    die();
}
$sorgu = mysqli_query($veritabanibaglantisi, "SELECT * FROM kisiler");
if ($sorgu) {
    
    $kayit      =   mysqli_fetch_assoc($sorgu);
    echo "kayit ID degeri : " . $kayit["id"]."<br />";
    echo "kayit isim degeri : " . $kayit["isim"]."<br />";
    echo "kayit yas degeri : " . $kayit["yas"]."<br />";
    echo "kayit beceriler degeri : " . $kayit["beceriler"]."<br />";
    echo "kayit beceri seviyeleri degeri : " . $kayit["beceriseviyeleri"]."<br />";
} else {
    echo "sorgu hatasi";
}

mysqli_close($veritabanibaglantisi);
------------------------------------------------------------------------*/
/*
$veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
mysqli_set_charset($veritabanibaglantisi, "UTF8");
if (mysqli_connect_errno()) {
    echo "veritabanina baglanti kurulamadi <br />";
    echo "hata degeri : " . mysqli_connect_error() . "<br />";
    die();
}
$sorgu = mysqli_query($veritabanibaglantisi, "SELECT * FROM kisiler");
if ($sorgu) {
    

    while ($kayit=mysqli_fetch_assoc($sorgu)) {
        echo "kayit ID degeri : " . $kayit["id"]."<br />";
        echo "kayit isim degeri : " . $kayit["isim"]."<br />";
        echo "kayit yas degeri : " . $kayit["yas"]."<br />";
        echo "kayit beceriler degeri : " . $kayit["beceriler"]."<br />";
        echo "kayit beceri seviyeleri degeri : " . $kayit["beceriseviyeleri"]."<br /><br /><br />";
    }


} else {
    echo "sorgu hatasi";
}

mysqli_close($veritabanibaglantisi);
------------------------------------------------------------------------*/
/*
$veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
mysqli_set_charset($veritabanibaglantisi, "UTF8");
if (mysqli_connect_errno()) {
    echo "veritabanina baglanti kurulamadi <br />";
    echo "hata degeri : " . mysqli_connect_error() . "<br />";
    die();
}
$sorgu = mysqli_query($veritabanibaglantisi, "SELECT isim,beceriler FROM kisiler ");
if ($sorgu) {
    

    while ($kayit=mysqli_fetch_assoc($sorgu)) {
        echo "kayit isim degeri : " . $kayit["isim"]."<br />";
        echo "kayit beceriler degeri : " . $kayit["beceriler"]."<br />";
        
    }
    
    
} else {
    echo "sorgu hatasi";
}

mysqli_close($veritabanibaglantisi);
------------------------------------------------------------------------*/
/*
$veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
mysqli_set_charset($veritabanibaglantisi, "UTF8");
if (mysqli_connect_errno()) {
    echo "veritabanina baglanti kurulamadi <br />";
    echo "hata degeri : " . mysqli_connect_error() . "<br />";
    die();
}
$sorgu = mysqli_query($veritabanibaglantisi, "SELECT isim AS Kullaniciadi, beceriler AS Yetenekler FROM kisiler ");
if ($sorgu) {
    
    
    while ($kayit=mysqli_fetch_assoc($sorgu)) {
        echo "Kullaniciadi degeri : " . $kayit["Kullaniciadi"]."<br />";
        echo "Yetenekler degeri : " . $kayit["Yetenekler"]."<br />";
        
    }
    
    
} else {
    echo "sorgu hatasi";
}

mysqli_close($veritabanibaglantisi);
------------------------------------------------------------------------*/
/*
$veritabanibaglantisi = new mysqli("localhost","root","root","RDYmedia");
$veritabanibaglantisi->set_charset("UTF8");
if ($veritabanibaglantisi->connect_errno) {
    echo "veritabanina baglanti kurulamadi <br />";
    echo "hata degeri : " . $veritabanibaglantisi->connect_error . "<br />";
    die();
}
$sorgu = $veritabanibaglantisi->query( "SELECT * FROM kisiler");
if ($sorgu) {
    
    $kayit      =   $sorgu->fetch_assoc();
    echo "<pre>";
    print_r($kayit);
    echo "</pre>";

} else {
    echo "sorgu hatasi";
}

$veritabanibaglantisi->close();
------------------------------------------------------------------------*/
/*
$veritabanibaglantisi = new mysqli("localhost","root","root","RDYmedia");
$veritabanibaglantisi->set_charset("UTF8");
if ($veritabanibaglantisi->connect_errno) {
    echo "veritabanina baglanti kurulamadi <br />";
    echo "hata degeri : " . $veritabanibaglantisi->connect_error . "<br />";
    die();
}
$sorgu = $veritabanibaglantisi->query( "SELECT * FROM kisiler");
if ($sorgu) {
    
    $kayit      =   $sorgu->fetch_assoc();
    echo "kayit ID degeri : " . $kayit["id"]."<br />";
    echo "kayit isim degeri : " . $kayit["isim"]."<br />";
    echo "kayit yas degeri : " . $kayit["yas"]."<br />";
    echo "kayit beceriler degeri : " . $kayit["beceriler"]."<br />";
    echo "kayit beceri seviyeleri degeri : " . $kayit["beceriseviyeleri"]."<br />";
} else {
    echo "sorgu hatasi";
}

$veritabanibaglantisi->close();
------------------------------------------------------------------------*/
$veritabanibaglantisi = new mysqli("localhost","root","root","RDYmedia");
$veritabanibaglantisi->set_charset("UTF8");
if ($veritabanibaglantisi->connect_errno) {
    echo "veritabanina baglanti kurulamadi <br />";
    echo "hata degeri : " . $veritabanibaglantisi->connect_error . "<br />";
    die();
}
$sorgu = $veritabanibaglantisi->query( "SELECT * FROM kisiler");
if ($sorgu) {
    
    while($kayit      =   $sorgu->fetch_assoc()){
    echo "kayit ID degeri : " . $kayit["id"]."<br />";
    echo "kayit isim degeri : " . $kayit["isim"]."<br />";
    echo "kayit yas degeri : " . $kayit["yas"]."<br />";
    echo "kayit beceriler degeri : " . $kayit["beceriler"]."<br />";
    echo "kayit beceri seviyeleri degeri : " . $kayit["beceriseviyeleri"]."<br />";}
} else {
    echo "sorgu hatasi";
}

$veritabanibaglantisi->close();


?>
</body>
</html>	