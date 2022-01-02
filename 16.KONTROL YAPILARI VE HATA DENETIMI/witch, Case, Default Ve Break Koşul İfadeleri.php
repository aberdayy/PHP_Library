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
switch  =   kosul baslat
case    =   kosul kontrol et
break   =   kosul kontrolunu sonlandir
default =   kosul olumsuzluklari sonucu
yapisi  ;   
switch(kosul){
    case kontrol ifadesi:
        kod bloklari
    break;
    default:
    kod blokalari
}

*/
/*
$deger = 10;

switch ($deger) {
    case $deger < 20:
        echo "1.case gecerli oldu ve kod blogu calisti.";
        break;
}
-----------------------------------------------
*/
/*
$deger = 10;

switch ($deger) {
    case $deger < 9:
        echo "1.case gecerli oldu ve kod blogu calisti.";
        break;
        default;
        echo "kosul gecersiz oldu ve kod blogu calisti.";
}
----------------------------------------------------
*/
/*
$deger = 10;

switch ($deger) {
    case $deger < 7:
        echo "1.case gecerli oldu ve kod blogu calisti.";
        break;
        case $deger < 17:
            echo "2.case gecerli oldu ve kod blogu calisti.";
            break;
            case $deger < 9:
                echo "3.case gecerli oldu ve kod blogu calisti.";
                break;
         default;
        echo "kosul gecersiz oldu ve kod blogu calisti.";
}
------------------------------------------------
*/

$aylar = "elma";

switch ($aylar) {
    case $aylar=="ocak":
        echo $aylar . " ayi 1.aydir";
        break;
        case $aylar=="subat":
            echo $aylar . " ayi 2.aydir";
            break;
            case $aylar=="mart":
                echo $aylar . " ayi 3.aydir";
                break;
                case $aylar=="nisan":
                    echo $aylar . " ayi 4.aydir";
                    break;
                    case $aylar=="mayis":
                        echo $aylar . " ayi 5.aydir";
                        break;
                        case $aylar=="haziran":
                            echo $aylar . " ayi 6.aydir";
                            break;
                            case $aylar=="temmuz":
                                echo $aylar . " ayi 7.aydir";
                                break;
                                case $aylar=="agustos":
                                    echo $aylar . " ayi 8.aydir";
                                    break;
                                    case $aylar=="eylul":
                                        echo $aylar . " ayi 9.aydir";
                                        break;
                                        case $aylar=="ekim":
                                            echo $aylar . " ayi 10.aydir";
                                            break;
                                            case $aylar=="kasim":
                                                echo $aylar . " ayi 11.aydir";
                                                break;
                                                case $aylar=="aralik":
                                                    echo $aylar . " ayi 12.aydir";
                                                    break;
                                                                                                                                                                                                                                                                            
    default:
        echo $aylar . " bir ay adi degildir amina kodugum!!!!";
        break;
}
-----------------------------------------------------------------
*/
   $saat = 8;
   switch ($saat) {
    case ($saat>= 0) and ($saat <=6):
        echo "iyi geceler";
        break;
        case ($saat > 6) and ($saat <=10):
            echo "gunaydin";
            break;
            case ($saat >10) and ($saat <=17):
                echo "iyi gunler";
                break;
                case ($saat > 17) and ($saat <= 23):
                    echo "iyi aksamlar";
                    break;
       default:
           echo "girilen deger ( {$saat} ) bir saaat dilimi degildir! ";
           break;
   }







?>
</body>
</html>	