<?php
//node structure
class Node
{
    public $data;
    public $next;
}

class LinkedList
{
    public $head;

    //constructor to create an empty LinkedList
    public function __construct()
    {
        $this->head = null;
    }

    //display the content of the list


    public function push($item)
    {

        $nodee = new Node();
        $nodee->data = $item;
        $nodee->next = $this->head;
        $this->head = $nodee;
    }

    protected function isEmpty()
    {
        return $this->head == null;
    }

    public function pop()
    {

        $temp = new Node();
        $temp = $this->head;
        $this->head = $temp->next;
        unset($temp);
    }

    public function PrintList()
    {
        $temp = new Node();
        $temp = $this->head;
        if (!$this->isEmpty()) {
            echo "The list contains: ";
            while ($temp != null) {
                echo $temp->data . " ";
                $temp = $temp->next;
            }
            echo "\n";
        } else {
            echo "The list is empty.\n";
        }
    }
};

// test the code  
//create an empty LinkedList
$MyList = new LinkedList();

$MyList->push(100);
$MyList->push(200);
$MyList->push(300);
$MyList->pop();


//print the content of list
$MyList->PrintList();








// //Add first node.
// $first = new Node();
// $first->data = 10;
// $first->next = null;
// //linking with head node
// $MyList->head = null;

// //Add second node.
// $second = new Node();
// $second->data = 20;
// $second->next = null;
// //linking with first node
// $second->next = $first;
// $MyList->head = $second;


// //Add third node.
// $third = new Node();
// $third->data = 30;
// $third->next = null;
// //linking with second node
// $third->next = $second;
// $MyList->head = $third;