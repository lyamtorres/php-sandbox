<?php

    if (filter_has_var(INPUT_POST, 'encrypt')) {
        $message = htmlspecialchars($_POST['message']);
        $key = htmlspecialchars($_POST['key']);

        if (!empty($message) && !empty($key)) {
            encrypt($message, $key);
        } else {
            echo <<< _html
                <div class="alert alert-danger">
                    <strong>Tous les champs doivent être remplis.</strong>
                </div>
            _html;
        }
    }

    if (filter_has_var(INPUT_POST, 'decrypt')) {
        $message = htmlspecialchars($_POST['message']);
        $key = htmlspecialchars($_POST['key']);

        if (!empty($message) && !empty($key)) {
            decrypt($message, $key);
        } else {
            echo <<< _html
                <div class="alert alert-danger">
                    <strong>Tous les champs doivent être remplis.</strong>
                </div>
            _html;
        }
    }

    function encrypt($message, $key) {
        $array = str_split($message);
        $encryptedArray = []; 
        
        foreach($array as $value) {
            $ascii = ord($value); // Obtient valeur ASCII
            $newValue = chr($ascii + $key); // Obtient lettre décalée
            array_push($encryptedArray, $newValue);
        }
        
        $result = implode($encryptedArray);

        echo <<< _html
            <div class="alert alert-success">
                <strong>Mot chiffré : $result</strong>
            </div>
        _html;
    }

    function decrypt($message, $key) {
        $array = str_split($message);
        $decryptedArray = [];

        foreach($array as $value) {
            $ascii = ord($value); // Obtient valeur ASCII
            $newValue = chr($ascii - $key); // Obtient lettre décalée
            array_push($decryptedArray, $newValue);
        }

        $result = implode($decryptedArray);

        echo <<< _html
            <div class="alert alert-success">
                <strong>Mot déchiffré : $result</strong>
            </div>
        _html;
    }

?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Chiffre de César</h2>
        <hr>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="text" name="message" class="form-control" placeholder="Saisir le message à chiffrer" value="<?php echo isset($_POST['message']) ? $message : ''; ?>"><br>
            <input type="number" name="key" min="1" class="form-control" placeholder="Saisir la clé" value="<?php echo isset($_POST['key']) ? $key : ''; ?>"><br>
            <button type="submit" name="encrypt" class="btn btn-success">Chiffrer</button>
            <button type="submit" name="decrypt" class="btn btn-success">Déchiffrer</button>
        </form>
    </div>
</body>
</html>
