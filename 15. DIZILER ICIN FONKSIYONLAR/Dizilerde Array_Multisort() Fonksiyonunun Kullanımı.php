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
array_multisort()   :   bir veya birden fazla dfizinin elemanlarini gelismis olarak cok yonlu siralamak icin kullanilir.
SORT_ASC            :   a-z / kucukten buyuge 
SORT_DESC           :   z-a / buyukten kucuge
SORT_REGULAR        :   standart siralama (varsayilan)
SORT_NUMERIC        :   rakamsal siralama
SORT_STRING         :   alfanumerik siralama(string)
SORT_NATURAL        :   alfanumerik siralama(string)(dogal)
*/

/*
$degerler       =   ["ataberk","volkan","hakan","onur","serkan"];

echo "<pre>";
print_r($degerler);
echo "</pre><br />";

array_multisort($degerler);

echo "<pre>";
print_r($degerler);
echo "</pre><br />";
-----------------------------------------------
*/
/*
$degerler       =   [88,12,29,456,33,5,2,75,4];

echo "<pre>";
print_r($degerler);
echo "</pre><br />";

array_multisort($degerler);

echo "<pre>";
print_r($degerler);
echo "</pre><br />";
------------------------------------------------------
*/
/*
$degerler       =   ["a1"=>"ataberk","a2"=>"volkan","a3"=>"hakan","a4"=>"onur","a5"=>"serkan"];

echo "<pre>";
print_r($degerler);
echo "</pre><br />";

array_multisort($degerler);

echo "<pre>";
print_r($degerler);
echo "</pre><br />";
---------------------------------------------------------
*/
/*
$degerler       =   ["a1"=>3434534,"a2"=>2,"a3"=>54,"a4"=>47,"a5"=>78];

echo "<pre>";
print_r($degerler);
echo "</pre><br />";

array_multisort($degerler);

echo "<pre>";
print_r($degerler);
echo "</pre><br />";
-------------------------------------------------
*/
/*
$degerler       =   ["ataberk","volkan","hakan","onur","serkan"];

echo "<pre>";
print_r($degerler);
echo "</pre><br />";

array_multisort($degerler, SORT_ASC);

echo "<pre>";
print_r($degerler);
echo "</pre><br />";
------------------------------------------
*/
/*
$degerler       =   ["ataberk","volkan","hakan","onur","serkan"];

echo "<pre>";
print_r($degerler);
echo "</pre><br />";

array_multisort($degerler, SORT_DESC);

echo "<pre>";
print_r($degerler);
echo "</pre><br />";
----------------------------------------------------
*/
/*
$degerler       =   ["ataberk","volkan",12,29,456,"hakan","onur",8,"serkan",55.10,"GHOKHAN"];

echo "<pre>";
print_r($degerler);
echo "</pre><br />";

array_multisort($degerler);

echo "<pre>";
print_r($degerler);
echo "</pre><br />";
--------------------------------------------------
*/
/*
$degerler       =   ["ataberk","volkan",12,29,456,"hakan","onur",8,"serkan",55.10,"GHOKHAN"];

echo "<pre>";
print_r($degerler);
echo "</pre><br />";

array_multisort($degerler, SORT_DESC);

echo "<pre>";
print_r($degerler);
echo "</pre><br />";
----------------------------------------------------
*/
/*
$degerler       =   ["ataberk","volkan",12,29,456,"hakan","onur",8,"serkan",55.10,"GHOKHAN"];

echo "<pre>";
print_r($degerler);
echo "</pre><br />";

array_multisort($degerler, SORT_NUMERIC);

echo "<pre>";
print_r($degerler);
echo "</pre><br />";
---------------------------------------------
*/
/*
$degerler       =   ["ataberk","volkan",12,29,456,"hakan","onur",8,"serkan",55.10,"GHOKHAN"];

echo "<pre>";
print_r($degerler);
echo "</pre><br />";

array_multisort($degerler, SORT_STRING);

echo "<pre>";
print_r($degerler);
echo "</pre><br />";
-------------------------------------------------------
*/
/*
$degerler       =   ["ataberk","volkan",12,29,456,"hakan","onur",8,"serkan",55.10,"GHOKHAN"];

echo "<pre>";
print_r($degerler);
echo "</pre><br />";

array_multisort($degerler, SORT_NATURAL);

echo "<pre>";
print_r($degerler);
echo "</pre><br />";
--------------------------------------------------------
*/
/*
$degerler       =   ["ataberk","volkan","hakan","onur","serkan"];
$degerler1       =   ["ataberk","volkan","hakan","onur","serkan"];

echo "<pre>";
print_r($degerler);
echo "</pre><br />";

echo "<pre>";
print_r($degerler1);
echo "</pre><br />";

array_multisort($degerler,$degerler1);

echo "<pre>";
print_r($degerler);
echo "</pre><br />";


echo "<pre>";
print_r($degerler1);
echo "</pre><br />";
-----------------------------------------------------
*/

$degerler       =   ["ataberk","volkan","hakan","onur","serkan"];
$degerler1       =   ["ataberk","volkan","hakan","onur","serkan"];

echo "<pre>";
print_r($degerler);
echo "</pre><br />";

echo "<pre>";
print_r($degerler1);
echo "</pre><br />";

array_multisort($degerler,SORT_DESC,$degerler1);

echo "<pre>";
print_r($degerler);
echo "</pre><br />";


echo "<pre>";
print_r($degerler1);
echo "</pre><br />";

















?>
</body>
</html>	