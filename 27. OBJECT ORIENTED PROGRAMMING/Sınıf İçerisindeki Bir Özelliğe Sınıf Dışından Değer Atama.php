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
class deneme {

        public $isim    = "";
        public $soyisim = "";

}
$islem = new deneme; 
$islem->isim = "ziyaa"; 
echo $islem->isim; 
-----------------*/
/*
class deneme {

        public $isim    = "ataberk";
        public $soyisim = "erday";

}
$islem = new deneme; 
$islem->isim = "ziya"; 
$islem->soyisim = "saka";  
echo $islem->isim . " " . $islem->soyisim; 
--------------------------------*/
/*
class deneme {

        public $isim;
        public $soyisim;

}
$islem = new deneme; 
$islem->isim = "ata"; 
$islem->soyisim = "erday";  
echo $islem->isim . " " . $islem->soyisim; 
--------------------------------*/
class deneme {

        public $isim;
        public $soyisim;

}
$islem = new deneme; 

$islem->isim = "ata"; 
$islem->soyisim = "erday";  

echo $islem->isim . " " . $islem->soyisim . "<br />"; 

$islem->isim     = "sadik";
$islem->soysisim = "erday";

echo $islem->isim . " " . $islem->soyisim . "<br />";

$islem->isim    = "lacin berke";
$islem->soyisim = "kabulcu"; 

echo $islem->isim . " " . $islem->soyisim . "<br />";

$islem->isim = "okay";
$islem->soyisim = "kabulcu";  

echo $islem->isim . " " . $islem->soyisim . "<br />";


?>
</body>
</html>	