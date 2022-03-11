<?php

session_start();
echo "you'r favourite food now is ".$_SESSION['favfood']. "<br>";

print_r($_SESSION) . "<br>";

echo "<a href='(89)End - Destroy Session.php'> End session </a>";