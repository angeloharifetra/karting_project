<?php
    include("../config/database.php");

    $nom = $_POST['nom'] ?? "";
    $email = $_POST['email'] ?? "";
    $passwd = $_POST['passwd'] ?? "";
    $sql = "SELECT * FROM utilisateur";


    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $users = $stmt->fetchAll();

    $image = "../public/images/auth/auth3.jpg";
    foreach($users as $user) {
        if($user['nom_user'] === $nom && $user['email'] === $email && $user['password'] === $passwd) {
            header("Location: ../admin/dashboard.php");
            exit;        
        }
        else if ($user['nom_user'] === $nom || $user['email'] === $email || $user['password'] === $passwd) {
            $image = "../public/images/auth/auth2.jpg";            
        }
        else {

            $image = "../public/images/auth/auth1.jpg";
        }
    }
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
        <?php include("../includes/header.php"); ?>
        <div class="container vh-100 d-flex align-items-center justify-content-center">
            <div class="row w-100">
                <div class="col-md-5 col-12" style="height:500px;">
                    <img src="<?php echo $image; ?>"
                        alt=""
                        class="w-100 h-100"
                        style="object-fit:cover;">
                </div>

                <div class="col-md-7 col-12 bg-dark text-white">
                    <h1>Login Administrator</h1>

                    <form action="./verify.php" method="post" class="container">
                        <input type="text" class="form-control m-3" name="nom" placeholder="Nom">
                        <input type="email" class="form-control m-3" name="email" placeholder="example@gmail.com">
                        <input type="password" class="form-control m-3" name="passwd" placeholder="Mot de passe">

                        <button class="m-3 btn btn-outline-danger col-12" type="submit">
                            Valider
                        </button>
                    </form>
                </div>
            </div>
        </div>
        
        <?php include("../includes/footer.php"); ?>
        <script src="../public/js/bootstrap.bundle.min.js"></script>
    </body>
</html>