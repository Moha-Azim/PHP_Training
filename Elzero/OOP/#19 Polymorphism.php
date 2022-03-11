<?php

/*

    #18 ==>    https://youtu.be/rb2Cx73UJa0?list=PLDoPjvoNmBAxXTPncg0W4lhVS32LO_xtQ

    Polymorphism
    - Have Methods Without Body code


        intervface ==> to create an interface
        implements ==> to make class refer to interface
*/

interface DBconnection
{

    public function getUsersName();
    public function getPhonesNum();            // YOU HAVE three types of data bases and you can change between them any time
    public function getUsersEmail();
}

class MYSQL implements DBconnection
{

    public function getUsersName()
    {
        echo ' SELECT * FROM username ';
    }
    public function getPhonesNum()
    {
        echo ' SELECT * FROM PhonesNum ';
    }
    public function getUsersEmail()
    {
        echo ' SELECT * FROM UsersEmail ';
    }
}


class NOSQL implements DBconnection
{

    public function getUsersName()
    {
        echo ' NO * NO username';
    }
    public function getPhonesNum()
    {
        echo ' NO * NO PhonesNum';
    }
    public function getUsersEmail()
    {
        echo ' NO * NO UsersEmail';
    }
}



class NODE implements DBconnection
{

    public function getUsersName()
    {
        echo ' NODE * NODE username ';
    }
    public function getPhonesNum()
    {
        echo ' NODE * NODE PhonesNum ';
    }
    public function getUsersEmail()
    {
        echo ' NODE * NODE UsersEmail ';
    }
}


$database = new NODE;    // jsut change the name and will change the whole system of data base in your website
$database->getUsersName();
$database->getPhonesNum();
$database->getUsersEmail();



echo '<pre>';
print_r($database);
echo '</pre>';