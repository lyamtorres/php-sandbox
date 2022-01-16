<?php
    session_start();

    if (isset($_POST['close'])) {
        header('location: index.php');
    }
    
    if (isset($_POST['submit'])) {
        $value = $_POST['tokens'];
        $result = $_SESSION["n"] - $value;

        if ($result <= 0 || $result % 7 == 0) {
            $_SESSION["n"] -= $value;
            $result = $_SESSION["n"];
            echo <<< _html
                <div class="alert alert-primary">
                    Joueur 1 ôte $value jetons. <br>
                    Ils restent $result jetons. <br>
                    Partie terminée. Joueur 1 gagne ! <br>
                </div>
            _html;
        } else {
            // Player phase
            $_SESSION["n"] -= $value;
            echo <<< _html
                <div class="alert alert-primary">
                    Joueur 1 ôte $value jetons. <br>
                    Ils restent $result jetons. <br>
                </div>
            _html;
            // Enemy phase
            $random = rand(1, 6);
            $_SESSION["n"] -= $random;
            $result = $_SESSION["n"];
            echo <<< _html
                <div class="alert alert-primary">
                    Jarvis ôte $random jetons. <br>
                    Ils restent $result jetons. <br>
                </div>
            _html;
            
            if ($_SESSION["n"] <= 0 || $_SESSION["n"] % 7 == 0) {
                echo '<div class="alert alert-primary>Partie terminée. Jarvis gagne !</div>';
            }
        }

    }

?>

<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="d-flex justify-content-center align-items-center" style="height:100vh">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="w-25 p-3">
            <div class="form-group">
                <label for="tokens">Jetons à oter</label>
                <input type="number" name="tokens" class="form-control" min="1" max="6">
            </div><br>

            <button type="submit" name="submit" class="btn btn-primary">Envoyer</button>
            <button type="submit" name="close" class="btn btn-secondary">Fermer</button>
        </form>
    </div>
</body>
</html>