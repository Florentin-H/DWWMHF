<?php ob_start();

$user = $_SESSION['currentUser'];
?>

<div class="d-flex align-items-center flex-column text-light pt-3 ">
    <div class="avatar-container">
        <?php if (!$user->getProfilPicture()) { ?>
            <span>
                <?= $user->getPseudo()[0] ?>
            </span>
        <?php } else { ?>
            <img src="<?= URL . Env::$AVATAR_PATH . $user->getProfilPicture() ?>" alt="profil picture">
        <?php } ?>
    </div>
    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="pseudo">Pseudo</label>
            <input class="form-control" type="text" value="<?= $user->getPseudo() ?>" name="pseudo" required>
        </div>
        <div class="form-group">
            <label for="email">adresse Mail</label>
            <input class="form-control" value="<?= $user->getEmail() ?>" type="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="address">Adresse</label>
            <input class="form-control" type="text" value="<?= $user->getAddress() ?>" name="address" required>
        </div>
        <div class="form-group">
            <label for="dateOfBirth">Date de naissance</label>
            <input class="form-control" placeholder="DD-MM-YYYY" value="<?= $user->getDateOfBirth() ?>" type="text" name="dateOfBirth" required>
        </div>
        <div class="mb-3">
            <label for="profilPicture" class="form-label">Photo de profil</label>
            <input class="form-control" type="file" id="profilPicture" name="profilPicture" value="<?= $user->getProfilPicture() ?>">
        </div>
        <button type="submit" class="btn btn-success form-control">Modifier mon profil</button>
    </form>
</div>




<?php
$content = ob_get_clean();
$titre = "Modifier mon profil";
require "views/template.php";
