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





abstract class MakeDevice
{
    public $owner;

    abstract  public  function checkPerformance();
    abstract  public  function checkId();
    abstract  public  function sayHello($name);
}

class iphon extends MakeDevice
{
    public function checkPerformance()
    {
        echo 'Perfomance Checked <br>';
    }

    public function checkId()
    {
        echo 'Id Checked 100% <br>';
    }

    public function sayHello($name)
    {
        $this->owner = $name;

        echo "hello Mr. " . $name . "<br>";
    }
}



class ipad extends MakeDevice
{
    public function checkPerformance()
    {
        echo 'Perfomance Checked _';
    }

    public function checkId()
    {
        echo 'Id Checked 100% _';
    }

    public function sayHello($name)
    {
        $this->owner = $name;

        echo "hello Mr. " . $name . "_";
    }
}



$iphon4 = new iphon();
// $iphon4->owner = 'MOHA12';
// $iphon4->checkPerformance();
// $iphon4->checkId();
$iphon4->sayHello('MOHA');
$iphon4->checkPerformance();




echo '<pre>';
print_r($iphon4);
echo '</pre>';

echo "<hr>";


$ipad4pro = new ipad();
//$ipad4pro->owner='AzEm';
$ipad4pro->sayHello('AZZEM3');




echo '<pre>';
print_r($ipad4pro);
echo '</pre>';

echo "<hr>";