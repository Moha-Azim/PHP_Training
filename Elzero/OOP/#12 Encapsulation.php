<?php

/*

Encapsulation

*/

class AppleDevice
{

    //Proparties
    public  $ram = '2GB';
    public  $inch = '5 Inch';
    public  $space = '16 GB';
    public  $color = 'Black';
    private $lock;


    public function changSpac($ra, $in, $sp, $co)
    {

        $this->ram = $ra;
        $this->inch = $in;
        $this->space = $sp;
        $this->color = $co;
    }

    public function lockdev($lo)
    {

        $this->lock = sha1($lo);
    }
}

//Methods


$iphone7 = new AppleDevice();

$iphone7->changSpac('3GB', '5.5 Inch', '32 GB', 'Gold');
$iphone7->lockdev('mohammad');

echo '<pre>';

var_dump($iphone7);

echo '</pre>';

echo "<hr>";



$iphone8 = new AppleDevice();

$iphone8->changSpac('6GB', '6Inch', '256GB', 'Silve');


echo '<pre>';

var_dump($iphone8);

echo '</pre>';


echo "<hr>";






$iphone = new AppleDevice();


echo '<pre>';

var_dump($iphone);

echo '</pre>';