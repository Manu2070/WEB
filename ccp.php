<?php 
include ("user/login.php");
include ("user/users.php"); //Set to Private for Login
include ("temps/head.php");
?>
<body>

<form class="body-menu">
<h1><font color='#FF0000'><p>User Info..</p></font></h1>
	<div class="dropdown1">
	<button class="dropbtn1"><i class="fa fa-server"></i></button>
	 <div  class="dropdown-content1">
	<div class="icon-bar">
  <a style="color:white" href="#"><i class="fa fa-home"></i></a> 
  <a style="color:white" href="#"><i class="fa fa-search"></i></a> 
  <a style="color:white" href="#"><i class="fa fa-envelope"></i></a> 
  <a style="color:white" href="#"><i class="fa fa-globe"></i></a>
  <a style="color:white" href="#"><i class="fa fa-trash"></i></a> 
	 </div> 
	 </div>
	 </div>

</form>	

   

<form class="box2">
<?php
	echo "<font color='#FF0000'>Hallo User: </font>".$name;
	echo "<br><font color='#FF0000'>UserID: </font>".$userid;
?>


</form>	
</body>
</html>