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
class bicimlendir {

    public $yazi;
    public $stil;

    public function metin($metindegeri){
        $this->yazi = $metindegeri;
        return $this;
    } 

    public function renk($renkdegeri){
        $this->stil = "color:".$renkdegeri . ";";
        return $this;

    }
    public function boyut($boyutdegeri){
        $this->stil .= "font-size:".$boyutdegeri.";";
        return $this;

    }
    public function olustur(){
        return  "<div style='".$this->stil . "'>" . $this->yazi."</div>";

    }
}
$sonuc = new bicimlendir;

echo $sonuc->metin("ataberk erday-erart")->renk("red")->boyut("20px")->olustur()."<br />";
echo $sonuc->metin("ataberk erday-erart")->renk("blue")->boyut("30px")->olustur()."<br />";
echo $sonuc->metin("ataberk erday-erart")->renk("green")->boyut("50px")->olustur()."<br />";
-----------------------------------------------*/
class hesap {

    private $sonuc = 0;
    
    function __construct($sayidegeri){
        $this->sonuc = $sayidegeri;

    }
    public function toplama($sayidegeri){
        $this->sonuc += $sayidegeri;
        return $this;
    }
    public function cikartma($sayidegeri){
        $this->sonuc -= $sayidegeri;
        return $this;
    } 
    public function carpma($sayidegeri){
        $this->sonuc *= $sayidegeri;
        return $this;
    }
    public function bolme($sayidegeri){
        $this->sonuc /= $sayidegeri;
        return $this;
    }
   public function goster(){
        return $this->sonuc;

   }

}
$islem = new hesap(100);
echo $islem->toplama(10)->cikartma(5)->carpma(2)->bolme(4)->goster()."<br />"; // bu sekilde devam edilirse kaldi yerden devam edecegi icin metodun yeniden cagirilmasi gereklidir.

$islem = new hesap(50);
echo $islem->toplama(10)->goster()."<br />";

$islem = new hesap(23);
echo $islem->toplama(10)->toplama(30)->goster()."<br />";





?>

</body>
</html>	