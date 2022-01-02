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
str_split()     :   Belirtilecek olan icerigi, belirtilecek olan karakter sayisina gore bolerek, bolumleme islemi sonucunda olusan degerlerden yeni bir dizi olusturarak, olusturdugu degeri geriye dondurur.
mb_split()      :   Belirtilecek olan icerigi, belirtilecek olan duzenli ifade dahilinde bolerek, bolumleme islemi sonucunda olusan degerlerden yeni bir dizi olsturarak,olusturdugu degeri geriye dondurur. 
strtok()        :   Belirtilecek olan icerigi, belirtilecek olan ayrac dogrultusunda kontrol ederek, eslesen ayrac degeri olmasi durumunda, ilk eslesen ayracin oncesinde bulunan degeri bularak, buldugu degeri geriye dondurur. Ayrica eslesen tum ayraclarin oncesinde bulunan degerlerde herhangi bir dongu yardimi ile tek tek elde edilebilir. 
strpbrk()       :   Belirtilecek olan icerigi, belirtilecek olan ayrac dogrultusunda kontrol ederek, eslesen ayrac degeri olmasi durumunda, ilk eslesen ayracin sonrasinda bulunan degeri bularak, buldugu degeri geriye dondurur.
*/
/*
$kart_numarasi      =     "123456789123456";

echo $kart_numarasi . "<br />";
$islem = str_split($kart_numarasi,4); // 4'ER PARCALAR OLACAK SEKILDE BOLUMLUYOR!

echo "<pre>";
print_r($islem);
echo "</pre>";
---------------------------------------------*/
/*
$kart_numarasi      =   "1234567890123456";
echo $kart_numarasi . "<br />";

$islem              =  str_split($kart_numarasi,4);        

echo "islem yapilan kredi karti : ";

foreach ($islem as $deger) {
    echo $deger . " ";
}
---------------------------------------------*/
/*
$kart_numarasi      =   "1234567890123456";
echo $kart_numarasi . "<br />";

$islem              =   str_split($kart_numarasi,4);

$bloksayisi         =   1;
echo "islem yapilan kredi karti : "; 

foreach ($islem as $deger) {
    if (($bloksayisi==1) or ($bloksayisi==2) or ($bloksayisi==3)) {
        echo "****";
        
    }else {
        echo $deger . " ";
    }
    $bloksayisi++;
}
---------------------------------------------*/
/*
$kart_numarasi      =   "1234567890123456";
echo $kart_numarasi . "<br />";
$islem              =   str_split($kart_numarasi,4);
echo "islem yapilan kredi karti : ";
echo $islem[0] . " **** **** " . $islem[3]; // dizi oldugu icin 0'dan baslar.
---------------------------------------------*/
/*
$deger = "1234567890123456";
echo $deger . "<br />";
$islem = str_split($deger); // hepsini tek tek dizi icerigi olarak yazar
echo "<pre>";
print_r($islem);
echo "</pre>";
---------------------------------------------*/
/*
$deger = "Extra Eğitim - Ataberk Erday";

echo $deger . "<br />";
$islem      =   str_split($deger);      //turkce karakter sikintisi cikariyor.

echo "<pre>";
print_r($islem);
echo "</pre>";

echo "<br />";

$bir        =   $islem[7];
$iki        =   $islem[8];
$birlestir  =   $bir.$iki;

echo $birlestir;
---------------------------------------------*/
/*
$deger = "Extra Eğitim - Ataberk Erday";

echo $deger . "<br />";

$islem      =   str_split($deger);

echo "<pre>";
print_r($islem);
echo "</pre>";

echo "<br />";

$bir        =   $islem[7];
$iki        =   $islem[8];
$birlestir  =   $bir.$iki;

$sonuc      =   mb_convert_encoding("$birlestir","UTF-8","auto");

echo $sonuc;
---------------------------------------------*/
/*
$deger  =   "Ataberk Erday - A'dan Z'ye PHP";
echo $deger . "<br />";

$islem      =   str_split($deger, 12);

echo "<pre>";
print_r($islem);
echo "<pre>";
---------------------------------------------*/
/*
$deger =    "Extra Egitim - Ataberk Erday - A'dan Z'ye PHP Gorsel Egitim Seti";

echo $deger . "<br />";

$islem = mb_split("\s", $deger);  // her kelimeden ayri ayri boler. 

echo "<pre>";
print_r($islem);
echo "<pre>";
---------------------------------------------*/
/*
$deger =    "Extra Egitim - Ataberk Erday - A'dan Z'ye PHP Gorsel Egitim Seti";

echo $deger . "<br />";

$islem = mb_split("-", $deger);  // her - isaretinden ayri ayri boler. 

echo "<pre>";
print_r($islem);
echo "<pre>";
---------------------------------------------*/
/*
$deger =    "Extra Egitim - Ataberk Erday - A'dan Z'ye PHP Gorsel Egitim Seti";

echo $deger . "<br />";

$islem = mb_split("-\s", $deger);  // her - isaretinden ayri ayri boler. bosluk koymaz

echo "<pre>";
print_r($islem);
echo "<pre>";
---------------------------------------------*/
/*
$deger =    "Extra Egitim - Ataberk Erday - A'dan Z'ye PHP Gorsel Egitim Seti";

echo $deger . "<br />";

$islem = strtok($deger, "-");   // ILK ESLESEN AYRACIN ONCESINI DONDURUR.

echo "<pre>";
print_r($islem);
echo "<pre>";
---------------------------------------------*/
/*
$deger	=	"Extra Eğitim<br />\nVolkan Alakent<br />\nA'dan Z'ye PHP Görsel Eğitim Seti";

echo $deger . "<br />";

$islem = strtok($deger, "\n");   
echo $islem;
---------------------------------------------*/
/*
$deger	=	"Extra Eğitim-Volkan Alakent-A'dan Z'ye PHP Görsel Eğitim Seti-A'dan Z'ye CSS3 Görsel Eğitim Seti-A'dan Z'ye Javascript Görsel Eğitim Seti";

echo $deger . "<br />";

$islem = strtok($deger,"-");

echo $islem . "<br /><br /><br />";

while ($islem!= false) {        // denk degilse false ibaresine anlami tasir
    echo $islem . "<br />";
    $islem = strtok("-");       // degeri otomatik olarak aldigi icin tekrar deger degiskenini belirtmemize gerek yok
}
---------------------------------------------*/

$deger	=	"Extra Eğitim-Volkan Alakent-A'dan Z'ye PHP Görsel Eğitim Seti-A'dan Z'ye CSS3 Görsel Eğitim Seti-A'dan Z'ye Javascript Görsel Eğitim Seti";

echo $deger . "<br />";

$islem  =   strpbrk($deger, "-");       // ayracdan sonraki degeri dondurur.

echo $islem;
?>
</body>
</html>	
	
	