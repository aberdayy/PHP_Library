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
ftell()         :   belirtilecek olan dosya veya url iceriginde okumaya hazir bulunan konumu bularak buldugu degeri geriye dondurur.
fseek()         :   belirtilecek olan dosya veya url iceriginde okumaya hazir bulunan konumu degistirerek degistirdigi degeri geriye dondurur.
rewind()        :   belirtilecek olan dosya veya url iceriginde degistirilmis olan okumaya hazir bulunan konumu sifirlayarak varsayilan halien geri dondurmek icin kullanilir.
*/
/*
$dosya   = "belge2.txt";
$dosyaac = fopen($dosya, "r");

$konum  = ftell($dosyaac);
echo "okumaya hazir bulunan konum : " . $konum;

fclose($dosyaac);
---------------------------------*/
/*
$dosya   = "belge2.txt";
$dosyaac = fopen($dosya, "r");

$konum  = ftell($dosyaac);
echo "okumaya hazir bulunan konum : " . $konum. "<br />";
fseek($dosyaac, 7);

$konum2  = ftell($dosyaac);
echo "okumaya hazir bulunan konum : " . $konum2. "<br />";



fclose($dosyaac);
-----------------------------*/
/*
$dosya   = "belge2.txt";
$dosyaac = fopen($dosya, "r");

$konum  = ftell($dosyaac);
echo "okumaya hazir bulunan konum : " . $konum. "<br />";
fseek($dosyaac, 7);

$konum2  = ftell($dosyaac);
echo "okumaya hazir bulunan konum : " . $konum2. "<br />";

rewind ($dosyaac);

$konum3  = ftell($dosyaac);
echo "okumaya hazir bulunan konum : " . $konum3. "<br />";

fclose($dosyaac);

------------------------------------*/
/*
$dosya   = "belge2.txt";
$dosyaac = fopen($dosya, "r");

fseek($dosyaac, 15);

$konum = ftell($dosyaac);

echo "okumaya hazir bulunan konum : " . $konum . "<br />";

$oku = fgets($dosyaac);

echo $oku;

fclose($dosyaac);
-------------------------------*/

$URL   = "https://www.hepsiburada.com";
$URLac = fopen($URL, "r");

fseek($URLac, 5);

$konum = ftell($URLac);

echo "okumaya hazir bulunan konum : " . $konum . "<br />";

$oku = fgets($URLac);

echo $oku;

fclose($URLac);
  








?>
</body>
</html>	