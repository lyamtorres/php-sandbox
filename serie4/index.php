<?php

    if (isset($_POST['add-user'])) {
        header('Location: add.php');
    }

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://bootswatch.com/5/cerulean/bootstrap.min.css">
</head>
<body>
    <div class="container" styles="display: flex; justify-content: center">
        <h1 style="color: #000000;">Gestion des utilisateurs</h1>

        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <button type="submit" class="btn btn-primary btn-sm" name="add-user">Ajouter un utilisateur</button>
        </form>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Date d'inscription</th>
                    <th scope="col">Éditer</th>
                    <th scope="col">Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $host = 'localhost';
                    $user = 'root';
                    $password = 'W6T3fp65SY';
                    $dbname = 'users_management';
                    
                    $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
                    $dbh = new PDO($dsn, $user, $password);
                    $stmt = $dbh->query('SELECT * FROM users');

                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        $id = $row['id'];
                        $lastName = $row['Nom'];
                        $firstName = $row['Prenom'];
                        $email = $row['Email'];
                        $contact = $row['Contact'];
                        $address = $row['Adresse'];
                        $inscriptionDate = $row['InscriptionDate'];
                ?>
                <tr>
                    <td><?php echo $id;?></td>
                    <td><?php echo $lastName;?></td>
                    <td><?php echo $firstName;?></td>
                    <td><?php echo $email;?></td>
                    <td><?php echo $contact;?></td>
                    <td><?php echo $address;?></td>
                    <td><?php echo $inscriptionDate;?></td>
                    <td><button type="button" class="btn btn-success btn-sm">Modifier</button></td>
                    <td><button type="button" class="btn btn-warning btn-sm">Supprimer</button></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>