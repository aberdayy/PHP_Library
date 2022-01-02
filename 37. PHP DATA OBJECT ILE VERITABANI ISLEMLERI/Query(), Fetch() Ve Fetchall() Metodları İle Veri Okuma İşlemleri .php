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
    query()         :   MySQL sunucusunda PDO ile acilmis olan baglanti dahilinde yeni bir sorgu islemi yapmak icin kullanilir. Ayrica istenirse sorgu islemi sonucunda donen tum veri turlerini bulabilir ve 
    buldugu degerlerden yeni bir dizi olusturarak olusturdugu dizi degerini geriye dondurur.
    
    fetch()         :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun tekil veri okuma islemi icin query metodu kullanilarak hazirlanmis olan querynin verilerini okumak icin kullanilir.
    ayrica istenirse verilere erisim seklide belirtilebilir. 
    
    fetchAll()      :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun cogul veri okuma islemi icin query metodu kullanilarak hazirlanmis olan querynin verilerini okumak icin kullanilir.
    ayrica istenirse verilere erisim seklide belirtilebilir. 
    
        FETCH_ASSOC     :   Tablonun verilerini okuma islemi sirasinda olusturulacak dizide ilgili tablonun sutun isimleri dizinin anahtarlari olarak tanimlanir ve ilgili verilere sutun isimleri ile erisir.
        FETCH_NUM       :   Tablonun verilerini okuma islemi sirasinda olusturulacak dizide dizinin anahtaklari php tarafindan otomatik olarak tanimlanir(0,1,2,3 vs.) ve ilgili verilere sutun sira numaralari 
        ile erisir.

        FETCH_BOTH      :   Tablonun verilerini okuma islemi sirasinda olusturulacak dizide dizinin anahtarlari hem ilgili tablonun sutun isimleri ile hemde php tarafinda otomatik olarak tanimlanir. 
        iki sekilde de cagirilanilir.

        FETCH_OBJ       :   Tablonun verilerini okuma islemi sirasinda olusturulacak olan nesnede ilgili tablonun sutun isimleri nesnenin ozellikleri olarak tanimlanir ve ilgili verilere sutun isimleri ile
        erisilir.
    */
    /*
    try {
        $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8;", "root","root");
        echo "basarili bir sekilde baglandi";
    } catch (PDOException $error) {
        echo "islem hatali kodu : " . $error->getMessage();
        die();
    }
    
    $sorgu = $db->query("SELECT * FROM kisiler");
    if ($sorgu) {
       foreach ($sorgu as $satirlar) {
        echo "<pre>";
        print_r($satirlar);
        echo "</pre>";   
       }
        
    } else {
        echo "sorgu hatasi";
    }
    
    

    $db = null;
    --------------------------------------------------------*/
    
    /*
    try {
        $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8;", "root","root");
        echo "basarili bir sekilde baglandi <br />";
    } catch (PDOException $error) {
        echo "islem hatali kodu : " . $error->getMessage();
        die();
    }
    
    $sorgu = $db->query("SELECT * FROM kisiler");
    if ($sorgu) {
       foreach ($sorgu as $satirlar) {
           echo "id : ". $satirlar["id"] . "<br />";
       echo "isim : ". $satirlar["isim"] . "<br />";
       echo "yas : ". $satirlar["yas"] . "<br />";
       echo "beceriler : ". $satirlar["beceriler"] . "<br />";
       echo "beceriseviyeleri : ". $satirlar["beceriseviyeleri"] . "<br /><br />";
       }
        
    } else {
        echo "sorgu hatasi";
    }
    
    
    
    $db = null;
    --------------------------------------------------------*/
    /*
    try {
        $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8;", "root","root");
        echo "basarili bir sekilde baglandi <br />";
    } catch (PDOException $error) {
        echo "islem hatali kodu : " . $error->getMessage();
        die();
    }
    
    $sorgu = $db->query("SELECT * FROM kisiler");
    if ($sorgu) {
        foreach ($sorgu as $satirlar) {
           echo "id : ". $satirlar[0] . "<br />";
       echo "isim : ". $satirlar[1] . "<br />";
       echo "yas : ". $satirlar[2] . "<br />";
       echo "beceriler : ". $satirlar[3] . "<br />";
       echo "beceriseviyeleri : ". $satirlar[4] . "<br /><br />";
       }
       
    } else {
        echo "sorgu hatasi";
    }
    
    
    
    $db = null;
    --------------------------------------------------------*/
    /*
    try {
        $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8;", "root","root");
        echo "basarili bir sekilde baglandi <br />";
    } catch (PDOException $error) {
        echo "islem hatali kodu : " . $error->getMessage();
        die();
    }
    
    $sorgu = $db->query("SELECT isim,beceriler FROM kisiler");
    if ($sorgu) {
       foreach ($sorgu as $satirlar) {
       echo "isim : ". $satirlar["isim"] . "<br />";
       echo "beceriler : ". $satirlar["beceriler"] . "<br />";
       }
       
    } else {
        echo "sorgu hatasi";
    }
    
    $db = null;
    --------------------------------------------------------*/
    /*
    try {
        $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8;", "root","root");
        echo "basarili bir sekilde baglandi <br />";
    } catch (PDOException $error) {
        echo "islem hatali kodu : " . $error->getMessage();
        die();
    }
    
    $sorgu = $db->query("SELECT isim,beceriler FROM kisiler");
    if ($sorgu) {
       foreach ($sorgu as $satirlar) {
       echo "isim : ". $satirlar[0] . "<br />";
       echo "beceriler : ". $satirlar[1] . "<br />";
       }
       
    } else {
        echo "sorgu hatasi";
    }
    
    $db = null;
    --------------------------------------------------------*/
    /*
    try {
        $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8;", "root","root");
        echo "basarili bir sekilde baglandi <br />";
    } catch (PDOException $error) {
        echo "islem hatali kodu : " . $error->getMessage();
        die();
    }
    
    $sorgu = $db->query("SELECT isim AS KISIADI ,beceriler AS BECER FROM kisiler");
    if ($sorgu) {
       foreach ($sorgu as $satirlar) {
           echo "isim : ". $satirlar["KISIADI"] . "<br />";
       echo "beceriler : ". $satirlar["BECER"] . "<br />";
    }
       
    } else {
        echo "sorgu hatasi";
    }
    
    $db = null;
    --------------------------------------------------------*/
    /*
    try {
        $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8;", "root","root");
        echo "basarili bir sekilde baglandi <br />";
    } catch (PDOException $error) {
        echo "islem hatali kodu : " . $error->getMessage();
        die();
    }
    
    $sorgu = $db->query("SELECT * FROM kisiler", PDO::FETCH_BOTH);
    if ($sorgu) {
        foreach ($sorgu as $satirlar) {
           echo "id : ". $satirlar["id"] . "<br />";
           echo "isim : ". $satirlar["isim"] . "<br />";
       echo "yas : ". $satirlar["yas"] . "<br />";
       echo "beceriler : ". $satirlar["beceriler"] . "<br />";
       echo "beceriseviyeleri : ". $satirlar["beceriseviyeleri"] . "<br /><br />";
    }
        
    } else {
        echo "sorgu hatasi";
    }
    
    
    
    $db = null;
    --------------------------------------------------------*/
    //DIGER BUTUN METODLARDA BU SEKILDE KULLANILIR AYNI ORNEKLERDE OLDUGU GIBI
    /*
    try {
        $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8;", "root","root");
        echo "basarili bir sekilde baglandi <br />";
    } catch (PDOException $error) {
        echo "islem hatali kodu : " . $error->getMessage();
        die();
    }
    
    $sorgu = $db->query("SELECT * FROM kisiler", PDO::FETCH_OBJ);
    if ($sorgu) {
        foreach ($sorgu as $satirlar) {
            echo "id : ". $satirlar->id . "<br />";
            echo "isim : ". $satirlar->isim . "<br />";
            echo "yas : ". $satirlar->yas . "<br />";
            echo "beceriler : ". $satirlar->beceriler . "<br />";
            echo "beceriseviyeleri : ". $satirlar->beceriseviyeleri . "<br /><br />";
        }
        
    } else {
        echo "sorgu hatasi";
    }
    
    
    
    $db = null;
    --------------------------------------------------------*/
    /*
    try {
        $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8;", "root","root");
        echo "basarili bir sekilde baglandi <br />";
    } catch (PDOException $error) {
        echo "islem hatali kodu : " . $error->getMessage();
        die();
    }
    
    $sorgu = $db->query("SELECT * FROM kisiler")->fetch();
    if ($sorgu) {
        echo "id : ". $sorgu["id"] . "<br />";
    echo "isim : ". $sorgu["isim"] . "<br />";
    echo "yas : ". $sorgu["yas"] . "<br />";
    echo "beceriler : ". $sorgu["beceriler"] . "<br />";
    echo "beceriseviyeleri : ". $sorgu["beceriseviyeleri"] . "<br /><br />";
           
    } else {
        echo "sorgu hatasi";
    }
    
    
    
    $db = null;
    --------------------------------------------------------*/
    /*
    try {
        $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8;", "root","root");
        echo "basarili bir sekilde baglandi <br />";
    } catch (PDOException $error) {
        echo "islem hatali kodu : " . $error->getMessage();
        die();
    }
    
    $sorgu = $db->query("SELECT * FROM kisiler")->fetch(PDO::FETCH_NUM);
    if ($sorgu) {
        echo "id : ". $sorgu[0] . "<br />";
    echo "isim : ". $sorgu[1] . "<br />";
    echo "yas : ". $sorgu[2] . "<br />";
    echo "beceriler : ". $sorgu[3] . "<br />";
    echo "beceriseviyeleri : ". $sorgu[4] . "<br /><br />";
           
} else {
    echo "sorgu hatasi";
}



$db = null;
--------------------------------------------------------*/
/*
try {
    $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8;", "root","root");
    echo "basarili bir sekilde baglandi <br />";
} catch (PDOException $error) {
    echo "islem hatali kodu : " . $error->getMessage();
    die();
}

$sorgu = $db->query("SELECT * FROM kisiler")->fetch(PDO::FETCH_OBJ);
if ($sorgu) {
    echo "id : ". $sorgu->id . "<br />";
echo "isim : ". $sorgu->isim . "<br />";
echo "yas : ". $sorgu->yas . "<br />";
echo "beceriler : ". $sorgu->beceriler . "<br />";
echo "beceriseviyeleri : ". $sorgu->beceriseviyeleri . "<br /><br />";

} else {
echo "sorgu hatasi";
}



$db = null;
-- ------------------------------------------------------*/
/*
try {
    $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8;", "root","root");
    echo "basarili bir sekilde baglandi <br />";
} catch (PDOException $error) {
    echo "islem hatali kodu : " . $error->getMessage();
    die();
}

$sorgu = $db->query("SELECT * FROM kisiler")->fetchAll(PDO::FETCH_NUM);
if ($sorgu) {
    foreach ($sorgu as $satirlar) {
        echo "id : ". $satirlar[0] . "<br />";
        echo "isim : ". $satirlar[1] . "<br />";
        echo "yas : ". $satirlar[2] . "<br />";
        echo "beceriler : ". $satirlar[3] . "<br />";
        echo "beceriseviyeleri : ". $satirlar[4] . "<br /><br />";
    }
} else {
    echo "sorgu hatasi";
}



$db = null;
-- ------------------------------------------------------*/

try {
    $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8;", "root","root");
    echo "basarili bir sekilde baglandi <br />";
} catch (PDOException $error) {
    echo "islem hatali kodu : " . $error->getMessage();
    die();
}

$sorgu = $db->query("SELECT * FROM kisiler")->fetchAll(PDO::FETCH_OBJ);
if ($sorgu) {
    foreach ($sorgu as $satirlar) {
        echo "id : ". $satirlar->id . "<br />";
        echo "isim : ". $satirlar->isim . "<br />";
        echo "yas : ". $satirlar->yas . "<br />";
        echo "beceriler : ". $satirlar->beceriler . "<br />";
        echo "beceriseviyeleri : ". $satirlar->beceriseviyeleri . "<br /><br />";
}
} else {
    echo "sorgu hatasi";
}



$db = null;


    
    
    
    
    
    
    
    
    
    ?>



      
    



</body>
</html>	