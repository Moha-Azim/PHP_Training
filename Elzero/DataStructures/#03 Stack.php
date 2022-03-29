<?php
// Stack   last end first out   LIFO


// #03 Stack Implementation

class stack
{

    private $top;

    private $limet;

    public $items = [];

    public function __construct($limet)
    {
        $this->top = -1;
        $this->limet = $limet;
    }

    public function push($it)
    {
        if ($this->top + 1 < $this->limet) {
            $this->top += 1;

            $this->items[$this->top] = $it;

            //return $this->items;
        } else {
            echo "the stack is full <br>";
        }
    }

    public function isEmpty()
    {
        if ($this->top == -1) {
            return true;
        } else {
            return false;
        }
    }

    public function pop()
    {
        if ($this->isEmpty()) {
            return "stack is Empty";
        } else {
            $this->top -= 1;
        }
    }

    public function pop2(&$ele)
    {
        if ($this->isEmpty()) {
            echo "stack is Empty";
        } else {
            $ele =  $this->items[$this->top];
            $this->top -= 1;
        }
    }
    public function getTop()
    {
        if ($this->isEmpty()) {
            echo "stack is Empty No get Top";
        } else {
            echo $this->items[$this->top];
        }
    }
    public function print()
    {
        echo "[";
        for ($i = $this->top; $i >= 0; $i--) {
            echo "'" . $this->items[$i] . "' , ";
        }
        echo "]";
    }
}


$s = new stack(5);
$s->push(1);
$s->push(2);
$s->push(3);
$s->push(4);
$s->push(5);
$s->pop2($sse);
echo $sse . "<br>";
$s->getTop();


$s->print();





// function sdf($fuuu, &$hi)
// {


//     $hi = $fuuu[0];
//     //return $hi;
// }

// echo sdf([2, 3], $ff);

// echo $ff;