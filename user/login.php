<?php 
include ("includes/config.php"); 


 
if(isset($_GET['login'])) {
	$username = $_POST['username'];
    $passwort = $_POST['passwort'];
    
    $statement = $pdo->prepare("SELECT * FROM members WHERE username = :username");
    $result = $statement->execute(array('username' => $username));
    $user = $statement->fetch();
        
    //Überprüfung des Passworts
    if ($user !== false && password_verify($passwort, $user['passwort'])) {
        $_SESSION['userid'] = $user['id'];
		$_SESSION['name'] = $user['username'];
        //die('Login erfolgreich. Weiter zu <a href="ccp.php">internen Bereich</a>');
		echo "<h1><font color='#FF0000'>Login erfolgreich</font></h1>";
		echo '<meta http-equiv="refresh" content="2; URL=ccp.php">';
    } else {
        $errorMessage = "Benutzer oder Passwort war ungültig<br>";
    }
    
}

if(isset($errorMessage)) {
    echo $errorMessage;
}
?>
