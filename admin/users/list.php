<?php
    include("../../config/database.php");
    $sql = "SELECT * FROM utilisateur";

    $stmt = $pdo->prepare($sql);


    $stmt->execute();

    $users = $stmt->fetchAll();    
    
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
                <li class="nav-item"><a class="nav-link" href="../courses/list.php">Courses</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Utilisateur</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Deconnexion</a></li>
            </ul>
        </div>
    </div>
</nav>

<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <h1>OPTION <span>UTILISATEUR</span></h1>
            </div>
        </div>
         <div class="container mt-3">
            <table class="table table-hover">
                <thead>
                    <tr class="text-light">
                        <th>identifiant</th>
                        <th>Nom</th>
                        <th>Prenom(s)</th>
                        <th>email</th>
                        <th>mot de passe</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($users as $user){ ?>
                    <tr class="text-light">
                        <td><?php echo $user['id_user']; ?></td>
                        <td><?php echo $user['nom_user']; ?></td>
                        <td><?php echo $user['prenom_user']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td><?php echo $user['password']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
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
