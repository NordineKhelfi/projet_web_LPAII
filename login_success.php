<!-- Check if session is not registered, redirect back to main page.
Put this code in first line of web page. -->
<?php
  //session_start();
  if(!isset($_SESSION['myusername'])){
    header("location:index.php");
  }
?>

<?php include ("header.php"); ?>
<?php include ("nav.php"); ?>

<h1> Login Successful ! </h1>

<?php include ("footer.php"); ?>
