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
for   :  dongu islemi baslatir.
yapisi;

for(deger; kosul; aarttirma veya azaltma degeri){
kod bloklari
}
*/
/*
for($deger  =  1; $deger <=10; $deger++){
   echo $deger . "<br />";
}
------------------------------------------
*/
/*
for($deger  =  10; $deger >=1; $deger--){
   echo $deger . "<br />";
}
-----------------------------------------
*/
//bu ifade gibi gelismis ifadeler for da yapilamaz
$deger=1;
while ($deger <= 100) {
echo $deger . "<br />";

if($deger<10){
   $deger++;  
}elseif (($deger>=10)and($deger<90)) {
   $deger=$deger+5;
}else {
   $deger=$deger+2;
}
}





?>
</body>
</html>	