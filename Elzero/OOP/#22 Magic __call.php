<?php
/*
    
    Magic Methods
        - Method With Special Name Start With Double Underscore[ __ ]

    Call:     call($Method name , $parameters for the method) 
                    استدعاء
    - Called When Invoking Function Not Accessible Or Not Found
    - Accept two Parameters [ $MethodName , $Params ]

*/


class users{
    
    public $name; 
    public $ram;
    
    public function __call($method,$param){
        echo 'this function ['.$method.'] is undifined or not accessible <br>';
        print_r($param);
        echo "<br>";
    }

    public function saymyname($na){
        $this->name= $na;
        echo 'your name is '.$na;
    }
}

$mymy = new users;
$mymy -> asdfasdf('mmmmm','papapa');
$mymy->saymyname('mohammad');