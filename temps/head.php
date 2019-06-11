<!doctype html>
<head>
<?php 

	$aktiv	= 'class="active"';

	
	echo '<html lang="de">';
    echo '<Title>AWOnline</Title>';
	echo '<meta charset=utf-8>';
	echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
	echo '<link rel="stylesheet" href="config/styles.css">';
	echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';
	echo '<meta name="viewport" content="width=device-width, initial-scale=1">';

	

	echo '<div class="awo">';
	echo '<img src="images/apple-logo.png" alt="AWOnline" />';
	echo '</div>';


	echo '<div class="navbar">';
	
	echo '<a href="index.php">Home</a>';
	
	echo '<a href="#news">News</a>';
	
	echo '<a href="#contact">Contact</a>';
	
	
	
	
	if(!isset($_SESSION['userid'])) {
	echo '<a class="active" style="float:right" href="login.php">Login</a>';
	echo '<a class="active" style="float:right" href="register.php">Register</a>';
	} else {
	echo '<div style="float:right" class="dropdown">';
	
	echo '<button class="dropbtn">Dropdown 
      <i class="fa fa-caret-down"></i>
    </button>';
	
	echo '<div  class="dropdown-content">';
	
	echo '<a href="ccp.php">CCP</a>';
	
	echo '<a href="logout.php">Logout</a>';
	
	echo '</div>';
	echo '</div>';
	}
	echo '</div> ';
?>
  
</head>