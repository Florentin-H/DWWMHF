<?php
require_once "src/Repository/AbstractRepository.php";
require_once "src/Models/Nft.php";
class NftRepository extends AbstractRepository
{
    public function addNft($nft)
    {
        $req = "
        INSERT INTO livres (nomNft, fileName, proprietaire)
        values (:nomNft, :fileName, :proprietaire)";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":nomNft", $nft->getName(), PDO::PARAM_STR);
        $stmt->bindValue(":fileName", $nft->getFileName(), PDO::PARAM_STR);
        $stmt->bindValue(":proprietaire", $nft->getOwner(), PDO::PARAM_STR);
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

    public function update(Nft $nft)
    {
        $req = "
        UPDATE nft
        SET nomNft = :nomNft, fileName = :fileName, proprietaire = :owner
        WHERE idNft = :id";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":id", $nft->getId(), PDO::PARAM_INT);
        $stmt->bindValue(":nomNft", $nft->getName(), PDO::PARAM_STR);
        $stmt->bindValue(":fileName", $nft->getFileName(), PDO::PARAM_STR);
        $stmt->bindValue(":owner", $nft->getOwner(), PDO::PARAM_STR);
        $nft = $stmt->execute();

        $stmt->closeCursor();

        return $nft;
    }
}
