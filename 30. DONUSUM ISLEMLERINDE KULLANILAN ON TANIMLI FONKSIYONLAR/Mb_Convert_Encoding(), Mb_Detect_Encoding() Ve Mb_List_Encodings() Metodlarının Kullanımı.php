<?php 
 header("Refresh:20")
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
mb_convert_encoding()   :   Belirtilecek olan icerigi, belirtilecek olan karakter kodlamasi dahilinde donusturerek,
karakter kodlamasi donusturulmus olan degeri geriye dondurur.
            auto degeri verilmesi durumunda ASCII, JIS, UTF-8, EUC-JP, SJIS kodlamasi sirasi kullanilir.
mb_detect_encoding()    :   Belirtilecek olan icerigin karakter kodlamasini algilayarak, buldugu degeri geriye dondurur.
mb_list_encoding()      :   PHP yazilimi icerisinde kullanilabilecek olan sisteme tanimli tum karakter kodlamasi listesini bulur ve buldugu degerlerden yeni bir dizi olusturarak, olusturdugu dizi degerini geriye dondurur.
*/
/*
$icerik		=	"Extra Eğitim - Ataberk Erday - A'dan Z'ye PHP Görsel Eğitim Seti";

echo $icerik."<br />";
$islem      =   mb_convert_encoding($icerik,"ISO-8859-9","UTF-8");
echo $islem . "<br />";
$sonuc      =   mb_convert_encoding($islem,"UTF-8","ISO-8859-9");
echo $sonuc;
-------------------------------------------------*/
/*
$icerik		=	"Extra Eğitim - Ataberk Erday - A'dan Z'ye PHP Görsel Eğitim Seti";
echo $icerik . "<br />";
$islem  =   mb_convert_encoding($icerik,"ISO-8859-1","UTF-8");
echo $islem;
-------------------------------------------------*/
/*
$icerik		=	"Extra Eğitim - Ataberk Erday - A'dan Z'ye PHP Görsel Eğitim Seti";
echo $icerik . "<br />";
$islem  =   mb_convert_encoding($icerik, "ISO-8859-9","auto");
echo $islem."<br />";
$sonuc  =   mb_convert_encoding($islem, "UTF-8","auto");
echo $sonuc;
-------------------------------------------------*/
/*
$icerik		=	"Extra Eğitim - Ataberk Erday - A'dan Z'ye PHP Görsel Eğitim Seti";
echo $icerik . "<br />";
$islem  =   mb_convert_encoding($icerik, "ISO-8859-9","auto");
echo $islem."<br />";
$sonuc  =   mb_convert_encoding($islem, "UTF-8","ISO-8859-9");
echo $sonuc;
-------------------------------------------------*/
/*
$icerik		=	"Extra Eğitim - Ataberk Erday - A'dan Z'ye PHP Görsel Eğitim Seti";
echo $icerik . "<br />";
$islem  =   mb_convert_encoding($icerik, "ISO-8859-9","auto");
echo $islem."<br />";
$sonuc  =   mb_convert_encoding($islem, "UTF-8","UTF-8, ISO-8859-9, ISO-8859-1");
echo $sonuc;
-------------------------------------------------*/
/*
$icerik		=	"Extra Eğitim - Ataberk Erday - A'dan Z'ye PHP Görsel Eğitim Seti";
echo $icerik . "<br />";
$bul        =   mb_detect_encoding($icerik);
echo $bul . "<br />";
$islem      =   mb_convert_encoding($icerik, "ISO-8859-9",$bul);
echo $islem . "<br />";
$sonuc		=	mb_convert_encoding($islem, "UTF-8", "ISO-8859-9");
echo $sonuc;	
-------------------------------------------------*/
$degerler       =   mb_list_encodings();
echo "<pre>";
print_r($degerler);
echo "</pre>";














?>
</body>
</html>	
	
