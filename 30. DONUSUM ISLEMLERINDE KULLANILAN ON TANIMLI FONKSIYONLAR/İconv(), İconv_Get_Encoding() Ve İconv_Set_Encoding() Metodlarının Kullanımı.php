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
iconv()                 :       Belirtilecek olan icerigi, belirtilecek olan karakter kodlamasi dahilinde donuturerek, karakter kodalmasi donusturulmus olan degeri geriye dondurur.
    TRANSLIT        :   Belirtilecek olan icerikte gosterilmeyen bir karaktere / karakterlere rastalanacak olursa, ilgili karakterin / karakterlerin yerine benzer bir karakter / kural disi karakter degeri yerlestirmek icin kullanilir.
    IGNORE          :   Belirtilecek olan icerikte gosterilmeyen bir karaktere / karakterlere rastalanacak olursa, ilgili karakter / karakterler yok sayilir veya ilgili karakterin / karakterlerin yerine kural disi karakter degeri yerlestirmek icin kullanilir.
iconv_get_encoding()    :       PHP sayfasi dahilinde kullanilmakta olan karakter kodlama bilgileri listesini bulur ve buldugu degerlerden yeni bir dizi olusturarak, olusturdugu dizi degerini geriye dondurur.
 Ayrica belirtilecek olan deger dogrultusunda tum karakter kodlama bilgisi yerine sadece ilgili karakter kodlamasi bilgisi degerini de dondurebilir.
iconv_set_encoding()    :       PHP sayfasi dahilinde kullanilmakta olan karakter turune, belirtilecek oaln karakter kodlama kumesini atamak icin kullanilir.
*/
/*
$Icerik		=	"Extra Eğitim - Ataberk Erday - A'dan Z'ye PHP Görsel Eğitim Seti";
echo $Icerik . "<br />";
$sonuc      =   iconv("utf-8","ISO-8859-9",$Icerik);    //birinci parametre hangi kodlamadan oldugu ikinci parametre hangi parametrede istedigimiz ucuncu parametre de de icerik yazilir
echo $sonuc . "<br />";
$islem      =   iconv("ISO-8859-9","utf-8",$sonuc);
echo $islem . "<br />";

---------------------------------------------*/
/*
$Icerik		=	"Extra Eğitim - Volkan Alakent - A'dan Z'ye PHP Görsel Eğitim Seti";
echo $Icerik . "<br />";
$Sonuc		=	iconv("UTF-8", "ISO-8859-1", $Icerik); // Hata kodu döndürür, çünkü kural dışı karakter algılayacaktır. Önemli açıklama : içerikte Türkçe karakter var.
echo $Sonuc;
---------------------------------------------*/
/*
$Icerik		=	"Extra Eğitim - Volkan Alakent - A'dan Z'ye PHP Görsel Eğitim Seti";
echo $Icerik . "<br />";
$Sonuc		=	iconv("UTF-8", "ISO-8859-1//TRANSLIT", $Icerik);    // yerine benzer bir karakter koy!
echo $Sonuc;
---------------------------------------------*/
/*
$Icerik		=	"Extra Eğitim - Volkan Alakent - A'dan Z'ye PHP Görsel Eğitim Seti";
echo $Icerik . "<br />";
$Sonuc		=	iconv("UTF-8", "ISO-8859-1//IGNORE", $Icerik); //yerine karakter koyma yok say!
echo $Sonuc;
---------------------------------------------*/
/*
$deger      =   iconv_get_encoding();  // Sunucuda tanımlı olan tüm karakter seti değerlerini döndürür, fakat bu döndürme işlemi ekran çıktısı için değil, karater seti algılaması içindir. Eğer ilgili karakter seti algılanmaz ise sunucuda tanımlı tüm karakter setli içerisinde varsayılan olarak tanımlı olan karakter seti değerini verir.

echo "<pre>";
print_r($deger);
echo "</pre>";
---------------------------------------------*/
/*
$Deger		=	iconv_get_encoding("all");
echo "<pre>";
print_r($Deger);
echo "</pre>";
---------------------------------------------*/
/*
$deger      =   iconv_get_encoding("all");
echo "<pre>";
echo "Girdi karakter seti kodlamasi : " . $deger["input_encoding"] . "<br />";
echo "Cikti karakter seti kodlamasi : " . $deger["output_encoding"] . "<br />";
echo "</pre>";
---------------------------------------------*/
/*
$degerbir       =   iconv_get_encoding("input_encoding");
$degeriki       =   iconv_get_encoding("output_encoding");
$degeruc       =   iconv_get_encoding("internal_encoding");

echo "Girdi Karakter Seti Kodlaması :  "  . $degerbir . "<br />";
echo "Çıktı Karakter Seti Kodlaması :  "  . $degeriki . "<br />";
echo "Dahili Karakter Seti Kodlaması : " . $degeruc;
---------------------------------------------*/
/*
$ilk     =  iconv_get_encoding();
echo "<pre>";
print_r($ilk);
echo "</pre>";

iconv_set_encoding("input_encoding", "ISO-8859-9");
iconv_set_encoding("output_encoding", "ISO-8859-1");
iconv_set_encoding("internal_encoding", "ISO-8859-2");	

$son    =   iconv_get_encoding();
echo "<pre>";
print_r($son);
echo "</pre>";
---------------------------------------------*/
$ilk     =  iconv_get_encoding();
echo "<pre>";
print_r($ilk);
echo "</pre>";

iconv_set_encoding("input_encoding", "ISO-8859-9");
iconv_set_encoding("output_encoding", "ISO-8859-1");
iconv_set_encoding("internal_encoding", "ISO-8859-2");	

$son    =   iconv_get_encoding();
echo "<pre>";
print_r($son);
echo "</pre>";

$Icerik		=	"A'dan Z'ye PHP Görsel Eğitim Seti";
echo $Icerik;



?>
</body>
</html>	
	
	