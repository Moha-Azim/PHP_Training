<?php

// function expandedForm($num) {
	
//     $num = explode('.',strval($num));
//     $len= strlen($num[0]);
    
    
//     $find = '';
//     $slen= $len;

//         for($j=0 ;$j <= $len; $j++){
//             $slen= $len;
//             if($num[0][$j] > 0){
//                 $zeros ='';
//                 $slen-=$j;
                
//                 for($i=1 ;$i < $slen; $i++){
                    
                    
//                     $zeros .='0';
//                 }
            
//                 $find.=$num[0][$j].$zeros.' + ';
//         }else{
            
//             continue;
//         }
//     }
//     $len2= strlen($num[1]);
//     $slen2=10;
//         for($j2=0 ;$j2 <= $len2; $j2++){
//                $slen2= 1;
//             if($num[1][$j2] > 0){
//                 $zeros ='';
//                 $slen2+=$j2;
//                 for($i2=0 ;$i2 < $slen2; $i2++){
                    
//                     $zeros .='0';
//                 }
            
//                 $find.=$num[1][$j2].'/1'.$zeros.' + ';
//             }else{
//                 $slen2+=$j2;
//             continue;
//         }
//     }
// $find = substr_replace($find,'',-2);
// return $find;
// }



// 	echo expandedForm(123.025);





// function constructDeconstruct($s) {
//     $word = array();
//     $dec = 1;
//     $len = strlen($s)*2 -1;
//     $xdec = strlen($s) -1;
//     $les = strlen($s)+1;
//     for ($i=0 ; $i < $len; $i++){

//         if($dec < $les){
//             $k = substr($s,0,$dec);
//             array_push($word, $k);
//             $dec++;
//         }else{
//             $k = substr($s,0,$xdec);
//             array_push($word, $k);
//             $xdec--;
//         }
//     }
//     return $word;
    
// }

// print_r(constructDeconstruct("moha az"));






// function scaleTip($arr) {
// $idx = array_search("I" , $arr);
// $left = array_slice($arr ,0 ,$idx);
// $right = array_slice($arr , ($idx+1));
//     if (array_sum($left) > array_sum($right) ){
//         $ret = "left";
//     }elseif(array_sum($left) < array_sum($right) ){
//         $ret = "right";
//     }else{
//         $ret = "balanced";
//     }
// return $ret;
// }


// echo scaleTip([0, 0, "I", 1, 1]);





// function flippingBits($num) {
//     $bit = strval(decbin($num));
//     $n = str_pad($bit , 32,"0", STR_PAD_LEFT);
//     for($i=0; $i < strlen($n) ; $i++){
//         if($n[$i] == "0"){
//             $n[$i] = "1";
//         }else{
//             $n[$i] = "0";
//         }
//     }
//     return bindec($n);
// }


// echo  flippingBits(4);