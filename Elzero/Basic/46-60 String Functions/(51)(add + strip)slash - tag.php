<?php
/*
addslashes(string); ==> to add back slashes to escape the '  or another sign

stripslashes(string);  ==> to remove the back slashes that was  addslashes function add it 

strip_tags(string , Allow);  to escape the tages like (<b></b>)  and the Allow to not escaping one or more of tages 

*/

$str = "I \' Love '' PHP' ";
echo "$str <br>";

$addstr = addslashes($str);

echo "$addstr <br>";

echo "<hr>";


$strip = stripslashes($addstr);

echo "$strip <br>";


echo "<hr>";

$sstag = "<b> HI </b> <i> my name is </i> <br> Mohammad  ,   <h4>ahmad </h4>";
echo $sstag . "<br>";

$strip_tags = strip_tags($sstag , "<b><i>");

echo $strip_tags;