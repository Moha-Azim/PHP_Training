<?php

/*

    fseek(handle , offset , whence);
                            whence ==> SEEK_SET Default
                                   ==> SEEK_CUR
                                   ==> SEEK_END


*/



$handle = fopen('(77)SEEK.txt' ,'r+');



fseek($handle , 6,SEEK_SET);

fwrite($handle , 'a' );




fseek($handle, 4 ,SEEK_CUR);

fwrite($handle , 'e');




fseek($handle , -2 , SEEK_END);

fwrite($handle , 'e');