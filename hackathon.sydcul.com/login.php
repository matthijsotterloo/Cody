<?php
include('libraries/base.inc.php');
include('libraries/login.inc.php');
if(!empty($_POST['username'])) {
	$loginstatus = login($_POST['username'], $_POST['password']);
}
if(!empty($_POST['logout'])) {
	logout();
}
?>
<html>
    <head>

        <meta charset="utf-8">
        <title>Cody | Login</title>

        <?php include 'header.php';?>
<h1 style="color:#FFF">Inloggen</h1>
<form action="logintest.php" method="POST">
<input type="text" name="username"><br>
<input type="password" name="password"><br>
<input type="submit"><br>
</form>
Ingelogd: <?php var_dump(logincheck()); ?><br>
<form method="POST" action="logintest.php">
<input type="hidden" name="logout" value="1">
<input type="submit" value="Uitloggen">
</form>
</body>
</html>