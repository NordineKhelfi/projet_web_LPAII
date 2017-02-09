<?php

  include ("bddConnect.php");



  if( isset($_POST['update']) )
  {
    $date = $_POST['alt-date'];
    $title =  $_POST['title'];
    $instruments = $_POST['selectTools'];
    $instruments = implode(", ", $instruments);

    $bdd->exec("INSERT INTO jams(date, titre, instruments) VALUES('$date', '$title', '$instruments')");

  }

 ?>
