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
public     :    genel. Heryerden erisilebilir.
private    :    ozel. yanlizca sinif icerisinden erisilebilir.
protected  :    korumali.sinif icerisinden ve turetilen siniflardan erisilebilir.

static     :    sabit. sinif icerisindeki herhnagi bir ozellik veya methoda sinif cagirilmadan da erisilebilir.

$this      :    bu sinifda seklinde sinifi isaret etmek icin kullanilir.
self::     :    kendi sinifimda seklinde sinifi isaret etmek icin kullanilir.
parent::   :    ebeveyn sinifimda seklinde sinfii isaret etmek icin kullanilir.
*/
/*
class bir{
    public $isim = "ataberk";
    const SOYISIM = "erday";

    public function bilgi(){
        $metin = "adan zye php egiotim seti";
        return $metin;

    }
}
$nesne = new bir;
echo "isim soyisim : " . $nesne->isim . " " . bir::SOYISIM . " " . $nesne->bilgi();
--------------------------------------*/
/*
class bir{
    private $isim = "ataberk";
    const SOYISIM = "erday";

    private function bilgi(){
        $metin = "adan zye php egiotim seti";
        return $metin;

    }
}
$nesne = new bir;
echo "isim soyisim : " . $nesne->isim . " " . bir::SOYISIM . " " . $nesne->bilgi();
--------------------------------------*/
/*
class bir{
    protected $isim = "ataberk";
    const SOYISIM = "erday";

    protected function bilgi(){
        $metin = "adan zye php egiotim seti";
        return $metin;

    }
}
$nesne = new bir;
echo "isim soyisim : " . $nesne->isim . " " . bir::SOYISIM . " " . $nesne->bilgi();
--------------------------------------*/
/*
class bir{
    public $isim = "ataberk";
    const SOYISIM = "erday";

    public function bilgi(){
        $metin = "isim soyisim : " . $this->isim . " " . self::SOYISIM ." a'dan z'ye php egitim seti";
        return $metin;

    }
}
$nesne = new bir;
echo $nesne->bilgi();
--------------------------------------*/
/*
class bir{
    private $isim = "ataberk";
    const SOYISIM = "erday";

    public function bilgi(){
        $metin = "isim soyisim : " . $this->isim . " " . self::SOYISIM ." a'dan z'ye php egitim seti";
        return $metin;

    }
}
$nesne = new bir;
echo $nesne->bilgi();
--------------------------------------*/
/*
class bir{
    protected $isim = "ataberk";
    const SOYISIM = "erday";

    public function bilgi(){
        $metin = "isim soyisim : " . $this->isim . " " . self::SOYISIM ." a'dan z'ye css egitim seti";
        return $metin;

    }
}
$nesne = new bir;
echo $nesne->bilgi();
--------------------------------------*/
/*
class bir{
    public $isim = "ataberk";
    const SOYISIM = "erday";

}

class iki extends bir{

    public function bilgi(){
        $metin = " isim soyisim : " . $this->isim . " " . self::SOYISIM ."  a'dan z'ye css egitim seti";
        return $metin;
 
    }

}

$nesne = new iki;
echo $nesne->bilgi();
--------------------------------------*/
/*
class bir{
    protected $isim = "ataberk";
    protected const SOYISIM = "erday";

}

class iki extends bir{

    public function bilgi(){
        $metin = " isim soyisim : " . $this->isim . " " . self::SOYISIM ."  a'dan z'ye css egitim seti";
        return $metin;
 
    }

}

$nesne = new iki;
echo $nesne->bilgi();
--------------------------------------*/
/*
class bir{
    public function bilgi(){
        $metin = " php";
        return $metin;
 
    }
}

class iki extends bir{

    public function bilgi(){
        $metin = " css";
        echo $metin;
        return parent::bilgi();
    }

}

$nesne = new iki;
echo $nesne->bilgi();
--------------------------------------*/
/*
class bir{
    public function bilgi(){
        $metin = " php";
        return $metin;
 
    }
}

class iki extends bir{

    public function bilgi(){
        $metin = " css" . parent::bilgi();
    
        return $metin;
    }
 
}

$nesne = new iki;
echo $nesne->bilgi();
--------------------------------------*/
/*
class Bir{
		
    public $Isim	=	"ataberk";
    
    public function Bilgi(){
        $Metin	=	$this->Isim;
        return $Metin;
    }
    
}

class Iki extends Bir{
    
    public function Bilgi(){
        $Metin	=	"css " . parent::Bilgi();
        return $Metin;
    }

}

$Nesne	=	new Iki;

echo $Nesne->Bilgi();
--------------------------------------*/
/*
class Dersler{
    public function AAA(){
        $icerik = "a'dan z'ye php7  egitim seti<br /><br />"; 
        echo $icerik;
    }
    public function BBB(){
        $icerik = "a'dan z'ye javascript egitim seti<br /><br />";
        echo $icerik;

    }
    public function CCC(){
        $icerik = "a'dan z'ye CSS3 egitim seti<br /><br />";
        echo $icerik;
    }
}
class Egitmenler extends Dersler{

    public function AAA(){
        $kim = "ataberk erday<br />"; 
        echo $kim;
        parent::AAA();
    }
    public function BBB(){
        $kim = "sadik erday<br />";
        echo $kim;
        parent::BBB();

    }
    public function CCC(){
        $kim = "esra erday<br />";
        echo $kim;
        parent::CCC(); 
    }
}



$nesne = new Egitmenler;
$nesne->AAA();
$nesne->BBB();
$nesne->CCC();
-----------------------------------------------------------*/
/*
class Dersler{
    public function AAA(){
        $icerik = "a'dan z'ye php7  egitim seti<br /><br />"; 
        return $icerik;
    }
    public function BBB(){
        $icerik = "a'dan z'ye javascript egitim seti<br /><br />";
        return $icerik;

    }
    public function CCC(){
        $icerik = "a'dan z'ye CSS3 egitim seti<br /><br />";
        return $icerik;
    }
}
class Egitmenler extends Dersler{

    public function AAA(){
        $kim = "ataberk erday<br />"; 
        $kim .= parent::AAA(); 
        return $kim;
    }
    public function BBB(){
        $kim = "sadik erday<br />";
        $kim .= parent::BBB();
        return $kim;

    }
    public function CCC(){
        $kim = "esra erday<br />";
        $kim .= parent::CCC();
        return $kim;
        
    }
}



$nesne = new Egitmenler;
echo  $nesne->AAA();
echo  $nesne->BBB();
echo  $nesne->CCC();
-----------------------------------------------------------*/
/*
class islem{ 
    public static $isim = "php";
}

echo islem::$isim;
-----------------------------------------------------------*/
class islem{ 
    public static function bilgiver(){
        echo "ataberk  erday";
    }
}

islem::bilgiver();


?>
</body>
</html>	