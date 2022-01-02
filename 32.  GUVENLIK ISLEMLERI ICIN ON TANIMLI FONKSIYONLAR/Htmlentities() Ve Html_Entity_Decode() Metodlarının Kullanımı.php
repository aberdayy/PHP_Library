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
	htmlentities()				:	Belirtilecek olan içerikte bulunabilecek olan tüm özel karakterleri düz metin halinde okunabilir HTML metnine dönüştürerek,
	 dönüştürdüğü değeri geriye döndürür.

		ENT_COMPAT				:	htmlentities metodu kullanılarak dönüştürülecek olan metin için ek olarak " (çift tırnak) işaretlerini de dönüştürmek için
		 kullanılır. (Varsayılan)
		
		 ENT_QUOTES				:	htmlentities metodu kullanılarak dönüştürülecek olan metin için ek olarak ' (tek tırnak) ve " (çift tırnak) işaretlerini de
		 dönüştürmek için kullanılır.
		
		 ENT_NOQUOTES			:	htmlentities metodu kullanılarak dönüştürülecek olan metin için ' (tek tırnak) ve " (çift tırnak) işaretlerini dönüşümden
		  çıkartmak / iptal etmek için kullanılır.
	
	  html_entity_decode()		:	Belirtilecek olan ve htmlentities metodu kullanılarak düz metin halinde sadece okunabilir HTML metnine dönüştürülmüş olan
	   tüm özel karakterleri, orjinal karakter haline geri dönüştürerek, dönüştürdüğü değeri geriye döndürür.
		
	   ENT_COMPAT				:	html_entity_decode metodu kullanılarak geri dönüştürülecek olan metin için ' (tek tırnak) işaretlerini dönüşümden
	    çıkartmak / iptal etmek için kullanılır. (Varsayılan)
		
		ENT_QUOTES				:	html_entity_decode metodu kullanılarak geri dönüştürülecek olan metin için ek olarak ' (tek tırnak) ve " (çift tırnak)
		 işaretlerini de geri dönüştürmek için kullanılır.
		
		 ENT_NOQUOTES			:	html_entity_decode metodu kullanılarak geri dönüştürülecek olan metin için ' (tek tırnak) ve " (çift tırnak)
		  işaretlerini dönüşümden çıkartmak / iptal etmek için kullanılır.
	*/
	/*
	$Deger		=	"<b>Extra Eğitim</b> & <i>Volkan Alakent</i> & A'dan Z'ye PHP Görsel Eğitim Seti & 27\" Monitör";
	echo $Deger . "<br /><br />";
	
	$Islem		=	htmlentities($Deger);
	echo $Islem;
	-------------------------------------------------------*/
	/*
	$Deger		=	"<b>Extra Eğitim</b> & <i>Volkan Alakent</i> & A'dan Z'ye PHP Görsel Eğitim Seti & 27\" Monitör";
	echo $Deger . "<br /><br />";
	
	$IslemBir		=	htmlentities($Deger);
	echo $IslemBir . "<br /><br />";
	
	$IslemIki		=	htmlentities($Deger, ENT_COMPAT);
	echo $IslemIki;
	
-------------------------------------------------------*/
/*
$Deger		=	"<b>Extra Eğitim</b> & <i>Volkan Alakent</i> & A'dan Z'ye PHP Görsel Eğitim Seti & 27\" Monitör";
echo $Deger . "<br /><br />";

$IslemBir		=	htmlentities($Deger);
echo $IslemBir . "<br /><br />";

$IslemIki		=	htmlentities($Deger, ENT_COMPAT);
echo $IslemIki . "<br /><br />";

$IslemUc		=	htmlentities($Deger, ENT_QUOTES);
echo $IslemUc;
-------------------------------------------------------*/
/*
$Deger		=	"<b>Extra Eğitim</b> & <i>Volkan Alakent</i> & A'dan Z'ye PHP Görsel Eğitim Seti & 27\" Monitör";
echo $Deger . "<br /><br />";

$IslemBir		=	htmlentities($Deger);
echo $IslemBir . "<br /><br />";

$IslemIki		=	htmlentities($Deger, ENT_COMPAT);
echo $IslemIki . "<br /><br />";

$IslemUc		=	htmlentities($Deger, ENT_QUOTES);
echo $IslemUc . "<br /><br />";

$IslemDort		=	htmlentities($Deger, ENT_NOQUOTES);
echo $IslemDort;
-------------------------------------------------------*/
/*
$Deger		=	"<b>Extra Eğitim</b> & <i>Volkan Alakent</i> & A'dan Z'ye PHP Görsel Eğitim Seti & 27\" Monitör";
echo $Deger . "<br /><br />";

$Islem		=	htmlentities($Deger, ENT_QUOTES);
echo $Islem . "<br /><br />";

$Sonuc		=	html_entity_decode($Islem);
echo $Sonuc;
-------------------------------------------------------*/
/*
$Deger		=	"<b>Extra Eğitim</b> & <i>Volkan Alakent</i> & A'dan Z'ye PHP Görsel Eğitim Seti & 27\" Monitör";
echo $Deger . "<br /><br />";

$Islem		=	htmlentities($Deger, ENT_QUOTES);
echo $Islem . "<br /><br />";

$SonucBir		=	html_entity_decode($Islem);
echo $SonucBir . "<br /><br />";

$SonucIki		=	html_entity_decode($Islem, ENT_COMPAT);
echo $SonucIki;
-------------------------------------------------------*/
/*
$Deger		=	"<b>Extra Eğitim</b> & <i>Volkan Alakent</i> & A'dan Z'ye PHP Görsel Eğitim Seti & 27\" Monitör";
echo $Deger . "<br /><br />";

$Islem		=	htmlentities($Deger, ENT_QUOTES);
echo $Islem . "<br /><br />";

$SonucBir		=	html_entity_decode($Islem);
echo $SonucBir . "<br /><br />";

$SonucIki		=	html_entity_decode($Islem, ENT_COMPAT);
echo $SonucIki . "<br /><br />";

$SonucUc		=	html_entity_decode($Islem, ENT_QUOTES);
echo $SonucUc;
-------------------------------------------------------*/
$Deger		=	"<b>Extra Eğitim</b> & <i>Volkan Alakent</i> & A'dan Z'ye PHP Görsel Eğitim Seti & 27\" Monitör";
echo $Deger . "<br /><br />";

$Islem		=	htmlentities($Deger, ENT_QUOTES);
echo $Islem . "<br /><br />";

$SonucBir		=	html_entity_decode($Islem);
echo $SonucBir . "<br /><br />";

$SonucIki		=	html_entity_decode($Islem, ENT_COMPAT);
echo $SonucIki . "<br /><br />";

$SonucUc		=	html_entity_decode($Islem, ENT_QUOTES);
echo $SonucUc . "<br /><br />";

$SonucDort		=	html_entity_decode($Islem, ENT_NOQUOTES);
echo $SonucDort;
















?>
</body>
</html>	