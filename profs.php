<?php include ("header.php");
         $thisPage = "profs";
         include ("nav.php"); ?>

<div class="container-fluid bgOrange">
  <div class="row"></div>
  <h1 class="text-center " id="php_screen_width" > Nos Enseignants </h1>
</div>

<?php include ("bddConnect.php"); ?>
<?php
$bdd->query('SET NAMES \'utf8\';');
$reponse = $bdd -> query('SELECT * FROM profs'); ?>

<ul class="nav nav-tabs" style="margin: 10px 30px 0px 30px;">
  <li class="active"><a data-toggle="tab" style="color: #f4511e;" href="#home">Home</a></li>
  <?php
    while ($donnees = $reponse->fetch()) {
      echo '<li><a data-toggle="tab" style="color: #f4511e;" href="#'. $donnees['id_profs'] .'">'. $donnees['name'].'</a></li>';
    }
  ?>
</ul>

<div class="tab-content" style="margin: 30px 30px 0px 30px;">
  <div id="home" class="tab-pane fade in active">
    <div class="panel panel-default">
      <div class="panel-body">
        <h3>Qu'est-ce que c'est ..?</h3>
        <br>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
        <ul>
         <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
         <li>Aliquam tincidunt mauris eu risus.</li>
         <li>Vestibulum auctor dapibus neque.</li>
        </ul>

      </div>
    </div>
  </div>

<?php
  $reponse = $bdd -> query('SELECT * FROM profs');

  while ($donnees = $reponse->fetch()) {
    echo '<div id="'.$donnees['id_profs'].'" class="tab-pane fade">
            <div class="panel panel-default" padding: 0px 40px 0px 40px;">
              <div class="panel-body">'
                . $donnees['info'] .
              '</div>
            </div>
          </div>';
  }

?>

</div>

<?php include ("footer.php"); ?>
