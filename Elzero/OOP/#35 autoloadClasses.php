<?php


// require 'classes/test1.class.php';
// require 'classes/test2.class.php';
// require 'classes/test3.class.php';

spl_autoload_register(function ($class) {
    require 'classes/' . $class . '.class.php';
});

$onon = new test2;

$hihi = new test1;
print_r($hihi);
print_r($onon);