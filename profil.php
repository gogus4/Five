<?php 
$title = "Le Five Inscription - Profil";
include 'connexion_sql.php'; 
include 'header.php';

?>

    <div class="container">
      <h1 style="margin-left:15%;">Profil</h1>
      <hr>
      <div class="grid show-grid">
          <div class="row">
            <div class="span7">
                <div class="text-center">
                  <img src="images/photo.png" class="avatar img-circle" alt="avatar">
                  <h6>Changer votre photo...</h6>
                    
                  <input class="form-control" type="file">
                </div>
            </div>

            <div class="span10">        
              <form>
                <fieldset>
                  <legend>Informations personnelles</legend>
                  <label>Prénom</label>
                  <div class="input-control text" data-role="input-control">
                    <input type="text" value="OKK">
                    <button class="btn-clear" tabindex="-1" type="button"></button>
                  </div>

                  <label>Nom</label>
                  <div class="input-control text" data-role="input-control">
                    <input type="text" placeholder="type text">
                    <button class="btn-clear" tabindex="-1" type="button"></button>
                  </div>

                  <label>Email</label>
                  <div class="input-control text" data-role="input-control">
                    <input type="text" placeholder="type text">
                    <button class="btn-clear" tabindex="-1" type="button"></button>
                  </div>

                  <label>Mot de passe</label>
                  <div class="input-control text" data-role="input-control">
                    <input type="password" placeholder="type text">
                    <button class="btn-clear" tabindex="-1" type="button"></button>
                  </div>
                  <input type="submit" value="Modifier">
                </fieldset>
              </form>
            </div>
        </div>
  </div>
</div>

<?php include 'footer.php' ?>