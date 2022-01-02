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
continue :  dongunun belli bir kisminin atlanarak calismakta olan dongunun bir sonraki isleme devam etmesi icin kullanilir.
*/

// EN DUZGUN KULLANIMI FOR ILE OLUR!!1

/*
$sayi = 0;
while ($sayi < 50) {

   $sayi++;
if (($sayi>10)and ($sayi<20)) {
   continue;
}

echo $sayi . "<br />";

}
---------------------------
*/
/*
do {$sayi++;
   if (($sayi>10)and ($sayi<20)) {
      continue;
   }
   
   echo $sayi . "<br />";
   
   
} while ($sayi<50);
-----------------------------------
*/
/*
for ($sayi=0; $sayi <=50 ; $sayi++) { 
   if (($sayi>10)and ($sayi<20)) {
      continue;
   }
   
   echo $sayi . "<br />";
   
}
--------------------------------------
*/
$isimler =  ["ataberk","sadik","volkan","cafer","umit","serkan"];

foreach ($isimler as $key) {

   if (($key=="cafer")or ($key=="umit")) {
     continue;
   }

   echo $key . "<br />";
}





















?>
</body>
</html>	