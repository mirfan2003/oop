<?php
     class Motor 
{
    // property
    public $kenalpot = 1;
    public $sepion = 2;
    public $velg = 'palang';
    public $ban = 'batlax';

    //metod
    public function jalan()
    {
        echo "motor sudah berjalan yang memiliki knalpot sebanyak ".$this->kenalpot."<br>";

    }

}
// instansi
$rxing = New Motor();
$rxing->jalan();
// $srxing->rem();
// $srxing->mogok();

// $vario = New Motor();
// $vario->jalan();