<?php

//

use Node as GlobalNode;

class Node
{
    public $item;
    public $next;
}

class LinkedList
{

    private $head;
    private $tail;
    private $count;


    public function __construct()
    {
        $this->count = 0;
    }

    public function isEmpty()
    {
        return $this->count == 0;
    }

    public function couter()
    {
        echo $this->count;
    }

    public function addAtFirst($v)
    {
        $newNode = new Node();
        $newNode->item = $v;

        if ($this->count == 0) {
            $newNode->next = NULL;
            $this->head = $newNode;
            $this->tail  = $newNode;
        } else {
            $newNode->next = $this->head;
            $this->head = $newNode;
        }
        $this->count++;
    }

    public function addAtEnd($v)
    {

        if ($this->count == 0) {
            $this->addAtFirst($v);
        } else {
            $newNode = new Node();
            $newNode->item = $v;
            $newNode->next = null;
            $this->tail->next = $newNode;
            $this->tail = $newNode;
            $this->count++;
        }
    }

    public function addInTo($ind, $val)
    {

        if ($ind >= $this->count) {
            $this->addAtEnd($val);
        } elseif ($ind <= 0) {
            $this->addAtFirst($val);
        } else {
            $newNode = new Node;
            $newNode->item = $val;

            $cur     = new Node;
            $cur     = $this->head;
            for ($i = 0; $i < $ind - 1; $i++) {
                $cur = $cur->next;
            }
            $newNode->next = $cur->next;
            $cur->next = $newNode;
        }
        $this->count++;
    }

    public function removeFirst()
    {
        if ($this->count == 0) {
            echo "cant remove it's Empty";
        } elseif ($this->count == 1) {
            $this->head = $this->tail = null;
            $this->count--;
        } else {
            $cur = new Node;
            $cur = $this->head;
            $this->head = $this->head->next;
            unset($cur);
            $this->count--;
        }
    }

    public function removeEnd()
    {
        if ($this->count == 0) {
            echo "cant remove it's Empty";
        } elseif ($this->count == 1) {
            $this->head = $this->tail = null;
            $this->count--;
        } else {
            $cur = new Node;
            $cur = $this->head;

            while ($cur->next != $this->tail) {
                $cur = $cur->next;
            }
            $this->tail = $cur;
            $cur->next = null;
            $this->count--;
        }
    }

    public function removeBtwn($ind)
    {
        if ($ind <= 0) {
            $this->removeFirst();
        } elseif ($ind >= $this->count - 1) {
            $this->removeEnd();
        } else {
            $cur = new Node;
            $pre = new Node;
            $cur = $this->head;

            for ($i = 1; $i < $ind; $i++) {
                $cur = $cur->next;
            }
            $pre = $cur;
            $cur = $pre->next;
            $pre->next = $cur->next;
            unset($cur);
            $this->count--;
        }
    }

    public function reverse()
    {
        $prev = new Node;
        $cur  = new Node;
        $post = new Node;


        $this->tail = $this->head;
        $cur = $this->head;
        $post = $cur->next;
        $prev = null;

        while ($cur != null) {
            $cur->next = $prev;
            $prev = $cur;
            $cur = $post;
            @$post = $post->next;
        }
        $this->head = $prev;
    }

    public function display()
    {

        $newNode = new Node();
        $newNode = $this->head;
        echo "Item in queue: [";
        while ($newNode != null) {
            echo $newNode->item . " ";
            $newNode = $newNode->next;
        }
        echo "]";
    }

    public function tail()
    {
        return $this->tail->item;
    }
}

$f = new LinkedList;




$f->addAtEnd(10);
$f->addAtEnd(20);
$f->addAtEnd(30);
$f->addAtEnd(40);

$f->addInTo(3, 6);

$f->addAtEnd(70);
$f->addAtEnd(80);

$f->addAtFirst(90);

$f->removeFirst();
$f->removeEnd();

$f->removeBtwn(66);

$f->reverse();
$f->display();

//$f->couter();
echo $f->tail();