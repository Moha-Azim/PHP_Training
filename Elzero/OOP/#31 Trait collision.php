<?php

/*



*/

trait featureOne
{
    public function numNum()
    {
        echo 'this is method num ONE <br>';
    }
}

trait featureTwo
{
    public function numNum()
    {
        echo 'this is method num TWO <br>';
    }
}

class printNums
{
    use featureOne, featureTwo {
        //[trait name ] :: [method name] [key word insteadof] [ other trait name]
        featureOne::numNum insteadof featureTwo;

        //[trait name ] :: [Method name] [ as ] [ New name form method ]
        featureTwo::numNum as thenewname;
    }
}

$theWinner = new printNums;             // THE ERROR :  Trait method numNum has not been applied, because there are collisions with other trait methods on printNums in

echo $theWinner->numNum();

echo $theWinner->thenewname();