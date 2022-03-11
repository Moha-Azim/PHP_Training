<?php

/*

    strpos(String[Requird] , Search word[Required] , Offset[Optional]);

    stripos(String[Requird] , Search word[Required] , Offset[Optional]);

    strrpos(String[Requird] , Search word[Required] , Offset[Optional]);

    strripos(String[Requird] , Search word[Required] , Offset[Optional]);
*/


$str = "i am mohammad love PHP and this is best cours for learning PHP thanks PHP community";

$var1= strpos($str , "PHP", 5);

echo $var1 . "<br>";


$var2= stripos($str , "pHP", 10);

echo $var2. "<br>";



$var3= strrpos($str , "PHP" , -4);

echo $var3. "<br>";



$var3= strripos($str , "php" , -33);

echo $var3. "<br>";