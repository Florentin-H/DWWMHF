<?php
//pas besoin de ../ car on part directement de l'index qui est lui à l'extérieur de tout dossier
require_once "models/UtilisateurManager.class.php";

class UtilisateurController
{
    //utilise les attributs de la classe NftManager
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
        $file = $_FILES['imageUtilisateur'];
        // echo "<pre>";
        // print_r($file);
        // echo "</pre>";
        $repertoire = "public/images/nft";
        $nomImageAjoute = $this->ajoutImageNft($file, $repertoire);
        $this->nftManager->ajoutNftBd($_POST['nomNft'], $_POST['imageNft'], $nomImageAjoute);
        header('location: ' . URL . "nft");

        $_SESSION['alert'] = [
            "type" => "success",
            "msg" => "Ajout réalisé"
        ];
    }

    public function suppressionNft($id)
    {
        $nomImage = $this->nftManager->getNftById($id)->getImage();
        unlink("public/images/nft" . $nomImage);
        $this->nftManager->suppressionNftBd($id);
        header('location: ' . URL . "nft");

        $_SESSION['alert'] = [
            "type" => "success",
            "msg" => "Suppression réalisé"
        ];
    }
    private function ajoutImageNft($file, $dir)
    {
        if (!isset($file['name']) || empty($file['name']))
            throw new Exception("Vous devez indiquer une image pour le Nft");

        if (!file_exists($dir)) mkdir($dir, 0777);

        $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        $random = rand(0, 99999);
        $targetfile = $dir . $random . "" . $file['name'];

        if (!getimagesize($file["tmp_name"]))
            throw new Exception("Le fichier n'est pas une image");
        if ($extension !== "jpg" && $extension !== "jpeg" && $extension !== "png" && $extension !== "gif")
            throw new Exception("L'extension du fichier n'est pas reconnu");
        if (file_exists($targetfile))
            throw new Exception("Le fichier existe déjà");
        if ($file['size'] > 500000)
            throw new Exception("Le fichier est trop gros");
        if (!move_uploaded_file($file['tmp_name'], $targetfile))
            throw new Exception("l'ajout de l'image n'a pas fonctionné");
        else return ($random . "" . $file['name']);
    }

    public function modificationNftValidation()
    {
        $imageActuelle = $this->nftManager->getNftById($_POST['identifiant'])->getImage();

        $file = $_FILES['images'];

        if ($file['size'] > 0) {
            unlink("public/images/nft" . $imageActuelle);
            $repertoire = "public/images/nft";
            $nomImageToAdd = $this->ajoutImageNft($file, $repertoire);
        } else {
            $nomImageToAdd = $imageActuelle;
        }
        $this->nftManager->modificationNftBd($_POST['identifiant'], $_POST['titre'], $_POST['nbPages'], $nomImageToAdd);
        header('location: ' . URL . "livres");

        $_SESSION['alert'] = [
            "type" => "success",
            "msg" => "Modification réalisé"
        ];
    }
}
