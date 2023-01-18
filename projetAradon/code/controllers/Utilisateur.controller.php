<?php
//pas besoin de ../ car on part directement de l'index qui est lui à l'extérieur de tout dossier
require_once "models/UtilisateurManager.class.php";

class UtilisateurController
{
    //utilise les attributs de la classe utilisateurManager
    private $utilisateurManager;

    public function __construct()
    {
        $this->utilisateurManager = new UtilisateurManager;
        $this->utilisateurManager->chargementUtilisateur();
    }

    public function afficherUtilisateurs()
    {
        $utilisateur = $this->utilisateurManager->getUtilisateur();
        require "views/utilisateur.view.php";
    }

    public function afficherUtilisateur($id)
    {
        $utilisateur = $this->utilisateurManager->getUtilisateurById($id);
        require "views/afficherUtilisateur.view.php";
    }
    public function modificationUtilisateur($id)
    {
        $utilisateur = $this->utilisateurManager->getUtilisateurById($id);
        require "views/modifierUtilisateur.view.php";
    }


    public function ajoutUtilisateur()
    {
        require "views/ajoutUtilisateur.view.php";
    }
    public function ajoutUtilisateurValidation()
    {
        $file = $_FILES['profilPicture'];
        // echo "<pre>";
        // print_r($file);
        // echo "</pre>";
        $repertoire = "public/images/profilPicture";
        $nomImageAjoute = $this->ajoutImageUtilisateur($file, $repertoire);
        //pas convaincu des _post utilisé, idUtilisateur plutot que dateCreationProfil? comment gérer la date de création du profil automatiquement?
        $this->utilisateurManager->ajoutUtilisateurBd($_POST['pseudo'], $_POST['adresseMail'], $_POST['password'], $_POST['adresse'], $_POST['dateOfBirth'], $nomImageAjoute, null);
        header('location: ' . URL . "utilisateur");

        $_SESSION['alert'] = [
            "type" => "success",
            "msg" => "Ajout réalisé"
        ];
    }

    public function suppressionUtilisateur($id)
    {
        $nomImage = $this->utilisateurManager->getUtilisateurById($id)->getImage();
        unlink("public/images/profilPicture" . $nomImage);
        $this->utilisateurManager->suppressionUtilisateurBd($id);
        header('location: ' . URL . "utilisateur");

        $_SESSION['alert'] = [
            "type" => "success",
            "msg" => "Suppression réalisé"
        ];
    }
    private function ajoutImageUtilisateur($file, $dir)
    {
        if (!isset($file['profilPicture']) || empty($file['profilPicture']))
            throw new Exception("Vous devez indiquer une image pour l'utilisateur");

        if (!file_exists($dir)) mkdir($dir, 0777);

        $extension = strtolower(pathinfo($file['profilPicture'], PATHINFO_EXTENSION));
        $random = rand(0, 99999);
        $targetfile = $dir . $random . "" . $file['profilPicture'];

        if (!getimagesize($file["tmp_profilPicture"]))
            throw new Exception("Le fichier n'est pas une image");
        if ($extension !== "jpg" && $extension !== "jpeg" && $extension !== "png" && $extension !== "gif")
            throw new Exception("L'extension du fichier n'est pas reconnu");
        if (file_exists($targetfile))
            throw new Exception("Le fichier existe déjà");
        if ($file['size'] > 500000)
            throw new Exception("Le fichier est trop gros");
        if (!move_uploaded_file($file['tmp_profilPicture'], $targetfile))
            throw new Exception("l'ajout de l'image n'a pas fonctionné");
        else return ($random . "" . $file['profilPicture']);
    }

    public function modificationUtilisateurValidation()
    {
        $imageActuelle = $this->utilisateurManager->getUtilisateurById($_POST['username'])->getImage();

        $file = $_FILES['profilPicture'];

        if ($file['size'] > 0) {
            unlink("public/images/profilPicture" . $imageActuelle);
            $repertoire = "public/images/profilPicture";
            $nomImageToAdd = $this->ajoutImageUtilisateur($file, $repertoire);
        } else {
            $nomImageToAdd = $imageActuelle;
        }
        $this->utilisateurManager->modificationUtilisateurBd($_POST['username'], $_POST['titre'], $_POST['nbPages'], $nomImageToAdd);
        header('location: ' . URL . "livres");

        $_SESSION['alert'] = [
            "type" => "success",
            "msg" => "Modification réalisé"
        ];
    }
}
