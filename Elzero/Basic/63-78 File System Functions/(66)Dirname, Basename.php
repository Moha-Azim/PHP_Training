<?php
/*

    direname(Path); // give you Directory name

    basename(Path , Suffex) ;  if you put the suffex to the file that make the output shown without  the suffex
*/

require dirname(__FILE__ )."\(66)dirname\inc.php";
//in PHP version 7.0.0 we can use (__FILE__ , 2 ) num 2  mean  go  back two steps 
// or we can use this way 
//require __DIR__."\(66)dirname\inc.php"; //(__DIR__) working jsut on 5.3.0 PHP version

echo "<hr>";

echo basename(__FILE__ , '.php') . '<br>'; // i put the suffex so it's will not be in the site

if(basename(__FILE__) === '(66)Dirname, Basename.php'){
    echo ' you chose the right File'. '<br>';;
}