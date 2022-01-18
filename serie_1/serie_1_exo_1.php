<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<div class="container">
    <h2>Liste des nombres parfaits de 1 à 100</h2>

    <hr>

<?php

	$tab = [];
	for ($i = 1; $i <= 100; $i++) {
		$tabDiviseurs = [];
		for ($j = 1; $j < $i; $j++) {
			if ($i % $j == 0) {
				array_push($tabDiviseurs, $j);
			}
		}
		$res = 0;
		$cpt = 0;
		for ($j = 0; $j < count($tabDiviseurs); $j++) {
			$res += $tabDiviseurs[$j];
		}
		if ($res == $i) {
			$tab[$i] = " est un nombre parfait !";
		}
	}
    echo "<table class='table table-striped'>";
	foreach ($tab as $key => $value) {
        echo "<tr><td>";
        echo $key . " : " . $value . "<br>";
        echo "</td></tr>";
	}
    echo "</table>";

?>

</div>