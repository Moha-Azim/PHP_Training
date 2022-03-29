<?php

/*
    Magic Methods
    - Method With Special Name Start With Double Underscore[ __ ]

    Get:
    -Called When Getting  a Property not Accessible Or not Found 
    -Accept one Parameters [ $Prop]  لما تحاول تطبعها

    Set:
    -Called When Setting a Value To a Property Not Accessible or Not Found 
    -Accept two Parameters [ $prop , $value ] لما تحاول تحطلها قيمة 

    */


class users
{

    public $name = "mohammad";
    public $ram = '333GB';
    private $head;

    public function __get($sese)
    {
        echo "now Can't echo this bro " . $sese;
    }
}

$mymy = new users();

echo $mymy->head;
echo '<pre>';
print_r($mymy);
echo '</pre>';


echo '<hr> <hr> <hr>';

class hicl
{

    public $name = "mohammad";
    public $ram = '333GB';
    private $priv = 'hell no';

    public function __set($para, $value)
    {
        echo 'that shoud not be setting [[' . $para . ']] and that value [[' . $value . ']]<br>';
    }
}

$you = new hicl();

$you->priv = "mnonono";
$you->nothere = "i shuld not be here";

echo '<pre>';
print_r($you);
echo '</pre>';