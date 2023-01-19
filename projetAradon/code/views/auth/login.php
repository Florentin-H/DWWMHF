<?php ob_start() ?>

<div class="d-flex justify-content-center text-light pt-5 ">
    <form method="POST">
        <div class="form-group">
            <label for="">Email</label>
            <input class="form-control" type="text" name="email" required id="">
        </div>

        <div class="form-group">
            <label for="">Mot de passe</label>
            <input class="form-control" type="password" name="password" required id="">
        </div>

        <button type="submit" class="btn btn-success form-control">Se connecter</button>
    </form>
</div>

<?php
$content = ob_get_clean();
$titre = "Se connecter";
require "views/templateDisconnected.php";
