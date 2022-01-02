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
uniqid()        :   mikrosaniye cinsinden gecerli zamana dayali olarak belirtilen on ek ile benzersiz bir deger ureterek urettigi degeri geriye dondurur.
md5()           :   belirtilecek olan icerigin md5 ozetini hesaplayarak buldugu degeri geriye dondurur.
md5_file()      :   belirtilecek olan dosyanin md5 ozetini hesaplayarak buldugu degeri geriye dondurur.
*/
/*
$olustur    =   uniqid();
echo $olustur;
------------------------------------*/
/*
$deger      = "ataberk erday";
$olustur    =   uniqid($deger); //uniqid ye on ek olarak ekler
echo $olustur;
------------------------------------*/
/*
$deger      = "ataberk erday";
$olustur    =   uniqid($deger,true); // uniqid ye dokuntu ekler dizge sonuna rastgale uretilmis karakter ekler anlami birlesik dogrusal benzesimsel uretec!!!!1

echo $olustur;
------------------------------------*/
/*
$sifre      =   "123456789";
$olustur    =   md5($sifre); 
echo $olustur;
------------------------------------*/
/*
$sifre      =   "ataberk123erdaYYY";
$olustur    =   md5($sifre);    //daima 32 bit veri dondurur 
echo $olustur;
------------------------------------*/
/*
$dosya      =   "Dosya.zip";
$olustur    =   md5_file($dosya);   
echo $olustur;
------------------------------------*/
/*
$dosya      =   "index.php";      //her dosyada kullanilir.
$olustur    =   md5_file($dosya);   
echo $olustur;
------------------------------------*/
/*
$olustur    =   md5(uniqid());  // resim yukleme islemlerinde isim tekrarlanmasin diye yapilir.
echo $olustur;
------------------------------------*/
$olustur    =   md5(uniqid(mt_rand()));  //tahmin edilmesi imkansiz ve tekrarlanmayan yapi
echo $olustur;


















?>
</body>
</html>	