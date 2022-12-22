<?php
//vérifie si j'ai bien une url id et qui n'est pas vide
if (isset($_GET['id']) && !empty(trim($_GET['id']))) {
    //inclure ma connexion
    require_once "../php/config.php";


    //prepare ma requete pour récupérer le user en fonction de l'id
    $sql = "SELECT * FROM mapremieretable WHERE id = ?";

    //est ce que ma requete est bonne, si oui je lies la requete de  la ligne 12 à la requete ligne 8
    if ($stmt = mysqli_prepare($link, $sql)) {
        mysqli_stmt_bind_param($stmt, "i", $param_id);

        $param_id = trim($_GET['id']);

        //exécute la requete + vérifie si l'exécution se passe bien
        if (mysqli_stmt_execute($stmt)) {
            //récupère le nombre de requete envoyé
            $result = mysqli_stmt_get_result($stmt);

            //un id = un enregistrement
            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                $email = $row['email'];
                $mdp = $row['motDePasse'];
            } else {

                header("location: index.php");
                exit();
            }
        } else {
            echo "oops, problème de connexion à la BDD, veuillez réessayer";
        }
    }
    //vide la mémoire
    mysqli_stmt_close($stmt);

    //déconnexion de la BDD
    mysqli_close($link);
} else {

    header("location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>READ (lecture)</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css>
    <style>
        .wrapper {
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>

<body>

<div class=" wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mt-5 mb-3">Lecture</h1>
                <div class="form-group">
                    <label for="">Email</label>
                    <p><?= $row["email"]; ?></p>

                </div>
                <div class="form-group">
                    <label for="">Mot de passe</label>
                    <p><?= $row["motDePasse"]; ?></p>

                </div>
                <div class="form-group">
                    <label for="">Role</label>
                    <p><?= $row["role"]; ?></p>

                </div>
            </div>
        </div>

    </div>
    <a href="index.php" class="btn btn-secondary ml-2">Retour à la page d'acceuil</a>


    </div>

    </body>

</html>