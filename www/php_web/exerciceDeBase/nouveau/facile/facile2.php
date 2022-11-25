<?php ob_start() ?>
<?php
//QUESTION 1 --------------------------------
$utilisateur = [
    array(
        'nom' => 'marie', 'age' => 30, 'homme' => false
    ),
    array(
        'nom' => 'Pierre', 'age' => 32, 'homme' => true
    )
];
?>
<div class="utilisateurs container border border-light">
    <p>Résultat et affichage :</p>
    <?php for ($i = 0; $i < count($utilisateur); $i++) :
        if ($utilisateur[$i]['homme'] == false) :

    ?><p><?= $utilisateur[$i]['nom'] ?> a <?= $utilisateur[$i]['age'] ?> ans et c'est une femme</p>
        <?php endif ?>
        <?php if ($utilisateur[$i]['homme'] == true) :

        ?><p><?= $utilisateur[$i]['nom'] ?> a <?= $utilisateur[$i]['age'] ?> ans et c'est un homme</p>
        <?php endif ?>
    <?php endfor ?>

</div>
<!-- -------------------------------- -->
<?php
//QUESTION 2 ---------------------------------------
require "function.php";

$nombre1 = 50;
$nombre2 = 1225;
$resultat1 = pair($nombre1);
$resultat2 = pair($nombre2);
?>
<div class="nombrePairEtImpair mt-2 container border border-light">
    <p><?= $nombre1 ?></p>
    <p><?= $nombre2 ?></p>
    <p>le chiffre <?= $resultat1 ? " est pair" : " est impair" ?> </p>
    <p>le chiffre <?= $resultat2 ? " est pair" : " est impair" ?> </p>
</div>

<?php
//QUESTION 3 ---------------------------------------
?>
<div class="pseudoAge container mt-2 container border border-light">
    <form action="" method="GET">
        <label>Quel est votre pseudo? </label>
        <input type="text" name="pseudo">

        <label>Quel est votre âge? </label>
        <input type="number" name="age">

        <button type="submit" name="btn" class="btn btn-primary">Envoyer</button>
        <?php if (isset($_GET["btn"])) : ?>
            <p> <?= $_GET['age'] . $_GET['pseudo'] ?></p>
        <?php endif ?>

    </form>
</div>

<?php
//QUESTION 4 ---------------------------------------
$nombre = $_POST['pair'];
$resultPair = pair($nombre);

?>
<div class="saisitUnChiffre container mt-2 container border border-light">

    <form action="" method="POST">
        <label>Votre nombre est il pair ou impair? </label>
        <input type="number" name="pair">
        <button type="submit" name="btnPair" class="btn btn-primary">Envoyer</button>

    </form>
    <?php if (isset($_POST["btnPair"])) : ?>
        <p> <?= $resultPair ? "le nombre est pair" : "le nombre est impair" ?></p>
    <?php endif ?>
</div>

<?php
$content = ob_get_clean();
$titre = "Exercice 2";
require "../home/template.php";
?>