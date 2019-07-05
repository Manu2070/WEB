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


	$dbcon = new MySQLi("localhost","root","","awonline");


	echo '<div class="awo">';
	echo '<img src="favicon64.png" alt="AWOnline" />';
	echo '</div>';


	echo '<div class="navbar">'; 
	?>
	<?php
		$res=$dbcon->query("SELECT * FROM main_menu");
		while($row=$res->fetch_array())
	{
	 ?>
		<a href="<?php echo $row['m_menu_link']; ?>"><i class="<?php echo $row['m_menu_icon']; ?>"></i><?php echo $row['m_menu_name']; ?></a>
		 <?php
	}
	?>
	
	
	<?php	
	if(!isset($_SESSION['userid'])) {
	echo '<a class="active" style="float:right" href="login.php"><i class="fa fa-sign-in"></i> Login</a>';
	echo '<a class="active" style="float:right" href="register.php"><i class="fa fa-fw fa-user"></i> Register</a>';
	} else {
	echo '<div class="dropdown">';
	
	echo '<button class="dropbtn">User Info 
      <i class="fa fa-caret-down"></i>
    </button>';
	
	echo '<div  class="dropdown-content">';
	
	?>

	<?php
		$res2=$dbcon->query("SELECT * FROM sub_menu");
		while($row2=$res2->fetch_array())
	{
	 ?>
		<a style="color:white" href="<?php echo $row2['m_menu_link']; ?>"><i class="<?php echo $row2['m_menu_icon']; ?>"></i><?php echo $row2['m_menu_name']; ?></a>
		 <?php
	}
	?>

	<?php
	echo '<a style="color:red" href="logout.php">Logout <i class="fa fa-sign-out" aria-hidden="true"></i></a>';
	
	echo '</div>';
	echo '</div>';
	}
	echo '</div> ';
?>
  
</head>