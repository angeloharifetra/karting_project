<?php

    include("../../config/database.php");

    $id = $_GET['id'];

    $sql = "SELECT * FROM produit INNER JOIN categorie ON produit.id_cat = categorie.id_cat WHERE produit.id_produit = :id";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([':id' => $id]);

    $produit = $stmt->fetch();

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


<section class="hero row" style="margin: 10vh;">
    
    <h1>
        <?php echo $produit['nom_produit']; ?>
    </h1>    
    <h2>
        Catedorie : <span color="red"><?php echo $produit['nom_cat']; ?></span>
    </h2>
    <img src="../../public/images/<?php echo $produit['image_produit']; ?>" class="w-25">

    <p>
        <?php echo $produit['desc_produit']; ?>
    </p>
    <p>
       Prix : <?php echo $produit['prix']; ?> MGA
    </p>
    
    
    <a href="../boutique.php" class="text-decoration-none"><button class="btn btn-outline-danger col-md-2 col-12">Retour</button></a>
</section>

    <script src="../../public/js/bootstrap.bundle.min.js"></script>
    <script src="../../public/js/dist/index.global.min.js"></script>
</body>
</html>