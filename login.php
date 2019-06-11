<?php 
include ("user/login.php");
include ("temps/head.php")
?>

<body>
<div class="awo">
<img src="images/apple-logo.png" alt="AWOnline" />
</div>

<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="ccp.php">CCP</a>
  <a class="active" style="float:right" href="login.php">Login</a>
  <a class="active" style="float:right" href="register.php">Register</a>
</div> 

<!-- <div class="dropdown">
  <button class="dropbtn">Dropdown</button>
  <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div> 
-->

<form class="box" action="?login=1" method="post">
  <h1>Login</h1>
  <input type="Username" size="40" name="username" placeholder="Username">
  <input type="Password" size="40" name="passwort" placeholder="Password">
  <input type="submit" name="" value="Login">
</form>

</div>
	
</body>
</html>
