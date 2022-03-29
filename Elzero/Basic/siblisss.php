<?php






// function Find_Cut_Vertices(array $arr)
// {

//     $na = [];
//     $tested = [];
//     $theBreaker = [];

//     foreach ($arr as $ind) {
//         array_push($na, $ind[0]);
//         array_push($na, $ind[1]);
//     }

//     $lines = array_count_values($na);
//     ksort($lines);
//     $na2 = $na;
//     $impoC = [];
//     $mostR = [];
//     $bigMostR = [];

//     foreach ($lines as $key => $line) {
//         $na = $na2;
//         for ($i = 1; $i <= $lines[$key]; $i++) {
//             $indexN = array_search($key, $na);
//             if ($indexN % 2 == 0) {
//                 array_push($mostR, $na[$indexN + 1]);
//                 $na = array_slice($na, $indexN + 2);
//             } else {
//                 array_push($mostR, $na[$indexN - 1]);
//                 $na = array_slice($na, $indexN + 1);
//             }
//         }
//         array_push($bigMostR, $mostR);
//         $mostR = [];
//     }


//     foreach ($lines as $key => $line) {
//         $firstBalls = [];
//         $CheckCount = $lines[$key] - 1;
//         $PandedBalls = [];
//         array_push($PandedBalls, $key);
//         $counter = 0;


//         while ($CheckCount != 0) { // to check if the ball sbiling the body
//             $NewArr = $bigMostR[$key];
//             $checkBall = [];

//             if ($counter == 0) {
//                 $ix = 0;
//                 while (in_array($bigMostR[$key][$ix], $PandedBalls) || $key == $NewArr[$ix]) {
//                     $ix++;
//                 }
//                 array_push($checkBall, $NewArr[$ix]); // catch the first ball main ball
//                 array_push($PandedBalls, $checkBall);



//                 foreach ($NewArr as $arr) {
//                     if ($arr != $checkBall[0]) {
//                         array_push($firstBalls, $arr);
//                     }
//                 }
//             }


//             $x = 0;
//             $takat = [];
//             foreach ($checkBall as $cheke) {
//                 $takat = array_intersect($bigMostR[$checkBall[$x]], $firstBalls);
//                 $x++;
//             }


//             if (!empty($taka)) {
//                 $CheckCount = $CheckCount - count($taka);
//                 if ($CheckCount != 0) {
//                     $checkBall2 = [];

//                     for ($ii = 0; $ii <  count($checkBall); $ii++) {
//                         foreach ($bigMostR[$checkBall[$ii]] as $nextBalls) {

//                             if (!in_array($nextBalls, $PandedBalls)) {

//                                 array_push($checkBall2, $nextBalls);
//                             }
//                         }
//                     }
//                     $checkBall = $checkBall2;
//                 }
//             } else {
//                 $checkBall2 = [];
//                 for ($ii = 0; $ii < count($checkBall); $ii++) {
//                     foreach ($bigMostR[$checkBall[$ii]] as $nextBalls) {

//                         if (!in_array($nextBalls, $PandedBalls)) {

//                             array_push($checkBall2, $nextBalls);
//                         }
//                     }
//                 }

//                 $checkBall = $checkBall2;
//             }

//             if ($CheckCount == 0) {
//                 array_push($theBreaker, $key);
//             }

//             $counter++;
//         }
//         $PandedBalls = [];
//     }

//     return $theBreaker;
// }

// echo "<pre>";
// print_r(Find_Cut_Vertices([[0, 1], [0, 2], [1, 3], [2, 3], [2, 5], [5, 6], [3, 4]]));
// echo "</pre>";




// Array   $lines
// (
//     [0] => 2
//     [1] => 2
//     [2] => 3
//     [3] => 3
//     [4] => 1
//     [5] => 2
//     [6] => 1
// )


// check ball -> [1]




// Array  $bigMostR;
// (
//     [0] => Array
//         (
//             [0] => 1
//             [1] => 2
//         )

//     [1] => Array
//         (
//             [0] => 0
//             [1] => 3
//         )

//     [2] => Array
//         (
//             [0] => 0
//             [1] => 3
//             [2] => 5
//         )

//     [3] => Array
//         (
//             [0] => 1
//             [1] => 2
//             [2] => 4
//         )

//     [4] => Array
//         (
//             [0] => 3
//         )

//     [5] => Array
//         (
//             [0] => 2
//             [1] => 6
//         )

//     [6] => Array
//         (
//             [0] => 5
//         )