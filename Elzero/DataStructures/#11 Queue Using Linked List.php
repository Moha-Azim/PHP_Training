<?php

class Node
{
    public $item;
    public $next;
}

class queueList
{
    private $rare;
    private $front;
    private $counter = 0;


    public function isEmpy()
    {
        return $this->counter == 0;
    }

    public function inQueue($val)
    {
        $node = new Node;
        $node->item = $val;
        $node->next = null;

        if ($this->counter == 0) {
            $this->front =  $this->rare = $node;
        } else {
            $this->rare->next = $node;
            $this->rare = $node;
        }
        $this->counter++;
    }

    public function deQueue()
    {
        if ($this->isEmpy()) {
            echo "can't deQueue it's Empty";
        } else {
            if ($this->counter == 1) {
                $this->front = $this->rare = null;
                $this->counter = 0;
            } else {
                $this->front = $this->front->next;
                $this->counter--;
            }
        }
    }

    public function display()
    {

        $dis = new Node;
        $dis = $this->front;

        echo "Item in queue: [";
        while ($dis != null) {
            echo $dis->item . " ";
            $dis = $dis->next;
        }
        echo "]";
    }

    public function getLen()
    {
        return $this->counter;
    }
}

$firtQ = new queueList;
$firtQ->inQueue(10);
$firtQ->inQueue(20);
$firtQ->inQueue(30);

$firtQ->deQueue();
$firtQ->display();