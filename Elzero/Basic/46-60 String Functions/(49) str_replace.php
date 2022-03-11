<?php
/*

    str_replace(Search , replace , string or array, counter); sensitive to capita/small letters
 
 */

 $str = "hi i learning PHP cuse the PHP is great languge and PHP is awesome i love PHP";
 echo $str."<br>";

 $rep = str_replace("PHP","JAVA",$str,$c);
 echo $rep. "<br>";
 echo "the number of words was changed is ".$c;

 echo "<hr>";

 $str2 = "hi i learning PHP cuse the PHP is great languge and PHP is awesome i love PHP";
 echo $str2."<br>";

 $exp = explode(" ",$str2);
 echo "<pre>";
 print_r ($exp);
 echo "</pre>";

 $rep2 = str_replace("PHP","Python",$exp);
 echo "<pre>";
 print_r ($rep2);
 echo "</pre>";

 echo "<hr>";

 $str3 = "hi#i@learning|PHP/cuse?the!PHP!is/great@languge|and|PHP@is#awesome?i/love@PHP";
 echo $str3."<br>";

 $array = array("!","@","#","/","|","?");

 $rep3 = str_replace($array, "<br> <br><br>",$str3,$conter);

 echo $rep3;