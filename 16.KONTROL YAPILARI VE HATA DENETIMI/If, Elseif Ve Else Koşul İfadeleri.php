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
if      =  eger. 
elseif  = degilse eger.
else    = degilse.

if ve else saece birer defa kullanilabilir. eger fazla kullanilacaksa aralarina elseif ifadesi gelir

yapisi:
if(kosul veya kosullar){ kod bloklari }   

elseif(kosul veya kosullar){ kod bloklari }   

else {kod bloklari}
*/
/*
if(5 < 10){
        echo "if kosulu gecerli oldu ve kod blogu calisti.";
}
-----------------------------------------------------
*/
/*
if(5 > 10){
    echo "if kosulu gecerli oldu ve kod blogu calisti.";
}
//gecersiz kosul
------------------------------------------------------
*/
/*
if(5 > 10){
    echo "if kosulu gecerli oldu ve kod blogu calisti.";
}else{echo "if kosulu gecersiz oldu ve else kod blogu calisti.";
-------------------------------------------------------
    */
/*
    if(5 > 10){
        echo "if kosulu gecerli oldu ve kod blogu calisti.";
    }elseif(20 > 10){
        echo "elseif kosulu gecerli oldu ve kod blogu calisti.";
    }else{
        echo "if kosulu gecersiz oldu ve else kod blogu calisti.";
    }
 -----------------------------------------------------------
 */
/*
if(5 > 10){
    echo "if kosulu gecerli oldu ve kod blogu calisti.";
}elseif(7 > 10){
    echo "1.elseif kosulu gecerli oldu ve kod blogu calisti.";
}elseif(9 > 10){
    echo "2.elseif kosulu gecerli oldu ve kod blogu calisti.";
}elseif(15 > 10){
    echo "3.elseif kosulu gecerli oldu ve kod blogu calisti.";
}else{
    echo "if kosulu gecersiz oldu ve else kod blogu calisti.";
}
*/
/*
$deger1 =   "ataberk";
$deger2 =   "hakan";
$deger3 =   "onur";
$deger4 =   "umit";

if($deger1 == "ataber2k"){
    echo "if kosulu gecerli oldu ve kod blogu calisti.";
}elseif($deger2 == "umit"){
    echo "1. elseif kosulu gecerli oldu ve kod blogu calisti.";
}elseif($deger3 == "umit"){
    echo "2. elseif kosulu gecerli oldu ve kod blogu calisti.";
}elseif($deger4 == "umit"){
    echo "3. elseif kosulu gecerli oldu ve kod blogu calisti.";
}else{
    echo "if kosulu gecersiz oldu ve else kod blogu calisti.";
}
-------------------------------------------------
*/
/*
$deger =   "elma";

if($deger == "ocak"){
    echo "ocay ayi 1.aydir.";
}elseif($deger == "subat"){
    echo "subat ayi 2.aydir.";
}elseif($deger == "mart"){
    echo "mart ayi 3.aydir.";
}elseif($deger == "nisan"){
    echo "nisan ayi 4.aydir.";
}elseif($deger == "mayis"){
    echo "mayis ayi 5.aydir.";
}elseif($deger == "haziran"){
    echo "haziran ayi 6.aydir.";
}elseif($deger == "temmuz"){
    echo "temmuz ayi 7.aydir.";
}elseif($deger == "agustos"){
    echo "agustos ayi 8.aydir.";
}elseif($deger == "eylul"){
    echo "eylul ayi 9.aydir.";
}elseif($deger == "ekim"){
    echo "ekim ayi 10.aydir.";
}elseif($deger == "kasim"){
    echo "kasim ayi 11.aydir.";
}elseif($deger == "aralik"){
    echo "aralik ayi 12.aydir.";
}else{
    echo "belirtilen deger ({$deger}) bir ay adi degil.";
}
--------------------------------------------------------
*/

/*
$saat =   "17";

if( ($saat>=0) and ($saat <=6) ){
    echo "iyi geceler.";
    }
    elseif( ($saat>=6) and ($saat <=9) ){
    echo "gunaydin.";
    }
    elseif( ($saat>=10) and ($saat <=17) ){
    echo "iyi gunler.";
    }
    elseif( ($saat>=17) and ($saat <=23) ){
    echo "iyi aksamlar.";
    }
    else{
        echo "belirtilen deger ({$saat}) bir saat dilimi degildir.";
    }

---------------------------------------------------
*/


$saat =   "9 ";

if( ($saat==0) or ($saat ==1) or ($saat==2) or ($saat ==3)or($saat==4) or ($saat ==5)or ($saat ==6) ){
    echo "iyi geceler.";
    }
    elseif( ($saat==7) or ($saat ==8) or ($saat==9) ){
    echo "gunaydin.";
    }
    elseif( ($saat==10) or ($saat ==11) or ($saat==12) or ($saat ==13)or($saat==14) or ($saat ==15)or ($saat ==16)or ($saat ==17) ){
    echo "iyi gunler.";
    }
    elseif( ($saat==18) or ($saat ==19) or ($saat==20) or ($saat ==21)or($saat==22) or ($saat ==23)){
    echo "iyi aksamlar.";
    }
    else{
        echo "belirtilen deger ({$saat}) bir saat dilimi degildir.";
    }















?>
</body>
</html>	