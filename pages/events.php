<?php
    ob_start();

    include("../config/database.php");

    $pdo->exec("SET NAMES 'utf8'");
        $sql = "SELECT * FROM course";
        $result = $pdo->query($sql);

        $courses = $result->fetchAll();

    $events = [];

    foreach($courses as $co){

        $events[] = [
            "id" => $co["id_course"],

            "title" => $co["titre"],

            "start" => $co["date_course"],

            "description" => $co["desc_course"],

            "lieu" => $co["lieux"],

            "image" =>"../public/images/" . $co["image"],

            "color" => "red"
        ];

    }
    ob_clean();

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($events, JSON_UNESCAPED_UNICODE);
    
?>