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
        var_dump($_POST);
        require "views/nft/add.php";
    }

    public function submitForm()
    {
        $isAddable = !isset($_POST['nom']) || empty($_POST['nom']) && !isset($_POST['imageNft']) || empty($_POST['imageNft']);
        if (!$isAddable) throw new Exception("Missing some parameters", 400);

        $newNft = $_FILES['image'];
        $pathOfNewNft = Functions::getRandomiseImageName($newNft['nom']);

        Functions::imageValidation($newNft, $pathOfNewNft, ENV::$NFT_PATH);

        $newNft = array(
            'nom' => $_POST['nom'],
            'imageNft' => $_POST['imageNft'],
            
        );

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





    public function updateForm()
    {
        $oldFileName = $this->nftRepository->getNftById($_POST['id'])->getFileName();
        $file = $_FILES['images'];
        $nameImageToAdd = $file['size'] <= 0 ? $oldFileName : Functions::getRandomiseImageName($file['name']);
        Functions::imageValidation($file, $nameImageToAdd, ENV::$NFT_PATH);

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
