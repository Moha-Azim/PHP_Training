 <?php
 
 /*
 Arithmetic Operators
 [ + ] Addition
 [ - ] Subtraction
 [ * ] Multiplication
 [ / ] Division
 [ % ] Modulus
 */

 $var1=100;
 $var2= 400;

 echo $var1  + $var2 . "<br>";
 echo $var1  - $var2 . "<br>";
 echo $var1  * $var2 . "<br>";
 echo $var1  / $var2. "<br>";
 echo $var1  % $var2. "<br>";

 if ($var1 % $var2 == 100 ){
     echo "True";
 }


 /*
 /////[ = ] Assigment Operator

 Comparison Operators 
 [ == ] Equal
 [ != ] Not Equal
 [ <> ] Not Equal
 [ === ] Identical
 [ !== ] Not Identical
 [ > ] Greater Than
 [ >= ] Grater Than or Equal
 [ < ]  Less Than
 [ <= ] Less than or Equal
 

*/ 


/* Increment / Decrement Operators

  [++$var]  Pre Increment
  [$var++]  Post Increment
  [--$var] Pre Decreament
  [$var--] Post Decrement
*/
echo "<br>  <br>";

echo $var1++."<br>" ;
echo $var1++."<br>" ;
echo $var1++."<br>" ;
echo $var1."<br>";
echo $var1;


/* Logical Operator 

[ and ] Condition 1 And Condition 2 
[ && ] Condition 1 And Condition 2 ==> best (and)
[ or ] Condition 1 or Condition 2
[ || ] Condition 1 or Condition 2 ==> best (or)
[ xor ]Condition 1 or Condition 2 but not both of them
[ ! ] Not
*/
echo "<br>  <br>";


$age = 100;
$ex = 3;
$salary= 1500;

if($age > 19 && $salary>1000 ){
    echo "accepted";
}

/* Error control Operator 

    [check lesson 17] 

*/
echo "<br>  <br>";
/* String Operator
[ . ] Concatenate 2 Strings
[ .= ] Concatenate
*/
$msg1 = "Hello there";
$msg2 = " How you doing"; 

echo $msg1.$msg2;

echo "<br>  <br>";


$msgall = "Mohammad Azem";

$msgall .= " && hi";
echo $msgall;