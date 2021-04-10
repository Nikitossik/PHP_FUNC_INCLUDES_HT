<?php 

    // 7.2 Библиотека

    function lib($book_name = '-', $a_name = '-', $a_surname = '-', $year = '-', $office = '-', $card = '-'){
        echo "$book_name, $a_name, $a_surname, $year, $office, $card \n";
    }

    lib('1984', 'George', 'Orwell');
?>