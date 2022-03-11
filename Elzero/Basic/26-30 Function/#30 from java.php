<?php
/*
rest Parameter
*/

 $array=array (50,40,40);

 if(is_array($array) == TRUE){
     echo hello ."<br>";
 }

 function sums(...$nums){
     $result = 0;
     for($i=0 ; $i < count($nums) ; $i++ ){
         $result += $nums[$i];
     }
     return $result;
 }

 echo sums(50 ,30,20,30);