<?php

    $tab_dupont = ["prénom" => "PAUL","profession" => "ministre","age" => 50];
    $tab_durand = ["prénom" => "ROBERT","profession" => "agriculteur","age" => 45];
    $array = ["Dupont" => $tab_dupont, "Durant" => $tab_durand];

    echo <<< _END
        <table>
            <tr>
                <th>Clé</th>
                <th>Valeur</th>
            </tr>
    _END;
    foreach($array as $name => $subArray) {
        echo <<< _END
            <tr>
                <td>$name</td>
                <td>
                    <table>
                    <tr>
                        <th>Clé</th>
                        <th>Valeur</th>
                    </tr>
        _END;
        foreach($subArray as $key => $value) {
            echo <<< _END
                        <tr>
                            <td>$key</td>
                            <td>$value</td>
                        </tr>
            _END;
        }
        echo <<< _END
                    </table>
                </td>
            </tr>
        _END;
    }
    echo "</table>";

?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>

</body>
</html>