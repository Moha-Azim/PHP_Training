<?php






function hund($qubes, $times = 100, $rang = 6)
{

    $sums_arr = [];
    for ($x = 0; $x < $times; $x++) {
        $sums = 0;
        for ($i = 0; $i < $qubes; $i++) {
            $sums += rand(1, $rang);
        }
        array_push($sums_arr, $sums);
    }
    return $sums_arr;
}
echo "<pre>";
print_r(hund(1000));
echo "</pre>";

// class myone
// {


//     public $name = "moha";
//     public $age  = 22;
//     public $year = 2022;
//     protected $lang = "eng";

//     const AGE = 30;

//     public function change($na, $ag, $ye = 2021)
//     {
//         $this->name = $na;
//         $this->age = $ag;
//         $this->year = $ye;
//     }

//     public function checkAge()
//     {
//         if ($this->age > self::AGE) {
//             echo "too old bro";
//         }
//     }

//     protected function changLang()
//     {
//         if ($this->lang == "eng" && $this->age > 30) {
//             $this->lang = "hin";
//         }
//     }
// }



// class hoppes extends myone
// {
//     public $games = ["Apex", "Valorant"];

//     function changLang()
//     {
//         if ($this->lang == "eng" && $this->age > 22) {
//             $this->lang = "overRide";
//         }
//     }
// }


// abstract class asdf
// {
    
// }

// $azem = new myone();
// $azem->name = "khaleed";
// $azem->age = 33;
// $azem->checkAge();

// echo '<pre>';
// var_dump($azem);
// echo '</pre>';

// echo "<hr>";


// $meh = new myone();
// $meh->change("mehoo", 89);
// $meh->checkAge();
// //$meh->changLang();  // if use it will be error cuse it's protected function in this class
// echo '<pre>';
// var_dump($meh);
// echo '</pre>';

// echo "<hr>";

// $mehG = new hoppes();
// $mehG->change("mehooG", 23);
// $mehG->checkAge();
// $mehG->changLang();
// echo '<pre>';
// print_r($mehG);
// echo '</pre>';