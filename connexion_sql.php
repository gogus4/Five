<?php
// Connexion à la base de donnée
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=five', 'helpparebrise', 'helpparebrise');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
?>