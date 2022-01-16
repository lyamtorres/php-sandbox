<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Tarifs des séances de cinéma</h2>

    <hr>

<form action="" method="post">

<?php

//laisser grâce aux issets les valeurs dans chaque case, puis les supprimer des $_POST

	echo '<select class="form-select form-select-lg mb-3" name="jour">';
	echo '<option value="" selected disabled hidden>Sélectionner un jour</option>';
	echo '<option value="Lundi" >Lundi</option>';
	echo '<option value="Mardi" >Mardi</option>';
	echo '<option value="Mercredi" >Mercredi</option>';
	echo '<option value="Jeudi" >Jeudi</option>';
	echo '<option value="Vendredi" >Vendredi</option>';
	echo '<option value="Samedi" >Samedi</option>';
	echo '<option value="Dimanche" >Dimanche</option>';
	echo '</select><br>';

	echo '<input type="number" class="form-control" name="age" value="" min="1" placeholder="Indiquez votre âge"><br>';

	echo '<input type="checkbox" class="form-check-input" name="etudiant">';
    echo '<label class="form-check-label" for="etudiant">Etudiant</label><br><br>';

	echo '<input type="submit" class="btn btn-success" name="submit" value="Soumettre"><br><br>';

	if (isset($_POST['jour'])) {
		echo "Jour : " . $_POST['jour'] . "<br>";
	}
	if (isset($_POST['etudiant'])) {
		echo "Etudiant<br>";
	}
	if (isset($_POST['age'])) {
		echo "Age : " . $_POST['age'] . "<br>";
	}

	if (isset($_POST['jour'])) {
		if ($_POST['jour'] == "Mercredi" || isset($_POST['etudiant'])) {
			echo "Prix de la place : Tarif réduit (4€50)";
		}
		elseif ($_POST['jour'] != "Mercredi" && !isset($_POST['age'])) {
			echo "Prix de la place : Plein tarif (7€)";
		}
		elseif ($_POST['age'] != null && ($_POST['age'] < "18" || $_POST['age'] > "65") && ($_POST['jour'] != "Samedi" || $_POST['jour'] != "Dimanche")) {
			echo "Prix de la place : Tarif réduit (4€50)";
		} else {
			echo "Prix de la place : Plein tarif (7€)";
		}
	} else {
		echo "Merci de sélectionner un jour";
	}
	unset($_POST['jour']);
	unset($_POST['age']);
	unset($_POST['etudiant']);
?>

</form>
</div>
</body>