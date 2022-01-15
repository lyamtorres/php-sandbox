<?php
	$tab_dupont = ["prénom" => "PAUL","profession" => "ministre","age" => 50];
	$tab_durand = ["prénom" => "ROBERT","profession" => "agriculteur","age" => 45];
	$tab = ["Dupont" => $tab_dupont, "Durant" => $tab_durand];
?>

<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"> Clé </th>
                <th scope="col"> Valeur </th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach ($tab as $nom => $tableau) {
                echo '<tr>';
                echo '<td> ' . $nom . '</td>';
                echo '<td>';
                echo '<table class="table">';
                echo '<thead>';
                echo '<tr>';
                echo '<th scope="col"> Clé </th>';
                echo '<th scope="col"> Valeur </th>';
                echo '</tr>';
                echo '</thead>';
                echo '<tbody>';
                
                foreach ($tab[$nom] as $key => $value) {
                    echo '<tr>';
                    echo '<td style="width:50%">' . $key .'</td>';
                    echo '<td style="width:50%">' . $value . '</td>';
                    echo '</tr>';
                }
                
                echo '</tbody>';
                echo '</table>';
                echo '</td>';
                echo '</tr>';
            }
        ?>
        </tbody>	
    </table>
</body>
</html>