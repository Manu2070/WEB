<?php 
include ("user/login.php");
include ("user/users.php");
include ("temps/head.php");
?>
<body>
<div class="awo">
<img src="images/apple-logo.png" alt="AWOnline" />
</div>

<div class="topnav">
  <a href="index.php">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a class="active" href="ccp.php">CCP</a>
  <a class="active" style="float:right" href="Login">Login</a>
  <a class="active" style="float:right" href="Login">Register</a>
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
  <h1><font color='#FF0000'><p>User Info..</p></font></h1>
<?php
	echo "<font color='#FF0000'>Hallo User: </font>".$name;
	echo "<br><font color='#FF0000'>UserID: </font>".$userid;
?>
</form>	
</body>
</html>