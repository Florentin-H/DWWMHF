<?php
require_once "src/Repository/AbstractRepository.php";
require_once "src/Models/Nft.php";
class NftRepository extends AbstractRepository
{
    public function addNft($nft)
    {
        $req = "
        INSERT INTO nft (nomNft, imageNft, proprietaire)
        values (:nom, :image, :proprietaire)";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":nom", $nft['nom'], PDO::PARAM_STR);
        $stmt->bindValue(":imageNft", $nft['imageNft'], PDO::PARAM_STR);
        $stmt->bindValue(":proprietaire", $nft->getproprietaire(), PDO::PARAM_STR);
        $nft = $stmt->execute();
        $stmt->closeCursor();

        return $nft;
    }

    public function getNfts()
    {
        $req = $this->getBdd()->prepare("SELECT * FROM nft");

        //exécuter la requete
        $req->execute();

        //récu^érer toutes 
        $nfts = $req->fetchall();

        $req->closeCursor();

        return $nfts;
    }

    public function getNftById($id)
    {
        try {
            $req = "SELECT * FROM nft WHERE idNft=:id";
            $stmt = $this->getBdd()->prepare($req);
            $stmt->bindValue(":id", $id, PDO::PARAM_STR);
            $nft = $stmt->execute();
            $stmt->closeCursor();

            return $nft;
        } catch (Exception $e) {
            echo 'Exception reçue : ',  $e->getMessage(), "\n";
        }
    }

    public function delete($id)
    {
        try {
            $req = "DELETE FROM nft WHERE idNft = :id";
            $stmt = $this->getBdd()->prepare($req);
            $stmt->bindValue(":id", $id, PDO::PARAM_INT);
            $resultat = $stmt->execute();
            $stmt->closeCursor();
        } catch (Exception $e) {
            echo 'Exception reçue : ',  $e->getMessage(), "\n";
        }
    }

    public function update($nft)
    {
        $req = "
        UPDATE nft
        SET nomNft = :nomNft, imageNft = :imageNft, proprietaire = :proprietaire
        WHERE idNft = :id";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":id", $nft->getId(), PDO::PARAM_INT);
        $stmt->bindValue(":nomNft", $nft->getName(), PDO::PARAM_STR);
        $stmt->bindValue(":imageNft", $nft->getimageNft(), PDO::PARAM_STR);
        $stmt->bindValue(":proprietaire", $nft->getproprietaire(), PDO::PARAM_STR);
        $nft = $stmt->execute();

        $stmt->closeCursor();

        return $nft;
    }
}
