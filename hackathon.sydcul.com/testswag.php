<?php
include('libraries/base.inc.php');
include('libraries/login.inc.php');
?>
<html>
<body>
<h1>Inloggen</h1>
<form action="logintest.php" method="POST">
<input type="text" name="username"><br>
<input type="password" name="password"><br>
<input type="submit"><br>
</form>
Ingelogd: <?php
$userid = logincheck();
var_dump($userid);
echo('<br>');
var_dump(getusername($userid));
?><br>
<form method="POST" action="logintest.php">
<input type="hidden" name="logout" value="1">
<input type="submit" value="Uitloggen">
</form>
</body>
</html>