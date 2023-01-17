<?php
require_once "../Model.class.php";
require_once "Nft.class.php";
class NftManager extends Model
{
    private $nft;

    //pas de constructeur car on utilise le constructeur par défaut qui contiendra le paramètre $nft
    public function ajoutNft($nft)
    {
        $this->nft[] = $nft;
    }

    public function getNft()
    {
        return $this->nft;
    }

    public function chargementNft()
    {
        //préparer la requete
        $req = $this->getBdd()->prepare("SELECT * FROM nft");

        //exécuter la requete
        $req->execute();

        //récu^érer toutes 
        $mesNft = $req->fetchall();

        //print_r avant le html
        // echo "<pre>";
        // print_r($mesNft);
        // echo "</pre>";

        //fermer la requete
        $req->closeCursor();

        foreach ($mesNft as $nft) {
            $l = new Nft($nft['idNft'], $nft['nomNft'], $nft['images'], $nft['proprietaire']);
            $this->ajoutNft($l);
        }
    }

    public function getNftById($id)
    {
        // var_dump($this->livres);
        for ($i = 0; $i < count($this->nft); $i++) {
            if ($this->nft[$i]->getId() === (int) $id) {
                return $this->nft[$i];
            }
        }
        throw new Exception("Le nft n'existe pas");
    }

    public function ajoutNftBd($nomNft, $imageNft, $proprietaire)
    {
        $req = "
        INSERT INTO livres (nomNft, imageNft, proprietaire)
        values (:nomNft, :imageNft, :proprietaire)";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":nomNft", $nomNft, PDO::PARAM_STR);
        $stmt->bindValue(":imageNft", $imageNft, PDO::PARAM_STR);
        $stmt->bindValue(":proprietaire", $proprietaire, PDO::PARAM_STR);
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        if ($resultat > 0) {
            $nft = new Nft($this->getBdd()->lastInsertId(), $nomNft, $imageNft, $proprietaire);
            $this->ajoutNft($nft);
        }
    }

    public function suppressionNftBd($id)
    {
        $req = "
        DELETE from nft WHERE id = :idNft
        ";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":idNft", $id, PDO::PARAM_INT);
        $resultat = $stmt->execute();
        $stmt->closeCursor();
        if ($resultat > 0) {
            $nft = $this->getNftById($id);
            unset($nft);
        }
    }

    // public function modificationLivreBd($id, $nbPages, $titre, $image)
    // {
    //     $req = "UPDATE livres SET titre = :titre, nbPages = :nbPages , images = :image WHERE id = :id";
    //     $stmt = $this->getBdd()->prepare($req);
    //     $stmt->bindValue(":id", $id, PDO::PARAM_INT);
    //     $stmt->bindValue(":titre", $titre, PDO::PARAM_STR);
    //     $stmt->bindValue(":nbPages", $nbPages, PDO::PARAM_INT);
    //     $stmt->bindValue(":image", $image, PDO::PARAM_STR);
    //     $resultat = $stmt->execute();
    //     $stmt->closeCursor();
    //     return $resultat;
    // }

    public function modificationNftBd($id, $nomNft, $imageNft, $proprietaire)
    {
        $req = "
        update nft
        set nomNft = :nomNft, imageNft = :imageNft, proprietaire = :proprietaire
        where id = :idNft";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":idNft", $id, PDO::PARAM_INT);
        $stmt->bindValue(":nomNft", $nomNft, PDO::PARAM_STR);
        $stmt->bindValue(":imageNft", $imageNft, PDO::PARAM_STR);
        $stmt->bindValue(":proprietaire", $proprietaire, PDO::PARAM_STR);
        $resultat = $stmt->execute();

        $stmt->closeCursor();
        if ($resultat > 0) {
            $this->getNftById($id)->setNomNft($nomNft);
            $this->getNftById($id)->setImageNft($imageNft);
            $this->getNftById($id)->setProprietaire($proprietaire);
        }
    }
}
