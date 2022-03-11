<?php


/* 
    implode(Separator , array);
    join(Separator , array);

    [join]  donig the same thing that [implode] do
*/

$arr = array("ahmad","samy","Khaled","mohammad");

$str = implode(" & ",$arr);

echo "hello the new employee is :". $str."<br>";



$str = join(" ",$arr);   

echo "hello : ". $str."<br>";