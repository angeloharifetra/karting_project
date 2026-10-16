<?php
    include("../../config/database.php");

    $titre = htmlspecialchars(trim($_POST["titre"] ?? ""));
    $date_course = htmlspecialchars(trim($_POST["date_course"] ?? ""));
    $desc_course = htmlspecialchars(trim($_POST["desc_course"] ?? ""));
    $lieux = htmlspecialchars(trim($_POST["lieux"] ?? ""));
    $image = NULL;

    

    if(isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
        $image = uniqid() . "_" . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], "../../public/images/event/" . $image);

    }    


    $sql = "INSERT INTO course(titre, date_course, desc_course, lieux, image) VALUES (:titre, :date_course, :desc_course, :lieux, :image)";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        "titre" => $titre, 
        "date_course" => $date_course, 
        "desc_course" => $desc_course, 
        "lieux" => $lieux, 
        "image" => "./event/" . $image, 
    ]);

    // header("Location: ./list.php");
    // exit;

    include("./list.php");

?>