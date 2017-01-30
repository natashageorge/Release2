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
<li <?php if($thisPage=='Hem')echo "class=\"currentpage\"";?> ><a href="?p=home">HEM</a></li>
<li <?php if($thisPage=='cv')echo "class=\"currentpage\"";?>><a href="?p=cv">CV</a></li>
<li <?php if($thisPage=='portfolio')echo "class=\"currentpage\"";?>><a href="?p=portfolio">PORTFOLIO</a></li>
<li <?php if($thisPage=='kontakt')echo "class=\"currentpage\"";?>><a href="?p=kontakt">KONTAKTA MIG</a></li>
</ul>
<figure class="logo"><img src="images/logo.png" alt=""> </figure>
</div>
</nav>
