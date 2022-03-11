<?php

/*

    strcmp(String 1 , String 2 );  // compare
    
    strncmp(String 1 , String 2 , number of letter you want to compare)



    0 mean the to Strings is equals

    less than 0 mean  the second string have more letters

    More than 0 mean the first string have more letters

 */


 $str1= "PHP";

 $str2 = "PHP";

 echo strcmp($str1 , $str2) . "<br/>";


 
 $str1= "PHP";

 $str2 = "PHPs";
 echo strcmp($str1 , $str2) . "<br/>";


  
 $str1= "PHPa";

 $str2 = "PHP";
 echo strcmp($str1 , $str2) . "<br/>";


 echo "<hr>";

 // strncmp();

 $str1= "PHPa";

 $str2 = "PHP";

 $cmp = strncmp($str1 , $str2 , 3);   // ==>  it's will be 0   cuse you compare only the first three characters
 echo $cmp . "<br/>";


 $mo= "PHPs";

 $os = "PHPasss";

 $cmp = strncmp($os , $mo ,4);   
 echo $cmp . "<br/>";