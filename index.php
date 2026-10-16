<?php
    include("./config/database.php");

    $sql = "SELECT * FROM article ORDER BY date_event DESC LIMIT 3";

    $stmt = $pdo->prepare($sql);


    $stmt->execute();

    $articles = $stmt->fetchAll();    
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K-Karting</title>

    <link rel="stylesheet" href="./public/css/bootstrap@5.2.0.min.css">
    <link rel="stylesheet" href="./public/css/index.css">
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
                <li class="nav-item"><a class="nav-link" href="#">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="./pages/boutique.php">Boutique</a></li>
                <li class="nav-item"><a class="nav-link" href="./pages/calendrier.php">Calendrier</a></li>
                <li class="nav-item"><a class="nav-link" href="./pages/article.php">Actualités</a></li>
                <li class="nav-item"><a class="nav-link" href="./pages/champion.php">Champion</a></li>
            </ul>
            <a href="./auth/login.php"><img src="./public/images/logo/key.png" alt="logo icon" style="width: 30px;" class="mr-10"></a>
        </div>
    </div>
</nav>

<section class="hero row"  style="margin-top: 10vh;">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <h1>LA PASSION DU <span>KARTING</span></h1>
                <p class="lead mt-4">
                    Découvrez les meilleures pièces, équipements et événements de karting.
                </p>

                
                    <a href="./pages/boutique.php" style="text-decoration: none;"><button class="btn btn-red btn-lg mt-3">Découvrir la boutique</button></a>
            </div>
        </div>
        <div class="row mt-5">
            <h2 class="card-title">ACTUALITES</h2>
            <?php foreach ($articles as $article){ ?>
            <div class="card col-md-3 col-12 m-2">
                <div class="card-body">
                    <h3 class="card-title"><?php echo $article['theme']; ?></h3>
                    <div style="width: 30vh;">
                    <img class="card-img-top" src="<?php echo "./public/images/" . $article['image_article']; ?>" alt="Card Image">
                    </div>
                    <p class="card-text"><?php echo $article['date_event']; ?></p>
                    
                    <a href="./pages/souspages/article_detail.php?id=<?php echo $article['id_article']; ?>" style="text-decoration: none; color: white;"><button class="btn btn-red btn-lg mt-3">Lire l'article</button></a>
                    
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<footer>
    <div class="container text-center">
        <h4 class="text-danger">K-KARTING</h4>
        <p>Site de vente de pièces et actualités karting. @copyright 2026</p>
    </div>
</footer>

    <script src="./public/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
