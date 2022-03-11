<?php

/*

ALTER TABLE students MODIFY name varchar(255) NOT NULL;

ALTER TABLE students ADD UNIQUE (name,email);   ==> if you facing a Error says Duplicate entry than because you have two identical rows

ALTER TABLE students DROP INDEX name;      ==> to remove the unique 


 ALTER TABLE students ADD test varchar(255) NOT NULL UNIQUE;   ==> TWO  IN ONE :)





                PRIMARY KEY 

CREATE TABLE teachers (
    -> idt int(11) NOT NULL ,
    -> name varchar(255) NOT NULL UNIQUE,
    -> PRIMARY KEY (idt)
    -> );

    CREATE TABLE teachers (
    -> idt int(11) NOT NULL PRIMARY KEY ,
    -> name varchar(255) NOT NULL UNIQUE
    -> );


    ALTER TABLE teachers DROP PRIMARY KEY;

    ALTER TABLE teachers ADD PRIMARY KEY (idt);

    ALTER TABLE teachers ADD did int(11) NOT NULL PRIMARY KEY;
*/


            