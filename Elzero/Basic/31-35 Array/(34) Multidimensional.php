<?php

$diet= array(
array(
    array("meat","milk","fish")
),
array(
    array("salt","kiwi","banan")),
array(
    array("rice","honey","suger")),
array(
    array("apple","milk","orange")),
);

echo "<pre>";
print_r($diet);
echo "</pre>";


echo $diet[1][0][1] . "<br>";    /* print kiwi */

echo $diet[3][0][2];  /* print orange */

echo "<pre>";
print_r($diet[2][0]);    /* print_r array contains ("rice","honey","suger") */
echo "</pre>";

echo "<hr>";

/* Multidimensional in Associative Array  */

$days=array(
   "Dayone" => array("salt","kiwi","banan"),
   "Daytwo" => array("meat","milk","fish"),
   "Daythree" => array("rice","honey","suger"),
   "Dayfour" => array("apple","wiiiii","orange"),
   "Dayfive" => array("juice","rabbit", "duck",array(
       "salt" => "10%",
       "duck" => "50%",
       "juice" => "60%"

   )),
);
echo "<pre>";
print_r($days);
echo "</pre>";


echo $days["Dayfive"][3]["juice"]."<br>"; /* print 60% */
echo $days["Dayfour"][1]."<br>" ;  /* print wiiiiii */
  


echo "<pre>";
print_r($days["Dayfive"][3]);              
echo "</pre>";
/* print_r array contain ("salt" => "10%",
                          "duck" => "50%",
                          "juice" => "60%" )*/