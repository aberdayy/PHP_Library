<?php
header("Content-type: text/xml; charset=UTF-8");
/*
// <!-- <!doctype html>
// <html lang="tr-TR">
// <head>
// <meta http-equiv="content-type" content="text/html; charset=utf-8">
// <meta http-equiv="content-language" content="tr">
// <meta charset="utf-8">
// <title>baslik</title>
// </head>
// <body>

simplexml_load_string()     :   Belirtilecek olan XML kodlama degerinin standart kodlama karsiligini bularak, buldugu degeri geriye dondurur.
simplexml_load_file()       :   Belirtilecek olan XML dosyasi icerigi kodlama degerinin standart kodlama karsiligini bularak, buldugu degeri geriye dondurur.
    LIBXNL_NOCDATA          :   Belirtilecek olan XML kodlama degeri icerisinde bulunan CDATA degeri / degerlerini metin dugumleri ile birlestirmek icin kullanilir.
children()                  :   Belirtilecek olan XML kodlama degeri icerisinde bulunan, belirtilecek olan tag(etiket) adi degerine bagli olan bir alt tum cocuk elemanlari/elementleri isaret etmek icin kullanilir.
xpath()                     :   Belirtilecek olan XML kodlama deheri icerisinde bulunan, belirtilecek olan deger / degerler dogrultusunda eslesen tum elemanlari / elementleri isaret etmek ve secmek icin kullanilir.
SimpleXMLElement()          :   Belirtilecek olan icerikler dahilinde XML kodlama yapilari olusturmak icin kullanilir.
asXML()                     :   Belirtilecek olan ve SimpleXMLElement() metodu kullanilirak olusturulmus olan XML kodlama yapilarinin ciktilanmasini saglamak icin kullanilir.
addChild()                  :   Belirtilecek olan ve SimpleXMLElement() metodu kullanilarak olusturulmus olan XML kodlama yapilarina yeni eleman / element elemek icin kullanir.
addAttribute()              :   Belirtilecek olan ve SimpleXMLElement() metodu kullanilrak olusturulmus olan XML kodlama yapilarina ait elemana / elemente ozellik eklemek icin kullanilir.
DOMDocument                 :   Kullanildigi dokumani bir DOMDocument nesne ornegine yukleyerek isleme hazir hale getirmek icin kullanilir.
    loadXML()               :   DOMDocument metodu ile olsuturulmus olan DOMDocument neesne ornegine belirtilecek olan herhangi bir icerigi yuklemek icin kullanilir.
    preserveWhiteSpace      :   DOMDocument metodu ile olusturulmus olan ve loadXML metodu ole nesne ornegine yuklenmis olan icerikte whitespace kullanip kullanilmayacagini belirtmek icin kullanilir.
    formatOutput            :   DOMDocument metodu ile olusturulmus ve loadXML metodu ile nesne ornegine yuklenmis olan icerikte sekme / girinti ozelliginin kullanilip kullanilmayacagini sormak icin kullanilir.
    xmlVersion              :   DOMDocument metodu ile olusturulmus ve loadXML metodu ile nesne ornegine yuklenmis ilan icerigin belge turu belirtiminde kullanilacak olan XML surumunu / versiyonunu belirtmek icin kullanilir.
    encoding                :   DOMDocument metodu ile olusturulmus ve loadXML metodu ile nesne ornegine yuklenmis olan icerigin belge turu belirtiminde kullanilacak olan karakter kodlamasini belirtimek icin kullanilir.
    saveXML()               :   DOMDocument metodu ile olsuturulmus ve loadXML metodu ile nesne ogrenine yuklenmis olan icerigin ciktilamasini saglamak icin kullanilir.
    save()                  :   DOMDocument metodu ile olusturulmus ve loadXML metodu ole nesne ornegine yuklenmis olan icerigin belirtilecek olan dosyaya kaydedilmesini saglamak icin kullanilir.
*/
/*
$degerler =  '<root>
<FIRMA>RDY Media</FIRMA>
<YONETICI>Ataberk Erday</YONETICI>
</root>';
$donustur = simplexml_load_string($degerler);

echo "<pre>";
print_r($donustur);
echo "</pre>";

echo $donustur->FIRMA."<br />";
echo $donustur->YONETICI."<br />";
----------------------------------------*/
/*
$degerler =  '<root>
<FIRMA>RDY Media</FIRMA>
<YONETICI-ADI>Ataberk Erday</YONETICI-ADI>
</root>';
$donustur = simplexml_load_string($degerler);

echo "<pre>";
print_r($donustur);
echo "</pre>";

echo $donustur->FIRMA."<br />";
echo $donustur->YONETICI-ADI."<br />";// Hata kodu döndürür, çünkü tag'da (etikette) - (tire / eksi) karakteri bulunuyor.
----------------------------------------*/
/*
$degerler =  '<root>
<FIRMA>RDY Media</FIRMA>
<YONETICI-ADI>Ataberk Erday</YONETICI-ADI>
</root>';
$donustur = simplexml_load_string($degerler);

echo "<pre>";
print_r($donustur);
echo "</pre>";

echo $donustur->FIRMA."<br />";
echo $donustur->{'YONETICI-ADI'}."<br />";
----------------------------------------*/
/*
$degerler =  '<root>
<FIRMA>RDY Media</FIRMA>
<YONETICI>Ataberk Erday</YONETICI>
<EGITIMLER>
<KURS id="Bir">HTML5</KURS>
<KURS id="Iki">CSS3</KURS>
<KURS id="Uc">JAVASCRIPT</KURS>
<KURS id="Dort">PHP7</KURS>
</EGITIMLER>
<EGITMENLER> 
<EGITMEN ID="1">
<ADI>Ataberk Erday</ADI>
        <KURSADI>PHP7</KURSADI>
</EGITMEN>
<EGITMEN ID="2">
        <ADI>Mert Kasap</ADI>
        <KURSADI>CSS3</KURSADI>
</EGITMEN>
<EGITMEN ID="3">
        <ADI>Sadik Erday</ADI>
        <KURSADI>HTML5</KURSADI>
        </EGITMEN>
        <EGITMEN ID="4">
        <ADI>Esra Erday</ADI>
        <KURSADI>JAVASCRIPT</KURSADI>
</EGITMEN>
<EGITMEN ID="5">
<ADI>Roka Erday</ADI>
        <KURSADI>NodeJS</KURSADI>
        </EGITMEN>
</EGITMENLER>
</root>';
$donustur = simplexml_load_string($degerler);

echo "<pre>";
print_r($donustur);
echo "</pre>";

echo $donustur->FIRMA."<br />";
echo $donustur->YONETICI."<br /><br />";

echo $donustur->EGITIMLER->KURS[0]."<br />";
echo $donustur->EGITIMLER->KURS[1]."<br />";
echo $donustur->EGITIMLER->KURS[2]."<br />";
echo $donustur->EGITIMLER->KURS[3]."<br /><br />";
echo $donustur->EGITMENLER->EGITMEN[0]->ADI."<br />";
echo $donustur->EGITMENLER->EGITMEN[0]->KURSADI."<br /><br />";
echo $donustur->EGITMENLER->EGITMEN[1]->ADI."<br />";
echo $donustur->EGITMENLER->EGITMEN[1]->KURSADI."<br /><br />";
echo $donustur->EGITMENLER->EGITMEN[2]->ADI."<br />";
echo $donustur->EGITMENLER->EGITMEN[2]->KURSADI."<br /><br />";
echo $donustur->EGITMENLER->EGITMEN[3]->ADI."<br />";
echo $donustur->EGITMENLER->EGITMEN[3]->KURSADI."<br /><br />";
echo $donustur->EGITMENLER->EGITMEN[4]->ADI."<br />";
echo $donustur->EGITMENLER->EGITMEN[4]->KURSADI."<br /><br />";
----------------------------------------*/
/*
$dosya = "basitXMLornegi.xml";
$donustur = simplexml_load_file($dosya);

echo "<pre>";
print_r($donustur);
echo "</pre>";

echo $donustur->FIRMA."<br />";
echo $donustur->YONETICI."<br />";
----------------------------------------*/
/*
$dosya = "ortaseviyeXMLornegi.xml";
$donustur = simplexml_load_file($dosya);

// echo "<pre>";
// print_r($donustur);
// echo "</pre>";

echo $donustur->FIRMA."<br />";
echo $donustur->YONETICI."<br /><br />";
echo $donustur->EGITIMLER->KURS[0]."<br />";
echo $donustur->EGITIMLER->KURS[1]."<br />";
echo $donustur->EGITIMLER->KURS[2]."<br />";
echo $donustur->EGITIMLER->KURS[3]."<br /><br />";

echo $donustur->EGITMENLER->EGITMEN[0]->ADI."<br />";
echo $donustur->EGITMENLER->EGITMEN[0]->KURSADI."<br /><br />";

echo $donustur->EGITMENLER->EGITMEN[1]->ADI."<br />";
echo $donustur->EGITMENLER->EGITMEN[1]->KURSADI."<br /><br />";

echo $donustur->EGITMENLER->EGITMEN[2]->ADI."<br />";
echo $donustur->EGITMENLER->EGITMEN[2]->KURSADI."<br /><br />";

echo $donustur->EGITMENLER->EGITMEN[3]->ADI."<br />";
echo $donustur->EGITMENLER->EGITMEN[3]->KURSADI."<br /><br />";

echo $donustur->EGITMENLER->EGITMEN[4]->ADI."<br />";
echo $donustur->EGITMENLER->EGITMEN[4]->KURSADI."<br /><br />";
----------------------------------------*/
/*
$Degerler	=	'<EXTRAEGITIM>
<FIRMA>Extra Eğitim</FIRMA>
<YONETICI>Volkan Alakent</YONETICI>
<ACIKLAMA>Küçük işaretinin simsegi : < , büyük işaretinin simsegi : > olarak yazılmaktadır.</ACIKLAMA>
</EXTRAEGITIM>';

$Donustur	=	simplexml_load_string($Degerler); // Hata kodu üretir, çünkü XML içeriğinde < ve > giri karakterler kullanılacak olursa problemdir.

echo "<pre>";
print_r($Donustur);
echo "</pre>";

echo $Donustur->FIRMA . "<br />";
echo $Donustur->YONETICI . "<br />";
echo $Donustur->ACIKLAMA;
----------------------------------------*/
/*
$Degerler	=	'<EXTRAEGITIM>
<FIRMA>Extra Eğitim</FIRMA>
<YONETICI>Volkan Alakent</YONETICI><ACIKLAMA>
<![CDATA[Küçük işaretinin simsegi : < , büyük işaretinin simsegi : > olarak yazılmaktadır.]]></ACIKLAMA>
</EXTRAEGITIM>';

$Donustur	=	simplexml_load_string($Degerler); //// Hata kodu üretir, çünkü XML içeriğinde < ve > giri karakterler kullanılacak olursa problemdir.

echo "<pre>";
print_r($Donustur);
echo "</pre>";

echo $Donustur->FIRMA . "<br />";
echo $Donustur->YONETICI . "<br />";
echo $Donustur->ACIKLAMA;
----------------------------------------*/
/*
$Degerler	=	'<EXTRAEGITIM>
<FIRMA>Extra Eğitim</FIRMA>
<YONETICI>Volkan Alakent</YONETICI>
<ACIKLAMA><![CDATA[Küçük işaretinin simsegi : < , büyük işaretinin simsegi : > olarak yazılmaktadır.]]></ACIKLAMA>
</EXTRAEGITIM>';

$Donustur	=	simplexml_load_string($Degerler, "SimpleXMLElement", LIBXML_NOCDATA);

echo "<pre>";
print_r($Donustur);
echo "</pre>";

echo $Donustur->FIRMA . "<br />";
echo $Donustur->YONETICI . "<br />";
echo $Donustur->ACIKLAMA;
----------------------------------------*/
/*
$degerler =  '<root>
<FIRMA>RDY Media</FIRMA>
<YONETICI>Ataberk Erday</YONETICI>
</root>';
$donustur = simplexml_load_string($degerler);

echo "<pre>";
print_r($donustur);
echo "</pre>";

foreach ($donustur as $anahtar => $eleman) {
    echo $anahtar . " : " . $eleman . "<br />";
}
----------------------------------------*/
/*
$degerler =  "basitXMLornegi.xml";
$donustur = simplexml_load_file($degerler);

echo "<pre>";
print_r($donustur);
echo "</pre>";

foreach ($donustur as $anahtar => $eleman) {
    echo $anahtar . " : " . $eleman . "<br />";
}
----------------------------------------*/
/*
$degerler = '<root>
    <FIRMA>RDY Media</FIRMA>
    <YONETICI>Ataberk Erday</YONETICI>
    <EGITIMLER>
    <KURS id="Bir">HTML5</KURS>
    <KURS id="Iki">CSS3</KURS>
    <KURS id="Uc">JAVASCRIPT</KURS>
    <KURS id="Dort">PHP7</KURS>
    </EGITIMLER>
    <EGITMENLER> 
    <EGITMEN ID="1">
    <ADI>Ataberk Erday</ADI>
    <KURSADI>PHP7</KURSADI>
    </EGITMEN>
    <EGITMEN ID="2">
            <ADI>Mert Kasap</ADI>
            <KURSADI>CSS3</KURSADI>
    </EGITMEN>
    <EGITMEN ID="3">
    <ADI>Sadik Erday</ADI>
    <KURSADI>HTML5</KURSADI>
    </EGITMEN>
    <EGITMEN ID="4">
            <ADI>Esra Erday</ADI>
            <KURSADI>JAVASCRIPT</KURSADI>
            </EGITMEN>
            <EGITMEN ID="5">
            <ADI>Roka Erday</ADI>
            <KURSADI>NodeJS</KURSADI>
    </EGITMEN>
    </EGITMENLER>
</root>';

$donustur   =   simplexml_load_string($degerler);

echo "<pre>";
print_r($donustur);
echo "</pre>";

foreach ($donustur as $anahtar => $deger) {
    echo $anahtar . " : " . $deger . "<br />";
    if ($donustur->$anahtar->children() !="") {
        $sayi       =   0;
        foreach ($donustur->$anahtar->children() as $anahtariki => $degeriki) {
            
            echo $anahtariki . " : " . $degeriki . "<br />";

            if ($donustur->$anahtar->$anahtariki[$sayi]->children() !="") {
            
                foreach ($donustur->$anahtar->$anahtariki[$sayi]->children() as $anahtaruc => $degeruc) {
                    
                    echo $anahtaruc . " : " . $degeruc . "<br />";
                    
                }
            }            
            $sayi ++;
        }
    }
}
----------------------------------------*/
/*
$dosya      =   "ortaseviyeXMLornegi.xml";

$donustur   =   simplexml_load_file($dosya);

echo "<pre>";
print_r($donustur);
echo "</pre>";

foreach ($donustur as $anahtar => $deger) {
    echo $anahtar . " : " . $deger . "<br />";
    if ($donustur->$anahtar->children() !="") {
        $sayi       =   0;
        foreach ($donustur->$anahtar->children() as $anahtariki => $degeriki) {
            
            echo $anahtariki . " : " . $degeriki . "<br />";

            if ($donustur->$anahtar->$anahtariki[$sayi]->children() !="") {
            
                foreach ($donustur->$anahtar->$anahtariki[$sayi]->children() as $anahtaruc => $degeruc) {
                    
                    echo $anahtaruc . " : " . $degeruc . "<br />";
                    
                }
            }            
            $sayi ++;
        }
    }
}
----------------------------------------*/
/*
$degerler = '<root>
    <FIRMA>RDY Media</FIRMA>
    <YONETICI>Ataberk Erday</YONETICI>
    <EGITIMLER>
    <KURS id="Bir">HTML5</KURS>
    <KURS id="Iki">CSS3</KURS>
    <KURS id="Uc">JAVASCRIPT</KURS>
    <KURS id="Dort">PHP7</KURS>
    </EGITIMLER>
    <EGITMENLER> 
    <EGITMEN ID="1">
    <ADI>Ataberk Erday</ADI>
    <KURSADI>PHP7</KURSADI>
    </EGITMEN>
    <EGITMEN ID="2">
            <ADI>Mert Kasap</ADI>
            <KURSADI>CSS3</KURSADI>
            </EGITMEN>
    <EGITMEN ID="3">
    <ADI>Sadik Erday</ADI>
    <KURSADI>HTML5</KURSADI>
    </EGITMEN>
    <EGITMEN ID="4">
            <ADI>Esra Erday</ADI>
            <KURSADI>JAVASCRIPT</KURSADI>
            </EGITMEN>
            <EGITMEN ID="5">
            <ADI>Roka Erday</ADI>
            <KURSADI>NodeJS</KURSADI>
    </EGITMEN>
    </EGITMENLER>
</root>';

$donustur   =   simplexml_load_string($degerler);

echo "<pre>";
print_r($donustur);
echo "</pre>";

echo $donustur->FIRMA . "<br />";
echo $donustur->YONETICI . "<br />";

foreach ($donustur->EGITIMLER->KURS as $anahtar => $deger) {
    echo $anahtar . " : " . $deger . "<br />";
}
$say   =    count($donustur->EGITMENLER->EGITMEN);
if ($say>0) {
    $sayi = 0;
    foreach ($donustur->EGITMENLER->EGITMEN as $yenianahtar => $yenideger) {
        echo "EGITMEN <br />";
        foreach ($donustur->EGITMENLER->EGITMEN[$sayi]->children() as $sonanahtar => $sondeger) {
            echo $sonanahtar . " : " . $sondeger . "<br />";
        }
        $sayi++;
    }
}
----------------------------------------*/
/*
$dosya      =   "ortaseviyeXMLornegi.xml";

$donustur   =   simplexml_load_file($dosya);

echo "<pre>";
print_r($donustur);
echo "</pre>";

echo $donustur->FIRMA . "<br />";
echo $donustur->YONETICI . "<br />";

foreach ($donustur->EGITIMLER->KURS as $anahtar => $deger) {
    echo $anahtar . " : " . $deger . "<br />";
}
$say   =    count($donustur->EGITMENLER->EGITMEN);
if ($say>0) {
    $sayi = 0;
    foreach ($donustur->EGITMENLER->EGITMEN as $yenianahtar => $yenideger) {
        echo "EGITMEN <br />";
        foreach ($donustur->EGITMENLER->EGITMEN[$sayi]->children() as $sonanahtar => $sondeger) {
            echo $sonanahtar . " : " . $sondeger . "<br />";
        }
        $sayi++;
    }
}
----------------------------------------*/
/*
$degerler = '<root>
<FIRMA>RDY Media</FIRMA>
    <YONETICI>Ataberk Erday</YONETICI>
    <EGITIMLER>
    <KURS id="Bir">HTML5</KURS>
    <KURS id="Iki">CSS3</KURS>
    <KURS id="Uc">JAVASCRIPT</KURS>
    <KURS id="Dort">PHP7</KURS>
    </EGITIMLER>
    <EGITMENLER> 
    <EGITMEN ID="1">
    <ADI>Ataberk Erday</ADI>
    <KURSADI>PHP7</KURSADI>
    </EGITMEN>
    <EGITMEN ID="2">
            <ADI>Mert Kasap</ADI>
            <KURSADI>CSS3</KURSADI>
            </EGITMEN>
    <EGITMEN ID="3">
    <ADI>Sadik Erday</ADI>
    <KURSADI>HTML5</KURSADI>
    </EGITMEN>
    <EGITMEN ID="4">
            <ADI>Esra Erday</ADI>
            <KURSADI>JAVASCRIPT</KURSADI>
            </EGITMEN>
            <EGITMEN ID="5">
            <ADI>Roka Erday</ADI>
            <KURSADI>NodeJS</KURSADI>
    </EGITMEN>
    </EGITMENLER>
    </root>';

$donustur   =   simplexml_load_string($degerler);

echo "<pre>";
print_r($donustur);
echo "</pre>";

function oku($veri){
    foreach ($veri as $anahtar => $eleman) {
        if (!is_array($eleman)) {
            echo $anahtar . " : " . $eleman . "<br />";
        if (is_object($eleman)) {
            oku($eleman);
        }
        }
        
    
    }
    

    
}
oku($donustur);
----------------------------------------*/
/*
$dosya      =   "ortaseviyeXMLornegi.xml";

$donustur   =   simplexml_load_file($dosya);

echo "<pre>";
print_r($donustur);
echo "</pre>";

function oku($veri){
    foreach ($veri as $anahtar => $eleman) {
        if (!is_array($eleman)) {
            echo $anahtar . " : " . $eleman . "<br />";
        if (is_object($eleman)) {
            oku($eleman);
        }
    }
        
    
}
    


}
oku($donustur);
----------------------------------------*/
/*
$degerler = '<root>
<FIRMA>RDY Media</FIRMA>
    <YONETICI>Ataberk Erday</YONETICI>
    <EGITIMLER>
    <KURS id="Bir">HTML5</KURS>
    <KURS id="Iki">CSS3</KURS>
    <KURS id="Uc">JAVASCRIPT</KURS>
    <KURS id="Dort">PHP7</KURS>
    </EGITIMLER>
    <EGITMENLER> 
    <EGITMEN ID="1">
    <ADI>Ataberk Erday</ADI>
    <KURSADI>PHP7</KURSADI>
    </EGITMEN>
    <EGITMEN ID="2">
    <ADI>Mert Kasap</ADI>
    <KURSADI>CSS3</KURSADI>
    </EGITMEN>
    <EGITMEN ID="3">
    <ADI>Sadik Erday</ADI>
    <KURSADI>HTML5</KURSADI>
    </EGITMEN>
    <EGITMEN ID="4">
    <ADI>Esra Erday</ADI>
    <KURSADI>JAVASCRIPT</KURSADI>
            </EGITMEN>
            <EGITMEN ID="5">
            <ADI>Roka Erday</ADI>
            <KURSADI>NodeJS</KURSADI>
            </EGITMEN>
    </EGITMENLER>
    </root>';

    $donustur   =   simplexml_load_string($degerler);
    
echo "<pre>";
print_r($donustur);
echo "</pre>";

$cocukelemanlar     =   $donustur->EGITMENLER->children();

echo "<pre>";
print_r($cocukelemanlar);
echo "</pre>";
----------------------------------------*/
/*
$dosya      =   "ortaseviyeXMLornegi.xml";

$donustur   =   simplexml_load_file($dosya);

echo "<pre>";
print_r($donustur);
echo "</pre>";

$cocukelemanlar     =   $donustur->EGITMENLER->children();

echo "<pre>";
print_r($cocukelemanlar);
echo "</pre>";
----------------------------------------*/
/*
$degerler = '<root>
<FIRMA>RDY Media</FIRMA>
    <YONETICI>Ataberk Erday</YONETICI>
    <EGITIMLER>
    <KURS id="Bir">HTML5</KURS>
    <KURS id="Iki">CSS3</KURS>
    <KURS id="Uc">JAVASCRIPT</KURS>
    <KURS id="Dort">PHP7</KURS>
    </EGITIMLER>
    <EGITMENLER> 
    <EGITMEN ID="1">
    <ADI>Ataberk Erday</ADI>
    <KURSADI>PHP7</KURSADI>
    </EGITMEN>
    <EGITMEN ID="2">
    <ADI>Mert Kasap</ADI>
    <KURSADI>CSS3</KURSADI>
    </EGITMEN>
    <EGITMEN ID="3">
    <ADI>Sadik Erday</ADI>
    <KURSADI>HTML5</KURSADI>
    </EGITMEN>
    <EGITMEN ID="4">
    <ADI>Esra Erday</ADI>
    <KURSADI>JAVASCRIPT</KURSADI>
    </EGITMEN>
            <EGITMEN ID="5">
            <ADI>Roka Erday</ADI>
            <KURSADI>NodeJS</KURSADI>
            </EGITMEN>
            </EGITMENLER>
            </root>';

    $donustur   =   simplexml_load_string($degerler);
    
    echo "<pre>";
print_r($donustur);
echo "</pre>";

$cocukelemanlar     =   $donustur->EGITMENLER->EGITMEN[0]->children();

echo "<pre>";
print_r($cocukelemanlar);
echo "</pre>";
----------------------------------------*/
/*
$dosya      =   "ortaseviyeXMLornegi.xml";

$donustur   =   simplexml_load_file($dosya);

echo "<pre>";
print_r($donustur);
echo "</pre>";

$cocukelemanlar     =   $donustur->EGITMENLER->EGITMEN[1]->children();

echo "<pre>";
print_r($cocukelemanlar);
echo "</pre>";
----------------------------------------*/

/*
$degerler = '<root>
<FIRMA>RDY Media</FIRMA>
    <YONETICI>Ataberk Erday</YONETICI>
    <EGITIMLER>
    <KURS id="Bir">HTML5</KURS>
    <KURS id="Iki">CSS3</KURS>
    <KURS id="Uc">JAVASCRIPT</KURS>
    <KURS id="Dort">PHP7</KURS>
    </EGITIMLER>
    <EGITMENLER> 
    <EGITMEN ID="1">
    <ADI>Ataberk Erday</ADI>
    <KURSADI>PHP7</KURSADI>
    </EGITMEN>
    <EGITMEN ID="2">
    <ADI>Mert Kasap</ADI>
    <KURSADI>CSS3</KURSADI>
    </EGITMEN>
    <EGITMEN ID="3">
    <ADI>Sadik Erday</ADI>
    <KURSADI>HTML5</KURSADI>
    </EGITMEN>
    <EGITMEN ID="4">
    <ADI>Esra Erday</ADI>
    <KURSADI>JAVASCRIPT</KURSADI>
    </EGITMEN>
            <EGITMEN ID="5">
            <ADI>Roka Erday</ADI>
            <KURSADI>NodeJS</KURSADI>
            </EGITMEN>
            </EGITMENLER>
            </root>';

    $donustur   =   simplexml_load_string($degerler);
    
    echo "<pre>";
print_r($donustur);
echo "</pre>";

$cocukelemanlar     =   $donustur->EGITMENLER->children();

echo "<pre>";
print_r($cocukelemanlar);
echo "</pre>";

foreach ($cocukelemanlar->EGITMEN as $deger) {
    foreach ($deger as $anahtar => $icerik) {
        echo $anahtar . " : " . $icerik . "<br />";
    }
}
----------------------------------------*/
/*
$dosya      =   "ortaseviyeXMLornegi.xml";

$donustur   =   simplexml_load_file($dosya);

echo "<pre>";
print_r($donustur);
echo "</pre>";

$cocukelemanlar     =   $donustur->EGITMENLER->children();

echo "<pre>";
print_r($cocukelemanlar);
echo "</pre>";

foreach ($cocukelemanlar->EGITMEN as $deger) {
    foreach ($deger as $anahtar => $icerik) {
        echo $anahtar . " : " . $icerik . "<br />";
    }
}
----------------------------------------*/
/*
$degerler = '<root>
<FIRMA>RDY Media</FIRMA>
    <YONETICI>Ataberk Erday</YONETICI>
    <EGITIMLER>
    <KURS id="Bir">HTML5</KURS>
    <KURS id="Iki">CSS3</KURS>
    <KURS id="Uc">JAVASCRIPT</KURS>
    <KURS id="Dort">PHP7</KURS>
    </EGITIMLER>
    <EGITMENLER> 
    <EGITMEN ID="1">
    <ADI>Ataberk Erday</ADI>
    <KURSADI>PHP7</KURSADI>
    </EGITMEN>
    <EGITMEN ID="2">
    <ADI>Mert Kasap</ADI>
    <KURSADI>CSS3</KURSADI>
    </EGITMEN>
    <EGITMEN ID="3">
    <ADI>Sadik Erday</ADI>
    <KURSADI>HTML5</KURSADI>
    </EGITMEN>
    <EGITMEN ID="4">
    <ADI>Esra Erday</ADI>
    <KURSADI>JAVASCRIPT</KURSADI>
    </EGITMEN>
            <EGITMEN ID="5">
            <ADI>Roka Erday</ADI>
            <KURSADI>NodeJS</KURSADI>
            </EGITMEN>
            </EGITMENLER>
            </root>';

    $donustur   =   simplexml_load_string($degerler);
    
echo "<pre>";
print_r($donustur);
echo "</pre>";

$say        =   count($donustur->EGITMENLER->children());
echo "kayit sayisi : " . $say . "<br />";
if ($say>0) {
$sayi = 0;
while ($sayi < $say) {
    echo $donustur->EGITMENLER->EGITMEN[$sayi]->ADI." : " . $donustur->EGITMENLER->EGITMEN[$sayi]->KURSADI."<br />";
    $sayi++;
}
}
----------------------------------------*/
/*
$dosya      =   "ortaseviyeXMLornegi.xml";

$donustur   =   simplexml_load_file($dosya);

echo "<pre>";
print_r($donustur);
echo "</pre>";

$say        =   count($donustur->EGITMENLER->children());
echo "kayit sayisi : " . $say . "<br />";
if ($say>0) {
    $sayi = 0;
    while ($sayi < $say) {
        echo $donustur->EGITMENLER->EGITMEN[$sayi]->ADI." : " . $donustur->EGITMENLER->EGITMEN[$sayi]->KURSADI."<br />";
        $sayi++;
    }
}
----------------------------------------*/
/*
$degerler = '<root>
<FIRMA>RDY Media</FIRMA>
    <YONETICI>Ataberk Erday</YONETICI>
    <EGITIMLER>
    <KURS id="Bir">HTML5</KURS>
    <KURS id="Iki">CSS3</KURS>
    <KURS id="Uc">JAVASCRIPT</KURS>
    <KURS id="Dort">PHP7</KURS>
    </EGITIMLER>
    <EGITMENLER> 
    <EGITMEN ID="1">
    <ADI>Ataberk Erday</ADI>
    <KURSADI>PHP7</KURSADI>
    </EGITMEN>
    <EGITMEN ID="2">
    <ADI>Mert Kasap</ADI>
    <KURSADI>CSS3</KURSADI>
    </EGITMEN>
    <EGITMEN ID="3">
    <ADI>Sadik Erday</ADI>
    <KURSADI>HTML5</KURSADI>
    </EGITMEN>
    <EGITMEN ID="4">
    <ADI>Esra Erday</ADI>
    <KURSADI>JAVASCRIPT</KURSADI>
    </EGITMEN>
            <EGITMEN ID="5">
            <ADI>Roka Erday</ADI>
            <KURSADI>NodeJS</KURSADI>
            </EGITMEN>
            </EGITMENLER>
            </root>';
            
    $donustur   =   simplexml_load_string($degerler);
    
echo "<pre>";
print_r($donustur);
echo "</pre>";

$secilielemanlar    =   $donustur->xpath("//EGITIMLER/KURS");   

echo "<pre>";
print_r($secilielemanlar);
echo "</pre>";
----------------------------------------*/
/*
$dosya      =   "ortaseviyeXMLornegi.xml";

$donustur   =   simplexml_load_file($dosya);

echo "<pre>";
print_r($donustur);
echo "</pre>";

$secilielemanlar    =   $donustur->xpath("//EGITIMLER/KURS");   

echo "<pre>";
print_r($secilielemanlar);
echo "</pre>";
----------------------------------------*/
/*
$degerler = '<root>
<FIRMA>RDY Media</FIRMA>
    <YONETICI>Ataberk Erday</YONETICI>
    <EGITIMLER>
    <KURS id="Bir">HTML5</KURS>
    <KURS id="Iki">CSS3</KURS>
    <KURS id="Uc">JAVASCRIPT</KURS>
    <KURS id="Dort">PHP7</KURS>
    </EGITIMLER>
    <EGITMENLER> 
    <EGITMEN ID="1">
    <ADI>Ataberk Erday</ADI>
    <KURSADI>PHP7</KURSADI>
    </EGITMEN>
    <EGITMEN ID="2">
    <ADI>Mert Kasap</ADI>
    <KURSADI>CSS3</KURSADI>
    </EGITMEN>
    <EGITMEN ID="3">
    <ADI>Sadik Erday</ADI>
    <KURSADI>HTML5</KURSADI>
    </EGITMEN>
    <EGITMEN ID="4">
    <ADI>Esra Erday</ADI>
    <KURSADI>JAVASCRIPT</KURSADI>
    </EGITMEN>
            <EGITMEN ID="5">
            <ADI>Roka Erday</ADI>
            <KURSADI>NodeJS</KURSADI>
            </EGITMEN>
            </EGITMENLER>
            </root>';
            
    $donustur   =   simplexml_load_string($degerler);
    
    echo "<pre>";
print_r($donustur);
echo "</pre>";

$secilielemanlar    =   $donustur->xpath("//EGITIMLER/KURS");   

echo "<pre>";
print_r($secilielemanlar);
echo "</pre>";
foreach ($secilielemanlar as $anahtar => $deger) {
    echo $anahtar . " : " . $deger."<br />";
}
----------------------------------------*/
/*
$dosya      =   "ortaseviyeXMLornegi.xml";

$donustur   =   simplexml_load_file($dosya);

echo "<pre>";
print_r($donustur);
echo "</pre>";

$secilielemanlar    =   $donustur->xpath("//EGITIMLER/KURS");   

echo "<pre>";
print_r($secilielemanlar);
echo "</pre>";
foreach ($secilielemanlar as $anahtar => $deger) {
    echo $anahtar . " : " . $deger."<br />";
}
----------------------------------------*/
/*
$degerler    =    '<root>
	<item>
		<stockCode><![CDATA[ACMNSWX2]]></stockCode>
		<label><![CDATA[Kahve Deri Düz Ayakkabı]]></label>
		<status>1</status>
		<brand><![CDATA[Brion]]></brand>
		<brandId>10296</brandId>
		<barcode>97860534201</barcode>
		<mainCategory><![CDATA[Ayakkabı]]></mainCategory>
		<category><![CDATA[Bayan Ayakkabı]]></category>
		<subCategory><![CDATA[Babet]]></subCategory>
		<buyingPrice>0.000</buyingPrice>
		<price1>143.220</price1>
		<price2>0.000</price2>
		<price3>0.000</price3>
		<price4>0.000</price4>
		<price5>0.000</price5>
		<tax>18</tax>
		<currencyAbbr>TL</currencyAbbr>
		<stockAmount>1</stockAmount>
		<stockType><![CDATA[Adet]]></stockType>
		<warranty>24</warranty>
		<picture1Path><![CDATA[http://siteadi.com/modules/catalog/products/pr_01_158148_max.jpg?rev=1453707778]]></picture1Path>
		<picture2Path><![CDATA[http://siteadi.com/modules/catalog/products/pr_02_158148_max.jpg?rev=1453707778]]></picture2Path>
		<picture3Path><![CDATA[http://siteadi.com/modules/catalog/products/pr_03_158148_max.jpg?rev=1453707778]]></picture3Path>
		<picture4Path><![CDATA[http://siteadi.com/modules/catalog/products/pr_04_158148_max.jpg?rev=1453707778]]></picture4Path>
		<dm3>0.0000</dm3>
		<details><![CDATA[<div>Marka <span class="Apple-tab-span" style="white-space:pre"></span>: <span class="Apple-tab-span" style="white-space:pre"></span>Be Live</div><div>Materyal<span class="Apple-tab-span" style="white-space:pre"></span>:<span class="Apple-tab-span" style="white-space:pre"></span>Deri</div><div>Taban<span class="Apple-tab-span" style="white-space:pre"></span>:<span class="Apple-tab-span" style="white-space:pre"></span>Termo Hazır Taban</div>]]></details>
		<rebate>10.00000</rebate>
		<rebateType>1</rebateType>
		<variants>
			<variant>
				<vStockCode><![CDATA[ACMNSWX2_47f080]]></vStockCode>
				<vBarcode>97860534201-9</vBarcode>
				<vStockAmount>1</vStockAmount>
				<vBuyingPrice>0.000</vBuyingPrice>
				<vPrice1>143.220</vPrice1>
				<vPrice2>0.000</vPrice2>
				<vPrice3>0.000</vPrice3>
				<vPrice4>0.000</vPrice4>
				<vPrice5>0.000</vPrice5>
				<vRebate>10.00000</vRebate>
				<vRebateType>1</vRebateType>
				<vDm3>0.8000</vDm3>
				<options>
					<option>
						<variantName><![CDATA[Renk]]></variantName>
						<variantValue><![CDATA[Gümüş]]></variantValue>
					</option>
				</options>
			</variant>
		</variants>
	<specs>
		<spec>
			<specGroup><![CDATA[Cinsiyet]]></specGroup>
			<specName><![CDATA[Cinsiyet]]></specName>
			<specValue><![CDATA[Bayan]]></specValue>
		</spec>
	</specs>
	</item>
	<item>
		<stockCode><![CDATA[FRTYRRX2]]></stockCode>
		<label><![CDATA[Siyah Topuklu Ayakkabı]]></label>
		<status>1</status>
		<brand><![CDATA[Clyde]]></brand>
		<brandId>24590</brandId>
		<barcode>97860586240</barcode>
		<mainCategory><![CDATA[Ayakkabı]]></mainCategory>
		<category><![CDATA[Bayan Ayakkabı]]></category>
		<subCategory><![CDATA[Topuklu]]></subCategory>
		<buyingPrice>0.000</buyingPrice>
		<price1>272.990</price1>
		<price2>0.000</price2>
		<price3>0.000</price3>
		<price4>0.000</price4>
		<price5>0.000</price5>
		<tax>18</tax>
		<currencyAbbr>TL</currencyAbbr>
		<stockAmount>1</stockAmount>
		<stockType><![CDATA[Adet]]></stockType>
		<warranty>24</warranty>
		<picture1Path><![CDATA[http://siteadi.com/modules/catalog/products/pr_01_168548_max.jpg?rev=1453707778]]></picture1Path>
		<picture2Path><![CDATA[http://siteadi.com/modules/catalog/products/pr_02_168548_max.jpg?rev=1453707778]]></picture2Path>
		<picture3Path><![CDATA[http://siteadi.com/modules/catalog/products/pr_03_168548_max.jpg?rev=1453707778]]></picture3Path>
		<picture4Path><![CDATA[http://siteadi.com/modules/catalog/products/pr_04_168548_max.jpg?rev=1453707778]]></picture4Path>
		<dm3>0.0000</dm3>
		<details><![CDATA[<div>Marka <span class="Apple-tab-span" style="white-space:pre"></span>: <span class="Apple-tab-span" style="white-space:pre"></span>End Live</div><div>Materyal<span class="Apple-tab-span" style="white-space:pre"></span>:<span class="Apple-tab-span" style="white-space:pre"></span>Deri</div><div>Taban<span class="Apple-tab-span" style="white-space:pre"></span>:<span class="Apple-tab-span" style="white-space:pre"></span>Kösele Hazır Taban</div>]]></details>
		<rebate>10.00000</rebate>
		<rebateType>1</rebateType>
		<variants>
			<variant>
				<vStockCode><![CDATA[ACMNSWX2_47f080]]></vStockCode>
				<vBarcode>97860586240-1</vBarcode>
				<vStockAmount>1</vStockAmount>
				<vBuyingPrice>0.000</vBuyingPrice>
				<vPrice1>272.990</vPrice1>
				<vPrice2>0.000</vPrice2>
				<vPrice3>0.000</vPrice3>
				<vPrice4>0.000</vPrice4>
				<vPrice5>0.000</vPrice5>
				<vRebate>10.00000</vRebate>
				<vRebateType>1</vRebateType>
				<vDm3>0.8000</vDm3>
				<options>
					<option>
						<variantName><![CDATA[Renk]]></variantName>
						<variantValue><![CDATA[Baslıkı Siyah]]></variantValue>
					</option>
				</options>
			</variant>
		</variants>
	<specs>
		<spec>
			<specGroup><![CDATA[Cinsiyet]]></specGroup>
			<specName><![CDATA[Cinsiyet]]></specName>
			<specValue><![CDATA[Bayan]]></specValue>
		</spec>
	</specs>
	</item>
</root>';

$donustur = simplexml_load_string($degerler, "SimpleXMLElement", LIBXML_NOCDATA);   //STOCKCODE CDATA ICERISINDE OLDUGU ICIN BU KULLANILMAK ZORUNDA

echo "<pre>";
print_r($donustur);
echo "</pre>";


$say = count ($donustur->item);

if ($say>0) {
    $sayi = 0;
    while ($sayi<$say) {
    $urununstokkodu = $donustur->item[$sayi]->stockCode . "<br />";
    $urununadi      = $donustur->item[$sayi]->label . "<br />";
    $urununfiyati   = $donustur->item[$sayi]->price1 . "<br />";

        echo "urunun stok kodu : " . $urununstokkodu . "<br />";
        echo "urunun adi : "       . $urununadi . "<br />";
        echo "urunun fiyati : "    . $urununfiyati . "<br /><br />";
    $sayi++;
    }
}
----------------------------------------*/
/*
$dosya      =   "gelismisXMLornegi.xml";

$donustur   =   simplexml_load_file($dosya);

echo "<pre>";
print_r($donustur);
echo "</pre>";


$say = count ($donustur->item);

if ($say>0) {
    $sayi = 0;
    while ($sayi<$say) {
    $urununstokkodu = $donustur->item[$sayi]->stockCode . "<br />";
    $urununadi      = $donustur->item[$sayi]->label . "<br />";
    $urununfiyati   = $donustur->item[$sayi]->price1 . "<br />";

        echo "urunun stok kodu : " . $urununstokkodu . "<br />";
        echo "urunun adi : "       . $urununadi . "<br />";
        echo "urunun fiyati : "    . $urununfiyati . "<br /><br />";
        $sayi++;
    }
}
----------------------------------------*/
/*
$degerler = '<root>
<FIRMA>RDY Media</FIRMA>
    <YONETICI>Ataberk Erday</YONETICI>
    <EGITIMLER>
    <KURS id="Bir">HTML5</KURS>
    <KURS id="Iki">CSS3</KURS>
    <KURS id="Uc">JAVASCRIPT</KURS>
    <KURS id="Dort">PHP7</KURS>
    </EGITIMLER>
    <EGITMENLER> 
    <EGITMEN ID="1" seviye="uzman">
    <ADI>Ataberk Erday</ADI>
    <KURSADI>PHP7</KURSADI>
    </EGITMEN>
    <EGITMEN ID="2" seviye="expert">
    <ADI>Mert Kasap</ADI>
    <KURSADI>CSS3</KURSADI>
    </EGITMEN>
    <EGITMEN ID="3" seviye="master">
    <ADI>Sadik Erday</ADI>
    <KURSADI>HTML5</KURSADI>
    </EGITMEN>
    <EGITMEN ID="4" seviye="efso">
    <ADI>Esra Erday</ADI>
    <KURSADI>JAVASCRIPT</KURSADI>
    </EGITMEN>
    <EGITMEN ID="5" seviye="mal">
    <ADI>Roka Erday</ADI>
    <KURSADI>NodeJS</KURSADI>
    </EGITMEN>
    </EGITMENLER>
    </root>';
    
    $donustur   =   simplexml_load_string($degerler);
    
echo "<pre>";
print_r($donustur);
echo "</pre>";

echo $donustur->FIRMA."<br />";
echo $donustur->YONETICI. "<br /><br />";
echo $donustur->EGITIMLER->KURS[0]. " ( id : ". $donustur->EGITIMLER->KURS[0]["id"] . " )". "<br />" ;
echo $donustur->EGITIMLER->KURS[1]. " ( id : ". $donustur->EGITIMLER->KURS[1]["id"] . " )". "<br />" ;
echo $donustur->EGITIMLER->KURS[2]. " ( id : ". $donustur->EGITIMLER->KURS[2]["id"] . " )". "<br />" ;
echo $donustur->EGITIMLER->KURS[3]. " ( id : ". $donustur->EGITIMLER->KURS[3]["id"] . " )". "<br /><br />" ;

echo "EGITMEN ( id : " . $donustur->EGITMENLER->EGITMEN[0]["ID"] . " )" . " ( seviye : " . $donustur->EGITMENLER->EGITMEN[0]["seviye"] . " )" . "<br />";
echo $donustur->EGITMENLER->EGITMEN[0]->ADI. "<br />";
echo $donustur->EGITMENLER->EGITMEN[0]->KURSADI. "<br /><br />";

echo "EGITMEN ( id : " . $donustur->EGITMENLER->EGITMEN[1]["ID"] . " )" . " ( seviye : " . $donustur->EGITMENLER->EGITMEN[1]["seviye"] . " )" . "<br />";
echo $donustur->EGITMENLER->EGITMEN[1]->ADI. "<br />";
echo $donustur->EGITMENLER->EGITMEN[1]->KURSADI. "<br /><br />";

echo "EGITMEN ( id : " . $donustur->EGITMENLER->EGITMEN[2]["ID"] . " )" . " ( seviye : " . $donustur->EGITMENLER->EGITMEN[2]["seviye"] . " )" . "<br />";
echo $donustur->EGITMENLER->EGITMEN[2]->ADI. "<br />";
echo $donustur->EGITMENLER->EGITMEN[2]->KURSADI. "<br /><br />";

echo "EGITMEN ( id : " . $donustur->EGITMENLER->EGITMEN[3]["ID"] . " )" . " ( seviye : " . $donustur->EGITMENLER->EGITMEN[3]["seviye"] . " )" . "<br />";
echo $donustur->EGITMENLER->EGITMEN[3]->ADI. "<br />";
echo $donustur->EGITMENLER->EGITMEN[3]->KURSADI. "<br /><br />";

echo "EGITMEN ( id : " . $donustur->EGITMENLER->EGITMEN[4]["ID"] . " )" . " ( seviye : " . $donustur->EGITMENLER->EGITMEN[4]["seviye"] . " )" . "<br />";
echo $donustur->EGITMENLER->EGITMEN[4]->ADI. "<br />";
echo $donustur->EGITMENLER->EGITMEN[4]->KURSADI. "<br /><br />";
----------------------------------------*/
/*
$dosya      =   "ortaseviyeXMLornegi.xml";

$donustur   =   simplexml_load_file($dosya);

echo "<pre>";
print_r($donustur);
echo "</pre>";

echo $donustur->FIRMA."<br />";
echo $donustur->YONETICI. "<br /><br />";
echo $donustur->EGITIMLER->KURS[0]. " ( id : ". $donustur->EGITIMLER->KURS[0]["id"] . " )". "<br />" ;
echo $donustur->EGITIMLER->KURS[1]. " ( id : ". $donustur->EGITIMLER->KURS[1]["id"] . " )". "<br />" ;
echo $donustur->EGITIMLER->KURS[2]. " ( id : ". $donustur->EGITIMLER->KURS[2]["id"] . " )". "<br />" ;
echo $donustur->EGITIMLER->KURS[3]. " ( id : ". $donustur->EGITIMLER->KURS[3]["id"] . " )". "<br /><br />" ;

echo "EGITMEN ( id : " . $donustur->EGITMENLER->EGITMEN[0]["ID"] . " )" . " ( seviye : " . $donustur->EGITMENLER->EGITMEN[0]["seviye"] . " )" . "<br />";
echo $donustur->EGITMENLER->EGITMEN[0]->ADI. "<br />";
echo $donustur->EGITMENLER->EGITMEN[0]->KURSADI. "<br /><br />";

echo "EGITMEN ( id : " . $donustur->EGITMENLER->EGITMEN[1]["ID"] . " )" . " ( seviye : " . $donustur->EGITMENLER->EGITMEN[1]["seviye"] . " )" . "<br />";
echo $donustur->EGITMENLER->EGITMEN[1]->ADI. "<br />";
echo $donustur->EGITMENLER->EGITMEN[1]->KURSADI. "<br /><br />";

echo "EGITMEN ( id : " . $donustur->EGITMENLER->EGITMEN[2]["ID"] . " )" . " ( seviye : " . $donustur->EGITMENLER->EGITMEN[2]["seviye"] . " )" . "<br />";
echo $donustur->EGITMENLER->EGITMEN[2]->ADI. "<br />";
echo $donustur->EGITMENLER->EGITMEN[2]->KURSADI. "<br /><br />";

echo "EGITMEN ( id : " . $donustur->EGITMENLER->EGITMEN[3]["ID"] . " )" . " ( seviye : " . $donustur->EGITMENLER->EGITMEN[3]["seviye"] . " )" . "<br />";
echo $donustur->EGITMENLER->EGITMEN[3]->ADI. "<br />";
echo $donustur->EGITMENLER->EGITMEN[3]->KURSADI. "<br /><br />";

echo "EGITMEN ( id : " . $donustur->EGITMENLER->EGITMEN[4]["ID"] . " )" . " ( seviye : " . $donustur->EGITMENLER->EGITMEN[4]["seviye"] . " )" . "<br />";
echo $donustur->EGITMENLER->EGITMEN[4]->ADI. "<br />";
echo $donustur->EGITMENLER->EGITMEN[4]->KURSADI. "<br /><br />";
----------------------------------------*/
/*
$olustur    =   new SimpleXMLElement("<ROOT/>"); //element adi sonuna slash eklemek gerekir
$olustur->addchild("FIRMA", "RDY Media");
$olustur->addchild("YONETICI", "Ataberk Erday");

$egitimler  =   $olustur->addchild("EGITIMLER");
$egitimler->addchild("KURS", "HTML5");
$egitimler->addchild("KURS", "CSS3");
$egitimler->addchild("KURS", "JAVASCRIPT");
$egitimler->addchild("KURS", "PHP7");

$egitmenler = $olustur->addchild("EGITMENLER");
    $egitmen    =   $egitmenler->addchild("EGITMEN"); 
        $egitmen->addchild("ADI","Ataberk Erday");
        $egitmen->addchild("KURSADI","PHP7");
    $egitmen    =   $egitmenler->addchild("EGITMEN"); 
    $egitmen->addchild("ADI","Sadik Erday");
    $egitmen->addchild("KURSADI","CSS3");
    $egitmen    =   $egitmenler->addchild("EGITMEN"); 
        $egitmen->addchild("ADI","Esra Erday");
        $egitmen->addchild("KURSADI","HTML5");
    $egitmen    =   $egitmenler->addchild("EGITMEN"); 
    $egitmen->addchild("ADI","Mert Kasap");
        $egitmen->addchild("KURSADI","NodeJS");
        
    echo $olustur->asXML();
----------------------------------------*/
/*
$olustur    =   new SimpleXMLElement("<ROOT/>"); //element adi sonuna slash eklemek gerekir
$olustur->addchild("FIRMA", "RDY Media");
$olustur->addchild("YONETICI", "Ataberk Erday");

$egitimler  =   $olustur->addchild("EGITIMLER");
$kurs   =   $egitimler->addchild("KURS", "HTML5");
$kurs->addAttribute("id","Birinci");
    $kurs   =   $egitimler->addchild("KURS", "CSS3");
        $kurs->addAttribute("id","Ikinici");
    $kurs   =   $egitimler->addchild("KURS", "JAVASCRIPT");
    $kurs->addAttribute("id","Ucuncu");
    $kurs   =   $egitimler->addchild("KURS", "PHP7");
    $kurs->addAttribute("id","Dorduncu");

$egitmenler = $olustur->addchild("EGITMENLER");

$egitmen    =   $egitmenler->addchild("EGITMEN"); 
$egitmen->addchild("ADI","Ataberk Erday");
$egitmen->addchild("KURSADI","PHP7");
$egitmen->addAttribute("id","1");
$egitmen->addAttribute("seviye","Expert");
$egitmen    =   $egitmenler->addchild("EGITMEN"); 
$egitmen->addchild("ADI","Sadik Erday");
        $egitmen->addchild("KURSADI","CSS3");
        $egitmen->addAttribute("id","2");
        $egitmen->addAttribute("seviye","Ileri");
        $egitmen    =   $egitmenler->addchild("EGITMEN"); 
        $egitmen->addchild("ADI","Esra Erday");
        $egitmen->addchild("KURSADI","HTML5");
        $egitmen->addAttribute("id","3");
        $egitmen->addAttribute("seviye","Orta");
        $egitmen    =   $egitmenler->addchild("EGITMEN"); 
        $egitmen->addchild("ADI","Mert Kasap");
        $egitmen->addchild("KURSADI","NodeJS");
        $egitmen->addAttribute("id","4 ");
        $egitmen->addAttribute("seviye","Baslangic");
        
        echo $olustur->asXML();
----------------------------------------*/
/*
$degerler = array(
    "FIRMA" => "RDY Media",
    "YONETICI"=>"Ataberk Erday",
    "EGITIMLER"=> array(
        "HTML5",
        "CSS3",
        "PHP7",
        "JAVASCRIPT",
        "NodeJS"
    ),
    "EGITMENLER"=>array(
        "EGITMEN"=>array(
            array(
                "ADI"=>"Ataberk Erday",
                "KURSADI"=>"PHP7"
            ),
            array(
                "ADI"=>"Sadik Erday",
                "KURSADI"=>"CSS3"
            ),
            array(
                "ADI"=>"Esra Erday",
                "KURSADI"=>"HTML5"
            ),
            array(
                "ADI"=>"Mert Kasap",
                "KURSADI"=>"JAVASCRIPT"
            ),
            array(
                "ADI"=>"Roka Erday",
                "KURSADI"=>"NodeJS"
            )
        )
        )
);
function islem($icerik, $olustur){
    foreach ($icerik as $anahtarbir => $degerbir) {
     if (!is_array($degerbir)) {
        $olustur->addchild($anahtarbir,$degerbir);
    }else{
        
        if ($anahtarbir=="EGITIMLER") {
            $egitimler = $olustur->addchild("EGITIMLER");
            foreach ($degerbir as $anahtariki => $degeriki) {
                if (is_numeric($anahtariki)) {
                    $anahtariki = "KURS";
                }
                $egitimler->addchild($anahtariki, $degeriki);
            }
        }
        if ($anahtarbir="EGITMENLER") {
            $egitmenler =   $olustur->addchild("EGITMENLER");
            foreach ($degerbir as $anahtaruc => $degeruc) {
            if (is_array($degeruc)) {
                foreach ($degeruc as $anahtardort => $degerdort) {
                    $egitmen    =   $egitmenler->addchild("EGITMEN");
                    if (is_array($degerdort)) {
                        foreach ($degerdort as $anahtarbes => $degerbes) {
                            $egitmen->addchild($anahtarbes, $degerbes);
                        }
                    }
                }
              }
            }
        }
      }
    }
    return $olustur->asXML();
}
echo islem($degerler, new SimpleXMLElement("<ROOT/>"));
----------------------------------------*/
/*
$Degerler	=	array(
    "FIRMA" => "Extra Eğitim",
	"YONETICI" => "Volkan Alakent",
	"EGITIMLER" => array(
        array(
			"Icerik" => "HTML5",
			"id" => "Bir"
		),
		array(
            "Icerik" => "CSS3",
			"id" => "Iki"
		),
		array(
			"Icerik" => "JAVASCRIPT",
			"id" => "Uc"
		),
		array(
			"Icerik" => "PHP7",
			"id" => "Dort"
		)
	),
 	"EGITMENLER" => array(
		"EGITMEN" => array(
            array(
				"id" => "1",
				"seviye" => "Uzman",
				"ADI" => "Volkan Alakent",
				"KURSADI" => "PHP7"
			),
			array(
                "id" => "2",
				"seviye" => "İleri",
				"ADI" => ">Hakan Alakent",
				"KURSADI" => "HTML5"
			),
			array(
                "id" => "3",
				"seviye" => "Orta",
				"ADI" => "Onur Tatlı",
				"KURSADI" => "CSS3"
			),
			array(
				"id" => "4",
				"seviye" => "Başlangıç",
				"ADI" => "Ümit Okudan",
				"KURSADI" => "JAVASCRIPT"
                )
                )
                )
            );
            
function Islem($Icerik, $Olustur){
    foreach($Icerik as $AnahtarBir => $DegerBir){
		if(!is_array($DegerBir)){
            $Olustur->addChild($AnahtarBir, $DegerBir);
		}else{
            if($AnahtarBir=="EGITIMLER"){
				$Egitimler		=	$Olustur->addChild("EGITIMLER");
				foreach($DegerBir as $AnahtarIki => $DegerIki){
                    if(is_array($DegerIki)){
						foreach($DegerIki as $AnahtarUc => $DegerUc){
                            if($AnahtarUc=="Icerik"){
                                $Kurs	=	$Egitimler->addChild("KURS", $DegerUc);
							}else{
                                $Kurs->addAttribute("id", $DegerUc);
							}
						}
					}
				}
			}
			if($AnahtarBir=="EGITMENLER"){
                $Egitmenler		=	$Olustur->addChild("EGITMENLER");
				foreach($DegerBir as $AnahtarDort => $DegerDort){
					if(is_array($DegerDort)){
                        foreach($DegerDort as $AnahtarBes => $DegerBes){
                            $Egitmen	=	$Egitmenler->addChild("EGITMEN");
                            if(is_array($DegerBes)){
                                foreach($DegerBes as $AnahtarAlti => $DegerAlti){
                                    if(($AnahtarAlti!="id") and ($AnahtarAlti!="seviye")){
                                        $Egitmen->addChild($AnahtarAlti, $DegerAlti);
                                    }else{
											$Egitmen->addAttribute($AnahtarAlti, $DegerAlti);
										}
									}
								}
                            }
					}
				}
			}
		}
	}
	return $Olustur->asXML();
}

echo Islem($Degerler, new SimpleXMLElement("<EXTRAEGITIM/>"));
----------------------------------------*/
/*
$Degerler	=	array(
    "FIRMA" => "Extra Eğitim",
	"YONETICI" => "Volkan Alakent",
	"EGITIMLER" => array(
        array(
			"Icerik" => "HTML5",
			"id" => "Bir"
		),
		array(
            "Icerik" => "CSS3",
			"id" => "Iki"
		),
		array(
			"Icerik" => "JAVASCRIPT",
			"id" => "Uc"
		),
		array(
			"Icerik" => "PHP7",
			"id" => "Dort"
            
		)
	),
 	"EGITMENLER" => array(
		"EGITMEN" => array(
            array(
				"id" => "1",
				"seviye" => "Uzman",
				"ADI" => "Volkan Alakent",
				"KURSADI" => "PHP7"
			),
			array(
                "id" => "2",
				"seviye" => "İleri",
				"ADI" => ">Hakan Alakent",
				"KURSADI" => "HTML5"
			),
			array(
                "id" => "3",
				"seviye" => "Orta",
				"ADI" => "Onur Tatlı",
				"KURSADI" => "CSS3"
			),
			array(
				"id" => "4",
				"seviye" => "Başlangıç",
				"ADI" => "Ümit Okudan",
				"KURSADI" => "JAVASCRIPT"
                )
                )
                )
            );
            
function Islem($Icerik, $Olustur){
    foreach($Icerik as $AnahtarBir => $DegerBir){
		if(!is_array($DegerBir)){
            $Olustur->addChild($AnahtarBir, $DegerBir);
		}else{
            if($AnahtarBir=="EGITIMLER"){
				$Egitimler		=	$Olustur->addChild("EGITIMLER");
				foreach($DegerBir as $AnahtarIki => $DegerIki){
                    if(is_array($DegerIki)){
						foreach($DegerIki as $AnahtarUc => $DegerUc){
                            if($AnahtarUc=="Icerik"){
                                $Kurs	=	$Egitimler->addChild("KURS", $DegerUc);
							}else{
                                $Kurs->addAttribute("id", $DegerUc);
							}
						}
					}
				}
			}
			if($AnahtarBir=="EGITMENLER"){
                $Egitmenler		=	$Olustur->addChild("EGITMENLER");
				foreach($DegerBir as $AnahtarDort => $DegerDort){
					if(is_array($DegerDort)){
                        foreach($DegerDort as $AnahtarBes => $DegerBes){
                            $Egitmen	=	$Egitmenler->addChild("EGITMEN");
                            if(is_array($DegerBes)){
                                foreach($DegerBes as $AnahtarAlti => $DegerAlti){
                                    if(($AnahtarAlti!="id") and ($AnahtarAlti!="seviye")){
                                        $Egitmen->addChild($AnahtarAlti, $DegerAlti);
                                    }else{
											$Egitmen->addAttribute($AnahtarAlti, $DegerAlti);
										}
									}
								}
                            }
					}
				}
			}
		}
	}
	return $Olustur->asXML();
}

$sonuc = Islem($Degerler, new SimpleXMLElement("<EXTRAEGITIM/>"));
$dosya = "ornek.xml";
$dosyaac = fopen($dosya, "w");
fwrite($dosyaac, $sonuc);
fclose($dosyaac);
----------------------------------------*/
/*

$Degerler	=	array(
    "FIRMA" => "Extra Eğitim",
	"YONETICI" => "Volkan Alakent",
	"EGITIMLER" => array(
        array(
			"Icerik" => "HTML5",
			"id" => "Bir"
		),
		array(
            "Icerik" => "CSS3",
			"id" => "Iki"
		),
		array(
			"Icerik" => "JAVASCRIPT",
			"id" => "Uc"
		),
		array(
			"Icerik" => "PHP7",
			"id" => "Dort"
            
		)
	),
 	"EGITMENLER" => array(
		"EGITMEN" => array(
            array(
				"id" => "1",
				"seviye" => "Uzman",
				"ADI" => "Volkan Alakent",
				"KURSADI" => "PHP7"
			),
			array(
                "id" => "2",
				"seviye" => "İleri",
				"ADI" => ">Hakan Alakent",
				"KURSADI" => "HTML5"
			),
			array(
                "id" => "3",
				"seviye" => "Orta",
				"ADI" => "Onur Tatlı",
				"KURSADI" => "CSS3"
			),
			array(
				"id" => "4",
				"seviye" => "Başlangıç",
				"ADI" => "Ümit Okudan",
				"KURSADI" => "JAVASCRIPT"
                )
                )
                )
            );
            
function Islem($Icerik, $Olustur){
    foreach($Icerik as $AnahtarBir => $DegerBir){
		if(!is_array($DegerBir)){
            $Olustur->addChild($AnahtarBir, $DegerBir);
		}else{
            if($AnahtarBir=="EGITIMLER"){
				$Egitimler		=	$Olustur->addChild("EGITIMLER");
				foreach($DegerBir as $AnahtarIki => $DegerIki){
                    if(is_array($DegerIki)){
						foreach($DegerIki as $AnahtarUc => $DegerUc){
                            if($AnahtarUc=="Icerik"){
                                $Kurs	=	$Egitimler->addChild("KURS", $DegerUc);
							}else{
                                $Kurs->addAttribute("id", $DegerUc);
							}
						}
					}
				}
			}
			if($AnahtarBir=="EGITMENLER"){
                $Egitmenler		=	$Olustur->addChild("EGITMENLER");
				foreach($DegerBir as $AnahtarDort => $DegerDort){
					if(is_array($DegerDort)){
                        foreach($DegerDort as $AnahtarBes => $DegerBes){
                            $Egitmen	=	$Egitmenler->addChild("EGITMEN");
                            if(is_array($DegerBes)){
                                foreach($DegerBes as $AnahtarAlti => $DegerAlti){
                                    if(($AnahtarAlti!="id") and ($AnahtarAlti!="seviye")){
                                        $Egitmen->addChild($AnahtarAlti, $DegerAlti);
                                    }else{
											$Egitmen->addAttribute($AnahtarAlti, $DegerAlti);
										}
									}
								}
                            }
					}
				}
			}
		}
	}
	return $Olustur->asXML();
}

$sonuc = Islem($Degerler, new SimpleXMLElement("<EXTRAEGITIM/>"));
$dosya = "ornek.xml";
$islem = new DOMDocument;
$islem->loadXML($sonuc);
$islem->save($dosya);
----------------------------------------*/
$Degerler	=	array(
	"FIRMA" => "Extra Eğitim",
	"YONETICI" => "Volkan Alakent",
	"EGITIMLER" => array(
		array(
			"Icerik" => "HTML5",
			"id" => "Bir"
		),
		array(
			"Icerik" => "CSS3",
			"id" => "Iki"
		),
		array(
			"Icerik" => "JAVASCRIPT",
			"id" => "Uc"
		),
		array(
			"Icerik" => "PHP7",
			"id" => "Dort"
		)
	),
 	"EGITMENLER" => array(
		"EGITMEN" => array(
			array(
				"id" => "1",
				"seviye" => "Uzman",
				"ADI" => "Volkan Alakent",
				"KURSADI" => "PHP7"
			),
			array(
				"id" => "2",
				"seviye" => "İleri",
				"ADI" => ">Hakan Alakent",
				"KURSADI" => "HTML5"
			),
			array(
				"id" => "3",
				"seviye" => "Orta",
				"ADI" => "Onur Tatlı",
				"KURSADI" => "CSS3"
			),
			array(
				"id" => "4",
				"seviye" => "Başlangıç",
				"ADI" => "Ümit Okudan",
				"KURSADI" => "JAVASCRIPT"
			)
		)
	)
);

function Islem($Icerik, $Olustur){
	foreach($Icerik as $AnahtarBir => $DegerBir){
		if(!is_array($DegerBir)){
			$Olustur->addChild($AnahtarBir, $DegerBir);
		}else{
			if($AnahtarBir=="EGITIMLER"){
				$Egitimler		=	$Olustur->addChild("EGITIMLER");
				foreach($DegerBir as $AnahtarIki => $DegerIki){
					if(is_array($DegerIki)){
						foreach($DegerIki as $AnahtarUc => $DegerUc){
							if($AnahtarUc=="Icerik"){
								$Kurs	=	$Egitimler->addChild("KURS", $DegerUc);
							}else{
								$Kurs->addAttribute("id", $DegerUc);
							}
						}
					}
				}
			}
			if($AnahtarBir=="EGITMENLER"){
				$Egitmenler		=	$Olustur->addChild("EGITMENLER");
				foreach($DegerBir as $AnahtarDort => $DegerDort){
					if(is_array($DegerDort)){
						foreach($DegerDort as $AnahtarBes => $DegerBes){
							$Egitmen	=	$Egitmenler->addChild("EGITMEN");
								if(is_array($DegerBes)){
									foreach($DegerBes as $AnahtarAlti => $DegerAlti){
										if(($AnahtarAlti!="id") and ($AnahtarAlti!="seviye")){
											$Egitmen->addChild($AnahtarAlti, $DegerAlti);
										}else{
											$Egitmen->addAttribute($AnahtarAlti, $DegerAlti);
										}
									}
								}
						}
					}
				}
			}
		}
	}
	return $Olustur->asXML();
}

$Sonuc						=	Islem($Degerler, new SimpleXMLElement("<EXTRAEGITIM/>"));
$Dosya						=	"Ornek.xml";
$Islem						=	new DOMDocument;
$Islem->loadXML($Sonuc);
$Islem->preserveWhiteSpace	=	false;
$Islem->formatOutput		=	true;
$Islem->xmlVersion			=	"1.0";
$Islem->encoding			=	"UTF-8";
// echo $Islem->saveXML();
$Islem->save($Dosya);










?>