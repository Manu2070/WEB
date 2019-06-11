<!doctype html>
<head>
<?php 

	$aktiv	= 'class="active"';

	
	echo '<html lang="de">';
    echo '<Title>AWOnline</Title>';
	echo '<meta charset=utf-8>';
	echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
	//echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">';
	echo '<link rel="stylesheet" href="config/styles.css">';
	echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>';
	echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>';
	echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>';

	

	echo '<div class="awo">';
	echo '<img src="images/apple-logo.png" alt="AWOnline" />';
	echo '</div>';

     <div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Dropdown</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div> 

	

	echo '<div class="topnav">';
	
	echo '<a href="index.php">Home</a>';
	
	echo '<a href="#news">News</a>';
	
	echo '<a href="#contact">Contact</a>';
	
	echo '<a href="ccp.php">CCP</a>';
	if(!isset($_SESSION['userid'])) {
	echo '<a class="active" style="float:right" href="login.php">Login</a>';
	echo '<a class="active" style="float:right" href="register.php">Register</a>';
	} else {
	echo '<a class="active" style="float:right" href="logout.php">Logout</a>';
	}
	echo '</div> ';
?>
  
</head>