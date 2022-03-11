<?php

/*
CREATE TABLE IF NOT EXISTS students (
    -> id int(11),
    -> name varchar(255),
    -> email varchar(255)
    -> );



DESCRIBE students;

SHOW COlUMNS FROM students;

SHOW FIELDS FROM students;



SHOW TABLE STATUS;


SHOW CREATE TABLE students;


DROP TABLE IF EXISTS students;



            Rename

RENAME TABLE students TO children,schools TO college;

ALTER TABLE  hi1 RENAME moha;


            ALTER 

ALTER TABLE hi1 ENGINE = MYISAM;                                   ==>     change the engine to table using alter 

ALTER TABLE students ADD password varchar(255) AFTER name;         ==>     add row  after name 

ALTER TABLE students ADD fir varchar(255) FIRST;                   ==>     add row  IN THE FIRST

ALTER TABLE students DROP fir;                                     ==>     Drop row

    [ CHANGE ]

-ALTER TABLE students CHANGE email email varchar(255) after id;     ==>     change  order 

    [ MODIFY ]
-ALTER TABLE students  MODIFY email char(50);


    Advanced 

ALTER TABLE students MODIFY name char(50),CHANGE id iduser int(11);  ==>    two different process in same code

ALTER TABLE students CONVERT TO CHARACTER SET utf8;                  ==>    convert to utf-8 collection

*/