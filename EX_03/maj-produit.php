<?php 
function connect_to_database() {
    $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    $databasename = 'BaseTest01';

    try{
        $pdo=new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "<p>Connected successfully</p>";

        $sql="UPDATE Produit SET Quantité=1";

        $pdo->exec($sql);
    echo "<p>Entrée mise à jour dans la table Produit</p>";
    }
    catch(PDOException $e) {
        echo "<p>Connection failed</p>" .$e->getMessage();
    }
}
$pdo = connect_to_database();

?> 