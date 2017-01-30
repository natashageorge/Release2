<?php
  include('header.php');
  include('menu.php');

  switch($_GET['p']) {
    case 'home':
      include('home.php');
      break;
    case 'cv':
      include('cv.php');
      break;
    case 'portfolio':
      include('portfolio.php');
      break;
    case 'kontakt':
      include('kontakt.php');
      break;
    case 'login':
      include('admin/login.php');
      break;
    case 'hangman':
      include('hangman.php');
      break;
    default:
      include('home.php');
  }

  include('footer.php');