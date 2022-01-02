<?php 
 header("Refresh:5")
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
str_replace()       :   Belirtilecek olan icerikte, belirtilecek olan deger veya degerleri arayarak, eslesen deger veya degerler olmasi durumunda belirtilecek olan deger veya degerle degistirerek degistirilmis olan degeri geriye dondurur. ayrica belirtilecek olan ve eslesen tum deger veya degerlerinde sayisini geriye dondurebilir.
str_ireplace()      :   Belirtilecek olan icerikte, belirtilecek olan deger veya degerleri arayarak, eslesen deger veya degerler olmasi durumunda belirtilecek olan deger veya degerle degistirerek degistirilmis olan degeri geriye dondurur. ayrica belirtilecek olan ve eslesen tum deger veya degerlerinde sayisini geriye dondurebilir. BUYUK HARF KUCUK HARF DUYARSIZ!!!
strtr()             :   Belirtilecek olan icerikte, belirtilecek olan dizi turundeki deger veya degerleri arayarak, eslesen deger veya degerler olmasi durumunda, belirtilecek olan deger veya degerlerle degistirerek, degistirilmis olan degeri geriye dondurur. 
nl2br               :   Belirtilecek olan icerikte bulunabilecek olan tum ozel satir sonlandirma karakterlerini (\n) HTML satir sonlandirma karakterlerine (<br />) ile degistirerek, degistirilmis olan degeri geriye dondurur.
*/

/*
$icerik = "Benim adim Atakan Erday. Ben bir javascript yazilimcisiyim";

echo $icerik . "<br />";

$arananlar          =   array("Atakan Erday", "javascript");
$degistirilecekler  =   array("Ataberk Erday", "PHP");
$islem              =   str_replace($arananlar, $degistirilecekler, $icerik);

echo $islem;
----------------------------------------------------------*/
/*
$icerik = "Benim adim Atakan Erday. Ben bir javascript yazilimcisiyim";

echo $icerik . "<br />";

$arananlar          =   array("Atakan Erday", "javascript");
$degistirilecekler  =   array("Ataberk Erday", "PHP");
$islem              =   str_replace($arananlar, $degistirilecekler, $icerik,$sayi); // 4. parametre eslesen degerlerin sayisini belirtir.

echo $islem . "<br />";
echo "eslesen degerler :".$sayi;
----------------------------------------------------------*/
/*
$icerik = "Benim adim atakan erday. Ben bir javascript yazilimcisiyim";

echo $icerik . "<br />";

$arananlar          =   array("Atakan Erday", "javascript");
$degistirilecekler  =   array("Ataberk Erday", "PHP");
$islem              =   str_ireplace($arananlar, $degistirilecekler, $icerik); // BUYUK HARF KUCUK HARF DUYARSIZ

echo $islem;
----------------------------------------------------------*/
/*
$icerik = "Benim adim atakan erday. Ben bir javascript yazilimcisiyim";

echo $icerik . "<br />";

$arananlar          =   array("Atakan Erday", "javascript");
$degistirilecekler  =   array("Ataberk Erday", "PHP");
$islem              =   str_ireplace($arananlar, $degistirilecekler, $icerik,$sayi); // 4. parametre eslesen degerlerin sayisini belirtir.

echo $islem . "<br />";
echo "eslesen degerler :".$sayi;
----------------------------------------------------------*/
//----------------------------------------------------------*/----------------------------------------------------------*/----------------------------------------------------------*/
/*
$icerik = "benim adim Onur Tatli. Ben bir javascript yazilimcisiyim";
echo $icerik . "<br />";

$dizi       =   array("Onur Tatli" => "Ataberk Erday", "javascript"=>"PHP");     //str replace metodunun yaptigi isin aynisini yapar ancak farkli bir yontemle/
$islem      =   strtr($icerik, $dizi); 
echo $islem;
----------------------------------------------------------*/
/*
$icerik = "Onur Tatli. Ben bir javascript yazilimcisiyim";
echo $icerik . "<br />";

$degisecek = array("ataberk erday");
$islem     = substr_replace($icerik,$degisecek,0,11); // ucuncu parametre nereden baslayacagini belirtir. dorduncu parametre nerede bitecegeni belirtir. 
// 0. karakterden basla 11. i karaktere kadar sil ve icerigi ekle. anlamini tasir.
echo $islem; 
----------------------------------------------------------*/
/*
$icerik = "Onur Tatli bir javascript yazilimcisiyim";
echo $icerik . "<br />";

$degisecek = array(" ve ataberk erday");
$islem     = substr_replace($icerik,$degisecek, 11,0); 
echo $islem; 
----------------------------------------------------------*/
/*
$Icerik				=	"Ataberk Erday bir PHP yazılımcısıdır.";

echo $Icerik . "<br />";

$Degisecek			=	array("Javascript programlama ve yazılım geliştirme uzmanıdır.");
$Islem				=	substr_replace($Icerik, $Degisecek, -28);

echo $Islem;
----------------------------------------------------------*/
/*
$icerik				=	"Ataberk Erday bir PHP yazılımcısıdır.";

echo $icerik ."<br />";

$Degisecek			=	array("");
$Islem				=	substr_replace($icerik, $Degisecek, 7,6); // 7 den basla 6 sil anlamindadir

echo $Islem;
----------------------------------------------------------*/
/*
$Icerik				=	"Extra Eğitim\nAtaberk Erday\nA'dan Z'ye PHP Görsel Eğitim Seti\nA'dan Z'ye CSS3 Görsel Eğitim Seti\nA'dan Z'ye Javascript Görsel Eğitim Seti";

echo $Icerik . "<br /><br /><br /><br /><br />";

$Islem				=	nl2br($Icerik);

echo $Islem;
----------------------------------------------------------*/
$Icerik				=	"Extra Eğitim
Volkan Alakent
A'dan Z'ye PHP Görsel Eğitim Seti
A'dan Z'ye CSS3 Görsel Eğitim Seti
A'dan Z'ye Javascript Görsel Eğitim Seti";

echo $Icerik . "<br /><br /><br /><br /><br />";

$Islem				=	nl2br($Icerik);

echo $Islem;



?>
</body>
</html>	
	
	