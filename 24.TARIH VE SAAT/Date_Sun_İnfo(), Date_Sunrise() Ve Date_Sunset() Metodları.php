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
    date_sun_info()     :   belirtilecek olan tarih ve lokasyon degerlerine gore ilgili yerin gun dogumu gun batimi oglen
    alacakaranlik baslangic ve alacakaranlik bitis degerlerinden  yeni bir dizi olsuturarak olusturdugu dizi degerini geriye dondurur. 
    parametreler : 1. zaman damgasi 2.enlem 3.boylam  


    [sunrise]                        : GUN DOGUMU
    [sunset]                         : GUN BATIMI
    [transit]                        : OGLEN
    [civil_twilight_begin]           : KARA ALACAKARANLIK BASLANGICI
    [civil_twilight_end]             : KARA ALACAKARANLIK BITISI
    [nautical_twilight_begin]        : DENIZ ALACAKARANLIK BASLANGICI
    [nautical_twilight_end]          : DENIZ ALACAKARANLIK BITISI
    [astronomical_twilight_begin]    : ASTRONOMIK ALACAKARANLIK BASLANGICI
    [astronomical_twilight_end]      : ASTRONOMIK ALACAKARANLIK BITISI

    date_sunrise()      :   belirtilecek olan tarih ve lokasyon degerlerine gore ilgili yerin gun dogumu degrini bularak buldugu degeri  griye dondurur. 
    parametler: 1.zaman damgsi 2.kendi parametresi 3.enlem 4.boylam

    date_sunset()       :    belirtilecek olan tarih ve lokasyon degerlerine gore ilgili yerin gun batimi degrini bularak buldugu degeri  griye dondurur. 
    parametler: 1.zaman damgsi 2.kendi parametresi 3.enlem 4.boylam 

date_sunrise ve sunset metopdunun kayitli parametreleri ;
        1. SUNFUNC_RET_STRING       : sonuc string uyani alfanumerik deger dondurur.
        2. SUNFUNC_RET_DOUBLE       : sonuc double yani ondalikli sayi degeri  dondurur.
        3. SUNFUNC_RET_TIMESTAMP    : sonuc zaman damgasi olarak doner.
*/
/*
$zamandamgasi = strtotime("1980-12-8");

echo "1980-12-8 tarihinin zaman damgsi : " . $zamandamgasi . "<br />";

$sor = date_sun_info($zamandamgasi, 39.914285, 32.852853); 

echo "<pre>";
print_r($sor);
echo "</pre>";
--------------------------------*/
/*
$zamandamgasi = time();

echo "zaman damgsi : " . $zamandamgasi . "<br />";

$sor = date_sun_info($zamandamgasi, 39.914285, 32.852853); 

echo "<pre>";
print_r($sor);
echo "</pre>";
-----------------------------------*/
/*
$zamandamgasi = strtotime("1980-12-8");

echo "1980-12-8 tarihinin zaman damgasi : " . $zamandamgasi . "<br />";

$sor = date_sun_info($zamandamgasi, 39.913627, 32.850879); 
 
foreach ($sor as $anahtar => $icerik) {
    echo $anahtar . ":". date("d.m.Y H.i.s",$icerik) . "<br />";
}
----------------------------*/
/*
$zamandamgasi = time();

echo "zaman damgasi : " . $zamandamgasi . "<br />";

$sor = date_sun_info($zamandamgasi, 39.913627, 32.850879); 
 
foreach ($sor as $anahtar => $icerik) {
    echo $anahtar . ":". date("d.m.Y H.i.s",$icerik) . "<br />";
}
-------------------------------*/
/*
$zamandamgasi = time();

echo "suanin zaman damgasi : " . $zamandamgasi . "<br />";

$sor = date_sun_info($zamandamgasi, 39.913627, 32.850879); 
 
echo "GUN DOGUMU : " . date("d.m.Y H.i.s", $sor["sunrise"]) . "<br />";
echo "GUN BATIMI : " . date("d.m.Y H.i.s", $sor["sunset"]) . "<br />";
echo "OGLEN : " . date("d.m.Y H.i.s", $sor["transit"]) . "<br />";
echo "KARA ALACAKARANLIK BASLANGICI : " . date("d.m.Y H.i.s", $sor["civil_twilight_begin"]) . "<br />";
echo "KARA ALACAKARANLIK BITISI : " . date("d.m.Y H.i.s", $sor["civil_twilight_end"]) . "<br />";
echo "DENIZ ALACAKARANLIK BASLANGICI : " . date("d.m.Y H.i.s", $sor["nautical_twilight_begin"]) . "<br />";
echo "DENIZ ALACAKARANLIK BITISI : " . date("d.m.Y H.i.s", $sor["nautical_twilight_end"]) . "<br />";
echo "ASTRONOMIK ALACAKARANLIK BASLANGICI : " . date("d.m.Y H.i.s", $sor["astronomical_twilight_begin"]) . "<br />";
echo "ASTRONOMIK ALACAKARANLIK BITISI: " . date("d.m.Y H.i.s", $sor["astronomical_twilight_end"]) . "<br />";
--------------------------------------*/
/*
$zamandamgasi = time();

echo "bugunun zaman damgsi : " . $zamandamgasi . "<br />";

$gundogumu  = date_sunrise($zamandamgasi, SUNFUNCS_RET_STRING ,39.914285, 32.852853); 
echo "gun dogumu : " . $gundogumu;
---------------------------------*/
/*
$zamandamgasi = time();

echo "bugunun zaman damgsi : " . $zamandamgasi . "<br />";

$gundogumu  = date_sunrise($zamandamgasi, SUNFUNCS_RET_DOUBLE ,39.914285, 32.852853); 
echo "gun dogumu : " . $gundogumu;
---------------------------------*/

/*
$zamandamgasi = time();

echo "bugunun zaman damgsi : " . $zamandamgasi . "<br />";

$gundogumu  = date_sunrise($zamandamgasi, SUNFUNCS_RET_TIMESTAMP ,39.914285, 32.852853); 
echo "gun dogumu : " . $gundogumu;
-------------------------------*/

/*
$zamandamgasi = strtotime("1980-15-8");

echo "bugunun zaman damgsi : " . $zamandamgasi . "<br />";

$gundogumu  = date_sunrise($zamandamgasi, SUNFUNCS_RET_TIMESTAMP ,39.914285, 32.852853); 
echo "gun dogumu : " . $gundogumu . "<br />";

echo "gun dogumu : " . date("H.i ",($gundogumu + 7200));
-------------------------------*/

$zamandamgasi = date();

echo "bugunun zaman damgsi : " . $zamandamgasi . "<br />";

$gundogumu  = date_sunrise($zamandamgasi, SUNFUNCS_RET_TIMESTAMP ,39.914285, 32.852853); 
echo "gun dogumu : " . $gundogumu . "<br />";

echo "gun dogumu : " . date("H.i ",($gundogumu + 7200));

//sunset icinde butun degerler aynidir!


















?>
</body>
</html>	