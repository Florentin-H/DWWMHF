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
        for ($i = 0; $i < count($this->livres); $i++) {
            if ($this->livres[$i]->getId() === $id) {
                return $this->livres[$i];
            }
        }
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
}
