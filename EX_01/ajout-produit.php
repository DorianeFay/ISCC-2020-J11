<?php
    function connect_to_database(){
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $databasename = "BaseTest01";

    try {
        $pdo = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "<p>Connected successfully</p>";
        
        $sql = "INSERT INTO Produit (Identifiant, Nom, Description, Prix, Quantité)
        VALUES (9, 'T-shirt noir', 'T-shirt coton de couleur noire', 15.50, 10)";
        
        $pdo->exec($sql);
        echo "<p>Nouvelle entrée ajoutée dans la table Produit</p>";
    }
    catch (PDOException $e) {
        echo "Connection failed". $e->getMessage();
        }
    }
   connect_to_database();
?> 