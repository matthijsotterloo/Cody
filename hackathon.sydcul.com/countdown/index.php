<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>YCHackathon CountDown</title>
<style type="text/css">
@import url(http://fonts.googleapis.com/css?family=Open+Sans:300,400);
body {
background: #363f48;
color: white;
font: normal 12px 'Open Sans', sans-serif;
margin-top: 20px;
}
ul.countdown {
list-style: none;
margin: 75px 0;
padding: 0;
display: block;
text-align: center;
}
ul.countdown li {
display: inline-block;
}
ul.countdown li span {
font-size: 80px;
font-weight: 300;
line-height: 80px;
}
ul.countdown li.seperator {
font-size: 80px;
line-height: 70px;
vertical-align: top;
}
ul.countdown li p {
color: #a7abb1;
font-size: 14px;
}
a {
color: #76949F;
text-decoration: none;
}
a:hover {
text-decoration: underline;
}
.source {
width: 405px;
margin: 0 auto;
background: #4f5861;
color: #a7abb1;
font-weight: bold;
display: block;
white-space: pre;
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
border-radius: 3px;
}
.btn {
background: #f56c4c;
margin: 40px auto;
padding: 12px;
display: block;
width: 100px;
color: white;
text-align: center;
text-transform: uppercase;
font-weight: bold;
text-decoration: none;
-webkit-border-radius: 2px;
-moz-border-radius: 2px;
border-radius: 2px;
}
.btn:hover {
text-decoration: none;
opacity: .7;
}
</style>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
</head>
<?php
putenv("TZ=Europe/Amsterdam");
?>
<body>
</div>
<div class="jquery-script-clear"></div>
</div>
</div>
<h1 align="center" style="margin-top:150px;">Tijd resterend</h1>
<ul class="countdown">
<li> <span class="hours">00</span>
<p class="hours_ref">uur</p>
</li>
<li class="seperator">:</li>
<li> <span class="minutes">00</span>
<p class="minutes_ref">minuten</p>
</li>
<li class="seperator">:</li>
<li> <span class="seconds">00</span>
<p class="seconds_ref">secondes</p>
</li>
</ul>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="jquery.downCount.js"></script> 
<script class="source" type="text/javascript">
        $('.countdown').downCount({
            date: '18/10/2014 16:00:00',
            offset: +10
        }, function () {
            alert('Einde van deze countdown doei.');
        });
    </script> 
</body>
</html>