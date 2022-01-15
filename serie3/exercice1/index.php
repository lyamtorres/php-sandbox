<?php
    session_start();

    if(isset($_SESSION['success'])){
        echo "Vos places ont été réservées !";
        unset($_SESSION['success']);
    }

    if (isset($_POST['start-session'])) {
        $_SESSION["firstCategory"] = 25;
        $_SESSION["secondCategory"] = 60;
        $_SESSION["thirdCategory"] = 45;
    } 

    if (isset($_POST['reserve-seats'])) { 
        header('Location: reservation.php');
    }

    if (isset($_POST['free-up-seats'])) { 
        header('Location: liberation.php');
    }

    if (isset($_POST['print-file'])) {
        $file = fopen("test.txt", "r")
            or exit("Impossible d’ouvrir le fichier");
        while( !feof($file) ) {
            echo fgets($file). "<br />";
        }
        fclose($file);
    }

    // TO-DO: Stocker les données dans des fichiers

?>

<!DOCTYPE html>
<html>
<body>

    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <button type="submit" name="start-session">Initialiser séssion</button>
        <button type="submit" name="reserve-seats">Réserver des places</button>
        <button type="submit" name="free-up-seats">Libérer des places</button>
        <button type="submit" name="print-file">Afficher nombre de places</button>
    </form>

</body>
</html>