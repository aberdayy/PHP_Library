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
strip_tags()	:	Belirtilecek olan içerikte bulunabilecek olan tüm HTML kodlarını temizleyerek, temizlenmiş olan değeri geriye döndürür.
*/
/*
$Deger		=	"<b>Extra Eğitim</b> <i>Volkan Alakent</i> <u>A'dan Z'ye PHP Görsel Eğitim Seti</u>";
echo $Deger . "<br /><br />";
	
$Sonuc		=	strip_tags($Deger);
echo $Sonuc;
-------------------------------------------*/
/*
$Deger		=	"<h1>Extra Eğitim</h1><div>Volkan Alakent</div><div>A'dan Z'ye PHP Görsel Eğitim Seti</div>";
echo $Deger . "<br /><br />";


$Sonuc		=	strip_tags($Deger);
echo $Sonuc;
-------------------------------------------*/
/*
$Deger		=	"<h1>Extra Eğitim</h1><div>Volkan Alakent</div><div>A'dan Z'ye PHP Görsel Eğitim Seti</div><br /><a href='https://www.extraegitim.com'>Extra Eğitim Sitesine Git</a>";
echo $Deger . "<br /><br />";
	
	
$Sonuc		=	strip_tags($Deger, "<h1>");
echo $Sonuc;
-------------------------------------------*/
/*
$Deger		=	"<h1>Extra Eğitim</h1><div>Volkan Alakent</div><div>A'dan Z'ye PHP Görsel Eğitim Seti</div><br /><a href='https://www.extraegitim.com'>Extra Eğitim Sitesine Git</a>";
echo $Deger . "<br /><br />";


$Sonuc		=	strip_tags($Deger, "<h1><a>");
echo $Sonuc;
-------------------------------------------*/
/*
$Deger		=	"Extra Eğitim<br />Volkan Alakent<br/>A'dan Z'ye PHP Görsel Eğitim Seti<br>A'dan Z'ye HTML Görsel Eğitim Seti";
echo $Deger . "<br /><br />";


$Sonuc		=	strip_tags($Deger, "<br />");
echo $Sonuc;
-------------------------------------------*/

$Deger		=	"Extra Eğitim<br />Volkan Alakent<br/>A'dan Z'ye PHP Görsel Eğitim Seti<br>A'dan Z'ye HTML Görsel Eğitim Seti";
echo $Deger . "<br /><br />";


$Sonuc		=	strip_tags($Deger, "<br>");
echo $Sonuc;








?>
</body>
</html>	