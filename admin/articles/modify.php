<?php
    include("../../config/database.php");
    $id_article = $_POST["id_article"] ?? null;
    $theme = $_POST["theme"] ?? null;
    $desc_article = $_POST["desc_article"] ?? null;
    // $image_article = $_POST["image_article"] ?? null;
    $date_event = $_POST["date_event"] ?? null;
    $id_user = $_POST["id_user"] ?? null;
    $id_course = null;
    $image = NULL;

    

    if(isset($_FILES["image_article"]) && $_FILES["image_article"]["error"] == 0) {
        $image = uniqid() . "_" . basename($_FILES["image_article"]["name"]);
        move_uploaded_file($_FILES["image_article"]["tmp_name"], "../../public/images/article/" . $image);

    }

    
    $sql = "UPDATE article SET theme = :theme ,desc_article = :desc_article, image_article = :image_article, date_event = :date_event, id_user = :id_user, id_course = :id_course WHERE id_article = :id_article";
    
    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        "theme" => $theme,
        "desc_article" => $desc_article,
        "image_article" => "./article/" . $image,
        "date_event" => $date_event,
        "id_user" => $id_user,
        "id_course" => $id_course,
        "id_article" => $id_article,
    ]);

    include("./list.php");
?>