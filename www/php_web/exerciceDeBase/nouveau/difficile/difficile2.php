<?php ob_start(); ?>
<?php

if (isset($_POST['connexion'])) {
    $pseudo = $_POST['pseudo'];
    $pseudo;
}
?>
<div class="container w-25">
    <form action="" method="POST">
        <div>
            <label class="form-label mt-4">Adresse Email</label>
            <input type="text" name="pseudo" required class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">Nous ne partagerons jamais votre adresse email ou votre mot de passe.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1" class="form-label mt-4">Mot de passe</label>
            <input type="password" required class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
        </div>
        <div class="mt-2">
            <button type="submit" name="connexion" method="" class="btn btn-primary">Connexion</button>
            <button type="button" name="inscription" class="btn btn-light">Inscription</button>
        </div>
</div>
</form>
<div class="affichagePseudo container align-items-center w-25  p-2 mt-5 border border-light g-2 text-center">
    <p><?= $pseudo ?> est connecté</p>
</div>
<?php


$content = ob_get_clean();
$titre = "Page d'authentification";
require "../home/template.php";
?>