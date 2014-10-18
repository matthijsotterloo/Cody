<?php
include('libraries/base.inc.php');
include('libraries/login.inc.php');
?>
<html>
<body>
<h1>Inloggen</h1>
<?php
$userid = logincheck();
var_dump($userid);
echo('<br>');
var_dump(getusername($userid));
?>
</body>
</html>