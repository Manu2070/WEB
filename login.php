<?php 
	include ("temps/head.php");


	echo'<body>';
	
	
	echo'<form class="box" action="?login=1" method="post">';
	include ("user/login.php");
	echo'<h1>Login</h1>';
	echo'<input type="Username" size="40" name="username" placeholder="Username">';
	echo'<input type="Password" size="40" name="passwort" placeholder="Password">';
	echo'<input type="submit" name="" value="Login">';
	echo'</form>';

	echo'</div>';
	echo'</body>';
	echo '</html>';
?>	