<?php



function pair($push, $pop)
{
    if ($push == "{" && $pop == "}") {
        return true;
    } elseif ($push == "(" && $pop == ")") {
        return true;
    } elseif ($push == "[" && $pop == "]") {
        return true;
    } else {
        return false;
    }
}

function balanced($str)
{
    $stack = array();

    for ($i = 0; $i < strlen($str); $i++) {

        if ($str[$i] == "{" || $str[$i] == "(" || $str[$i] == "[") {
            array_push($stack, $str[$i]);
        } elseif ($str[$i] == "}" || $str[$i] == ")" || $str[$i] == "]") {
            $pop = $str[$i];
            if (empty($stack) || @!pair($stack[count($stack) - 1], $pop)) {
                return false;
            }
            array_pop($stack);
        }
    }

    return (empty($stack));
}


var_dump(balanced('(()[])'));