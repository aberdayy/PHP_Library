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
    DROP DATABASE   :   MySQL sunucusu icerisindeki herhangi bir database i silmek icin kullanilir.
    DROP TABLE      :   database icerisindeki herhangi bir tabloyu silmek icin kullanilir.
    */
    /*
    try {
        $db = new PDO("mysql:host=localhost;dbname=deneme;charset=UTF8","root","root");
        echo "baglanti kuruldu <br />";
    } catch (PDOException $error) {
        echo "hata kodu : " . $error->getMessage();
        die();
    }

    $sorgu = $db->query("DROP TABLE deneme.ornek");
    if ($sorgu) {
        echo "basariyla silindi";
    } else {
        echo "sorgu hatasi";
    }
    
    $db = null;
--------------------------------------------------------------------*/
/*
try {
    $db = new PDO("mysql:host=localhost;dbname=deneme;charset=UTF8","root","root");
    echo "baglanti kuruldu <br />";
} catch (PDOException $error) {
    echo "hata kodu : " . $error->getMessage();
    die();
}

$sorgu = $db->exec("DROP TABLE deneme.ornek");
if ($sorgu !== false) {
    echo "basariyla silindi";
} else {
    echo "sorgu hatasi";
}

$db = null;
--------------------------------------------------------------------*/
/*
try {
    $db = new PDO("mysql:host=localhost;charset=UTF8","root","root");
    echo "baglanti kuruldu <br />";
} catch (PDOException $error) {
    echo "hata kodu : " . $error->getMessage();
    die();
}

$sorgu = $db->query("DROP DATABASE deneme");
if ($sorgu) {
    echo "basariyla silindi";
} else {
    echo "sorgu hatasi";
}

$db = null;
--------------------------------------------------------------------*/

try {
    $db = new PDO("mysql:host=localhost;charset=UTF8","root","root");
    echo "baglanti kuruldu <br />";
} catch (PDOException $error) {
    echo "hata kodu : " . $error->getMessage();
    die();
}

$sorgu = $db->exec("DROP DATABASE test");
    if ($sorgu !== false) {
        echo "basariyla silindi";
    } else {
        echo "sorgu hatasi";
    }

$db = null;




    ?>
</body>
</html>	