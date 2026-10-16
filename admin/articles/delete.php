<?php
    include("../../config/database.php");

    $id_article = $_GET["id_article"] ?? NULL;

    if($id_article === NULL) {
        die("ID invalide");
    }

    $sql = "DELETE FROM article WHERE id_article = :id_article";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        "id_article" => $id_article
    ]);

    include("./list.php");
?>