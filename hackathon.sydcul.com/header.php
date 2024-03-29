        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,300,100,100italic,300italic,400italic,700,700italic">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">
        <link rel="stylesheet" href="assets/css/bootstrap-social.css"> 
    </head>

    <body>

    <!-- Static navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
			<li><?php
			include('libraries/base.inc.php');
			include('libraries/login.inc.php');
			
			$userid = logincheck();
			if(!empty($userid)) {
				echo('<a href="logout.php">Logged in as ' . getusername($userid) . '</a>');
			} else {
				echo('<a href="login.php">Log in</a>');
			}
			?></li>
            <li><a href="/">Home</a></li>
            <li><a href="about.php">Over Cody</a></li>
            <li><a href="app.php">App</a></li>
            <li><a href="/game/index.html">Spelen!</a></li>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>