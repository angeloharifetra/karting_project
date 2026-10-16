<?php
    // include("./config/database.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K-Karting</title>

    <link rel="stylesheet" href="../public/css/bootstrap@5.2.0.min.css">
    <link rel="stylesheet" href="../public/css/index.css">
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

    <div class="container d-flex align-items-center justify-content-center">
            <div class="card" style="margin-top: 20vh;">
                <div class="card-body bg-dark text-white">
                    <h1 class="card-title text-center">Logout</h1>
                    <h3 class="card-text text-danger">Etes vous sur de vous deconnecter de votre compte administrateur ?</h3>
                    <a href="../index.php" class="text-decoration-none"><button class="mt-3 btn btn-outline-danger col-12">Oui,  me deconnecter</button></a>
                    <a href="../admin/dashboard.php" class="text-decoration-none"><button class="mt-3 btn btn-outline-danger col-12">Retour a l'acceuil</button></a>
                </div>
            </div>
        </div>

        <?php //include("../includes/footer.php"); ?>
    <script src="../public/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>