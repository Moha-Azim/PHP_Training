<?php

/*

    array_fill(index num , numberOfValue , value);

 */


 $fill1 = array_fill(0,10,"Moha");

 echo"<pre>";
print_r($fill1);
 echo"</pre>";

echo "<hr>";

 $fill2 = array_fill(3,5,array("hi","an","ab"));

 echo"<pre>";
print_r($fill2);
 echo"</pre>";

 echo "<hr>";

 $fill3 = array_fill(2,10,array_fill(5,10,"me"));

 echo"<pre>";
print_r($fill3);
 echo"</pre>";