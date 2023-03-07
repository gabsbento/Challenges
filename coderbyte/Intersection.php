<?php 

    $arr = explode(',' , (implode(', ',array("1, 2, 3, 4, 5", "6, 7, 8, 9, 10"))));

    $repeats = array();


    for($i = 0; $i < sizeof($arr); $i++){
        for($a = $i+1; $a < sizeof($arr); $a++){
            if($arr[$i] == $arr[$a]){
                array_push($repeats, $arr[$i]);
            }
        }
    }
    
    if(empty($repeats)){
        return false;
    }
    var_dump(str_replace(' ', '',(implode(',', $repeats))));
?>