<?php
    include("../../config/database.php");

    $id_course = $_GET["id_course"] ?? NULL;

    if($id_course === NULL) {
        die("ID invalide");
    }

    $sql = "DELETE FROM course WHERE id_course = :id_course";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        "id_course" => $id_course
    ]);

    include("./list.php");
?>