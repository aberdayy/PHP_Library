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
function parabirimi($birim,$tutar){
if ($birim=="turk lirasi") {
    $kur    = 1;  
}elseif ($birim="amerikan dolari") {
    $kur    =   7;
}elseif ($birim=="euro") {
    $kur    =   9;
}else{
    $kur    =   0;
}
return hesapla($kur, $tutar);

}

function hesapla($kurbilgisi,$tutarbilgisi){
    $sonuc  =   $kurbilgisi * $tutarbilgisi;
    echo "girilen tutarin TL karsiligi :" . $sonuc;
}

parabirimi("amerikan dolari", 1000);
--------------------------------------
*/
/*
function parabirimi($birim,$tutar){
    if ($birim=="turk lirasi") {
        $kur    = 1;  
    }elseif ($birim="amerikan dolari") {
        $kur    =   7;
    }elseif ($birim=="euro") {
        $kur    =   9;
    }else{
        $kur    =   0;
    }
    return hesapla($birimbilgisi,$kur, $tutar);
    
    }
    
    function hesapla($birimbilgisi,$kurbilgisi,$tutarbilgisi){
        $sonuc  =   $kurbilgisi * $tutarbilgisi;
        echo $tutarbilgisi . " tutarli " . $birimbilgisi . " turk lirasi degeri :" . $sonuc . " TL <br /> kur:" . $kurbilgisi;
    }
    
    parabirimi("amerikan dolari", 1000);
  -------------------------------------------------------
    */  


    function parabirimi($birim,$tutar){
        if ($birim=="turk lirasi") {
            $kur    = 1;  
        }elseif ($birim=="amerikan dolari") {
            $kur    =   7.4800;
        }elseif ($birim=="euro") {
            $kur    =   8.8300;
        }else{
            $kur    =   0;
        }
        return hesapla($birim,$kur, $tutar);
        
        }
        
        function hesapla($birimbilgisi,$kurbilgisi,$tutarbilgisi){
            $sonuc  =   $kurbilgisi * $tutarbilgisi;
            echo $tutarbilgisi . " birim " . $birimbilgisi ."'nun". " turk lirasi degeri :" . $sonuc . " TL <br /> kur:" . $kurbilgisi;
        }
        
        parabirimi("euro", 79);
        
    
















?>
</body>
</html>	