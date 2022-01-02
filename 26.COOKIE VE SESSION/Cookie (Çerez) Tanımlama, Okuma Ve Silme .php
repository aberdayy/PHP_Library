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
setcookie()     :   belirtilecek olan degerler dogrultusunda cookie yani cerez olusturmak veya silmek icin kullanilir.
    PARAMETRELER    ;   
        1.parametre : cerez adi 
        2.parametre : cerez degeri 
        3.parametre : cerez yasam suresi (belirtilmedigi taktirde tarayici aktif oldugu sure boyunca calisir tarayici kapatildigi zaman kapanir.)

*/
/*
setcookie("kullaniciadi", "volkan");
setcookie("kullanicisoyadi", "erday");
setcookie("egitimadi", "php egitimi");
------------------------------------------*/
/*
setcookie("kullaniciadi", "volkan");
setcookie("kullanicisoyadi", "erday");
setcookie("egitimadi", "php egitimi");

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
-------------------------------------*/
/*
setcookie("kullaniciadi", "volkan");
setcookie("kullanicisoyadi", "erday");
setcookie("egitimadi", "php egitimi");

echo "kullanicinin adi" . $_COOKIE["kullaniciadi"] . "<br />";
echo "kullanicinin soyadi". $_COOKIE["kullanicisoyadi"]. "<br />";
echo "egitimin adi". $_COOKIE["egitimadi"]. "<br />";
------------------------------------------*/

/*
setcookie("kullaniciadi", "volkan");
setcookie("kullanicisoyadi", "erday");
setcookie("egitimadi", "php egitimi");
setcookie("kullaniciadi", "extra");
setcookie("kullanicisoyadi", "egitim");   //    AYNI COOKIE ISMI BIRDEN FAZLA KEZ TANIMLANDIGI ZAMAN HER ZAMAN D=SON TANIMLAN DEGER GECERLIDIR.

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
---------------------------------------------*/
/*
setcookie("kullaniciadi", "volkan");
setcookie("kullanicisoyadi", "erday");
setcookie("egitimadi", "php egitimi");

echo "kullanicinin adi" . $_COOKIE["kullaniciadi"] . "<br />";
echo "kullanicinin soyadi". $_COOKIE["kullanicisoyadi"]. "<br />";
echo "egitimin adi". $_COOKIE["egitimadi"]. "<br />";
-----------------------------------------------*/
/*
$yasamsuresi = time() + ((60 * 60) * 24);
setcookie("kullaniciadi", "volkan", $yasamsuresi);
setcookie("kullanicisoyadi", "erday", $yasamsuresi);
setcookie("egitimadi", "php egitimi", $yasamsuresi);

echo "kullanicinin adi" . $_COOKIE["kullaniciadi"] . "<br />";
echo "kullanicinin soyadi". $_COOKIE["kullanicisoyadi"]. "<br />";
echo "egitimin adi". $_COOKIE["egitimadi"]. "<br />";
--------------------------------------*/

$yasamsuresi = time() + 15;
setcookie("kullaniciadi", "volkan", $yasamsuresi);
setcookie("kullanicisoyadi", "erday", $yasamsuresi);
setcookie("egitimadi", "php egitimi", $yasamsuresi);


echo "kullanicinin adi" . $_COOKIE["kullaniciadi"] . "<br />";
echo "kullanicinin soyadi". $_COOKIE["kullanicisoyadi"]. "<br />";
echo "egitimin adi". $_COOKIE["egitimadi"]. "<br />";

//silmek icin yasam suresi sifirlanir.


?>
</body>
</html>	