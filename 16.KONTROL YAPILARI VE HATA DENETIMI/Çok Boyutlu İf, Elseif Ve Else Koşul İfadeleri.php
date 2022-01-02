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
$saat = 18;
if( ($saat>= 0) and ($saat<=6)){

if($saat==0){
echo "iyi geceler saat suanda {$saat} ";
}elseif ($saat==1) {
    echo "iyi geceler saat suanda {$saat} ";
}elseif ($saat==2) {
    echo "iyi geceler saat suanda {$saat} ";
}elseif ($saat==3) {
    echo "iyi geceler saat suanda {$saat} ";
}elseif ($saat==4) {
    echo "iyi geceler saat suanda {$saat} ";
}elseif ($saat==5) {
    echo "iyi geceler saat suanda {$saat} ";
}elseif ($saat==6) {
    echo "iyi geceler saat suanda {$saat} ";
}else{
    echo "bilinmeyen bir hata olustu.";
}
echo "iyi geceler...";
}elseif (($saat>6) and ($saat<=9)) {

    if($saat==7){
        echo "iyi geceler saat suanda {$saat} ";
        }elseif ($saat==8) {
            echo "iyi geceler saat suanda {$saat} ";
        }elseif ($saat==9) {
            echo "iyi geceler saat suanda {$saat} ";
        }else{
            echo "bilinmeyen bir hata olustu.";
        }
    echo "gunaydin...";
}elseif (($saat>9) and ($saat<=17)) {

    if($saat==10){
        echo "iyi gunler saat suanda {$saat} ";
        }elseif ($saat==11) {
            echo "iyi gunler saat suanda {$saat} ";
        }elseif ($saat==12) {
            echo "iyi gunler saat suanda {$saat} ";
        }elseif ($saat==13) {
            echo "iyi gunler saat suanda {$saat} ";
        }elseif ($saat==14) {
            echo "iyi gunler saat suanda {$saat} ";
        }elseif ($saat==15) {
            echo "iyi gunler saat suanda {$saat} ";
        }elseif ($saat==16) {
            echo "iyi gunler saat suanda {$saat} ";
        }elseif ($saat==17) {
            echo "iyi gunler saat suanda {$saat} ";
        }else{
            echo "bilinmeyen bir hata olustu.";
        }
    echo "iyi gunler...";
}elseif (($saat>17) and ($saat<=23)) {

    if($saat==18){
        echo "iyi aksamlar saat suanda {$saat} ";
        }elseif ($saat==19) {
            echo "iyi aksamlar saat suanda {$saat} ";
        }elseif ($saat==20) {
            echo "iyi aksamlar saat suanda {$saat} ";
        }elseif ($saat==21) {
            echo "iyi aksamlar saat suanda {$saat} ";
        }elseif ($saat==22) {
            echo "iyi aksamlar saat suanda {$saat} ";
        }elseif ($saat==23) {
            echo "iyi aksamlar saat suanda {$saat} ";
        }else{
            echo "bilinmeyen bir hata olustu.";
        }
    echo "iyi aksamlar...";
}else{
    echo "saat gecersiz bir deger iceriyor.";
}
?>
</body>
</html>	