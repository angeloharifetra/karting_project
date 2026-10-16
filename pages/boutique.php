<?php
    include("../config/database.php");

    $sql = "SELECT * FROM produit INNER JOIN categorie ON produit.id_cat = categorie.id_cat";

    $resulat = $pdo->query($sql);

    $produit = $resulat->fetchAll();
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
        <form action="./boutiques2.php" method="post" class="row">
            <div class="col-md-7 col-12">
                <h1>BOUTIQUES</h1>
            </div>
            <div class="col-md-3 col-12">
                <select class="form-select col-3" name="categorie">
                    <option selected value="cat">categorie :</option>
                    <option value="moteurs">Moteurs</option>
                    <option value="pneus">Pneus</option>
                    <option value="freins">Freins</option>
                    <option value="casques">Fasques</option>
                    <option value="combinaisons">Combinaison</option>
                    <option value="volants">Volants</option>
                    <option value="chassis">Chassis</option>
                    <option value="chaines">Chaines</option>
                    <option value="radiateurs">Radiateur</option>
                    <option value="accessoires">Accessoires</option>
                </select>
            </div>
            <div class="col-md-1 col-12">
                <button class="btn btn-danger col-12">
                    FILTRER
                </button>
            </div>
        </form>
        
        <div class="container-fuild row mt-5">
            <?php foreach($produit as $p){ ?>
            <div class="card col-md-2 col-12 m-2">
                <div class="card-body">
                    <div>
                    <img class="card-img-top" src="<?php echo '../public/images/' . $p['image_produit']; ?>" alt="Card Image">
                    </div>
                    <h3 class="card-title"><?php echo $p['nom_produit']; ?></h3>
                    <!-- <p class="card-text">Description : <br><?php //echo $p['desc_produit']; ?></p> -->
                    <p class="card-text">Prix : <?php echo $p['prix']; ?>MGA</p>
                    <p class="card-text">
                        <?php
                            $stockage = $p['stock']  > 0 ? "Disponible": "Non disponible";
                        ?>
                        stockage : <?php echo $stockage; ?>
                    </p>
                    <p class="card-text">Categorie : <?=  $p['nom_cat'] ?></p>
                    
                    <a href="./souspages/boutique_detail.php?id=<?php echo $p['id_produit']; ?>" style="text-decoration: none; color: white;"><button class="btn btn-red btn-lg mt-3">VOIR</button></a>
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