<?php
    class Etudiant {
        private $prenom;
        private $nom;

        public function __construct($prenom, $nom) {
            $this->prenom = $prenom;
            $this->nom = $nom;
        }

        public function get_prenom() {
            return $this->prenom;
        }

        public function get_nom() {
            return $this->nom;
        }
    }

    // Récuperation des données d'une fichier json
    $json = file_get_contents('etudiants.json');
    $tab = json_decode($json, true);

    // Création du tableau d'instances
    $tabEtudiants = [];

    foreach ($tab['etudiants'] as $etudiant) {
        $prenom = $etudiant['prenom'];
        $nom = $etudiant['nom'];
        $nouveauEtu = new Etudiant($prenom, $nom);
        array_push($tabEtudiants, $nouveauEtu);
    }
?>

<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="d-flex justify-content-center">
    <?php
        // Affichage de la liste d'étudiants
        echo '<table class="table table-striped w-75 p-3">';
        echo '<thead>';
        echo '<tr>';
        echo '<th scope="col">Prénom</th>';
        echo '<th>Nom</th>';
        echo '</tr>';
        echo '</thead>';
        echo '</tbody>';

        foreach ($tabEtudiants as $etu) {
            $prenom = $etu->get_prenom();
            $nom = $etu->get_nom();

            echo '<tr>';
            echo '<td>' . $prenom . '</td>';
            echo '<td>' . $nom . '</td>';
            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
        echo '</body>';
        echo '</html>';
    ?>
    </div>
</body>
</html>



