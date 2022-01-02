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
Feof()          :       belirtilecek olan dosya veya url iceriginin sonuna kadar okumup okunmadigini tespit etmek icin kullanilir.

Fgets()         :       belirtilecek olan dosya ve url icerigini kontrol ederek ve bilgileri satir satir bularak buldugu degeri geriye dondurur. ayrica tum icerikte bulunan satir verileri herhangi bir dongu ile elde edilebilir.

Fgetc()         :       belirtilecek olan dosya ve url icerigini kontrol ederek ve bilgileri karakter karakter bularak buldugu degeri geriye dondurur. 
                        ayrica tum icerikte bulunan karakter verileri herhangi bir dongu ile elde edilebilir.

Fread()         :       belirtilecek olan dosya veya url icerihini kontrol ederek ve belirtilecek karakter degerlerine bolunmus icerikleri bularak, buldugu degeri  geriye dondurur. 
                        ayrica tum icerikte bulunan ve belirtilecek karakter degerlerine bolunmus verileri herhnagi bir dongu ile elde edebilir.

Fpassthru()     :       belirtilecek olan dosya ve url icerigini kontrol ederek ve tum icerigi bir defa da bularak buldugu degeri geriye dondurur.
*/
/*
$dosya         =       "belge2.txt";
$dosyaac       =       fopen($dosya , "r");
$oku           =       fgets ($dosyaac);

echo $oku;
fclose($dosyaac);
----------------------*/
/*
$dosya         =       "belge2.txt";
$dosyaac       =       fopen($dosya , "r");
$oku           =       fgetc ($dosyaac);

echo $oku;
fclose($dosyaac);
--------------------------*/
/*
$dosya         =       "belge2.txt";
$dosyaac       =       fopen($dosya , "r");
$oku           =       fread ($dosyaac, 5);

echo $oku;
fclose($dosyaac);
-----------------------------*/
/*
$dosya         =       "belge2.txt";
$dosyaac       =       fopen($dosya , "r");
$oku           =       fpassthru ($dosyaac);

echo $oku;
fclose($dosyaac);
------------------------------*/
/*
$dosya         =       "belge2.txt";
$dosyaac       =       fopen($dosya , "r");

while (!feof($dosyaac)) {
        $oku           =       fgets($dosyaac). "<br />";
        echo $oku;
}
fclose($dosyaac);
------------------------------*/
/*
$dosya         =       "belge2.txt";
$dosyaac       =       fopen($dosya , "r");
$numara = 1;
while (!feof($dosyaac)) {
        $oku           =       fgets($dosyaac);
        
 
        echo $numara . ". satir : " . $oku . "<br />";
        $numara++;
}
fclose($dosyaac);
---------------------------------*/
/*
$dosya         =       "belge2.txt";
$dosyaac       =       fopen($dosya , "r");
$numara = 1;
while (!feof($dosyaac)) {
        $oku           =       fgetc($dosyaac);
        
 
        echo $numara . ". karakter : " . $oku . "<br />";
        $numara++;
}
fclose($dosyaac);
----------------------------------*/
/*
$dosya         =       "belge2.txt";
$dosyaac       =       fopen($dosya , "r");
$numara = 1;
while (!feof($dosyaac)) {
        $oku           =       fread($dosyaac, "5");
        
 
        echo $numara . ". karakter : " . $oku . "<br />";
        $numara++;
}
fclose($dosyaac);
---------------------------------------*/
/*
$url         =       "https://www.hepsiburada.com";
$urlac       =       fopen($url , "r");
$oku         =       fgets($urlac);

echo $oku;
fclose($urlac);
----------------------------------*/

$url         =       "https://www.hepsiburada.com";
$urlac       =       fopen($url , "r");
$oku         =       fpassthru($urlac);

echo $oku;
fclose($urlac);

?>
</body>
</html>	