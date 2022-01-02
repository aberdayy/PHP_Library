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
    mysqli_fetch_array()    :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun tum verilerini duzenli bir dizi halinde okumak icin kullanilir
    fetch_array()           :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun nesnesel yapi ile tum verilerini duzenli bir dizi halinde okumak icin kullanilir
        MYSQLI_ASSOC        :   Tablonun verilerini okuma islemi sirasinda olusturulacak olan dizide ilgili tablonun sutun isimleri dizinin anahtari olarak tanimlanir ve ilgili verilere sutun isimleri ile
        erisilir.

        MYSQLI_NUM          :   Tablonun verilerini okuma islemi sirasinda olusturulacak olan dizide dizinin anahtarlari PHP tarafinda otomatik olarak tanimlanir ve ilgili verilere sutun sira numaralari ile
        erisilir.

        MYSQLI_BOTH         :   Tablonun verilerini okuma islemi sirasinda olusturulacak olan dizide dizinin anahtarlari hem ilgili tablonun sutun isimleri ile hemde PHP tarafindan otomatik olarak tanimlanir
        ve ilgili verilere ister sutun isimleri ile ister sutun sira numaralari ile erisilir.
    */
    /*
    $veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
    mysqli_Set_charset($veritabanibaglantisi,"UTF8");
    if (mysqli_connect_errno()) {
        echo "veritabanina baglanilamadi <br />";
        echo "hata durumu : " . mysqli_connect_error();
        die();
    }
    
    $sorgu =    mysqli_query($veritabanibaglantisi, "SELECT*FROM kisiler");
    if ($sorgu) {
        $kayit = mysqli_fetch_array($sorgu);
        echo "<pre>";
        echo print_r($kayit);
        echo "</pre>";
    } else {
        echo "sorgu hatasi!";
    }
    
    
    mysqli_close($veritabanibaglantisi);
    ------------------------------------------------------*/
    /*
    $veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
    mysqli_Set_charset($veritabanibaglantisi,"UTF8");
    if (mysqli_connect_errno()) {
        echo "veritabanina baglanilamadi <br />";
        echo "hata durumu : " . mysqli_connect_error();
        die();
    }
    
    $sorgu =    mysqli_query($veritabanibaglantisi, "SELECT*FROM kisiler");
    if ($sorgu) {
        $kayit = mysqli_fetch_array($sorgu, MYSQLI_NUM);
        echo "<pre>";
        echo print_r($kayit);
        echo "</pre>";
    } else {
        echo "sorgu hatasi!";
    }
    
    
    mysqli_close($veritabanibaglantisi);
    ------------------------------------------------------*/
    /*
    $veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
    mysqli_Set_charset($veritabanibaglantisi,"UTF8");
    if (mysqli_connect_errno()) {
        echo "veritabanina baglanilamadi <br />";
        echo "hata durumu : " . mysqli_connect_error();
        die();
    }
    
    $sorgu =    mysqli_query($veritabanibaglantisi, "SELECT*FROM kisiler");
    if ($sorgu) {
        $kayit = mysqli_fetch_array($sorgu, MYSQLI_ASSOC);
        echo "<pre>";
        echo print_r($kayit);
        echo "</pre>";
    } else {
        echo "sorgu hatasi!";
    }
    
    
    mysqli_close($veritabanibaglantisi);
    ------------------------------------------------------*/
    /*
    $veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
    mysqli_Set_charset($veritabanibaglantisi,"UTF8");
    if (mysqli_connect_errno()) {
        echo "veritabanina baglanilamadi <br />";
        echo "hata durumu : " . mysqli_connect_error();
        die();
    }
    
    $sorgu =    mysqli_query($veritabanibaglantisi, "SELECT*FROM kisil er");
    if ($sorgu) {
        while($kayit = mysqli_fetch_array($sorgu, MYSQLI_BOTH)){
        echo "id degeri : " . $kayit[0] . "<br />";
        echo "isim degeri : " . $kayit[1]. "<br />";
        echo "yas degeri : " .$kayit[2]. "<br />";
        echo "beceriler degeri : " .$kayit[3]. "<br />";
        echo "beceriseviyeleri degeri : " . $kayit[4]. "<br /><br />";
    }
} else {
        echo "sorgu hatasi!";
    }
    
    
    mysqli_close($veritabanibaglantisi);
    ------------------------------------------------------*/
    $veritabanibaglantisi = new mysqli("localhost","root","root","RDYmedia");
    $veritabanibaglantisi->set_charset("UTF8");
    if($veritabanibaglantisi->connect_errno) {
        echo "veritabanina baglanilamadi <br />";
        echo "hata durumu : " . $veritabanibaglantisi->connect_error;
        die();
    }
    
    $sorgu =    $veritabanibaglantisi->query("SELECT*FROM kisiler");
    if ($sorgu) {
        while($kayit = $sorgu->fetch_array( MYSQLI_NUM)){
        echo "id degeri : " . $kayit[0] . "<br />";
        echo "isim degeri : " . $kayit[1]. "<br />";
        echo "yas degeri : " .$kayit[2]. "<br />";
        echo "beceriler degeri : " .$kayit[3]. "<br />";
        echo "beceriseviyeleri degeri : " . $kayit[4]. "<br /><br />";
    }
} else {
        echo "sorgu hatasi!";
    }
    
   $veritabanibaglantisi->close();
    




















    ?>
</body>
</html>	