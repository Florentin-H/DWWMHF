<?php ob_start() ?>

<div class="d-flex justify-content-center text-light pt-5 ">
    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="pseudo">Pseudo</label>
            <input class="form-control" type="text" name="pseudo" required >
        </div>
        <div class="form-group">
            <label for="email">adresse Mail</label>
            <input class="form-control" type="email" name="email" required >
        </div>
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input class="form-control" type="password" name="password" required >
        </div>
        <div class="form-group">
            <label for="password_confirm">Confirmez votre mot de passe</label>
            <input class="form-control" type="password" name="password_confirm" required >
        </div>
        <div class="form-group">
            <label for="address">Adresse</label>
            <input class="form-control" type="text" name="address" required >
        </div>
        <div class="form-group">
            <label for="dateOfBirth">Date de naissance</label>
            <input class="form-control" placeholder="DD-MM-YYYY" type="text" name="dateOfBirth" required >
        </div>
        <div class="mb-3">
            <label for="profilPicture" class="form-label">Photo de profil</label>
            <input class="form-control" placeholder="pas configuré" type="file" id="image" name="profilPicture">
        </div>
        <button type="submit" class="btn btn-success form-control">S'inscrire</button>
    </form>
</div>




<?php
$content = ob_get_clean();
$titre = "Inscription";
require "views/template.php";
