<?php

  include ("bddConnect.php");

  $deja = $_GET['deja'];
  $deja = $deja . ', ' . $_GET['title'];

  $bdd->exec('UPDATE jams SET ' . $_GET['tool'] . ' = \'' . $_GET['username'] . '\' WHERE titre = \'' . $_GET['title'] . '\'');
  $bdd->exec('UPDATE members SET deja = \'' . $deja . '\' WHERE username = \'' . $_GET['username'] . '\'');

 ?>
