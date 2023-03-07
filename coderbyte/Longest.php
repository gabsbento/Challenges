<?php 

    $str = "hello world";

    $arr = explode(" ", $str);
    $count = 0;
    $flag = 0;
    for($i = 0; $i < sizeof($arr); $i++){
        if(preg_match_all('/[a-zA-Z0-9_]/', $arr[$i] )> $flag){
            $count = $i;
            $flag = preg_match_all('/[a-zA-Z0-9_]/', $arr[$i]);
        }
    }

    echo ($arr[$count]);

?>