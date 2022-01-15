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

    // Affichage de la liste d'étudiants
    echo <<< _html
        <!DOCTYPE html>
        <html>
        <style>
            table, th, td {
                border:1px solid black;
            }
        </style>
        <body>
            <table style="width: 25%">
            <tr>
                <th>Prénom</th>
                <th>Nom</th>
            </tr>
    _html;

    foreach ($tabEtudiants as $etu) {
        $prenom = $etu->get_prenom();
        $nom = $etu->get_nom();

        echo <<< _html
            <tr>
                <td>$prenom</td>
                <td>$nom</td>
            </tr>
        _html;
    }

    echo <<< _html
            </table>
        </body>
        </html>
    _html;

?>



