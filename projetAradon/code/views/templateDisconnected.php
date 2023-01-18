<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <title>Document</title>
</head>

<header>

    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid  ">
            <img src="public/images/logo/logoNftHaven.png" alt="">
            <a class="navbar-brand" href="index.php">NFT HAVEN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                            Explore
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">-Utilisateurs</a></li>
                            <li><a class="dropdown-item" href="#">-Collections</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>

                    </li>
                </ul>
                <div class="d-flex align-middle  connexion">

                    <li class="nav-item me-5 mb-4 text-end">
                        <a class="nav-link btn btn-success p-2 " " href=" <?= URL ?>login" tabindex="-1" aria-disabled="true">Sign in</a>
                    </li>
                    <li class="nav-item mb-4  text-end">
                        <a class="nav-link btn btn-warning p-2" href="<?= URL ?>register" tabindex="-1" aria-disabled="true">Sign up</a>
                    </li>
                </div>

            </div>
        </div>
    </nav>
</header>

<body>
    <div class="container">
        <h1 class=" p-2 m-2  ">
            <?= $titre ?>

        </h1>
    </div>
    <div class="container">
        <?= $content ?>

    </div>







    <footer>
        <div class="container d-flex justify-content-between">
            <p>NFTHaven</p>
            <p>NFTHaven</p>
            <p>NFTHaven</p>
            <p>Privacy policy</p>

        </div>

    </footer>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>



</html>