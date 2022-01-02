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
trait       :   siniflar icin ozellik ve metod gruplarinin olusturulmasi icin kullanilir.   
    kural       ; siniflarda olan tum kural ve ozelliklere sahiptir ancak const tanimi kullanilamaz!

use         :   daha onceden tanimlanmis olan herhangi bir ozellik veya metod grubunu ilgili metoda tanimlamak / uygulamak icin kullanilir.
insteadof   :   sinif icin tanimlanmis olan ozellik ve metod guruplarinda tercih / secim islemleri icin kullanilir.
as          :   sinif icin tanimlanmis olan ozellik ve metod gruplarinda, metoda takma isim belirleme veya gorunurluk atama islemleri icin kullanilir.
*/
/*
trait kisi{
    public $isim    = "ataberk";
    public $soyisim = "erday";
    
    public function tanimlar(){
        $metin = "a'dan z'ye php gorsel egitim seti";
        return $metin;
    }

}



class deneme{
    use kisi;
}


$sonuc = new deneme;
echo $sonuc->isim. " ";
echo $sonuc->soyisim. "<br />";
echo $sonuc->tanimlar(). "<br />";

------------------------------------------------------------*/
/*
trait adsoyad{
    public $isim    = "ataberk";
    public $soyisim = "erday";
    
    

}

trait bilgi{
    public function tanimlar(){
        $metin = "a'dan z'ye php gorsel egitim seti";
        return $metin;
    }

}




class deneme{
    use adsoyad, bilgi;
}


$sonuc = new deneme;
echo $sonuc->isim. " ";
echo $sonuc->soyisim. "<br />";
echo $sonuc->tanimlar(). "<br />";

------------------------------------------------------------*/
/*
trait adsoyad{
    public $isim    = "ataberk";
    public $soyisim = "erday";
    
    

}

trait bilgi{
    public function tanimlar(){
        $metin = "a'dan z'ye php gorsel egitim seti";
        return $metin;
    }

}

trait kisibilgileri{
    use adsoyad, bilgi;
}


class deneme{
    use  kisibilgileri;
}


$sonuc = new deneme;
echo $sonuc->isim. " ";
echo $sonuc->soyisim. "<br />";
echo $sonuc->tanimlar(). "<br />";

------------------------------------------------------------*/
/*
trait kisibir{ 

    public $ozellikbir = "AAA";


    public function goster(){
        $isimsoyisim = "ataberk erday";
        return $isimsoyisim;
    }
}

trait kisiiki{

    public $ozellikiki = "BBB";

    public function goster(){
        $isimsoyisim = "sadik erday";
        return $isimsoyisim;
    }

}

class deneme{
    use  kisibir, kisiiki { kisibir::goster insteadof kisiiki; }
}


$sonuc = new deneme;
echo $sonuc->ozellikbir . "<br />";
echo $sonuc->ozellikiki. "<br />";

echo $sonuc->goster();
------------------------------------------------------------*/
/*
trait kisibir{ 
    public function goster(){
        $isimsoyisim = "ataberk erday";
        return $isimsoyisim;
    }
}

trait kisiiki{
    public function goster(){
        $isimsoyisim = "sadik erday";
        return $isimsoyisim;
    }

}
class deneme{
    use  kisibir, kisiiki { kisiiki::goster  insteadof kisibir ; kisiiki::goster as yenimetodadi; }
}

$sonuc = new deneme;

echo $sonuc->yenimetodadi();
------------------------------------------------------------*/
/*
trait kisi{ 
    public function goster(){
        $isimsoyisim = "ataberk erday";
        return $isimsoyisim;
    }
}


class deneme{
    use  kisi {
     kisi::goster as yaz;   
    }
}

$sonuc = new deneme;

echo $sonuc->yaz();
------------------------------------------------------------*/
/*
trait kisibir{ 
    public function goster(){
        $isimsoyisim = "ataberk erday";
        return $isimsoyisim;
    }
}

trait kisiiki{
    public function goster(){
        $isimsoyisim = "sadik erday";
        return $isimsoyisim;
    }

}
class deneme{
    use  kisibir, kisiiki {
         kisibir::goster insteadOf kisiiki;

         kisibir::goster  as yazbir;
         kisiiki::goster  as yaziki;
  }
}

$sonuc = new deneme;

echo $sonuc->yazbir()."<br />";
echo $sonuc->yaziki();
------------------------------------------------------------*/
/*
trait kisi{ 
    private function goster(){
        $isimsoyisim = "ataberk erday";
        return $isimsoyisim;
    }
}

class deneme{
    use  kisi {
        kisi::goster as public;
    }
}

$sonuc = new deneme;

echo $sonuc->goster()."<br />";
------------------------------------------------------------*/
/*
trait kisi{ 
    public function goster(){
        $isimsoyisim = "ataberk erday";
        return $isimsoyisim;
    }
}

class deneme{
    use  kisi {
        kisi::goster as private; //hata kodu dondurur cunku metod burada private gorunurluk degerinde degistirildi.
    }
}

$sonuc = new deneme;

echo $sonuc->goster()."<br />";

------------------------------------------------------------*/
trait kisi{ 
    abstract public function goster();
}

class deneme{
    
    use  kisi;

    public function goster(){
        $isimsoyisim = "ataberk erday";
        return $isimsoyisim;
    }
}

$sonuc = new deneme;

echo $sonuc->goster()."<br />";







?>
</body>
</html>	