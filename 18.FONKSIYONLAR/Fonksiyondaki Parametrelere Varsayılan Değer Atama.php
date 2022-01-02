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
function islem($isim,$soyisim,$yas){

    echo "gelen isim :" . $isim . "<br />";
    echo "gelen soyisim :" . $soyisim . "<br />";
    echo "gelen yas :" . $yas . "<br />";

}

islem("ataberk","erday","18")
-----------------------------------------
*/
/*
function islem($isim,$soyisim,$yas){

        $gelenisimdegeri    =   $isim;
        $gelensoyisimdegeri =   $soyisim;
        $gelenyasdegeri     =   $yas;

    echo "gelen isim :" . $gelenisimdegeri . "<br />";
    echo "gelen soyisim :" . $gelensoyisimdegeri . "<br />";
    echo "gelen yas :" . $gelenyasdegeri . "<br />";

}

islem("ataberk","erday","18")
----------------------------------------------
*/


/*
function islem($isim,$soyisim,$yas=50){

    $gelenisimdegeri    =   $isim;
    $gelensoyisimdegeri =   $soyisim;
    $gelenyasdegeri     =   $yas;

echo "gelen isim :" . $gelenisimdegeri . "<br />";
echo "gelen soyisim :" . $gelensoyisimdegeri . "<br />";
echo "gelen yas :" . $gelenyasdegeri . "<br />";

}

islem("ataberk","erday");
--------------------------------------------

*/
/*
function islem($isim,$soyisim,$yas=50){

    $gelenisimdegeri    =   $isim;
    $gelensoyisimdegeri =   $soyisim;
    $gelenyasdegeri     =   $yas;

echo "gelen isim :" . $gelenisimdegeri . "<br />";
echo "gelen soyisim :" . $gelensoyisimdegeri . "<br />";
echo "gelen yas :" . $gelenyasdegeri . "<br />";

}

islem("ataberk","erday",18);
--------------------------------------------
*/
/*
function islem($isim="bilinmiyor",$soyisim="bilinmiyor",$yas="bilinmiyor"){

    $gelenisimdegeri    =   $isim;
    $gelensoyisimdegeri =   $soyisim;
    $gelenyasdegeri     =   $yas;

echo "gelen isim :" . $gelenisimdegeri . "<br />";
echo "gelen soyisim :" . $gelensoyisimdegeri . "<br />";
echo "gelen yas :" . $gelenyasdegeri . "<br />";

}

islem();
----------------------------------------------------
*/
/*
function islem($isim="bilinmiyor",$soyisim="bilinmiyor",$yas="bilinmiyor"){

    $gelenisimdegeri    =   $isim;
    if ($gelenisimdegeri!="bilinmiyor") {
        echo "gelen isim :" . $gelenisimdegeri . "<br />";
    }
    $gelensoyisimdegeri =   $soyisim;
    if ($gelensoyisimdegeri!="bilinmiyor") {
        echo "gelen soyisim :" . $gelensoyisimdegeri . "<br />";
    }
    $gelenyasdegeri     =   $yas;
    if ($gelenyasdegeri!="bilinmiyor") {
        echo "gelen yas :" . $gelenyasdegeri . "<br />";
    }


}

islem();
---------------------------------------------
*/
/*
function islem($isim="bilinmiyor",$soyisim="bilinmiyor",$yas="bilinmiyor"){

    $gelenisimdegeri    =   $isim;
    if ($gelenisimdegeri!="bilinmiyor") {
        echo "gelen isim :" . $gelenisimdegeri . "<br />";
    }
    $gelensoyisimdegeri =   $soyisim;
    if ($gelensoyisimdegeri!="bilinmiyor") {
        echo "gelen soyisim :" . $gelensoyisimdegeri . "<br />";
    }
    $gelenyasdegeri     =   $yas;
    if ($gelenyasdegeri!="bilinmiyor") {
        echo "gelen yas :" . $gelenyasdegeri . "<br />";
    }


}

islem("ataberk","erday",18);
----------------------------------------------------
*/
/*
function islem($isim="bilinmiyor",$soyisim="bilinmiyor",$yas="bilinmiyor"){

    $gelenisimdegeri    =   $isim;
    if ($gelenisimdegeri!="bilinmiyor") {
        echo "gelen isim :" . $gelenisimdegeri . "<br />";
    }
    $gelensoyisimdegeri =   $soyisim;
    if ($gelensoyisimdegeri!="bilinmiyor") {
        echo "gelen soyisim :" . $gelensoyisimdegeri . "<br />";
    }
    $gelenyasdegeri     =   $yas;
    if ($gelenyasdegeri!="bilinmiyor") {
        echo "gelen yas :" . $gelenyasdegeri . "<br />";
    }


}

islem("ataberk");
-------------------------------------------------
*/


function islem($isim="ataberk",$soyisim="erday",$yas="18"){

    $gelenisimdegeri    =   $isim;
        echo "gelen isim :" . $gelenisimdegeri . "<br />";
    $gelensoyisimdegeri =   $soyisim;
        echo "gelen soyisim :" . $gelensoyisimdegeri . "<br />";
    $gelenyasdegeri     =   $yas;
        echo "gelen yas :" . $gelenyasdegeri . "<br />";



}

islem("","","50");















?>
</body>
</html>	