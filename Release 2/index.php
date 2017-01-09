<!DOCTYPE html>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://use.fontawesome.com/f185a80b16.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Open+Sans|Oswald" rel="stylesheet">
  <title></title>
<link rel="stylesheet" href="stylesheet.css" />
<meta charset="utf-8" />
</head>

<body>

<!--mobilemenu starts here-->
<div class="sidebar">
  <ul class="sidebar-list">
      <li class="sidebar-item">
        <a href="index.php" class="sidebar-anchor">HEM</a>
      </li>
      <li class="sidebar-item">
        <a href="cv.php" class="sidebar-anchor">CV</a>
      </li>
      <li class="sidebar-item">
        <a href="portfolio.php" class="sidebar-anchor">PORTFOLIO</a>
      </li>
      <li class="sidebar-item">
        <a href="kontakt.php" class="sidebar-anchor">KONTAKTA MIG</a>
      </li>
    </ul>
  </div>
  <div class="nav-right visible-xs">
    <div class="button" id="btn">
      <div class="bar top"></div>
      <div class="bar middle"></div>
      <div class="bar bottom"></div>
    </div>
  </div>
<main>
<div class="wrapper">
  <nav>
     <div class="nav-right hidden-xs">
       <div class="button" id="btn">
         <div class="bar top"></div>
         <div class="bar middle"></div>
         <div class="bar bottom"></div>
       </div>
     </div>
   </nav>
<header class="bild"></header>
<nav class="meny">
<div class="inre-kontainer">
<ul>
  <li><a href="index.php">HEM</a></li>
  <li><a href="cv.php">CV</a></li>
  <li><a href="portfolio.php">PORTFOLIO</a></li>
  <li><a href="kontakt.php">KONTAKTA MIG</a></li>
</ul>
<figure class="logo"><img src="images/logo.png" alt=""> </figure>
</div>
</nav>
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

<footer id="footer"></footer>
</main>

<script src="JS/JavaScript.js"></script>
<script src="JS/hangman.js"></script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-586fb769ed92fa88">
</script>
</body>
</html>
