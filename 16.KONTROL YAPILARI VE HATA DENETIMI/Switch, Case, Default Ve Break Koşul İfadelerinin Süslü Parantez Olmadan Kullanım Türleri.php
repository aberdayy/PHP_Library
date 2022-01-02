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
yapisi ;
switch(): 
    case kosul;
    kod bloklari
break;
default;
kod bloklari
endswitch;

*/
/*
$deger  =   8;
switch ($deger) :
    case $deger==8:
        echo "kosul gecerli oldu case blogu calisti";
        break;
    endswitch;
----------------------------------------------
*/
/*
$deger  =   8;
switch ($deger) :
    case $deger==3:
        echo "kosul gecerli oldu case blogu calisti";
        break;
        default;
        echo "kosul gecersiz oldu case blogu calisti";
    endswitch;
--------------------------------------
*/
/*
$deger  =   8;
switch ($deger) :
    case $deger >2:
        echo "kosul gecerli oldu 1.case blogu calisti";
        break;
        case $deger > 8:
            echo "kosul gecerli oldu 2.case blogu calisti";
            break;
        default;
        echo "kosul gecersiz oldu case blogu calisti";
    endswitch;
----------------------------------------------
*/

$mevsimler  =   "nisan";

switch ($mevsimler):
    case ($mevsimler == "mart") or ($mevsimler=="nisan") or ($mevsimler=="mayis"):
        echo $mevsimler." ayi bir ILKBAHAR ayidir.";
        break;
        case ($mevsimler == "haziran") or ($mevsimler=="temmuz") or ($mevsimler=="agustos"):
            echo $mevsimler." ayi bir YAZ ayidir.";
            break;
            case ($mevsimler == "eylul") or ($mevsimler=="ekim") or ($mevsimler=="kasim"):
                echo $mevsimler." ayi bir SONBAHAR ayidir.";
                break;
                case ($mevsimler == "aralik") or ($mevsimler=="ocak") or ($mevsimler=="subat"):
                    echo $mevsimler." ayi bir KIS ayidir.";
                    break;
                            
    default:
       echo "uzgunum bilinmeyen bir hata olustu...";       
    endswitch;














?>
</body>
</html>	