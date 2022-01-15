<?php

    try {
        // Connection à MySQL
        $dbhost = 'localhost';
        $dbname = 'users_management';
        $dbuser = 'root';
        $dbpass = 'W6T3fp65SY';
        $dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
        $stmt = $dbh->query('SELECT * FROM users');
    } catch (PDOException $e) {
        echo "Error : " . $e->getMessage() . "<br/>";
        die();
    }

?>