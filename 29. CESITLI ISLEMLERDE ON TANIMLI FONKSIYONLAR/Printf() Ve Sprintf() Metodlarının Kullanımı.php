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
printf()    :   belirtilecek olan icerigin bicimli bir yapiya gore ekran ciktilanmasini saglamak icin kullanilir.
sprintf()   :   belirtilecek olan icerigin bicimli bir yapiya gore yeni bir degisken icerisine depolanmasini saglamak icin kullanilir.
*/
/*
printf("ataberk erday");
-------------------------------------------------------*/
/*
$deger=sprintf("Ataberk erday");
echo $deger;
-------------------------------------------------------*/
/*
printf("%%ataberk");
-------------------------------------------------------*/
/*
$deger=sprintf("%%ataberk");
echo $deger;
-------------------------------------------------------*/
/*
$deger = "ataberk";
printf("hosgeldiniz %s bey",$deger);
-------------------------------------------------------*/
/*
$deger = "ataberk";
$sonuc = sprintf("hosgeldiniz %s bey",$deger);
echo $sonuc;
-------------------------------------------------------*/
/*
$isim = "ataberk";
$soyisim = "erday";

printf("hosgeldiniz %s %s bey",$isim,$soyisim);
-------------------------------------------------------*/
/*
$isim = "ataberk";
$soyisim = "erday";

$sonuc = sprintf("hosgeldiniz %s %s bey",$isim,$soyisim);
echo $sonuc;
-------------------------------------------------------*/
/*
$bir = 5;
$iki = 8;

echo $bir + $iki . "<br />";

printf( $bir + $iki );

echo "<br />";

printf("%s + %s",$bir,$iki);
-------------------------------------------------------*/
/*
$bir = 5;
$iki = 8;

echo $bir + $iki . "<br />";

$sonucbir = sprintf( $bir + $iki );

echo $sonucbir;

echo "<br />";

$sonuciki = sprintf("%s + %s",$bir,$iki);

echo $sonuciki;
-------------------------------------------------------*/

/*
$deger = "hosgeldiniz %s bey";
printf($deger, "ataberk");
-------------------------------------------------------*/
/*
$deger = "hosgeldiniz %s %s bey";
printf($deger, "ataberk", "erday");
-------------------------------------------------------*/
/*
$deger = "hosgeldiniz %s %s";
$sonuc = sprintf($deger, "ataberk", "nasilsiniz?");
echo $sonuc;
-------------------------------------------------------*/
//-------------------------------------------------------*/-------------------------------------------------------*/-------------------------------------------------------*/-------------------------------------------------------*/
/*
$deger = 99.99;
printf("borcunuz %d TL'dir.",$deger);
-------------------------------------------------------*/
/*
$deger = 99.99;
$yazdir = sprintf("borcunuz %d TL'dir. Lutfen odeyiniz ayilik yapmayiniz!",$deger);

echo $yazdir;
-------------------------------------------------------*/
/*
$deger = 99.99;
printf("borcunuz %+d TL'dir.",$deger);
-------------------------------------------------------*/
/*
$deger = -99.99;
$yazdir = sprintf("borcunuz %+d TL'dir. Lutfen odeyiniz ayilik yapmayiniz!",$deger);

echo $yazdir;
-------------------------------------------------------*/
//-------------------------------------------------------*/-------------------------------------------------------*/-------------------------------------------------------*/-------------------------------------------------------*/
/*
$deger = 99.99;
printf("borcunuz %f TL'dir.",$deger);
-------------------------------------------------------*/
/*
$deger = 99.99;
$yazdir = sprintf("borcunuz %f TL'dir. Lutfen odeyiniz ayilik yapmayiniz!",$deger);

echo $yazdir;
-------------------------------------------------------*/
/*
$deger = 99.99;
printf("borcunuz %0.2f TL'dir.",$deger);
-------------------------------------------------------*/
/*
$deger = 99.99;
$yazdir = sprintf("borcunuz %0.2f TL'dir. Lutfen odeyiniz ayilik yapmayiniz!",$deger);

echo $yazdir;
-------------------------------------------------------*/
//-------------------------------------------------------*/-------------------------------------------------------*/-------------------------------------------------------*/-------------------------------------------------------*/
/*
$deger = 99.99;
printf("borcunuz %0.2F TL'dir.",$deger);
-------------------------------------------------------*/
/*
$deger = 99.99;
$yazdir = sprintf("borcunuz %0.2F TL'dir. Lutfen odeyiniz ayilik yapmayiniz!",$deger);

echo $yazdir;
-------------------------------------------------------*/
//-------------------------------------------------------*/-------------------------------------------------------*/-------------------------------------------------------*/-------------------------------------------------------*/
/*
$deger  = "ataberk erday";
printf("merhaba %0.5s",$deger);
-------------------------------------------------------*/
/*
$deger  = "ataberk erday";
$yazdir = sprintf("merhaba %0.5s",$deger);

echo $yazdir;
-------------------------------------------------------*/
//-------------------------------------------------------*/-------------------------------------------------------*/-------------------------------------------------------*/-------------------------------------------------------*/
/*
$deger1  =  65;  
$deger2  =  84; 
$deger3  =  65;  
$deger4  =  66; 
$deger5  =  69;  
$deger6  =  82;  
$deger7  =  75;
printf( "kodunun karsiligi : %c %c %c %c %c %c %c ",$deger1,$deger2,$deger3,$deger4,$deger5,$deger6,$deger7);
-------------------------------------------------------*/
/*
$deger1  =  65;  
$deger2  =  84; 
$deger3  =  65;   
$deger4  =  66; 
$deger5  =  69;  
$deger6  =  82;  
$deger7  =  75;
$yazdir = sprintf( "kodunun karsiligi : %c%c%c%c%c%c%c ",$deger1,$deger2,$deger3,$deger4,$deger5,$deger6,$deger7);

echo $yazdir;
-------------------------------------------------------*/
//-------------------------------------------------------*/-------------------------------------------------------*/-------------------------------------------------------*/-------------------------------------------------------*/
/*
$deger  = 2002;
printf("sayinin binary karsiligi %b",$deger);
-------------------------------------------------------*/
/*
$deger  = 2002;
$sonuc = sprintf("sayinin binary karsiligi %b",$deger);
echo $sonuc;
-------------------------------------------------------*/
//-------------------------------------------------------*/-------------------------------------------------------*/-------------------------------------------------------*/-------------------------------------------------------*/
/*
$deger  = 2002;
printf("sayinin octal karsiligi %o",$deger);
-------------------------------------------------------*/
/*
$deger  = 2002;
$sonuc = sprintf("sayinin octal karsiligi %o",$deger);
echo $sonuc;
-------------------------------------------------------*/
//-------------------------------------------------------*/-------------------------------------------------------*/-------------------------------------------------------*/-------------------------------------------------------*/
/*
$deger  = 2002;
printf("sayinin hexadecimal karsiligi %x",$deger);
-------------------------------------------------------*/
/*
$deger  = 65846566698275;
$sonuc = sprintf("sayinin hexadecimal karsiligi %x",$deger);
echo $sonuc;
-------------------------------------------------------*/
//-------------------------------------------------------*/-------------------------------------------------------*/-------------------------------------------------------*/-------------------------------------------------------*/
/*
$deger  = 123456789;
printf("sayinin bilimsel karsiligi %e",$deger);
-------------------------------------------------------*/
/*
$deger  = 123456789;
$sonuc = sprintf("sayinin bilimsel karsiligi %e",$deger);
echo $sonuc;
-------------------------------------------------------*/
//-------------------------------------------------------*/-------------------------------------------------------*/-------------------------------------------------------*/-------------------------------------------------------*/
/*
$deger  = 1.32322e+4;
printf("sayinin kisa gosterim karsiligi %g",$deger);
-------------------------------------------------------*/
/*
$deger  = 1.32322e+4;
$sonuc = sprintf("sayinin kisa gosterim karsiligi %g",$deger);
echo $sonuc; 
-------------------------------------------------------*/
//-------------------------------------------------------*/-------------------------------------------------------*/-------------------------------------------------------*/-------------------------------------------------------*/
/*
$deger  =   "PHP";
printf("%'-30s",$deger);
-------------------------------------------------------*/
/*
$deger  =   "PHP";
$sonuc = sprintf("%'-30s",$deger);
echo $sonuc;
-------------------------------------------------------*/
/*
$deger  =   14;
printf("%-',8s",$deger);
-------------------------------------------------------*/

$deger  =   14;
$sonuc = sprintf("%-',8s",$deger);
echo $sonuc;








?>
</body>
</html>	