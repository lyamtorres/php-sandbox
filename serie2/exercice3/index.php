<html>
<header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</header>
<body>
<div class="container">
    <h2>Exercice sur les classes</h2>

    <hr>

<?php

    require "class.php";

    echo "<i><h4>Créer une voiture verte de 1400 Kg.</h4></i><br>";

    $Voiture = new Voiture("Vert", "1400");

    echo "Couleur de la voiture : " . $Voiture->getCouleur() . "<br>";
    echo "Poids de la voiture : " . $Voiture->getPoids() . "<br>";

    echo "<br><i><h4>Ajouter deux personnes de 65 Kg chacune et affiche sa couleur et son nouveau poids.</h4></i><br>";

    $Voiture->ajouter_personne("65");
    $Voiture->ajouter_personne("65");

    echo "Couleur de la voiture : " . $Voiture->getCouleur() . "<br>";
    echo "Poids de la voiture : " . $Voiture->getPoids() . "<br>";

    echo "<br><i><h4>Repeindre la voiture en rouge, lui ajouter deux pneus neige et afficher sa couleur et
    son nombre de pneus neige.</h4></i><br>";

    $Voiture->repeindre("Rouge");
    $Voiture->ajouter_pneu_neige("2");

    echo "Couleur de la voiture : " . $Voiture->getCouleur() . "<br>";
    echo "Nombre de pneus neige de la voiture : " . $Voiture->getNombrePneuNeige() . "<br>";

    echo "<br><i><h4>Créer un objet Deux_roues noir de 110 Kg, lui ajouter une personne de 85 Kg et 
                afficher son poids après avoir mis 15 litres d'essence.</h4></i><br>";

    $DeuxRoues = new Deux_roues("Noir", "110");
    $DeuxRoues->ajouter_personne("85");
    $DeuxRoues->mettre_essence("15");

    echo "Poids de la voiture : " . $DeuxRoues->getPoids() . "<br>";

    echo "<br><i><h4>Créer un camion rouge de 11500 Kg d'une longueur de 12 mètres avec 4 portes, lui 
                ajouter une remorque de 7 mètres et afficher sa couleur, son poids et sa longueur.</h4></i><br>";
    $Camion = new Camion("Rouge", "11500");
    $Camion->setLongueur("12");
    $Camion->ajouter_remorque("7");
    $Camion->setNombrePorte("4");

    echo "Couleur de la voiture : " . $Camion->getCouleur() . "<br>";
    echo "Poids de la voiture : " . $Camion->getPoids() . "<br>";
    echo "Longueur de la voiture : " . $Camion->getLongueur() . "<br>";


?>

</div>
</body>