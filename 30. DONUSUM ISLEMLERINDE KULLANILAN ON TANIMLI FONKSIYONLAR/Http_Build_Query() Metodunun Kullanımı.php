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
http_build_query()      :   Belirtilecek olan dizi icerisindeki tum anahtar ve degerleri bularak, buldugu degerleri URL kodlamali bir sorgu duzinesine donusturerek donusturdugu degeri geriye dondurur.
*/
/*
$degerler    =  array("egitimturu" => "web programlama", "egitimsekli" => "gorsel egitim seti", "kodlamadili" => "PHP");
echo "<pre>";
print_r($degerler);
echo "</pre>";

$sonuc  =   http_build_query($degerler);
echo $sonuc;
--------------------------------------------------*/
/*
$degerler    =  array("web programlama", "gorsel egitim seti", "PHP");
echo "<pre>";
print_r($degerler);
echo "</pre>";

$sonuc  =   http_build_query($degerler);
echo $sonuc;
--------------------------------------------------*/
/*
$degerler    =  array("web programlama", "gorsel egitim seti", "PHP");
echo "<pre>";
print_r($degerler);
echo "</pre>";

$sonuc  =   http_build_query($degerler,"Ozel_");// anahtar isimlerini PHP belirtiyorsa on taki kullanilabilir 2.parametre bunun icndir ancak anahtar isimleirni biz belirlediysek bunu kullanamayiz!!!!!
echo $sonuc;
--------------------------------------------------*/
$degerler    =  array("egitimturu" => "web programlama", "egitimsekli" => "gorsel egitim seti", "kodlamadili" => "PHP");
echo "<pre>";
print_r($degerler);
echo "</pre>";

$sonuc  =   http_build_query($degerler,"","|^|^|^");
echo $sonuc;













?>
</body>
</html>	
	
