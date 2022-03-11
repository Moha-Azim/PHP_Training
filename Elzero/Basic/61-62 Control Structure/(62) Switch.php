<?php


$browser = "edge";

switch ($browser){
    case "firefox":
    case "mozilla":
    case "zella":
    echo "Your Default browser is FireFox";
    break;
    
    case "chrome":
    case "google chrome":
    echo "Your Default browser is Google chorme";
    break;

    case "edge":
    case "microsoft":
    echo "Your Default browser is Edge";
    break;

    default:
    echo "Choose The default browser Please";
}