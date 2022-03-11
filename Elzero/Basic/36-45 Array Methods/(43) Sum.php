<?php

/*

    array_sum(Array name);

*/

$sumMe = array(10,20,50,100,50,3);

echo "<pre>";
print_r($sumMe);
echo "</pre>";

echo "<pre>";
echo array_sum($sumMe);
echo "</pre>";

echo "<hr>";

$sumMe2 = array(10,"hia",20,50.5,"ahmad","100","Khaled",50,3); /* the 100 is string and it's counted  */

echo "<pre>";
print_r($sumMe2);
echo "</pre>";

echo "<pre>";
echo array_sum($sumMe2);
echo "</pre>";