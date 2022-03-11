<?php

/*
    Magic Methods
    - Method With Special Name Start With Double Underscore[ __ ]

    Magic Method Clone & Clone keyword:
    -Typical Copy obfect In PHP Words By Reference.
    Means Both ( Main And Copied ) Object Will Be Interlinked.

    - The clone  operation creates a so-called shallow copy of the original instace,
    which means that it constructs a new object with all fields duplicated

    -The above technique works with a class having data members that are of intrinsec type i.e. int,
    boolean, string,float, etc... However, this technique will not work with a class that has a data
    member whhich is an [[ object of another class]]. In such a scenario, the cloned object continues to share

    -Magic Method Clone Executes When Object Cloning Is Prefomed. 


*/


//Clone


class newone{
    public $name;
    public $email;

    public function __construct($n,$e){
        $this->name = $n;
        $this->email = $e;
    }

}

$main = new newone('mohamad', 'moha@lion.com');

$copy = clone $main;

$copy -> name ="lelelelel";

echo '<pre>';
print_r($main);
echo '</pre>';


echo '<pre>';
print_r($copy);
echo '</pre>';