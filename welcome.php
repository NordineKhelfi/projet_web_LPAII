<?php

  include ("bddConnect.php");



  if( isset($_POST['update']) && !isset($_SESSION['myusername']))
  {
    $name = $_POST['myusername'];
    $password =  $_POST['mypassword'];
    $prenomNom = $_POST['myname'];
    $email = $_POST['myemail'];
    $tel = $_POST['mytel'];
    $adresse = $_POST['myaddress'];
    $instruments = $_POST['selectTools'];
    $instruments = implode(", ", $instruments);
    $niveau = $_POST['selectLevel'];
    if($_POST['checkboxes'][0] == 'Oui') $airport = $_POST['checkboxes'][0];
      else  $airport = 'Non';
    if($_POST['checkboxes'][1] == 'Oui') $accompagnied = $_POST['checkboxes'][1];
      else  $accompagnied = 'Non';


    if( ($name !='') && ($password != '') ){
      $_SESSION['myusername'] = $name;
      $_SESSION['mypassword'] = $password;

      $bdd->exec("INSERT INTO members(username, password, name, email, tel, address, instruments, level, airport, accompagnied) VALUES('$name', '$password', '$prenomNom', '$email', '$tel', '$adresse', '$instruments', '$niveau', '$airport', '$accompagnied')");
    }

    header("location:index.php");
  }

 ?>
