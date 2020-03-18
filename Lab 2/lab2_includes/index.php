<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Lab 2 - Includes en require</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
<?php
	//<!-- laad hier via php je header in (vanuit je includes map) -->
  include 'includes/header.php';




  
	//<!-- laad hier via php de juiste contentpagina in (vanuit de pages map) in. Welke geselecteerd moet worden kun je uit de URL halen (URL_Params).--> 
  if(isset($_GET['games'])){
    $games = $_GET['games'];
  } else {
    $games = 'onderwerp1';
  }

  include("pages/$games.php");

	//<!-- laad hier via php je footer in (vanuit je includes map)-->
  include 'includes/footer.php';
?>


  </div>
</body>
</html>