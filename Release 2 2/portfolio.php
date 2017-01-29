<!DOCTYPE html>
<?php $thisPage = "portfolio"; ?>
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

<!-- portfolion börjar här -->
<section id="main-portfolio">
<div class="inre-kontainer">
<!-- heading -->
<section class="section-heading">
<h1 id="huvud">PORTFOLIO</h1>
</section>

<!-- portfolio content -->
<section class="portfolio-content">
<!-- portfolio item 1 -->
<figure class="portfolio-item">
<img src="http://dc615.4shared.com/img/G6ALhet5ba/s3/1466d131e60/macro1.jpg" alt="">
</figure>

<figure class="portfolio-item">
<img src="http://dc615.4shared.com/img/mUnD0aHeba/s3/1466d132248/macro2.jpg" alt="">
</figure>

<figure class="portfolio-item">
<img src="http://dc615.4shared.com/img/wqbpTH9sba/s3/1466d131690/fashion2.jpg" alt="">
</figure>

<figure class="portfolio-item">
<img src="http://dc615.4shared.com/img/uLD3ZKxece/s3/1466d1306f0/architecture1.jpg" alt="">
</figure>

<figure class="portfolio-item">
<img src="http://dc615.4shared.com/img/-YRgvy78ce/s3/1466d130ec0/architecture2.jpg" alt="">
</figure>

<figure class="portfolio-item">
<img src="images/liladen.png" alt="">
</figure>

<!-- <figure class="portfolio-item">
<img src="images/piooner.png" alt="">
</figure>

<figure class="portfolio-item">
<img src="images/bro.png" alt="">
</figure>

<figure class="portfolio-item">
<img src="../images/vatten.png" alt="">
</figure>

<figure class="portfolio-item">
<img src="../images/shire.png" alt="">
</figure> -->
</section>
</div>
</section>

<!-- portfolion tar slut -->

<footer id="footer">
<a href="hangman.php"><img src="images/biiild.png" class="pictures"></a>
</footer>
</main>

<script src="JS/portfolio.js"></script>
<script src="JS/menu.js"></script>
<script src="JS/hangman.js"></script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-586fb769ed92fa88">
</script>
</script>
</body>
</html>
