<?php
include('libraries/base.inc.php');
include('libraries/login.inc.php');
if(!empty($_POST['username'])) {
	login($_POST['username'], $_POST['password']);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Cody | Login</title>
    <?php include 'header.php';?>

  <body>

    <div class="container">

      <form class="form-signin" role="form" method="POST" action="login.php">
        <br>
        <br>
        <h2 class="form-signin-heading" style="color:#FFFFFF">Login</h2>
        <br>
        <input type="test" class="form-control" placeholder="Gebruikersnaam" required autofocus>
        <input type="password" class="form-control" placeholder="Wachtwoord" required>
        <label class="checkbox">
          <input type="checkbox" value="remember-me" style="color:#FFFFFF"> Blijf aangemeld
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Aanmelden</button>
      </form>

    </div> <!-- /container -->

            <script src="assets/js/jquery-1.10.2.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="assets/js/jquery.ui.map.min.js"></script>
        <script src="assets/js/scripts.js"></script>
  </body>
</html>
