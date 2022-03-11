<?php

/*
    Trait => 5.4
    - A Mechamnism For Code Reuse In Single Inheritance Languages Such As PHP.
    -Problem Wih Extending Classes, is that U Can Only Extend One. This Is A Little Limiting.
    - With Traints Its Possible For PHP Classes To Inherit Methods & Properties From  Multiple Sources.

    -You Cannot Extend or Implements.
    -You Cannot Instantiate.
    -It's Supporting Class Not Replacing it.
    -Can Have Methods.
    -Have Priority Over Class
*/


trait fingerPritn
{
    public function theprint()
    {
        echo 'put you finger here<br>';
        return $this;
    }
}

trait threeDD
{
    public function three3d()
    {
        echo 'this is 3d pro<br>';
        return $this;
    }
}

trait facedetect
{
    public function knowFace()
    {
        echo 'smile to the camera<br>';
        return $this;
    }
}


trait allfeatures
{
    use facedetect, threeDD, fingerPritn;
}

class Iphone
{
    use allfeatures;
    public function ssay()
    {
        echo 'hello Iphone<br>';
        return $this;
    }
}

class sony
{

    public function ssay()
    {
        echo 'hello Sony<br>';
        return $this;
    }
    use facedetect, threeDD;
}


class Nokia
{

    public function ssay()
    {
        echo 'hello Nokia<br>';
        return $this;
    }
    use facedetect;
}





$phone = new Iphone;
$phone->ssay()->knowFace()->three3d()->theprint();
echo '<pre>';
print_r($phone);
echo '</pre>';




$sony = new  sony;
$sony->ssay()->three3d()->three3d();
echo '<pre>';
print_r($sony);
echo '</pre>';



$Nokia = new Nokia;
$Nokia->ssay()->knowFace();
echo '<pre>';
print_r($Nokia);
echo '</pre>';