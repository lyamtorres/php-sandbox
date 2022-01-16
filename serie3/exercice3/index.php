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
</head>
<body>
    <div class="d-flex justify-content-center align-items-center" style="height:100vh">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="w-25 p-3">
            <div class="form-group">
                <label for="tokens">Choisir le nombre total de jetons</label>
                <input type="number" name="tokens" class="form-control" min="1">
            </div><br>

            <button type="submit" name="init" class="btn btn-primary">Commencer partie</button>
        </form>
    </div>
</body>
</html>