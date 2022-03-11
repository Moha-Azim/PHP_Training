<?php

/*

    substr(String[Req] , Start[Req] , length[optional]);

*/

$str = "i love PHP so much Because PHP is Famous and cool";

//echo stripos($str , "PHP" , 8);

echo substr($str , 27 , 6) . "<br>"; // PHP is


echo substr($str , -4). "<br>"; // cool


//echo stripos($str , "famous");
echo substr($str , 34 ,6 ). "<br>";  // Famous

echo substr($str , -8 ,-5). "<br>";  //and