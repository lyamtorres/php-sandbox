<html>
<header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</header>
<body>
<div class="container">
    <h2>Places de théâtre</h2>
    <hr>
<?php
//utiliser des sessions & cookies

    echo '<form action="" method="post">';
    echo '<div class="container"><div class="row">';
    echo '<div class="col-sm-2"><input type="submit" class="btn btn-secondary" name="reserver" value="Réserver des places"></div>';
    echo '<div class="col-sm-2"><input type="submit" class="btn btn-secondary" name="liberer" value="Libérer des places"></div>';
    echo '<div class="col-sm-2"><input type="submit" class="btn btn-secondary" name="afficherEtat" value="Afficher l\'état des réservations"><br><br></div>';
    echo '</div></div>';

    $categ = json_decode(file_get_contents("exo1.json"), true);

    if (isset($_POST['reserver'])) {
        echo '<select class="form-select form-select-lg mb-3" name="categorie">';
        echo '<option value="" selected disabled hidden>Sélectionner une catégorie</option>';
        echo '<option value="1" >Catégorie 1</option>';
        echo '<option value="2" >Catégorie 2</option>';
        echo '<option value="3" >Catégorie 3</option>';
        echo '</select><br>';
        echo '<input type="number" class="form-control" name="nombre" value="" min="1" placeholder="Saisir un nombre de places à réserver"><br>';
        echo '<input type="submit" class="btn btn-success" name="submitR" value="Valider"><br><br>';

    } elseif (isset($_POST['liberer'])) {
        echo '<select class="form-select form-select-lg mb-3" name="categorie">';
        echo '<option value="" selected disabled hidden>Sélectionner une catégorie</option>';
        echo '<option value="1" >Catégorie 1</option>';
        echo '<option value="2" >Catégorie 2</option>';
        echo '<option value="3" >Catégorie 3</option>';
        echo '</select><br>';
        echo '<input type="number" class="form-control" name="nombre" value="" min="1" placeholder="Saisir un nombre de places à libérer"><br>';
        echo '<input type="submit" class="btn btn-success" name="submitL" value="Valider"><br><br>';

    } elseif (isset($_POST['afficherEtat'])) {
        echo "<br>Nombre de places restantes de la catégorie 1 : " .  $categ["categorie1"];
        echo "<br>Nombre de places restantes de la catégorie 2 : " .  $categ["categorie2"];
        echo "<br>Nombre de places restantes de la catégorie 3 : " .  $categ["categorie3"];
    }

    if (isset($_POST['submitL'])) {
        if (!isset($_POST['categorie']) || !isset($_POST['nombre'])) {
            echo "Merci de renseigner toutes les informations";
        } else {
            if ($_POST['categorie'] == "1") { //25 places
                if ($categ["categorie1"] + $_POST['nombre'] > 25) {
                    echo "Le nombre de places libérées ne correspondent pas à la capacité de la salle";
                    $categ["categorie1"] = 25;
                } else {
                    $categ["categorie1"] = $categ["categorie1"] + $_POST['nombre'];
                    echo "Les places ont bien été libérée.";
                }
            }
            elseif ($_POST['categorie'] == "2") { //60 places
                if ($categ["categorie2"] + $_POST['nombre'] > 60) {
                    echo "Le nombre de places libérées ne correspondent pas à la capacité de la salle";
                    $categ["categorie2"] = 60;
                } else {
                    $categ["categorie2"] = $categ["categorie2"] + $_POST['nombre'];
                    echo "Les places ont bien été libérée.";
                }
            }
            elseif ($_POST['categorie'] == "3") { //45 places
                if ($categ["categorie3"] + $_POST['nombre'] > 45) {
                    echo "Le nombre de places libérées ne correspondent pas à la capacité de la salle";
                    $categ["categorie3"] = 45;
                } else {
                    $categ["categorie3"] = $categ["categorie3"] + $_POST['nombre'];
                    echo "Les places ont bien été libérée.";
                }
            }
        }
    }

    if (isset($_POST['submitR'])) {
        if (!isset($_POST['categorie']) || !isset($_POST['nombre'])) {
            echo "Merci de renseigner toutes les informations";
        } else {
            if ($_POST['categorie'] == "1") { //25 places
                if ($categ["categorie1"] - $_POST['nombre'] < 0) {
                    echo "Pas assez de places disponibles";
                } else {
                    $categ["categorie1"] = $categ["categorie1"] - $_POST['nombre'];
                    echo "Les places ont bien été réservée.";
                }
            }
            elseif ($_POST['categorie'] == "2") { //60 places
                if ($categ["categorie2"] - $_POST['nombre'] < 0) {
                    echo "Pas assez de places disponibles";
                } else {
                    $categ["categorie2"] = $categ["categorie2"] - $_POST['nombre'];
                    echo "Les places ont bien été réservée.";
                }
            }
            elseif ($_POST['categorie'] == "3") { //45 places
                if ($categ["categorie3"] - $_POST['nombre'] < 0) {
                    echo "Pas assez de places disponibles";
                } else {
                    $categ["categorie3"] = $categ["categorie3"] - $_POST['nombre'];
                    echo "Les places ont bien été réservée.";
                }
            }
        }
    }

    file_put_contents("exo1.json", json_encode($categ));

    echo '</form>';
?>