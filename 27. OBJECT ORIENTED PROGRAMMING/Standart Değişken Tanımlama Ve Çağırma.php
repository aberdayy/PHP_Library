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
var : herhangi bir sinif icerisinde standart degisken tanimlamak icin kullanilir.

const ve function islemlerinde kullanilamaz hata koidu dondurur. 
sinif icerisinde standart bir degisken olusturmak icin kullanilir.
*/
class deneme{

    var $isim     = "ataberk";
    const SOYISIM = " erday";
}
$islem = new deneme;


echo $islem->isim;
echo deneme::SOYISIM;




?>
</body>
</html>	