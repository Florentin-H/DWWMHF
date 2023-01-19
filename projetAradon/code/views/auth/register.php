<?php ob_start() ?>

<div class="d-flex justify-content-center text-light pt-5 ">
    <form method="POST">
        <div class="form-group">
            <label for="username">Pseudo</label>
            <input class="form-control" type="text" name="username" required id="">
        </div>
        <div class="form-group">
            <label for="email">adresse Mail</label>
            <input class="form-control" type="email" name="email" required id="">
        </div>
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input class="form-control" type="password" name="password" required id="">
        </div>
        <div class="form-group">
            <label for="password_confirm">Confirmez votre mot de passe</label>
            <input class="form-control" type="password" name="password_confirm" required id="">
        </div>
        <div class="form-group">
            <label for="adresse">Adresse</label>
            <input class="form-control" type="text" name="adresse" required id="">
        </div>
        <div class="form-group">
            <label for="dateOfBirth">Date de naissance</label>
            <input class="form-control" placeholder="DD-MM-YYYY" type="text" name="dateOfBirth" required id="">
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
require "views/templateDisconnected.php";
