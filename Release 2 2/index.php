<!DOCTYPE html>
<?php $thisPage = "index"; ?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width= 375, initial-scale= 1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://use.fontawesome.com/f185a80b16.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Open+Sans|Oswald" rel="stylesheet">
  <title>Natasha George | Min egen sida</title>
<link rel="stylesheet" href="stylesheet.css" />
<meta charset="utf-8" />
</head> 
<body>

<!--mobilemenu starts here-->
<?php include("phpincludes/mobilemenu.php"); ?>
  <div class="nav-right visible-xs">
    <div class="button" id="btn">
      <div class="bar top"></div>
      <div class="bar middle"></div>
      <div class="bar bottom"></div>
    </div>
  </div>
<main>
<div class="wrapper">
<?php include("phpincludes/menu.php"); ?>
<!--Meny1 avslutas-->

<section id="countdown">
<section id="runtom">
<!--Countdown1 Graduation starts here-->
<section class="clockdiv">
  <h1> EXAMEN </h1>
  <div id="clockdiv">
  <div>
  <span id="examen_days" class="days"></span>
  <div class="smalltext">Days</div>
  </div>
  <div>
  <span id="examen_hours" class="hours"></span>
  <div class="smalltext">Hours</div>
  </div>
  <div>
  <span id="examen_minutes" class="minutes"></span>
  <div class="smalltext">Minutes</div>
  </div>
  <div>
  <span id="examen_seconds" class="seconds"></span>
  <div class="smalltext">Seconds</div>
  </div>
  </div>
</section>
<!--Countdown1 closing here-->

<section class="clockdiv">
  <!--Countdown2 LIA starts here-->
  <h1> LIA </h1>
  <div id="clockdiv2">
  <div>
  <span id="LIA_days" class="days"></span>
  <div class="smalltext">Days</div>
  </div>
  <div>
  <span id="LIA_hours" class="hours"></span>
  <div class="smalltext">Hours</div>
  </div>
  <div>
  <span id="LIA_minutes" class="minutes"></span>
  <div class="smalltext">Minutes</div>
  </div>
  <div>
  <span id="LIA_seconds" class="seconds"></span>
  <div class="smalltext">Seconds</div>
  </div>
  </div>
</section>
<!--countdown2 closing here-->
</section>
</section>

<br>
<br>

<footer id="footer" class='container-fluid text-center'>
<ul>
<li><a href='admin/login.php'>Login</a></li>
</ul>
</footer>





<!-- <footer id="footer">
<ul>
<li><a href="index.php" class="fotgrej">HEM</li></a>
<li><a href="cv.php" class="fotgrej">CV</li></a>
<li><a href="portfolio.php" class="fotgrej">PORTFOLIO</li></a>
<li><a href="kontakt.php" class="fotgrej">KONTAKTA MIG</li></a>
<li><a href='login.php' class="login">LOGIN</a></li>
</ul>
<!- <form method="post" action="login.php"><input type="text" placeholder="username" name="username"><input type="password" placeholder="password" name="password"><input type="submit" value="Submit"></form> -->
<!--</footer> -->
</main>
<script src="JS/menu.js"></script>
<script src="JS/countdown.js"></script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-586fb769ed92fa88">
</script>
</body>
</html>
