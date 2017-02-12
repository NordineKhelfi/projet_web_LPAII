<?php include ("header.php");
         $thisPage = "galerie";
         include ("nav.php"); ?>

<div class="container-fluid bgOrange" style="margin-bottom: 10px;">
  <h1 class="text-center " id="php_screen_width" > Quelques souvenirs </h1>
</div>

<div class="container">

  <div class="row" style="margin-bottom: 20px;">
    <form name="select" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <!-- Select Year -->
      <div class="form-group">
        <!-- <label class="col-md-4 control-label" for="selectbasic">Année</label> -->
        <div class="col-md-4 col-md-offset-4">
          <select id="selectyear" name="selectyear" class="form-control" onChange='this.form.submit()'>
            <option value="" disabled selected>Choisissez l'année</option>
            <option value="2017">2017</option>
            <option value="2016">2016</option>
            <option value="2015">2015</option>
          </select>
        </div>
      </div>
    </form>
  </div>

    <div class="row">

      <?php include ("bddConnect.php"); ?>
      <?php

      //TODO: This is a test
      if( isset($_POST['selectyear']) ){
        $tmp = 'SELECT * FROM photos WHERE annee=' . $_POST['selectyear'] ;
        $reponse = $bdd -> query($tmp);
      } else {
        $reponse = $bdd -> query('SELECT * FROM photos WHERE annee=2017');
      }

        while ($donnees = $reponse->fetch()) {
          echo '<div class="col-xs-6 col-sm-4 col-md-2">
              <a class="fancybox thumbnail custom-thumbnail" rel="gallery1" href="' . $donnees['chemin'] . '.jpg">
                  <img src="' . $donnees['chemin'] . '_min.jpg" alt="Image 1" />
              </a>
          </div> ';
        }

       ?>


     </div>
</div>

<div class="container-fluid" style="margin-bottom: 20px; background-color: rgba(46, 46, 46, 0.45);">
  <h1 class="text-center " style="color: rgba(244, 81, 30, 0.82);"> En vidéo</h1>
</div>

<div class="container">

  <div class="row">

    <?php if( isset($_POST['selectyear']) ){
      $tmp = 'SELECT * FROM video WHERE annee=' . $_POST['selectyear'] ;
      $reponse = $bdd -> query($tmp);
    } else {
      $reponse = $bdd -> query('SELECT * FROM video WHERE annee=2017');
    }

    while ($donnees = $reponse->fetch()) {
      echo '<div class="col-xs-6 col-sm-4 col-md-2">
          <a class="fancybox thumbnail custom-thumbnail various fancybox.iframe" rel="gallery1" href="https://www.youtube.com/embed/' . $donnees['code'] . '?autoplay=1">
              <img src="http://img.youtube.com/vi/' . $donnees['code'] . '/0.jpg" width="150" height="100" />
          </a>
      </div> ';
    }
    ?>
   </div>

</div>






<?php include ("footer.php"); ?>
