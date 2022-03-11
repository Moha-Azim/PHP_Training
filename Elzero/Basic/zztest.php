<?php


// [3, 9, 1, 2]


////////////////////
//Slicing

//     $n =  $arr[0]; //
//     $q = $operations[0]; //

//     $arr = array_slice($arr, 1, $n); //
//     $operations = array_slice($operations, 1, $q); //

////////////////////






// function performOperations(array $arr, array $operations)
// {

//     $n =  $arr[0]; //
//     $q = $operations[0]; //

//     $arr = array_slice($arr, 1, $n); //
//     $operations = array_slice($operations, 1, $q); //

//     foreach ($operations as $chang) {


//         $num1 = $arr[$chang[0]];
//         $arr[$chang[0]] = $arr[$chang[1]];
//         $arr[$chang[1]] = $num1;
//     }

//     return $arr;
// }


// print_r(performOperations([4, 8, 4, 1, 2], [2, [0, 1], [3, 2], [0, 1]]));

// //echo implode("\n", performOperations([3, 3, 2, 1], [2, [0, 1], [3, 2], [0, 1]]));






// function groupSort(array $arr)
// {

//     $ss = [];
//     $fff = $arr;
//     sort($fff);

//     $arrlength = count($fff);
//     for ($x = 0; $x < $arrlength; $x++) {
//         array_push($ss, $fff[$x]);
//     }


//     $arr = $ss;
//     $count = 0;
//     $countedNum = [];
//     $results = [];

//     foreach ($arr as $ind) {

//         if (in_array($ind, $countedNum)) {
//             continue;
//         }
//         $count = 0;
//         foreach ($arr as $ind2) {
//             if ($ind == $ind2) {
//                 $count++;
//             }
//             array_push($countedNum, $ind);
//         }
//         array_push($results, [$ind, $count]);
//     }
//     return $results;
// }

// print_r(groupSort([4, 2, 1, 2, 2]));



// def groupSort(arr) :

//     ss = [];
//     fff = arr;
//     arrlength = len(fff);
//     x = 0;
//     while ( x < arrlength ) :
//         ss.append([fff[x]]);
//         x+=1;

//     arr = ss;
//     count = 0;
//     countedNum = [];
//     results = [];
//     for ind in arr : 
//         if (ind in countedNum) :
//             continue;
//         count = 0;
//         for ind2 in arr : 
//             if (ind == ind2) :
//                 count+=1;

//             countedNum.append(ind);

//         results.append([ind,count]);

//     return (results);







// function isRobotBounded($movs)
// {

//     $arr_mo = str_split($movs);

//     $start = [0, 0];

//     $now = 360;
//     for ($i = 0; $i <= 3; $i++) {
//         foreach ($arr_mo as $mo) {

//             if ($now == 0) {
//                 $now = 360;
//             }

//             if ($mo == 'L') {
//                 $now -= 90;
//             } elseif ($mo == 'R') {
//                 $now += 90;
//             }

//             if ($mo == 'G' && $now == 360) {
//                 $start[1] += 1;
//             } elseif ($mo == 'G' && $now == 180) {
//                 $start[1] -= 1;
//             } elseif ($mo == 'G' && $now == 270) {
//                 $start[0] -= 1;
//             } elseif ($mo == 'G' && $now == 90) {
//                 $start[0] += 1;
//             }
//         }

//         if ($start[0] == 0 && $start[1] == 0) {

//             $res = "true";
//             break;
//         } else {
//             $res = "false";
//         }
//     }

//     return  $res;
// }


// echo (isRobotBounded("GGGGLRL"));







// function cutOffRank($cutoff, array $scores)
// {

//     $scor = $scores;
//     rsort($scor);
//     $resSc = [];

//     $counter = 0;
//     foreach ($scor as $SC) {

//         if ($counter == 0) {
//             array_push($resSc, 1);
//         } else {

//             if ($SC == $scor[$counter - 1]) {
//                 array_push($resSc, $resSc[$counter - 1]);
//             } elseif ($SC < $scor[$counter - 1]) {
//                 array_push($resSc, $resSc[$counter - 1] + 1);
//             }
//         }
//         $counter++;
//     }

//     $outCount = 0;
//     foreach ($resSc as $fi) {
//         if ($fi <= $cutoff) {
//             $outCount++;
//         }
//     }


//     return $outCount;
// }


// print_r(cutOffRank(4, [2, 2, 3, 4, 5]));



//echo findMinimumCharacters("abcz", "azdb");

// // abcz        →    searchWord = "abcz"

// // azdb        →    resultWord = "azdb"



// function findMinimumCharacters($searchWord, $resultWord)
// {

//     $arrFound = [];
//     $res_arr = str_split($resultWord, 1);
//     $sea_arr = str_split($searchWord, 1);

//     $sea_arr2 = $sea_arr;
//     $adding = count($res_arr);
//     $ind = 0;
//     foreach ($res_arr as $res) {

//         if (in_array($res,  $sea_arr2)) {

//             $ind = array_search($res, $sea_arr2);

//             $sea_arr2 = array_slice($sea_arr2, $ind + 1);

//             array_push($arrFound, $ind);
//             $adding -= 1;
//         } else {
//             break;
//         }
//     }
//     return  $adding;
// }


// print_r(findMinimumCharacters("anmaz", "amazon"));









// /*
// abcz+db = abczdb

// sub from 
// azdb


// if it in search  

//     check if the index more than last index in array

//         save the index  in array

//         -1 to the add number
// */





// function getMinimumTrips($array)
// {
//     $trip = 0;
//     $count = 0;
//     $countedNum = [];
//     foreach ($array as $ind) {

//         if (in_array($ind, $countedNum)) {
//             continue;
//         }
//         $count = 0;
//         foreach ($array as $ind2) {
//             if ($ind == $ind2) {
//                 $count++;
//             }
//             array_push($countedNum, $ind);
//         }
//         if ($count > 3 && $count % 3 == 2) {
//             $trip += 1;
//             $trip += ($count - 2) / 3;
//         } elseif ($count > 3 && $count % 3 == 1) {
//             $trip += 2;
//             $trip += ($count - 4) / 3;
//         } elseif ($count % 3 == 0) {
//             $trip += $count / 3;
//         } elseif ($count % 2 == 0) {
//             $trip += $count / 2;
//         } else {
//             $trip = -1;
//             break;
//         }
//     }
//     return ceil($trip);
// }

// echo  getMinimumTrips([9, 9, 9, 9, 1, 1, 1, 2, 2, 2, 2, 2, 2, 2, 2, 2]);










// function palindrome($word)
// {
//     $word = strtoupper($word);

//     $midchar = "";
//     $word2 = str_split($word);

//     foreach ($word2 as $char) {
//         if (substr_count($word, $char) == 1) {
//             $midchar = $char;
//             break;
//         }
//     }


//     $num = array_search($midchar, $word2);

//     $right = count($word2) -  ($num + 1);



//     $final = $right - $num;
//     if ($midchar == "") {
//         $final = count($word2);
//     }
//     return  abs($final);
// }
// echo palindrome("AACeCAA");

//




// function more5(array $names)
// {

//     foreach ($names as $name) {
//         if (strlen($name) > 5) {
//             echo $name . "<br>";
//         }
//     }
// }


// more5(["Apple", "Banana", "Cucumber", "Watermelon", "Ice-cream", "dsd", "Eggplant", "Egg"]);




// // //[regester adam 123adam, regester moha moha123 , login adam 123adam, logout adam]

// function implementAPI($logs)
// {
// $database = [];
// $result = null;
// $final = [];
// //$countaa = 0;
// if (is_int($logs[0])) {
// $logs = array_slice($logs, 1, $logs[0]);
// }
// foreach ($logs as $log) {
// $log = trim($log);
// // $countaa++;
// $do = explode(" ", $log);

// if ($do[0] == "register") {

// // $dvount = 0;
// foreach ($database as $users) {
// //$dvount++;
// if (in_array($do[1], $users)) {
// $result = 1;
// break;
// } else {
// $result = 2;
// }
// }
// if ($result != 1) {
// array_push($database, array($do[1], $do[2], 0));
// $result = 2;
// } else {
// array_push($final, "Username already exists");
// }
// if ($result == 2) {
// array_push($final, "Registered Successfully");
// }
// } elseif ($do[0] == "login") {
// $count = -1;
// $ress = 0;
// foreach ($database as $user) {
// $count++;
// if (in_array($do[1], $user) && $database[$count][1] == $do[2]) {
// $database[$count][2] = 1;
// $ress = 1;
// break;
// }
// }
// if ($ress == 1) {
// array_push($final, "Logged In Successfully");
// } else {
// array_push($final, "Login Unsuccessful");
// }
// } elseif ($do[0] == "logout") {
// $count = -1;
// $ress = 0;
// foreach ($database as $user) {
// $count++;
// if (in_array($do[1], $user) && $database[$count][2] == 1) {
// $ress = 1;
// break;
// }
// }
// if ($ress == 1) {
// array_push($final, "Logged Out Successfully");
// } else {
// array_push($final, "Logout Unsuccessful");
// }
// } else {
// break;
// }
// }
// return $final;
// }

// print_r(implementAPI([
// 5, "register david david123", "register adam 1Adam1", "login david david123", "login adam 1adam1",
// "logout david"
// ]));





// $database1 = [["name1", "password", "logOrNot"], ["name2", "password", "logOrNot"]];

// foreach ($database1 as $user) {
// if (in_array("name1", $user)) {
// echo "in in ";
// break;
// } else {
// echo "note note";
// }
// }
// $database = [[name1,password,logOrNot],[name2,password,logOrNot]];
//