<?php

/*

/////date(); function it's a format for time(); function

date(fomant , timeStamp);

*/
date_default_timezone_set('Asia/Amman');
$dateNow = date('Y-m-d \c\l\o\c\k h:i:s');
echo $dateNow."<br>";


$week = time() + (7*24*60*60) ;

$nextWeek = date('Y-m-d  h:i:s' , $week );

echo $nextWeek;