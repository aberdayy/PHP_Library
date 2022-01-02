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
define("ISIM","ataberk");
define("SOYISIM","erday");

define("SONUC", ISIM ." ". SOYISIM);
echo SONUC;
------------------------------------

const ISIM = "ataberk";
const SOYISIM = "erday";

const SONUC = ISIM . " " . SOYISIM;
echo SONUC;
*******************************************


define("ISIM","ataberk");
const SOYISIM = "erday";

define("SONUC", ISIM ." ". SOYISIM);
echo SONUC;

--------------------------------------------

define("ISIM","ataberk");
const SOYISIM = "erday";

const SONUC = ISIM . " " . SOYISIM;
echo SONUC;

*/ 

define("ISIM","ataberk");
const SOYISIM = "erday";
$firmaadi   = "erart";

define("SONUC",$firmaadi." ". ISIM ." ". SOYISIM);
echo SONUC;
?>

</body>
</html>	