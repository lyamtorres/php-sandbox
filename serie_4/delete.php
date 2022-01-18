<form action="" method="get">

<?php
    $ident = $_GET['id'];
    deleteUtilisateur($ident);

    function deleteUtilisateur($id) {
        require ("ConnectBD.php") ;
        $sql="DELETE FROM Users
        WHERE id = :id";
        try {
            $commande = $pdo->prepare($sql);
            $commande->bindParam(':id', $id);
            $commande->execute();
        }
        catch (PDOException $e) {
            echo utf8_encode("Echec de select : " . $e->getMessage() . "\n");
            die();
        }
    }

    require("index.php");
?>

</form>
