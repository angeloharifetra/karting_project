<?php
    include("../config/database.php");

    $sql = "SELECT * FROM champion";

    $stmt = $pdo->prepare($sql);


    $stmt->execute();


    $champion = $stmt->fetchAll();    
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
    <?php foreach ($champion as $c){?>
    <div class="container-fluid row">
        <div class="col-md-5 col-12">
            <img src="<?php echo "../public/images/champion/" . $c['image_champion']; ?>" alt="Champions">
        </div>
        
        <div class="col-md-5 col-12">
            <h2>NOTRE CHAMPION</h2>
            <h1 class="text-danger"><?php echo $c['nom_champion']; ?>&nbsp;<?php echo $c['prenom_champion']; ?></h1>
            <p>Age : <?php echo $c['age']; ?></p>
            <p>Nationalite : <?php echo $c['nationalite']; ?></p>
            <p><?php echo $c['desc_champion']; ?></p>
        </div>
    </div>
    <?php }?>

    
</section>
<?php
    include("../includes/footer.php");
?>

    <script src="../public/js/bootstrap.bundle.min.js"></script>
</body>
</html>