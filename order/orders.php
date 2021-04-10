<?php 
    require("data.php");

    foreach ($people as $key => $name) {
        $event_key = $invitation[$key];
        if ($event_key != "") {
            $str = $name;
            $str .= $event_key == "dismissal" ? ",\nВы в списках на " : ",\nПриглашаем Вас на ";
            $str .= "{$events[$event_key]}";
            switch ($event_key) {
                case "awarding_study_grants":
                    $str .= "\nНачало в 16:00. Без опозданий!";
                    break;
                case "dismissal":
                    $str .= "\nБольше информации в 115 каб.";
                    break;
                case "praise":
                    $str .= "\nНачало в 18:00 в конференционном зале. Без опозданий";
                    break;
                case "olympiad_awarding":
                    $str .= "\nНачало в 18:00 в конференционном зале. Без опозданий";
                    break;
                default: $str .= "\nИзвините, но Вас пока никуда не приглашают...";
            }
            $str .= "\n" . SIGN . "\n\n\n";
    
            echo $str;
        }
    }
?>