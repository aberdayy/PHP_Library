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
get_html_translation_table()	:	PHP yazilimi icerisinde kullanilabilecek olan sisteme tanimli tum htmlspecialchars ve htmlentities donusturulebilir karakterlerinin listesini bulur ve buldugu degerlerden yeni bir dizi olusturarak olusturdugu dizi degerini geriye dondurur.
		HTML_ENTITIES			:	get_html_translation_table metodu kullanilarak html entities metodu icin tanimlanmis ve donusturulecek olan karakter listesini elde etmek icin kullanilir.
		HTML_SPECIALCHARS		:	get_html_translation_table metodu kullanilarak html spacialchars metodu icin tanimlanmis ve donusturulecek olan karakter listesini elde etmek icin kullanilir.
*/
/*
$degerler = get_html_translation_table();
echo "<pre>";
print_r($degerler);
echo "</pre>";
-----------------------------------*/
/*
$degerler = get_html_translation_table(HTML_ENTITIES);
echo "<pre>";
print_r($degerler);
echo "</pre>";
-----------------------------------*/

$degerler = get_html_translation_table(HTML_SPECIALCHARS);
echo "<pre>";
print_r($degerler);
echo "</pre>";










?>
</body>
</html>	