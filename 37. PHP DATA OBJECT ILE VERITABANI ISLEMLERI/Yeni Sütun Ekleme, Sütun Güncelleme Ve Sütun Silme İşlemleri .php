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
    ALTER TABLE     :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tabloya yeni bir sutun eklenecegini, herhangi bir sutunun siliniecegini veya herhangi bir sutunun adinin yada yapisinin
    degistirilecegini belirtmek icin kullanilir.
    ADD / ADD COLUMN        :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tabloya yeni bir sutun eklemek icin kullanilir.

            FIRST       :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tabloya eklenecek olan yeni sutunun, diger tum sutunlarin en basina eklenmesi gerektigini belirtmek icin kullanilir.
            AFTER       :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tabloya eklenecek olan yeni sutunun, belritilefcek olan sutundan bir sonra eklenmesi gerektigini belirtmek icin kullanilir.
    CHANGE / CHANGE COLUMN :    MySQL sunucusundaki database icerisinde bulunan herhangi bir tablodaki herhangi bir sutunun adini yada yapisini degistirmek icin kullanilir.
    MODIFY / MODIFY COLUMN :    MySQL sunucusundaki database icerisinde bulunan herhangi bir tablodaki herhangi bir sutunun yapisini degistirmek icin kullanilir.
    DROP / DROP COLUMN     :    MySQL sunucusundaki database icerisinde bulunan herhangi bir tablodaki herhangi bir sutunu silmek icin kullanilir.
    */
/*
    try {
        $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=UTF8","root","root");
        echo "baglanti saglandi <br />";
    } catch (PDOException $hata) {
        echo "hata aciklamasi: " . $hata->getMessage();
        die();
    }

    $sorgu = $db->query("ALTER TABLE uyeler ADD dogumtarihi smallint(4) NOT NULL");
    if ($sorgu) {
        echo "sutun eklendi";
    
    } else {
        echo "sorgu hatasi";
    }
    $db = null;
--------------------------------------------------------------------------------*/
/*
try {
    $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=UTF8","root","root");
    echo "baglanti saglandi <br />";
} catch (PDOException $hata) {
    echo "hata aciklamasi: " . $hata->getMessage();
    die();
}

$sorgu = $db->query("ALTER TABLE uyeler ADD COLUMN dogumtarihi smallint(4) NOT NULL,
ADD COLUMN ozelad varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL");
if ($sorgu) {
    echo "sutunlar eklendi";
    
} else {
    echo "sorgu hatasi";
}
$db = null;
--------------------------------------------------------------------------------*/
/*
try {
    $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=UTF8","root","root");
    echo "baglanti saglandi <br />";
} catch (PDOException $hata) {
    echo "hata aciklamasi: " . $hata->getMessage();
    die();
}

$sorgu = $db->query("ALTER TABLE uyeler ADD COLUMN dogumtarihi smallint(4) NOT NULL,
ADD COLUMN ozelad varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL FIRST");
if ($sorgu) {
    echo "sutunlar eklendi";
    
} else {
    echo "sorgu hatasi";
}









$db = null;
--------------------------------------------------------------------------------*/
/*
try {
    $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=UTF8","root","root");
    echo "baglanti saglandi <br />";
} catch (PDOException $hata) {
    echo "hata aciklamasi: " . $hata->getMessage();
    die();
}

$sorgu = $db->query("ALTER TABLE uyeler ADD COLUMN dogumtarihi smallint(4) NOT NULL FIRST ,
ADD COLUMN ozelad varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL FIRST"); // EN SON YAZILAN HER ZAMAN EN BASA GELIR !!!!
if ($sorgu) {
    echo "sutunlar eklendi";
    
} else {
    echo "sorgu hatasi";
}

$db = null;
--------------------------------------------------------------------------------*/
/*
try {
    $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=UTF8","root","root");
    echo "baglanti saglandi <br />";
} catch (PDOException $hata) {
    echo "hata aciklamasi: " . $hata->getMessage();
    die();
}

$sorgu = $db->query("ALTER TABLE uyeler ADD COLUMN dogumtarihi smallint(4) NOT NULL AFTER yas");
if ($sorgu) {
    echo "sutunlar eklendi";
    
} else {
    echo "sorgu hatasi";
}

$db = null;
--------------------------------------------------------------------------------*/
/*
try {
    $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=UTF8","root","root");
    echo "baglanti saglandi <br />";
} catch (PDOException $hata) {
    echo "hata aciklamasi: " . $hata->getMessage();
    die();
}

$sorgu = $db->query("ALTER TABLE uyeler ADD COLUMN dogumtarihi smallint(4) NOT NULL AFTER yas, ADD COLUMN dogumtarihi2 smallint(4) NOT NULL AFTER dogumtarihi");
if ($sorgu) {
    echo "sutunlar eklendi";
    
} else {
    echo "sorgu hatasi";
}

$db = null;
--------------------------------------------------------------------------------*/
/*
try {
    $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=UTF8","root","root");
    echo "baglanti saglandi <br />";
} catch (PDOException $hata) {
    echo "hata aciklamasi: " . $hata->getMessage();
    die();
}

$sorgu = $db->query("ALTER TABLE uyeler ADD COLUMN dogumtarihi smallint(4) NOT NULL AFTER adisoyadi, ADD COLUMN dogumtarihi2 smallint(4) NOT NULL AFTER yas");
if ($sorgu) {
    echo "sutunlar eklendi";
    
} else {
    echo "sorgu hatasi";
}

$db = null;
--------------------------------------------------------------------------------*/
//----------------------------------------------------------------EXEC YAPISI DA BU SEKILDE DIR!!!-------------------------------------------------------------------------------*/
/*
try {
    $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=UTF8","root","root");
    echo "baglanti saglandi <br />";
} catch (PDOException $hata) {
    echo "hata aciklamasi: " . $hata->getMessage();
    die();
}

$sorgu = $db->exec("ALTER TABLE uyeler ADD dogumtarihi smallint(4) NOT NULL");
if ($sorgu !== false) {
    echo "sutun eklendi";

} else {
    echo "sorgu hatasi";
}
$db = null;
--------------------------------------------------------------------------------*/
/*
try {
    $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=UTF8","root","root");
    echo "baglanti saglandi <br />";
} catch (PDOException $hata) {
    echo "hata aciklamasi: " . $hata->getMessage();
    die();
}

$sorgu = $db->exec("ALTER TABLE uyeler CHANGE degisti degisti2 int(10) UNSIGNED NOT NULL");
if ($sorgu !== false) {
    echo "sutun guncellendi";

} else {
    echo "sorgu hatasi";
}
$db = null;
--------------------------------------------------------------------------------*/
/*
try {
    $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=UTF8","root","root");
    echo "baglanti saglandi <br />";
} catch (PDOException $hata) {
    echo "hata aciklamasi: " . $hata->getMessage();
    die();
}

$sorgu = $db->exec("ALTER TABLE uyeler 
CHANGE degisti2 son1 int(10) UNSIGNED NOT NULL,
CHANGE sehir son2 varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL");
if ($sorgu !== false) {
    echo "sutun guncellendi";

} else {
    echo "sorgu hatasi";
}
$db = null;
--------------------------------------------------------------------------------*/
/*
try {
    $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=UTF8","root","root");
    echo "baglanti saglandi <br />";
} catch (PDOException $hata) {
    echo "hata aciklamasi: " . $hata->getMessage();
    die();
}

$sorgu = $db->exec("ALTER TABLE uyeler 
CHANGE degisti2 son1 int(10) UNSIGNED NOT NULL,
CHANGE sehir son2 varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL");
if ($sorgu !== false) {
    echo "sutun guncellendi";
    
} else {
    echo "sorgu hatasi";
}
$db = null;
--------------------------------------------------------------------------------*/
/*
try {
    $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=UTF8","root","root");
    echo "baglanti saglandi <br />";
} catch (PDOException $hata) {
    echo "hata aciklamasi: " . $hata->getMessage();
    die();
}

$sorgu = $db->query("ALTER TABLE uyeler MODIFY son21 tinyint(1) UNSIGNED NOT NULL");    // CALISMIYOR!
if ($sorgu) {
    echo "sutunlar eklendi";
    
} else {
    echo "sorgu hatasi";
}

$db = null;
--------------------------------------------------------------------------------*/
try {
    $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=UTF8","root","root");
    echo "baglanti saglandi <br />";
} catch (PDOException $hata) {
    echo "hata aciklamasi: " . $hata->getMessage();
    die();
}

$sorgu = $db->query("ALTER TABLE uyeler DROP son1, DROP son2 "); 
if ($sorgu) {
    echo "sutunlar eklendi";
    
} else {
    echo "sorgu hatasi";
}

$db = null;







    


    ?>
</body>
</html>	