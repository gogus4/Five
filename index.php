<?php include 'connexion_sql.php'; ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="product" content="Five Mercredi">
        <meta name="description" content="Site permettant de s'enregistrer aux matchs de five tous les mercredi">
        <meta name="author" content="Diego Da Costa Oliveira, France, Paris">

        <!-- CSS -->
        <link rel="stylesheet" href="css/metro-bootstrap.css">
        <link rel="stylesheet" href="css/icon-font.css">

        <!-- Script JS -->
        <script src="js/jquery/jquery.min.js"></script>
        <script src="js/jquery/jquery.widget.min.js"></script>
        <script src="js/metro/metro.min.js"></script>

        <title>Le Five Inscription - Accueil</title>
    </head>

    <body class="metro">
        <nav class="navigation-bar fixed-top">
            <div class="navigation-bar-content container" style="margin-left:15%;">            
                <div class="element">
                    <span class="icon-trophy"></span>
                    LE FIVE INSCRIPTION
                </div>

                <span class="element-divider"></span>
                <a class="element brand" href="index.php" title="Accueil"><span class="icon-home"></span></a>
                <span class="element-divider"></span>

                <span class="element-divider"></span>
                <a class="element brand" href="common/stats.php" title="Statistiques"><span class="icon-stats"></span></a>
                <span class="element-divider"></span>

                <span class="element-divider"></span>
                <a class="element brand" href="common/calendar.php" title="Calendrier"><span class="icon-calendar"></span></a>
                <span class="element-divider"></span>

                <div class="element input-element">
                    <form>
                        <div class="input-control text size3">
                            <input type="text" style="width:70%:" placeholder="Rechercher un joueur ...">
                            <button class="btn-search"></button>
                        </div>
                    </form>
                </div>

                <span class="element-divider place-right"></span>

                <div class="element place-right">
                    <a class="dropdown-toggle" href="#"><small><strong>Diego Da Costa Oliveira</strong></small></a>

                    <ul class="dropdown-menu bg-cyan" data-role="dropdown">
                        <li><a href="profil.php" class="fg-white" title="Profil"><small><strong><span class="icon-user"></span> Profil</small></strong></a></li>
                        <li><a href="logout.php" class="fg-white" title="Deconnexion"><small><strong><span class="icon-locked"></span> Deconnexion</small></strong></a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div>
            <div style="background: #31190C;height: 330px;">
                <div class="container" style="padding: 50px 20px">
                <h2 class="fg-white">Prochain Five 

                    <?php
                    $requete = $bdd->prepare('SELECT * FROM game ORDER BY date DESC LIMIT 1');
                    $requete->execute();
                    $donnees = $requete->fetch();
                    echo $donnees['date_fr'];
                    $id_game = $donnees['id_game'];

                    // EDIT
                    $id = 1;
                    
                    $requete = $bdd->prepare('SELECT COUNT(*) FROM play_at where id_game = :id_game');
                    $requete->execute(array("id_game" => $id_game));
                    $nb_players = (int)$requete->fetchColumn();
                   
                    if($nb_players > 0)
                    {
                        echo '<br/><a id="show_players" href="#">'. $nb_players .'</a>'; 

                        if($nb_players == 1)
                        {
                            echo ' personne a répondu.';
                        }

                        else
                        {
                            echo ' personnes ont répondu.';
                        }
                    }

                    else
                    {
                        echo '<br/><a id="show_players" href="#">Aucune personne reçu.</a>'; 
                    }

                    echo '</h2>';

                    ?>

                    <image src="images/lefive.png" style="height:200px;width=200px;">
                </div>
            </div>
        </div>
    </body>

        <!-- JQUERY -->
        <script>
            $("#show_players").on('click', function()
            {
                $.Dialog({
                    overlay: true,
                    shadow: true,
                    flat: true,
                    icon: '<span class="icon-user-2"></span>',
                    title: 'Joueurs inscrit',
                    content: '',
                    width:400,
                    onShow: function(_dialog)
                    {
                        $.ajax({
                        url : "getPlayers.php?id_game=<?php echo $id_game ?>",
                        type : "GET",
                        success : function(html)
                        {
                            var content = _dialog.children('.content');
                            var result_html = '<div class="listview-outlook">';
                            $(html).find('ROW').each(   
                             function()
                             {
                                var name = $(this).find('NAME').text();
                                var firstname = $(this).find('FIRSTNAME').text();

                                result_html += '<a href="#" class="list"><div class="list-content">'+ firstname + ' ' + name + '</div></a>';
                              });
                              content.html(result_html);               
                        }
                        });           
                    }
                });
            });
        </script>
</html>