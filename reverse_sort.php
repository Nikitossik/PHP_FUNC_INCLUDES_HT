<?php 
    
    // 7.3 Обратная сортировка

    $arr = [0,14,5,4,6,75,4,9,10];

    uasort($arr, function($a, $b){
        return $a <=> $b;
    });

    print_r($arr);

?>