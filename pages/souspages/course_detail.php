<?php

include("../../config/database.php");

$id = $_GET['id_course'];

$sql = "SELECT * FROM course WHERE id_course = :id";

$stmt = $pdo->prepare($sql);

$stmt->execute([':id' => $id]);

$course = $stmt->fetch();

// print_r($course);

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
        <?php echo $course['titre']; ?>
    </h1>

    <img
    src="../../public/images/<?php echo $course['image']; ?>"
     class="w-50">

    <h2 class="text-danger">
        <?php echo $course['desc_course']; ?>
    </h2>

    <h3>
        Lieu : <?php echo $course['lieux']; ?> le <?php echo $course['date_course']; ?>
    </h3>
    
    
    <a href="../calendrier.php" class="text-decoration-none"><button class="btn btn-outline-danger col-md-2 col-12">Retour</button></a>
</section>

    <script src="../../public/js/bootstrap.bundle.min.js"></script>
    <script src="../../public/js/dist/index.global.min.js"></script>
</body>
</html>

