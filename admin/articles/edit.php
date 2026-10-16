<?php

    include("../../config/database.php");
    $id_article = $_GET["id_article"] ?? null;


    if($id_article === NULL) {
        die("ID invalide");
    }

    $sql = "SELECT * FROM article INNER JOIN utilisateur ON article.id_user = utilisateur.id_user WHERE id_article = :id_article";
    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        "id_article" => $id_article
    ]);

    $article = $stmt->fetch();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K-Karting</title>

    <link rel="stylesheet" href="../../public/css/bootstrap@5.2.0.min.css">
    <link rel="stylesheet" href="../../public/css/index.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">K-<span class="text-light">KARTING</span></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#">Article</a></li>
                <li class="nav-item"><a class="nav-link" href="../courses/list.php">Courses</a></li>
                <li class="nav-item"><a class="nav-link" href="../users/list.php">Utilisateur</a></li>
                <li class="nav-item"><a class="nav-link"  href="../../auth/logout.php">Deconnexion</a></li>
            </ul>
        </div>
    </div>
</nav>

<section class="hero h-100">
    <div class="container" style="margin-top: 20vh;">
        <h1>Modification <span color="red">de l'article</span></h1>

        <form action="./modify.php" method="post" class="container" enctype="multipart/form-data">
            <input type="text" class="form-control m-3" name="theme" placeholder="theme" value="<?= $article["theme"] ?>">
            <input type="text" class="form-control m-3" name="desc_article" placeholder="description" value="<?= $article["desc_article"] ?>">
            <input type="date" class="form-control m-3" name="date_article" placeholder="date"  value="<?= $article["date_event"] ?>">
            <input type="file" class="form-control m-3" name="image_article" placeholder="image"  value="<?= $article["image_article"] ?>">
            <input type="text" class="form-control m-3" name="date_event" placeholder="evenement"  value="<?= $article["date_event"] ?>">
            <input type="hidden" value="<?= $article["id_article"] ?>" name="id_article">
            <input type="hidden" value="<?= $article["id_user"] ?>" name="id_user">
            <button class="m-3 btn btn-outline-danger col-12" type="submit">Modifier</button>
        </form>
    </div>
</section>

<footer>
    <div class="container text-center">
        <h4 class="text-danger">K-KARTING</h4>
        <p>Site de vente de pièces et actualités karting. @copyright 2026</p>
    </div>
</footer>

    <script src="../../public/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>