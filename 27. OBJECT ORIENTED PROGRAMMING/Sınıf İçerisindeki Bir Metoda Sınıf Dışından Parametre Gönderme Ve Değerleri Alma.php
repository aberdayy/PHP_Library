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
    public function test($isim,$soyisim){
       $metin = "merhaba" . " " . $isim . " " . $soyisim . " nasilsin ?";
       echo $metin;
    }


}
$islem = new deneme;
$islem->test("ataberk", "erday");

----------------------------*/
/*
class deneme {
    public function test($isim="sadik",$soyisim="erday"){
       $metin = "merhaba" . " " . $isim . " " . $soyisim . " nasilsin ?";
       return $metin;
    }


}
$islem = new deneme;
$sonuc = $islem->test();
echo $sonuc;
----------------------------*/
class deneme{
    private function testbir($isim,$soyisim){
        $metin = "merhaba" . $isim . " " . $soyisim . " nasilsin ?";
        echo $metin;
    }
    protected function testiki($isim, $soyisim){
        $metin = "merhaba" . $isim . " " . $soyisim . "nasilsin? iyi misin?";
        echo $metin; 
    }
}
$islem = new deneme;

$islem->testbir("ataberk", "erday");

$islem->testiki("ataberk", "erday");

?>
</body>
</html>	