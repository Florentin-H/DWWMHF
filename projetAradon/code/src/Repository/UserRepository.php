<?php
require_once "src/Repository/AbstractRepository.php";
require_once "src/Models/User.php";

class UserRepository extends AbstractRepository
{
    public function addUser($user)
    {
        $req = "
        INSERT INTO utilisateur (pseudo, adresseMail, password, adresse, dateOfBirth, profilPicture, dateCreationProfil)
        values (:pseudo, :email, :password, :adresse, :dateOfBirth, :profilPicture, :dateCreationProfil)";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":pseudo", $user['pseudo'], PDO::PARAM_STR);
        $stmt->bindValue(":email", $user['email'], PDO::PARAM_STR);
        $stmt->bindValue(":password", $user['password'], PDO::PARAM_STR);
        $stmt->bindValue(":adresse", $user['adresse'], PDO::PARAM_STR);
        $stmt->bindValue(":dateOfBirth", date("Y-m-d", strtotime($user['dateOfBirth'])), PDO::PARAM_STR);
        $stmt->bindValue(":profilPicture", $user['profilPicture'], PDO::PARAM_STR);
        $stmt->bindValue(":dateCreationProfil", date('Y-m-d h:i:s'), PDO::PARAM_STR);
        $resultat = $stmt->execute();
        $stmt->closeCursor();
        if ($resultat > 0) {
            return new User($this->getBdd()->lastInsertId(), $user['pseudo'], $user['email'], $user['password'], $user['adresse'], $user['dateOfBirth'], $user['profilPicture'], date('Y-m-d h:i:s'));
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
            $stmt->bindValue(":id", $id, PDO::PARAM_INT);
            $stmt->execute();
            $user = $stmt->fetch();
            $stmt->closeCursor();

            return $user;
        } catch (Exception $e) {
            echo 'Exception reçue : ',  $e->getMessage(), "\n";
        }
    }

    public function getUserByEmail($email)
    {
        try {
            $req = "SELECT * FROM utilisateur WHERE adresseMail=:email";
            $stmt = $this->getBdd()->prepare($req);
            $stmt->bindValue(":email", $email, PDO::PARAM_STR);
            $stmt->execute();
            $user = $stmt->fetch();
            $stmt->closeCursor();

            return new User($user["idUtilisateur"], $user["pseudo"], $user["adresseMail"], $user["password"], $user["adresse"], $user["dateOfBirth"], $user["profilPicture"], $user["dateCreationProfil"]);
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

    public function update($user)
    {
        $req = "
        UPDATE nft
        SET pseudo = :pseudo, adresseMail = :adresseMail, password = :password, adresse = :adresse, dateOfBirth = :dateOfBirth, profilPicture = :profilPicture
        WHERE idUtilisateur = :id";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":id", $user['idUtilisateur'], PDO::PARAM_INT);
        $stmt->bindValue(":pseudo", $user['pseudo'], PDO::PARAM_STR);
        $stmt->bindValue(":adresseMail", $user['email'], PDO::PARAM_STR);
        $stmt->bindValue(":password", $user->getPassword(), PDO::PARAM_STR);
        $stmt->bindValue(":adresse", $user['adresse'], PDO::PARAM_STR);
        $stmt->bindValue(":dateOfBirth", $user->getDateOfBirth(), PDO::PARAM_STR);
        $stmt->bindValue(":profilPicture", $user->getProfilPicture(), PDO::PARAM_STR);
        $resultat = $stmt->execute();

        $stmt->closeCursor();

        return $resultat;
    }
}
