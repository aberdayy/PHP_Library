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
crypt()     :   belirtilecek olan icerigin tek yonlu gelsimis bir sekilde sifrelemesini yaparak, sifrelenen degeri geriye dondurur. 
*/
/*
$deger = "extra egitim";
$olustur = crypt($deger); // hata kodu dondurur cunku salt kullanilmamistir.
echo $olustur;
---------------------------------------------------*/
/*
$deger = "extra egitim";
$olustur = @crypt($deger); //@ isaretri oldugu icin hata kodu dondurmez
echo $olustur;
---------------------------------------------------*/
/*
$deger = "extra egitim";
$olustur = crypt($deger,"AR"); //2 karakterlik salt kullanilmis DES(algoritma) sifrelemesi. 2. parametre salt degeridir ve istenilen sekilde isimlendirilebilir. salt degisirse sifrede degisir.
echo $olustur;
---------------------------------------------------*/
/*
$deger = "extra egitim";
$olustur = crypt($deger,"_asdfghjkl"); //9 karakterlik salt kullanilmis DES sifrelemesi. 9 karakterlik salt ta ilkdeger her zaman _ (alt tre) olmali
echo $olustur;
---------------------------------------------------*/

$deger = "extra egitim";
$olustur = crypt($deger,'$1$asdfghjk$'); //12 karakterlik salt kullanilmis MD5 sifrelemesi. 12 karakterlik salt ta ilkdeger her zaman $1$........$ seklinde olmali
echo $olustur;










?>
</body>
</html>	