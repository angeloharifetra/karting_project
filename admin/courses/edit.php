<?php

    include("../../config/database.php");
    $id_course = $_GET["id_course"] ?? null;


    if($id_course === NULL) {
        die("ID invalide");
    }

    $sql = "SELECT * FROM course WHERE id_course = :id_course";
    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        "id_course" => $id_course
    ]);

    $course = $stmt->fetch();
    // print_r($users);
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
                <li class="nav-item"><a class="nav-link" href="../articles/list.php">Article</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Courses</a></li>
                <li class="nav-item"><a class="nav-link" href="../users/list.php">Utilisateur</a></li>
                <li class="nav-item"><a class="nav-link" href="../../auth/logout.php">Deconnexion</a></li>
            </ul>
        </div>
    </div>
</nav>

<section class="hero h-100">
    <div class="container" style="margin-top: 20vh;">
        <h1>Ajout <span color="red">de course</span></h1>

        <form action="./modify.php" method="post" class="container" enctype="multipart/form-data">
            <input type="text" class="form-control m-3" name="titre" placeholder="titre" value="<?= $course["titre"] ?>">
            <input type="date" class="form-control m-3" name="date_course" placeholder="date_course"  value="<?= $course["date_course"] ?>">
            <input type="text" class="form-control m-3" name="desc_course" placeholder="desc_course"  value="<?= $course["desc_course"] ?>">
            <input type="text" class="form-control m-3" name="lieux" placeholder="lieux"  value="<?= $course["lieux"] ?>">
            <input type="file" class="form-control m-3" name="image" placeholder="image"  value="<?= $course["image"] ?>">
            <input type="hidden" value="<?= $course["id_course"] ?>" name="id_course">
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