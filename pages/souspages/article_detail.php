<?php

include("../../config/database.php");

$id = $_GET['id'];

$sql = "SELECT * FROM article WHERE id_article = :id";

$stmt = $pdo->prepare($sql);

$stmt->execute([':id' => $id]);

$article = $stmt->fetch();

// print_r($article);

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
        <?php echo $article['theme']; ?>
    </h1>    

    <img src="../../public/images/<?php echo $article['image_article']; ?>" class="w-25">

    <h3>
        <?php echo $article['desc_article']; ?>
    </h3>
    <h3>
        <?php echo $article['date_event']; ?>
    </h3>
    
    
    <a href="../../index.php" class="text-decoration-none"><button class="btn btn-outline-danger col-md-2 col-12">Retour</button></a>
</section>

    <script src="../../public/js/bootstrap.bundle.min.js"></script>
    <script src="../../public/js/dist/index.global.min.js"></script>
</body>
</html>

