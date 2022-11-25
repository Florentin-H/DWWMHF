    <?php ob_start() ?>
    <?php

    $utilisateur = [
        array(
            'nom' => 'Lyberty', 'age' => 5, 'chien' => true
        ),
        array(
            'nom' => 'Joy', 'age' => 32, 'chien' => true
        ),
        array(
            'nom' => 'Inna', 'age' => 30, 'chien' => true
        ),
        array(
            'nom' => 'Ondine', 'age' => 32, 'chien' => false
        )
    ];
    ?>
    <form action="" method="GET" class="form-group">
        <button type="submit" name="all">Tous les animaux</button>
        <button type="submit" name="dog">Seulement les chiens</button>
        <button type="submit" name="cat">Seulement les chats</button>

        <?php if (isset($_GET["all"])) :
            for ($i = 0; $i < count($utilisateur); $i++) : ?>
                <?php if ($utilisateur[$i]['chien'] != true) {
                    $utilisateur[$i]['chien'] = 'chat';
                } else {
                    $utilisateur[$i]['chien'] = 'chien';
                }
                ?>
                <p>Nom: <?= $utilisateur[$i]['nom'] ?></p>
                <p>Age: <?= $utilisateur[$i]['age'] ?></p>
                <p>Animal: <?= $utilisateur[$i]['chien'] ?></p>
                <p>---------------------------------------------</p>
            <?php endfor ?>
        <?php endif ?>

        <?php if (isset($_GET["dog"])) :
            for ($i = 0; $i < count($utilisateur); $i++) : ?>
                <?php if ($utilisateur[$i]['chien'] == true) : ?>
                    <?php if ($utilisateur[$i]['chien'] != true) {
                        $utilisateur[$i]['chien'] = 'chat';
                    } else {
                        $utilisateur[$i]['chien'] = 'chien';
                    }
                    ?>
                    <p>Nom: <?= $utilisateur[$i]['nom'] ?></p>
                    <p>Age: <?= $utilisateur[$i]['age'] ?></p>
                    <p>Animal: <?= $utilisateur[$i]['chien'] ?></p>
                    <p>---------------------------------------------</p>
                <?php endif ?>
            <?php endfor ?>
        <?php endif ?>

        <?php if (isset($_GET["cat"])) :
            for ($i = 0; $i < count($utilisateur); $i++) : ?>
                <?php if ($utilisateur[$i]['chien'] != true) : ?>
                    <?php if ($utilisateur[$i]['chien'] != true) {
                        $utilisateur[$i]['chien'] = 'chat';
                    } else {
                        $utilisateur[$i]['chien'] = 'chien';
                    }
                    ?>
                    <p>Nom: <?= $utilisateur[$i]['nom'] ?></p>
                    <p>Age: <?= $utilisateur[$i]['age'] ?></p>
                    <p>Animal: <?= $utilisateur[$i]['chien'] ?></p>
                    <p>---------------------------------------------</p>
                <?php endif ?>
            <?php endfor ?>
        <?php endif ?>
    </form>

    <?php
    $content = ob_get_clean();
    $titre = "Fonctions et tableaux";
    require "../home/template.php";
    ?>