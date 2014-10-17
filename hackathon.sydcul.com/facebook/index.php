<?php
require('../libraries/base.inc.php');
require('../libraries/login.inc.php');
session_start();
if(empty($_SESSION['FBID'])) {
	header('Location: fbconfig.php');
	die();
}

register($_SESSION['FBID'], 'facebook', 'facebook');
header('Location: http://hackathon.sydcul.com/');
die();
?>