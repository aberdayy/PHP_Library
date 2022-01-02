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
	htmlspecialchars()			:	Belirtilecek olan içerikte bulunabilecek olan özel karakterleri (&, ', ", <, >) düz metin halinde okunabilir HTML metnine dönüştürerek, dönüştürdüğü değeri geriye döndürür.
		ENT_COMPAT				:	htmlspecialchars metodu kullanılarak dönüştürülecek olan metin için ek olarak " (çift tırnak) işaretlerini de dönüştürmek için kullanılır. (Varsayılan)
		ENT_QUOTES				:	htmlspecialchars metodu kullanılarak dönüştürülecek olan metin için ek olarak ' (tek tırnak) ve " (çift tırnak) işaretlerini de dönüştürmek için kullanılır.
		ENT_NOQUOTES			:	htmlspecialchars metodu kullanılarak dönüştürülecek olan metin için ' (tek tırnak) ve " (çift tırnak) işaretlerini dönüşümden çıkartmak / iptal etmek için kullanılır.
	htmlspecialchars_decode()	:	Belirtilecek olan ve htmlspecialchars metodu kullanılarak düz metin halinde sadece okunabilir HTML metnine dönüştürülmüş olan özel karakterleri (&, ', ", <, >), orjinal karakter haline geri dönüştürerek, dönüştürdüğü değeri geriye döndürür.
		ENT_COMPAT				:	htmlspecialchars_decode metodu kullanılarak geri dönüştürülecek olan metin için ' (tek tırnak) işaretlerini dönüşümden çıkartmak / iptal etmek için kullanılır. (Varsayılan)
		ENT_QUOTES				:	htmlspecialchars_decode metodu kullanılarak geri dönüştürülecek olan metin için ek olarak ' (tek tırnak) ve " (çift tırnak) işaretlerini de geri dönüştürmek için kullanılır.
		ENT_NOQUOTES			:	htmlspecialchars_decode metodu kullanılarak geri dönüştürülecek olan metin için ' (tek tırnak) ve " (çift tırnak) işaretlerini dönüşümden çıkartmak / iptal etmek için kullanılır.

*/
/*
$deger =    "<b>extra egitim</b> & ataberk erday & a'dan z'ye php gorsel egitim seti & 29\" monitor"; 
echo $deger . "<br />";
$islem = htmlspecialchars($deger);
echo $islem . "<br />";
---------------------------------------------*/
/*
$deger =    "<b>extra egitim</b> & ataberk erday & a'dan z'ye php gorsel egitim seti & 29\" monitor"; 
echo $deger . "<br />";
$islem = htmlspecialchars($deger, ENT_COMPAT);
echo $islem . "<br />";
---------------------------------------------*/
/*
$deger =    "<b>extra egitim</b> & ataberk erday & a'dan z'ye php gorsel egitim seti & 29\" monitor"; 
echo $deger . "<br />";
$islem = htmlspecialchars($deger, ENT_QUOTES);
echo $islem . "<br />";
---------------------------------------------*/
/*
$deger =    "<b>extra egitim</b> & ataberk erday & a'dan z'ye php gorsel egitim seti & 29\" monitor"; 
echo $deger . "<br />";
$islem = htmlspecialchars($deger, ENT_NOQUOTES);
echo $islem . "<br />";
---------------------------------------------*/

$Deger		=	"<b>Extra Eğitim</b> & <i>Volkan Alakent</i> & A'dan Z'ye PHP Görsel Eğitim Seti & 27\" Monitör";
echo $Deger . "<br /><br />";

$Islem		=	htmlspecialchars($Deger, ENT_QUOTES);
echo $Islem . "<br /><br />";

$Sonuc		=	htmlspecialchars_decode($Islem);
echo $Sonuc;

//  DIGER ISLEMLERDE BUNLARLA AYNI SEKILDE ILERLER




?>
</body>
</html>	