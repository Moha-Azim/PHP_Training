<?php

/*

    sleep(seconds);   use it when you doing request on another server and you don't be blocked

    usleep(Microseconds);

    time_sleep_until(time() + 5);

*/


function checkfile(){
    if(file_exists('sleep.txt')){
        echo "we found your file";
    }else{
        usleep(3000000);
        checkfile();
    }
}

echo checkfile();


// Maximum execution time of 30 seconds exceeded   [this time could be change put it's important to stop the loop usnig server ]