<?php
class Node
{
    public $item;
    public $prev;
    public $next;
}

class doublyList
{

    public $head;
    public $tail;
    public $count;

    public function isEmpty()
    {
        return $this->count == 0;
    }

    public function counter()
    {
        return $this->count;
    }

    public function addAtFirst($val)
    {
        $newNode = new Node;
        $newNode->item = $val;
        if ($this->isEmpty()) {
            $newNode->prev = null;
            $newNode->next = null;
            $this->head = $newNode;
            $this->tail = $newNode;
        } else {
            $this->head->prev = $newNode;
            $newNode->next = $this->head;
            $this->head = $newNode;
            $this->head->prev = null;
        }
        $this->count++;
    }


    public function addAtLast($val)
    {
        $newNode = new Node;
        $newNode->item = $val;
        if ($this->isEmpty()) {
            $newNode->prev = null;
            $newNode->next = null;
            $this->head = $newNode;
            $this->tail = $newNode;
        } else {
            $this->tail->next = $newNode;
            $newNode->prev = $this->tail;
            $this->tail = $newNode;
            $this->tail->next = null;
        }
        $this->count++;
    }

    public function addAtIndex($val, $ind)
    {
        if (0 > $ind || $ind >= $this->count) {
            echo "Out of Rang";
        } elseif ($ind == 0) {
            $this->addAtFirst($val);
        } elseif ($ind == $this->count - 1) {
            $this->addAtLast($val);
        } else {
            $newNode = new Node;
            $cur = new Node;
            $cur = $this->head;
            $newNode->item = $val;
            for ($i = 1; $i < $ind; $i++) {
                $cur = $cur->next;
            }

            $newNode->prev = $cur;
            $newNode->next = $cur->next;
            $cur->next = $newNode;
            $newNode->next->prev = $newNode;
            $this->count++;
        }
    }

    public function removeFrist()
    {
        if ($this->isEmpty()) {
            echo "the list is Empty Can't remove";
        } elseif ($this->count == 1) {
            $this->tail = $this->head = null;
            $this->count--;
        } else {
            $cur = new Node;
            $cur = $this->head;
            $this->head = $cur->next;
            $this->head->prev = null;
            unset($cur);
            $this->count--;
        }
    }

    public function removeLast()
    {
        if ($this->isEmpty()) {
            echo "the list is Empty Can't remove L";
        } elseif ($this->count == 1) {
            $this->tail = $this->head = null;
            $this->count--;
        } else {
            $cur = new Node;
            $cur = $this->tail;
            $this->tail = $cur->prev;
            $this->tail->next = null;
            unset($cur);
            $this->count--;
        }
    }


    public function removeAt($val)
    {
        if ($this->isEmpty()) {
            echo "the list is Empty Can't remove At";
        } elseif ($this->count == 1) {
            if ($val == $this->tail->item) {
                $this->removeLast();
            } else {
                return -1;
            }
        } else {
            $cur = new Node;
            $cur = $this->head;
            while ($cur != null) {
                if ($cur->item != $val) {
                    $cur = $cur->next;
                } else {
                    break;
                }
            }
            if ($cur == null) {
                return -1;
            } elseif ($cur == $this->tail) {
                $this->removeLast();
            } elseif ($cur == $this->head) {
                $this->removeFrist();
            } else {
                $cur->next->prev = $cur->prev;
                $cur->prev->next = $cur->next;
                unset($cur);
                $this->count--;
            }
        }
    }


    public function display()
    {
        $dis = new Node;

        $dis = $this->head;
        echo "[";
        if ($this->count == 0) {
            echo "Empty List ]";
            exit;
        }
        while ($dis != null) {
            echo $dis->item . " ";
            $dis = $dis->next;
        }
        echo "]";
    }
}

$f = new doublyList;

$f->addAtFirst(10);
$f->addAtFirst(20);
$f->addAtFirst(30);
$f->addAtFirst(40);

$f->addAtLast(50);

$f->addAtIndex(55, 0);

$f->removeFrist();
$f->removeLast();

$f->removeAt(30);

$f->display();