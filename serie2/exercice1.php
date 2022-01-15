<?php

    if (filter_has_var(INPUT_POST, 'encrypt')) {
        $message = $_POST['message'];
        $key = $_POST['key'];

        encrypt($message, $key);
    }

    if (filter_has_var(INPUT_POST, 'decrypt')) {
        $message = $_POST['message'];
        $key = $_POST['key'];

        decrypt($message, $key);
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

        echo $result;

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

        echo $result;

    }

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="message">Message</label>
    <input type="text" id="message" name="message"><br><br>

    <label for="key">Clé</label>
    <input type="text" id="key" name="key"><br><br>

    <button type="submit" name="encrypt">Chiffrer</button>
    <button type="submit" name="decrypt">Déchiffrer</button>
</form>