<?php
/* lesson 20 */

for($i=1; $i<=7;$i++){
    echo "hello ".$i."<br>";
}
echo "<hr> <hr>";



/* lesson 21 */
$i=1;
for(; ;){
    if($i > 7){
        break;
    }
    echo "hello ".$i."<br>";
    $i++;
}
echo "<hr> <hr>";



/* lesson 22 */

$w=1;
while($w < 7){
    echo "this is while ".$w."<br>";
    $w++;
}

echo "<hr>";

$end=1;
while($end < 7):
    echo "end while ".$end."<br>";
    $end++;
endwhile;



echo "<hr> <hr>";

/* lesson 23 */

$d=1;

do{
    echo "DoWhile" .$d."<br>";
    $d++;
}while($d < 7);


echo "<hr> <hr>";


/* lesson 24 */

$ar = array( "moha" => "mohammad","killo" => "khalil" , "medo" => "mahmoud");

foreach($ar as $value){
    echo $value."<br>";
}
echo "<hr> ";

foreach($ar as $key => $val){
    echo $key." is a nick name for ".$val."<br>";
}