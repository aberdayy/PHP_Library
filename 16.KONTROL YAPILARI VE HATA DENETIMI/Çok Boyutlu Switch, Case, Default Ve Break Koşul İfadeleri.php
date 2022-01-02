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
$saat = 19;

switch ($saat) {
    case ($saat>=0) and ($saat<=6):
        switch ($saat) {
            case $saat==0:
                echo "iyi geceler suanda saat:{$saat}";
            break;
            case $saat==1:
                echo "iyi geceler suanda saat:{$saat}";
            break;
            case $saat==2:
                echo "iyi geceler suanda saat:{$saat}";
            break;
            case $saat==3:
                echo "iyi geceler suanda saat:{$saat}";
            break;
            case $saat==4:
                echo "iyi geceler suanda saat:{$saat}";
            break;
            case $saat==5:
                echo "iyi geceler suanda saat:{$saat}";
            break;
            case $saat==6:
                echo "iyi geceler suanda saat:{$saat}";
            break;
            default:
            echo "bilinmeyen bir hata olustu... ";
            break;
    }
break;
    case ($saat>6) and ($saat<=10):
        switch ($saat) {
            case $saat==6:
                echo "gunaydin suanda saat:{$saat}";
            break;
            case $saat==7:
                echo "gunaydin suanda saat:{$saat}";
            break;
            case $saat==8:
                echo "gunaydin suanda saat:{$saat}";
            break;
            case $saat==9:
                echo "gunaydin suanda saat:{$saat}";
            break;
            case $saat==10:
                echo "gunaydin suanda saat:{$saat}";
            break;
            default:
            echo "bilinmeyen bir hata olustu... ";
            break;
    }
    break;

    case ($saat>10) and ($saat<=17):
        switch ($saat) {
            case $saat==10:
                echo "iyi gunler suanda saat:{$saat}";
            break;
            case $saat==11:
                echo "iyi gunler suanda saat:{$saat}";
            break;
            case $saat==12:
                echo "iyi gunler suanda saat:{$saat}";
            break;
            case $saat==13:
                echo "iyi gunler suanda saat:{$saat}";
            break;
            case $saat==14:
                echo "iyi gunler suanda saat:{$saat}";
            break;  
              case $saat==15:
             echo "iyi gunler suanda saat:{$saat}";
            break;
            case $saat==16:
            echo "iyi gunler suanda saat:{$saat}";
            break;
            case $saat==17:
            echo "iyi gunler suanda saat:{$saat}";
            break;
               
            default:
            echo "bilinmeyen bir hata olustu... ";
            break;
    
    }
    break;

    break;

    case ($saat>17) and ($saat<=23):
        switch ($saat) {
            case $saat==17:
                echo "iyi aksamlar suanda saat:{$saat}";
            break;
            case $saat==18:
                echo "iyi aksamlar suanda saat:{$saat}";
            break;
            case $saat==19:
                echo "iyi aksamlar suanda saat:{$saat}";
            break;
            case $saat==20:
                echo "iyi aksamlar suanda saat:{$saat}";
            break;
            case $saat==21:
                echo "iyi aksamlar suanda saat:{$saat}";
            break;  
              case $saat==22:
             echo "iyi aksamlar suanda saat:{$saat}";
            break;
            case $saat==23:
            echo "iyi aksamlar suanda saat:{$saat}";
            break;
            default:
            echo "bilinmeyen bir hata olustu... ";
            break;
    
    }
}



?>
</body>
</html>	