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
<body>
<h1>Login</h1>
<form action="login.php" method="POST">
<input type="text" name="username"><br>
<input type="password" name="password"><br>
<input type="submit">
</form>
</body>
</html>