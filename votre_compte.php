<?php include ("header.php");
         $thisPage = "votre compte";
         include ("nav.php"); ?>

<div class="container-fluid bgOrange">
  <div class="row"></div>
  <h1 class="text-center " id="php_screen_width" > Votre compte</h1>
</div>

<div class="container" style="padding-top: 10px;">
	<div class="row">
		<div class="col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4 user-details">
            <div class="user-image">
                <img src="https://secure.gravatar.com/avatar/f5dd089b81f90ecadab4e1b6f93455c0" alt="Karan Singh Sisodia" title="Karan Singh Sisodia" class="img-circle">
            </div>
            <div class="user-info-block">
                <div class="user-heading">
                  <?php include ("bddConnect.php"); ?>
                  <?php
                  $query = 'SELECT * FROM members WHERE username = \''.$_SESSION['myusername'].'\'';
                  $reponse = $bdd -> query($query);
                  $reponse = $reponse -> fetch();
                  echo '<h3>'.$reponse['name'].'</h3>'; ?>
                    <span class="help-block">Nice, FR</span>
                </div>
                <ul class="navigation">
                    <li class="active">
                        <a data-toggle="tab" href="#information">
                            <span class="glyphicon glyphicon-user"></span>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#settings">
                            <span class="glyphicon glyphicon-cog"></span>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#email">
                            <span class="glyphicon glyphicon-envelope"></span>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#events">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </a>
                    </li>
                </ul>
                <div class="user-body">
                    <div class="tab-content">
                        <div id="information" class="tab-pane active">
                            <h4>Mes instruments:</h4>
                            <ul>
                              <?php
                              $query = 'SELECT * FROM members WHERE username = \''.$_SESSION['myusername'].'\'';
                              $reponse = $bdd -> query($query);
                              $reponse = $reponse -> fetch();
                              $instr = $reponse['instruments'];
                              $instr = explode(", ", $instr);
                              foreach ($instr as $key) {
                                echo '<li>'.$key.'</li>';
                              }
                              ?>
                            </ul>
                        </div>
                        <div id="settings" class="tab-pane">
                            <h4>Niveau: <?php echo $reponse['level']; ?></h4>

                        </div>
                        <div id="email" class="tab-pane">
                            <h4>Coordonnées</h4>
                            <ul>
                              <li>Email: <?php echo $reponse['email']; ?></li>
                              <li>Adresse: <?php echo $reponse['address']; ?></li>
                              <li>Téléphone: <?php echo $reponse['tel']; ?></li>
                        </div>
                        <div id="events" class="tab-pane">
                            <h4>Participation Jams</h4>
                            <?php $jams = $reponse['deja'];
                            $jams = explode(", ", $jams);
                            foreach ($jams as $key) {
                              if(strlen($key) > 1) echo '<li>'.$key.'</li>';
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>

<?php include ("footer.php"); ?>
