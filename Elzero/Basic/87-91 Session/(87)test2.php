<?php
session_start();

echo  "oh Mr." .$_SESSION['username']." you'r favfood is ".$_SESSION['favfood']." again";

echo "<a href='(88)modify.php'> go to modify favfood </a>";