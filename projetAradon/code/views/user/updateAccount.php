<?php ob_start();

$user = $_SESSION['currentUser'];
?>

<div class="d-flex align-items-center flex-column text-light pt-5 ">
    <div class="avatar-container">
        <?php if (!$user->getProfilPicture()) { ?>
            <span>
                <?= $user->getPseudo()[0] ?>
            </span>
        <?php } else { ?>
            <img src="<?= null ?>" alt="profil picture">
        <?php } ?>
    </div>
    <form method="POST">
        <div class="form-group">
            <label for="username">Pseudo</label>
            <input class="form-control" type="text" value="<?= $user->getPseudo() ?>" name="username" required id="">
        </div>
        <div class="form-group">
            <label for="email">adresse Mail</label>
            <input class="form-control" value="<?= $user->getEmail() ?>" type="email" name="email" required id="">
        </div>

        <div class="form-group">
            <label for="adresse">Adresse</label>
            <input class="form-control" type="text" value="<?= $user->getAdresse() ?>" name="adresse" required id="">
        </div>
        <div class="form-group">
            <label for="dateOfBirth">Date de naissance</label>
            <input class="form-control" placeholder="DD-MM-YYYY" value="<?= $user->getDateOfBirth() ?>" type="text" name="dateOfBirth" required id="">
        </div>
        <div class="mb-3">
            <label for="profilPicture" class="form-label">Photo de profil</label>
            <input class="form-control" type="file" id="image" name="profilPicture">
        </div>
        <button type="submit" class="btn btn-success form-control">Modifier mon profil</button>
    </form>
</div>




<?php
$content = ob_get_clean();
$titre = "Modifier mon profil";
require "views/template.php";
