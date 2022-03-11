<?php

// function expandedForm($num) {
//     $arr = explode('.', strval($num));
//     $a = str_split($arr[0]);
//     $b = str_split($arr[1]);
//     $arr1 = array_map(function($v, $i) use($a) {
//      return $v > 0 ? ($v). (str_repeat('0', (count($a) - $i - 1))) : '';
//     }, $a, array_keys($a));
//     $arr2 = array_map(function($v, $i) use($b) {
//      return $v > 0 ? ($v) . '/1' . (str_repeat('0', ($i + 1))) : '';
//     }, $b, array_keys($b));
//     $arr3 = array_merge($arr1, $arr2);
//     return join(' + ', array_filter($arr3, function($v) {return $v != '';}));

//    }
// 	echo expandedForm(123.025);


// function lcm ($n1, $n2) {
// 	$ni1 = $n1;
//     $ni2 = $n2;


//     $n1 += $ni1;
//     $n2 += $ni2;

//     $ni1 = 0;
//     $ni2 = 0;
//     if( $n1 == $n2){
//         echo $n2;
//         exit();
//     }else{

//         lcm($n1,$n2);
//     }

// }

// function showTheLove($arr) {
// 	function qur($arr) {
// 		global $am;
// 		$am += $arr/4 ;
// 		$arr= $arr - $arr/4 ;
// 		return $arr;
// 	}
// 	$min = min(array_map("qur",$arr));
// 	$aa = $GLOBALS['am'];
// 	$fin = array_map("qur",$arr);

//     $indx = array_search($min,$fin);
// 	$fin[$indx] +=  $aa;

// 	return $fin;
// }

//  print_r(showTheLove([75, 64, 55]));



/////////////////////////////////////////////////////////////////////////////////////



// function keysAndValues($obj) {
// 	ksort($obj);



//     $kk = array_keys($obj);
//     $vv = array_values($obj);
//     $kk = array_map('strval',  $kk);

//     var_dump( $kk ['0']);
//     return[$kk,$vv];

// }
// echo '<pre>';
//  print_r(keysAndValues(array('1' => '44', '2' => null, '3' => null)));
//  echo '</pre>';



///////////////////////////////////////////////////////////////////////////////////////
// function primeCount($a, $b)
// {
//     if ($a < 2) {
//         $a = 2;
//     }
//     $count = 0;
//     for ($i = $a; $i <= $b; $i++) {
//         $check = 1;
//         for ($j = 2; $j <= ($i / 2); $j++) {
//             if ($i % $j == 0) {
//                 $check = 0;
//                 break;
//             }
//         }
//         if ($check == 1) {
//             $count++;
//         }
//     }
//     return $count;
// }

// echo primeCount(1, 1000);


// echo phpversion();

function findMinimumCharacters($searchWord, $resultWord)
{

    $coutn = 0;
    $fichar = null;
    $res_arr = str_split($resultWord);

    $sea_arr = str_split($searchWord);

    foreach ($res_arr as $res) {

        if (in_array($res, $sea_arr) && count($sea_arr) - 1 == array_search($res, $sea_arr)) {

            $fichar = $res;
            break;
        }
    }

    $ind = array_search($fichar, $res_arr);

    $finall = count($res_arr) - ($ind + 1);

    return $finall;
}

echo  findMinimumCharacters("abcz", "azdb");