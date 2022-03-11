<form action='(69)file_get_contents.php' method="POST">

    <input type="password" name="sse">
    <input type="submit">
</form>


<?php
/*
    file_get_contents(path, include_Path =>false , context => NULL  , offset , max_length)

*/

// $Name = file_get_contents('(69)Read.txt' , false , NULL , 11 , 8);

$Name = $_POST['sse'];

echo $Name;

file_put_contents('(69)write.txt' , $Name , FILE_APPEND);