<?php

/*
exit('Custom Error message');

                // exit and die  do the same job  don't forget to use @ with them

die('Custom Error message');

*/


$handle = @fopen('die.txt' , 'r')
or die('file not found');

echo 'this is after opining the file';