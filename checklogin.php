<?php ob_start(); ?>
<?php include ("header.php");
      $thisPage = "none";  ?>

<?php

  include ("bddConnect.php");
  // table name
  $tbl_name="members";

  // username and password sent from form
  $myusername=$_POST['myusername'];
  $mypassword=$_POST['mypassword'];

  $result = $bdd->query("SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'");

  if($result->fetchColumn() > 0){
    // Register $myusername, $mypassword and redirect to file "login_success.php"
    $_SESSION['myusername'] = $myusername;
    $_SESSION['mypassword'] = $mypassword;
    header("location:index.php");

  }
  else {
    header("location:main_login.php?login=KO");
  }

?>


<?php include ("footer.php"); ?>
<?php ob_end_flush(); ?>
