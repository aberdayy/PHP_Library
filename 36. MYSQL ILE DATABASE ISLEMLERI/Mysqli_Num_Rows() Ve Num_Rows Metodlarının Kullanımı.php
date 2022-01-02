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
    mysqli_num_rows()     :     MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun toplam kayit sayisini elde etmek icin kullanilir
    num_rows              :     MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun nesnesel yapi ile toplam kayit sayisini elde etmek icin kullanilir
    */
    /*
    $veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
    mysqli_set_charset($veritabanibaglantisi,"UTF8");
    if(mysqli_connect_errno()){
        echo "veritabani baglanti hatasi!";
        echo "hata kodu : " . mysqli_connect_error() . "<br />";
        die();
    }
    $sorgu = mysqli_query($veritabanibaglantisi, " SELECT * FROM kisiler");
    if($sorgu){
        $kayitsayisi = mysqli_num_rows($sorgu); 
        echo "kisiler tablosu icerisinde bulunan kayit sayisi : " . $kayitsayisi . "<br /><br />";
        while ($kayitlar = mysqli_fetch_assoc($sorgu)){
            echo $kayitlar["id"] . " & " . $kayitlar["isim"] . " & " . $kayitlar["yas"] . " & "  .$kayitlar["beceriler"] . " & ".$kayitlar["beceriseviyeleri"] . "<br /><br />";
        }
    }else{
        echo "sorgu  hatasi!!";
    }
    mysqli_close($veritabanibaglantisi);
---------------------------------------------------------------------------------------*/
/*
$veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
mysqli_set_charset($veritabanibaglantisi,"UTF8");
if(mysqli_connect_errno()){
    echo "veritabani baglanti hatasi!";
    echo "hata kodu : " . mysqli_connect_error() . "<br />";
    die();
}
$sorgu = mysqli_query($veritabanibaglantisi, " SELECT * FROM kisiler WHERE beceriler LIKE ('%js%')");
if($sorgu){
    $kayitsayisi = mysqli_num_rows($sorgu); 
    echo "kisiler tablosu icerisinde bulunan kayit sayisi : " . $kayitsayisi . "<br /><br />";
    while ($kayitlar = mysqli_fetch_assoc($sorgu)){
        echo $kayitlar["id"] . " & " . $kayitlar["isim"] . " & " . $kayitlar["yas"] . " & "  .$kayitlar["beceriler"] . " & ".$kayitlar["beceriseviyeleri"] . "<br /><br />";
    }
}else{
    echo "sorgu  hatasi!!";
}
    mysqli_close($veritabanibaglantisi);

---------------------------------------------------------------------------------------*/
//---------------------------------------------------------------------------------------*/---------------------------------------------------------------------------------------*/
/*
$veritabanibaglantisi = new mysqli ("localhost","root","root","RDYmedia");
$veritabanibaglantisi->set_charset("UTF8");
if($veritabanibaglantisi->connect_errno){
    echo "veritabani baglanti hatasi!";
    echo "hata kodu : " . $veritabanibaglantisi->connect_error  . "<br />";
    die();
}
$sorgu =$veritabanibaglantisi->query( " SELECT * FROM kisiler");
if($sorgu){
    $kayitsayisi = $sorgu->num_rows ; 
    echo "kisiler tablosu icerisinde bulunan kayit sayisi : " . $kayitsayisi . "<br /><br />";
    while ($kayitlar = $sorgu->fetch_assoc()){
        echo $kayitlar["id"] . " & " . $kayitlar["isim"] . " & " . $kayitlar["yas"] . " & "  .$kayitlar["beceriler"] . " & ".$kayitlar["beceriseviyeleri"] . "<br /><br />";
    }
}else{
    echo "sorgu  hatasi!!";
}
$veritabanibaglantisi->close();
---------------------------------------------------------------------------------------*/

$veritabanibaglantisi = new mysqli ("localhost","root","root","RDYmedia");
$veritabanibaglantisi->set_charset("UTF8");
if($veritabanibaglantisi->connect_errno){
    echo "veritabani baglanti hatasi!";
    echo "hata kodu : " . $veritabanibaglantisi->connect_error  . "<br />";
    die();
}
$sorgu =$veritabanibaglantisi->query( " SELECT * FROM kisiler WHERE beceriler LIKE ('%js%')");
if($sorgu){
    $kayitsayisi = $sorgu->num_rows ; 
    echo "kisiler tablosu icerisinde bulunan kayit sayisi : " . $kayitsayisi . "<br /><br />";
    while ($kayitlar = $sorgu->fetch_assoc()){
        echo $kayitlar["id"] . " & " . $kayitlar["isim"] . " & " . $kayitlar["yas"] . " & "  .$kayitlar["beceriler"] . " & ".$kayitlar["beceriseviyeleri"] . "<br /><br />";
    }
}else{
    echo "sorgu  hatasi!!";
}
$veritabanibaglantisi->close();















    ?>
    </body>
    </html>	