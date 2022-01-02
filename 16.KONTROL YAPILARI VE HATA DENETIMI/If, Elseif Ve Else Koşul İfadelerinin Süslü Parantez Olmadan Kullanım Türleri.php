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
yapisi  ;
if(kosul veya kosullar):
    kod bloklari 

    elseif(kosul veya kosullar):
    kod bloklari
else
    kod blokalari
    endif;
*/
/*
if(5<10):
    echo "if kosulu gecerli oldu ve kod blogu calisti";
endif;
-------------------------------------------
*/
/*
if(5>10):
    echo "if kosulu gecerli oldu ve kod blogu calisti";
else:
    echo "if kosulu gecersiz oldu ve else kod blogu calisti";
endif;
--------------------------------------------------------
*/
/*
if(5>10):
    echo "if kosulu gecerli oldu ve kod blogu calisti";
elseif(20>10):
    echo "elseif kosulu gecerli oldu ve kod blogu calisti";

else:
    echo "if kosulu gecersiz oldu ve else kod blogu calisti";
endif;
------------------------------------------------------
*/
$ayadi= "haziran";

if($ayadi ==("mart")or($ayadi=="nisan")or($ayadi=="mayis")):
    echo $ayadi . " ayi bir ilk bahar ayidir.";
    elseif($ayadi ==("haziran")or($ayadi=="temmuz")or($ayadi=="agustos")):
        echo $ayadi . " ayi bir yaz ayidir.";
        elseif($ayadi ==("eylul")or($ayadi=="ekim")or($ayadi=="kasim")):
            echo $ayadi . " ayi bir sonbahar ayidir.";
            elseif($ayadi ==("aralik")or($ayadi=="ocak")or($ayadi=="subat")):
                echo $ayadi . " ayi bir kis ayidir.";
            else:
                echo "girilen deger ( {$ayadi} ) bir ay adi degidir! ";
            endif;















?>
</body>
</html>	