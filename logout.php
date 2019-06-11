<?php 
include ("temps/head.php")
?>

<body>
<div class="awo">
<img src="images/apple-logo.png" alt="AWOnline" />
</div>

<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
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
<?php
	include ("user/logout.php");
?>
</form>	
</body>
</html>
