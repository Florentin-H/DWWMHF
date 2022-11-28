<?php ob_start() ?>
<?php

class Employe
{
    public $nom;
    public $prenom;
    public $adresse;
    public $ville;
    public $tel;


    public function __construct($prenom, $nom, $adresse, $ville, $tel)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->ville = $ville;
        $this->tel = $tel;
    }
    public function afficheEmploye()
    {
        echo  $this->nom  . " | " . $this->prenom . " | " . $this->adresse . " | " . $this->ville . " | " . $this->tel;
    }
}

$employe1 = new Employe("Fred", "gruw", "Terreur de Malo", "Saint Pol sur mer", "0617458062");
$employe3 = new Employe("Titi", "mai", "Terreur de Saint Pol", "Saint Pol sur mer", "0617458062");
$employe2 = new Employe("Maxime", "mil", "Terreur de l'AFCI", "Saint Pol sur mer", "0617458062");
?>
<table class="table table-warning container">
    <thead>
        <tr>
            <th scope="row">nom </th>
            <th scope="col">Prénom</th>
            <th scope="col">adresse</th>
            <th scope="col">ville</th>
            <th scope="col">téléphone</th>



            <?php $tabEmploye = [$employe1, $employe2, $employe3];
            sort($tabEmploye);
            for ($i = 0; $i < count($tabEmploye); $i++) {
                $tabEmploye[$i]->afficheEmploye(); ?>
                <br><?php
                }

                    ?>
        </tr>
    </thead>
</table>

<?php
$content = ob_get_clean();
$titre = "Fonctions et tableaux";
require "../home/template.php";
?>