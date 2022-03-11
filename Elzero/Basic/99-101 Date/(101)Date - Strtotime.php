<?php

/*

    strtotime(date , now);

*/


date_default_timezone_set('Asia/Amman');
echo date('\t\o\d\a\y \i\s Y-m-d h:i:s ') . "<br>";

$oldWay = time() + (2 * 24 * 60 * 60 + (3 *60 *60));
$newWay = strtotime('+2 day 3hour');
$newWay2 = strtotime('next week');
$newWay3 = strtotime('next sunday');
$newWay4 = strtotime('last monday');



echo date(' Y-m-d h:i:s' , $newWay4);