<?php ob_start(); ?>
<nav class="navbar navbar-default navbar-static-top">
  <div class="container">

   <div class="navbar-header">
     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
     </button>
     <a class="navbar-brand" href="index.php">Jazz Class </a>
   </div>
   <div class="collapse navbar-collapse" id="myNavbar">
     <ul class="nav navbar-nav navbar-left">
      <?php
      if(isset($_SESSION['myusername'])){
        echo '<li><a href=votre_compte.php><span class="glyphicon glyphicon-user"></span> ' . $_SESSION['myusername'] . ' </a></li>';
        echo '<li><a href=sign_out.php><span class="glyphicon glyphicon-log-in"></span> Deconnexion </a></li>';
      } else {
        echo '<li><a data-toggle="modal" id="signup" href="#squarespaceModal_SignUp"><span class="glyphicon glyphicon-user"></span> Inscription</a></li>';
        echo '<li><a data-toggle="modal" id="connect" href="#squarespaceModal_LogIn"><span class="glyphicon glyphicon-log-in"></span> Connexion</a></li>';
      } ?>
    </ul>
     <ul class="nav navbar-nav navbar-right">
       <li><a href="index.php" <?php if($thisPage == "accueil") echo 'class="selected"'?> >LE MASTERCLASS</a></li>
       <li><a href="profs.php" <?php if($thisPage == "profs") echo 'class="selected"'?> >ENSEIGNANTS</a></li>
       <li><a href="galerie.php" <?php if($thisPage == "galerie") echo 'class="selected"'?> >GALERIE</a></li>
       <li><a href="jams.php" <?php if($thisPage == "jams ") echo 'class="selected"'?>>JAMS</a></li>
       <li class="dropdown mega-dropdown">
         <a href="ateliers.php" <?php if($thisPage == "ateliers") echo 'class="selected"'?> class="dropdown-toggle" data-toggle="dropdown">ATELIERS <span class="caret"></span></a>
         <ul class="dropdown-menu mega-dropdown-menu">
           <li class="col-xs-6 col-sm-6 col-md-offset-2">
             <ul> <!-- Carousel + View all Collections -->
               <li class="dropdown-header">Nos Ateliers</li>
               <div id="menCollection" class="carousel slide" data-ride="carousel">
                 <div class="carousel-inner">
                   <div class="item active">
                     <a href="#"><img src="images/atelier_chant.jpg" alt="product 1"></a>
                     <h4><small>Atelier chants ...</small></h4>
                   </div><!-- End Item -->
                   <div class="item">
                     <a href="#"><img src="images/atelier_piano.jpg" class="img-responsive" alt="product 3"></a>
                     <h4><small>Atelier piano ...</small></h4>
                   </div><!-- End Item -->
                   <div class="item">
                     <a href="#"><img src="images/atelier_guitare.jpg" class="img-responsive" alt="product 2"></a>
                     <h4><small>Atelier de guitare ...</small></h4>
                   </div><!-- End Item -->
                   <div class="item">
                     <a href="#"><img src="images/atelier_sax.jpg" class="img-responsive" alt="product 2"></a>
                     <h4><small>Atelier saxophone ...</small></h4>
                   </div><!-- End Item -->
                   <div class="item">
                     <a href="#"><img src="images/atelier_contrebasse.jpg" class="img-responsive" alt="product 2"></a>
                     <h4><small>Atelier Contrebasse ...</small></h4>
                   </div><!-- End Item -->
                   <div class="item">
                     <a href="#"><img src="images/atelier_batterie.jpg" class="img-responsive" alt="product 2"></a>
                     <h4><small>Atelier Batterie ...</small></h4>
                   </div><!-- End Item -->
                 </div><!-- End Carousel Inner -->
                 <!-- Controls -->
                 <a class="left carousel-control hidden-xs" href="#menCollection" role="button" data-slide="prev">
                   <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                   <span class="sr-only">Previous</span>
                 </a>
                 <a class="right carousel-control hidden-xs" href="#menCollection" role="button" data-slide="next">
                   <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                   <span class="sr-only">Next</span>
                 </a>
               </div><!-- /.carousel -->
               <li class="divider"></li>
               <li><a href="ateliers.php">Participer <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
             </ul>
           </li>
           <li class="col-sm-3">
             <ul>
               <li class="dropdown-header">C'est quoi ..?</li>
               <li>
                 <p>Les master-classes sont avant tout des rencontres avec des artistes. Ces derniers développent avec les stagiaires aussi bien leur approche très personnelle de la musique que leur environnement professionnel. </p>
                 <p>Rencontre, transmission et interprétation, écoute et observation sont au rendez-vous des master-classes, pour une approche encore plus personnelle de la musique.</p>
               </li>
               <li class="divider"></li>

             </ul>
           </li>

         </ul>
       </li>

     </ul>
   </div>

 </div>
</nav>

<!-- line modal Sign Up-->
<div class="modal fade" id="squarespaceModal_SignUp" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
			<h3 class="modal-title" id="lineModalLabel">Rejoignez-nous !</h3>
		</div>
		<div class="modal-body">

            <!-- content goes here -->
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
              <div class="form-group">
                <label for="myname">Prénom, Nom</label>
                <input id="myname" name="myname" type="text" placeholder="Duke, Ellington" class="form-control input-md" required="">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Adresse email</label>
                <input type="email" class="form-control" name="myemail" id="myemail" placeholder="Entrer votre email" required="">
              </div>

              <div class="form-group">
                <label for="mytel">Téléphone</label>
                <input id="mytel" name="mytel" type="tel" placeholder="06 01 02 03 04" class="form-control input-md">
              </div>

              <div class="form-group">
                <label for="myadress">Adresse</label>
                <input id="myaddress" name="myaddress" type="text" placeholder="5 Avenue Coltrane" class="form-control input-md">
              </div>

              <div class="form-group">
                <label for="exampleUserName">Nom d'utilisateur</label>
                <input type="text" class="form-control" name="myusername" id="myusername" placeholder="Entrer votre pseudo" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Mot de passe</label>
                <input type="password" class="form-control" name="mypassword" id="mypassword" placeholder="Mot de passe" required="">
              </div>

              <div class="form-group">
                <label class="col-md-4 col-sm-4 col-xs-5 control-label" for="selectTools">Instruments (un ou plusieurs)</label>
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

              <div class="form-group">
                <label class="col-md-4 col-sm-4 col-xs-5 control-label" for="selectLevel">Niveau</label>
                  <select id="selectLevel" name="selectLevel" class="form-control">
                    <option value="" disabled selected>Choisissez votre niveau</option>
                    <option value="Lecture grilles">Lecture grilles</option>
                    <option value="Partitions">Partitions</option>
                    <option value="Improvisation">Improvisation</option>
                  </select>
              </div>

              <!-- <div class="checkbox">
                <label>
                  <input type="checkbox">Prévenez-moi lors des prochaines sessions
                </label>
              </div> -->

              <div class="form-group">
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

              <button type="submit" name="update" id="update" class="btn btn-default">Envoyer</button>
            </form>
          <?php include ("welcome.php"); ?>

		</div>

    <div class="container-fluid bgOrange">
      <div class="section-title align-center">
        <h4>Le MasterClass de Jazz</h4>
        <p> Blablabla, blablabla... Le Jazz, c'est super ! </p>
      </div>
    </div>

	</div>
  </div>
</div>


<!-- line modal Log In -->
<div class="modal fade" id="squarespaceModal_LogIn" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
			<h3 class="modal-title" id="lineModalLabel">Heureux de vous revoir</h3>
		</div>
		<div class="modal-body">

            <!-- content goes here -->
			<form method="post" action="checklogin.php">
              <div class="form-group">
                <label for="exampleUserName">Nom d'utilisateur</label>
                <input type="text" class="form-control" name="myusername" id="myusername" placeholder="Entrer votre pseudo">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Mot de passe</label>
                <input type="password" class="form-control" name="mypassword" id="mypassword" placeholder="Mot de passe">
              </div>
              <button type="submit" class="btn btn-default">Connexion</button>
       </form>

		</div>

    <div class="container-fluid bgOrange">
      <div class="section-title align-center">
        <h4>Le MasterClass de Jazz</h4>
        <p> Blablabla, blablabla... Le Jazz, c'est super ! </p>
      </div>
    </div>

	</div>
  </div>
</div>
<?php ob_end_flush(); ?>
