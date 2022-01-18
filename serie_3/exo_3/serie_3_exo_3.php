<?php
    session_start();

    if (isset($_POST['init'])) {
        $_SESSION['n'] = $_POST['tokens'];
        header('location: game.php');
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
        <h2>Jeu de jetons et sessions</h2>
        <hr>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="number" name="tokens" class="form-control" min="1" placeholder="Choisir le nombre total de jetons"><br>
            <button type="submit" name="init" class="btn btn-success">Commencer partie</button>
        </form>
    </div>
</body>
</html>