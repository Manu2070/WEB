<!doctype html>
<head>
<?php 
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
	
	echo '<a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>';
	
	echo '<a href="#news"><i class="fa fa-newspaper-o"></i> News</a>';
	
	echo '<a href="#contact"><i class="fa fa-fw fa-envelope"></i> Contact</a>';
	
	
	
	
	if(!isset($_SESSION['userid'])) {
	echo '<a class="active" style="float:right" href="login.php"><i class="fa fa-sign-in"></i> Login</a>';
	echo '<a class="active" style="float:right" href="register.php"><i class="fa fa-fw fa-user"></i> Register</a>';
	} else {
	echo '<div class="dropdown">';
	
	echo '<button class="dropbtn">Dropdown 
      <i class="fa fa-caret-down"></i>
    </button>';
	
	echo '<div  class="dropdown-content">';
	
	echo '<a style="color:white" href="ccp.php">CCP</a>';
	
	echo '<a style="color:red" href="logout.php">Logout <i class="fa fa-sign-out" aria-hidden="true"></i></a>';
	
	echo '</div>';
	echo '</div>';
	}
	echo '</div> ';
?>
  
</head>