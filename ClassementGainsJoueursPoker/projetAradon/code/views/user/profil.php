<?php ob_start() ?>
<?php $user = $_SESSION['currentUser'];?>
<div class="container d-flex justify-content-between ">
    <div class="avatar-container">

        <?php if (!$user->getProfilPicture()) { ?>
            <span>
                <?= $user->getPseudo()[0] ?>
            </span>
            <?php } else { ?>
                <img src="<?= URL . Env::$AVATAR_PATH . $user->getProfilPicture() ?>" alt="profil picture">
            <?php } ?>
    </div>
            
    <div class="text-white">
        Pseudo : <?= $_SESSION['currentUser']->getPseudo(); ?>
    </div>
    <div class="text-white">
        Date de naissance : <?= $_SESSION['currentUser']->getDateOfBirth(); ?>
    </div>
</div>
    <div class="container d-flex justify-content-center mb-4">
        <div class="text-white flex-column">
            Tu nous as rejoins le : <?= $_SESSION['currentUser']->getDateProfilCreated(); ?>
        </div>     
    </div>
<div class="pt-5">
    <h2 class="text-white">Tes Nft</h2>
</div>




<?php
$content = ob_get_clean();
$titre = "Mon profil";
require "views/template.php";
