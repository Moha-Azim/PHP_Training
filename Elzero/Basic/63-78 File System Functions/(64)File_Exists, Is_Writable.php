<?php
//echo dirname(__FILE__);

$file = "(64)moh.txt";

if(file_exists($file)){
    echo 'the file named [ '. $file .' ] was found';
}else{
    echo 'there in no file named [ ' . $file . ' ]';
}

echo "<hr>";


if (is_writeable($file)){
    file_put_contents($file , "Hello this is from php file_put_contents");
    echo "the file named [ " . $file. "] is writeable";
}else{
    echo "the file named [".$file."] is not writeable";
}