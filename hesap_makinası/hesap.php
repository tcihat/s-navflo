<?php

    $islemm = @$_POST['islem'];

   class islem{
 
    public $a;

    public $b; 

    function toplama($a,$b){ 

        $toplam_sonuc = $a+$b;
        echo $toplam_sonuc;

} 

function cikarma($a,$b){ 
    $cikarma_sonuc=$a-$b;
    echo $cikarma_sonuc;

} 

function carpma($a,$b){ 
    $carpma_sonuc=$a*$b;
    echo $carpma_sonuc;

} 

function bolme($a,$b){ 
    $bolme_sonuc=$a/$b;
    echo $bolme_sonuc;

}
   }
$islemler = new islem;
$islemler->$islemm(@$_POST['sayi1'],@$_POST['sayi2']);




?>
