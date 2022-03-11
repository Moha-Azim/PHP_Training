<?php

trait sayhi{
    public function hihi(){
        echo 'welcom form trait<br>';
    }
}

class Iphone{
    public function hihi(){
        echo 'hello form the class<br>';
    }
}


class test_priority extends Iphone{
    use sayhi;
}


$phone = new  test_priority;  // give the priority to the trait
$phone->hihi();
echo '<pre>';
print_r($phone);
echo '</pre>';