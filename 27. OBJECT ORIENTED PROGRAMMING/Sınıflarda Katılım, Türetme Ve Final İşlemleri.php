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
extends :   bir sinifi baska bir siniftan turetmek istegimiz zaman kullanilir. 
final   :   en son kullanilan siniftir ve tureyen son sinif anlamini tasir. Ayrica metodlar uzerinde de kullanilabilir ve final tanimlanirsa bagli siniflarin icerisinde ayni metod kullanilamaz.
*/
/*
class denemebir{
    public $isim = "ataberk";
     
 }
 class denemeiki extends denemebir {
     
 }
 $sonuc = new denemeiki;
echo $sonuc->isim; 
---------------------------------*/
/*
class denemebir{
    private $isim = "ataberk";
     
 }
 class denemeiki extends denemebir {
     
 }
 $sonuc = new denemeiki;
echo $sonuc->isim; // ozellik private oldugu icin hata kodu dondurur.
------------------------------------------*/
/*
class denemebir{
    protected $isim = "ataberk";
     
 }
 class denemeiki extends denemebir {
     
 }
 $sonuc = new denemeiki;
echo $sonuc->isim; // ozellik protected oldugu icin hata kodu dondurur.
------------------------------------------*/
/*
class denemebir{
    protected $isim = "ataberk";
     
 }
 class denemeiki extends denemebir {
     function dondur(){
         return $this->isim;
     }
 }
 $sonuc = new denemeiki;
echo $sonuc->dondur(); // ozellik protected oldugu icin hata kodu dondurur.
------------------------------------------*/
/*
class denemebir{
    public $isim = "ataberk";
     
 }
 class denemeiki extends denemebir {
    public $isim = "ataberk";

 }
 $sonuc = new denemebir;
echo $sonuc->isim; // hata kodu dondurur, cunku ana siniflar turemis olan siniflarin ozellik ve metodlarini kabul etmezler.
------------------------------------------*/


//------------------------------------------!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!------------------------------------------------------

/*
class denemebir{
    public $isim = "ataberk";
    public $soyisim = "erday";
    function test(){
        $birlestir = $this->isim . " " . $this->soyisim . " A'dan Z'ye PHP gorsel egitim seti";
        return $birlestir;
    }
     
 }
 class denemeiki extends denemebir {
     
 }
 $sonuc = new denemeiki;
echo $sonuc->test(); 
------------------------------------------*/
/*
class elemanlardahili {
    public $isimsoyisim;
    public $aylikgelir;
    public $aylikgider;

    public function isimgoster($adsoyad){
        $this->isimsoyisim = $adsoyad;
    }
    public function gelirgoster($gelirtutari){
        $this->aylikgelir = $gelirtutari;
    }
    public function gidergoster($gidertutari){
        $this->aylikgider = $gidertutari;
    }
    public function gelirgiderhesapla(){
        $netkazanilan   =   $this->aylikgelir - $this->aylikgider;
        return $netkazanilan;
    }
    public function yillikkazanilan(){
        $yilliknetkazanilan   =   ($this->aylikgelir - $this->aylikgider)*12;
        return $yilliknetkazanilan;
    }

 }

class elemanlarharici {
    public $isimsoyisim;
    public $aylikgelir;
    public $aylikgider;

    public function isimgoster($adsoyad){
        $this->isimsoyisim = $adsoyad;
    }
    public function gelirgoster($gelirtutari){
        $this->aylikgelir = $gelirtutari;
    }
    public function gidergoster($gidertutari){
        $this->aylikgider = $gidertutari;
    }
    public function gelirgiderhesapla(){
        $netkazanilan   =   $this->aylikgelir - $this->aylikgider;
        return $netkazanilan;
    }
    public function yillikkazanilan(){
        $yilliknetkazanilan   =   ($this->aylikgelir - $this->aylikgider)*12;
        return $yilliknetkazanilan;
    }

 }





 $birincikisi = new elemanlardahili;
 $birincikisi->isimgoster("ataberk erday");
 $birincikisi->gelirgoster(10000);
 $birincikisi->gidergoster(4000);
 
 
 echo "ataberk erday isimli sahsin aylik net kazanci : ".$birincikisi->gelirgiderhesapla()."TL'dir.<br />";
 echo "ataberk erday isimli sahsin Senelik net kazanci : " . $birincikisi->yillikkazanilan(). "TL'dir<br /><br />";

 $ikincikisi = new elemanlardahili;
 $ikincikisi->isimgoster("esra erday");
 $ikincikisi->gelirgoster(5000);
 $ikincikisi->gidergoster(250);
 
 
 echo "esra erday isimli sahsin aylik net kazanci : ".$ikincikisi->gelirgiderhesapla()."TL'dir.<br />";
 echo "esra erday isimli sahsin Senelik net kazanci : " . $ikincikisi->yillikkazanilan(). "TL'dir<br /><br />";

 $ucuncukisi = new elemanlarharici;
 $ucuncukisi->isimgoster("sadik erday");
 $ucuncukisi->gelirgoster(23000);
 $ucuncukisi->gidergoster(3000);
 
 
 echo "sadik erday isimli sahsin aylik net kazanci : ".$ucuncukisi->gelirgiderhesapla()."TL'dir.<br />";
 echo "sadik erday isimli sahsin Senelik net kazanci : " . $ucuncukisi->yillikkazanilan(). "TL'dir<br />";

//FAZLA KARMASIK SIKINTI CIKARTABILIR!!!!!!
 ------------------------------------------*/
 /*
class islemler {
    public $isimsoyisim;
    public $aylikgelir;
    public $aylikgider;

    public function isimgoster($adsoyad){
        $this->isimsoyisim = $adsoyad;
    }
    public function gelirgoster($gelirtutari){
        $this->aylikgelir = $gelirtutari;
    }
    public function gidergoster($gidertutari){
        $this->aylikgider = $gidertutari;
    }
    public function gelirgiderhesapla(){
        $netkazanilan   =   $this->aylikgelir - $this->aylikgider;
        return $netkazanilan;
    }
    public function yillikkazanilan(){
        $yilliknetkazanilan   =   ($this->aylikgelir - $this->aylikgider)*12;
        return $yilliknetkazanilan;
    }
    public function altiaylikkazanilan(){
        $altiayliknetkazanilan   =   ($this->aylikgelir - $this->aylikgider)*6;
        return $altiayliknetkazanilan;
    }

 }

 class elemanlardahili extends islemler{ }
class elemanlarharici extends islemler{ }

 $birincikisi = new elemanlardahili;
 $birincikisi->isimgoster("ataberk erday");
 $birincikisi->gelirgoster(10000);
 $birincikisi->gidergoster(4000);
 
 
 echo "ataberk erday isimli sahsin aylik net kazanci : ".$birincikisi->gelirgiderhesapla()."TL'dir.<br />";
 echo "ataberk erday isimli sahsin 6 aylik net kazanci : " . $birincikisi->altiaylikkazanilan(). "TL'dir. Yillik net kazanci ". $birincikisi->yillikkazanilan() ."<br /><br />";

 $ikincikisi = new elemanlardahili;
 $ikincikisi->isimgoster("esra erday");
 $ikincikisi->gelirgoster(5000);
 $ikincikisi->gidergoster(250);
 
 
 echo "esra erday isimli sahsin aylik net kazanci : ".$ikincikisi->gelirgiderhesapla()."TL'dir.<br />";
 echo "esra erday isimli sahsin 6 aylik net kazanci : " . $ikincikisi->altiaylikkazanilan(). "TL'dir. Yillik net kazanci ". $ikincikisi->yillikkazanilan() ."<br /><br />";

 $ucuncukisi = new elemanlarharici;
 $ucuncukisi->isimgoster("sadik erday");
 $ucuncukisi->gelirgoster(26800);
 $ucuncukisi->gidergoster(3217);
 
 
 echo "sadik erday isimli sahsin aylik net kazanci : ".$ucuncukisi->gelirgiderhesapla()."TL'dir.<br />";
 echo "sadik erday isimli sahsin 6 aylik net kazanci : " . $ucuncukisi->altiaylikkazanilan(). "TL'dir. Yillik net kazanci ". $ucuncukisi->yillikkazanilan() ."<br /><br />";

//DAHA AZ KARMASIK BUNU KULLAN!!!!!
------------------------------------------*/
/*
class bir {
    public function deneme(){
        return "ataberk";
    }
 }

 class iki extends bir { 
    public function deneme(){
        return "esra";
    }

 }
 class uc extends iki{ 
    public function deneme(){
        return "sadik";
    }
    
}
class dort extends uc{ 
    public function deneme(){
        return "lacin";
    }
    
}
class bes extends dort{ 
    public function deneme(){
        return "roka";
    }
    
}

$sonuc = new bes;


echo $sonuc->deneme(); 
//SADECE ROKA YAZAR !!!!!!!!!!!!!!!!!!!!!!!!!!!!
------------------------------------------*/
/*
class bir {
    public function deneme(){
        return "ataberk";
    }
 }

 class iki extends bir { 
    public function deneme(){
        return "esra";
    }

 }
 class uc extends iki{ 
    public function deneme(){
        return "sadik";
    }
    
}
class dort extends uc{ 
    public function deneme(){
        return "lacin";
    }
    
}
class bes extends dort{ 
    public function deneme(){
        return "roka";
    }
    public function dizi(){
        return ["birinci" => bir::deneme(), "ikinci" => iki::deneme(), "ucuncu" => uc::deneme(), "dorduncu" => dort::deneme(), "besinci" => $this->deneme()];
    }
}

$sonuc = new bes;
echo "<pre>";
print_r($sonuc->dizi());
echo "</pre>";
//HER BIRINDEN BIR UST SINFI ALMAK ICIN BU SISTEM KULLANILIR YOKSA DEGER ALINAMAZ!!!!!!!
------------------------------------------*/
/*
class bir {
    public function deneme(){
        return "ataberk";
    }
 }

 class iki extends bir { 
    public function deneme(){
        return "esra";
    }

 }
 class uc extends iki{ 
    public function deneme(){
        return "sadik";
    }
    
}
class dort extends uc{ 
    public function deneme(){
        return "lacin";
    }
    
}
class bes extends dort{ 
    public function deneme(){
        return "roka";
    }
    public function dizi(){
        $dizimiz = array("birinci" => bir::deneme(), "ikinci" => iki::deneme(), "ucuncu" => uc::deneme(), "dorduncu" => dort::deneme(), "besinci" => $this->deneme());
        return $dizimiz;
    }
}

$sonuc = new bes;
echo "<pre>";
print_r($sonuc->dizi());
echo "</pre>";
------------------------------------------*/
/*
class bir {
    public function deneme(){
        return "ataberk";
    }
 }

 class iki extends bir { 
    public function deneme(){
        return "esra";
    }

 }
 class uc extends iki{ 
    public function deneme(){
        return "sadik";
    }
    public function degerdondur(){
        $deger =iki::deneme(); ; //iki:: yerine parent::deneme()  seklinde de kullanilabiilir.
        return $deger;
    }
}

$sonuc = new uc;
echo $sonuc->degerdondur();
------------------------------------------*/
/*
class bir {
    public function deneme(){
        return "ataberk";
    }
 }

 final class iki extends bir {  //final ifadesi konuldugu zaman anlami final ifadesinde hicbir sinif tureyemez anlamina gelir!!!! Ancak sadece bu sinif icin gecerlidir altindaki veya ustundekini etkilemez!!!!
    public function deneme(){
        return "esra";
    }

 }
 class uc extends iki{ 
    public function deneme(){
        return "sadik";
    }
    public function degerdondur(){
        $deger =iki::deneme(); ; //iki:: yerine parent::deneme()  seklinde de kullanilabiilir.
        return $deger;
    }
}

$sonuc = new uc;
echo $sonuc->degerdondur();
------------------------------------------*/

class bir {
    final public function deneme(){ // metodun finali oldugunu belirtir hicbir sekilde metod ismi tureyen metodlarda kullanilamaz hata kodu dondurur.
        return "ataberk";
    }
 }

 class iki extends bir { 
    public function deneme(){
        return "esra";
    }
 }
 
$sonuc = new iki;
echo $sonuc->degerdondur();




















?>
</body>
</html>	