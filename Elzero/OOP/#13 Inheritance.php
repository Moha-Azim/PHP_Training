<?php



/*

    Inheritance

*/




class AppleDevice{

//Proparties
public $ram     = '2GB';
public $inch    = '5 Inch';
public $space   = '16 GB';
public $color   = 'Black';
public $screen  = '60MHz';


    public function changSpac($ra,$in,$sp,$co,$sc){

    $this->ram     =$ra;
    $this->inch    =$in;
    $this->space   =$sp;
    $this->color   =$co;   
    $this->screen  =$sc;
    }  
}


class sony extends AppleDevice{
    public $camera;
}




//Methods


$iphone7 = new AppleDevice();

$iphone7 ->changSpac('3GB','5.5 Inch','32 GB','Gold','60MHz');


echo '<pre>';

print_r($iphone7);

echo '</pre>'; 

echo "<hr>";


$sony3 = new sony();

$sony3->changSpac('6GB','6 Inch','100 GB','Black','120MHz');
$sony3->camera = '30MP';

echo '<pre>';

print_r($sony3);

echo '</pre>'; 

echo "<hr>";