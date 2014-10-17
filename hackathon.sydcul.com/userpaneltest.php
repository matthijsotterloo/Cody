<?php
include('libraries/base.inc.php');
include('libraries/login.inc.php');
if(!empty($_POST['delete'])) {
	delete();
}
?>
<html>
<body>
<h1>User Panel</h1>
<form method="POST" action="userpaneltest.php">
<input type="hidden" name="delete" value="1">
<input type="submit" value="Account verwijderen">
</form>
</body>
</html>