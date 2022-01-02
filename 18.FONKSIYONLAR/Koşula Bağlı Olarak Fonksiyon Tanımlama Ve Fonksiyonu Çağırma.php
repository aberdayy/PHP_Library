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


$deger  =   "ataberk";
if($deger=="ataberk"){
function yaz(){
    echo "merhaba ataberkim askim bitanem";
    }
}else{
function yaz(){
    echo " sen kimsin amua godum?";
    }
}
yaz();
---------------------------------------
*/
/*
$deger  =   "ataberk";

switch ($deger) {
    case $deger =="ataberk":
        function yaz(){
            echo "merhaba ataberkim askim bitanem";
        }
        break;
    default:
    function yaz(){
        echo " sen kimsin amua godum?";
        }
        break;
}
--------------------------------------------
*/

$deger  =   "sadik";
if($deger=="ataberk"){
function yaz(){
    echo "merhaba ataberkim askim bitanem";
    }
}elseif ($deger=="hakan") {
    function yaz(){
        echo "merhaba hakan sen kimsin";
        }
    }
    elseif ($deger=="onur") {
        function yaz(){
            echo "merhaba onur sen kimsin";
            }
     }elseif ($deger=="kemal") {
        function yaz(){
                echo "mmerhaba kemal sen kimsin";
                }
            }elseif ($deger=="sadik") {
                function yaz(){
                    echo "merhaba sadik sen kimsin";
                    }
            }elseif ($deger=="esra") {
                    function yaz(){
                        echo "merhaba esra sen kimsin";
                        }
            }else{
function yaz(){
    echo " sen kimsin amua godum?";
    }
}
yaz();













?>
</body>
</html>	