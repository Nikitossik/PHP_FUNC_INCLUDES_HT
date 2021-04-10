<?php 

    // 7.8 Дата
    
    $mounths = [1 => 'января', 
        'февраля', 
        'марта', 
        'апреля', 
        'мая', 
        'июня', 
        'июля', 
        'августа', 
        'сентября', 
        'октября', 
        'ноября', 
        'декабря'
    ];

    $date_to_change = "31.12.2020";
    $exp = '/(\w{1,2})\.(\w{1,2})\.(\w+)/i';

    $date_to_change = preg_replace_callback($exp, function($matches){
        global $mounths;
        return "$matches[1] {$mounths[$matches[2]]} $matches[3] года";
    }, $date_to_change);

    echo $date_to_change;

?>