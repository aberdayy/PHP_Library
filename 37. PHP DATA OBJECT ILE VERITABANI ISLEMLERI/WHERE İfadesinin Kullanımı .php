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
    WHERE       :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun islem esnasinda tum verilerini islemek yerine sadece kosula bagli verileri islemek istenildigini belirtmek icin 
    kullanilir.
    */
    /*
    try {
        $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8;","root","root");
        echo "1<br />";
    } catch (PDOException $error) {
        echo " hata kodu : " . $error->getMessage();
        die();
    }

    $sorgu = $db->query("SELECT * FROM kisiler WHERE yas=18", PDO::FETCH_ASSOC);
    if ($sorgu) {
        foreach ($sorgu as $satirlar) {
            echo 
            $satirlar["id"] . " | " .
            $satirlar["isim"] . " | " .
            $satirlar["yas"] . " | " .
            $satirlar["beceriler"] . " | " .
            $satirlar["beceriseviyeleri"] . " | " . "<br /><br />";
        }
    } else {
        echo "sorgu hatasi";
    }
    $db = null;
---------------------------------------------------------------------------------*/
/*
try {
    $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8;","root","root");
    echo "1<br />";
} catch (PDOException $error) {
    echo " hata kodu : " . $error->getMessage();
    die();
}

$sorgu = $db->query("SELECT * FROM kisiler WHERE yas!=18", PDO::FETCH_ASSOC);
if ($sorgu) {
    foreach ($sorgu as $satirlar) {
        echo 
        $satirlar["id"] . " | " .
        $satirlar["isim"] . " | " .
        $satirlar["yas"] . " | " .
        $satirlar["beceriler"] . " | " .
        $satirlar["beceriseviyeleri"] . " | " . "<br /><br />";
    }
} else {
    echo "sorgu hatasi";
}
$db = null;
---------------------------------------------------------------------------------*/
/*
try {
    $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8;","root","root");
    echo "1<br />";
} catch (PDOException $error) {
    echo " hata kodu : " . $error->getMessage();
    die();
}

$sorgu = $db->query("SELECT * FROM kisiler WHERE isim LIKE 'a%' ", PDO::FETCH_ASSOC);
if ($sorgu) {
    foreach ($sorgu as $satirlar) {
        echo 
        $satirlar["id"] . " | " .
        $satirlar["isim"] . " | " .
        $satirlar["yas"] . " | " .
        $satirlar["beceriler"] . " | " .
        $satirlar["beceriseviyeleri"] . " | " . "<br /><br />";
    }
} else {
    echo "sorgu hatasi";
}
$db = null;
---------------------------------------------------------------------------------*/
/*
try {
    $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8;","root","root");
    echo "1<br />";
} catch (PDOException $error) {
    echo " hata kodu : " . $error->getMessage();
    die();
}

$sorgu = $db->query("SELECT * FROM kisiler WHERE isim NOT LIKE 'a%' ", PDO::FETCH_ASSOC);
if ($sorgu) {
    foreach ($sorgu as $satirlar) {
        echo 
        $satirlar["id"] . " | " .
        $satirlar["isim"] . " | " .
        $satirlar["yas"] . " | " .
        $satirlar["beceriler"] . " | " .
        $satirlar["beceriseviyeleri"] . " | " . "<br /><br />";
    }
} else {
    echo "sorgu hatasi";
}
$db = null;
---------------------------------------------------------------------------------*/
/*
try {
    $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8;","root","root");
    echo "1<br />";
} catch (PDOException $error) {
    echo " hata kodu : " . $error->getMessage();
    die();
}

$sorgu = $db->query("SELECT * FROM kisiler WHERE id=2 OR id=5 OR id=9 ", PDO::FETCH_ASSOC);
if ($sorgu) {
    foreach ($sorgu as $satirlar) {
        echo 
        $satirlar["id"] . " | " .
        $satirlar["isim"] . " | " .
        $satirlar["yas"] . " | " .
        $satirlar["beceriler"] . " | " .
        $satirlar["beceriseviyeleri"] . " | " . "<br /><br />";
    }
} else {
    echo "sorgu hatasi";
}
$db = null;
---------------------------------------------------------------------------------*/
/*
try {
    $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8;","root","root");
    echo "1<br />";
} catch (PDOException $error) {
    echo " hata kodu : " . $error->getMessage();
    die();
}

$sorgu = $db->query("SELECT * FROM kisiler WHERE id IN (2,5,9)", PDO::FETCH_ASSOC);
if ($sorgu) {
    foreach ($sorgu as $satirlar) {
        echo 
        $satirlar["id"] . " | " .
        $satirlar["isim"] . " | " .
        $satirlar["yas"] . " | " .
        $satirlar["beceriler"] . " | " .
        $satirlar["beceriseviyeleri"] . " | " . "<br /><br />";
    }
} else {
    echo "sorgu hatasi";
}
$db = null;
---------------------------------------------------------------------------------*/
/*
try {
    $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8;","root","root");
    echo "1<br />";
} catch (PDOException $error) {
    echo " hata kodu : " . $error->getMessage();
    die();
}

$sorgu = $db->query("SELECT * FROM kisiler WHERE id NOT IN (2,5,9)", PDO::FETCH_ASSOC);
if ($sorgu) {
    foreach ($sorgu as $satirlar) {
        echo 
        $satirlar["id"] . " | " .
        $satirlar["isim"] . " | " .
        $satirlar["yas"] . " | " .
        $satirlar["beceriler"] . " | " .
        $satirlar["beceriseviyeleri"] . " | " . "<br /><br />";
    }
} else {
    echo "sorgu hatasi";
}
$db = null;
---------------------------------------------------------------------------------*/
/*
try {
    $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8;","root","root");
    echo "1<br />";
} catch (PDOException $error) {
    echo " hata kodu : " . $error->getMessage();
    die();
}

$sorgu = $db->query("SELECT * FROM kisiler WHERE FIND_IN_SET('CSS',beceriler) ", PDO::FETCH_ASSOC);
if ($sorgu) {
    foreach ($sorgu as $satirlar) {
        echo 
        $satirlar["id"] . " | " .
        $satirlar["isim"] . " | " .
        $satirlar["yas"] . " | " .
        $satirlar["beceriler"] . " | " .
        $satirlar["beceriseviyeleri"] . " | " . "<br /><br />";
    }
} else {
    echo "sorgu hatasi";
}
$db = null;
---------------------------------------------------------------------------------*/
/*
try {
    $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8;","root","root");
    echo "1<br />";
} catch (PDOException $error) {
    echo " hata kodu : " . $error->getMessage();
    die();
}

$sorgu = $db->query("SELECT * FROM kisiler WHERE NOT FIND_IN_SET('CSS',beceriler) ", PDO::FETCH_ASSOC);
if ($sorgu) {
    foreach ($sorgu as $satirlar) {
        echo 
        $satirlar["id"] . " | " .
        $satirlar["isim"] . " | " .
        $satirlar["yas"] . " | " .
        $satirlar["beceriler"] . " | " .
        $satirlar["beceriseviyeleri"] . " | " . "<br /><br />";
    }
} else {
    echo "sorgu hatasi";
}
$db = null;
---------------------------------------------------------------------------------*/

try {
    $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8;","root","root");
    echo "1<br />";
} catch (PDOException $error) {
    echo " hata kodu : " . $error->getMessage();
    die();
}

$sorgu = $db->query("SELECT * FROM kisiler WHERE yas NOT BETWEEN 18 AND 28 ", PDO::FETCH_ASSOC);
if ($sorgu) {
    foreach ($sorgu as $satirlar) {
        echo 
        $satirlar["id"] . " | " .
        $satirlar["isim"] . " | " .
        $satirlar["yas"] . " | " .
        $satirlar["beceriler"] . " | " .
        $satirlar["beceriseviyeleri"] . " | " . "<br /><br />";
    }
} else {
    echo "sorgu hatasi";
}
$db = null;



    ?>
</body>
</html>	