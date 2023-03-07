<?php 
    $str = "123abc444";
    $check = true;

    if(!(strlen($str) >= 4 AND strlen($str) <= 25) || $str[0] == "_" || preg_match('/[a-zA-Z]/', $str[0]) != 1 || $str[strlen($str)-1] == "_" || preg_match_all('/[a-zA-Z0-9_]/', $str) != strlen($str)){
        $check  = false;
    }



    var_dump($check);
?>