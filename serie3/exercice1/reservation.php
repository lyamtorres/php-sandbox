<?php
    session_start();

    if (isset($_POST['reserve'])) {

        $option = $_POST['category'];

        switch ($option) {
            case "1":
                if ($_SESSION["firstCategory"] >= $_POST['seats']) {
                    $_SESSION["firstCategory"] -= $_POST['seats'];
                    $_SESSION['success'] = 1;
                    header('Location: index.php');
                } else {
                    echo "Erreur, pas assez de places disponibles.";
                }
                break;
            case "2":
                if ($_SESSION["secondCategory"] >= $_POST['seats']) {
                    $_SESSION["secondCategory"] -= $_POST['seats'];
                    header('Location: index.php');
                    echo "Vos places ont bien été réservées !";
                } else {
                    echo "Erreur, pas assez de places disponibles.";
                }
                break;
            case "3":
                if ($_SESSION["thirdCategory"] >= $_POST['seats']) {
                    $_SESSION["thirdCategory"] -= $_POST['seats'];
                    header('Location: index.php');
                    echo "Places réservées avec succès !";
                } else {
                    echo "Erreur, pas assez de places disponibles.";
                }
                break;
        }
        $file = fopen("test.txt", "w");
        echo fwrite($file, "Catégorie 1: " . $_SESSION["firstCategory"] . " | Catégorie 2: " . $_SESSION["secondCategory"] . " | Catégorie 3: " . $_SESSION["thirdCategory"]);
        fclose($file);   
    }

?>

<!DOCTYPE html>
<html>
<body>

    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <label for="category">Catégorie</label>
        <select name="category" id="category">
            <option value="1">Catégorie 1</option>
            <option value="2">Catégorie 2</option>
            <option value="3">Catégorie 3</option>
        </select>

        <label for="seats">Nombre de places à réserver</label>
        <input type="number" id="seats" name="seats"><br><br>

        <button type="submit" name="reserve">Réserver</button>
    </form>

</body>
</html>