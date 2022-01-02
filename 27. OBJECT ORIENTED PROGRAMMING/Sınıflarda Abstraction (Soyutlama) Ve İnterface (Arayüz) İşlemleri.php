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
abstract    :   belirtilecek olan herhangi bir sinifi soyut sinif haline donusturmek icin kullanilir.
interface   :   belirtilecek olan herhangi bir sinifi soyut arayuz sinifi haline donusturmek icin kullanilir.
implement   : daha onceden olusturulmus olan herhangi bir arayuz sinifini ilgili sinifa tanimlamak yada / uygulamak icin kullanilir.

abstract    ;
1. soyut metodlar icerebilir. 
2. normal metodlar icerebilir.
3. ozzellikler icerebilir.
4. sabitler icerebilir.
5. public, private veya protected tanimlanabilir.
6. herhangi bir sinif sadece tek bir icerebilir.'dan tureyebilir.


interface   ;
1.soyut metodlar icerebilir.
2. public gorunurlugune sahip olmak kaydiyla normal metodlar icerbilir.
3. sabitler icerebilir.
4. herhangi bir sinifta birden fazla interface (arayuz) kullanilabilir. 
*/
/*
abstract class deneme{
   abstract  public function tanim($parametreicerigi){ //hata kodu dondurur cunku, sinif icerisinde bulunan metodlar muhakkak soyut sinifdan tureyen alt siniflarada bulunmalidir.
        echo $parametreicerigi;
    }

}

class test extends deneme{

}
$sonuc = new test;
$sonuc->tanim("ataberk erday");
-----------------------------------------*/
/*
abstract class deneme{
    abstract public function tanim($parametreicerigi);

}
 class test extends deneme{
     public function tanim($parametreicerigi){

     }

 }
-----------------------------------------*/
/*
abstract class deneme{
    abstract public function tanim($parametreicerigi);

}
class testbir extends deneme{
    public function tanim($parametreicerigi){

    }

}
class testiki extends deneme{
    public function tanim($parametreicerigi){

    }

}
class testuc extends deneme{
    public function tanim($parametreicerigi){

    }

}
-----------------------------------------*/
/*
abstract class deneme{
    abstract  public function tanim($parametreicerigi); //hata kodu dondurur cunku, soyut sinif icerisinde bulunan metodlar muhakkak soyut sinifdan tureyen tum alt siniflarada bulunmalidir.
         
}
 class testbir extends deneme{
 public function tanim($parametreicerigi){

    }
 }
class testiki extends deneme{

}
-----------------------------------------*/
/*
abstract class tema{
    abstract public function header($arkaplanrengi, $headerlogosu, $headerbanneri); 
    abstract public function body($icerik); 
    abstract public function footer($copymetni); 
}
//----------METOD ISIMLERI DEGISEMEZ AMA PARAMETRE ISIMLERI DEGISEBILIR;.!!!!!!!!!!
class ustalan extends tema{
    public function header($arkaplanrengi, $headerlogosu, $headerbanneri){

    }
    public function body($icerik){

    }
    public function footer($copymetni){

    }
}
-----------------------------------------*/
/*
abstract class deneme{
    public $isim    =    "ataberk";
    const SOYISIM   =    "erday";
}


class test extends deneme{

}
-----------------------------------------*/
/*
abstract class deneme{
    public $isim        =    "ataberk";
    const SOYISIM       =    "erday";

    public $isimiki     =   "esra";
    const SOYISIMIKI    =   "erday";

    public $isimuc      =   "sadik" ;
    protected const SOYISIMUC     =   "erday" ;
}


class test extends deneme{

}
-----------------------------------------*/
//--------------------------------------------!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!------------------------------------------------
/*
interface deneme{
     public function tanim($parametreicerigi); // hata kodun dondurur cunku arayuz sinfi icerisinde buluinan metodlar mutlaka soyut arayuz sinifi tanimlanan siniflarda da bulunmalidir.

}
class test implements deneme{

}
-----------------------------------------*/
/*
interface deneme{
    public function tanim($parametreicerigi); 

}
class test implements deneme{
    function tanim($parametreicerigi){
        
    }

}
-----------------------------------------*/
/*
interface deneme{
    public function tanim($parametreicerigi); // hata kodu dondurur cunku soyut arayuz sinifi icerisidne bulunan metodlar muhakkak soyut arayuz sinifi tanimlanan siniflarda da bulunmalidir.

}
class testbir implements deneme{
    

}
class testiki implements deneme{
    
}
-----------------------------------------*/
/*
interface deneme{
    public function tanim($parametreicerigi); 

}
class testbir implements deneme{
    function tanim($parametreicerigi){

    }


}
class testiki implements deneme{
    function tanim($parametreicerigi){

    }


}
-----------------------------------------*/
/*
interface CRUD{ //CRUD : C :Create , R : Read , U : Update, D : Delete.
    public function olusturma($tablodegeri, $benzersizkimlik); 
    public function okuma($tablodegeri, $benzersizkimlik); 
    public function duzenleme($tablodegeri, $benzersizkimlik); 
    public function silme($tablodegeri, $benzersizkimlik); 


}
class test implements CRUD{
    function olusturma($tablodegeri, $benzersizkimlik){

    } 
    function okuma($tablodegeri, $benzersizkimlik){

    }
    function duzenleme($tablodegeri, $benzersizkimlik){

    }
    function silme($tablodegeri, $benzersizkimlik){

    }
}
-----------------------------------------*/
/*
interface deneme{ 
    public $isim = "ataberk"; //hata verir cunku sabit degil 
    const SOYISIM = "erday";
}
class test implements CRUD{
    
}
-----------------------------------------*/
/*
interface CRUD{ //CRUD : C :Create , R : Read , U : Update, D : Delete.
    private function olusturma($tablodegeri, $benzersizkimlik); // soyut arayuz sinifi icerisinde private-protected kullanilamaz hata kodu dondurur.
    public function okuma($tablodegeri, $benzersizkimlik); 
    public function duzenleme($tablodegeri, $benzersizkimlik); 
    public function silme($tablodegeri, $benzersizkimlik); 


}
class test implements CRUD{
    function olusturma($tablodegeri, $benzersizkimlik){

    } 
    function okuma($tablodegeri, $benzersizkimlik){

    }
    function duzenleme($tablodegeri, $benzersizkimlik){

    }
    function silme($tablodegeri, $benzersizkimlik){

    }
}
-----------------------------------------------------*/
/*
interface olusturma{
    public function olusturma($tablodegeri, $benzersizkimlik); 

}
interface okuma{
    public function okuma($tablodegeri, $benzersizkimlik); 

}
interface duzenleme{
    public function duzenleme($tablodegeri, $benzersizkimlik); 

}
interface silme{
    public function silme($tablodegeri, $benzersizkimlik); 
}



class test implements olusturma, okuma, duzenleme, silme{
    function olusturma($tablodegeri, $benzersizkimlik){

    } 
    function okuma($tablodegeri, $benzersizkimlik){

    }
    function duzenleme($tablodegeri, $benzersizkimlik){

    }
    function silme($tablodegeri, $benzersizkimlik){

    }
}
-----------------------------------------------------*/
interface CRUD{ 
    public function olusturma($tablodegeri, $benzersizkimlik); 
    public function okuma($tablodegeri, $benzersizkimlik); 
    public function duzenleme($tablodegeri, $benzersizkimlik); 
    public function silme($tablodegeri, $benzersizkimlik); 


}

abstract class tema implements CRUD{
   public function olusturma($tablodegeri, $benzersizkimlik){

   }
   public function okuma($tablodegeri, $benzersizkimlik){

   }
   public function duzenleme($tablodegeri, $benzersizkimlik){

   }
   public function silme($tablodegeri, $benzersizkimlik){

   }
   abstract public function headeralani($arkaplanrengi, $headerlogosu, $headerbanneri);

}
class ustalan extends tema{
    function headeralani($arkaplanrengi, $headerlogosu, $headerbanneri){
        
    }
}


?>
</body>
</html>	