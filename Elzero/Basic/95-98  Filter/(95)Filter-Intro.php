<?php

$name =  $_POST['username'];

echo filter_var($name ,FILTER_SANITIZE_STRING)."<br>";



echo "this is new login";