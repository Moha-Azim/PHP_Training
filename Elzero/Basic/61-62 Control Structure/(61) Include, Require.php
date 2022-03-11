<?php

/* 
    use  you want to use code is  already in another php file 
*/

include("(61)test.php"); // if the file name Wrong  that will make a Warning  and the code after include will be still runing  
echo "<br> hello <br>";
include_once("(61)test.php"); // check the new line include_once make a <br>
echo "<br>";

require("(61)test2.php"); // if the file name Wrong  that will make a fatal Error   code will stop  

echo "hello <br>";

require_once("(61)test2.php");