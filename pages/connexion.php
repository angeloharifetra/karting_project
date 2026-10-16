<?php
// Page d'accueil responsive - Site de Karting
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

<?php
    include("../includes/header.php");
?>

<section class="hero">
    <div class="card container-fluid row">
        <div class="card-body col-md-6 col-12">
            <h2 class="card-title">CONNEXION</h2>
        </div>
    </div>
    <div class="card container-fluid row">
        <div class="card-body col-md-6 col-12">
            <h2 class="card-title">CREER UN COMPTE D'ADMINISTRATEUR</h2>
        </div>
    </div>
</section>

<?php
    include("../includes/footer.php");
?>

    <script src="../public/js/bootstrap.bundle.min.js"></script>
</body>
</html>
