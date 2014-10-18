<?php
require('../libraries/base.inc.php');
require('../libraries/login.inc.php');
if(session_status() != PHP_SESSION_ACTIVE) {
	session_start();
}
if(empty($_SESSION['FBID'])) {
	header('Location: fbconfig.php');
	die();
}
//$usercheck = usercheck($_SESSION['FBID']);
//if(empty($usercheck)) {
//	register($_SESSION['FBID'], 'facebook', 'facebook');
//} else {
	login($_SESSION['FBID'], 'facebook');
//}
header('Location: http://hackathon.sydcul.com/');
die();
?>