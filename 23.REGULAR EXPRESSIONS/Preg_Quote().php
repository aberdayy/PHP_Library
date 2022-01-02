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
Preg_Quote() : kendisine parametre olarak vrilen icerigi kontrol eder ve icerik dogrultusunda ozel karakter veya karakterlerin bulunmasi durumunda bulunan ozel karakter veya karakterlerin onune ters slash \ ekleyrek yeni bir icerik olsuturur ve olsuturdugu icerigi geriye dondurur.
ozel karakter;
.
\
+
*
^
$
=
?
!
|
:
-
[ ]
( )
{ } 
< >

*/

/*
$deger = "merhaba nasilsin?";
$islem = preg_quote($deger);

echo "orjinal icerik" . $deger . "<br />";

echo "degisen icerik" . $islem . "<br />";
---------------------------------------------
*/

/*
$deger = "merhaba nasilsin? / Nerelisin?";
$islem = preg_quote($deger, "/");

echo "orjinal icerik" . $deger . "<br />";

echo "degisen icerik" . $islem . "<br />";
-----------------------------
*/

$deger = "merhaba nasilsin? / Nerelisin?";
$islem = preg_quote($deger, "e");

echo "orjinal icerik" . $deger . "<br />";

echo "degisen icerik" . $islem . "<br />";






























?>


</body>
</html>	