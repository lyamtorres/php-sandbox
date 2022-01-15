<?php
    session_start();

    if (isset($_POST['free-up'])) {

        $option = $_POST['category'];

        switch ($option) {
            case "1":
                if ($_POST['seats'] > 25 - $_SESSION["firstCategory"]) {
                    $_SESSION["firstCategory"] = 25;
                } else {
                    $_SESSION["firstCategory"] += $_POST['seats'];
                }
                header('Location: index.php');
                break;
            case "2":
                if ($_POST['seats'] > 60 - $_SESSION["secondCategory"]) {
                    $_SESSION["secondCategory"] = 60;
                } else {
                    $_SESSION["secondCategory"] += $_POST['seats'];
                }
                header('Location: index.php');
                break;
            case "3":
                if ($_POST['seats'] > 45 - $_SESSION["thirdCategory"]) {
                    $_SESSION["thirdCategory"] = 45;
                } else {
                    $_SESSION["thirdCategory"] += $_POST['seats'];
                }
                header('Location: index.php');
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

        <label for="seats">Nombre de places à rendre</label>
        <input type="number" id="seats" name="seats"><br><br>

        <button type="submit" name="free-up">Libérer</button>
    </form>

</body>
</html>