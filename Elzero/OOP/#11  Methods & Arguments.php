<?php

/*

    Class & Object 
    -class is a Blueprint that  u ca create Objects form
    -Object is a Member in the main Application
    -Class has Properties
    -Variable Inside Class =[ Property]
    -Variable outside Class = [Variable]
    -Function Inside Class = [ Method ]
    -Function outside Class = [ Function ]

    - [class] = Class Keyword
    -[ new ] = New Object keyword
    -[Public , Private , Protected] = Visibility Markers
    -[ -> ] = object Operator
    -[ $this ] = Pseudo Variable [refer to Object Porperties ]
    -[ :: ] = Scope Resolution Poerator [ Paamayim Nekudotayim ] = Double Colon


    Web Application Registration
    -Class          = Code To Add New Members
    -Object         =The Members
    -Application    =Web Application Registration

    Blog System 
    -Class          =Code to Add New post, Article,News, Information
    -Object         =Post,Article , News ,Information
    -Applicatin     =Blog System


    self vs $this

    self:
    -Refer to Current Class
    -Access Static Members
    -Not Use($) Because it's Not Represent a Variable But present Class Construction

    $this
    -Refer to Current Object
    -Access Non Static Members
    -Use ($) because it represent a Variable

*/

class AppleDevice
{

    //Proparties
    public $ram = '2GB';
    public $inch = '5 Inch';
    public $space = '16 GB';
    public $color = 'Black';


    public function changSpac($ra, $in, $sp, $co)
    {

        $this->ram = $ra;
        $this->inch = $in;
        $this->space = $sp;
        $this->color = $co;
    }
}

//Methods


$iphone7 = new AppleDevice();

$iphone7->changSpac('3GB', '5.5 Inch', '32 GB', 'Gold');




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