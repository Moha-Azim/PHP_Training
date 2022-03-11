<?php

/*
    array_rand(arrayName,number of value);
*/


$sumMe2 = array(10,"hia",20,50.5,"ahmad","100","Khaled",50,3);

$raa= array_rand($sumMe2,3);

echo $sumMe2[$raa[0]]."<br>";
echo $sumMe2[$raa[1]]."<br>";
echo $sumMe2[$raa[2]]."<br>";