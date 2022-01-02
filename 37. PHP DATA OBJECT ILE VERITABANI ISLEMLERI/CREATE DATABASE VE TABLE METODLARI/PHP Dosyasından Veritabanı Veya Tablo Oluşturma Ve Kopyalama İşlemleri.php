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
    CREAT DATABASE      :   MySQL sunucusuna yeni bir database ekleme icin kullanilir.
    CREATE TABLE        :   MySQL sunucusundaki database icerisine yeni bir tablo eklemek icin kullanilir. Ayrica istenirse herhangi bir tablo iceriklerini baska bir tabloya kopyalamak icin de kullanilabilir.
    */
/*
    try {
        $veritabanibaglantisi = new PDO ("mysql:host=localhost;charset=UTF8","root","root");
        echo "veritabani baglantisi <br />";
    } catch (PDOException $hata) {
        echo "hata aciklamasi : " . $hata->getMessage();
        die();
    }
$sorgu = $veritabanibaglantisi->query("CREATE DATABASE deneme CHARACTER SET UTF8 COLLATE UTF8_GENERAL_CI");


if ($sorgu) {
    echo "olustu";
} else {
    echo "hata";
}


$veritabanibaglantisi = null;
-----------------------------------------------------------*/
/*
try {
    $veritabanibaglantisi = new PDO ("mysql:host=localhost;charset=UTF8","root","root");
    echo "veritabani baglantisi <br />";
} catch (PDOException $hata) {
    echo "hata aciklamasi : " . $hata->getMessage();
    die();
}
$sorgu = $veritabanibaglantisi->exec("CREATE DATABASE deneme");

if ($sorgu !== false) {
    echo "olustu";
} else {
    echo "hata";
}


$veritabanibaglantisi = null;
-----------------------------------------------------------*/
/*
try {
    $veritabanibaglantisi = new PDO ("mysql:host=localhost;charset=UTF8","root","root");
    echo "veritabani baglantisi <br />";
} catch (PDOException $hata) {
    echo "hata aciklamasi : " . $hata->getMessage();
    die();
}
$sorgu = $veritabanibaglantisi->exec("CREATE DATABASE deneme CHARACTER SET UTF8 COLLATE UTF8_GENERAL_CI");


if ($sorgu !== false) {
    echo "olustu";
} else {
    echo "hata";
}


$veritabanibaglantisi = null;
-----------------------------------------------------------*/
/*
try {
    $veritabanibaglantisi = new PDO ("mysql:host=localhost;dbname=deneme;charset=UTF8","root","root");
    echo "veritabani baglantisi <br />";
} catch (PDOException $hata) {
    echo "hata aciklamasi : " . $hata->getMessage();
    die();
}
$sorgu = $veritabanibaglantisi->query("CREATE TABLE ornek( 
id int(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
adi VARCHAR(100) CHARACTER SET UTF8 COLLATE UTF8_GENERAL_CI NOT NULL,
soyadi VARCHAR(100) CHARACTER SET UTF8 COLLATE UTF8_GENERAL_CI NOT NULL,
email VARCHAR(255) CHARACTER SET UTF8 COLLATE UTF8_GENERAL_CI NOT NULL UNIQUE KEY,
durumu TINYINT(1) UNSIGNED NOT NULL,
kayittarihi  TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
yoneticiaciklamsi TEXT CHARACTER SET UTF8 COLLATE UTF8_GENERAL_CI NOT NULL)
ENGINE=InnoDB DEFAULT CHARACTER SET UTF8 COLLATE UTF8_GENERAL_CI 
");


if ($sorgu) {
    echo "olustu";
} else {
    echo "hata";
}


$veritabanibaglantisi = null;
-----------------------------------------------------------*/
/*
try {
    $veritabanibaglantisi = new PDO ("mysql:host=localhost;dbname=deneme;charset=UTF8","root","root");
    echo "veritabani baglantisi <br />";
} catch (PDOException $hata) {
    echo "hata aciklamasi : " . $hata->getMessage();
    die();
}
$sorgu = $veritabanibaglantisi->exec("CREATE TABLE ornek( 
    id int(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
adi VARCHAR(100) CHARACTER SET UTF8 COLLATE UTF8_GENERAL_CI NOT NULL,
soyadi VARCHAR(100) CHARACTER SET UTF8 COLLATE UTF8_GENERAL_CI NOT NULL,
email VARCHAR(255) CHARACTER SET UTF8 COLLATE UTF8_GENERAL_CI NOT NULL UNIQUE KEY,
durumu TINYINT(1) UNSIGNED NOT NULL,
kayittarihi  TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
yoneticiaciklamsi TEXT CHARACTER SET UTF8 COLLATE UTF8_GENERAL_CI NOT NULL)
ENGINE=InnoDB DEFAULT CHARACTER SET UTF8 COLLATE UTF8_GENERAL_CI 
");


if ($sorgu !== false) {
    echo "olustu";
} else {
    echo "hata";
}


$veritabanibaglantisi = null;
-----------------------------------------------------------*/
/*
try {
    $veritabanibaglantisi = new PDO ("mysql:host=localhost;dbname=deneme;charset=UTF8","root","root");
    echo "veritabani baglantisi <br />";
} catch (PDOException $hata) {
    echo "hata aciklamasi : " . $hata->getMessage();
    die();
}
$sorgu = $veritabanibaglantisi->query("CREATE TABLE ornekyedek LIKE ornek");


if ($sorgu) {
    echo "olustu";
} else {
    echo "hata";
}


$veritabanibaglantisi = null;
-----------------------------------------------------------*/
/*
try {
    $veritabanibaglantisi = new PDO ("mysql:host=localhost;charset=UTF8","root","root");
    echo "veritabani baglantisi <br />";
} catch (PDOException $hata) {
    echo "hata aciklamasi : " . $hata->getMessage();
    die();
}
$sorgu = $veritabanibaglantisi->query("CREATE TABLE RDYmedia.ornekyedek LIKE deneme.ornek");


if ($sorgu) {
    echo "olustu";
} else {
    echo "hata";
}


$veritabanibaglantisi = null;
-----------------------------------------------------------*/
/*
try {
    $veritabanibaglantisi = new PDO ("mysql:host=localhost;charset=UTF8","root","root");
    echo "veritabani baglantisi <br />";
} catch (PDOException $hata) {
    echo "hata aciklamasi : " . $hata->getMessage();
    die();
}
$sorgu = $veritabanibaglantisi->exec("CREATE TABLE RDYmedia.ornek LIKE deneme.ornek");


if ($sorgu !== false) {
    echo "olustu";
} else {
    echo "hata";
}


$veritabanibaglantisi = null;
-----------------------------------------------------------*/
/*
try {
    $veritabanibaglantisi = new PDO ("mysql:host=localhost;dbname=deneme;charset=UTF8","root","root");
    echo "veritabani baglantisi <br />";
} catch (PDOException $hata) {
    echo "hata aciklamasi : " . $hata->getMessage();
    die();
}
$sorguA = $veritabanibaglantisi->query("CREATE TABLE ornekyedek2 LIKE ornek");


if ($sorguA) {
    echo "olustu";
    $sorguB = $veritabanibaglantisi->query("INSERT INTO ornekyedek2 SELECT * FROM ornek");
    if ($sorguB) {
        echo "calisti";
    } else {
        echo "sorgu hatasi";
    }
    



} else {
    echo "hata";
}


$veritabanibaglantisi = null;
-----------------------------------------------------------*/

try {
    $veritabanibaglantisi = new PDO ("mysql:host=localhost;dbname=deneme;charset=UTF8","root","root");
    echo "veritabani baglantisi <br />";
} catch (PDOException $hata) {
    echo "hata aciklamasi : " . $hata->getMessage();
    die();
}
$sorguA = $veritabanibaglantisi->query("CREATE TABLE ornekyedek2 LIKE ornek");


if ($sorguA) {
    echo "olustu";
    $sorguB = $veritabanibaglantisi->query("INSERT INTO ornekyedek2 SELECT * FROM ornek");
    if ($sorguB) {
        echo "calisti";
    } else {
        echo "sorgu hatasi";
    }
    



} else {
    echo "hata";
}


$veritabanibaglantisi = null;


    ?>
</body>
</html>	