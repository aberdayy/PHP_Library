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
break :  dongunun calismasinin sonlandirmak icin kullanili
*/
/*
$baslangic = 1;

while ($baslangic <= 1000) {
   echo $baslangic . "<br />";
if ($baslangic==10) {
break; 
}
$baslangic++;

}
---------------------------------
*/
/*
$baslangic = 1;

do {
   echo $baslangic . "<br />";
if ($baslangic==15) {
break; 
}
$baslangic++;

}while($baslangic <= 1000);
---------------------------
*/
/*
for ($baslangic = 1; $baslangic <= 1000; $baslangic++) { 
   echo $baslangic . "<br />";
   if ($baslangic==25) {
   break; 
   }
}
0--------------------------------------
*/
$esyalar =  ["masa","sandalye","dolap","hali","kilim","koltuk"];
foreach ($esyalar as $deger) {
  echo $deger . "<br />";
  if ($deger=="dolap") {
  break;
  }
}




?>
</body>
</html>	