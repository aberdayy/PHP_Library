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
    try {
        $veritabanibaglantisibir  = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=UTF8","root","root");
        echo "birinci veritabanina baglanti kuruldu <br />";
    } catch (PDOException $hata1) {
        echo "1. veritabani baglanti hatasi kodu : " . $hata1->getMessage() . "<br />";
        die();
    }

$veritabanibaglantisibir = null;


try {
    $veritabanibaglantisiiki  = new PDO("mysql:host=localhost;dbname=deneme;charset=UTF8","root","root");
    echo "ikinci veritabanina baglanti kuruldu<br />";
} catch (PDOException $hata2) {
    echo "2. veritabani baglanti hatasi kodu : " . $hata2->getMessage() . "<br />";
    die();
}

$veritabanibaglantisiiki = null;
-----------------------------------------------------*/

try {
    $veritabanibaglantisibir  = new PDO("mysql:host=localhost;charset=UTF8","root","root");
    $veritabanibaglantisiiki  = new PDO("mysql:host=localhost;charset=UTF8","root","root");       
    echo " veritabanlarina baglanti kuruldu <br />";
} catch (PDOException $hata) {
    echo " veritabani baglanti hatasi kodu : " . $hata->getMessage() . "<br />";
    die();
}
$sorgubir = $veritabanibaglantisibir->query("SELECT * FROM RDYmedia.uyeler");
$sorguiki = $veritabanibaglantisiiki->query("SELECT * FROM deneme.kisiler");
if ($sorgubir and $sorguiki) {
    echo "sorgu calisti";
}else{
    echo "Sorgu hatasi";
}
$veritabanibaglantisibir = null;
$veritabanibaglantisiiki = null;



 















    ?>
</body>
</html>	