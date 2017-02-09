<?php
  try {
    $bdd = new PDO('mysql:host=localhost;dbname=bdd1;', 'root', '');
    //echo '<h2> Yataaa ..! </h2>';
  } catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
  }

?>
