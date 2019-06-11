<?php 
include ("user/register.php"); 
include ("temps/head.php"); 
?>

<body>
<?php

echo '<form class="box" action="?register=1" method="post">';
echo '  <h1>Register</h1>';
echo '  <input type="Username" size="40" name="username" placeholder="Username">';
echo '  <input type="email" size="40" name="email" placeholder="Email">';
echo '  <input type="password" size="40" name="passwort" placeholder="Password">';
echo '  <input type="password" size="40" name="passwort2" placeholder="Password Repeat">';
echo '  <input type="submit" name="" value="Registrieren">';
echo '</form>';
 

?>	
</body>
</html>
