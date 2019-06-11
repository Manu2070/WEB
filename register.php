<?php 
include ("user/register.php"); 
include ("temps/head.php"); 
?>

<body>
<div class="awo">
<img src="images/apple-logo.png" alt="AWOnline" />
</div>

<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a class="active" style="float:right" href="login.php">Login</a>
  <a class="active" style="float:right" href="register.php">Register</a>
</div> 


<form class="box" action="?register=1" method="post">
  <h1>Register</h1>
  <input type="Username" size="40" name="username" placeholder="Username">
  <input type="email" size="40" name="email" placeholder="Email">
  <input type="password" size="40" name="passwort" placeholder="Password">
  <input type="password" size="40" name="passwort2" placeholder="Password Repeat">
  <input type="submit" name="" value="Registrieren">
</form>
 

	
</body>
</html>
