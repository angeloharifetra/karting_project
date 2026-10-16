<?php
    include("../../config/database.php");
    $id_course = $_POST["id_course"] ?? null;
    $titre = $_POST["titre"] ?? null;
    $date_course = $_POST["date_course"] ?? null;
    $desc_course = $_POST["desc_course"] ?? null;
    $lieux = $_POST["lieux"] ?? null;
    $image = NULL;

    

    if(isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
        $image = uniqid() . "_" . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], "../../public/images/event/" . $image);

    }

    $sql = "UPDATE course SET titre = :titre, date_course = :date_course, desc_course = :desc_course, lieux = :lieux, image = :image  WHERE id_course = :id_course";
    
    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        "titre" => $titre,
        "date_course" => $date_course,
        "desc_course" => $desc_course,
        "lieux" => $lieux,
        "image" => "./event/" . $image,
        "id_course" => $id_course
    ]);

    include("./list.php");
?>