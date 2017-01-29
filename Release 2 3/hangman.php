<!DOCTYPE html>
<?php $thisPage = "hangman"; ?>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Hangman</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css" />
    <link href='https://fonts.googleapis.com/css?family=Architects+Daughter|Gloria+Hallelujah' rel='stylesheet' type='text/css'>
</head>

<body> 
  <!-- HANGMAN -->
  <!-- game -->
  <section id="game-hangman">
  <form id="hangman">
  <input id="letter" type="text" name="letter" maxlength="1" minlength="1" placeholder="Gissa en bokstav">
  <input id="guess" type="submit" name="guess" value="Gissa">
  <button type="button" name="restart" id="restart">Börja om</button>
  </form>
  <ul id="letters"></ul>
  <p id="man"></p>
  <p id="output" class="output"></p>
  </section>

<script src="JS/hangman.js"></script>
</body>
</html>
