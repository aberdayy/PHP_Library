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
    mysqli_fetch_lengths()      :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun herhangi bir kaydini iceren satirindaki tum sutunlarda bulunan 
    verilerin ayri ayri toplam karakter sayisini bulmak icin kullanilir
    lengths                     :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun herhangi bir kaydini iceren satirindaki tum sutunlarda bulunan 
    verilerin nesnesel yapi ile ayri ayri toplam karakter sayisini bulmak icin kullanilir
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
        if ($kayitsayisi>0) {
            
            while($kayitlar=mysqli_fetch_assoc($sorgu)){

                $sutunkaraktersayisi = mysqli_fetch_lengths($sorgu);
                echo "<pre>";
                print_r($sutunkaraktersayisi);
                echo "</pre>";
            }





        }else {
            echo "kayit yok!";
        }
    }else{
        echo "sorgu hatasi!";
    }


    
    mysqli_close($veritabanibaglantisi);
-------------------------------------------------------------------------------*/
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
    if ($kayitsayisi>0) {
        
        while($kayitlar=mysqli_fetch_assoc($sorgu)){
            $sutunkaraktersayisi = mysqli_fetch_lengths($sorgu);
            
            echo "id  degeri : " . $kayitlar["id"]. " karakter uzunlugu : " . $sutunkaraktersayisi[0] . "<br />";
            echo "isim  degeri : " . $kayitlar["isim"]. " karakter uzunlugu : " . $sutunkaraktersayisi[1] . "<br />";
            echo "yas  degeri : " . $kayitlar["yas"]. " karakter uzunlugu : " . $sutunkaraktersayisi[2] . "<br />";
            echo "beceriler  degeri : " . $kayitlar["beceriler"]. " karakter uzunlugu : " . $sutunkaraktersayisi[3] . "<br />";
            echo "beceriseviyeleri  degeri : " . $kayitlar["beceriseviyeleri"]. " karakter uzunlugu : " . $sutunkaraktersayisi[4] . "<br /><br />";
        }
        
        



    }else {
        echo "kayit yok!";
    }
}else{
    echo "sorgu hatasi!";
}



mysqli_close($veritabanibaglantisi);

-------------------------------------------------------------------------------*/
//-------------------------------------------------------------------------------*/-------------------------------------------------------------------------------*/-------------------------------------------------------------------------------*/
/*
$veritabanibaglantisi = new mysqli ("localhost","root","root","RDYmedia");
$veritabanibaglantisi->set_charset("UTF8");
if($veritabanibaglantisi->connect_errno){
    echo "veritabani baglanti hatasi!";
    echo "hata kodu : " . $veritabanibaglantisi->connect_error . "<br />";
    die();
}
$sorgu = $veritabanibaglantisi->query(" SELECT * FROM kisiler");
if($sorgu){
    $kayitsayisi = $sorgu->num_rows;
    if ($kayitsayisi>0) {
        
        while($kayitlar=$sorgu->fetch_assoc()){
            
            $sutunkaraktersayisi = $sorgu->lengths;
            echo "<pre>";
            print_r($sutunkaraktersayisi);
            echo "</pre>";
        }
        
        
        
        

    }else {
        echo "kayit yok!";
    }
}else{
    echo "sorgu hatasi!";
}



$veritabanibaglantisi->close();
-------------------------------------------------------------------------------*/


$veritabanibaglantisi = new mysqli ("localhost","root","root","RDYmedia");
$veritabanibaglantisi->set_charset("UTF8");
if($veritabanibaglantisi->connect_errno){
    echo "veritabani baglanti hatasi!";
    echo "hata kodu : " . $veritabanibaglantisi->connect_error . "<br />";
    die();
}
$sorgu = $veritabanibaglantisi->query(" SELECT * FROM kisiler");
if($sorgu){
    $kayitsayisi = mysqli_num_rows($sorgu);
    if ($kayitsayisi>0) {
        
        while($kayitlar=mysqli_fetch_assoc($sorgu)){
            $sutunkaraktersayisi = mysqli_fetch_lengths($sorgu);
            
            echo "id  degeri : " . $kayitlar["id"]. " karakter uzunlugu : " . $sutunkaraktersayisi[0] . "<br />";
            echo "isim  degeri : " . $kayitlar["isim"]. " karakter uzunlugu : " . $sutunkaraktersayisi[1] . "<br />";
            echo "yas  degeri : " . $kayitlar["yas"]. " karakter uzunlugu : " . $sutunkaraktersayisi[2] . "<br />";
            echo "beceriler  degeri : " . $kayitlar["beceriler"]. " karakter uzunlugu : " . $sutunkaraktersayisi[3] . "<br />";
            echo "beceriseviyeleri  degeri : " . $kayitlar["beceriseviyeleri"]. " karakter uzunlugu : " . $sutunkaraktersayisi[4] . "<br /><br />";
        }
        
        



    }else {
        echo "kayit yok!";
    }
}else{
    echo "sorgu hatasi!";
}




$veritabanibaglantisi->close();




?>
    </body>
    </html>	