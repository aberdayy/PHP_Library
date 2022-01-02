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
class deneme {

        public function __construct($hostbilgisi, $veritabanikullaniciadi, $veritabanikullanicisifresi, $veritabaniadi ){
                $metin = "gelen host bilgisi : " . $hostbilgisi . "<br />" . "gelen veritabani kullanici adi bilgisi : " . $veritabanikullaniciadi . "<br />" . "veritabani kullanici sifresi : " . $veritabanikullanicisifresi . "<br />" . "veri tabani adi bilgisi : " . $veritabaniadi . "<br />";
                echo $metin;
            }

}
 $islem = new deneme("localhost" , "ataberkerday" , "thebeetle12", "e ticaret");

 -----------------------------------------*/
 
 /*
class deneme {

    public function __construct($hostbilgisi="localhost", $veritabanikullaniciadi="ataberk erday", $veritabanikullanicisifresi="thebeetle12", $veritabaniadi="eticaret" ){
            $metin = "gelen host bilgisi : " . $hostbilgisi . "<br />" . "gelen veritabani kullanici adi bilgisi : " . $veritabanikullaniciadi . "<br />" . "veritabani kullanici sifresi : " . $veritabanikullanicisifresi . "<br />" . "veri tabani adi bilgisi : " . $veritabaniadi . "<br />";
            echo $metin;
        }

}
$islem = new deneme;
-----------------------------------------*/
class deneme {

    public function __construct($hostbilgisi="localhost", $veritabanikullaniciadi="ataberk erday", $veritabanikullanicisifresi="thebeetle12", $veritabaniadi="eticaret" ){
            $metin = "gelen host bilgisi : " . $hostbilgisi . "<br />" . "gelen veritabani kullanici adi bilgisi : " . $veritabanikullaniciadi . "<br />" . "veritabani kullanici sifresi : " . $veritabanikullanicisifresi . "<br />" . "veri tabani adi bilgisi : " . $veritabaniadi . "<br />";
            echo $metin;
        }

}
$islem = new deneme(null,"","", "blog");







?>
</body>
</html>	