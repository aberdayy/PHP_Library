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
Addslashes()        :   belirtilecek olan icerikte bulunan  ' (tek tirnak) ve " (cift tirnak) isaretlerinin onune \ (ters slash) yani kacirma operatoru ekler ve sade bir metin icerigi olusturarak olusturdugu degeri geriye dondurur.

Stripslashes()      :   belirtilecek olan icerikte bulunan ve onune \ (ters slash) yani kacirma operatoru eklenmis olan tum karakterlerin onunde bulunan \ (ters slash) yani kacirma operatorlerini kaldirir ve aktif bir metin icerigi olusturarak 
olusturdugu degeri geriye dondurur.

Addcslashes()       :   belirtilecek olan icerikte bulunan belirtileccek olan ozel karakterlerin onune \ (ters slash) yani kacirma operatoru ekler ve sade bir metin icerigi olusturarak olusturdugu degeri geriye dondurur.

Stripcslashes()     :   belirtilecek olan icerikte bulunan ve onune \ (ters slash) yani kacirma operatoru eklenmis olan tum ozel karakterlerin onunde bulunan \ (ters slash) yani kacirma operatorlerini kaldirir ve aktif bir metin icerigi olusturarak 
olusturdugu degeri geriye dondurur.

Quotemeta()         :  belirtilecek olan icerikte bulunan ozel karakterlerin onune \ (ters slash) yani kacirma operatoru ekler ve sade bir metin icerigi olusturarak olusturdugu degeri geriye dondurur.
.\ + * ? [ ] ( ) $ ^ isaretlerinde calisir.
*/
/*
$icerik = "ataberk erday a'dan z'ye PHP gorsel egitim seti <br />";

echo "orjinal metin :".$icerik;

$yeniiicerik = addslashes($icerik);
echo "addslashes uygulanmis metin :" . $yeniiicerik;
------------------------------------------------------------------*/
/*
$icerik = "ataberk erday a'dan z'ye PHP gorsel egitim seti <br />";

echo "orjinal metin :".$icerik;

$yeniiicerik = addslashes($icerik);
echo "addslashes uygulanmis metin :" . $yeniiicerik;

$sonicerik = stripslashes($yeniiicerik);
echo "stripslashes uygulanmis metin :" . $sonicerik;
------------------------------------------------------------------*/
/*
$icerik = "ataberk erday a'dan z'ye PHP gorsel egitim seti <br />";

echo "orjinal metin :".$icerik;

$yeniiicerik = addcslashes($icerik,"'");
echo "addslashes uygulanmis metin :" . $yeniiicerik;
------------------------------------------------------------------*/
/*
$icerik = "ataberk erday a'dan z'ye PHP gorsel egitim seti <br />";

echo "orjinal metin :".$icerik;

$yeniiicerik = addcslashes($icerik,"'");
echo "addslashes uygulanmis metin :" . $yeniiicerik;

$sonicerik = stripcslashes($yeniiicerik);
echo "stripslashes uygulanmis metin :" . $sonicerik;
------------------------------------------------------------------*/
/*
$icerik = "ataberk erday a'dan z'ye PHP gorsel egitim seti <br />";

echo "orjinal metin :".$icerik;

$yeniiicerik = addcslashes($icerik,"aei");
echo $yeniiicerik;

$sonicerik = stripcslashes($yeniiicerik);
echo  $sonicerik;
------------------------------------------------------------------*/
/*
$icerik = "ataberk erday a'dan z'ye PHP gorsel egitim seti <br />";

echo "orjinal metin :".$icerik;

$yeniiicerik = addcslashes($icerik,"a..z");
echo  $yeniiicerik ;

$sonicerik = stripcslashes($yeniiicerik);
echo  "<br />".$sonicerik;
------------------------------------------------------------------*/
/*
$icerik = "ataberk erday a'dan z'ye PHP 124252325267gorsel egitim seti <br />";

echo "orjinal metin :".$icerik;

$yeniiicerik = addcslashes($icerik,"0..9");
echo  $yeniiicerik ;

$sonicerik = stripcslashes($yeniiicerik);
echo  "<br />".$sonicerik;
------------------------------------------------------------------*/
/*
$icerik = "ataberk erday a'dan z'ye PHP gorsel egitim seti 20200605<br />";

echo "orjinal metin :".$icerik;

$yeniiicerik = addcslashes($icerik,"a..zA..Z0..9");
echo  $yeniiicerik ;

$sonicerik = stripcslashes($yeniiicerik);
echo  "<br />".$sonicerik;
------------------------------------------------------------------*/

$icerik =" . \ + * ? [ ] ( ) $ ^ - = ";

$yeniiicerik = quotemeta($icerik);
echo  $yeniiicerik . "<br />" ;
























 ?>
</body>
</html>	