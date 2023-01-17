<?php ob_start() ?>

<div class="d-flex justify-content-center text-light pt-5 ">
    <form action="" method="POST">

        <div class="form-group">
            <label for="">Pseudo</label>
            <input class="form-control" type="text" name="username" required id="">
        </div>
        <div class="form-group">
            <label for="">adresse Mail</label>
            <input class="form-control" type="email" name="email" required id="">
        </div>
        <div class="form-group">
            <label for="">Mot de passe</label>
            <input class="form-control" type="password" name="password" required id="">
        </div>
        <div class="form-group">
            <label for="">Confirmez votre mot de passe</label>
            <input class="form-control" type="password" name="confirmPassword" required id="">
        </div>
        <div class="form-group">
            <label for="">Adresse</label>
            <input class="form-control" type="text" name="adresse" required id="">
        </div>
        <div class="form-group">
            <label for="">Date de naissance</label>
            <input class="form-control" type="text" name="dateOfBirth" required id="">
        </div>
        <div class="mb-3">
            <label for="profilPicture" class="form-label">Photo de profil</label>
            <input class="form-control" type="file" id="image" name="profilPicture">
        </div>

        <button type="submit" class="btn btn-success form-control">S'inscrire</button>


    </form>
</div>


<?php
$content = ob_get_clean();
$titre = "Inscription";
require "templateDisconnected.php";
