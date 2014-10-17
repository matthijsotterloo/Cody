<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

//Instellingen
$dbhost = 'localhost';
$dbuser = 'hackathon';
$dbpass = 'P@$$w0rd';
$dbdb = 'hackathon';

//Code
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbdb);

if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}
?>