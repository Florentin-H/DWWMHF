<?php
require_once "Model.class.php";
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
}
