<?php
require_once "Model.class.php";
require_once "Livre.class.php";
class LivreManager extends Model
{
    private $livres;

    //pas de constructeur car on utilise le constructeur par défaut qui contiendra le paramètre $livres
    public function ajoutLivre($livre)
    {
        $this->livres[] = $livre;
    }

    public function getLivres()
    {
        return $this->livres;
    }

    public function chargementLivres()
    {
        //préparer la requete
        $req = $this->getBdd()->prepare("SELECT * FROM livres");

        //exécuter la requete
        $req->execute();

        //récu^érer toutes 
        $mesLivres = $req->fetchall();

        //print_r avant le html
        // echo "<pre>";
        // print_r($mesLivres);
        // echo "</pre>";

        //fermer la requete
        $req->closeCursor();

        foreach ($mesLivres as $livre) {
            $l = new Livre($livre['id'], $livre['titre'], $livre['nbPages'], $livre['images']);
            $this->ajoutLivre($l);
        }
    }

    public function getLivreById($id)
    {
        // var_dump($this->livres);
        for ($i = 0; $i < count($this->livres); $i++) {
            if ($this->livres[$i]->getId() === (int) $id) {
                return $this->livres[$i];
            }
        }
        throw new Exception("Le livre n'existe pas");
    }

    public function ajoutLivreBd($titre, $nbPages, $image)
    {
        $req = "
        INSERT INTO livres (titre, nbPages, images)
        values (:titre, :nbPages, :image)";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":titre", $titre, PDO::PARAM_STR);
        $stmt->bindValue(":nbPages", $nbPages, PDO::PARAM_INT);
        $stmt->bindValue(":image", $image, PDO::PARAM_STR);
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        if ($resultat > 0) {
            $livre = new Livre($this->getBdd()->lastInsertId(), $titre, $nbPages, $image);
            $this->ajoutLivre($livre);
        }
    }

    public function suppressionLivreBd($id)
    {
        $req = "
        DELETE from livres WHERE id = :idLivre
        ";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":idLivre", $id, PDO::PARAM_INT);
        $resultat = $stmt->execute();
        $stmt->closeCursor();
        if ($resultat > 0) {
            $livre = $this->getLivreById($id);
            unset($livre);
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

    public function modificationLivreBd($id, $titre, $nbPages, $image)
    {
        $req = "
        update livres
        set titre = :titre, nbPages = :nbPages, images = :images
        where id = :id";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->bindValue(":titre", $titre, PDO::PARAM_STR);
        $stmt->bindValue(":nbPages", $nbPages, PDO::PARAM_INT);
        $stmt->bindValue(":images", $image, PDO::PARAM_STR);
        $resultat = $stmt->execute();

        $stmt->closeCursor();
        if ($resultat > 0) {
            $this->getLivreById($id)->setTitre($titre);
            $this->getLivreById($id)->setnbPages($nbPages);
            $this->getLivreById($id)->setImage($image);
        }
    }
}
