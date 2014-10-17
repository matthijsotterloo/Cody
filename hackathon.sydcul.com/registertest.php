<?php
include('libraries/base.inc.php');
include('libraries/login.inc.php');
if(!empty($_POST['username'])) {
	register($_POST['username'], $_POST['password']);
}
?>
<html>
<body>
<h1>Registreren</h1>
<form action="registertest.php" method="POST">
<input type="text" name="username"><br>
<input type="password" name="password"><br>
<input type="submit"><br>
</form>
</body>
</html>