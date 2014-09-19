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
        <link rel="stylesheet" href="css/profil.css">

        <script src="js/profil.js"></script>

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
                <h2 class="fg-white">Prochain Five Mercredi 24 Septembre 2014. <br/><a id="createFlatWindow" href="#">4</a> personnes ont répondu.</h2>

                    <image src="images/lefive.png" style="height:200px;width=200px;">
                </div>
            </div>

            <div class="container">
    <h1>Edit Profile</h1>
    <hr>
    <div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="http://91.68.209.10/bmi/placehold.it/100" class="avatar img-circle" alt="avatar">
          <h6>Upload a different photo...</h6>
          
          <input class="form-control" type="file">
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          This is an <strong>.alert</strong>. Use this to show important messages to the user.
        </div>
        <h3>Personal info</h3>
        
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">First name:</label>
            <div class="col-lg-8">
              <input class="form-control" value="Jane" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Last name:</label>
            <div class="col-lg-8">
              <input class="form-control" value="Bishop" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Company:</label>
            <div class="col-lg-8">
              <input class="form-control" value="" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" value="janesemail@gmail.com" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Time Zone:</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select id="user_time_zone" class="form-control">
                  <option value="Hawaii">(GMT-10:00) Hawaii</option>
                  <option value="Alaska">(GMT-09:00) Alaska</option>
                  <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                  <option value="Arizona">(GMT-07:00) Arizona</option>
                  <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                  <option value="Central Time (US &amp; Canada)" selected="selected">(GMT-06:00) Central Time (US &amp; Canada)</option>
                  <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                  <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Username:</label>
            <div class="col-md-8">
              <input class="form-control" value="janeuser" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
              <input class="form-control" value="11111122333" type="password">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Confirm password:</label>
            <div class="col-md-8">
              <input class="form-control" value="11111122333" type="password">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input class="btn btn-primary" value="Save Changes" type="button">
              <span></span>
              <input class="btn btn-default" value="Cancel" type="reset">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>

        </div>
    </body>

        <!-- JQUERY -->
        <script>
            $("#createFlatWindow").on('click', function(){
                $.Dialog({
                overlay: true,
                shadow: true,
                flat: true,
                icon: '<span class="icon-rocket"></span>',
                title: 'Joueurs inscrit',
                content: '',
                width:400,
                onShow: function(_dialog)
                {
                    var content = _dialog.children('.content');
                    content.html('<div class="listview-outlook"><a href="#" class="list"><div class="list-content">Yannick Oliveira</div></a><a href="#" class="list"><div class="list-content">Raoul Da Costa Oliveira</div></a><a href="#" class="list"><div class="list-content">Diego Da Costa Oliveira</div></a></div>');
                }
                });
                });
        </script>

</html>
