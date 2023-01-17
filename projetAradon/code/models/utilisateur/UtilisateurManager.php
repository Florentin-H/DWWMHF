<?php
require_once "../Model.class.php";
require_once "Utilisateur.class.php";
class UtilisateurManager extends Model
{
    private $utilisateur;

    //pas de constructeur car on utilise le constructeur par défaut qui contiendra le paramètre $utilisateur
    public function ajoutUtilisateur($utilisateur)
    {
        $this->utilisateur[] = $utilisateur;
    }

    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    public function chargementUtilisateur()
    {
        //préparer la requete
        $req = $this->getBdd()->prepare("SELECT * FROM utilisateur");

        //exécuter la requete
        $req->execute();

        //récu^érer toutes 
        $mesUtilisateur = $req->fetchall();

        //print_r avant le html
        // echo "<pre>";
        // print_r($mesNft);
        // echo "</pre>";

        //fermer la requete
        $req->closeCursor();

        foreach ($mesUtilisateur as $utilisateur) {
            $u = new Utilisateur($utilisateur['idUtilisateur'], $utilisateur['pseudo'], $utilisateur['adresseMail'], $utilisateur['password'], $utilisateur['password'], $utilisateur['adresse'], $utilisateur['dateOfBirth'], $utilisateur['profilPicture']);
            $this->ajoutUtilisateur($u);
        }
    }

    public function getUtilisateurById($id)
    {
        // var_dump($this->livres);
        for ($i = 0; $i < count($this->utilisateur); $i++) {
            if ($this->utilisateur[$i]->getIdUtilisateur() === (int) $id) {
                return $this->utilisateur[$i];
            }
        }
        throw new Exception("L'utilisateur n'existe pas");
    }

    public function ajoutUtilisateurBd($pseudo, $adresseMail, $password, $adresse, $dateOfBirth, $profilPicture, $dateCreationProfil)
    {
        $req = "
        INSERT INTO utilisateur (pseudo, adresseMail, password, adresse, dateOfBirth, profilPicture, dateCreationProfil)
        values (:pseudo, :adresseMail, :password, :adresse, :dateOfBirth, :profilPicture, :dateCreationProfil)";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":pseudo", $pseudo, PDO::PARAM_STR);
        $stmt->bindValue(":adresseMail", $adresseMail, PDO::PARAM_STR);
        $stmt->bindValue(":password", $password, PDO::PARAM_STR);
        $stmt->bindValue(":adresse", $adresse, PDO::PARAM_STR);
        $stmt->bindValue(":dateOfBirth", $dateOfBirth, PDO::PARAM_STR);
        $stmt->bindValue(":profilPicture", $profilPicture, PDO::PARAM_STR);
        $stmt->bindValue(":dateCreationProfil", $dateCreationProfil, PDO::PARAM_STR);
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        if ($resultat > 0) {
            $utilisateur = new Utilisateur($this->getBdd()->lastInsertId(), $pseudo, $adresseMail, $password, $adresse, $dateOfBirth, $profilPicture, $dateCreationProfil);
            $this->ajoutUtilisateur($utilisateur);
        }
    }

    public function suppressionUtilisateurBd($id)
    {
        $req = "
        DELETE from utilisateur WHERE id = :idUtilisateur
        ";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":idUtilisateur", $id, PDO::PARAM_INT);
        $resultat = $stmt->execute();
        $stmt->closeCursor();
        if ($resultat > 0) {
            $utilisateur = $this->getUtilisateurById($id);
            unset($utilisateur);
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

    public function modificationUtilisateurBd($id, $pseudo, $adresseMail, $password, $adresse, $dateOfBirth, $profilPicture)
    {
        $req = "
        update nft
        set pseudo = :pseudo, adresseMail = :adresseMail, password = :password, adresse = :adresse, dateOfBirth = :dateOfBirth, profilPicture = :profilPicture
        where id = :idUtilisateur";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":idNft", $id, PDO::PARAM_INT);
        $stmt->bindValue(":pseudo", $pseudo, PDO::PARAM_STR);
        $stmt->bindValue(":adresseMail", $adresseMail, PDO::PARAM_STR);
        $stmt->bindValue(":password", $password, PDO::PARAM_STR);
        $stmt->bindValue(":adresse", $adresse, PDO::PARAM_STR);
        $stmt->bindValue(":dateOfBirth", $dateOfBirth, PDO::PARAM_STR);
        $stmt->bindValue(":profilPicture", $profilPicture, PDO::PARAM_STR);
        $resultat = $stmt->execute();

        $stmt->closeCursor();
        if ($resultat > 0) {
            $this->getUtilisateurById($id)->setpseudo($pseudo);
            $this->getUtilisateurById($id)->setadresseMail($adresseMail);
            $this->getUtilisateurById($id)->setpassword($password);
            $this->getUtilisateurById($id)->setpassword($adresse);
            $this->getUtilisateurById($id)->setpassword($dateOfBirth);
            $this->getUtilisateurById($id)->setpassword($profilPicture);
        }
    }
}
