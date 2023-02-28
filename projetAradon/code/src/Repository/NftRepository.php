<?php
require_once "src/Repository/AbstractRepository.php";
require_once "src/Models/Nft.php";
class NftRepository extends AbstractRepository
{
    public function add($nft)
    {
        $req = "
        INSERT INTO nft (name, imagePath, userId)
        values (:name, :imagePath, :userId)";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":name", $nft['name'], PDO::PARAM_STR);
        $stmt->bindValue(":imagePath", $nft['imagePath'], PDO::PARAM_STR);
        $stmt->bindValue(":userId", $nft['userId'], PDO::PARAM_STR);
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
            $req = "SELECT * FROM nft WHERE id=:id";
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
            $req = "DELETE FROM nft WHERE id = :id";
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
        SET name = :name, imagePath = :imagePath, userId = :userId
        WHERE idNft = :id";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":id", $nft->getId(), PDO::PARAM_INT);
        $stmt->bindValue(":name", $nft->getName(), PDO::PARAM_STR);
        $stmt->bindValue(":imagePath", $nft->getimagePath(), PDO::PARAM_STR);
        $stmt->bindValue(":userId", $nft->getuserId(), PDO::PARAM_STR);
        $nft = $stmt->execute();

        $stmt->closeCursor();

        return $nft;
    }
}
