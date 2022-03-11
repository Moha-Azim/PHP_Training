<?php 


$var1 = 500;
$var1 = $var1 + 20;
$var1 .="<br>"; // Check lesson 7  Concatenation
echo $var1;

$var2 = 500;
$var2 +=20;
echo $var2."<br>";


// Currency converter 

// from jod to usd
$jodTousd=2000;
$jodTousd*=1.41;
$jodTousd.=" USD";
echo  $jodTousd . "<br>"  ;

//from usd to jod
$usdTojod=500;
$usdTojod*=0.70900;
$usdTojod.=" JOD";
echo $usdTojod;