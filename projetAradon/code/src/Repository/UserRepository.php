<?php
require_once "src/Repository/AbstractRepository.php";
require_once "src/Models/User.php";

class UserRepository extends AbstractRepository
{
    public function addUser(User $user)
    {
        $req = "
        INSERT INTO utilisateur (pseudo, adresseMail, password, adresse, dateOfBirth, profilPicture, dateCreationProfil)
        values (:pseudo, :adresseMail, :password, :adresse, :dateOfBirth, :profilPicture, :dateCreationProfil)";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":pseudo", $user->getPseudo(), PDO::PARAM_STR);
        $stmt->bindValue(":adresseMail", $user->getEmail(), PDO::PARAM_STR);
        $stmt->bindValue(":password", $user->getPassword(), PDO::PARAM_STR);
        $stmt->bindValue(":adresse", $user->getAdresse(), PDO::PARAM_STR);
        $stmt->bindValue(":dateOfBirth", $user->getDateOfBirth(), PDO::PARAM_STR);
        $stmt->bindValue(":profilPicture", $user->getProfilPicture(), PDO::PARAM_STR);
        $stmt->bindValue(":dateCreationProfil", $user->getCreateAccount(), PDO::PARAM_STR);
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        if ($resultat > 0) {
            return new User($this->getBdd()->lastInsertId(), $user->getPseudo(), $user->getEmail(), $user->getPassword(), $user->getAdresse(), $user->getDateOfBirth(), $user->getProfilPicture(), $user->getCreateAccount());
        }
    }

    public function getUsers()
    {
        $req = $this->getBdd()->prepare("SELECT * FROM utilisateur");

        //exécuter la requete
        $req->execute();

        //récu^érer toutes 
        $users = $req->fetchall();

        $req->closeCursor();

        return $users;
    }

    public function getUserById($id)
    {
        try {
            $req = "SELECT * FROM utilisateur WHERE idUtilisateur=:id";
            $stmt = $this->getBdd()->prepare($req);
            $stmt->bindValue(":id", $id, PDO::PARAM_STR);
            $user = $stmt->execute();
            $stmt->closeCursor();

            return $user;
        } catch (Exception $e) {
            echo 'Exception reçue : ',  $e->getMessage(), "\n";
        }
    }

    public function delete($id)
    {
        try {
            $req = "DELETE FROM utilisateur WHERE idUtilisateur = :id";
            $stmt = $this->getBdd()->prepare($req);
            $stmt->bindValue(":id", $id, PDO::PARAM_INT);
            $resultat = $stmt->execute();
            $stmt->closeCursor();
        } catch (Exception $e) {
            echo 'Exception reçue : ',  $e->getMessage(), "\n";
        }
    }

    public function update(User $user)
    {
        $req = "
        UPDATE nft
        SET pseudo = :pseudo, adresseMail = :adresseMail, password = :password, adresse = :adresse, dateOfBirth = :dateOfBirth, profilPicture = :profilPicture
        WHERE idUtilisateur = :id";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":id", $user->getId(), PDO::PARAM_INT);
        $stmt->bindValue(":pseudo", $user->getPseudo(), PDO::PARAM_STR);
        $stmt->bindValue(":adresseMail", $user->getEmail(), PDO::PARAM_STR);
        $stmt->bindValue(":password", $user->getPassword(), PDO::PARAM_STR);
        $stmt->bindValue(":adresse", $user->getAdresse(), PDO::PARAM_STR);
        $stmt->bindValue(":dateOfBirth", $user->getDateOfBirth(), PDO::PARAM_STR);
        $stmt->bindValue(":profilPicture", $user->getProfilPicture(), PDO::PARAM_STR);
        $resultat = $stmt->execute();

        $stmt->closeCursor();

        return $resultat;
    }
}
