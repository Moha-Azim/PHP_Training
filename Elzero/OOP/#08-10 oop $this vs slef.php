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

class AppleDevic
{

    //Proparties
    public $ram = '2GB';
    public $inch = '5 Inch';
    public $space = '16 GB';
    public $color = 'Black';
    public $ownerName;

    // Constant 
    const OWNERNAME = 5;




    //Methods
    public function setownerName()
    {
        if (strlen($this->ownerName) < self::OWNERNAME) {
            echo 'owner name must be more than ' . self::OWNERNAME . ' characters';
        } else {
            echo 'your name has been set';
        }
    }
}

$iphone7 = new AppleDevic();

$iphone7->ram = '3GB';
$iphone7->inch = '5.5 Inch';
$iphone7->space = '32 GB';
$iphone7->color = 'Gold';
$iphone7->ownerName = 'moha';
$iphone7->setownerName();



echo '<pre>';

var_dump($iphone7);

echo '</pre>';

echo "<hr>";

$iphone8 = new AppleDevic();

$iphone8->ram = "6GB";
$iphone8->inch = "6Inch";
$iphone8->space = '256GB';
$iphone8->color = 'Silver';
$iphone8->setownerName();
echo '<pre>';

var_dump($iphone8);

echo '</pre>';


echo "<hr>";


$iphone = new AppleDevic();


echo '<pre>';

var_dump($iphone);

echo '</pre>';