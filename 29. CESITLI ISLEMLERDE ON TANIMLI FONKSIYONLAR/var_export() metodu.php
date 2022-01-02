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
var_export()    :   belirtilecek olan herhangi bir degiskenin cozumlenebilir gosterimini bularak buldugu gosterimin ekran ciktilanmasini saglamak icn kullanilir.
*/
/*
$deger = "ataberk erday";
$tarih = 2020;
echo $deger . "<br />";

var_export($deger);
echo "<br />";
var_export($tarih);
----------------------------------------------------------*/
/*
$deger = array("ataberk erday",2019,"istanbul");

var_export($deger);
----------------------------------------------------------*/
/*
$deger = array("ataberk erday",2019,"istanbul");

echo "<pre>";
var_export($deger);
echo "</pre>";
----------------------------------------------------------*/
class deneme{
    public $isim = "ataberk";
    public $soyisim = "erday";
    public function bilgiler(){
        $tarih = 2020;
        $sehir = "istanbul";
        $dondur = $tarih . "<br />" . $sehir;
        return $dondur;
    }
}

$sonuc= new deneme;
echo $sonuc->isim . " " . $sonuc->soyisim . "<br />";
echo $sonuc->bilgiler(). "<br />". "<br />". "<br />";


var_export($sonuc);
echo "<br />";
var_export($sonuc->bilgiler());

?>
</body>
</html>	