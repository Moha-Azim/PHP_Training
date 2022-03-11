<?php


/* 

$languages = array(
    "$key" => "$value",
    "$key" => "$value",
    "$key" => "$value",
    "$key" => "$value",
    
);

   $Key Must Be Unique 

   $Value Can Be Repeated
*/



$languages = array(
    "Html" => "90%",
    "Css" => "80%",
    "Javascript" => "60%",
    "PHP" => "45%",
    "Sql" => "60%"
);
$languages["hi adding"] =" 100%";  /* Adding new Value  */
$languages["Html"] ="70%";     /* Repleasing Value  */
$languages["Html"] ="60%";     /* Repleasing Value  */

echo "<ul>";
foreach($languages as $key => $value){
    echo "<li>".$key. " => " .$value."</li>";
}
echo "</ul>";