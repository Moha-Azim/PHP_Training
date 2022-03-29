<?php

class queueImple
{
    public $arr = [];
    private $max;
    public $tail;
    public $front = 0;
    private $coutner = 0;

    public function __construct($maxSize)
    {
        $this->max = $maxSize;
        $this->tail = ($this->max - 1);
    }



    private function isFull()
    {
        return $this->coutner ==  $this->max;
    }

    private function isEmpty()
    {
        return $this->coutner ==  0;
    }


    public function addOne($val)
    {
        if ($this->isFull()) {
            echo "It's full Can't add <br>";
        } else {
            $this->coutner++;
            $this->tail = ($this->tail + 1) %  $this->max;
            $this->arr[$this->tail] = $val;
        }
    }

    public function deletOne()
    {
        if (!$this->isEmpty()) {
            $this->coutner--;
            $this->front = ($this->front + 1) % $this->max;
        } else {
            echo "It's Empty Can't Delete <br>";
        }
    }


    public function pritnQueue()
    {

        echo "[";
        for ($i = $this->front; $i != $this->tail; $i = ($i + 1)  % $this->max) {

            echo $this->arr[$i] . " ";
        }
        echo  $this->arr[$i] . " " . "]";
    }

    public function getTail()
    {
        echo "<br>the tail is : " . $this->tail;
    }
    public function front()
    {
        echo "<br>the front is : " . $this->front;
    }
}

$hi = new queueImple(4);

$hi->addOne(10);
$hi->addOne(20);
$hi->addOne(30);
$hi->addOne(40);

$hi->deletOne();
$hi->deletOne();

$hi->addOne(60);
$hi->addOne(70);


$hi->pritnQueue();

$hi->front();
$hi->getTail();