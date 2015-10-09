<?php
	$url_request=$_SERVER['REQUEST_URI'];
	$clean_url=str_replace("/", "", $url_request);
	//echo $clean_url;
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <link rel="apple-touch-icon" sizes="57x57" href="/img/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/img/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/img/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/img/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/img/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/img/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/img/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/img/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/img/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="/img/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="/img/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-16x16.png">
		<link rel="manifest" href="/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
        <title>Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/bootstrap.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="js/script.js" type="text/javascript"></script>
    </head>
    
    <body>
	<nav id="navbar-example" class="navbar navbar-default navbar-static">
      <div class="container-fluid">
        <div class="navbar-header">
          <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-example-js-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="home.html">
	          <img class="logo" src="img/logovi.png" class="img-responsive" alt="Image">
          </a>
        </div>
        <div class="collapse navbar-collapse bs-example-js-navbar-collapse">
	      <ul class="nav navbar-nav">
            <li class="<?php if($clean_url=='education.php'){ echo "active";}?> "><a href="education.php">EDUCATION</a></li>
            <li class="<?php if($clean_url=='experience.php'){ echo "active";} ?>"><a href="experience.php">EXPERIENCE</a></li>
            <li class="<?php if($clean_url=='portfolio.php'){ echo "active";}?>"><a href="portfolio.php">PORTFOLIO</a></li>
              <li class="dropdown <?php if($clean_url=='project.php'){ echo "active";}?> "><a id="drop2" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"href="project">PROJECTS <span class="caret"></span></a>
            	<ul class="dropdown-menu" aria-labelledby="drop1">
	                <li><a href="project.php?project=1">Project 1</a></li>
	                <li><a href="project.php?project=2">Project 2</a></li>
	                <li><a href="project.php?project=3">Project 3</a></li>
	               <li><a href="project.php?project=4">Project 4</a></li>
	              </ul>
            
            </li>
              <li class="<?php if($clean_url=='contact.php'){ echo "active";}?> "><a href="contact.php">CONTACT</a></li>
              <li class="<?php if($clean_url=='registration-page.php'){ echo "active";}?> "><a href="registration-page.php">REGISTRATION</a></li>
	      </ul>
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                MENU
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" aria-labelledby="drop1">
                <li><a href="education.html">EDUCATION</a></li>
                <li><a href="experience.html">EXPERIENCE</a></li>
                <li><a href="portfolio.html">PORTFOLIO</a></li>
                <li><a href="project.html">PROJECTS</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="home.html">HOME</a></li>
              </ul>
            </li>
            
          </ul>
		     <ul class="nav navbar-nav">
		
            <?php if(isset($_SESSION['username'])): ?>
              <li><a href="logout.php" style="color: black;">LOGOUT</a></li>
             <?php endif;?>
           </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container-fluid -->
    </nav>