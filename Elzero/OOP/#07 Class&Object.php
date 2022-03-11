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


    Web Application Registration
    -Class          = Code To Add New Members
    -Object         =The Members
    -Application    =Web Application Registration

    Blog System 
    -Class          =Code to Add New post, Article,News, Information 
    -Object         =Post,Article , News ,Information
    -Applicatin     =Blog System

*/

class AppleDevice1
{

    //Proparties
    public $ram = '2GB';
    public $inch = '5 Inch';
    public $space = '16 GB';
    public $color = 'Black';

    //Methods
    public function doubleHomePressed()
    {
        echo 'you pressed on Home bottom twice';
    }
}

$iphone7 = new AppleDevice1();

$iphone7->ram = '3GB';
$iphone7->inch = '5.5 Inch';
$iphone7->space = '32 GB';
$iphone7->color = 'Gold';
$iphone7->doubleHomePressed();

echo '<pre>';

var_dump($iphone7);

echo '</pre>';

echo "<hr>";

$iphone8 = new AppleDevice1();

$iphone8->ram = "6GB";
$iphone8->inch = "6Inch";
$iphone8->space = '256GB';
$iphone8->color = 'Silver';

echo '<pre>';

var_dump($iphone8);

echo '</pre>';


echo "<hr>";


$iphone = new AppleDevice1();


echo '<pre>';

var_dump($iphone);

echo '</pre>';