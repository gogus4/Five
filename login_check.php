<?php

include 'connexion_sql.php'; 

if(isset($_POST['email']) && isset($_POST['password']))
{
	$requete = $bdd->prepare('SELECT id_player FROM player where email = :email AND password = :password');
    $requete->execute(array("email" => $_POST['email'], "password" => $_POST['password']));

    while($donnees = $requete->fetch())
    {
    	session_start();
    	$_SESSION['id'] = $donnees["id_player"];
    }

    echo "success";
}

else
{
	echo "error";
}

?>