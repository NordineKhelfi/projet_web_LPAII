<?php include ("header.php"); ?>
<?php $thisPage = "login"; ?>
<?php include ("nav.php"); ?>

<h1 class="text-center" style="color: white;">Heureux de vous revoir ... </h1>

<div container-fluid style="background-color : rgba(244, 81, 30, 0.72); padding-top : 15px;">

  <table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
      <tr>
        <form name="form1" method="post" action="checklogin.php">
          <td>
            <table width="150%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
              <!-- <tr>
              <td colspan="3"><strong>Member Login </strong></td>
              </tr> -->
              <tr>
                <td width="78">Utilisateur</td>
                <td width="6">:</td>
                <td width="294"><input name="myusername" type="text" id="myusername"></td>
              </tr>
              <tr>
                <td>Mot de passe</td>
                <td>:</td>
                <td><input name="mypassword" type="password" id="mypassword"></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><input type="submit" name="Submit" value="Connexion"></td>
              </tr>
            </table>
            <br>
            <p>Nouveau ? <a href="sign_up.php">Inscrivez-vous !</a></p>
        </td>
      </form>
    </tr>
  </table>
</div>



<?php include ("footer.php"); ?>

<?php
if($_GET['login'] == 'KO')
  echo '<script type="text/javascript">',
  'loginFailed();',
  '</script>';
?>
