<?php
    include("../../config/database.php");

    $theme = htmlspecialchars(trim($_POST["theme"] ?? ""));
    $desc_article = htmlspecialchars(trim($_POST["desc_article"] ?? ""));
    // $image = $_POST["image_article"] ?? "";
    $date_event = $_POST["date_event"] ?? NULL;
    $id_user = $_POST["id_user"];
    $id_course = NULL;
    $image = NULL;

    

    if(isset($_FILES["image_article"]) && $_FILES["image_article"]["error"] == 0) {
        $image = uniqid() . "_" . basename($_FILES["image_article"]["name"]);
        move_uploaded_file($_FILES["image_article"]["tmp_name"], "../../public/images/article/" . $image);

    }


    $sql = "INSERT INTO article(theme, desc_article, image_article, date_event, id_user, id_course) VALUES (:theme, :desc_article, :image_article, :date_event, :id_user, :id_course)";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        "theme" => $theme,
        "desc_article" => $desc_article,
        "image_article" => "./article/" . $image,
        "date_event" => $date_event,
        "id_user" => $id_user,
        "id_course" => $id_course
    ]);

    // header("Location: ./list.php");
    // exit;

    include("./list.php");

?>
