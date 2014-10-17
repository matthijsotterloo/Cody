<?php
include('libraries/base.inc.php');
include('libraries/login.inc.php');
if(!empty($_POST['username'])) {
	register($_POST['username'], $_POST['password']);
}
?>
<html>
    <head>

        <meta charset="utf-8">
        <title>Cody | Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,300,100,100italic,300italic,400italic,700,700italic">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">
        <link rel="stylesheet" href="assets/css/bootstrap-social.css">
        <link href="assets/css/docs.css" rel="stylesheet" >
 
    </head>
<body>
	<div class="coming-soon">
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="span12">
							<h1>Registreren</h1>
<form action="registertest.php" method="POST">
<input type="text" name="username"><br>
<input type="password" name="password"><br>
<input type="submit"><br>
</form>

<script src="assets/js/jquery-1.10.2.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="assets/js/jquery.ui.map.min.js"></script>
        <script src="assets/js/scripts.js"></script>
</body>
</html>