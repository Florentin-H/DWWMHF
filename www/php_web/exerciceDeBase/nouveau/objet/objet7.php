<?php ob_start() ?>

<?php
//créer une classe permettant de gérer des livres. chaque livre comporte: un titre, une édition, un auteur, une date de parution.
//les attributs de la classe doivent être en private
//permettre à l'utilisateur de filtrer les listes sur l'édition et date de parution
//vous utiliserez la méthode de POST

class Bibliotheque
{
    private $titre;
    private $edition;
    private $auteur;
    private $parution;

    public function __construct($titre, $edition, $auteur, $parution)
    {
        $this->titre = $titre;
        $this->edition = $edition;
        $this->auteur = $auteur;
        $this->parution = $parution;
    }
    //getter
    public function getTitre()
    {
        return $this->titre;
    }
    public function getEdition()
    {
        return $this->edition;
    }
    public function getAuteur()
    {
        return $this->auteur;
    }
    public function getParution()
    {
        return $this->parution;
    }


    //setter
    public function setTitre()
    {
        return $this->titre;
    }
    public function setEdition()
    {
        return $this->edition;
    }
    public function setAuteur()
    {
        return $this->auteur;
    }
    public function setParution()
    {
        return $this->parution;
    }

    function __toString()
    {
        return "Titre: " . $this->titre . "<br>Edition: " . $this->edition . "<br>Auteur: " . $this->auteur . "<br>Paru en: " . $this->parution . "<br><br>";
    }
}
$livre1 = new Bibliotheque("les Misérables", "Gallica", "Victor Hugo", 1862);
$livre2 = new Bibliotheque("Bel-Ami", "Ollendorff", "Guy de Maupassant", 1885);
$livre3 = new Bibliotheque("Harry Potter à l'école des sorciers", "Folio Junior", "J. K. Rowling", 2017);
$livre4 = new Bibliotheque("Voyage au bout de la nuit", "Louis-Ferdinand Céline", "Folio ", 1972);
$livre5 = new Bibliotheque("à la recherche du temps perdu", "Gallimard", "Marcel Proust", 1999);
$livre6 = new Bibliotheque("Cent ans de solitude", "Points ", "Gabriel García Márquez", 1995);
$livre7 = new Bibliotheque("Le seigneur des anneaux t.1", "Gallimard-jeunesse ", "J.R.R. Tolkien", 2019);
$livre8 = new Bibliotheque("1984", "Folio", "George Orwell", 1972);
$livre9 = new Bibliotheque("L'étranger", "Folio ", "Albert Camus", 1972);
$livre10 = new Bibliotheque("Les misérables", "Ecpme des loisirs", "Victor Hugo", 2019);


$tabLivre = [$livre1, $livre2, $livre3, $livre4, $livre5, $livre6, $livre7, $livre8, $livre9, $livre10];
$edition = true;
if (isset($_POST["edition"])) {
    foreach ($tabLivre as $value) {
        if ($_POST['input'] == $value->getEdition()) {
            echo $value;
            $edition = false;
        }
    }
}

// if ($edition == true) {
//     echo "Votre edition n'est pas dans notre base de données";
// }

if (isset($_POST["date"])) {
    foreach ($tabLivre as $value) {
        if ($_POST['inputDate'] == $value->getParution()) {
            echo $value;
            $edition = false;
        }
    }
}

// if ($edition == true) {
//     echo "aucun livre n'a été enregistré à cette date";
// }


// echo $livre1;
// echo $livre2;
?>
<form action="" method="POST" class="container">
    <div class="container col-5">
        <label for="TrisEdition">Tris par Edition</label>
        <input type="text" class="form-control" placeholder="tris par édition" name="input" id="trisEdition">
        <button type="submit" class="btn btn-primary btn-lg " name="edition">Afficher cette édition</button>

    </div>

</form>
<form action="" method="POST" class="container">
    <div class="container col-5">
        <label for="TrisDate">Tris par date</label>
        <input type="text" class="form-control" placeholder="tris par édition" name="inputDate" id="trisDate">
        <button type="submit" class="btn btn-primary btn-lg " name="date">tris par date</button>

    </div>

</form>



<?php
$content = ob_get_clean();
$titre = "La Bibliothèque";
require "../home/template.php";
?>