<?php
/*
    Magic Methods
    - Method With Special Name Start With Double Underscore[ __ ]

    Construct:
    --- Called When Object Is Created  // يعمل  اول ما يشتغل الاوبجيكت  من دون استدعائه حتى
    --- Can be inherited

    Destruct:
    --- Called When Object is Destroyed
*/


class makedevice
{
    public $name;
    public $ram;

    public function __construct($na, $ra)
    {
        $this->name = $na;
        $this->ram = $ra;
        echo 'hello ' . $na . 'your device have a ' . $ra . ' RAM <br> <br>';
    }
}


class extrasony extends makedevice
{
}



$mysony = new makedevice('MOHA', '3GB');

$exexsony = new extrasony('Ali', '16GB');  // --- Can be inherited !!!!!!