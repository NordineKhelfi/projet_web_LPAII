<?php ob_start(); ?>
<?php include("header.php");?>
<?php $thisPage = "signup"; ?>
<?php include ("nav.php"); ?>

<h1 class="text-center" style="color: white;">Bienvenu parmi nous ! </h1>

<div container-fluid style="background-color : rgba(244, 81, 30, 0.72); padding-top : 15px;">

  <form name="form1" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="form-horizontal">
    <fieldset>
      <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 col-sm-4 col-xs-5 control-label" for="myname">Prénom, Nom</label>
      <div class="col-md-4 col-sm-4 col-xs-5">
      <input id="myname" name="myname" type="text" placeholder="Duke, Ellington" class="form-control input-md" required="">
      </div>
    </div>

      <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 col-sm-4 col-xs-5 control-label" for="myemail">Adresse email</label>
      <div class="col-md-4 col-sm-4 col-xs-5">
      <input id="myemail" name="myemail" type="email" placeholder="louis@armstrong.com" class="form-control input-md" required="">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 col-sm-4 col-xs-5 control-label" for="mytel">Téléphone</label>
      <div class="col-md-4 col-sm-4 col-xs-5">
      <input id="mytel" name="mytel" type="tel" placeholder="06 01 02 03 04" class="form-control input-md">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 col-sm-4 col-xs-5 control-label" for="myadress">Adresse</label>
      <div class="col-md-4 col-sm-4 col-xs-5">
      <input id="myaddress" name="myaddress" type="text" placeholder="5 Avenue Coltrane" class="form-control input-md">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 col-sm-4 col-xs-5 control-label" for="myusername">Nom d'utilisateur</label>
      <div class="col-md-4 col-sm-4 col-xs-5">
      <input id="myusername" name="myusername" type="text" placeholder="Votre pseudo" class="form-control input-md" required="">

      </div>
    </div>

    <!-- Password input-->
    <div class="form-group">
      <label class="col-md-4 col-sm-4 col-xs-5 control-label" for="mypassword">Mot de passe</label>
      <div class="col-md-4 col-sm-4 col-xs-5">
        <input id="mypassword" name="mypassword" type="password" placeholder="Votre mot de passe" class="form-control input-md" required="">

      </div>
    </div>

    <!-- Select Multiple -->
    <div class="form-group">
      <label class="col-md-4 col-sm-4 col-xs-5 control-label" for="selectTools">Instruments (un ou plusieurs)</label>
      <div class="col-md-4 col-sm-4 col-xs-5">
        <select id="selectTools" name="selectTools[]" class="form-control" multiple="multiple">
          <option value="Chant">Chant</option>
          <option value="Piano">Piano</option>
          <option value="Guitare">Guitare</option>
          <option value="Basse">Basse</option>
          <option value="Batterie">Batterie</option>
          <option value="Trompette">Trompette</option>
          <option value="Sax alto">Sax alto</option>
          <option value="Sax tenor">Sax tenor</option>
          <option value="Sax soprano">Sax soprano</option>
          <option value="Buggle">Buggle</option>
          <option value="Flute">Flute</option>
        </select>
      </div>
    </div>

    <!-- Select Basic -->
    <div class="form-group">
      <label class="col-md-4 col-sm-4 col-xs-5 control-label" for="selectLevel">Niveau</label>
      <div class="col-md-4 col-sm-4 col-xs-5">
        <select id="selectLevel" name="selectLevel" class="form-control">
          <option value="" disabled selected>Choisissez votre niveau</option>
          <option value="Lecture grilles">Lecture grilles</option>
          <option value="Partitions">Partitions</option>
          <option value="Improvisation">Improvisation</option>
        </select>
      </div>
    </div>

    <!-- Multiple Checkboxes -->
    <div class="form-group">
      <label class="col-md-4 col-sm-4 col-xs-5 control-label" for="checkboxes"></label>
      <div class="col-md-4 col-sm-4 col-xs-5">
      <div class="checkbox">
        <label for="checkboxes-0">
          <input type="checkbox" name="checkboxes[]" id="checkboxes-0" value="Oui">
          Navette aéroport
        </label>
    	</div>
      <div class="checkbox">
        <label for="checkboxes-1">
          <input type="checkbox" name="checkboxes[]" id="checkboxes-1" value="Oui">
          Accompagné
        </label>
    	</div>
      </div>
    </div>

    <!-- Button -->
<div class="form-group">
  <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-5 col-xs-offset-5">
    <button id="update" name="update" class="btn btn-default" >S'inscrire</button>
  </div>
</div>
    </fieldset>
  </form>
  <?php include ("welcome.php"); ?>
</div>

<?php include ("footer.php"); ?>
<?php ob_end_flush(); ?>
