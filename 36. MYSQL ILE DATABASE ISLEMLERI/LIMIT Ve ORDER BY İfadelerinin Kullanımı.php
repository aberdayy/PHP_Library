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
    LIMIT       :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun islem esnasinda tum verilerini islemek yerine sadece belirtilen adet veya araliklar kadar islemek istenildigini 
    belirtmek icin kullanilir.

    ORDER BY    :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun verilerine islem esnasinda hangi sira veya siralar dahilinde erisilmek istenildigini belirtmek icin kullanilir.
                                    BUTUN YAZILANLAR OBJE YAPISI ILEDE AYNIDIR HERHANGI BIR DEGISIKLIK YOKTUR!!!!!!!!!
    */
    /*
    $veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
    mysqli_set_charset($veritabanibaglantisi,"UTF8");
    if (mysqli_connect_errno()) {
        echo "database e baglanilamadi!" . "<br />";
        echo "hata degerlendirmesi : " . mysqli_connect_error() . "<br />";
        die();
    }

    $sorgu = mysqli_query($veritabanibaglantisi,"SELECT * FROM kisiler LIMIT 5");   //sadece en bastan baslayip 5 kayidi alir yani donguyu 5 defa calistirir.
    if ($sorgu) {
        while ($kayit =mysqli_fetch_assoc($sorgu)) {
            echo "ID degeri : " .$kayit["id"] . "<br />";
            echo "isim degeri : " .$kayit["isim"] . "<br />";
            echo "yas degeri : " .$kayit["yas"] . "<br />";
            echo "beceriler degeri : " .$kayit["beceriler"] . "<br />";
            echo "beceriseviyeleri degeri : " .$kayit["beceriseviyeleri"] . "<br /><br />";
        }
    } else {
        echo "sorgu hatasi!";
    }
    
    mysqli_close($veritabanibaglantisi);
------------------------------------------------------------------------------------------------------*/
/*
$veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
mysqli_set_charset($veritabanibaglantisi,"UTF8");
if (mysqli_connect_errno()) {
    echo "database e baglanilamadi!" . "<br />";
    echo "hata degerlendirmesi : " . mysqli_connect_error() . "<br />";
    die();
}

$sorgu = mysqli_query($veritabanibaglantisi,"SELECT * FROM kisiler LIMIT 5,2"); //ikinci parametre su kadar deger getir anlamina gelir!! yani bu ornekte 6 ve 7.  kayitlar gelir 
if ($sorgu) {
    while ($kayit =mysqli_fetch_assoc($sorgu)) {
        echo "ID degeri : " .$kayit["id"] . "<br />";
        echo "isim degeri : " .$kayit["isim"] . "<br />";
        echo "yas degeri : " .$kayit["yas"] . "<br />";
        echo "beceriler degeri : " .$kayit["beceriler"] . "<br />";
        echo "beceriseviyeleri degeri : " .$kayit["beceriseviyeleri"] . "<br /><br />";
    }
} else {
    echo "sorgu hatasi!";
}

mysqli_close($veritabanibaglantisi);
------------------------------------------------------------------------------------------------------*/
//------------------------------------------------------------------------------------------------------*/------------------------------------------------------------------------------------------------------*/------------------------------------------------------------------------------------------------------*/
/*
$veritabanibaglantisi = new mysqli("localhost","root","root","RDYmedia");
$veritabanibaglantisi->set_charset("UTF8");
if ($veritabanibaglantisi->connect_errno) {
    echo "database e baglanilamadi!" . "<br />";
    echo "hata degerlendirmesi : " . $veritabanibaglantisi->connect_error . "<br />";
    die();
}

$sorgu = $veritabanibaglantisi->query("SELECT * FROM kisiler LIMIT 5");   //sadece en bastan baslayip 5 kayidi alir yani donguyu 5 defa calistirir.
if ($sorgu) {
    while ($kayit =$sorgu->fetch_assoc()) {
        echo "ID degeri : " .$kayit["id"] . "<br />";
        echo "isim degeri : " .$kayit["isim"] . "<br />";
        echo "yas degeri : " .$kayit["yas"] . "<br />";
        echo "beceriler degeri : " .$kayit["beceriler"] . "<br />";
        echo "beceriseviyeleri degeri : " .$kayit["beceriseviyeleri"] . "<br /><br />";
    }
} else {
    echo "sorgu hatasi!";
}

$veritabanibaglantisi->close();
------------------------------------------------------------------------------------------------------*/
/*
$veritabanibaglantisi = new mysqli("localhost","root","root","RDYmedia");
$veritabanibaglantisi->set_charset("UTF8");
if ($veritabanibaglantisi->connect_errno) {
    echo "database e baglanilamadi!" . "<br />";
    echo "hata degerlendirmesi : " . $veritabanibaglantisi->connect_error . "<br />";
    die();
}

$sorgu = $veritabanibaglantisi->query("SELECT * FROM kisiler LIMIT 5,2");   //ikinci parametre su kadar deger getir anlamina gelir!! yani bu ornekte 6 ve 7.  kayitlar gelir 
if ($sorgu) {
    while ($kayit =$sorgu->fetch_assoc()) {
        echo "ID degeri : " .$kayit["id"] . "<br />";
        echo "isim degeri : " .$kayit["isim"] . "<br />";
        echo "yas degeri : " .$kayit["yas"] . "<br />";
        echo "beceriler degeri : " .$kayit["beceriler"] . "<br />";
        echo "beceriseviyeleri degeri : " .$kayit["beceriseviyeleri"] . "<br /><br />";
    }
} else {
    echo "sorgu hatasi!";
}

$veritabanibaglantisi->close();
------------------------------------------------------------------------------------------------------*/
//------------------------------------------------------------------------------------------------------*/------------------------------------------------------------------------------------------------------*/------------------------------------------------------------------------------------------------------*/
/*
$veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
mysqli_set_charset($veritabanibaglantisi,"UTF8");
if (mysqli_connect_errno()) {
    echo "database e baglanilamadi!" . "<br />";
    echo "hata degerlendirmesi : " . mysqli_connect_error() . "<br />";
    die();
}

$sorgu = mysqli_query($veritabanibaglantisi,"SELECT * FROM kisiler ORDER BY isim ASC");  //ASC="A-Z ye sirala" DESC=" Z-A ya sirala"
if ($sorgu) {
    while ($kayit =mysqli_fetch_assoc($sorgu)) {
        echo "ID degeri : " .$kayit["id"] . "<br />";
        echo "isim degeri : " .$kayit["isim"] . "<br />";
        echo "yas degeri : " .$kayit["yas"] . "<br />";
        echo "beceriler degeri : " .$kayit["beceriler"] . "<br />";
        echo "beceriseviyeleri degeri : " .$kayit["beceriseviyeleri"] . "<br /><br />";
    }
} else {
    echo "sorgu hatasi!";
}

mysqli_close($veritabanibaglantisi);
------------------------------------------------------------------------------------------------------*/
/*
$veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
mysqli_set_charset($veritabanibaglantisi,"UTF8");
if (mysqli_connect_errno()) {
    echo "database e baglanilamadi!" . "<br />";
    echo "hata degerlendirmesi : " . mysqli_connect_error() . "<br />";
    die();
}

$sorgu = mysqli_query($veritabanibaglantisi,"SELECT * FROM kisiler ORDER BY yas ASC, isim ASC"); //yaslar buyukten kucuge siralanir ve ayni olan yas degerlerinde isimler A-Z ye siralanir!
if ($sorgu) {
    while ($kayit =mysqli_fetch_assoc($sorgu)) {
        echo "ID degeri : " .$kayit["id"] . "<br />";
        echo "isim degeri : " .$kayit["isim"] . "<br />";
        echo "yas degeri : " .$kayit["yas"] . "<br />";
        echo "beceriler degeri : " .$kayit["beceriler"] . "<br />";
        echo "beceriseviyeleri degeri : " .$kayit["beceriseviyeleri"] . "<br /><br />";
    }
} else {
    echo "sorgu hatasi!";
}

mysqli_close($veritabanibaglantisi);
------------------------------------------------------------------------------------------------------*/
//------------------------------------------------------------------------------------------------------*/------------------------------------------------------------------------------------------------------*/------------------------------------------------------------------------------------------------------*/
$veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
mysqli_set_charset($veritabanibaglantisi,"UTF8");
if (mysqli_connect_errno()) {
    echo "database e baglanilamadi!" . "<br />";
    echo "hata degerlendirmesi : " . mysqli_connect_error() . "<br />";
    die();
}

$sorgu = mysqli_query($veritabanibaglantisi,"SELECT * FROM kisiler ORDER BY isim ASC LIMIT 2,5"); 
if ($sorgu) {
    while ($kayit =mysqli_fetch_assoc($sorgu)) {
        echo "ID degeri : " .$kayit["id"] . "<br />";
        echo "isim degeri : " .$kayit["isim"] . "<br />";
        echo "yas degeri : " .$kayit["yas"] . "<br />";
        echo "beceriler degeri : " .$kayit["beceriler"] . "<br />";
        echo "beceriseviyeleri degeri : " .$kayit["beceriseviyeleri"] . "<br /><br />";
    }
} else {
    echo "sorgu hatasi!";
}

mysqli_close($veritabanibaglantisi);







    ?>
</body>
</html>	