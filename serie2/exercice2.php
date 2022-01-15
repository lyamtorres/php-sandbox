<?php

    if (filter_has_var(INPUT_POST, 'value')) {
        $value = enterPositifInteger();

        while ($value > 1) {
        
            if (isPair($value)) {
                $value = half($value);
            } else {
                $value = onePlusTriple($value);
            }

            echo "$value <br>";

        }
    }

    function isPair($value) {
        return $value % 2 == 0 ? true : false; 
    }

    function half($value) {
        return $value / 2;
    }

    function onePlusTriple($value) {
        return $value * 3 + 1;
    }

    function enterPositifInteger() {
        return $_POST['value'] > 0 ? $_POST['value'] : "Ajoutez un entier positif." ;
    }

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="value">Nombre</label>
    <input type="number" id="value" name="value"><br><br>

    <button type="submit" name="submit">Calculer</button>
</form>