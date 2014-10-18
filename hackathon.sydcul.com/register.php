<?php
include('libraries/base.inc.php');
include('libraries/login.inc.php');
if(!empty($_POST['username'])) {
	register($_POST['username'], $_POST['password'], $_POST['email']);
}
?>
<html>
<body>
<h1>Register</h1>
<form action="registertest.php" method="POST">
Username: <input type="text" name="username"><br>
Password: <input type="password" name="password"><br>
E-Mail: <input type="text" name="email"><br>
<input type="submit"><br>
</form>
</body>
</html>