<?php

class arrayListType
{

    private $Max_Size, $length, $arr = array();

    public function __construct($size)
    {
        $this->Max_Size = $size;
        $this->length = 0;
    }

    public function __destruct()
    {

        unset($this->arr);
        $this->length = 0;
    }

    public function isEmpty()
    {
        return $this->length == 0;
    }

    public function isFull()
    {
        return ($this->length == $this->Max_Size);
    }

    public function insertAt($ind, $val)
    {
        if ($ind < 0 || $ind > $this->Max_Size - 1) {
            echo "Out of range to add";
        } else {
            if ($ind >= $this->length - 1) {
                $this->arr[$ind] = $val;
                $this->length++;
            } else {
                for ($i = $this->length - 1; $i > $ind; $i--) {
                    $this->arr[$i + 1] = $this->arr[$i];
                }
                $this->arr[$ind] = $val;
            }
        }
    }

    public function removeAt($ind)
    {
        if ($this->isEmpty()) {
            echo "the arrList is Empty";
        } elseif ($ind < 0 || $ind > $this->length) {
            echo "Out of range to delete";
        } else {
            for ($i = $ind; $i < $this->length - 1; $i++) {
                $this->arr[$i] = $this->arr[$i + 1];
            }
            $this->length--;
        }
    }

    public function getLenght()
    {
        return $this->length;
    }


    public function disply()
    {
        echo "[";
        for ($x = 0; $x < $this->length; $x++) {
            echo $this->arr[$x] . " ";
        }
        echo "]";
    }
}

$f = new arrayListType(5);

$f->insertAt(0, 10);
$f->insertAt(1, 20);
$f->insertAt(2, 30);
$f->insertAt(3, 40);
$f->insertAt(4, 50);
$f->removeAt(4);
$f->insertAt(4, 60);
$f->insertAt(3, 70);

echo $f->getLenght();
$f->disply();