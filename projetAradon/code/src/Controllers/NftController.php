<?php
//pas besoin de ../ car on part directement de l'index qui est lui à l'extérieur de tout dossier
require_once "src/Repository/NftRepository.php";

class NftController
{
    //utilise les attributs de la classe NftRepository
    private $nftRepository;

    public function __construct()
    {
        $this->nftRepository = new NftRepository();
    }

    public function list()
    {
        $nfts = $this->nftRepository->getNfts();
        require "views/nft/list.php";
    }

    public function item($id)
    {
        $nft = $this->nftRepository->getnftById($id);
        require "views/nft/item.php";
    }

    public function edit($id)
    {
        $nft = $this->nftRepository->getNftById($id);
        require "views/nft/edit.php";
    }


    public function add()
    {
        require "views/nft/add.php";
    }

    public function submitForm()
    {
        $isAddable = !isset($_POST['name']) || empty($_POST['name']) && !isset($_POST['fileName']) || empty($_POST['fileName']) && !isset($_POST['proprietaire']) || empty($_POST['proprietaire']);
        if (!$isAddable) throw new Exception("Missing some parameters", 400);

        $newFile = $_FILES['image'];
        $pathOfNewFile = $this->getRandomiseImageName($newFile['name']);

        $this->imageValidation($newFile, $pathOfNewFile);

        // @TODO : important, ici changer le propriétaire, mettre l'utilisateur connecté de la session. ex: $_SESSION['currentUser']
        $newNft = new Nft(null, $newFile['name'], $_POST['fileName'], null);

        $this->nftRepository->addNft($newNft);

        header('location: ' . URL . "nft");

        $_SESSION['alert'] = [
            "type" => "success",
            "msg" => "Ajout réalisé"
        ];
    }

    public function delete($id)
    {
        $fileName = $this->nftRepository->getNftById($id)->getName();
        unlink(Env::$NFT_PATH . $fileName);
        $this->nftRepository->delete($id);
        header('location: ' . URL . "nft");

        $_SESSION['alert'] = [
            "type" => "success",
            "msg" => "Suppression réalisé"
        ];
    }

    private function getRandomiseImageName($fileName)
    {
        $random = rand(0, 99999);
        return $random . "" . $fileName;
    }

    private function imageValidation($file, $pathOfNewFile)
    {
        if (!isset($file['name']) || empty($file['name']))
            throw new Exception("Vous devez indiquer une image pour le Nft");

        if (!file_exists(Env::$NFT_PATH)) mkdir(Env::$NFT_PATH, 0777);

        $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

        if (!getimagesize($file["tmp_name"]))
            throw new Exception("Le fichier n'est pas une image");
        if ($extension !== "jpg" && $extension !== "jpeg" && $extension !== "png" && $extension !== "gif")
            throw new Exception("L'extension du fichier n'est pas reconnu");
        if (file_exists($pathOfNewFile))
            throw new Exception("Le fichier existe déjà");
        if ($file['size'] > 500000)
            throw new Exception("Le fichier est trop gros");
        if (!move_uploaded_file($file['tmp_name'], $pathOfNewFile))
            throw new Exception("l'ajout de l'image n'a pas fonctionné");
    }

    public function updateForm()
    {
        $oldFileName = $this->nftRepository->getNftById($_POST['id'])->getFileName();
        $file = $_FILES['images'];
        $nameImageToAdd = $file['size'] <= 0 ? $oldFileName : $this->getRandomiseImageName($file['name']);
        $this->imageValidation($file, $nameImageToAdd);

        unlink(Env::$NFT_PATH . $oldFileName);

        // @TODO : important, ici changer le propriétaire, mettre l'utilisateur connecté de la session. ex: $_SESSION['currentUser']
        $newNft = new Nft(null, $nameImageToAdd, $_POST['fileName'], null);
        $this->nftRepository->update($newNft);

        header('location: ' . URL . "livres");
        $_SESSION['alert'] = [
            "type" => "success",
            "msg" => "Modification réalisé"
        ];
    }
}
