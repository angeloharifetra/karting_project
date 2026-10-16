<?php
    include("../../config/database.php");
    $sql = "SELECT * FROM course";

    $stmt = $pdo->prepare($sql);


    $stmt->execute();

    $courses = $stmt->fetchAll();
    
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
        <div class="row">
            <div class="col-lg-7">
                <h1>OPTION <span>COURSES</span></h1>
            </div>
        </div>
         <div class="container mt-3">
            <table class="table table-hover">
                <thead>
                    <tr class="text-light">
                        <th>Identifiant</th>
                        <th>Titre</th>
                        <th>Date du course</th>
                        <th>Desciption</th>
                        <th>Lieux</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($courses as $course) { ?>
                    <tr class="text-light">
                        <td><?php echo $course['id_course']; ?></td>
                        <td><?php echo $course['titre']; ?></td>
                        <td><?php echo $course['date_course']; ?></td>
                        <td><?php echo $course['desc_course']; ?></td>
                        <td><?php echo $course['lieux']; ?></td>
                        <td><a href="edit.php?id_course=<?= $course['id_course'] ?>" class="text-danger">Modifier</a>&nbsp;&nbsp;&nbsp;<a href="delete.php?id_course=<?= $course['id_course'] ?>" class="text-danger">Supprimer</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-end">
            <a href="./mini_index.php" class="text-decoration-none"><button class="btn btn-outline-danger">Ajouter</button></a>
        </div>
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
