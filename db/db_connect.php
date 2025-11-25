<?php

function getDBConnection(){
    try{
        $user = "root";
        $pass="";

        $pdo = new PDO('mysql:host=localhost;dbname=my_portfolio_php', $user, $pass);
        return $pdo;
    }catch (PDOException $e){
        die("Erreur lors de la connexion à la BDD");
    }
}


?>