<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
      <script src="scripts/jquery.js"></script>
      
    <link rel="icon" type="image/png" href="fevicon.jpg">
    <title>iMusic </title>
    
    <link href="style.css">
  </head>
<body style="background-color:#D3D3D3 " >
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#" style="margin-left: 100px">iMusic</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault" >
        <ul class="navbar-nav mr-auto" style="margin-left: 0px">
          <li class="nav-item active" id="navbar1">
             <a class="nav-link" href="ОСНОВНОЙ.html">Новости <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
           <a style="color:white" class="nav-link" href="ИНТЕРЕСНЫЕ ФАКТЫ.html">Интересные факты<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a style="color: white" class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Топ песни</a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="хиты2017.html">2017</a>
              <a class="dropdown-item" href="хиты2016.html">2016</a>
              <a class="dropdown-item" href="хиты2015.html">2015</a>
              <a class="dropdown-item" href="хиты2014.html">2014</a>
              <a class="dropdown-item" href="хиты2013.html">2013</a>
            </div>
          </li>
        </ul>
        <!-- <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        
        </form> -->
      </div>
    </nav>
    <main role="main">
      <div style="background-image: url('https://media.playstation.com/is/image/SCEA/PS-Music-Blue-Hero-june-27-2017-510pm?$native$')!important;background-repeat: no-repeat;background-size: cover;" class="jumbotron">
        <div class="container">
           <h1 style="color: white;" class="display-3">iMusic News</h1> 
          <h4 style="color:white;text-shadow: 2px 2px 2px rgb(0,0,0)">Дорогой друг,мы рады видеть тебя на нашем сайте,здесь ты сможешь узнать о последних новостях в сфере музыки,послушать хиты разных годов,а так же прочитать интересные факты.</h4>
        </div>
      </div>

      <div class="container" id="elements">
        <?php
          include 'config.php';
          $mysqli = new mysqli($host, $user, $db_pass, $db);
          $mysqli->query ("SET NAMES 'utf8'");
          $row = $mysqli->query ("SELECT * FROM `news` ORDER BY id ASC");

?>
<?php
switch($_GET["page"]){
	case "index": include 'pages/index.php';
	break;
	case "full": include 'pages/full.php';
	break;
	default: include 'pages/index.php';
    }
          ?>

        </div>

    </main>

    <footer class="container">
      <p>&copy; JSTeam 2017-2018</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
