<?php

/*

    copy(old File , New File );  it's just  for files  not for Folder or  directory

    rename(old Name , New Name  , context);  you can chang the Directory to your file and chang name usnig this function
 */

 if(!copy('(70)test.txt'  ,  '(70)test_theCopy.txt' )){
     echo "the  file does't copied";
 }else{
     echo "the file was copied";
 }


 copy(__FILE__ , __DIR__.'/(70)BackUp/(70)BackUp.txt'); // how to make back up to your file 


 echo "<hr>";

 rename("(70)Rename.txt" , __DIR__.'/(70)BackUp/(70)thisRename.txt');