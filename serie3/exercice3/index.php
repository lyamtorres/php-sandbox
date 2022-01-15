<?php

    session_start();

    if (isset($_POST['init'])) {
        $_SESSION["n"] = 25;
        echo "La partie commence...";
    }
    
    if (isset($_POST['submit'])) {
        $value = $_POST['tokens'];

        if ($_POST['tokens'] < 1 || $_POST['tokens'] > 6) {
            echo "Vous pouvez uniquement ôter entre 1 et 6 jetons.";
        } else {
            $result = $_SESSION["n"] - $value;
            if ($result <= 0 || $result % 7 == 0) {
                echo "Partie terminée. Lyam gagne !";
            } else {
                // Player phase
                echo "Scott ôte " . $value . " jetons. <br>";
                $_SESSION["n"] -= $value;
                echo "Ils restent " . $_SESSION["n"] . " jetons. <br>";
                echo "... <br>";
                // Enemy phase
                $random = rand(1, 6);
                echo "Jarvis ôte " . $random . " jetons. <br>";
                $result = $_SESSION["n"] - $random;
                if ($result <= 0 || $result % 7 == 0) {
                    echo "Partie terminée. Jarvis gagne !";
                } else {
                    $_SESSION["n"] -= $random;
                    echo "Ils restent " . $_SESSION["n"] . " jetons. <br>";
                }
            }

        }
    }

?>

<!DOCTYPE html>
<html>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <label for="tokens">Jetons à ôter</label>
        <input type="number" name="tokens" id="tokens">

        <button type="submit" name="init">Commencer partie</button>
        <button type="submit" name="submit">Envoyer</button>
    </form>
</body>
</html>