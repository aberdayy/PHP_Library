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

func_num_args()     :fonksiyona gonderilen parametre sayisini bulmak icn kullanilir.
func_get_args()     :fonksiyona gonderilen parametre degerlerini alarak yeni bir dizi olusturmak icin kullanilir.
func_get_arg()      :fonksiyona gonderilen parametre degerlerini bir dizi olarak kabul ederek belirtilecek olan anahtara/elemana ait dondurmek icin kullanilir.
*/
/*
function bilgiler(){
    
 $gelenparametresayisi  =   func_num_args();

 echo "fonksiyona gelen parametre sayisi :" . $gelenparametresayisi;

}

bilgiler("volkan","alakent","istanbul","pc yailimcisi",48,"erkek","info@extraegitim.com");
------------------------------------------------
*/
/*
function bilgiler(){
    
    $gelenparametresayisi  =   func_num_args();
   
    return "fonksiyona gelen parametre sayisi :" . $gelenparametresayisi;
   
   }
   
  $sonuc    =  bilgiler("volkan","alakent","istanbul","pc yailimcisi",48,"erkek","info@extraegitim.com");
   
echo $sonuc;
-------------------------------------------------
*/
/*
function bilgiler(){
    
    $gelenparametresayisi  =   func_num_args();
   
    echo "fonksiyona gelen parametre sayisi :" . $gelenparametresayisi . "<br />";
    
    $gelenparametredegerleri = func_get_args();
    
    echo "<pre>";
    print_r($gelenparametredegerleri);   
    echo "</pre>";
}
   
   bilgiler("volkan","alakent","istanbul","pc yailimcisi",48,"erkek","info@extraegitim.com");
   
------------------------------------------------------
*/


/*

function bilgiler(){
    
    $gelenparametresayisi  =   func_num_args();
   
    echo "fonksiyona gelen parametre sayisi :" . $gelenparametresayisi . "<br />";
    
    $gelenparametredegerleri = func_get_args();
    
    echo "<pre>";
    print_r($gelenparametredegerleri);   
    echo "</pre>","<br />","<br />";

    foreach ($gelenparametredegerleri as $sonucdegerleri ) {
        echo $sonucdegerleri . "<br />";
    }

}
   
   bilgiler("volkan","alakent","istanbul","pc yailimcisi",48,"erkek","info@extraegitim.com");
  ----------------------------------------------------
  */ 

 

  function bilgiler(){
    
    $gelenparametresayisi  =   func_num_args();
   
    echo "fonksiyona gelen parametre sayisi :" . $gelenparametresayisi . "<br />";
    
    $gelenparametredegerleri = func_get_args();
    
    echo "<pre>";
    print_r($gelenparametredegerleri);   
    echo "</pre>";

    $meslekdegeri    =    func_get_arg(6);
    echo $meslekdegeri;



}
   
   bilgiler("volkan","alakent","istanbul","pc yailimcisi",48,"erkek","info@extraegitim.com");
   
























?>
</body>
</html>	