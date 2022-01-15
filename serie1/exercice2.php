<?php
    if (filter_has_var(INPUT_POST, 'submit')) {
        // Get form data
        $day = $_POST['day'];
        $age = $_POST['age'];
        $isStudent = isset($_POST['student']);

        if ($day == 'mercredi') {
            echo "Tarif reduit";
        } elseif ($isStudent == true) {
            echo "Tarif reduit";
        } elseif ($age < 18 || $age > 65) {
            if ($day == "samedi" || $day == "dimanche") {
                echo "Tarif plein";
            } else {
                echo "Tarif reduit";
            }
        } else {
            echo "Tarif plein";
        }
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Place cinéma</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="day">Jour:</label>
        <select name="day" id="day">
            <option value="lundi">Lundi</option>
            <option value="mardi">Mardi</option>
            <option value="mercredi">Mercredi</option>
            <option value="jeudi">Jeudi</option>
            <option value="vendredi">Vendredi</option>
            <option value="samedi">Samedi</option>  
            <option value="dimanche">Dimanche</option>
        </select><br><br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age"><br><br>

        <label for="student">Etudiant</label>
        <input type="checkbox" id="student" name="student"><br><br>
  

        <button type="submit" name="submit">Envoyer</button>
    </form>
</body>
</html>