<?php
    $DB_hote = "127.0.0.1"; 
    $DB_port = ""; 
    $DB_nom_bd = ""; 
    $DB_utilisateur = "root"; 
    $DB_mot_passe = "";

try{
$bdd = new PDO('mysql:host='.$DB_hote.';port='.$DB_port.';dbname='.$DB_nom_bd, $DB_utilisateur, $DB_mot_passe);
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Échec lors de la connexion : ' . $e->getMessage();
}
?>