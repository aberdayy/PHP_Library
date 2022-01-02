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
$yazdir  =  function(){
    echo "erart guzel anastlar ataberk erday";

};
$yazdir();
--------------------------------
*/
/*
$islem  =   [
    "ataberk",
    "hakan",
    function(){
    echo "erart guzel anastlar ataberk erday";
    },
    "onur"
];

echo $islem[0]."<br />";

echo $islem[1]. "<br />";
$islem[2]();
echo "<br />";
echo $islem[3]."<br />";
--------------------------------
*/

/*
$islem  =   [
    "ataberk",
    "hakan",
    [
    function(){
    echo "erart gasuzel anastlar ataberk erday";
    },
    ],
    "onur"
    ];

echo $islem[0]."<br />";

echo $islem[1]. "<br />";
$islem[2][0]();
echo "<br />";
echo $islem[3]."<br />";
----------------------------------------
*/
/*
$islem  =   [
    "ataberk",
    function(){
    echo "erart guzel anastlar ataberk erday 1";
        },
    "hakan",
    function(){
    echo "erart guzel anastlar ataberk erday 2";
    },
    "onur",
    function(){
    echo "erart guzel anastlar ataberk erday 3";
    },
    function(){
    echo "erart guzel anastlar ataberk erday 4";
    },
];
echo "<pre>";
print_r($islem);
echo "</pre><br /><br />";

echo $islem[0] . "<br />";
$islem[1]();
echo "<br />";
echo $islem[2] . "<br />";
$islem[3]();
echo "<br />";
echo $islem[4] . "<br />";
$islem[5]();
echo "<br />";
$islem[6]();
echo "<br />";
-------------------------------------------------
*/

$islem  =   [
    "ataberk",
    function(){
    echo "erart guzel anastlar ataberk erday 1";
        },
    "hakan",
    function(){
    echo "erart guzel anastlar ataberk erday 2";
    },
    "onur",
    function(){
    echo "erart guzel anastlar ataberk erday 3";
    },
    function(){
    echo "erart guzel anastlar ataberk erday 4";
    },
];
echo "<pre>";
print_r($islem);
echo "</pre><br /><br />";

$islem[1]();
echo "<br />";
$islem[3]();
echo "<br />";
$islem[5]();
echo "<br />";
$islem[6]();
echo "<br />";





?>
</body>
</html>	