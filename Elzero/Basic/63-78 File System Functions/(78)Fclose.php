<?php

/*

    fopen(fileName=>req , mode =>req , include_path , context)

    fread(Handle, length);

    fwrite(Handle, string , length);

    fseek(handle , offset , whence);
                            whence ==> SEEK_SET Default
                                   ==> SEEK_CUR
                                   ==> SEEK_END

    fclose(handle);

    
    Modes:

    r :Read Only Starting From Beginning of The file [file must be exist]
    r+;Read & Write starting From beginning of the file [file Must be exist]
    w :Write Only [Open & Clear the Content] + [Creat the file if it's Not exist]
    w+ :Write & Read  [Open & Clear the Content] + [Creat the file if it's Not exist]
    a : Write Only [Open & add content in the end of file] + [Creat the file if it's Not exist]
    a+:Write & Read [Open & add content in the end of file] + [Creat the file if it's Not exist]
    x :Write Only [Create a New file ] + [File must Not Be Exist or give Error]
    x+:Write & Read [Create a New file ] + [File must Not Be Exist or give Error]


Handle Line End:

Unix : \n
windows:\r\n
Mac: \r

*/

$handle = fopen('(78)fclose.txt' ,'r');

echo fread($handle , 4);

fclose($handle);