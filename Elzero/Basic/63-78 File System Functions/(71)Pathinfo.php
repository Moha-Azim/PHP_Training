<?php

/* 
    pathinfo(path , options)
*/


echo "<pre>";

print_r(pathinfo(__FILE__));

echo "</pre>";

echo "<hr>";


 $fileinfo = pathinfo(__FILE__);

 
 echo $fileinfo[dirname] . "<br>";
 echo $fileinfo[basename] . "<br>";
 echo $fileinfo[extension] . "<br>";
 echo $fileinfo[filename] . "<br>";

echo "<hr>";

echo(pathinfo(__FILE__ , PATHINFO_DIRNAME));