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
    LIMIT           :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun islem esnasinda tum verilerini islemek yerine sadece belirtilen adet veya araliklar kadar islemek istenildigini
    belirtmek icin kullanilir.
    ORDER BY        :      MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun verilerine islem esnasinda hangi sira veya siralar dahilinde erisilmek istenildigini belirtmek icin kullanilir.
    */
    /*
    try {
        $db         =   new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8;","root","root");
    } catch (PDOException $error) {
        echo "hata kodu : " . $error->getMessage();
        die();
    }
    $sorgu = $db->query("SELECT * FROM kisiler LIMIT 5 ", PDO::FETCH_ASSOC);
    if ($sorgu) {
        foreach ($sorgu as $satirlar) {
            echo $satirlar["id"] . " = " . 
            $satirlar["isim"] . " | " . 
            $satirlar["yas"] . " | " . 
            $satirlar["beceriler"] . " | " . 
            $satirlar["beceriseviyeleri"] . " | " . "<br /><br />"; 
        }
    } else {
        echo "sorgu hatasi";
    }
    
    
    
    $db=null;
    -------------------------------------------------------------*/
    /*
    try {
        $db         =   new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8;","root","root");
    } catch (PDOException $error) {
        echo "hata kodu : " . $error->getMessage();
        die();
    }
    $sorgu = $db->query("SELECT * FROM kisiler LIMIT 6,2 ", PDO::FETCH_ASSOC); // 6 dan basla 2 tane al anlamindadir!
    if ($sorgu) {
        foreach ($sorgu as $satirlar) {
            echo $satirlar["id"] . " = " . 
            $satirlar["isim"] . " | " . 
            $satirlar["yas"] . " | " . 
            $satirlar["beceriler"] . " | " . 
            $satirlar["beceriseviyeleri"] . " | " . "<br /><br />"; 
        }
    } else {
        echo "sorgu hatasi";
    }
    
    
    
    $db=null;
    -------------------------------------------------------------*/
    /*
    try {
        $db         =   new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8;","root","root");
    } catch (PDOException $error) {
        echo "hata kodu : " . $error->getMessage();
        die();
    }
    $sorgu = $db->query("SELECT * FROM kisiler ORDER BY isim ASC ", PDO::FETCH_ASSOC); 
    if ($sorgu) {
        foreach ($sorgu as $satirlar) {
            echo $satirlar["id"] . " = " . 
            $satirlar["isim"] . " | " . 
            $satirlar["yas"] . " | " . 
            $satirlar["beceriler"] . " | " . 
            $satirlar["beceriseviyeleri"] . " | " . "<br /><br />"; 
        }
    } else {
        echo "sorgu hatasi";
    }
    
    
    
    $db=null;
    -------------------------------------------------------------*/
    /*
    try {
        $db         =   new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8;","root","root");
    } catch (PDOException $error) {
        echo "hata kodu : " . $error->getMessage();
        die();
    }
    $sorgu = $db->query("SELECT * FROM kisiler ORDER BY id DESC ", PDO::FETCH_ASSOC); 
    if ($sorgu) {
        foreach ($sorgu as $satirlar) {
            echo $satirlar["id"] . " = " . 
            $satirlar["isim"] . " | " . 
            $satirlar["yas"] . " | " . 
            $satirlar["beceriler"] . " | " . 
            $satirlar["beceriseviyeleri"] . " | " . "<br /><br />"; 
        }
    } else {
        echo "sorgu hatasi";
    }
    
    
    
    $db=null;
    -------------------------------------------------------------*/
    try {
        $db         =   new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8;","root","root");
    } catch (PDOException $error) {
        echo "hata kodu : " . $error->getMessage();
        die();
    }
    $sorgu = $db->query("SELECT * FROM kisiler ORDER BY yas DESC, isim ASC LIMIT 5 ", PDO::FETCH_ASSOC); 
    if ($sorgu) {
        foreach ($sorgu as $satirlar) {
            echo $satirlar["id"] . " = " . 
            $satirlar["isim"] . " | " . 
            $satirlar["yas"] . " | " . 
            $satirlar["beceriler"] . " | " . 
            $satirlar["beceriseviyeleri"] . " | " . "<br /><br />"; 
        }
    } else {
        echo "sorgu hatasi";
    }
    
    
    
    $db=null;
    
    
    
    ?>
</body>
</html>	