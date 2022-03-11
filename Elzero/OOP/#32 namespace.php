<?php

require '#32nameSpace/Apple.php';
require '#32nameSpace/LG.php';
require '#32nameSpace/Sony.php';

$hardphone = new Sony\sayhi;    // just change the name and the company ((namespace)) will change
$hardphone->sayhello();
print_r($hardphone);