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
$yasamsuresi = time() + (60 * 5) ;

setcookie("kullaniciadi" , "ataberk" , $yasamsuresi);
setcookie("kullanicisoyadi" , "erday" , $yasamsuresi);
setcookie("kullanicimailadresi" , "ataberkerrday@gmail.com" , $yasamsuresi);
setcookie("kullanicitelefon" , "0544 386 97 94" , $yasamsuresi);

setcookie("sepetID" , 5 , $yasamsuresi);
setcookie("sepettutari" , 1250 , $yasamsuresi);
setcookie("sepettaksitsayisi" , 6 , $yasamsuresi);
setcookie("sepetodemeturu" , "kredi karti" , $yasamsuresi);
-----------------------------------*/
 
$yasamsuresi = time() + (60 * 5) ;

setcookie("kullanici[adi]" , "ataberk" , $yasamsuresi);
setcookie("kullanici[soyadi]" , "erday" , $yasamsuresi);
setcookie("kullanici[mailadresi]" , "ataberkerrday@gmail.com" , $yasamsuresi);
setcookie("kullanici[telefon]" , "0544 386 97 94" , $yasamsuresi);

setcookie("sepet[ID]" , 5 , $yasamsuresi);
setcookie("sepet[tutari]" , 1250 , $yasamsuresi);
setcookie("sepet[taksitsayisi]" , 6 , $yasamsuresi);
setcookie("sepet[odemeturu]" , "kredi karti" , $yasamsuresi);

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";





?>
</body>
</html>	