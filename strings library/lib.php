<?php 
/**
*Библиотека функций для математических вычислений
*@author Никита)
*/

/*Замена порядка на противоположный*/

function reverse($string){
    return implode('', array_reverse(str_split($string)));
}

/*Удаление слов через одно*/

function delete_every_odd_word($string){
    $pattern = '/(\w+)\W+/i';
    preg_match_all($pattern, $string, $array);
    $array = $array[0];
    preg_replace_callback($pattern, function($matches) use (&$array){
        static $i = 0;
        if (($i + 1) % 2 == 0) $array[$i] = preg_replace('/(\w+)/','', $array[$i]);
        $i++;
    }, $array);
    $string = implode('', $array);
    return $string;
}

?>