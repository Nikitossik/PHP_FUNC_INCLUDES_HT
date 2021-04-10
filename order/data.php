<?php 
    define("SIGN", date("d.m.y").", Деканат");

    $events = [
        "awarding_study_grants" => "начисление стипендии",
        "dismissal" => "отчисление",
        "praise" => "объявление благодарности «за успехи в учебе»",
        "olympiad_awarding" => "начисление премии за участие в олимпиаде"
    ];

    $people = [
        "misha" => "Михаил",
        "arsen" => "Арсений",
        "mark" => "Марк",
        "ivan" => "Иван"
    ];

    $invitation["misha"] = "awarding_study_grants";
    $invitation["arsen"] = "dismissal";
    $invitation["mark"] = "praise";
    $invitation["ivan"] = "olympiad_awarding";
?>