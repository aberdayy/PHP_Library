<?php 
 header("Refresh:2")
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
levenshtein()	:	Belirtilecek olan iki değer arasındaki levenshtein mesafesini bularak, bulduğu değeri geriye döndürür.
         Levenshtein mesafesini : Bir değeri diğer bir değere dönüştürebilmek için değiştirilecek veya eklenecek veya silinecek karakter sayısı anlamına gelir.

similar_text()  :   belirtilecek olan iki deger arasindaki benzerligi yuzdesel olarak bularak buldugu degeri geriye dondurur.
*/
/*
$gelen_deger     =   "ataberk earet";
$gercek_deger    =   "ataberk erday";

echo "Gelen deger : " . $gelen_deger . "<br />Gercek Deger : " . $gercek_deger . "<br /><br /><br /><br />";

$fark            =    levenshtein($gelen_deger,$gercek_deger);   

echo "Degistirilecek veya eklenecek veya silinecek karakter sayisi : " . $fark;
-----------------------------------------------------------*/
/*
$gelen_deger    =   "ataberk erday";
$gercek_deger   =   "ataberk erday";

echo "Gelen deger : " . $gelen_deger . "<br />Gercek Deger : " . $gercek_deger . "<br /><br /><br /><br />";

$fark           =   levenshtein($gelen_deger,$gercek_deger);

if ($fark==0) {
    echo "Tebrikler! Tam eslesme saglandi.";
}elseif ($fark==1) {
    echo "Tebrikler, 1 yaklasik eslesme saglandi.";
}elseif ($fark==2) {
    echo "Idare eder, 2 yaklasik eslesme saglandi";
}else {
    echo "Cok kotu, 3 veya daha fazla yaklasik eslesme saglandi";
}
-----------------------------------------------------------*/
/*
$gelen_deger        =       "atabeeerk erday";
$gercek_deger       =       "atabeeerk erday";

echo "Gelen deger : " . $gelen_deger . "<br />Gercek Deger : " . $gercek_deger . "<br /><br /><br /><br />";

$benzerlik_orani    =   similar_text($gercek_deger, $gelen_deger);

echo "Benzer karakter : " . $benzerlik_orani;
-----------------------------------------------------------*/
/*
$gelen_deger        =       "ataberk erday";
$gercek_deger       =       "ataberk erday";

echo "Gelen deger : " . $gelen_deger . "<br />Gercek Deger : " . $gercek_deger . "<br /><br /><br /><br />";

$benzerlik_orani    =   similar_text($gercek_deger, $gelen_deger, $oran);

echo "Benzer karakter : " . $benzerlik_orani . "<br />";
echo "oran :%" . $oran . "<br />";
-----------------------------------------------------------*/
$Gelen_deger			=	"PHP Web Tabanlı, nesne yönelimli bir programlama dilidir. Eskiden Personal Home Page (PHP) yani Kişisel Anasayfa iken şimdilerde PHP: Hypertext Preprocessor olarak kullanıma devam edilmektedir. PHP, dinamik, kendi kendine yönetilebilir web siteleri yapılmasını sağlar.";

$Gercek_deger		=	"PHP Web Tabanlı, nesne yönelimli bir gelişmiş programlama dilidir. Eskiden Personal Home Page (PHP) yani Kişisel Anasayfa iken şimdilerde PHP: Hypertext Preprocessor olarak ismi değiştirilmiş. PHP, dinamik, kendi kendine yönetilebilir web siteleri yapılmasını sağlar.";

echo "Gelen Değer : " . $Gelen_deger . "<br />Gerçek Değer : " . $Gercek_deger ."<br /><br /><br />";

$benzerlik_orani    =   similar_text($Gercek_deger, $Gelen_deger, $oran);

echo "Benzer karakter : " . $benzerlik_orani . "<br />";
echo "oran :%" . $oran . "<br />";

?>
</body>
</html>	
	
	