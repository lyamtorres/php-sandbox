<?php
class Vehicule {
        private $couleur;
        private $poids;

        function __construct($couleur, $poids) {
            $this->couleur = $couleur;
            $this->poids = $poids;
        }

        public function getCouleur() {
            return $this->couleur;
        }

        public function setCouleur($couleur) {
            $this->couleur = $couleur;
        }

        public function getPoids() {
            return $this->poids;
        }

        public function setPoids($poids) {
            $this->poids = $poids;
        }

        public function rouler() {
            return "Le vÃ©hicule roule";
        }

        public function  ajouter_personne($poids_personne) {
            $poids = $this->getPoids() + $poids_personne;
            $this->setPoids($poids);
        }

    }

    class Quatre_roues extends Vehicule {
        private $nombre_porte;

        public function getNombrePorte() {
            return $this->nombre_porte;
        }

        public function setNombrePorte($nombre_porte) {
            $this->nombre_porte = $nombre_porte;
        }

        public function repeindre($couleur) {
            parent::setCouleur($couleur);
        }

    }

    class Deux_roues extends Vehicule {
        private $cylindree;

        public function getCylindree() {
            return $this->cylindree;
        }

        public function setCylindree($cylindree) {
            $this->cylindree = $cylindree;
        }

        public function mettre_essence($nombre_litre) {
            $poidsLitre = 0.9;
            $poids = parent::getPoids();
            $poids += $poidsLitre * $nombre_litre;
            parent::setPoids($poids);
        }

    }

    class Voiture extends Quatre_roues {
        private $nombre_pneu_neige;

        public function getNombrePneuNeige() {
            return $this->nombre_pneu_neige;
        }

        public function setNombrePneuNeige($nombre_pneu_neige) {
            $this->nombre_pneu_neige = $nombre_pneu_neige;
        }

        public function ajouter_pneu_neige($nombre) {
            $nbPneuNeige = $this->getNombrePneuNeige();
            $nbPneuNeige = $nbPneuNeige + $nombre;
            $this->setNombrePneuNeige($nbPneuNeige);
        }

        public function enlever_pneu_neige($nombre) {
            $nbPneuNeige = $this->getNombrePneuNeige();
            $nbPneuNeige = $nbPneuNeige - $nombre;
            $this->setNombrePneuNeige($nbPneuNeige);
        }

    }

    class Camion extends Quatre_roues {
        private $longueur;

        public function getLongueur() {
            return $this->longueur;
        }

        public function setLongueur($longueur) {
            $this->longueur = $longueur;
        }

        public function ajouter_remorque($longueur_remorque) {
            $longueur = $this->getLongueur() + $longueur_remorque;
            $this->setLongueur($longueur);
        }

    }
?>