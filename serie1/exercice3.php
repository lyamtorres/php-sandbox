<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Série 1 : Exercice 3</title>
</head>
<body class="d-flex justify-content-center align-items-center">
    <div class="w-50 p-3 h-75">
        <h1>Série 1 : Exercice 3</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
                <label for="capital">Capital</label>
                <input type="number" name="capital-value" class="form-control">
            </div>

            <div class="form-group">
                <label for="rate">Taux annuel</label>
                <input type="number" name="rate" class="form-control">
            </div>

            <div class="form-group">
                <label for="years">Années</label>
                <input type="number" name="years" class="form-control"><br><br>
            </div>

            <div class="d-flex justify-content-evenly">
                <button type="submit" name="double" class="btn btn-primary">Temps pour duplication</button>
                <button type="submit" name="capital" class="btn btn-primary">Calculer</button>
                <button type="submit" name="multiply" class="btn btn-primary">Quantité pour dix-mille</button>
            </div>
        </form>
    </div>
    <?php
        if (filter_has_var(INPUT_POST, 'capital')) {
            // Get form data
            $capital = $_POST['capital-value'];
            $rate = $_POST['rate'];
            $years = $_POST['years'];

            for ($i = 0; $i < $years; $i++) {
                $capital += $capital * ($rate / 100);
            }

            $capital = round($capital);
            
            echo <<< _html
                <div class="alert alert-info">
                    <strong>La valeur du capital après $years années, est de $capital.</strong>
                </div>
            _html;
        }

        if (filter_has_var(INPUT_POST, 'double')) {
            // Get form data
            $capital = $_POST['capital'];
            $rate = $_POST['rate'];

            $finalCapital = $capital * 2;
            $numberOfYears = 0;

            while ($capital < $finalCapital) {
                $capital += $capital * ($rate / 100);
                $numberOfYears++;
            }

            echo "Votre capital va se dupliquer en $numberOfYears ans !";
        }

        if (filter_has_var(INPUT_POST, 'multiply')) {
            $capital = 10000;
            $rate = $_POST['rate'];
            $years = 25;

            for ($i = 0; $i < $years; $i++) {
                $capital = $capital / ($rate / 100 + 1);
            }

            echo "Le capital à placer pour arriver à 10 000 est de" . round($capital) . " euros.";
        }
?>
    
</body>
</html>
