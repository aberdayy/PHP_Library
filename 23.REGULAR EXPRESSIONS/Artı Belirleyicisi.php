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
+   :   duzneli ifade dahilinde kontrol edilecek olan icerigin karakter diziliminde bulunacak olan degerin bir defa yada daha fazla tekrarlanmis olmasi gerektigini belirtmek icin kullanilir. 
*/
/*
$icerik = "ataberk - erday -- extra --- egitim ---- bana ----- facebok ------ uzerinde ------- ulasabilirsiniz ---------";
$desen = "/-+/";
preg_match_all($desen,$icerik,$sonuc);
echo "orjhinal icerik : " . $icerik . "<br />";
echo "<pre>";
print_r($sonuc);
echo "</pre>";
=--------------------------*/

$icerik = "1 11 111 1111 11111 111111 1111111 11111111 111111111";
$desen = "/1+/";
preg_match_all($desen,$icerik,$sonuc);
echo "orjhinal icerik : " . $icerik . "<br />";
echo "<pre>";
print_r($sonuc);
echo "</pre>";


?>


</body>
</html>	