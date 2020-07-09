<?php
function connect_to_database() {
    $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    $databasename = "BaseTest01";

    try {
        $pdo=new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "<p>Connected successfully</p>";

        $sql = "DELETE FROM Produit
        WHERE Nom='T-shirt noir'";

        $pdo->exec($sql);
        echo 'Entrée supprimée dans la table Produit';
    }
     catch(PDOException $e) {
         echo "<p>Connection failed</p>".$e->getMessage();

     }

     }
     $pdo = connect_to_database();

     ?>