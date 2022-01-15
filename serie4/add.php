<?php

    if (isset($_POST['last-name'])) {
        addUser($_POST['last-name'], $_POST['first-name'], $_POST['email'], $_POST['phone-number'], $_POST['address']);
    }

    function addUser($lastName, $firstName, $email, $phoneNumber, $address) {
        require('connect.php');
        $sql = "INSERT INTO Users (Nom, Prenom, Email, Contact, Adresse)
        VALUES (:lastName, :firstName, :email, :phoneNumber, :address)";

        try {
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(':lastName', $lastName);
            $stmt->bindParam(':firstName', $firstName);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':phoneNumber', $phoneNumber);
            $stmt->bindParam(':address', $address);
            $stmt->execute();
            echo $stmt->rowCount();
        } catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://bootswatch.com/5/cerulean/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Ajouter des utilisateurs</h1>
        <hr>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <div class="form-group">
                <label for="">Nom</label>
                <input type="text" class="form-control" name="last-name">
            </div>
            
            <div class="form-group">
                <label for="">Prénom</label>
                <input type="text" class="form-control" name="first-name">
            </div>

            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email">
            </div>

            <div class="form-group">
                <label for="">Portable</label>
                <input type="text" class="form-control" name="phone-number">
            </div>

            <div class="form-group">
                <label for="">Adresse</label>
                <textarea type="text" name="address" class="form-control" id="address" cols="30" rows="5"></textarea>
            </div>

            <div class="form-group" id="form-address">
                <button type="submit" class="btn btn-success">Ajouter</button>
                <button type="submit" class="btn btn-warning">Annuler</button>
            </div>

            
        </form>
    </div>
</body>
</html>