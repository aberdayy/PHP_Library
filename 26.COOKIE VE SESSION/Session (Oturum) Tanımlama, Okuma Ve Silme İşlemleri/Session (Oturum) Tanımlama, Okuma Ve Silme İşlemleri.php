 <?php 
session_start();
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
session_start()     :   session baslatmak veya sessionlari takip etmek icin kullanilir.       
session_destroy()   :   daha  onceden olusturulmus olan sessionlari silmek icin kullanilir.
*/
//      SESSION METODU SAYFANIN EN USTUNDE YANI DOCTYPEDAN BILE ONCE KULLANILMASI GEREKIR.
//unset($_SESSION["kullaniciadi"] ); silmek istenilen sessionun degeri yazilirsa sadece belirtilen session silinir  

/*
$_SESSION["kullaniciadi"]    =     "ataberk";
-----------------------------------------*/
/*
$_SESSION["kullaniciadi"]               =     "ataberk";
$_SESSION["kullanicisoyadi"]            =     "erday";
$_SESSION["kullaniciemailadresi"]       =     "ataberkerday@gmai.com";
$_SESSION["kullanicitelefonu"]          =     "0544 386 9794";
$_SESSION["kullanicisehri"]             =     "istanbul kadikoy";
-----------------------------------------*/

/*
$_SESSION["kullaniciadi"]               =     "ataberk";
$_SESSION["kullanicisoyadi"]            =     "erday";
$_SESSION["kullaniciemailadresi"]       =     "ataberkerday@gmai.com";
$_SESSION["kullanicitelefonu"]          =     "0544 386 9794";
$_SESSION["kullanicisehri"]             =     "istanbul kadikoy";

echo "<pre>";
print_r($_SESSION);
echo "</pre>";
echo $_SESSION["kullaniciemailadresi"];
--------------------------------------------*/

$_SESSION["kullaniciadi"]               =     "ataberk";
$_SESSION["kullanicisoyadi"]            =     "erday";
$_SESSION["kullaniciemailadresi"]       =     "ataberkerday@gmai.com";
$_SESSION["kullanicitelefonu"]          =     "0544 386 9794";
$_SESSION["kullanicisehri"]             =     "istanbul kadikoy";

?>
<a href="oku.php">sessionlari OKU!!!!!</a>
</body>
</html>	