<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Calcul de capital</h2>
        <hr>
        <p><strong>Instructions:</strong></p>
        <ol>
            <li>Pour calculer la valeur du capital après n années, donner le montant du capital, le taux annuel et le nombre d'années.</li>
            <li>Pour le nombre d'années qu'il faut attendre pour dupliquer son capital, donner le montant du capital et le taux annuel.</li>
            <li>Pour calculer le montant à placer pour arriver à 10 000 euros après 25 ans, donner le taux annuel uniquement.</li>
        </ol><br>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="number" name="capital" class="form-control" placeholder="Indiquez le montant du capital" value="<?php echo isset($_POST['capital']) ? $capital : ''; ?>"><br>
            <input type="number" name="rate" class="form-control" placeholder="Indiquez le taux annuel" value="<?php echo isset($_POST['rate']) ? $rate : ''; ?>"><br>
            <input type="number" name="years" class="form-control" placeholder="Indiquez le nombre d'années" value="<?php echo isset($_POST['years']) ? $years : ''; ?>"><br><br>

            <button type="submit" name="submit" class="btn btn-success">Soumettre</button><br><br>
        </form>
        <?php
            if (filter_has_var(INPUT_POST, 'submit')) {
                // Get form data
                $capital = round($_POST['capital']);
                $rate = $_POST['rate'];
                $years = $_POST['years'];

                if (!empty($capital) && !empty($rate) && !empty($years)) {
                    for ($i = 0; $i < $years; $i++) {
                        $capital += $capital * ($rate / 100);
                    }
                    echo "La valeur de votre capital après $years ans, sera de $capital.";
                } else if (!empty($capital) && !empty($rate)) {
                    $finalCapital = $capital * 2;
                    $numberOfYears = 0;

                    while ($capital < $finalCapital) {
                        $capital += $capital * ($rate / 100);
                        $numberOfYears++;
                    }

                    echo "Votre capital va se dupliquer en $numberOfYears ans !";
                    
                } elseif (!empty($rate)) {
                    $capital = 10000;
                    $years = 25;

                    for ($i = 0; $i < $years; $i++) {
                        $capital = $capital / ($rate / 100 + 1);
                    }
                    
                    echo "Le capital à placer pour arriver à 10 000 après 25 ans, est de " . round($capital) . " euros.";
                } else {
                    echo "Remplissez les champs nécessaires.";
                }
            }
        ?>
    </div>
</body>
</html>
