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
\b :    duzenli ifade dahilinde kontrol edilecek olan icerigin
 duzenli ifadeye uygun olabilecek metin parcalarini karakter dizilimi
  icerisindeki kelimlerin basinda yada sonunda aramak icin kullanilir.
\B :    duzenli ifade dahilinde kontrol edilecek olan icerigin
 duzenli ifadeye uygun olabilecek metin parcalarini karakter dizilimi
  icerisindeki kelimlerin icerisinde aramak icin kullanilir.
*/
/*
$icerik = "turkiye'nin en meshur yogurtlarindan birisi susurluk yogurdudur.";
$desen = "/\bkan/";
$sonuc = preg_match($desen,$icerik);

echo "orjinal icerik : " . $icerik . "<br />";
echo "desen : " . $desen . "<br />";
echo "sonuc : " . $sonuc;
--------------------------------
*/
/*
$icerik = "turkiye'nin en meshur yogurtlarindan birisi kanlica yogurdudur.";
$desen = "/\bkan/";
$sonuc = preg_match($desen,$icerik);

echo "orjinal icerik : " . $icerik . "<br />";
echo "desen : " . $desen . "<br />";
echo "sonuc : " . $sonuc;
-------------------------------------------------
*/
/*
$icerik = "turkiye'nin en meshur yogurtlarindan birisi kanlica yogurdudur.";
$desen = "/den\b/";
$sonuc = preg_match($desen,$icerik);

echo "orjinal icerik : " . $icerik . "<br />";
echo "desen : " . $desen . "<br />";
echo "sonuc : " . $sonuc;
----------------------------------
*/
/*
$icerik = "turkiye'nin en meshur yogurtlarindan birisi kanlica yogurdudur.";
$desen = "/dan\b/";
$sonuc = preg_match($desen,$icerik);

echo "orjinal icerik : " . $icerik . "<br />";
echo "desen : " . $desen . "<br />";
echo "sonuc : " . $sonuc;
------------------------------------------
*/
/*

$icerik = "turkiye'nin en meshur yogurtlarindan birisi kanlica yogurdudur.";
$desen = "/\Bkan/";
$sonuc = preg_match($desen,$icerik);

echo "orjinal icerik : " . $icerik . "<br />";
echo "desen : " . $desen . "<br />";
echo "sonuc : " . $sonuc;
-------------------------------------------
*/
/*
$icerik = "Benim adim Volkandir. Turkiye'nin en meshur yogurtlarindan birisi kanlica yogurdudur.";
$desen = "/\Bkan/";
$sonuc = preg_match($desen,$icerik);

echo "orjinal icerik : " . $icerik . "<br />";
echo "desen : " . $desen . "<br />";
echo "sonuc : " . $sonuc;
---------------------------------------
*/

/*
$icerik = "turkiye'nin en meshur yogurtlarindan birisi licakan yogurdudur.";
$desen = "/kan\B/";
$sonuc = preg_match($desen,$icerik);

echo "orjinal icerik : " . $icerik . "<br />";
echo "desen : " . $desen . "<br />";
echo "sonuc : " . $sonuc;
-------------------------------
*/


$icerik = "turkiye'nin en meshur yogurtlarindan birisi licakan yogurdudur.";
$desen = "/\Bkan\B/"; //cok mecbur kalinirsa kullanilabilir ama bu kullanimdan kacininiz.
$sonuc = preg_match($desen,$icerik);

echo "orjinal icerik : " . $icerik . "<br />";
echo "desen : " . $desen . "<br />";
echo "sonuc : " . $sonuc;










?>


</body>
</html>	