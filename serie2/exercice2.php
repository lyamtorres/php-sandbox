<html>
<header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</header>
<body>
<div class="container">
    <h2>Enigme mathématique</h2>

    <hr>

<?php

    function est_pair($nb) {
        if ($nb % 2 == 0) {
            return true;
        } else {
            return false;
        }
    }

    function moitie($nb) {
        return $nb / 2;
    }

    function un_plus_triple($nb) {
        return ($nb * 3) + 1;
    }

    function saisie_entier_positif() {
        echo '<input type="number" class="form-control"  name="nombre" value="" min="1" placeholder="Saisir un entier positif"><br>';
    }

//--------------------------------------------------------------------------------------------------------------------//

    echo '<form action="" method="post">';

    saisie_entier_positif();
    echo '<input type="submit" class="btn btn-success" name="submit" value="Soumettre"><br>';
    echo "<br><table class='table table-striped'>";

    if (isset($_POST['nombre'])) {
        if ($_POST['nombre'] == null) {
            echo "<br>Merci de saisir une valeur.";
        } else {
            $nombre = $_POST['nombre'];
            echo "<tr><th>";
            echo "Le nombre saisi vaut : " . $nombre;
            echo "</th></tr>";
            $i = 0;
            while ($nombre > 1) {
                $i++;
                echo "<tr><td>";
                if (est_pair($nombre)) {
                    $nombre = moitie($nombre);
                    echo "A l'étape " . $i . ", le nombre vaut : " . $nombre . "<br>";
                } else {
                    $nombre = un_plus_triple($nombre);
                    echo "A l'étape " . $i . ", le nombre vaut : " . $nombre . "<br>";
                }
                echo "</td></tr>";
            }
        }
    }
    echo "</table>";
    echo '</form>';

?>