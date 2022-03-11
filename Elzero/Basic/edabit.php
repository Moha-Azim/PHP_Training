<?php















/*

                1                       
               1 1                      1
              1 2 1                     2
            1 3 3 1                     3
           1 4 6 4 1                    4
          1 5 10 10 5 1                 5
         1 6 15 20 15 6 1               6
        1 7 21 35 35 21 7 1             7

            1 4 6 4 1                   4
          1 5 10 10 5 1                 5
         1 6 15 20 15 6 1               6
        1 7 21 35 35 21 7 1             7

         1,lineNum,sumsfrom 1 to (line-1)


          $AllArr = [[1, 1],[1,2,1],[1,3,3,1]];
          
*/


// function pascalsTriangle($row)
// {

//     $row += 1;

//     $AllArr = [[1, 1]];
//     $val = 0;
//     for ($i = 0; $i < $row - 1; $i++) {
//         $currArr = [];
//         for ($x = 1; $x <= $row; $x++) {
//             if ($x == 1) {
//                 $val = 1;
//             } elseif ($x == $row) {
//                 $val = 1;
//             } else {
//                 @$val = $AllArr[$i][$x - 2] + $AllArr[$i][$x - 1];
//             }
//             array_push($currArr,  $val);
//         }
//         array_push($AllArr, $currArr);
//     }

//     return implode(" ", $AllArr[$row - 2]);
// }



// function pascalsTriangle($row)
// {
//     $out = [1];
//     for ($i = 0; $i < $row; $i++) {
//         $out[] = ($out[$i] * ($row - $i) / ($i + 1));
//     }
//     return join(' ', $out);
// }
// // echo "<pre>";            n!/(k!*(n-k)!)
// echo pascalsTriangle(7);
// // echo "</pre>";









// function parances($strP)
// {
// $strP = str_split($strP, 1);
// $open = 0;
// $close = 0;
// $outArr = [];
// $ind = "";
// foreach ($strP as $st) {

// $ind .= $st;

// if ($st == "(") {
// $open++;
// } elseif ($st == ")") {
// $close++;
// }

// if ($open == $close) {
// array_push($outArr, $ind);
// $ind = "";
// }
// }
// return $outArr;
// }

// print_r(parances("((())())(()(()()))"));






// function split($str)
// {
// $str = str_split($str, 1);
// $open = 0;
// $close = 0;
// $outArr = [];
// $ind = "";
// foreach ($str as $st) {
// $ind .= $st;

// if ($st == "(") {
// $open++;
// } elseif ($st == ")") {
// $close++;
// }

// if ($open == $close) {
// array_push($outArr, $ind);
// $ind = "";
// }
// }
// if ($outArr != [""]) {
// return $outArr;
// } else {
// return ["\""];
// }
// }

// print_r(split(""));





// class Rectangle
// {
//     public function __construct($sideA, $sideB)
//     {
//         $this->sideA = $sideA;
//         $this->sideB = $sideB;
//     }
//     public function getArea()
//     {
//         return $this->sideA * $this->sideB;
//     }
//     public function getPerimeter()
//     {
//         return ($this->sideA + $this->sideB) * 2;
//     }
// }

// class Circle
// {
//     // Write your code here
//     public function __construct($circos)
//     {
//         $this->circo = $circos;
//     }


//     public function getArea()
//     {
//         echo pi() * pow(($this->circo), 2);
//     }
//     public function getPerimeter()
//     {
//         echo 2 *  pi() * $this->circo;
//     }
// }

// $circy = new Circle(11);
// $circy->getArea();