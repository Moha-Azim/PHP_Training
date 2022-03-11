<?php
/*
    file_put_contents(file,data,mode,context)
    Mode:   1- FILE_APPEND  => if file already exists, append the data to it - instead of overwriting it
            2- LOCK_EX  => Put an exclusive lock on the file while writing to it
            3- FILE_USE_INCLUDE_PATH => search for filename in the include directory
            
*/       

$file = "(68)test.txt";

file_put_contents($file , 'this is data forsssws me ---///' , FILE_APPEND | LOCK_EX);