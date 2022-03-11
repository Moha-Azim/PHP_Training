<?php


/* for loop  lesson 20 */

for($i=0; $i<=10 ; $i++ ){
    echo "hi ".$i."<br>"; 
}

?>

<!DOCTYPE html>
<html lang="en">

<body>
    <h1> Select list wiht for loop </h1>
    <select name="year">
        <?php 
        
            for($year =1900; $year <= 2021 ; $year++ ){
                echo "<option value='$year'>".$year."</option>";
                
            }
            

        ?>
    </select><br><br><br>



</body>

</html>

<?php  
echo "<h1>Make urder list using for loop</h1>";

$lang = array("HTML","Css","JavaScript","PHP","React");
            

        echo "<ul>";
            for($la=0; $la < count($lang) ; $la++){
                echo "<li>".$lang[$la]."</li>";
            }
        echo "</ul>";



          
          


 ?>