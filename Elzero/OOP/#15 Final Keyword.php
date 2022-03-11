<?php

/*



Final Keyword  line 40


 you can  final  
 Class  then it will be not enable to inherit // Class sony may not inherit from final class (AppleDevice) 
 or
 function then you can't change any thing in the fucntion inside the inherit class  //Fatal error: Cannot override final method AppleDevice::sayhello() 

*/


class AppleDevice
{

    //Proparties
    public $ram     = '2GB';
    public $inch    = '5 Inch';
    public $space   = '16 GB';
    public $color   = 'Black';
    public $screen  = '60MHz';
    public $name;


    public function changSpac($ra, $in, $sp, $co, $sc)
    {

        $this->ram     = $ra;
        $this->inch    = $in;
        $this->space   = $sp;
        $this->color   = $co;
        $this->screen  = $sc;
    }

    final public function sayhello($na)
    {
        $this->name = $na;
        echo 'hello welcom in ' . $na;
    }
}

class sony extends AppleDevice
{

    public $camera = '10MP ';
}




//Methods


$iphone7 = new AppleDevice();

$iphone7->changSpac('3GB', '5.5 Inch', '32 GB', 'Gold', '60MHz');
$iphone7->sayhello('Iphone7');

echo '<pre>';

print_r($iphone7);

echo '</pre>';

echo "<hr>";


$sony3 = new sony();

$sony3->changSpac('6GB', '6 Inch', '100 GB', 'Black', '120MHz');
$sony3->sayhello('Sony3');
$sony3->camera = '30MP';


echo '<pre>';

print_r($sony3);

echo '</pre>';

echo "<hr>";