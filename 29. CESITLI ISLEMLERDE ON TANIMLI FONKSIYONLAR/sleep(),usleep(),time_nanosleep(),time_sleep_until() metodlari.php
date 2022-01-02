<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta http-equiv="content-language" content="tr">
<meta charset="utf-8">
<title>ataberk erday php calisma gunlugu</title>
</head>
<body>
<?php
/*
sleep()                 :   kullanildigi satirdan sonraki tum kodlamanin belirtilecek olan saniye kadar bekleterek, sure tamamlandiginda calistirmak icin kullanilir.
usleep()                :   kullanildigi satirdan sonraki tum kodlamanin belirtilecek olan mikrosaniye kadar bekleterek, sure tamamlandiginda calistirmak icin kullanilir.
time_nanosleep()        :   kullanildigi satirdan sonraki tum kodlamanin belirtilecek olan saniye ve nanosaniye kadar bekleterek, sure tamamlandiginda calistirmak icin kullanilir.
time_sleep_until()      :   kullanildigi satirdan sonraki tum kodlamanin calismasini belirtilecek olan unix zaman damgasi gecerli zamanina kadar bekleterek, sure tamamlandiginda calistirmak icin kullanilir.
*/
/*
echo "extra egitim <br />";

sleep(4);

echo "extra egitim";
------------------------------------------------------------------*/
/*
echo date("h:i:s") . "<br />";

sleep(5);

echo date("h:i:s") . "<br />";
------------------------------------------------------------------*/
/*
echo date("h:i:s") . "<br />";

usleep(2000000);            // 2saniyeye esit

echo date("h:i:s") . "<br />";
------------------------------------------------------------------*/
/*
echo date("h:i:s") . "<br />";

time_nanosleep(4, 500000000);          //ilk parametre saniye 2. parametre nanosaniye

echo date("h:i:s") . "<br />";
------------------------------------------------------------------*/
$zamandamgasi = time();

echo $zamandamgasi. "<br />";

echo date("h:i:s") . "<br />";

time_sleep_until($zamandamgasi + 5);

echo date("h:i:s") . "<br />";

echo "ataberk erday";

?>
</body>
</html>	