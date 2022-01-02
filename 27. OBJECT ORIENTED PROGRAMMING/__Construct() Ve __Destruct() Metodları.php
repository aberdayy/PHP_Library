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
__construct()     :    belirtilecek olan sinifa yapici method tanimlamak icin kullanilir   
__destruct()      :    belirtilecek olan sinifa yikici method tanimlamak icin kullanilir   
*/

class deneme{
 public function __construct(){
     echo "sinif calisti  ve yapici method devreye girdi. <br />";
 }
   public function __destruct(){
    echo "sinif icerisindeki tum ozellik ve metodlarinin calismasi  tamamlandigi icin yikici metod devreye girdi.";
}
public $isim = "ataberk";
public $soyisim = "erday";

public function yaz(){
    $metin = "adan z ye php egitim seti ";
    return $metin; 

}
}

$islemyap  = new deneme;
echo $islemyap->isim . " " . $islemyap->soyisim . " " . $islemyap->yaz() . "<br />";











?>
</body>
</html>	