<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://bootswatch.com/5/darkly/bootstrap.min.css">


</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="../accueil/index.php">Accueil</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Facile</a>

                        <div class="dropdown-menu">
                            <?php for ($i = 1; $i <= 10; $i++) : ?>
                                <a class="dropdown-item" href="../facile/facile<?= $i ?>.php">exo <?= $i ?> </a>
                            <?php endfor; ?>
                        </div>
                    </li>
                    <li class=" nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Moyen</a>
                        <div class="dropdown-menu">
                            <?php for ($i = 1; $i <= 10; $i++) : ?>
                                <a class="dropdown-item" href="../moyen/moyen<?= $i ?>.php">exo <?= $i ?> </a>
                            <?php endfor; ?>


                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Difficile</a>
                        <div class="dropdown-menu">
                            <?php for ($i = 1; $i <= 10; $i++) : ?>
                                <a class="dropdown-item" href="../difficile/difficile<?= $i ?>.php">exo <?= $i ?> </a>
                            <?php endfor; ?>


                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Armes</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Exo 1</a>
                            <a class="dropdown-item" href="#">Exo 2</a>
                            <a class="dropdown-item" href="#">Exo 3</a>


                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <div class="container ">
        <h1 class="bg-primary m-4 p-2 text-center rounded"><?= $titre ?></h1>
    </div>

    <?php echo $content ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>