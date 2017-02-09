<?php include ("header.php");
         $thisPage = "jams";
         include ("nav.php"); ?>


<div class="container-fluid bgOrange">
    <h1 class="text-center" id="php_screen_width" > Jams Sessions</h1>
</div>

<!-- Panel pour ajouter un nouveau jam -->
<?php
if(isset($_SESSION['myusername'])){
  echo '<div class="panel panel-default" style="margin: 40px;">
  <div class="panel-body">

  <form method="post" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '" class="form-horizontal">
  <fieldset>

  <!-- Form Name -->
  <legend>Nouveau Jam ... ?</legend>

  <div class="form-group">
  <label class="col-md-4 control-label" for="title">Date</label>
  <div class="col-md-4">
  <input type="text" id="datepicker" placeholder="Choisissez une date">
  <input type="text" name="alt-date" id="alt-date" style="visibility :hidden;">
  </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
  <label class="col-md-4 control-label" for="title">Titre</label>
  <div class="col-md-4">
  <input id="title" name="title" type="text" placeholder="Entrez votre titre" class="form-control input-md" required="">
  </div>
  </div>

  <!-- Select Multiple -->
  <div class="form-group">
  <label class="col-md-4 control-label" for="selectTools">Instruments</label>
  <div class="col-md-4">
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

  <!-- Button -->
  <div class="form-group">
  <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-5 col-xs-offset-5">
  <button id="update" name="update" class="btn btn-default" >Ajouter</button>
  </div>
  </div>

  </fieldset>
  </form>';
  include ("insert_jam.php");
  echo '
  </div>
  </div>';
}
?>

<?php include ("bddConnect.php");
  $reponse = $bdd -> query('SELECT * FROM jams ORDER BY `jams`.`date` ASC');
  while ($donnees = $reponse->fetch()) {
    $instruments = $donnees['instruments'];
    $instruments = explode(", ", $instruments);
    $date = strtotime($donnees['date']);
    $date = date('d/m/Y', $date);

    echo '<div class="panel panel-default " style="margin: 40px;">
      <div class="panel-body">
      <h3><b>'.$donnees['titre'].',</b> le '.$date.'</h3>
        <table class="table table-striped custab">
          <thead>
            <tr class="warning">
              <th>Instruments</th>
              <th>Joueur</th>';
    if(isset($_SESSION['myusername'])){
      echo'   <th>Participer</th>';
    }
    echo '
            </tr>
          </thead>';
    foreach ($instruments as $key) {
      echo '<tr>
                <td>'.$key.'</td>
                <td>' . $donnees[$key] . '</td>';
      if(isset($_SESSION['myusername'])){
        $response = $bdd -> query('SELECT * FROM members WHERE username = \'' . $_SESSION['myusername'] . '\'');
        $data = $response->fetch();
        $myTools = $data['instruments'];
        $myTools = explode(", ", $myTools);
        $deja = $data['deja'];
        if(in_array($key, $myTools) && ($donnees[$key] == 'Personne ..') && (strpos($deja, $donnees['titre']) === false)){
          echo '<td><a class=\'btn btn-info btn-xs\' href="jams.php" onclick="testJams(\''.$key.'\', \''.$_SESSION['myusername'].'\', \''.$donnees['titre'].'\', \''.$deja.'\');"><span class="glyphicon glyphicon-music"></span> Let\'s go</a></td>';
        }else{
          echo '<td></td>';
        }

      }
      echo '    </tr>';
    }
    echo '
        </table>
      </div>
    </div>';
  }
?>



<?php include ("footer.php"); ?>
