<html>
<header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</header>
    <div class="container">
        <h1>Ajouter un utilisateur</h1>
        <hr>

        <form action="" method="post">
            <div class="form-group col-md-6">
                <label for="exampleInputName1">Nom</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="nom" placeholder="Entrer nom">
            </div>
            <div class="form-group col-md-6">
                <label for="exampleInputPrenom1">Prénom</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="prenom" placeholder="Entrer prénom">
            </div>
            <div class="form-group col-lg-6">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Entrer email">
            </div>
            <div class="form-group col-lg-6">
                <label for="exampleInputPortable1">Portable</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="contact" placeholder="Entrer portable">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Adresse</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="adresse" rows="3"></textarea>
            </div>
            <input type="submit" class="btn btn-success" name="ajouter" value="Ajouter"></input>
            <a href="index.php" type="button" class="btn btn-danger">Annuler</a>
        </form>
        </div>
    </body>
</html>

<?php

    if (isset($_POST['ajouter'])) {
        addUtilisateur($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['contact'], $_POST['adresse']);
    }

    function addUtilisateur($nom, $prenom, $email, $contact, $adresse) {
        require ("ConnectBD.php") ;
        $sql="INSERT INTO Users (Nom, Prenom, Email, Contact, Adresse)
                VALUES (:nom, :prenom, :email, :contact, :adresse)";
        try {
            $commande = $pdo->prepare($sql);
            $commande->bindParam(':nom', $nom);
            $commande->bindParam(':prenom', $prenom);
            $commande->bindParam(':email', $email);
            $commande->bindParam(':contact', $contact);
            $commande->bindParam(':adresse', $adresse);
            $commande->execute();
        }
        catch (PDOException $e) {
            echo utf8_encode("Echec de select : " . $e->getMessage() . "\n");
            die();
        }
    }
?>