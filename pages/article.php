<?php
    include("../config/database.php");

    $sql = "SELECT * FROM article ORDER BY date_event DESC";

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

    <link rel="stylesheet" href="../public/css/bootstrap@5.2.0.min.css">
    <link rel="stylesheet" href="../public/css/index.css">
</head>
<body>

<?php
    include("../includes/header.php");
?>

<section class="hero row" style="margin-top: 10vh;">
    <div class="container">
        <div class="col-md-7 col-12">
            <h1>POPULAIRES <span color="red">EN CE MOMENT</span></h1>
        </div>
        
        <div class="container-fuild row mt-5">
            <?php foreach ($articles as $article){ ?>
            <div class="card col-md-3 col-12 m-2">
                <div class="card-body">
                    <h3 class="card-title"><?php echo $article['theme']; ?></h3>
                    <div style="width: 30vh;">
                    <img class="card-img-top" src="<?php echo "../public/images/" . $article['image_article']; ?>" alt="Card Image">
                    </div>
                    <p class="card-text"><?php echo $article['date_event']; ?></p>
                    
                    <a href="./souspages/article_detail.php?id=<?php echo $article['id_article']; ?>" style="text-decoration: none; color: white;"><button class="btn btn-red btn-lg mt-3">Lire l'article</button></a>
                    
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php
    include("../includes/footer.php");
?>

    <script src="../public/js/bootstrap.bundle.min.js"></script>
</body>
</html>