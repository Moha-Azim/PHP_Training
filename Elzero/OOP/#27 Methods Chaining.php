<?php
/*

*/


class chaining{

    public $name;
    public $drive;


    public function poweron(){
        echo " Welcom let's Start ";
        return $this;
    }

    public function startmove(){
        echo " the speed is 50mph ";
        return $this;

    }

    public function stoptmove(){
        echo " good bye";
        return $this;
    }
}

$car = new chaining;

$car->poweron()->startmove()->stoptmove();

echo '<pre>';
print_r($car);
echo '</pre>';