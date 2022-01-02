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
    RENAME      :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun adini degistirmek icin kullanilir. istenirse herhangi bir tabloyu icerisinde bulundugu database den
     baska bir database tasimak icin kullanilir.
    */
/*
    try {
        $veritabanibaglantisi = new PDO("mysql:host=localhost;dbname=test;charset=utf8","root","root");
        echo "baglanti kuruldu <br />";
    } catch (PDOException $hata) {
        echo "veritabani hatasi : " . $hata->getMessage();
        die();
    }
    $sorgu = $veritabanibaglantisi->query("RENAME TABLE ornek TO ataberk");
        if ($sorgu) {
            echo "tablo adi degistirildi!";
        } else {
            echo "islem basarisiz!";
        }



        
        $veritabanibaglantisi =null;
    -----------------------------------------------------------------------------*/
    /*
    try {
        $veritabanibaglantisi = new PDO("mysql:host=localhost;charset=utf8","root","root");
    echo "baglanti kuruldu <br />";
} catch (PDOException $hata) {
    echo "veritabani hatasi : " . $hata->getMessage();
    die();
}
$sorgu = $veritabanibaglantisi->query("RENAME TABLE test.ataberk TO deneme.ornek ");
    if ($sorgu) {
        echo "tablo tasindi!";
    } else {
        echo "islem basarisiz!";
    }




$veritabanibaglantisi =null;
-----------------------------------------------------------------------------*/
/*
try {
    $veritabanibaglantisi = new PDO("mysql:host=localhost;charset=utf8","root","root");
    echo "baglanti kuruldu <br />";
} catch (PDOException $hata) {
echo "veritabani hatasi : " . $hata->getMessage();
die();
}
$sorgu = $veritabanibaglantisi->query("RENAME TABLE deneme.ornek TO test.ataberk ");
if ($sorgu) {
    echo "tablo tasindi!";
} else {
    echo "islem basarisiz!";
}
-----------------------------------------------------------------------------*/

try {
    $veritabanibaglantisi = new PDO("mysql:host=localhost;charset=utf8","root","root");
    echo "baglanti kuruldu <br />";
} catch (PDOException $hata) {
echo "veritabani hatasi : " . $hata->getMessage();
die();
}
$sorgu = $veritabanibaglantisi->exec("RENAME TABLE test.ataberk TO deneme.ornek ");
if ($sorgu !== false) {
    echo "tablo tasindi!";
} else {
    echo "islem basarisiz!";
}



$veritabanibaglantisi =null;


















    ?>
</body>
</html>	