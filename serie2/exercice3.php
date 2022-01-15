<?php

    class Vehicule {

        protected $couleur;
        protected $poids;

        public function __construct($couleur, $poids) {
            $this->couleur = $couleur;
            $this->poids = $poids;
        }

        public function get_couleur() {
            return $this->couleur;
        }

        public function get_poids() {
            return $this->poids;
        }

        public function rouler() {
            echo "Le vehicule roule !";
        }

        public function ajouter_personne($p) {
            $this->poids += $p; 
        }

    }

    class Quatre_roues extends Vehicule {

        private $nombre_porte;

        public function __construct($couleur, $poids, $nombre_porte) {
            parent::__construct($couleur, $poids);
            $this->nombre_porte = $nombre_porte;
        }

        public function get_nombre_porte() {
            return $this->nombre_porte;
        }
        
        public function repeindre($couleur) {
            $this->couleur = $couleur;
        }

    }

    class Deux_roues extends Vehicule {
        
        public $cylindree;

        public function __construct($couleur, $poids, $cylindree) {
            parent::__construct($couleur, $poids);
            $this->nombre_porte = $cylindree;
        }

        public function mettre_essence($litres) {
            $this->poids += $litres * 0.9;
        }

    }

    class Voiture extends Quatre_roues {

        private $nombre_pneu_neige;

        public function __construct($couleur, $poids, $nombre_porte, $nombre_pneu_neige) {
            parent::__construct($couleur, $poids, $nombre_porte);
            $this->nombre_pneu_neige = $nombre_pneu_neige;
        }

        public function get_nombre_pneu_neige() {
            return $this->nombre_pneu_neige;
        }

        public function ajouter_pneu_neige($nombre) {
            $this->nombre_pneu_neige += $nombre;
        }

        public function enlever_pneu_neige($nombre) {
            $this->nombre_pneu_neige -= $nombre;
        }

    }

    class Camion extends Quatre_roues {

        private $longueur;

        public function __construct($couleur, $poids, $nombre_porte, $longueur) {
            parent::__construct($couleur, $poids, $nombre_porte);
            $this->longueur = $longueur;
        }

        public function get_longueur() {
            return $this->longueur;
        }

        public function ajouter_remorque($longueur_remorque) {
            $this->longueur += $longueur_remorque;
        }

    }

    // Fonction principale
    $tesla_model_x = new Voiture('Vert', 1400, 4, 4);
    $tesla_model_x->ajouter_personne(56);
    echo $tesla_model_x->get_poids() . "<br>";

    $tesla_model_x->repeindre("Rouge");
    $tesla_model_x->ajouter_pneu_neige(2);
    echo $tesla_model_x->get_couleur() . "<br>";
    echo $tesla_model_x->get_nombre_pneu_neige() . "<br>";

    $harley_davidson_street = new Deux_roues("Noir", 110, 150);
    $harley_davidson_street->ajouter_personne(85);
    $harley_davidson_street->mettre_essence(15);
    echo $harley_davidson_street->get_poids() . "<br>";

    $mate = new Camion("Rouge", 11500, 4, 12);
    $mate->ajouter_remorque(7);
    echo $mate->get_couleur() . "<br>";
    echo $mate->get_poids() . "<br>";
    echo $mate->get_longueur() . "<br>";

?>