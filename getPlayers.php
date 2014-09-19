<?php
include 'connexion_sql.php';

if(!empty($_GET['id_game']))
{
	$requete = $bdd->prepare('SELECT player.name,player.firstname FROM play_at,player where id_game = :id_game AND play_at.id_player = player.id_player');
    $requete->execute(array("id_game" => $_GET['id_game']));

    $result = '<?xml version="1.0" encoding="iso-8859-1"?>';
    $result .= "<PLAYERS>";
    while($donnees = $requete->fetch())
    {
    	$result .= "<ROW><NAME>" . $donnees['name'] . "</NAME><FIRSTNAME>" . $donnees['firstname'] . "</FIRSTNAME></ROW>";
    }
	$result .= "</PLAYERS>";
    echo $result;
}
?>