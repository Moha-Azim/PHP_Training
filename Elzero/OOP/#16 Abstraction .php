<?php

/*

    Class Abstraction 
    -Cannot Be Instantiated [ Cannot Create Object From ]
    -Made For Other Classes to Inherit Prop & Methods From
    -Can Have methods & porperties
    -Can Have Abtracted Method And Non Abstracted methods
    -Abstract methods [ Contains no Body Code ]

    * Rules to go on 
    * Forec the Developer to Follow your methods
    
*/





abstract class MakeDevice2
{

    public $ram;
    public $space;
    public $size;

    public function goodbye()
    {
        echo '<br> good bye';
    }
    abstract public function sayhi(); //Abstract methods [ Contains no Body Code ]

}

class AppleDevice2 extends MakeDevice2
{

    public function sayhi()
    {   // this error will show if dont put this function ==> Class AppleDevice contains 1 abstract method and must therefore be declared abstract or implement the remaining methods 
        echo 'hello ' . $this->ram . "hi man";
    }
}

$iphon10 = new AppleDevice2();

$iphon10->ram = '10gb';
$iphon10->space = '500gb';
$iphon10->size = '5.5 inch';
$iphon10->sayhi();
$iphon10->goodbye();



echo '<pre>';
print_r($iphon10);
echo '</pre>';

echo "<hr>";