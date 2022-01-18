<html>
    <header>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </header>

    <body>
        <div class="container">
            <h1>Gestion des utilisateurs</h1>

            <hr>

            <form action="" method="get">
                <div>
                    <a href="add.php" type="button" class="btn btn-success">Ajouter un utilisateur</a>
                </div><br>

                <div>
                    <table class="table table-striped">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Email</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Adresse</th>
                        <th scope="col">Date d'inscription</th>
                        <th scope="col">Editer</th>
                        <th scope="col">Supprimer</th>
                    </tr>
                    <?php
                    $Utilisateurs = contactsBD();
                    foreach($Utilisateurs as $utilisateur){
                        echo("<tr>");
                        echo("<td>" . $utilisateur['id'] . "</td>");
                        echo("<td>" . $utilisateur['Nom'] . "</td>");
                        echo("<td>" . $utilisateur['Prenom'] . "</td>");
                        echo("<td>" . $utilisateur['Email'] . "</td>");
                        echo("<td>" . $utilisateur['Contact'] . "</td>");
                        echo("<td>" . $utilisateur['Adresse'] . "</td>");
                        echo("<td>" . $utilisateur['InscriptionDate'] . "</td>");
                        echo("<td> <a href='update.php?id=" . $utilisateur['id'] ."' type='submit' class='btn btn-primary'><i class='glyphicon glyphicon-edit'></i></i></a> </td>");
                        echo("<td> <a href='delete.php?id=" . $utilisateur['id'] ."' type='submit' class='btn btn-danger'><i class='glyphicon glyphicon-trash'></i></a> </td>");
                        echo("</tr>");
                    }
                    ?>
                    </table>
                </div>
            </form>
        </div>
    </body>
</html>

<?php

    if (isset($_POST['btnDelete'])) {
        deleteUtilisateur(12);
    }

    function contactsBD() {
        require ("ConnectBD.php") ; 
        $sql="SELECT * fROM Users";
        try {
            $commande = $pdo->query($sql);
            $bool = $commande->execute();
            $Utilisateurs= array();
            if ($bool) {
                while ($utilisateur = $commande->fetch()) {
                    $Utilisateurs[] = $utilisateur;
                }	
            }
        }
        catch (PDOException $e) {
            echo utf8_encode("Echec de select : " . $e->getMessage() . "\n");
            die();
        }
        return $Utilisateurs;
    }

?>