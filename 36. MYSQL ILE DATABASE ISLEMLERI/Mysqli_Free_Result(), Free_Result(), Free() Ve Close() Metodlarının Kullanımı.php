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
    mysqli_free_result()    :   MySQL sunucundaki database icerisinde bulunan herhangi bir tablo ile alakali istenilen islem veyan islemler bittiginde hafizayi bosaltmak icin kullanilir.
    free_result()           :   MySQL sunucundaki database icerisinde bulunan herhangi bir tablo ile alakali nesnesel yapi ile istenilen islem veyan islemler bittiginde hafizayi bosaltmak icin kullanilir.
    free()                  :   MySQL sunucundaki database icerisinde bulunan herhangi bir tablo ile alakali nesnesel yapi ile istenilen islem veyan islemler bittiginde hafizayi bosaltmak icin kullanilir.
    close()                 :   MySQL sunucundaki database icerisinde bulunan herhangi bir tablo ile alakali nesnesel yapi ile istenilen islem veyan islemler bittiginde hafizayi bosaltmak icin kullanilir.
    */
    /*
    $veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
    mysqli_set_charset($veritabanibaglantisi,"UTF8");
    if (mysqli_connect_errno()) {
        echo "database e baglanamadi !!"."<br />";
        echo "hata aciklamasi : " . mysqli_connect_error()."<br />";
        die();
    }
    $sorgu = mysqli_query($veritabanibaglantisi,"SELECT * FROM kisiler");
    if ($sorgu) {
        
        while ($kayit = mysqli_fetch_assoc($sorgu)) {
            echo $kayit["id"]. "<br />";
            echo $kayit["isim"]. "<br />";
            echo $kayit["yas"]. "<br />";
            echo $kayit["beceriler"]. "<br />";
            echo $kayit["beceriseviyeleri"]. "<br /><br />";
        }
        mysqli_free_result($sorgu);
    }else{
        echo "sorgu hatasi!";
    }
mysqli_close($veritabanibaglantisi);
----------------------------------------------------------------------*/
/*
$veritabanibaglantisi = new mysqli("localhost","root","root","RDYmedia");
$veritabanibaglantisi->set_charset("UTF8");
if ($veritabanibaglantisi->connect_errno) {
    echo "database e baglanamadi !!"."<br />";
    echo "hata aciklamasi : " . $veritabanibaglantisi->connect_error ."<br />";
    die();
}
$sorgu = $veritabanibaglantisi->query( "SELECT * FROM kisiler");
if ($sorgu) {
    
    while ($kayit = $sorgu->fetch_assoc()) {
        echo $kayit["id"]. "<br />";
        echo $kayit["isim"]. "<br />";
        echo $kayit["yas"]. "<br />";
        echo $kayit["beceriler"]. "<br />";
        echo $kayit["beceriseviyeleri"]. "<br /><br />";
    }
    $sorgu->free_result();
}else{
    echo "sorgu hatasi!";
} 
$veritabanibaglantisi->close();
----------------------------------------------------------------------*/
/*
$veritabanibaglantisi = new mysqli("localhost","root","root","RDYmedia");
$veritabanibaglantisi->set_charset("UTF8");
if ($veritabanibaglantisi->connect_errno) {
    echo "database e baglanamadi !!"."<br />";
    echo "hata aciklamasi : " . $veritabanibaglantisi->connect_error ."<br />";
    die();
}
$sorgu = $veritabanibaglantisi->query( "SELECT * FROM kisiler");
if ($sorgu) {
    
    while ($kayit = $sorgu->fetch_assoc()) {
        echo $kayit["id"]. "<br />";
        echo $kayit["isim"]. "<br />";
        echo $kayit["yas"]. "<br />";
        echo $kayit["beceriler"]. "<br />";
        echo $kayit["beceriseviyeleri"]. "<br /><br />";
    }
    $sorgu->free();
}else{
    echo "sorgu hatasi!";
} 
$veritabanibaglantisi->close();
----------------------------------------------------------------------*/
$veritabanibaglantisi = new mysqli("localhost","root","root","RDYmedia");
$veritabanibaglantisi->set_charset("UTF8");
if ($veritabanibaglantisi->connect_errno) {
    echo "database e baglanamadi !!"."<br />";
    echo "hata aciklamasi : " . $veritabanibaglantisi->connect_error ."<br />";
    die();
}
$sorgu = $veritabanibaglantisi->query( "SELECT * FROM kisiler");
if ($sorgu) {
    
    while ($kayit = $sorgu->fetch_assoc()) {
        echo $kayit["id"]. "<br />";
        echo $kayit["isim"]. "<br />";
        echo $kayit["yas"]. "<br />";
        echo $kayit["beceriler"]. "<br />";
        echo $kayit["beceriseviyeleri"]. "<br /><br />";
    }
    $sorgu->close();
}else{
    echo "sorgu hatasi!";
} 
$veritabanibaglantisi->close();















    ?>
</body>
</html>	