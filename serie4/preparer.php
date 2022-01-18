<?php
    $servername = 'localhost';
    $dbname = 'php';
    $username = 'test';
    $password = 'test';
    
    try {
        $dbco = new PDO("mysql:host=$servername", $username, $password);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $deleteDB = "DROP DATABASE $dbname";
        $dbco->exec($deleteDB);
        echo 'Base de données créée bien supprimée !<br>';
        
        $createDB = "CREATE DATABASE $dbname";
        $dbco->exec($createDB);
        echo 'Base de données créée bien créée !<br>';

        $dbco = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $createTable = "CREATE TABLE `Users` (
            `id` int(11) NOT NULL,
            `Prenom` varchar(100) NOT NULL,
            `Nom` varchar(100) NOT NULL,
            `Email` varchar(100) NOT NULL,
            `Contact` char(11) NOT NULL,
            `Adresse` varchar(255) NOT NULL,
            `InscriptionDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
          ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
            
            ALTER TABLE `Users`
            ADD PRIMARY KEY (`id`);

            ALTER TABLE `Users`
            MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;";
    
        $dbco->exec($createTable);
        echo 'Table bien créée !<br>';


        $createData = "INSERT INTO `Users` (`id`, `Prenom`, `Nom`, `Email`, `Contact`, `Adresse`, `InscriptionDate`) VALUES
        (1, 'Damien', 'Bourdon', 'bourdon-d@gmail.com', '0657128545', 'Route de la Joneli�re, 44300 Nantes', '2018-11-28 05:41:26')";

        $dbco->exec($createData);

        $createData = "INSERT INTO `Users` (`id`, `Prenom`, `Nom`, `Email`, `Contact`, `Adresse`, `InscriptionDate`) VALUES
        (2, 'Noélie', 'Darras', 'noelie-d@gmail.com', '0700000000', 'Impasse du Havre, 44300 Nantes', '2022-01-17 17:41:26');";

        $dbco->exec($createData);

        $createData = "INSERT INTO `Users` (`id`, `Prenom`, `Nom`, `Email`, `Contact`, `Adresse`, `InscriptionDate`) VALUES
        (3, 'Lyam', 'Torres', 'lyamt@gmail.com', '0800000000', 'Rue de la Place, 44000 Nantes', '2022-01-17 18:11:37');";

        $dbco->exec($createData);

        $createData = "INSERT INTO `Users` (`id`, `Prenom`, `Nom`, `Email`, `Contact`, `Adresse`, `InscriptionDate`) VALUES
        (4, 'Joffrey', 'Lucas', 'j-l@gmail.com', '0618575425', 'Boulevard de Paris, 44000 Nantes', '2022-01-17 18:20:06')";

        $dbco->exec($createData);

        echo 'Jeu de données bien inséré !<br>';
    }
    
    catch(PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
?>
